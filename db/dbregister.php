<?php
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];    
    $tarjetNumber=$_POST['tarjetNumber'];
    $birtday=$_POST['birtday'];
    include('db.php');
    $consulta="INSERT INTO `users` (`id_user`, `name`, `email`, `password`, `tarjetNumber`, `birtday`) 
    VALUES (NULL, '$name', '$email', '$password', '$tarjetNumber', '$birtday');";
    //echo $consulta;
    try{    
    $resultado=mysqli_query($conexion,$consulta);
    if($resultado){
        echo "todo bien";
        header("location:../vistas/dashboard.php");
    }
    else{
        ?>
        <?php
        include("../vistas/registro.php");
        ?>
        <script>
            var error =document.getElementById('error_de_autenti');
            error.style.display="block";

        </script>
        <?php
    }
    mysqli_free_result($resultado);
    mysqli_close($conexion);
    }catch(Exception $e){
        echo $e;
    }
