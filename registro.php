<!DOCTYPE html>
<html lang="en">

<head>
    <script type="js/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css" media="screen" />

   
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
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
            <div class="landing_carrusel"style=" display: grid;grid-template-columns:50%50%;">
                <div class="imagen_login" style="background-image:url(images/poker-gdc042df30_640.jpg) ;"></div>
                <div class="login_conten">
                <div class="card_2">
                    <h4 class="title">Registrarse!</h4>
                    <form action="dbregister.php" method="POST">
                        <div class="field">
                            <svg width="14" height="17" viewBox="0 0 14 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.00001 8.54201C5.90267 8.54201 4.98267 8.16701 4.24001 7.41701C3.49667 6.66701 3.12501 5.74334 3.12501 4.64601C3.12501 3.56268 3.49667 2.65301 4.24001 1.91701C4.98267 1.18035 5.90267 0.812012 7.00001 0.812012C8.09734 0.812012 9.01734 1.18035 9.76001 1.91701C10.5033 2.65301 10.875 3.56968 10.875 4.66701C10.875 5.75034 10.5033 6.66701 9.76001 7.41701C9.01734 8.16701 8.09734 8.54201 7.00001 8.54201ZM0.0420074 16.542V13.562C0.0420074 13.062 0.174007 12.6073 0.438007 12.198C0.701341 11.788 1.05534 11.4513 1.50001 11.188C2.31934 10.7013 3.19767 10.3297 4.13501 10.073C5.07301 9.81634 6.02801 9.68801 7.00001 9.68801C7.98601 9.68801 8.94767 9.81634 9.88501 10.073C10.823 10.3297 11.6947 10.6943 12.5 11.167C12.9447 11.417 13.2987 11.7503 13.562 12.167C13.826 12.5837 13.958 13.0487 13.958 13.562V16.542H0.0420074Z" fill="white"/>
                                </svg>
                                
                            <input autocomplete="off" id="name" placeholder="Nombre" class="input-field" name="name" type="text">
                          </div>
                      <div class="field">
                        <svg class="input-icon" viewBox="0 0 500 500" xmlns="http://www.w3.org/2000/svg">
                        <path d="M207.8 20.73c-93.45 18.32-168.7 93.66-187 187.1c-27.64 140.9 68.65 266.2 199.1 285.1c19.01 2.888 36.17-12.26 36.17-31.49l.0001-.6631c0-15.74-11.44-28.88-26.84-31.24c-84.35-12.98-149.2-86.13-149.2-174.2c0-102.9 88.61-185.5 193.4-175.4c91.54 8.869 158.6 91.25 158.6 183.2l0 16.16c0 22.09-17.94 40.05-40 40.05s-40.01-17.96-40.01-40.05v-120.1c0-8.847-7.161-16.02-16.01-16.02l-31.98 .0036c-7.299 0-13.2 4.992-15.12 11.68c-24.85-12.15-54.24-16.38-86.06-5.106c-38.75 13.73-68.12 48.91-73.72 89.64c-9.483 69.01 43.81 128 110.9 128c26.44 0 50.43-9.544 69.59-24.88c24 31.3 65.23 48.69 109.4 37.49C465.2 369.3 496 324.1 495.1 277.2V256.3C495.1 107.1 361.2-9.332 207.8 20.73zM239.1 304.3c-26.47 0-48-21.56-48-48.05s21.53-48.05 48-48.05s48 21.56 48 48.05S266.5 304.3 239.1 304.3z"></path></svg>
                        <input autocomplete="off" id="logemail" placeholder="Email" class="input-field" name="email" type="email">
                      </div>
                      <div class="field">
                        <svg class="input-icon" viewBox="0 0 500 500" xmlns="http://www.w3.org/2000/svg">
                        <path d="M80 192V144C80 64.47 144.5 0 224 0C303.5 0 368 64.47 368 144V192H384C419.3 192 448 220.7 448 256V448C448 483.3 419.3 512 384 512H64C28.65 512 0 483.3 0 448V256C0 220.7 28.65 192 64 192H80zM144 192H304V144C304 99.82 268.2 64 224 64C179.8 64 144 99.82 144 144V192z"></path></svg>
                        <input autocomplete="off" id="logpass" placeholder="Password" class="input-field" name="password" type="password">
                      </div>
                      <div class="field">
                        <svg width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.958 2.70799V11.292C17.958 12.014 17.7013 12.639 17.188 13.167C16.674 13.6943 16.042 13.958 15.292 13.958H2.70801C1.97201 13.958 1.34367 13.6943 0.823007 13.167C0.302341 12.639 0.0420074 12.014 0.0420074 11.292V2.70799C0.0420074 1.98599 0.302341 1.36099 0.823007 0.832992C1.34367 0.305659 1.97201 0.0419922 2.70801 0.0419922H15.292C16.042 0.0419922 16.674 0.305659 17.188 0.832992C17.7013 1.36099 17.958 1.98599 17.958 2.70799V2.70799ZM2.70801 3.77099H15.292V2.70799H2.70801V3.77099ZM2.70801 7.10399V11.292H15.292V7.10399H2.70801ZM2.70801 11.292V2.70799V11.292V11.292Z" fill="white"/>
                            </svg>                            
                        <path d="M80 192V144C80 64.47 144.5 0 224 0C303.5 0 368 64.47 368 144V192H384C419.3 192 448 220.7 448 256V448C448 483.3 419.3 512 384 512H64C28.65 512 0 483.3 0 448V256C0 220.7 28.65 192 64 192H80zM144 192H304V144C304 99.82 268.2 64 224 64C179.8 64 144 99.82 144 144V192z"></path></svg>
                        <input autocomplete="off" id="credit" placeholder="xxxx-xxxx-xxx-xxxx" class="input-field" name="tarjetNumber" type='text'  required pattern="[0-9]{4}-[0-9]{4}-[0-9]{4}-[0-9]{4}"  >
                      </div>
                      <div class="field">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3.43801 18.917C2.88201 18.917 2.40601 18.719 2.01001 18.323C1.61467 17.927 1.41701 17.4583 1.41701 16.917V14.896C1.41701 14.34 1.56967 13.84 1.87501 13.396C2.18034 12.9513 2.59701 12.632 3.12501 12.438H16.875C17.403 12.632 17.8197 12.9513 18.125 13.396C18.4303 13.84 18.583 14.34 18.583 14.896V16.917C18.583 17.4583 18.3887 17.927 18 18.323C17.6113 18.719 17.139 18.917 16.583 18.917H3.43801ZM3.62501 10.729V8.833C3.62501 8.083 3.88201 7.45134 4.39601 6.938C4.91001 6.424 5.54201 6.167 6.29201 6.167H8.66701V5.5C8.41701 5.30534 8.22934 5.09 8.10401 4.854C7.97934 4.618 7.91701 4.29867 7.91701 3.896C7.91701 3.632 7.95501 3.38534 8.03101 3.156C8.10767 2.92667 8.26401 2.694 8.50001 2.458L10 0.979004L11.521 2.458C11.757 2.694 11.9097 2.92667 11.979 3.156C12.0483 3.38534 12.083 3.632 12.083 3.896C12.083 4.29867 12.0207 4.618 11.896 4.854C11.7707 5.09 11.583 5.30534 11.333 5.5V6.167H13.729C14.465 6.167 15.09 6.424 15.604 6.938C16.118 7.45134 16.375 8.083 16.375 8.833V10.729H3.62501Z" fill="white"/>
                            </svg>                           
                        <path d="M80 192V144C80 64.47 144.5 0 224 0C303.5 0 368 64.47 368 144V192H384C419.3 192 448 220.7 448 256V448C448 483.3 419.3 512 384 512H64C28.65 512 0 483.3 0 448V256C0 220.7 28.65 192 64 192H80zM144 192H304V144C304 99.82 268.2 64 224 64C179.8 64 144 99.82 144 144V192z"></path></svg>
                        <input autocomplete="off" id="fecha" placeholder="Fecha de nacimiento" class="input-field" name="birtday" type="date">
                      </div>

                      <button class="btn" type="submit">Comenzamos</button>
                      <p class="error" id="error_de_autenti">Error al registrarse</p>
                    </form>
                </div>
            </div>
        </div>
    </div>

<script src="JavaScript/Carrusel.js"></script>
</body>

</html>