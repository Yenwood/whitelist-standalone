<?php

$config["mysql_host"] = ""; // The database's host. Normally localhost.
$config["mysql_database"] = ""; // The name of the database you created.
$config["mysql_user_name"] = ""; // The name of the user you created.
$config["mysql_user_password"] = ""; // The password of the user you created.

$config["complete"] = false; // Set this to true.

// Ignore the rest of this
$mysqli = new mysqli($config["mysql_host"], $config["mysql_user_name"], $config["mysql_user_password"], $config["mysql_database"]);
if($mysqli->connect_errno){
    echo "Failed to connect to MySQL: (".$mysqli->connect_errno.") ".$mysqli->connect_error;
}

// Check if the config file is filled out. Die if not
if(!$config["complete"]){
    die("config.php isn't complete!");
}