<?php
    session_start();
    if(!isset($_SESSION['usuario'])){
        header("Location:sesiones1_login.php?redirigido=true");
    }
    ?>
    <!DOCTYPE html>
    <html>
        <head>
            <title>Pagina principal</title>
            <meta charet="UTF-8">
        </head>
        <body>
            <?php echo"Bienvenido".$_SESSION['usuario'];?>
            <br><a href="../index.php">Salir</a>
        </body>
    </html>