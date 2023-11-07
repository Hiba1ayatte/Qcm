// Sélectionnez tous les éléments checkbox de la section E
const checkboxesE = document.querySelectorAll('.partE input[type="checkbox"]');

// Sélectionnez l'élément de résultat pour la section E
const resultatE = document.querySelector('#resultatE');

// Ajoutez un écouteur d'événements pour chaque case cochée de la section E
checkboxesE.forEach(function (checkbox) {
    checkbox.addEventListener('change', function () {
        // Définir le nombre de cases cochées
        const nombreCasesCochéesE = document.querySelectorAll('.partE input[type="checkbox"]:checked').length;

        // Mettre à jour le texte du résultat
        resultatE.textContent = `E : ${nombreCasesCochéesE}/10`;
    });
});

// Sélectionnez tous les éléments checkbox de la section I
const checkboxesI = document.querySelectorAll('.partI input[type="checkbox"]');

// Sélectionnez l'élément de résultat pour la section I
const resultatI = document.querySelector('#resultatI');

// Ajoutez un écouteur d'événements pour chaque case cochée de la section I
checkboxesI.forEach(function (checkbox) {
    checkbox.addEventListener('change', function () {
        // Définir le nombre de cases cochées
        const nombreCasesCochéesI = document.querySelectorAll('.partI input[type="checkbox"]:checked').length;

        // Mettre à jour le texte du résultat
        resultatI.textContent = `I : ${nombreCasesCochéesI}/10`;
    });
});
// Sélectionnez tous les éléments checkbox de la section S
const checkboxesS = document.querySelectorAll('.partS input[type="checkbox"]');

// Sélectionnez l'élément de résultat pour la section S
const resultatS = document.querySelector('#resultatS');

// Ajoutez un écouteur d'événements pour chaque case cochée de la section S
checkboxesS.forEach(function (checkbox) {
    checkbox.addEventListener('change', function () {
        // Définir le nombre de cases cochées
        const nombreCasesCochéesS = document.querySelectorAll('.partS input[type="checkbox"]:checked').length;

        // Mettre à jour le texte du résultat
        resultatS.textContent = `S : ${nombreCasesCochéesS}/10`;
    });
});

// Sélectionnez tous les éléments checkbox de la section N
const checkboxesN = document.querySelectorAll('.partN input[type="checkbox"]');

// Sélectionnez l'élément de résultat pour la section N
const resultatN = document.querySelector('#resultatN');

// Ajoutez un écouteur d'événements pour chaque case cochée de la section N
checkboxesN.forEach(function (checkbox) {
    checkbox.addEventListener('change', function () {
        // Définir le nombre de cases cochées
        const nombreCasesCochéesN = document.querySelectorAll('.partN input[type="checkbox"]:checked').length;

        // Mettre à jour le texte du résultat
        resultatN.textContent = `N : ${nombreCasesCochéesN}/10`;
    });
});
// Sélectionnez tous les éléments checkbox de la section T
const checkboxesT = document.querySelectorAll('.partT input[type="checkbox"]');

// Sélectionnez l'élément de résultat pour la section T
const resultatT = document.querySelector('#resultatT');

// Ajoutez un écouteur d'événements pour chaque case cochée de la section T
checkboxesT.forEach(function (checkbox) {
    checkbox.addEventListener('change', function () {
        // Définir le nombre de cases cochées
        const nombreCasesCochéesT = document.querySelectorAll('.partT input[type="checkbox"]:checked').length;

        // Mettre à jour le texte du résultat
        resultatT.textContent = `T : ${nombreCasesCochéesT}/10`;
    });
});

const checkboxesF = document.querySelectorAll('.partF input[type="checkbox"]');

// Sélectionnez l'élément de résultat pour la section F
const resultatF = document.querySelector('#resultatF');

// Ajoutez un écouteur d'événements pour chaque case cochée de la section F
checkboxesF.forEach(function (checkbox) {
  checkbox.addEventListener('change', function () {
    // Définir le nombre de cases cochées
    const nombreCasesCochéesF = document.querySelectorAll('.partF input[type="checkbox"]:checked').length;

    // Mettre à jour le texte du résultat
    resultatF.textContent = `F : ${nombreCasesCochéesF}/10`;
  });
});

// Sélectionnez tous les éléments checkbox de la section J
const checkboxesJ = document.querySelectorAll('.partJ input[type="checkbox"]');

// Sélectionnez l'élément de résultat pour la section J
const resultatJ = document.querySelector('#resultatJ');

// Ajoutez un écouteur d'événements pour chaque case cochée de la section J
checkboxesJ.forEach(function (checkbox) {
    checkbox.addEventListener('change', function () {
        // Définir le nombre de cases cochées
        const nombreCasesCochéesJ = document.querySelectorAll('.partJ input[type="checkbox"]:checked').length;

        // Mettre à jour le texte du résultat
        resultatJ.textContent = `J : ${nombreCasesCochéesJ}/10`;
    });
});

// Sélectionnez tous les éléments checkbox de la section P
const checkboxesP = document.querySelectorAll('.partP input[type="checkbox"]');

// Sélectionnez l'élément de résultat pour la section P
const resultatP = document.querySelector('#resultatP');

// Ajoutez un écouteur d'événements pour chaque case cochée de la section P
checkboxesP.forEach(function (checkbox) {
    checkbox.addEventListener('change', function () {
        // Définir le nombre de cases cochées
        const nombreCasesCochéesP = document.querySelectorAll('.partP input[type="checkbox"]:checked').length;

        // Mettre à jour le texte du résultat
        resultatP.textContent = `P : ${nombreCasesCochéesP}/10`;
    });
});




// JavaScript timer
var timeLeft = 1800; // Durée totale du QCM en secondes
var timer = setInterval(function () {
    // Mettre à jour l'affichage du minuteur toutes les secondes
    var minutes = Math.floor(timeLeft / 60);
    var seconds = timeLeft % 60;
    document.getElementById("timer").innerHTML = minutes + ":" + (seconds < 10 ? "0" : "") + seconds;

    // Décrémenter le temps restant
    timeLeft--;

    // Vérifier si le temps est écoulé
    if (timeLeft < 0) {
        clearInterval(timer);
        alert("Le temps est écoulé !");
        // Ajouter ici la logique pour gérer la fin du QCM
    }
}, 1000);


  // Désactiver le bouton "Retour" du navigateur
  history.pushState(null, null, location.href);
  window.onpopstate = function(event) {
    history.go(1);
  };
