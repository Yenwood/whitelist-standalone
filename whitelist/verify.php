<?php

include("config.php");

$uuid = $_GET["uuid"];

if(!$uuid || strlen($uuid) != 32 || preg_match('/[^abcdefghijklmnopqrstuvwxyz1234567890]/', $uuid)){
    die('{"error": "Invalid or missing UUID"}');
}

$result = $mysqli->query('SELECT * FROM `whitelist` WHERE `uuid` = \''.$uuid.'\' LIMIT 1');

if($result->num_rows() > 0){
    $row = $result->fetch_assoc();
    echo '{"username": "'.$row["username"].'", "whitelisted": true}';
}else{
    echo '{"whitelisted": false}';
}