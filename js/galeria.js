const boton_audio = document.getElementById("boton_audio");
const musica = document.getElementById("musica");
let estado = false;

function reproducirAudio(){
    estado = !estado;
    boton_audio.classList.toggle("silenciado");

    if(estado){
        musica.play();
    }else{
        musica.pause();
    }
}

boton_audio.onclick = reproducirAudio;