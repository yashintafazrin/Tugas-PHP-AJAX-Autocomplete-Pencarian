<?php
//connect database
$DB_HOST = "localhost";
$DB_DATABASE = "db_starbhak";
$DB_USERNAME = "root";
$DB_PASSWORD = "";
$DB_PORT = "3306";

//create connection
$db1 = new mysqli($DB_HOST, $DB_USERNAME, $DB_PASSWORD, $DB_DATABASE, $DB_PORT);

//check connect
if($db1->connect_error) {
    die('Connection failed:' .$conn->connect_error);
}

?>
