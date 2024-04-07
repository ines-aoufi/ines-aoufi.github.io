//je remets les données dans le local storage dans des variables js
var dendro = Number(localStorage.getItem('dendro'));
var anemo = Number(localStorage.getItem('anemo'));
var cryo = Number(localStorage.getItem('cryo'));
var pyro = Number(localStorage.getItem('pyro'));
var geo = Number(localStorage.getItem('geo'));
var hydro = Number(localStorage.getItem('hydro'));
var electro = Number(localStorage.getItem('electro'));

// j'utilise la première lettre pour que ça soit plus rapide dans la fonction d'après
const letterElements = {
    d: dendro,
    a: anemo,
    c: cryo,
    p: pyro,
    g: geo,
    h: hydro,
    e: electro
};

const tableau = Object.values(letterElements); //créer un tableau avec toutes les données de letterElements
const elementPlaceholder = document.getElementById('elementPlaceholder'); //je récupère le placeholder dans le html, qu'on remplacera donc plus tard par l'élément du user

let newElement = "elementPlaceholder"; //on l'appelle comme le placeholder qu'on a laissé dans le html
let i = tableau.indexOf(Math.max(...tableau));
switch(Object.keys(letterElements)[i]){ //je fais un switch case pour que chaque lettre on donne un élément différent
    case 'g':
        newElement = newElement.replaceAll("elementPlaceholder", "Geo");
        console.log("g");// j'utilise ça pour debug et être sûr qu'il est allé au bon endroit en vérifiant avec le local storage.
        var elementTransfer = "Gep";
        break;
    case 'h':
        newElement = newElement.replaceAll("elementPlaceholder", "Hydro");
        console.log("h");
        var elementTransfer = "Hydro";
        break;
    case 'e':
        newElement = newElement.replaceAll("elementPlaceholder", "Electro");
        console.log("e");
        var elementTransfer = "Electro";
        break;
    case 'd':
        newElement = newElement.replaceAll("elementPlaceholder", "Dendro");
        console.log("d");
        var elementTransfer = "Dendro";
        break;
    case 'p':
        newElement = newElement.replaceAll("elementPlaceholder", "Pyro");
        console.log("p");
        var elementTransfer = "Pyro";
        break;
    case 'a':
        newElement = newElement.replaceAll("elementPlaceholder", "Anemo");
        console.log("a");
        var elementTransfer = "Anemo";
        break;
    case 'c':
        newElement = newElement.replaceAll("elementPlaceholder", "Cryo");
        console.log("c");
        var elementTransfer = "Cryo";
        break;
}
