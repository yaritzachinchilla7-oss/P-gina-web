let indice = 0;

const imagenes = document.querySelectorAll(".galeria-inicio img");

function mostrarImagen() {

    imagenes.forEach((img) => {

        img.style.display = "none";

    });

    indice++;

    if(indice > imagenes.length){

        indice = 1;
    }

    imagenes[indice - 1].style.display = "block";
}

setInterval(mostrarImagen, 3000);

mostrarImagen();


// BOTON SUBIR ARRIBA

const boton = document.getElementById("btn-arriba");

window.onscroll = function(){

    if(document.body.scrollTop > 300 || document.documentElement.scrollTop > 300){

        boton.style.display = "block";

    }else{

        boton.style.display = "none";
    }
};

function subirArriba(){

    window.scrollTo({

        top:0,

        behavior:"smooth"
    });
}