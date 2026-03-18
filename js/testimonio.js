const testimonios = document.getElementsByClassName("testimonio");
let actual = 0;

for(let i = 0; i < testimonios.length; i++){
    testimonios[i].onclick = () => {
        actual++;
        if(actual == testimonios.length){
            actual = 0;
        }
        ocultarTodo();
        testimonios[actual].classList.add("abierto_mostrado")
    }
}

function ocultarTodo(){
    for(let i = 0; i < testimonios.length; i++){
        testimonios[i].classList.remove("abierto_mostrado");
    }
}

testimonios[0].classList.add("abierto_mostrado")