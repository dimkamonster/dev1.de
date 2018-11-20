<?php
/**
 * Created by PhpStorm.
 * User: Dmitry
 * Date: 11.11.13
 * Time: 14:15
 */
function check($str, $mode) { //check if login match to 0-9A-Z-a-z_ pattern. TRUE - match, False - don't match
    $regexp_login = "/[^0-9a-z_]/i";
    $regexp_email = "/[0-9a-z_]+@[0-9a-z_^\.]+\.[a-z]{2,3}/i";
    if ($mode == 0)
        $result = preg_match($regexp_login,$str);
    else if ($mode == 1)
        $result = preg_match($regexp_email,$str);
    else $result = "err";
    return $result;
}

function refresh_page_in_seconds($seconds = '0',$params=''){
    $url = '<meta http-equiv="refresh" content="'.$seconds.'; url=index.php';
    if ($params!='')
        $url = $url.'?action='.$params;
    $url = $url.'">';
    echo $url;
}

/* send mail:
 * $param:
 * 0 - after register. send login and password
 * 1 - send restore link
 *
 *
 *
 * */
function sendmail($email,$param,$login=null,$pwd=null,$date=null) {
    $n = "\n";
    switch ($param) {
        case 'registered':
            $subj  = 'Thanks for registration!';
            $text  = 'Hello!'.$n;
            $text .= 'You successfully register in dev.dev!'.$n;
            $text .= 'Site adress: http://dev.dev/'.$n;
            $text .= 'Registration data:'.$n;
            $text .= '---------------------------'.$n;
            $text .= 'Login:    '.$login.$n;
            $text .= 'Password: '.$pwd.$n;
            $text .= 'E-mail:   '.$email.$n;
            $text .= 'Registration date: '.date("m.d.y").$n;
            $text .= '---------------------------'.$n;
            break;
        case 'resetlink':
            $subj  = 'Password reset';
            $text  = 'Hello!'.$n;
            $text .= 'You have requested a password change!'.$n;
            $text .= 'Site adress: http://dev.dev/'.$n;
            $text .= '---------------------------'.$n;
            $text .= 'Login:    '.$login.$n;
            $text .= 'Password reset link: '.$pwd.$n;
            $text .= '---------------------------'.$n;
            $text .= 'Note! Password reset link will be avaliable till '.date("Y-m-d H:i:s",$date).$n;
            break;
        case 'resetpwd':
            $subj  = 'You change password!';
            $text  = 'Hello!'.$n;
            $text .= 'You successfully change your password in dev.dev!'.$n;
            $text .= 'Site adress: http://dev.dev/'.$n;
            $text .= 'New data:'.$n;
            $text .= '---------------------------'.$n;
            $text .= 'Login:    '.$login.$n;
            $text .= 'Password: '.$pwd.$n;
            $text .= 'E-mail:   '.$email.$n;
            $text .= '---------------------------'.$n;
            break;
    }

    $result = mail($email,$subj,$text);
    return $result;


}

function logout(){
    unset($_SESSION['login']);
    session_destroy();
    refresh_page_in_seconds();
}

function getpwd($login, $email, $pword) {
//$password = $_POST['pword'];
//if (is_array($password)) $pwd = $password[0];
//else $pwd = $password;
    $salt = md5(strtolower(trim($login))).md5(strtolower(trim($email)))."\n\1\6#13";
    $result = md5(md5($pword).$salt);
    return $result;
}

function db_query($sql) {
    //connect to db
    $conn = mysqli_connect(mysqlhost,mysqlusername,mysqlpassword, mysqldb);
    if (!$conn)
    {
        echo("<br>");
        die('Cannot connect to database:'.mysqli_error());
    }
    else{
//            echo("<br>Connectiion established!");
        //mysqli::select_db(mysqldb);
    }
    //connecting to db done
    //query
    if (is_array($sql)) {
        $result = array();
        $i=0;
        foreach ($sql as $val) {
            $result[$i][0] = $val;
            $result[$i][1] = mysqli_query($conn,$val); //$conn->query($val);// mysqli::query($val);
            $i++;
        }
        unset($val);
    } else {
        $result =  mysqli_query($conn,$sql);// $conn->query($sql);//mysqli::query($sql);
    }
    mysqli_close($conn); //$conn->close();// mysqli::close();
    return $result;
}

?>