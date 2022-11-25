var imagen_1 = document.getElementById('imagen_1');
var imagen_2 = document.getElementById('imagen_2');
var imagen_3 = document.getElementById('imagen_3');
var imagen_4 = document.getElementById('imagen_4');
var americano= document.getElementById('americano');
var Futball = document.getElementById('Futball');
var Basketball = document.getElementById('Basketball');
var Casino = document.getElementById('Casino');

function cargar(){
    imagen_1.style.backgroundColor='red';
    imagen_2.style.backgroundColor='#141414';
    imagen_3.style.backgroundColor='#141414';
    imagen_4.style.backgroundColor='#141414';

}

function desplazar(nombre_imagen){
    if(nombre_imagen=='americano'){
        imagen_1.style.backgroundColor='red';
        imagen_2.style.backgroundColor='#141414';
        imagen_3.style.backgroundColor='#141414';
        imagen_4.style.backgroundColor='#141414';
        americano.style.display='block';
        Futball.style.display="none";
        Basketball.style.display="none";
        Casino.style.display="none";
    }
    if(nombre_imagen=='fotball'){
        imagen_2.style.backgroundColor='red';
        imagen_1.style.backgroundColor='#141414';
        imagen_3.style.backgroundColor='#141414';
        imagen_4.style.backgroundColor='#141414';
        americano.style.display='none';
        Futball.style.display="block";
        Basketball.style.display="none";
        Casino.style.display="none";
    }
    if(nombre_imagen=='basket'){
        imagen_2.style.backgroundColor='#141414';
        imagen_1.style.backgroundColor='#141414';
        imagen_3.style.backgroundColor='red';
        imagen_4.style.backgroundColor='#141414';
        americano.style.display='none';
        Futball.style.display="none";

        Basketball.style.display="block";
        Casino.style.display="none";
    }
    if(nombre_imagen=='casino'){
        imagen_2.style.backgroundColor='#141414';
        imagen_1.style.backgroundColor='#141414';
        imagen_3.style.backgroundColor='#141414';
        imagen_4.style.backgroundColor='red';
        americano.style.display='none';
        Futball.style.display="none";
        Basketball.style.display="none";
        Casino.style.display="block";
    }



}
