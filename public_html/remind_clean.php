<?php
/**
 * Created by PhpStorm.
 * User: Dmitry
 * Date: 02.12.13
 * Time: 10:45
 * password - 12345q!
 */
if ($argv[1] == '-p' and isset($argv[2])) {
    $password = $argv[2];
} else die("Error! You must use key -p password! \n");
$link = mysqli_connect("33.33.33.10", "wfuser", $password, "work");
if (!$link) {
    printf("Cannot connect to localhost. Error: %s\n", mysqli_connect_error());
    exit();}
$now = time();
$sql = "DELETE LOW_PRIORITY FROM remind WHERE date < $now;";
//echo $sql, "\n";
mysqli_query($link, $sql);
//echo mysqli_affected_rows($link), "\n";
if (mysqli_affected_rows($link)<0) $result = 0;
else $result = mysqli_affected_rows($link);
printf("DELETED: %d records\n", $result);
mysqli_close($link);
?>