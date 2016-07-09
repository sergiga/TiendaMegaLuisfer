<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>Ejemplo PHP MySQLi POO MVC</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <style>
            input{
                margin-top:5px;
                margin-bottom:5px;
            }
            .right{
                float:right;
            }
        </style>
    </head>
    <body>
        <form action="<?php echo $helper->url("login","procesarLogin"); ?>" method="post" class="col-lg-5">
            <h3>Login</h3>
            <hr/>
            Usuario: <input type="text" name="username" class="form-control"/>
            Contraseña: <input type="text" name="password" class="form-control"/>
            <input type="submit" value="login" class="btn btn-success"/>
        </form>
        <footer class="col-lg-12">
            <hr/>
           Tienda MegaLuisfer - Alejandro Alonso y Sergio Garc&iacute;a
        </footer>
    </body>
</html>
