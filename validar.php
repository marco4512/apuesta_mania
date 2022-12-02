<?php
$email = $_POST['email'];
$contraseña = $_POST['password'];
if (strlen($email) !== 0 && strlen($contraseña !== 0)) {
    include('input_validation.php');
    $email = input_validation($email);
    $contraseña = input_validation($contraseña);

    if ($email !== false || $contraseña !== false) {

        session_start();
        $_SESSION['email'] = $email;
        $_SESSION['pass'] = $contraseña;
        include('db.php');
        $consulta = "SELECT * FROM `users` where email='$email' and password='$contraseña'";
        $resultado = mysqli_query($conexion, $consulta);
        $filas = mysqli_num_rows($resultado);
        if ($filas) {
            $row = $resultado->fetch_array(MYSQLI_ASSOC);
            $_SESSION['consulta'] = $row['name'];
            $_SESSION['id'] = $row['id_user'];
            $idd = $_SESSION['id'];
            $consulta2 = "SELECT * FROM `admins` WHERE `id_user`='$idd';";
            $resultado2 = mysqli_query($conexion, $consulta2);
            $filas2 = mysqli_num_rows($resultado2);
            if ($filas2) {
                header("location:../vistas/dash_admin.php");
            } else {
                header("location:../vistas/dashboard.php");
            }
        } else {
?>
            <?php

            include("../vistas/IniciarSecion.php");
            ?>
            <script>
                var error = document.getElementById('error_de_autenti');
                error.style.display = "block";
            </script>
    <?php
        }
        mysqli_free_result($resultado);
        mysqli_close($conexion);
    }
    else{
        include("../vistas/IniciarSecion.php");
        ?>
        <script>
            var error = document.getElementById('error_de_autenti');
            error.style.display = "block";
        </script>
    <?php
    }
} else {
    include("../vistas/IniciarSecion.php");
    ?>
    <script>
        var error = document.getElementById('error_de_autenti');
        error.style.display = "block";
    </script>
<?php
    //echo ("esta vacio");
}
