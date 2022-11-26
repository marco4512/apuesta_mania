<?php
    $email=$_POST['email'];
    $contraseña=$_POST['password'];
    session_start();
    $_SESSION['email']=$email;
    include('db.php');
    $consulta="SELECT * FROM `users` where email='$email' and password='$contraseña'";
    $resultado=mysqli_query($conexion,$consulta);
    $filas =mysqli_num_rows($resultado);
    if($filas){
        header("location:dashboard.php");
    }
    else{
        ?>
        <?php
        include("IniciarSecion.php");
        ?>
        <script>
            var error =document.getElementById('error_de_autenti');
            error.style.display="block";

        </script>
        <?php
    }
    mysqli_free_result($resultado);
    mysqli_close($conexion);
