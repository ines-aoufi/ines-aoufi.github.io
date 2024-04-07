// fonction constructeur pour un élément
function Element(nomElement) {
    this.name = nomElement;
    this.points = 0;
}

// Prototype method to increase points for an Element
// Plus simple à lire que d'uniquement voir "++" et c'est mieux rangé.
Element.prototype.addPoints = function() { // On le met en prototype pour que tous les objets y ait accès ensuite
    this.points++;
};

// Creating Element objects
let dendro = new Element('Dendro');
let anemo = new Element('Anemo');
let cryo = new Element('Cryo');
let pyro = new Element('Pyro');
let geo = new Element('Geo');
let hydro = new Element('Hydro');
let electro = new Element('Electro');

// Setting all the numbers in the local storage in JS variables so it's easier to read and use :
dendro.points = Number(localStorage.getItem('dendro'));
anemo.points = Number(localStorage.getItem('anemo'));
cryo.points = Number(localStorage.getItem('cryo'));
pyro.points = Number(localStorage.getItem('pyro'));
geo.points = Number(localStorage.getItem('geo'));
hydro.points = Number(localStorage.getItem('hydro'));
electro.points = Number(localStorage.getItem('electro'));

// functions to add the points depending on the answer given for the questions :
// q1 : season, q2 : animal, q3 : sentiment, q4 : chats
function addPointsSeason(){
    let resultat = document.querySelector('input[name="saison"]:checked').id; //je récupère la réponse donnée par l'utilisateur
    switch(resultat){ //je vérifie s'il est égal à mes réponses, et en fonction de la réponse je lui ajoute un point dans l'élement correspondant.
        case 'printemps':
            dendro.addPoints();
            hydro.addPoints();
            anemo.addPoints();
            break;
        case 'ete':
            pyro.addPoints();
            geo.addPoints();
            break;
        case 'automne':
            electro.addPoints();
            break;
        case 'hiver':
            cryo.addPoints();
            break;
    }

    setElementsStorage(); //ensuite je mets lance la fonction qui permet de mettre les points des élements dans le local storage
}

function addPointsAnimal(){
    let resultat = document.querySelector('input[name="animal"]:checked').id;
    switch(resultat){
        case 'pigeon':
            anemo.addPoints();
            break;
        case 'grenouille':
            geo.addPoints();
            break;
        case 'chien':
            pyro.addPoints();
            break;
        case 'loutre':
            hydro.addPoints();
            break;
        case 'renard':
            electro.addPoints();
            break;
        case 'chat':
            dendro.addPoints();
            break;
        case 'scarabe':
            cryo.addPoints();
            break;
    }

    setElementsStorage();
}

function addPointsSentiment(){
    let resultat = document.querySelector('input[name="sentiment"]:checked').id;
    switch(resultat){
        case 'colere':
            electro.addPoints();
            break;
        case 'agitation':
            dendro.addPoints();
            break;
        case 'decouragement':
            pyro.addPoints();
            break;
        case 'etonnement':
            hydro.addPoints();
            break;
        case 'ennui':
            anemo.addPoints();
            break;
        case 'inquietude':
            geo.addPoints();
            break;
        case 'nervosite':
            cryo.addPoints();
            break;
    }

    setElementsStorage();
}

function addPointsCats(){
    let resultat = document.querySelector('input[name="cat_memes"]:checked').id;
    switch(resultat){
        case 'hehe':
            pyro.addPoints();
            break;
        case 'crying':
            hydro.addPoints();
            break;
        case 'dink':
            electro.addPoints();
            break;
        case 'fairy':
            dendro.addPoints();
            break;
        case 'got_that':
            anemo.addPoints();
            break;
        case 'bap':
            geo.addPoints();
            break;
        case 'eepy':
            cryo.addPoints();
            break;
    }

    setElementsStorage();
}

// function to set the number of points back in the local storage
function setElementsStorage(){
    localStorage.setItem('dendro', (String(dendro.points)));
    localStorage.setItem('anemo', (String(anemo.points)));
    localStorage.setItem('cryo', (String(cryo.points)));
    localStorage.setItem('pyro', (String(pyro.points)));
    localStorage.setItem('geo', (String(geo.points)));
    localStorage.setItem('hydro', (String(hydro.points)));
    localStorage.setItem('electro', (String(electro.points)));
}