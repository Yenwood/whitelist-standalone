<?php

include("config.php");

$username = $_GET["username"];

// Get UUID from Mojang
$url = "https://api.mojang.com/users/profiles/minecraft/" . urlencode($username);
$content = file_get_contents($url);
$json = json_decode($content);
$uuid = $json->id;

if(!$uuid || strlen($uuid) != 32 || preg_match('/[^abcdefghijklmnopqrstuvwxyz1234567890]/', $uuid)){
    die("UUID malformed? Or incorrect username. Go back and double check.");
}

// Add UUID to the table
$result = $mysqli->query('INSERT INTO `whitelist` (uuid) VALUES ('.$uuid.')');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Whitelisting Tool</title>
        
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    </head>
    <body>
        <div class="center-block text-center" style="width: 500px; position: relative; top: 250px;">
            <strong>Minecraft Whitelisting tool</strong><br>
            <p>
                Successfully whitelisted! You'll be redirected back to the index in a few seconds. Click <a href="index.php">here</a> if that doesn't happen.
            </p>
        </div>
        
        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        
        <!-- Bootstrap -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <script>
            setTimeout(function(){
                document.location = "index.php";
            }, 3000);
        </script>
    </body>
</html>
