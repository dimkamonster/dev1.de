<!--/**
 * Created by JetBrains PhpStorm.
 * User: Dmitry
 * Date: 18.07.13
 * Time: 12:02
 * To change this template use File | Settings | File Templates.
 */-->
    <?php
//    $registrators_names = array_keys($_POST);
//    $registrators_values = array_values($_POST);
    function validate($allSubmitted){
        require_once "functions.php";
        $message = "";
        $passwords = $allSubmitted['pword'];
        $login = trim($allSubmitted['login']);
        $email = trim($allSubmitted['email']);
//        $regexp_login = "/^([\d]|[\x41-\x5A]|[\x61-\x7A]|_)+/";

        if (strlen($login) == "") {
            $message = $message."Login must be set!<br />";
        }
        else if (check($login,0))
            $message = $message."Login must be in english, and have A-Z..a-z and _ symbols!<br />";
        if (strlen($email) == "") {
            $message = $message."E-mail must be set!<br />";
        } else
        {
            if (!check($email,1))
            {
                $message = $message.'E-mail must be like somename@domain.com<br />';
            }
        }
        if ($passwords[0] != $passwords[1]) {
            $message = $message."Passwords don't match!<br />";
        }
        if (strlen($passwords[0]) == "" && strlen($passwords[1])== "")
            $message = $message."Password must be set!<br />";
//            if (strpos($email,'@')==FALSE) {
//                $message = $message.'E-mail must be like SomeName@domain.com!<br />';
//            }
        if ($message == "") {
            $message = "OK";
        }
        return $message;
    }

    function check_existing_mysql_db($db, $link, $user, $password) {
        $result = "";
        $link1 = mysql_connect($link, $user, $password);
        if (!mysql_select_db($db, $link1))
            if (mysql_errno($link1) == 1049)
                $result = $result. mysql_errno($link1)." : " . mysql_error($link1);
        if ($result == "") $result = "OK";
        mysql_close($link1);
        return $result;
    }

    function check_existing_mysql_table($table, $db, $link, $user, $password) {
        $result = "";
        $link1 = mysql_connect($link, $user, $password);
        mysql_select_db($db,$link1);
        if (!mysql_query("SELECT * FROM ".$table, $link1)) {
            $result = $result . mysql_errno($link1) . ": " . mysql_error($link1);
        }
        if ($result == "") $result = "OK";
        return $result;
    }

    function connect_db($user = 'wfuser', $password = '12345q!', $db = 'work') { //here: connect to DB and select table;
        global $mysqlhost;
        global $mysqldb;
        $conn = mysql_connect($mysqlhost, $user, $password);
        if (!$conn)
        {
            die('Cannot connect to database:'.mysql_error());
        }
        else echo "<p>Connection to DB done! Thank you! </p>";
        mysql_select_db($db);
    }

    function check_create_db($mysqldb) {
        $userMysql = "root";
        $pwdMysql  = "root";
        $table= "users";
        $userdb = "wfuser";
        $pwdDB  = "12345q!";

    }

    function adduser(){
        $log = trim($_POST['login']);
        $eml = trim($_POST['email']);
        $login = mysql_real_escape_string($log);
        $email = mysql_real_escape_string($eml);
        $loginisset = FALSE;
        $emailisset = FALSE;
        global $smarty;
        $pwds = $_POST["pword"];
        if (validate($_POST) == "OK") {
            $sql = "SELECT login,email FROM ".mysqltable." WHERE login='".$login.
                "' OR email='".$email."';"; //check if user exist
            require_once "functions.php";
            $result = db_query($sql);
            if ($result) { //if result of query is success
                $i = 0;
                while($row = mysql_fetch_array($result,MYSQL_BOTH)) {
                    if (isset($row["login"])) {
                        $i++;
                        if (strcasecmp($row["login"],$login)==0) $loginisset=TRUE;
                            else $loginisset = FALSE;
                        if (strcasecmp($row["email"],$email)==0) $emailisset=TRUE;
                        else $emailisset = FALSE;
                    }
                }
                if ($i==0) {//user not exist, add him
                    require_once "functions.php";
                    $pwdmd5 = getpwd($_POST['login'], $_POST['email'], $pwds[0]);
                    $sql = "insert into ".mysqltable." (login, email, password, create_date) values
                    ('".$login."', '".$email."', '".$pwdmd5."', NOW());";
//                    Now adding user
                    $result = db_query($sql);
                    if ($result) {
                        if (sendmail($email,'registered',$login,$pwds[0]))
                            refresh_page_in_seconds(0,'registered');
                        else die('error while sending mail to new registered user');
                    } else die("Something wrong! ".mysql_error());
                } else { //if user exist - show warning & link back to registering page
                    if ($loginisset) $smarty->assign('loginisset',$login);
//                    echo("<br>User with name ".$login." already exist. Choose another name and try again.<br>");
                    if ($emailisset) $smarty->assign('emailisset',$email);
                    $_GET['action']='err';
//                    refresh_page_in_seconds(0,'reg_err');
//                    echo("<br>E-mail ".$email." is already in use. Choose another one and try again.<br>");
//                    echo '<input type="button" value="Back" onclick="history.back()"/>';
                }
            } else {
                echo "There's been a problem: ".mysql_error();
            }
        }
        else {
            $smarty->assign('register_error',validate($_POST));
            $_GET['action']='err';
//            refresh_page_in_seconds(0,'reg_err');
//            echo "<p> Some troubles appear:</p>";
//            echo validate($_POST);
//            echo "<p>Please, try again!</p>";
//            echo '<input type="button" value="Back" onclick="history.back()"/>';
            }
        }
    ?>