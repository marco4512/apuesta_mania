<!DOCTYPE html>
<html lang="en">

<head>
    <script type="js/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css" media="screen" />

   
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apuesta Manía</title>
</head>
<body onload="cargar();">
    <div class="nav">
        <object data="images/Group 1.svg"></object>
        <div></div>
        <a href="index.php">Casino</a>
        <a href="IniciarSecion.php">Iniciar sesión</a>
        <a href="registro.php">Registrarse</a>
    </div>

    <div class="contenido_principal">
        <div class="carrusel_landing">
            <div class="container">
                <div class="card_box">
                    <span></span>
                    <div class="contenido_baner">
                        <p style="font-size:30px;">Cuenta <strong> Premium </strong></p>
                        <p style="text-align:left; padding-left: 10px;">por solo </p>
        
                    </div>
                    <div class="etiquet-price">
                        <p>99.99</p>
                        <div></div>
                    </div>
                    <br>
                    <hr>
                    <div class="beneficios_banner">
                        <h1 class="titulo">Beneficios</h1>
                        <ol>
                           <li>Regalo de $1000 en tu primera apuesta</li>
                           <li>Apuestas y recompensas vip</li> 
                           <li>Acceso a eventos exclusivos</li>
                           <li>Menor tasa de perdida</li>
                        </ol>
                        <button >Vamos!</button>
                    </div>
                </div>
            </div>
            <div class="landing_carrusel">
                <div id="americano" class="ImagenCambiante"><p>Fútbol Americano</p></div>
                <div id="Futball" class="ImagenCambiante_foot_ball"><p>Fútbol Soccer</p></div>
                <div id="Basketball" class="ImagenCambiante_Basketball"><p>Baloncesto</p></div>
                <div id="Casino" class="ImagenCambiante_Casino"><p>Casino</p></div>
                <div class="carrusel_botones">
                    <div id="imagen_1" onclick="desplazar('americano')" class="circulo_carrucel"></div>
                    <div id="imagen_2" onclick="desplazar('fotball')" class="circulo_carrucel"></div>
                    <div id="imagen_3" onclick="desplazar('basket')" class="circulo_carrucel"></div>
                    <div id="imagen_4" onclick="desplazar('casino')" class="circulo_carrucel"></div>
                </div>
            </div>
        </div>
    </div>

<script src="JavaScript/Carrusel.js"></script>
</body>

</html>