<?php

$DB_host = "localhost";
$DB_user = "root";
$DB_pass = "";
$DB_name = "contacts_sample";

$connect = new mysqli($DB_host, $DB_user, $DB_pass, $DB_name); 
 
// check connection 
if($connect->connect_error) {
    die("connection failed : " . $connect->connect_error);
} else {
    // echo "Successfully Connected";
}
?>