<?php

// Hello! This is the install.php file, which will install the table that will be used during the whitelisting process.
// It's recommended after you finish the install process to delete this file.

// Make a MySQL database and a user that has permissions for SELECT, INSERT and CREATE
// Put the MySQL database and user information in config.php

// That's all. You can ignore the rest of this (it'll set up the table for you) and run the install.php file now.
// After you finish, you can delete this file.

include("config.php");

// Create the table
$mysqli->query("CREATE TABLE whitelist (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    uuid VARCHAR(255) NOT NULL
)");

