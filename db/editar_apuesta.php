<?php
    $id_apuesta=$_POST['id_apuesta'];
    $status=$_POST['status_apuesta'];
    include('db.php');
    $consulta="UPDATE `apuestas` SET `status_apuesta` = '$status' WHERE `apuestas`.`id` = $id_apuesta";
    $resultado=mysqli_query($conexion,$consulta);
    if($resultado){
        header("location:../vistas/dash_admin.php");
    }
    mysqli_free_result($resultado);
    mysqli_close($conexion);
?>