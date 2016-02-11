<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">           
        <script type="text/javascript" src="Recursos/js/send_request.js"></script>
        <script type="text/javascript" src="Recursos/jquery/jquery-1.9.1.js"></script>
        <script type="text/javascript" src="Recursos/js/gestionLoguin.js"></script>
        <title></title>
    </head>
    <body>
                
        <?php
        session_start();

        if (isset($_GET['msjloguin'])) {            
            echo $_GET['msjloguin'];
        }

        if (isset($_SESSION["user"])) {
            include("Vista/masterPage.php");
        } else {
            include("Vista/loguin.php");
        }
        ?>
                            
    </body>
</html>
