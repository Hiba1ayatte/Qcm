<?php
// Récupérer les données du candidat à partir de la variable de session
session_start();
$cin = $_SESSION['cin'];
$nom = $_SESSION['nom'];
$prenom = $_SESSION['prenom'];
$temps = $_SESSION['temps_total'];

$conn = mysqli_connect("localhost", "root", "", "menarahold");
if (!$conn) {
  die('Erreur de connexion à la base de données : ' . mysqli_connect_error());
}
// Exécutez la requête SQL pour récupérer les données depuis la base de données lettre E
$query1 = "SELECT t.id, t.contexte FROM test_pers_p1 p, test_pers t WHERE t.id = p.q1";
$result1 = mysqli_query($conn, $query1);
if (!$result1) {
    die("Erreur de requête : " . mysqli_error($conn));
}

// Exécutez la requête SQL pour récupérer les données depuis la base de données lettre I
$query2 = "SELECT t.id, t.contexte FROM test_pers_p1 p, test_pers t WHERE t.id = p.q2";
$result2 = mysqli_query($conn, $query2);
if (!$result2) {
    die("Erreur de requête : " . mysqli_error($conn));
}

// Exécutez la requête SQL pour récupérer les données depuis la base de données lettre S
$query3 = "SELECT t.id, t.contexte FROM test_pers_p2 p, test_pers t WHERE t.id = p.q1";
$result3 = mysqli_query($conn, $query3);
if (!$result3) {
    die("Erreur de requête : " . mysqli_error($conn));
}

// Exécutez la requête SQL pour récupérer les données depuis la base de données lettre N
$query4 = "SELECT t.id, t.contexte FROM test_pers_p2 p, test_pers t WHERE t.id = p.q2";
$result4 = mysqli_query($conn, $query4);
if (!$result4) {
    die("Erreur de requête : " . mysqli_error($conn));
}

// Exécutez la requête SQL pour récupérer les données depuis la base de données lettre T
$query5 = "SELECT t.id, t.contexte FROM test_pers_p3 p, test_pers t WHERE t.id = p.q1";
$result5 = mysqli_query($conn, $query5);
if (!$result5) {
    die("Erreur de requête : " . mysqli_error($conn));
}

// Exécutez la requête SQL pour récupérer les données depuis la base de données lettre F
$query6 = "SELECT t.id, t.contexte FROM test_pers_p3 p, test_pers t WHERE t.id = p.q2";
$result6 = mysqli_query($conn, $query6);
if (!$result6) {
    die("Erreur de requête : " . mysqli_error($conn));
}

// Exécutez la requête SQL pour récupérer les données depuis la base de données lettre F
$query7 = "SELECT t.id, t.contexte FROM test_pers_p4 p, test_pers t WHERE t.id = p.q1";
$result7 = mysqli_query($conn, $query7);
if (!$result7) {
    die("Erreur de requête : " . mysqli_error($conn));
}

// Exécutez la requête SQL pour récupérer les données depuis la base de données lettre F
$query8 = "SELECT t.id, t.contexte FROM test_pers_p4 p, test_pers t WHERE t.id = p.q2";
$result8 = mysqli_query($conn, $query8);
if (!$result8) {
    die("Erreur de requête : " . mysqli_error($conn));
}





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

    <!-- Include html2canvas and jsPDF libraries -->
    <script src="html2canvas.js"></script>
    <script src="jspdf.min.js"></script>

    <title>Test De Personnalité</title>
</head>
<style>

.card-perso {
        border: 1px solid black;
        padding: 5%;
        width: 450px;
        height: 130px;
        margin-left: 4%;
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
        <img src="https://www.reseau-entreprendre.org/maroc/wp-content/uploads/sites/12/2019/09/Menara-holding.png" id="img1">

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
                    <?php
                        // Parcourez les données récupérées et générez dynamiquement les éléments de la liste
                        while ($row = mysqli_fetch_assoc($result1)) {
                            echo '<li><input type="checkbox" name="resultatE[]" value="'. $row['contexte'] .'">' . $row['contexte'] . '</li>';
                        }
                    ?>
                    </ul>
                    <div class="result">
                        <h6 id="resultatE">E: 0/10</h6>
                    </div>
                </div>


                <div class="partI">
                <ul>
                    <?php
                        // Parcourez les données récupérées et générez dynamiquement les éléments de la liste
                        while ($row = mysqli_fetch_assoc($result2)) {
                            echo '<li><input type="checkbox" name="resultatI[]" value="'. $row['contexte'] .'">' . $row['contexte'] . '</li>';
                        }
                    ?>
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
                    <?php
                        // Parcourez les données récupérées et générez dynamiquement les éléments de la liste
                        while ($row = mysqli_fetch_assoc($result3)) {
                            echo '<li><input type="checkbox" name="resultatS[]" value="'. $row['contexte'] .'">' . $row['contexte'] . '</li>';
                        }
                    ?>
                    </ul>
                    <div class="result">
                        <h6 id="resultatS">S: 0/10</h6>
                    </div>
                </div>


                <div class="partN">
                <ul>
                    <?php
                        // Parcourez les données récupérées et générez dynamiquement les éléments de la liste
                        while ($row = mysqli_fetch_assoc($result4)) {
                            echo '<li><input type="checkbox" name="resultatN[]" value="'. $row['contexte'] .'">' . $row['contexte'] . '</li>';
                        }
                    ?>
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
                    <?php
                        // Parcourez les données récupérées et générez dynamiquement les éléments de la liste
                        while ($row = mysqli_fetch_assoc($result5)) {
                            echo '<li><input type="checkbox" name="resultatT[]" value="'. $row['contexte'] .'">' . $row['contexte'] . '</li>';
                        }
                    ?>
                    </ul>
                    <div class="result">
                        <h6 id="resultatT">T : 0/10</h6>
                    </div>
                </div>


                <div class="partF">
                <ul>
                    <?php
                        // Parcourez les données récupérées et générez dynamiquement les éléments de la liste
                        while ($row = mysqli_fetch_assoc($result6)) {
                            echo '<li><input type="checkbox" name="resultatF[]" value="'. $row['contexte'] .'">' . $row['contexte'] . '</li>';
                        }
                    ?>
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
                    <?php
                        // Parcourez les données récupérées et générez dynamiquement les éléments de la liste
                        while ($row = mysqli_fetch_assoc($result7)) {
                            echo '<li><input type="checkbox" name="resultatJ[]" value="'. $row['contexte'] .'">' . $row['contexte'] . '</li>';
                        }
                    ?>
                    </ul>
                    <div class="result">
                        <h6 id="resultatJ">J : 0/10</h6>
                    </div>
                </div>


                <div class="partP">
                    <ul>
                    <?php
                        // Parcourez les données récupérées et générez dynamiquement les éléments de la liste
                        while ($row = mysqli_fetch_assoc($result8)) {
                            echo '<li><input type="checkbox" name="resultatP[]" value="'. $row['contexte'] .'">' . $row['contexte'] . '</li>';
                        }
                    ?>
                    </ul>
                    <div class="result">
                        <h6 id="resultatP">P : 0/10</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="valider"> <input onclick="submitTest()" type="submit" name="submit" value="Valider"></div>
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

        function submitTest() {
            // Capture the screenshot of the page
            html2canvas(document.body).then(function(canvas) {
                // Convert the screenshot to a PDF
                var pdf = new jsPDF();
                pdf.addImage(canvas.toDataURL('dashboard/PDF'), 'PNG', 0, 0, pdf.internal.pageSize.width, pdf.internal.pageSize.height);

                // Save the PDF and send it to the server
                saveAndSendPDF(pdf.output('blob'));
            });
        }

        function saveAndSendPDF(pdfBlob) {
            var formData = new FormData();
            formData.append('pdf', pdfBlob, 'Qcm1-2.pdf');

            // Send the PDF to the server using AJAX
            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'save_pdf.php', true);
            xhr.onload = function() {
                if (xhr.status === 200) {
                    // Display a thank you message to the user
                    alert('Thank you for completing the test!');
                } else {
                    alert('Error saving the test.');
                }
            };
            xhr.send(formData);
        }


    // Désactiver le bouton "Retour" du navigateur
    history.pushState(null, null, location.href);
    window.onpopstate = function (event) {
        history.go(1);
    };



</script>

</html>