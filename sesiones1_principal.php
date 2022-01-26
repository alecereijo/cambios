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
    <?php
$cadena_conexion = 'mysql:dbname=empresa;host=127.0.0.1';
$usuario = 'Alejandra';
$clave = 'kimberly';
try {
    $bd = new PDO($cadena_conexion, $usuario, $clave);
    echo "Conexión realizada con éxito";
    $sql = 'SELECT nombre, clave, rol FROM usuarios';
    $usuarios = $bd->query($sql);
    echo $usuarios->rowCount(). "<br>";
    foreach ($usuarios as $row) {
        print $row['nombre']. "\t";
        print $row['clave']. "\t";
    }
}
catch (PDOException $e) {
    echo "Error en la base de datos: " . $e->getMessage();
  }
 