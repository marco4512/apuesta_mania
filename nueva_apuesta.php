<?php
session_start();

$email = $_POST['email'];
$contraseña = $_POST['password'];
$tarjeta= $_POST['tarjeta'];
$cantidad =$_POST['cantidad'];
$nombre_cate=$_POST['nom_cat'];
$nombre_juego=$_POST['nombre_juego'];

include('db.php');
$consulta = "SELECT * FROM `users`WHERE `email`='$email'
    AND `password`='$contraseña ' AND `tarjetNumber`='$tarjeta'";

$resultado = mysqli_query($conexion, $consulta);
$row = $resultado->fetch_array(MYSQLI_ASSOC);
$id_usuario = $row ['id_user'];

$filas = mysqli_num_rows($resultado);

if ($filas) {
    $consulta2 ="INSERT INTO `apuestas` (`id`, `id_user`, `id_categoria`, `id_opcion_apuesta`, `cantidad_apostada`, `status_apuesta`) VALUES (NULL, '$id_usuario', '$nombre_cate', '$nombre_juego', '$cantidad', NULL);";
    $resultado2 = mysqli_query($conexion, $consulta2);
    header("location:das_valido.php?juego=$nombre_juego&cat=$nombre_cate");
} else {
    header("location:das_no_valido.php?juego=$nombre_juego&cat=$nombre_cate");
}
mysqli_free_result($resultado);
mysqli_close($conexion);

?>
