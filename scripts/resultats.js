const restart = document.getElementById('restart')
restart.addEventListener("click", lolol);

var dendro = Number(localStorage.getItem('dendro'));
var anemo = Number(localStorage.getItem('anemo'));
var cryo = Number(localStorage.getItem('cryo'));
var pyro = Number(localStorage.getItem('pyro'));
var geo = Number(localStorage.getItem('geo'));
var hydro = Number(localStorage.getItem('hydro'));
var electro = Number(localStorage.getItem('electro'));

const obj1 = {
    d: dendro,
    a: anemo,
    c: cryo,
    p: pyro,
    g: geo,
    h: hydro,
    e: electro
};

const tableau = Object.values(obj1);
const elementG = document.querySelector('.elementG');

let newElement = "elementG";
let i = tableau.indexOf(Math.max(...tableau));
switch(Object.keys(obj1)[i]){
    case 'g':
        newElement = newElement.replaceAll("elementG", "Geo");
        console.log("g");
        break;
    case 'h':
        newElement = newElement.replaceAll("elementG", "Hydro");
        console.log("h");
        break;
    case 'e':
        newElement = newElement.replaceAll("elementG", "Electro");
        console.log("e");
        break;
    case 'd':
        newElement = newElement.replaceAll("elementG", "Dendro");
        console.log("d");
        break;
    case 'p':
        newElement = newElement.replaceAll("elementG", "Pyro");
        console.log("p");
        break;
    case 'a':
        newElement = newElement.replaceAll("elementG", "Anemo");
        console.log("a");
        break;
    
    case 'c':
        console.log("c");
        newElement = newElement.replaceAll("elementG", "Cryo");
        break;
}

function lolol(){
    console.log("obj : " + tableau);
}

elementG.textContent = newElement;
elementG.style.visibility = 'visible';
