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
                To get access to this server, you're going to have to whitelist for it!<br>
                Enter your Minecraft username here and then click the button:
            </p>
            <form action="whitelist.php" method="get">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xs-8">
                            <input type="text" name="username" class="form-control" placeholder="Username" value="">
                        </div>
                        <div class="col-xs-4">
                            <button id="grab_uuid" class="btn btn-primary form-control" type="submit">Whitelist me!</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        
        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        
        <!-- Bootstrap -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>
