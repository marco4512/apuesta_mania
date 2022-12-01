<!DOCTYPE html>
<html lang="en">

<head>
    <script type="js/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../style.css" media="screen" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dasboard</title>
</head>

<body>
    <div class="nav2">
        <a href="dash_admin.php">Apuestas</a>
        <a href="dash_admin_casino.php">Casino</a>
        <a href="dash_admin_foot.php">FootBall</a>
        <a href="dash_admin_americano.php">Americano</a>
        <a href="dash_admin_baloncesto.php">Baloncesto</a>
    </div>
    <div class="contenido_principal">

        <div class="dashboard2">
            <?php
            session_start();
            $email = $_SESSION['email'];
            $pass = $_SESSION['pass'];
            include('../db/db.php');
            $consulta = "SELECT users.email,users.password,users.name FROM `admins` INNER JOIN users
            on admins.id_user=users.id_user 
            WHERE users.email='$email' and users.password='$pass'";
            $resultado = mysqli_query($conexion, $consulta);
            $row = $resultado->fetch_array(MYSQLI_ASSOC);
            if ($row['email']) {
                echo"<div class='panel_ad1'>
                <h1>¡Bienvenido de nuevo ".ucfirst($row['name'])."!</h1>
                <hr>
                <div class='titulos_tablas'>
                <h3>id_opciones</h3>
                <h3>nombre_opcion</h3>
                <h3>catidad_minima</h3>
                <h3>id_categoria</h3>
                <h3>url_imagen</h3>
                </div>
                ";
                $consulta = "SELECT * FROM `opciones_de_apuesta` WHERE `id_categoria`=2";
                $resultado = mysqli_query($conexion, $consulta);
                while($row = mysqli_fetch_array($resultado)){
                $id_opciones=$row['id_opciones'];
                $nombre_opcion=$row['nombre_opcion'];
                $catidad_minima=$row['catidad_minima'];
                $id_categoria=$row['id_categoria'];
                $url_imagen=$row['url_imagen'];
                echo " 
                <form action='../db/editar_foot.php' method='POST'>
                    <div class='titulos_tablas'>
                        <input style=' font-size: 18px; text-align: center;' readonly class='input-field' name='id_opciones' type='numeric' value='$id_opciones'>
                        <input style=' font-size: 18px; text-align: center;'  class='input-field' name='nombre_opcion' type='text' value='$nombre_opcion'>
                        <input style=' font-size: 18px; text-align: center;'  class='input-field' name='catidad_minima' type='text' value='$catidad_minima'>
                        <input style=' font-size: 18px; text-align: center;'  class='input-field' name='id_categoria' type='text' value='$id_categoria'>
                        <input style=' font-size: 18px; text-align: center;'  class='input-field' name='url_imagen' type='text' value='$url_imagen'>
                        <input type='submit' value='editar'></button>
                    </div>
                </form>";
                }
                echo"</div>";
            } else {
                echo "<h1>No estas autorizado</h1>";
            }

             mysqli_free_result($resultado);
             mysqli_close($conexion);
             ?>
           
        </div>
        <script src="JavaScript/Carrusel.js"></script>


</body>

</html>