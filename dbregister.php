<?php
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];    
    $tarjetNumber=$_POST['tarjetNumber'];
    $birtday=$_POST['birtday'];
    include('db.php');
    $consulta="INSERT INTO `users` (`id`, `name`, `email`, `password`, `tarjetNumber`, `birtday`) 
    VALUES (NULL, '$name', '$email', '$password', '$tarjetNumber', '$birtday');";
    $resultado=mysqli_query($conexion,$consulta);
    if($resultado){
        header("location:dashboard.php");
    }
    else{
        ?>
        <?php
        include("registro.php");
        ?>
        <script>
            var error =document.getElementById('error_de_autenti');
            error.style.display="block";

        </script>
        <?php
    }
    mysqli_free_result($resultado);
    mysqli_close($conexion);
