<?php
    $id_opciones=$_POST['id_opciones'];
    $nombre_opcion=$_POST['nombre_opcion'];
    $catidad_minima=$_POST['catidad_minima'];
    $id_categoria=$_POST['id_categoria'];
    $url_imagen=$_POST['url_imagen'];

    include('db.php');
    $consulta="UPDATE `opciones_de_apuesta` 
             SET `nombre_opcion` = '$nombre_opcion', 
             `catidad_minima` = '$catidad_minima', 
             `url_imagen` = '$url_imagen' 
             WHERE `opciones_de_apuesta`.`id_opciones` = $id_opciones;";
    $resultado=mysqli_query($conexion,$consulta);
    if($resultado){
        header("location:dash_admin_foot.php");
    }
    mysqli_free_result($resultado);
    mysqli_close($conexion);
?>