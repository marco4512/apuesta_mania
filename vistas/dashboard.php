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
        <object data="../images/Group 1.svg"></object>
        <a href="dashboard.php#Casino">Casino</a>
        <a href="dashboard.php#Fotball">FootBall</a>
        <a href="dashboard.php#Americano">Americano</a>
        <a href="dashboard.php#Baloncesto">Baloncesto</a>
    </div>

    <div class="contenido_principal">
        <div class="dashboard">
            <diV class="contenido_apuestas">
                <?php
                session_start();
                $email = $_SESSION['email'];
                echo "<h1>Aqui tus apuestas " . ucfirst($_SESSION['consulta']) . "</h1>";
                ?>
                <div class="apuestas">
                    <a href="../vistas/dashboard.php#apuestas_football" style="color:white;">
                        <div class="item item--1">
                            <svg width="34" height="32" viewBox="0 0 34 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17 31.8332C14.7223 31.8332 12.5695 31.4175 10.5417 30.5863C8.51393 29.755 6.7431 28.6203 5.22921 27.1821C3.71532 25.7439 2.52087 24.0616 1.64587 22.1353C0.770874 20.2089 0.333374 18.1637 0.333374 15.9998C0.333374 13.8096 0.770874 11.7578 1.64587 9.84463C2.52087 7.93143 3.71532 6.25574 5.22921 4.81755C6.7431 3.37935 8.51393 2.24463 10.5417 1.41338C12.5695 0.582129 14.7223 0.166504 17 0.166504C19.3056 0.166504 21.4653 0.582129 23.4792 1.41338C25.4931 2.24463 27.257 3.37935 28.7709 4.81755C30.2848 6.25574 31.4792 7.93143 32.3542 9.84463C33.2292 11.7578 33.6667 13.8096 33.6667 15.9998C33.6667 18.1637 33.2292 20.2089 32.3542 22.1353C31.4792 24.0616 30.2848 25.7439 28.7709 27.1821C27.257 28.6203 25.4931 29.755 23.4792 30.5863C21.4653 31.4175 19.3056 31.8332 17 31.8332ZM25.5417 12.3186L28.4167 11.3686L29.1667 8.83525C28.2223 7.43664 27.0556 6.24255 25.6667 5.25296C24.2778 4.26338 22.7084 3.5047 20.9584 2.97692L18.25 4.679V7.44984L25.5417 12.3186ZM8.50004 12.3186L15.75 7.44984V4.679L13.0834 2.97692C11.3334 3.5047 9.76393 4.26338 8.37504 5.25296C6.98615 6.24255 5.81948 7.43664 4.87504 8.83525L5.79171 11.3686L8.50004 12.3186ZM6.25004 24.9853L8.75004 24.7082L10.375 22.1353L7.79171 14.5748L4.83337 13.6248L2.83337 15.1686C2.83337 17.0686 3.0556 18.8037 3.50004 20.3738C3.94449 21.9439 4.86115 23.4811 6.25004 24.9853V24.9853ZM17 29.4582C17.75 29.4582 18.507 29.3922 19.2709 29.2603C20.0348 29.1283 20.8334 28.9568 21.6667 28.7457L23.0417 25.8957L21.7084 23.7186H12.3334L11 25.8957L12.375 28.7457C13.0973 28.9568 13.8612 29.1283 14.6667 29.2603C15.4723 29.3922 16.25 29.4582 17 29.4582ZM12.5834 21.3436H21.25L23.7917 14.0998L17 9.46859L10.0834 14.0998L12.5834 21.3436ZM27.7917 24.9853C29.1528 23.4811 30.0556 21.9439 30.5 20.3738C30.9445 18.8037 31.1667 17.0686 31.1667 15.1686L29.1667 13.8623L26.25 14.5748L23.6667 22.1353L25.25 24.7082L27.7917 24.9853Z" fill="white" />
                            </svg>
                            <?php
                          
                            $id = $_SESSION['id'];
                            include('../db/db.php');
                            $consulta = "SELECT sum(`cantidad_apostada`) FROM `apuestas` WHERE `id_user`=$id and `id_categoria`=2 and `status_apuesta`='Se gano'";
                            $resultado = mysqli_query($conexion, $consulta);
                            $row = $resultado->fetch_array(MYSQLI_ASSOC);
                            $cantidad= $row ['sum(`cantidad_apostada`)'];
                            if($cantidad){
                            echo "<span class='quantity'> $".$cantidad." </span>";
                            }
                            else{
                                echo "<span class='quantity'> $0.00 </span>";
                            }
                            mysqli_free_result($resultado);
                            mysqli_close($conexion);
                            ?>
                            <span class="text text--1" style="color:white;">FootBall</span>
                        </div>
                    </a>
                    <div class="item item--2">
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.6854 26.6771L3.28333 19.275C3.07222 20.3833 2.99306 21.6566 3.04583 23.0948C3.09861 24.533 3.23056 25.6347 3.44167 26.4C4.20694 26.6111 5.32847 26.7628 6.80625 26.8552C8.28403 26.9476 9.57708 26.8882 10.6854 26.6771V26.6771ZM13.6146 26.2417C15.2507 25.925 16.7878 25.3972 18.226 24.6583C19.6642 23.9194 20.9111 23.0222 21.9667 21.9667C22.9958 20.9375 23.8733 19.7302 24.599 18.3448C25.3247 16.9594 25.8722 15.3826 26.2417 13.6146L16.3854 3.75833C14.7229 4.12778 13.1726 4.67535 11.7344 5.40104C10.2962 6.12674 9.0625 7.00417 8.03333 8.03333C7.00417 9.0625 6.13993 10.2962 5.44063 11.7344C4.74132 13.1726 4.18056 14.7229 3.75833 16.3854L13.6146 26.2417ZM10.5667 21.0958L8.90417 19.4333L19.4333 8.90417L21.0958 10.5667L10.5667 21.0958ZM26.7167 10.725C26.9278 9.61667 27.0069 8.3434 26.9542 6.90521C26.9014 5.46701 26.7694 4.36528 26.5583 3.6C25.7931 3.38889 24.6715 3.23715 23.1937 3.14479C21.716 3.05243 20.4229 3.11181 19.3146 3.32292L26.7167 10.725ZM7.71667 29.25C6.29167 29.25 5.0184 29.151 3.89688 28.9531C2.77535 28.7552 2.06944 28.5111 1.77917 28.2208C1.48889 27.9306 1.24479 27.2247 1.04688 26.1031C0.848958 24.9816 0.75 23.7083 0.75 22.2833C0.75 18.9847 1.225 15.917 2.175 13.0802C3.125 10.2434 4.47083 7.95417 6.2125 6.2125C7.95417 4.47083 10.2434 3.125 13.0802 2.175C15.917 1.225 18.9847 0.75 22.2833 0.75C23.7083 0.75 24.9816 0.848958 26.1031 1.04688C27.2247 1.24479 27.9306 1.48889 28.2208 1.77917C28.5111 2.06944 28.7552 2.77535 28.9531 3.89688C29.151 5.0184 29.25 6.29167 29.25 7.71667C29.25 11.0153 28.775 14.083 27.825 16.9198C26.875 19.7566 25.5292 22.0458 23.7875 23.7875C22.0458 25.5292 19.7566 26.875 16.9198 27.825C14.083 28.775 11.0153 29.25 7.71667 29.25Z" fill="white" />
                        </svg>

                        <?php
                        
                            $id = $_SESSION['id'];
                            include('../db/db.php');
                            $consulta = "SELECT sum(`cantidad_apostada`) FROM `apuestas` WHERE `id_user`=$id and `id_categoria`=4 and `status_apuesta`='Se gano'";
                            $resultado = mysqli_query($conexion, $consulta);
                            $row = $resultado->fetch_array(MYSQLI_ASSOC);
                            $cantidad= $row ['sum(`cantidad_apostada`)'];
                            if($cantidad){
                            echo "<span class='quantity'> $".$cantidad." </span>";
                            }
                            else{
                                echo "<span class='quantity'> $0.00 </span>";
                            }
                            mysqli_free_result($resultado);
                            mysqli_close($conexion);
                            ?>
                        <span class="text text--2" style="color:white;">Americano</span>
                    </div>
                    <div class="item item--3">
                        <svg width="32" height="31" viewBox="0 0 32 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.41458 14.2604H7.8375C7.65278 13.0271 7.28333 11.8644 6.72917 10.7724C6.175 9.68038 5.48889 8.73611 4.67083 7.93958C4.06389 8.83889 3.54931 9.81528 3.12708 10.8688C2.70486 11.9222 2.46736 13.0528 2.41458 14.2604V14.2604ZM23.8292 14.2604H29.2521C29.1993 13.0528 28.9618 11.9222 28.5396 10.8688C28.1174 9.81528 27.6028 8.83889 26.9958 7.93958C26.0986 8.81319 25.3927 9.77674 24.8781 10.8302C24.3635 11.8837 24.0139 13.0271 23.8292 14.2604ZM4.67083 22.8552C5.56805 21.9816 6.27396 21.0245 6.78854 19.9839C7.30312 18.9432 7.65278 17.8062 7.8375 16.5729H2.41458C2.46736 17.7806 2.70486 18.9047 3.12708 19.9453C3.54931 20.9859 4.06389 21.9559 4.67083 22.8552ZM26.9958 22.8552C27.6028 21.9559 28.1174 20.9859 28.5396 19.9453C28.9618 18.9047 29.1993 17.7806 29.2521 16.5729H23.8292C24.0139 17.8062 24.3635 18.9432 24.8781 19.9839C25.3927 21.0245 26.0986 21.9816 26.9958 22.8552ZM10.2521 14.2604H14.6458V2.35104C13.0097 2.5309 11.4858 2.94201 10.074 3.58437C8.66215 4.22674 7.38889 5.0875 6.25417 6.16667C7.33611 7.22014 8.22014 8.44062 8.90625 9.82812C9.59236 11.2156 10.041 12.6931 10.2521 14.2604ZM17.0208 14.2604H21.4146C21.6257 12.6931 22.0809 11.2156 22.7802 9.82812C23.4795 8.44062 24.3701 7.22014 25.4521 6.16667C24.3174 5.0875 23.0375 4.22674 21.6125 3.58437C20.1875 2.94201 18.6569 2.5309 17.0208 2.35104V14.2604ZM14.6458 28.4823V16.5729H10.2521C10.041 18.1403 9.59236 19.6113 8.90625 20.9859C8.22014 22.3606 7.33611 23.5747 6.25417 24.6281C7.38889 25.7073 8.62917 26.5745 9.975 27.2297C11.3208 27.8849 12.8778 28.3024 14.6458 28.4823ZM17.0208 28.4823C18.7889 28.3024 20.3524 27.8849 21.7115 27.2297C23.0705 26.5745 24.3174 25.7073 25.4521 24.6281C24.3701 23.5747 23.4795 22.3606 22.7802 20.9859C22.0809 19.6113 21.6257 18.1403 21.4146 16.5729H17.0208V28.4823ZM15.8333 30.8333C13.6431 30.8333 11.5847 30.4286 9.65833 29.6193C7.73194 28.8099 6.05625 27.7115 4.63125 26.324C3.20625 24.9365 2.07812 23.3049 1.24687 21.4292C0.415625 19.5535 0 17.5493 0 15.4167C0 13.284 0.415625 11.2799 1.24687 9.40417C2.07812 7.52847 3.20625 5.89688 4.63125 4.50938C6.05625 3.12188 7.73194 2.02344 9.65833 1.21406C11.5847 0.404687 13.6431 0 15.8333 0C18.0236 0 20.0819 0.404687 22.0083 1.21406C23.9347 2.02344 25.6104 3.12188 27.0354 4.50938C28.4604 5.89688 29.5885 7.52847 30.4198 9.40417C31.251 11.2799 31.6667 13.284 31.6667 15.4167C31.6667 17.5493 31.251 19.5535 30.4198 21.4292C29.5885 23.3049 28.4604 24.9365 27.0354 26.324C25.6104 27.7115 23.9347 28.8099 22.0083 29.6193C20.0819 30.4286 18.0236 30.8333 15.8333 30.8333Z" fill="white" />
                        </svg>

                        <?php
                          
                            $id = $_SESSION['id'];
                            include('../db/db.php');
                            $consulta = "SELECT sum(`cantidad_apostada`) FROM `apuestas` WHERE `id_user`=$id and `id_categoria`=3 and `status_apuesta`='Se gano'";
                            $resultado = mysqli_query($conexion, $consulta);
                            $row = $resultado->fetch_array(MYSQLI_ASSOC);
                            $cantidad= $row ['sum(`cantidad_apostada`)'];
                            if($cantidad){
                            echo "<span class='quantity'> $".$cantidad." </span>";
                            }
                            else{
                                echo "<span class='quantity'> $0.00 </span>";
                            }
                            mysqli_free_result($resultado);
                            mysqli_close($conexion);
                            ?>
                        <span class="text text--3" style="color:white;">Baloncesto</span>
                    </div>
                    <div class="item item--4">
                        <svg width="29" height="25" viewBox="0 0 29 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14.5 24.125L0.75 8.625L4.875 0.875H24.125L28.25 8.625L14.5 24.125ZM10.65 7.65625H18.35L15.7719 2.8125H13.2281L10.65 7.65625ZM13.4688 19.9594V9.59375H4.29062L13.4688 19.9594ZM15.5312 19.9594L24.7094 9.59375H15.5312V19.9594ZM20.6531 7.65625H25.3281L22.75 2.8125H18.075L20.6531 7.65625ZM3.67188 7.65625H8.34688L10.925 2.8125H6.25L3.67188 7.65625Z" fill="white" />
                        </svg>
                        <?php
                    
                            $id = $_SESSION['id'];
                            include('../db/db.php');
                            $consulta = "SELECT sum(`cantidad_apostada`) FROM `apuestas` WHERE `id_user`=$id and `id_categoria`=1 and `status_apuesta`='Se gano'";
                            $resultado = mysqli_query($conexion, $consulta);
                            $row = $resultado->fetch_array(MYSQLI_ASSOC);
                            $cantidad= $row ['sum(`cantidad_apostada`)'];
                            if($cantidad){
                            echo "<span class='quantity'> $".$cantidad." </span>";
                            }
                            else{
                                echo "<span class='quantity'> $0.00 </span>";
                            }
                            mysqli_free_result($resultado);
                            mysqli_close($conexion);
                            ?>
                        <span class="text text--4" style="color:white;"> Casino</span>
                    </div>
                </div>
            </diV>
            <div class="panel_usuario">
                <div class="contenedor_todas_las_apuestas">
                    <?php
                    include('../db/db.php');
                    $consulta = "SELECT * FROM `categoria_juegos`";
                    $resultado = mysqli_query($conexion, $consulta);
                     while($row = mysqli_fetch_array($resultado)){
                        $imagen_fondo=$row['url_categoria_img'];
                        $categoria=$row['nombre_categoria'];
                        echo "<a name='$categoria'></a>
                            <div class='imagen_casinos'style='background-image: url($imagen_fondo);' >
                                <div class='Titulo_apuesta'>
                                    <h1>Apuesta en el $categoria</h1>
                                    <hr>
                                </div>
                            <br>
                            <div class='contenido_apues_dentro'>";
                        $consulta2 = "SELECT * FROM `opciones_de_apuesta`
                         INNER JOIN categoria_juegos on opciones_de_apuesta.id_categoria= categoria_juegos.id_categorias 
                         where categoria_juegos.nombre_categoria='".$row['nombre_categoria']."'";

                        $solo_op=mysqli_query($conexion, $consulta2);
                        while($row_op = mysqli_fetch_array($solo_op)){
                            $id_juego=$row_op['id_opciones'];
                            $id_cat=$row_op['id_categoria'];
                            $nombre_juego=$row_op['nombre_opcion'];
                            $cant_mini=$row_op['catidad_minima'];
                            $imagen_tarjeta=$row_op['url_imagen'];
                            echo " <div class='tarjeta_baner' style='background-image: url($imagen_tarjeta);' >
                            <a href='dashboard_apuestas.php?juego=$id_juego&cat=$id_cat' style='color:white;  text-decoration: none;'>
                            
                            <div  class='dentro_tarjerta'>
                                <h1>$nombre_juego</h1>
                                <p>Apuesta desde</p>
                                <p style='color: red; background-color: rgb(16, 233, 16);'>$$cant_mini MXN</p>
                                <br>
                                <br>
                                <div style='text-align: center; align-items: center; margin: 0 auto; border-radius: 10px; vertical-align: middle;
                                        height: 30px; background-color: rgb(71, 21, 31); width:70%;'>
                                    <p>vamos</p>
                                </div>
                            </div>
                            </a>
                            </div>
                            ";
                        }
                     echo"   
                            
                           </div>
                         </div>";
                    }
                    mysqli_free_result($resultado);
                    mysqli_close($conexion);
                    ?>
                </div>
            </div>
        </div>

        <script src="../JavaScript/Carrusel.js"></script>
</body>

</html>