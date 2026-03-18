const filtro_negro_info = document.getElementById("filtro_negro_info");

filtro_negro_info.onclick = ocultarInfo;

function ocultarInfo(){
    const informacion = document.getElementsByClassName("activa")[0];
    informacion.classList.toggle("activa");
    filtro_negro_info.classList.toggle("ausente");
}

//-----------------------------------------------------------------------

const flecha_izquierda = document.getElementById("flecha_izquierda");
const flecha_derecha = document.getElementById("flecha_derecha");
const eventos = document.getElementsByClassName("evento");
let pagina = 1;

comprobarPagina();

flecha_derecha.onclick = siguientePagina;
flecha_izquierda.onclick = anteriorPagina;

for(let i=0; i<3; i++){
    eventos[i].classList.toggle("visible");
}

function ocultarEventos(){
    for(let i = 0; i < eventos.length; i++){
        eventos[i].classList.remove("visible");
    }
}

function cambiarPagina(){
    ocultarEventos();
    for(let i = 3 * pagina - 3; i < 3 * pagina; i++){
        console.log(i);
        eventos[i].classList.toggle("visible");
    }
}

function comprobarPagina(){
    if(pagina == 1){
        flecha_izquierda.classList.add("ocultar_flecha");
    }else{
        flecha_izquierda.classList.remove("ocultar_flecha");
    }

    if(pagina == eventos.length / 3){
        flecha_derecha.classList.add("ocultar_flecha");
    }else{
        flecha_derecha.classList.remove("ocultar_flecha");
    }
}

function siguientePagina(){
    pagina++;
    comprobarPagina();
    cambiarPagina();
}

function anteriorPagina(){
    pagina--;
    comprobarPagina();
    cambiarPagina();
}






//----------------------------------------------------------------------







const informacion_eventos = document.getElementsByClassName("informacion_evento");

for(let i = 0; i < eventos.length; i++){
    eventos[i].onclick = () => {
        informacion_eventos[i].classList.toggle("activa");
        filtro_negro_info.classList.toggle("ausente");
    }
}