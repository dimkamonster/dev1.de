<?php
/**
 * Created by PhpStorm.
 * User: Dmitry
 * Date: 17.12.13
 * Time: 18:43
 */
function delete_($params){
    require_once "functions.php";
    $message = "";
    if (isset($params['check'])) {
        $todelete = $params['check'];
        $sql = 'SELECT rights FROM '.mysqltable.' WHERE login ="'.$_SESSION['login'].'";';
        $result = db_query($sql);
        $row = mysql_fetch_array($result,MYSQL_BOTH);
        if ($row['rights'] != 1) {$message = $message.'<br />no such rights!';}
        else {
            $sql = array();
            foreach ($todelete as $val){
                $sql[] = 'DELETE FROM '.mysqltable.' WHERE login = "'.$val.'";';
            }
            unset($val);
            $result = db_query($sql);
            if ($result) {
                refresh_page_in_seconds(0,'list');
            } else die("Cannot delete records, because: ".mysql_error());
        }
    }
    else return $message = '<br />Nothing selected';

}

?>