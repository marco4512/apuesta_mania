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
                <h3>id_apuesta</h3>
                <h3>nombre_usuario</h3>
                <h3>tarjeta</h3>
                <h3>Categoria</h3>
                <h3>opcion</h3>
                <h3>cantidad</h3>
                <h3>status_apuesta</h3>

                </div>
                ";
                $consulta = "SELECT apuestas.id,apuestas.id_user, 
                                    users.name,users.tarjetNumber, categoria_juegos.id_categorias, 
                                    categoria_juegos.nombre_categoria, opciones_de_apuesta.id_opciones, 
                                    opciones_de_apuesta.nombre_opcion, apuestas.cantidad_apostada, 
                                    apuestas.status_apuesta
                                    FROM `apuestas` INNER JOIN users on users.id_user=apuestas.id_user
                                    INNER JOIN categoria_juegos on categoria_juegos.id_categorias=apuestas.id_categoria 
                                    INNER JOIN opciones_de_apuesta on opciones_de_apuesta.id_opciones=apuestas.id_opcion_apuesta";
                $resultado = mysqli_query($conexion, $consulta);
                
                while($row = mysqli_fetch_array($resultado)){
                $id_apuesta=$row['id'];
                $nombre_usuario=$row['name'];
                $Categoria=$row['nombre_categoria'];
                $opcion=$row['nombre_opcion'];
                $cantidad=$row['cantidad_apostada'];
                $status_apuesta=$row['status_apuesta'];
                $tarjeta=$row['tarjetNumber'];
                echo " 
                <form action='../db/editar_apuesta.php' method='POST'>
                    <div class='titulos_tablas'>
                        <input style=' font-size: 18px; text-align: center;' readonly class='input-field' name='id_apuesta' type='numeric' value='$id_apuesta'>
                        <input style=' font-size: 18px; text-align: center;' readonly class='input-field' name='nombre_usuario' type='text' value='$nombre_usuario'>
                        <input style=' font-size: 18px; text-align: center;' readonly class='input-field' name='tarjeta' type='text' value='$tarjeta'>
                        <input style=' font-size: 18px; text-align: center;' readonly class='input-field' name='Categoria' type='text' value='$Categoria'>
                        <input style=' font-size: 18px; text-align: center;' readonly class='input-field' name='opcion' type='text' value='$opcion'>
                        <input style=' font-size: 18px; text-align: center;' readonly class='input-field' name='cantidad' type='numeric' value='$cantidad'>
                        <select style=' font-size: 18px; text-align: center;' name='status_apuesta'>
                            <option selected='true' disabled='disabled'>$status_apuesta</option>
                            <option value='Se gano'>Se gano</option>
                            <option value='Se perdió'>Se perdió</option>
                        </select>
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