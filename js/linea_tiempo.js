class evento{
    constructor(nombre, fecha, img, desc){
        this.carta = document.createElement("div");
        this.carta.classList.add("evento col-lg")
        this.carta.innerHTML = `
                <h2>${nombre}</h2>
                <div>${fecha}</div>
                <p>${desc}</p>
        `;
    }
}