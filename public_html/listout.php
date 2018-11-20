<?php //action=users
/**
 * Created by PhpStorm.
 * User: Dmitry
 * Date: 01.11.13
 * Time: 18:26
 */

/**
 * parse from GET or POST:
 * $onpagelimit - limit of records to write on page, for DB - offset. Receive from page
 * $page - number of page. Receive from page;
 * $start_offset - start of page offset. Is ($page * $onpagelimit) - $onpagelimit
 * $end_offset - end of page offset.. I think - not usable + $onpagelimit
 * $orderby - orders by column (define as ). Receive from page (values: 1=user, 2=email, 3=create date)
 * $direction - 0 - direct, 1 - back order. Receive from page.
 */

function setlink($column,$order,$direction,$page,$onpagelimit){
    if ($order == $column) {
        if ($direction == "0") {
            $direction = "1";
            $result = "&page=".$page."&orderby=".$column."&direction=".$direction."&onpagelimit=".$onpagelimit;
        }
        else {
            $direction = "0";
            $result = "&page=".$page."&orderby=".$column."&direction=".$direction."&onpagelimit=".$onpagelimit;
        }
    } else $result = "&page=".$page."&orderby=".$column."&direction=".$direction."&onpagelimit=".$onpagelimit;
    return $result;
}

function getparams($param, $def_value){
    if (isset($param)) {
        if (in_array($param, $def_value)) {
            $result = $param;
        }
    }
    return $result;
}

function setlistoutparams() {
    if (isset($_GET['page'])) {
        if (is_numeric($_GET['page'])) {
            if ($_GET['page']<=$page_count) $page = intval($_GET['page']);
        }
    }
    if (isset($_GET['orderby'])) {
        if (in_array($_GET['orderby'], $def_orderby)) {
            $orderby = $_GET['orderby'];
        }
    }
    if (isset($_GET['direction'])) {
        if (in_array($_GET['direction'], $def_direction)) {
            $direction = $_GET['direction'];
        }
    }
    if (isset($_GET['onpagelimit'])) {
        if (in_array($_GET['onpagelimit'],$def_onpagelimit)) {
            $onpagelimit = $_GET['onpagelimit'];
        }
    }
}

function listout($page=1,$orderby = "login",$direction = "0",$onpagelimit = 20){
    global $smarty;
    $ref = array();
    $def_orderby = array("login","email","date"); //first column, second, third
    $def_direction = array("0","1"); //0 - direct order, 1 - back order
    $def_onpagelimit = array(2, 20, 50, 100, 200); //records on the page
    require_once "functions.php";
    $sql = "SELECT login,email,create_date FROM ".mysqltable.";";
    $result = db_query($sql);
    if ($result) {
        $row_count = mysqli_num_rows($result);
    }
    else {
        die ("There's been a problem: ".mysql_error());
    }

    //check params & set to def if not in range
    if (isset($_GET['onpagelimit'])) {
        if (in_array($_GET['onpagelimit'],$def_onpagelimit)) {
            $onpagelimit = $_GET['onpagelimit'];
        }
    }
    $page_count = ceil($row_count/$onpagelimit);
    if (isset($_GET['page'])) {
        if (is_numeric($_GET['page'])) {
            if ($_GET['page']<=$page_count) {
                $page = intval($_GET['page']);}
        }
    }
    if (isset($_GET['orderby'])) {
        if (in_array($_GET['orderby'], $def_orderby)) {
            $orderby = $_GET['orderby'];
        }
    }
    if (isset($_GET['direction'])) {
        if (in_array($_GET['direction'], $def_direction)) {
            $direction = $_GET['direction'];
        }
    }
    $start_offset = ($page * $onpagelimit) - $onpagelimit;
    //make SQL string
//    sql = select login,email,create_date FROM users ORDER BY login ASC LIMIT start_offset, onpagelimit;
    if ($orderby =='date') $order = 'create_date';
    else $order = $orderby;
    $sql = "SELECT login,email,create_date FROM ".mysqltable." ORDER BY ".$order." ";
    if ($direction == "0") {
        $sql = $sql."ASC LIMIT ";
    }
    if ($direction == "1") {
        $sql = $sql."DESC LIMIT ";
    }
    $sql = $sql.$start_offset.", ".$onpagelimit.";";
    $ref['direction'] = $direction;
    $result = db_query($sql);
    while($row = mysqli_fetch_array($result,MYSQLI_BOTH)) {
        $table[]=$row;
    }
// send to smarty values of parameters to make proper table
//    $table = array_reverse($tmp);
    $ref['login'] = setlink('login',$orderby,$direction,$page,$onpagelimit);
    $ref['email'] = setlink('email',$orderby,$direction,$page,$onpagelimit);
    $ref['date'] = setlink('date',$orderby,$direction,$page,$onpagelimit);
    $ref['page'] = $page;
    $ref['orderby'] = $orderby;
    $ref['direction'] = $direction;
    $ref['def_onpagelimit'] = $def_onpagelimit;
    $ref['onpagelimit'] = $onpagelimit;
    $ref['pagecount'] = $page_count;
    $smarty->assign('table',$table);
    $smarty->assign('ref',$ref);
}

?>










