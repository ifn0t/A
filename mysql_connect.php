<?php
$mysqli = new mysqli('localhost','jo119391','$Le8feart8','jo119391');         

if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

//dont need to select (already selected when connecting)
//$mysqli->select_db('jo119391');


?>

