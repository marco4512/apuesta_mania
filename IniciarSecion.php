<!DOCTYPE html>
<html lang="en">

<head>
    <script type="js/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css" media="screen" />

   
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IniciarSesion</title>
</head>
<body >
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
            <div class="landing_carrusel" style=" display: grid;grid-template-columns:50%50%;">
                <div class="imagen_login"></div>
                <div class="login_conten">
                <div class="card_2">
                    <h4 class="title">Iniciar Sesion!</h4>
                    <form action="validar.php" method="post" >
                      <div class="field">
                        <svg class="input-icon" viewBox="0 0 500 500" xmlns="http://www.w3.org/2000/svg">
                        <path d="M207.8 20.73c-93.45 18.32-168.7 93.66-187 187.1c-27.64 140.9 68.65 266.2 199.1 285.1c19.01 2.888 36.17-12.26 36.17-31.49l.0001-.6631c0-15.74-11.44-28.88-26.84-31.24c-84.35-12.98-149.2-86.13-149.2-174.2c0-102.9 88.61-185.5 193.4-175.4c91.54 8.869 158.6 91.25 158.6 183.2l0 16.16c0 22.09-17.94 40.05-40 40.05s-40.01-17.96-40.01-40.05v-120.1c0-8.847-7.161-16.02-16.01-16.02l-31.98 .0036c-7.299 0-13.2 4.992-15.12 11.68c-24.85-12.15-54.24-16.38-86.06-5.106c-38.75 13.73-68.12 48.91-73.72 89.64c-9.483 69.01 43.81 128 110.9 128c26.44 0 50.43-9.544 69.59-24.88c24 31.3 65.23 48.69 109.4 37.49C465.2 369.3 496 324.1 495.1 277.2V256.3C495.1 107.1 361.2-9.332 207.8 20.73zM239.1 304.3c-26.47 0-48-21.56-48-48.05s21.53-48.05 48-48.05s48 21.56 48 48.05S266.5 304.3 239.1 304.3z"></path></svg>
                        <input autocomplete="off" id="email" placeholder="Email" class="input-field" name="email" type="email">
                      </div>
                      <div class="field">
                        <svg class="input-icon" viewBox="0 0 500 500" xmlns="http://www.w3.org/2000/svg">
                        <path d="M80 192V144C80 64.47 144.5 0 224 0C303.5 0 368 64.47 368 144V192H384C419.3 192 448 220.7 448 256V448C448 483.3 419.3 512 384 512H64C28.65 512 0 483.3 0 448V256C0 220.7 28.65 192 64 192H80zM144 192H304V144C304 99.82 268.2 64 224 64C179.8 64 144 99.82 144 144V192z"></path></svg>
                        <input autocomplete="off" id="password" placeholder="Password" class="input-field" name="password" type="password">
                      </div>
                      <button class="btn" type="submit">Inciar</button>
                      <p class="error" id="error_de_autenti">Error usuario no encontrado</p>
                      <a href="#" class="btn-link">Olvidaste Tu contraseña</a>
                    </form>
                </div>
            </div>
          

            </div>
        </div>
    </div>

<script src="JavaScript/Carrusel.js"></script>
</body>

</html>