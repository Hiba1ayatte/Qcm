<?php
// Récupérer les données du candidat à partir de la variable de session
session_start();
$cin = $_SESSION['cin'];
$nom = $_SESSION['nom'];
$prenom = $_SESSION['prenom'];
$temps = $_SESSION['temps_total'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Qcm1.css">
    <!--Swipper CSS-->
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <script src="https://kit.fontawesome.com/1112bf78b9.js" crossorigin="anonymous"></script>
    <title>Test De Personnalité</title>
</head>
<style>

.card-perso {
        border: 1px solid black;
        padding: 5%;
        width: 400px;
        height: 130px;
        margin-left: 10%;
    }
  @media screen and (min-width : 901px) and (max-width: 1200px) {
    .titre {
        width: 350px;
        height: 40px;
        margin-left: 60%;
    }
    #img1 {
        width: 300px;
        height: 200px;
        margin-left: 20% !important;
    }
    
    .card-perso {
        border: 1px solid black;
        padding: 5%;
        width: 305px;
        height: 100px;
        margin-left: 20%;

       
    }
    .reponse {
        display: grid;
        grid-template-columns: repeat(1, 1fr);
        
    }
    .partE , .partI ,.partS , .partN ,.partT , .partF ,.partJ , .partP{
        margin: auto 30%;
        width: 100%;
    }
    .result{
        margin-left: -30%;
        width: 100%;
        height: 30px;
        background-color:rgb(236, 236, 236) ;
        text-align: center;
        border-radius: 10px;
    } 
    .part1 ,.part2 , .part3 , .part4{
        width: 100%;
    }
    
 }
 @media screen and (min-width : 601px) and (max-width: 900px){
    .titre {
        width: 300px;
        height: 40px;
        margin-left: 60%;
    }
    #img1 {
        width: 250px;
        height: 150px;
        margin-left: 30%;
    }
    
    .card-perso {
        border: 1px solid black;
        padding: 5%;
        width: 260px;
        height: 100px;
        margin-left: 20%;

       
    }
    .reponse {
        display: grid;
        grid-template-columns: repeat(1, 1fr);
        
    }
    .partE , .partI ,.partS , .partN ,.partT , .partF ,.partJ , .partP{
        margin: auto 30%;
        width: 100%;
    }
    .result{
        margin-left: -30%;
        width: 100%;
        height: 30px;
        background-color:rgb(236, 236, 236) ;
        text-align: center;
        border-radius: 10px;
    } 
    .part1 ,.part2 , .part3 , .part4{
        width: 100%;
    }

 }
 @media screen and (min-width : 201px) and (max-width: 600px){
    
    .titre {
        width: 167px;
        height: 40px;
        margin-left: 55%;
    }
    #img1 {
        width: 150px;
        height: 100px;
        margin-left: 20%;
    }
    
    .card-perso {
        border: 1px solid black;
        padding: 5%;
        width: 148px;
        height: 120px;
        margin-left: 10%;
        white-space: nowrap;

       
    }
    .reponse {
        display: grid;
        grid-template-columns: repeat(1, 1fr);
        
    }
    .partE , .partI ,.partS , .partN ,.partT , .partF ,.partJ , .partP{
        margin: auto 2%;
        width: 100%;
    }
    .result{
        margin-left: -2%;
        width: 100%;
        height: 30px;
        background-color:rgb(236, 236, 236) ;
        text-align: center;
        border-radius: 10px;
    } 
    .part1 ,.part2 , .part3 , .part4{
        width: 100%;
    }
 }
</style>
<body>
    <div class="titre">
        <h3>Test Personnalité</h3>
    </div>
    <div class="navBar">
        <img src="https://menara-holding.ma/Assets/images/Logo_mh.svg" id="img1">

        <div class="card-perso">
            <h5>Cin:
                <?php echo $cin; ?>
            </h5>
            <br>
            <h5>Nom:
                <?php echo $nom; ?>
            </h5>
            <br>
            <h5>Prenom:
                <?php echo $prenom; ?>
            </h5>
            <br>
            <h6>Date :
                <?php echo date("Y-m-d") ?>
            </h6>
        </div>
    </div>
    <div id="timer">
        <h4><?php echo $temps; ?></h4>
    </div>
    <form method="post" action="traitement.php">
        <div class="container">

            <div class="part1">
                <h2> 1.Etes-vous plutôt "E" ou plutôt "I" ?</h2>
            </div>
            <div class="reponse">
                <div class="partE">
                    <ul>
                        <li><input type="checkbox" name="resultatE[]" value="1">Vous êtes dynamique </li>
                        <li><input type="checkbox" name="resultatE[]" value="1">Vous aimez parler</li>
                        <li><input type="checkbox" name="resultatE[]" value="1">Vous pensez à voix haute</li>
                        <li><input type="checkbox" name="resultatE[]" value="1">Vous agissez, puis pensez </li>
                        <li><input type="checkbox" name="resultatE[]" value="1">Vous n’aimez pas être seul</li>
                        <li><input type="checkbox" name="resultatE[]" value="1">Vous aimez établir de nouveaux contacts
                        </li>
                        <li><input type="checkbox" name="resultatE[]" value="1">Vous préférez parler plutôt qu’écrire
                        </li>
                        <li><input type="checkbox" name="resultatE[]" value="1"> Vous pouvez facilement être distrait
                        </li>
                        <li><input type="checkbox" name="resultatE[]" value="1">Vous préférez faire plusieurs choses à
                            la fois </li>
                        <li><input type="checkbox" name="resultatE[]" value="1">Vous avez parfois un discours changeant
                        </li>
                    </ul>
                    <div class="result">
                        <h6 id="resultatE">E: 0/10</h6>
                    </div>
                </div>


                <div class="partI">
                    <ul>
                        <li><input type="checkbox" name="resultatI[]" value="1">Vous êtes calme </li>
                        <li><input type="checkbox" name="resultatI[]" value="1">Vous aimez écouter</li>
                        <li><input type="checkbox" name="resultatI[]" value="1">Vous réfléchissez posément</li>
                        <li><input type="checkbox" name="resultatI[]" value="1">Vous pensez, puis agissez </li>
                        <li><input type="checkbox" name="resultatI[]" value="1">Vous vous sentez bien quand vous êtes
                            seul</li>
                        <li><input type="checkbox" name="resultatI[]" value="1">Vous aimez approfondir vos contacts</li>
                        <li><input type="checkbox" name="resultatI[]" value="1">Vous êtes considéré comme plutôt secret
                            et réservé </li>
                        <li><input type="checkbox" name="resultatI[]" value="1">Vous possédez une bonne capacité de
                            concentration</li>
                        <li><input type="checkbox" name="resultatI[]" value="1">Vous possédez une bonne capacité de
                            concentration </li>
                        <li><input type="checkbox" name="resultatI[]" value="1">Vous êtes indépendant</li>
                    </ul>
                    <div class="result">
                        <h6 id="resultatI">I: 0/10</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">

            <div class="part2">
                <h2> 1.Etes-vous plutôt "S" ou plutôt "N" ?</h2>
            </div>
            <div class="reponse">
                <div class="partS">
                    <ul>
                        <li><input type="checkbox" name="resultatS[]" value="1"> Vous vous attachez aux faits et aux
                            détails </li>
                        <li><input type="checkbox" name="resultatS[]" value="1">Vous aimez les choses utiles</li>
                        <li><input type="checkbox" name="resultatS[]" value="1">Vous vivez dans l'instant présent</li>
                        <li><input type="checkbox" name="resultatS[]" value="1">Vous faites confiance à l’expérience
                        </li>
                        <li><input type="checkbox" name="resultatS[]" value="1">Vous aimez approfondir vos compétences
                        </li>
                        <li><input type="checkbox" name="resultatS[]" value="1"> Vous restez fidèle aux méthodes qui ont
                            fait leurs preuves</li>
                        <li><input type="checkbox" name="resultatS[]" value="1">Vous préférez les instructions étape par
                            étape</li>
                        <li><input type="checkbox" name="resultatS[]" value="1"> Vous êtes pratique</li>
                        <li><input type="checkbox" name="resultatS[]" value="1"> Vous aimez ce qui est concret, réel,
                            directement observable</li>
                        <li><input type="checkbox" name="resultatS[]" value="1"> Vous êtes réaliste : vous voyez ce qui
                            existe</li>
                    </ul>
                    <div class="result">
                        <h6 id="resultatS">S: 0/10</h6>
                    </div>
                </div>


                <div class="partN">
                    <ul>
                        <li><input type="checkbox" name="resultatN[]" value="1">Vous vous intéressez aux idées</li>
                        <li><input type="checkbox" name="resultatN[]" value="1">Vous remarquez tout ce qui est nouveau
                            et différent</li>
                        <li><input type="checkbox" name="resultatN[]" value="1">Vous pensez aux implications futures
                        </li>
                        <li><input type="checkbox" name="resultatN[]" value="1">Vous suivez votre instinct </li>
                        <li><input type="checkbox" name="resultatN[]" value="1">Vous aimez apprendre de nouvelles
                            compétences</li>
                        <li><input type="checkbox" name="resultatN[]" value="1">Vous n’aimez pas la routine</li>
                        <li><input type="checkbox" name="resultatN[]" value="1">Vous cherchez à comprendre </li>
                        <li><input type="checkbox" name="resultatN[]" value="1">Vous êtes théorique</li>
                        <li><input type="checkbox" name="resultatN[]" value="1"> Vous êtes attirés par les idées
                            originales</li>
                        <li><input type="checkbox" name="resultatN[]" value="1"> Vous êtes imaginatifs : vous voyez les
                            possibilités</li>

                    </ul>
                    <div class="result">
                        <h6 id="resultatN">N: 0/10</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">

            <div class="part3">
                <h2> 1.Etes-vous plutôt "T" ou plutôt "F" ?</h2>
            </div>
            <div class="reponse">
                <div class="partT">
                    <ul>
                        <li><input type="checkbox" name="resultatT[]" value="1">Vous vous efforcez d'être objectif dans
                            vos décisions</li>
                        <li><input type="checkbox" name="resultatT[]" value="1">Vous apparaissez calme et réservé</li>
                        <li><input type="checkbox" name="resultatT[]" value="1">Vous avez un sens aigu de la justice
                        </li>
                        <li><input type="checkbox" name="resultatT[]" value="1">Vous vous impliquez peu, vous prenez de
                            la distance</li>
                        <li><input type="checkbox" name="resultatT[]" value="1"> Vous êtes critique (vous remarquez vite
                            les failles et les défauts)</li>
                        <li><input type="checkbox" name="resultatT[]" value="1">Vous adorez argumenter pour le plaisir
                        </li>
                        <li><input type="checkbox" name="resultatT[]" value="1">Vous êtes franc et direct</li>
                        <li><input type="checkbox" name="resultatT[]" value="1">Vous êtes motivé par vos projets</li>
                        <li><input type="checkbox" name="resultatT[]" value="1">Vous aimez vous placer en observateur
                        </li>
                        <li><input type="checkbox" name="resultatT[]" value="1">Vous êtes sensible à la logique</li>
                    </ul>
                    <div class="result">
                        <h6 id="resultatT">T : 0/10</h6>
                    </div>
                </div>


                <div class="partF">
                    <ul>
                        <li><input type="checkbox" name="resultatF[]" value="1"> Vous fondez vos décisions sur vos
                            valeurs et vos sentiments</li>
                        <li><input type="checkbox" name="resultatF[]" value="1"> Vous êtes sociable et amical</li>
                        <li><input type="checkbox" name="resultatF[]" value="1"> Vous avez tendance à la clémence</li>
                        <li><input type="checkbox" name="resultatF[]" value="1"> Vous prenez les choses à cœur</li>
                        <li><input type="checkbox" name="resultatF[]" value="1"> Vous tentez de faire plaisir (prompt à
                            faire des compliments)</li>
                        <li><input type="checkbox" name="resultatF[]" value="1"> Vous évitez la discussion et le conflit
                        </li>
                        <li><input type="checkbox" name="resultatF[]" value="1"> Vous êtes diplomate et faîtes preuve de
                            tact</li>
                        <li><input type="checkbox" name="resultatF[]" value="1"> Vous êtes motivé par l’estime des autre
                        </li>
                        <li><input type="checkbox" name="resultatF[]" value="1"> Vous êtes sensible (facilement blessé)
                        </li>
                        <li><input type="checkbox" name="resultatF[]" value="1"> Vous faîtes confiance à vos impressions
                        </li>

                    </ul>
                    <div class="result">
                        <h6 id="resultatF">F : 0/10</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">

            <div class="part4">
                <h2> 1.Etes-vous plutôt "J" ou plutôt "P" ?</h2>
            </div>
            <div class="reponse">
                <div class="partJ">
                    <ul>
                        <li><input type="checkbox" name="resultatJ[]" value="1"> Vous aimez organiser et planifier</li>
                        <li><input type="checkbox" name="resultatJ[]" value="1"> Vous êtes sérieux et conventionnel</li>
                        <li><input type="checkbox" name="resultatJ[]" value="1"> Vous suivez votre calendrier et êtes
                            parfaitement ponctuel</li>
                        <li><input type="checkbox" name="resultatJ[]" value="1"> Vous aimez terminer vos projets</li>
                        <li><input type="checkbox" name="resultatJ[]" value="1"> Vous travaillez d'abord, vous vous
                            amusez ensuit</li>
                        <li><input type="checkbox" name="resultatJ[]" value="1"> Vous n’aimez pas le stress de dernière
                            minute</li>
                        <li><input type="checkbox" name="resultatJ[]" value="1"> Vous ne discutez pas les règles</li>
                        <li><input type="checkbox" name="resultatJ[]" value="1"> Vous cherchez à maîtriser</li>
                        <li><input type="checkbox" name="resultatJ[]" value="1"> Vous êtes à l’aise au sein de
                            structures bien définies</li>
                        <li><input type="checkbox" name="resultatJ[]" value="1"> Vous n’aimez pas le provisoire,
                            l’incertain</li>
                    </ul>
                    <div class="result">
                        <h6 id="resultatJ">J : 0/10</h6>
                    </div>
                </div>


                <div class="partP">
                    <ul>
                        <li><input type="checkbox" name="resultatP[]" value="1">Vous aimez vivre de façon flexible </li>
                        <li><input type="checkbox" name="resultatP[]" value="1">Vous êtes ludique et non-conventionne
                        </li>
                        <li><input type="checkbox" name="resultatP[]" value="1">Vous n’avez ni heure ni délais </li>
                        <li><input type="checkbox" name="resultatP[]" value="1">Vous aimez démarrer des projets </li>
                        <li><input type="checkbox" name="resultatP[]" value="1">Vous vous amusez d'abord et travaillez
                            ensuite </li>
                        <li><input type="checkbox" name="resultatP[]" value="1">Vous rechignez à vous engager </li>
                        <li><input type="checkbox" name="resultatP[]" value="1">Vous discutez les règles </li>
                        <li><input type="checkbox" name="resultatP[]" value="1">Vous cherchez à comprendre </li>
                        <li><input type="checkbox" name="resultatP[]" value="1">Vous aimez conserver votre liberté
                            d'action </li>
                        <li><input type="checkbox" name="resultatP[]" value="1">Vous restez ouvert, aimez vivre des
                            expériences, vous adapter </li>

                    </ul>
                    <div class="result">
                        <h6 id="resultatP">P : 0/10</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="valider"> <input type="submit" name="submit" value="Valider"></div>
    </form>
</body>


<!--JavaScript-->

<script>
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



    var timeStr = "<?php echo $temps; ?>"; // Récupérer le temps depuis la session PHP au format "00:00:00"
   // Convertir le temps en secondes
    var timeParts = timeStr.split(":");
    var minutes = parseInt(timeParts[0]);
    var seconds = parseInt(timeParts[1]);
    var timeLeft = minutes * 60 + seconds;

    console.log("Temps en secondes : " + timeLeft); // Débogage

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

        // Fonction pour valider le formulaire avant la soumission
        function validerFormulaire() {
            // Sélectionnez toutes les cases à cocher
            const checkboxes = document.querySelectorAll('input[type="checkbox"]');
            let auMoinsUneSelectionnee = false;

            // Vérifiez si au moins une case est cochée
            checkboxes.forEach(function (checkbox) {
                if (checkbox.checked) {
                    auMoinsUneSelectionnee = true;
                }
            });

            // Si aucune case n'est cochée, affichez un message d'alerte et empêchez la soumission du formulaire
            if (!auMoinsUneSelectionnee) {
                alert("Vous devez répondre à au moins une question.");
                return false;
            }

            // Si au moins une case est cochée, laissez le formulaire se soumettre
            return true;
        }


    // Désactiver le bouton "Retour" du navigateur
    history.pushState(null, null, location.href);
    window.onpopstate = function (event) {
        history.go(1);
    };

</script>

</html>