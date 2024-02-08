// getting the button from its ID in html, so i can call the right function depending on which question the user is on

// const ctaQ1 = document.getElementById('cta_season');
// ctaQ1.addEventListener("click", addPointsSeason);

// const ctaQ2 = document.getElementById('cta_cats');
// ctaQ2.addEventListener("click", addPointsCats);

// const ctaQ3 = document.getElementById('cta_animal')
// ctaQ3.addEventListener("click", addPointsAnimal);

// const ctaQ4 = document.getElementById('cta_season')
// ctaQ4.addEventListener("click", addPointsSeason);

// const ctaQ5 = document.getElementById('cta_season')
// ctaQ5.addEventListener("click", addPointsSeason);

// const ctaQ6 = document.getElementById('cta_season')
// ctaQ6.addEventListener("click", addPointsSeason);

// const ctaQ7 = document.getElementById('cta_season')
// ctaQ7.addEventListener("click", addPointsSeason);

// const ctaQ8 = document.getElementById('cta_season')
// ctaQ8.addEventListener("click", addPointsSeason);

const ctaNext = document.getElementsByClassName('cta_next');
ctaNext[0].addEventListener("click",checkIfAnswerIsGiven);

// Setting all the numbers in the local storage in JS variables so it's easier to read :
let dendro = Number(localStorage.getItem('dendro'));
let anemo = Number(localStorage.getItem('anemo'));
let cryo = Number(localStorage.getItem('cryo'));
let pyro = Number(localStorage.getItem('pyro'));
let geo = Number(localStorage.getItem('geo'));
let hydro = Number(localStorage.getItem('hydro'));
let electro = Number(localStorage.getItem('electro'));


function callsCorrespondingAddPoints() {
    let questionNbr = getQuestionNumber()
    switch (questionNbr) {
        case "q1" :
            addPointsSeason();
            break;
        case "q2" :
            addPointsAnimal();
            break;
        case "q3" :
            addPointsSentiment();
            break;
        case "q4" :
            addPointsCats();
            break;
        default:
            alert("not in a quizz");
    }
}

// function to add the points depending on the answer given for the questions :
function addPointsSeason(){
    let resultat = document.querySelector('input[name="saison"]:checked').id;
    switch(resultat){
        case 'printemps':
            dendro++;
            hydro++;
            anemo++;
            break;
        case 'ete':
            pyro++;
            geo++;
            break;
        case 'automne':
            electro++;
            break;
        case 'hiver':
            cryo++;
            break;
    }
    console.log("entered ADD POINTS SZN");
    setElementsStorage();
}

function addPointsCats(){
    let resultat = document.querySelector('input[name="cat_memes"]:checked').id;
    switch(resultat){
        case 'hehe':
            pyro++;
            break;
        case 'crying':
            hydro++;
            break;
        case 'dink':
            electro++;
            break;
        case 'fairy':
            dendro++;
            break;
        case 'got_that':
            anemo++;
            break;
        case 'bap':
            geo++;
            break;
        case 'eepy':
            cryo++;
            break;
    }

    setElementsStorage();
}

function addPointsSentiment(){
    let resultat = document.querySelector('input[name="sentiment"]:checked').id;
    switch(resultat){
        case 'colere':
            electro++;
            break;
        case 'agitation':
            dendro++;
            break;
        case 'decouragement':
            pyro++;
            break;
        case 'etonnement':
            hydro++;
            break;
        case 'ennui':
            anemo++;
            break;
        case 'inquietude':
            geo++;
            break;
        case 'nervosite':
            cryo++;
            break;
    }

    setElementsStorage();
}

function addPointsAnimal(){
    let resultat = document.querySelector('input[name="animal"]:checked').id;
    switch(resultat){
        case 'pigeon':
            anemo++;
            break;
        case 'grenouille':
            geo++;
            break;
        case 'chien':
            pyro++;
            break;
        case 'loutre':
            hydro++;
            break;
        case 'renard':
            electro++;
            break;
        case 'chat':
            dendro++;
            break;
        case 'scarabe':
            cryo++;
            break;
    }

    setElementsStorage();
}

// function to set the number of points back in the local storage

function setElementsStorage(){
    localStorage.setItem('dendro', (String(dendro)));
    localStorage.setItem('anemo', (String(anemo)));
    localStorage.setItem('cryo', (String(cryo)));
    localStorage.setItem('pyro', (String(pyro)));
    localStorage.setItem('geo', (String(geo)));
    localStorage.setItem('hydro', (String(hydro)));
    localStorage.setItem('electro', (String(electro)));
}

// Returns the page name. Useful in order to find out which question the user is at.

function getQuestionNumber() {
    let path = window.location.pathname;
    let page = path.split("/").pop();
    let filename = page.split(".")[0];
    return filename;
}

// stops the user from going to the next page if no answer is given

function checkIfAnswerIsGiven() {
        var radios = document.querySelectorAll('input[type="radio"]')
        var formValid = false;
        var i = 0;
        while (!formValid && i < radios.length) {
            if (radios[i].checked) formValid = true;
            i++;        
        }

        if (!formValid) {
            alert('Please select an option');
            event.preventDefault(); // Prevent form from submitting
        } else {
            callsCorrespondingAddPoints();
        }
}
