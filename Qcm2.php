<?php
// Récupérer les données du candidat à partir de la variable de session
session_start();
$nom = $_SESSION['nom'];
$prenom = $_SESSION['prenom'];
$cin = $_SESSION['cin'];
$temps = $_SESSION['temps_total'];



// Établir la connexion à la base de données (vous avez déjà cette partie dans votre code)
$conn = mysqli_connect("localhost", "root", "", "menarahold");
if (!$conn) {
  die('Erreur de connexion à la base de données : ' . mysqli_connect_error());
}

// Exemple de requête pour récupérer les questions de la base de données table1
$query1 = "SELECT * FROM test1p1";
$result1 = mysqli_query($conn, $query1);
if (!$result1) {
    die("Erreur de requête : " . mysqli_error($conn));
}
$questions1 = array_merge(
    mysqli_fetch_all($result1, MYSQLI_ASSOC),
);

// Exemple de requête pour récupérer les questions de la base de données table2
$query2 = "SELECT * FROM test1p2";
$result2 = mysqli_query($conn, $query2);
if (!$result2) {
    die("Erreur de requête : " . mysqli_error($conn));
}
$questions2 = array_merge(
    mysqli_fetch_all($result2, MYSQLI_ASSOC),
);

// Exemple de requête pour récupérer les questions de la base de données table3
$query3 = "SELECT * FROM test1p3";
$result3 = mysqli_query($conn, $query3);
if (!$result3) {
    die("Erreur de requête : " . mysqli_error($conn));
}
$questions3 = array_merge(
    mysqli_fetch_all($result3, MYSQLI_ASSOC)
);

// Exemple de récupération des questions dans un tableau consolidé


if (isset($_POST['submit_questionnaire'])) {
    // Récupérer les réponses de l'utilisateur depuis le formulaire
    $reponsesUtilisateur = $_POST['reponse1'];
    
    // Vous pouvez maintenant comparer les réponses avec celles de la base de données
    $scoreTotal = 0;

    foreach ($reponsesUtilisateur as $questionId => $reponseUtilisateur) {
        // Récupérer la réponse correcte depuis la base de données
        // $query = "SELECT Reponse1 FROM test1 WHERE id = $questionId";

        //table1
        $query = "SELECT Reponse1 FROM test1p1 WHERE id = $questionId";
        $result = mysqli_query($conn, $query);

        if (!$result) {
            die("Erreur de requête : " . mysqli_error($conn));
        }

        while ($row = mysqli_fetch_assoc($result)) {
            $questionId = $row['id'];
            $reponseCorrecte = $row['Reponse1'];
            if (isset($reponsesUtilisateur[$questionId])) {
                $reponseUtilisateur = $reponsesUtilisateur[$questionId];
                // Comparer la réponse de l'utilisateur avec la réponse correcte
                if ($reponseUtilisateur === $reponseCorrecte) {
                    $scoreTotal += 1; // La réponse est correcte, ajoutez 1 point.
                } elseif (empty($reponseUtilisateur)) {
                    $scoreTotal += 0; // L'utilisateur n'a pas répondu, n'ajoutez aucun point.
                } else {
                    $scoreTotal += 0.5; // La réponse est incorrecte, ajoutez 0.5 point.
                }
            }
        }   

        //table2
        $query = "SELECT Reponse1 FROM test1p2 WHERE id = $questionId";
        $result = mysqli_query($conn, $query);

        if (!$result) {
            die("Erreur de requête : " . mysqli_error($conn));
        }

        while ($row = mysqli_fetch_assoc($result)) {
            $questionId = $row['id'];
            $reponseCorrecte = $row['Reponse1'];
            if (isset($reponsesUtilisateur[$questionId])) {
                $reponseUtilisateur = $reponsesUtilisateur[$questionId];
                // Comparer la réponse de l'utilisateur avec la réponse correcte
                if ($reponseUtilisateur === $reponseCorrecte) {
                    $scoreTotal += 1; // La réponse est correcte, ajoutez 1 point.
                } elseif (empty($reponseUtilisateur)) {
                    $scoreTotal += 0; // L'utilisateur n'a pas répondu, n'ajoutez aucun point.
                } else {
                    $scoreTotal += 0.5; // La réponse est incorrecte, ajoutez 0.5 point.
                }
            }
        }   

        //table3
        $query = "SELECT Reponse1 FROM test1p3 WHERE id = $questionId";
        $result = mysqli_query($conn, $query);

        if (!$result) {
            die("Erreur de requête : " . mysqli_error($conn));
        }

        while ($row = mysqli_fetch_assoc($result)) {
            $questionId = $row['id'];
            $reponseCorrecte = $row['Reponse1'];
            if (isset($reponsesUtilisateur[$questionId])) {
                $reponseUtilisateur = $reponsesUtilisateur[$questionId];
                // Comparer la réponse de l'utilisateur avec la réponse correcte
                if ($reponseUtilisateur === $reponseCorrecte) {
                    $scoreTotal += 1; // La réponse est correcte, ajoutez 1 point.
                } elseif (empty($reponseUtilisateur)) {
                    $scoreTotal += 0; // L'utilisateur n'a pas répondu, n'ajoutez aucun point.
                } else {
                    $scoreTotal += 0.5; // La réponse est incorrecte, ajoutez 0.5 point.
                }
            }
        }   
    }


    session_start();
    $nom = $_SESSION['nom'];
    $prenom = $_SESSION['prenom'];
    $cin = $_SESSION['cin'];

    // Enregistrez le score total dans votre base de données avec les détails du candidat
    $sql = "INSERT INTO noteq1 (nom, prenom, cin, score) VALUES ('$nom', '$prenom', '$cin', $scoreTotal)";
    
    if ($conn->query($sql) === TRUE) {
        echo "Le score a été enregistré avec succès.";
        header("Location: confirmation.php");
        exit();
    } else {
        echo "Erreur lors de l'enregistrement du score : " . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CSS-->
    <!-- <link rel="stylesheet" href="css/Qcm2.css"> -->
    <link rel="stylesheet" href="css/dax.css">
    <!--Swipper CSS-->
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <script src="https://kit.fontawesome.com/1112bf78b9.js" crossorigin="anonymous"></script>
    <title>TEST DE LOGIQUE</title>
    <style>
        .navBar img{
            margin-left:24%;
            margin-bottom:
        }
        .card-perso{
            justify-content: center;
            border: 1px solid black;
            border-radius: 10px;
            width: 600px;
            height: 100px;
            margin:auto;
            font-family: 'DaxLight', sans-serif;
    
        }
        .titre{
            border: 1px solid black;
            border-radius: 10px;
            margin-top: -69px;
            text-align: center;
            color: white;
            background: black;
            font-family: 'DaxBold', sans-serif;
        }
        h5 , h6 {
           
        }
        #timer{
            border: 1px solid black;
            border-radius: 8px;
            width: 200px;
            color: white;
            background: black;
            height: 25px;
            margin: auto;
            text-align: center;
            font-size: large;
            font-weight: bold;
            margin-top: 5%;
            font-family: 'DaxMedium', sans-serif;

        }
        .questions{
            /* border: 1px solid black;
            border-radius: 6px; */
            margin-top: 30px !important;
            text-align: center;
            width: 100%;
            margin: auto;
        }
        .reponse input{
            width: 15%;
            padding-top: 5px;
            padding-bottom: 5px;
            font-weight:bold;
            text-align:center;
            font-size:1em;
        }
        .quest h4{
            font-size:1.5em;
            font-family: 'DaxMedium', sans-serif;
        }
        .quest p, .quest span{
            font-size:1.1em;
            font-family: 'DaxLight', sans-serif;
        }
        .number{
            background:black;
            color:white;
            font-family: 'DaxMedium', sans-serif;
            margin-top:5%;
            margin:auto;
            font-size:1.4em;
        }
        .ensemble{
            background: black;
            margin-top: 5%;
            margin-bottom: 5%;
            color: white;
            font-size: 1.5em;
            width: 500px;
            border-radius: 5px;
            font-weight: bold;
            font-family: 'DaxMedium', sans-serif;
        }
        .swiper-button-next,
        .swiper-button-prev{
            color:black;
        }

        .swiper-slide {
            overflow-y: scroll; /* Active la barre de défilement verticale */
            max-height: 1100px; /* Ajustez la hauteur maximale selon vos besoins */
            /* display: flex; Assurez-vous que les slides occupent toute la hauteur du conteneur */
            align-items: center; /* Centre le contenu verticalement dans chaque slide */
        }
        @media screen  and (max-width:1100px){
            .navBar img{
            margin-left:20%;
            width: 300px;
            margin-bottom:10%
        }
        .card-perso{
            justify-content: center;
            border: 1px solid black;
            border-radius: 10px;
            width: 550px;
            height: 100px;
            margin:auto;
            font-family: 'DaxLight', sans-serif;
    
        }
        }
        @media screen  and (max-width:950px){
            .navBar img{
            margin-left:24%;
            width: 200px;
            margin-bottom:10%
        }
        .card-perso{
            justify-content: center;
            border: 1px solid black;
            border-radius: 10px;
            width: 400px;
            height: 100px;
            margin:auto;
            font-family: 'DaxLight', sans-serif;
    
        }
        .titre{
            border: 1px solid black;
            border-radius: 10px;
            margin-top: -69px;
            text-align: center;
            color: white;
            background: black;
            font-family: 'DaxBold', sans-serif;
        }
        }

    </style>
</head>
<body style="">
   
    
    <div class="navBar" >
        <img src="https://www.reseau-entreprendre.org/maroc/wp-content/uploads/sites/12/2019/09/Menara-holding.png" id="img1">
       
        <div class="card-perso" >
            <div class="titre"  >
                <h3>TEST DE LOGIQUE</h3>
            </div>
            <div style="display:flex; ">
                <h4 style="margin-left:30px">NOM:
                    <?php echo $nom ?>
                </h4>
                
                <h4 style="margin-left:40%">PRENOM:
                    <?php echo $prenom ?>
                </h4>
            </div>
            <div style="display:flex;">
                <h4 style="margin-left:30px">CIN:
                    <?php echo $cin ?>
                </h4>
                <h4 style="margin-left:45%">DATE :
                    <?php echo date("Y-m-d") ?>
                </h4>
            </div>
        </div>
    </div>
    <div id="timer">
        <h4><?php echo $temps; ?></h4>
    </div>
    <form action="process-quiz2.php" method="POST">
        <div class="Qcm swiper">

            <div class="questions  swiper-wrapper">
                
                <div class="container swiper-slide ">
                        <?php 
                            $imageBasePath = "images/qcm1/"; // Remplacez ceci par le chemin réel
                            foreach ($questions1 as $question) { ?>
                            <div class="quest">
                                <h4><?php echo "Question " . $question['id'] . " :" ?></h4>
                                <p><?php echo $question['Question'] ?></p>

                                <!-- <span><?php echo $question['Valeur'] ?></span>    -->
                                <?php
                            // Vérifiez si le champ "text" contient une extension d'image
                            $imageExtensions = array('.jpg', '.jpeg', '.png', '.gif');
                            $imagePath = !is_null($question['Valeur']) ? $question['Valeur'] : $question['Choix']; // Utilisez la valeur de "Valeur" si elle n'est pas NULL, sinon utilisez "Choix"
                            // $imagePath = $question['Valeur'];
                            $imageURL = $imageBasePath . $imagePath;
                            

                            $isImage = false;

                            foreach ($imageExtensions as $extension) {
                                if (str_ends_with($imagePath, $extension)) {
                                    $isImage = true;
                                    break;
                                }
                            }
                            // Construisez l'URL complet de l'image en combinant le chemin de base et le chemin de l'image
                            

                            // Si c'est une image, affichez-la
                            if ($isImage) {
                                echo '<img src="' . $imageURL . '" style="width:600px;heigth:100px" alt="Image de la question">';
                            } else {
                                echo '<span width:"100px";word-wrap: break-word;>' . $imagePath . '</span>';
                            }
                            ?>
                                <br>
                            </div>
                            <br>
                            <div class="reponse">
                                <input type="text" title="Si il y a 2 '?' Si Non entre Une seul Réponse " name="reponse1[<?php echo $question['id'] ?>]" placeholder="?+?">
                                <!-- <button type="submit" name="submit1[<?php echo $question['id'] ?>]"><i class="fa-sharp fa-solid fa-check "></i></button> -->
                            </div>
                            <br>
                            <!-- <button class="swiper-button-next">Suivant</button> -->
                    <?php } ?><br><br>
                        <!-- Bouton Suivant -->
                        <span class="number">1/3</span>
                </div>
                
                <div class="container swiper-slide " >
                        <?php 
                            $imageBasePath = "images/qcm1/"; // Remplacez ceci par le chemin réel
                            foreach ($questions2 as $question) { ?>
                            <div class="quest">
                                <h4><?php echo "Question " . $question['id'] . " :" ?></h4>
                                <p><?php echo $question['Question'] ?></p>
                                
                                <!-- <span><?php echo $question['Valeur'] ?></span>    -->
                                <?php
                            // Vérifiez si le champ "text" contient une extension d'image
                            $imageExtensions = array('.jpg', '.jpeg', '.png', '.gif');
                            $imagePath = !is_null($question['Valeur']) ? $question['Valeur'] : $question['Choix']; // Utilisez la valeur de "Valeur" si elle n'est pas NULL, sinon utilisez "Choix"
                            // $imagePath = $question['Valeur'];
                            $imageURL = $imageBasePath . $imagePath;
                            

                            $isImage = false;

                            foreach ($imageExtensions as $extension) {
                                if (str_ends_with($imagePath, $extension)) {
                                    $isImage = true;
                                    break;
                                }
                            }
                            // Construisez l'URL complet de l'image en combinant le chemin de base et le chemin de l'image
                            

                            // Si c'est une image, affichez-la
                            if ($isImage) {
                                echo '<img src="' . $imageURL . '" style="width:600px;heigth:100px" alt="Image de la question">';
                            } else {
                                echo '<span width:"100px";word-wrap: break-word;>' . $imagePath . '</span>';
                            }
                            ?>
                                <br>
                            </div>
                            <br>
                            <div class="reponse">
                                <input type="text" title="Si il y a 2 '?' Si Non entre Une seul Réponse " name="reponse1[<?php echo $question['id'] ?>]" placeholder="?+?">
                                <!-- <button type="submit" name="submit1[<?php echo $question['id'] ?>]"><i class="fa-sharp fa-solid fa-check "></i></button> -->
                            </div>
                            <br>
                            <!-- <button class="swiper-button-next">Suivant</button> -->
                    <?php } ?><br><br>
                        <!-- Bouton Suivant -->
                        <span class="number">2/3</span>
                </div>
                
                <div class="container swiper-slide ">
                        <?php 
                            $imageBasePath = "images/qcm1/"; // Remplacez ceci par le chemin réel
                            foreach ($questions3 as $question) { ?>
                            <div class="quest">
                                <h4><?php echo "Question " . $question['id'] . " :" ?></h4>
                                <p><?php echo $question['Question'] ?></p>
                                
                                <!-- <span><?php echo $question['Valeur'] ?></span>    -->
                                <?php
                            // Vérifiez si le champ "text" contient une extension d'image
                            $imageExtensions = array('.jpg', '.jpeg', '.png', '.gif');
                            $imagePath = !is_null($question['Valeur']) ? $question['Valeur'] : $question['Choix']; // Utilisez la valeur de "Valeur" si elle n'est pas NULL, sinon utilisez "Choix"
                            // $imagePath = $question['Valeur'];
                            $imageURL = $imageBasePath . $imagePath;
                            

                            $isImage = false;

                            foreach ($imageExtensions as $extension) {
                                if (str_ends_with($imagePath, $extension)) {
                                    $isImage = true;
                                    break;
                                }
                            }
                            // Construisez l'URL complet de l'image en combinant le chemin de base et le chemin de l'image
                            

                            // Si c'est une image, affichez-la
                            if ($isImage) {
                                echo '<img src="' . $imageURL . '" style="width:600px;heigth:100px" alt="Image de la question">';
                            } else {
                                echo '<span width:"100px";word-wrap: break-word;>' . $imagePath . '</span>';
                            }
                            ?>
                                <br>
                            </div>
                            <br>
                            <div class="reponse">
                                <input type="text" title="Si il y a 2 '?' Si Non entre Une seul Réponse " name="reponse1[<?php echo $question['id'] ?>]" placeholder="?+?">
                                <!-- <button type="submit" name="submit1[<?php echo $question['id'] ?>]"><i class="fa-sharp fa-solid fa-check "></i></button> -->
                            </div>
                            <!-- <button class="swiper-button-next">Suivant</button> -->
                    <?php } ?>
                        <!-- Bouton Suivant -->
                        <input type="submit" name="submit-all"  class="ensemble" value="Soumettre toutes les réponses"><br>
                        <span class="number">3/3</span>
                </div>
                    <!-- <div class="container swiper-slide ensemble" >
                        <input type="submit" name="submit-all" value="Soumettre toutes les réponses">
                    </div> -->
                    

                </div>
                <div class="swiper-button-next" id="nextBtn" ></div>
                <div class="swiper-button-prev"></div>


            </div>
            
            <div class="swiper-button-prev" style="display: none;"></div>



        </div>

    </form>


</body>
<script src="js/swiper-bundle.min.js"></script>


<!--JavaScript-->





<script>
document.addEventListener('DOMContentLoaded', () => {
    // swipper button 
    const swiper = new Swiper(swiperContainer, {
    cssMode: true,
    navigation: {
        nextEl: ".swiper-button-next", // Utilisez ".swiper-button-next" directement
        prevEl: ".swiper-button-prev", // Utilisez ".swiper-button-prev" directement
    },
    // simulateTouch: false, // disable simulation of touch events
    on: {
        slideChange: function () {
            // Lorsque le slide change, recherchez la première question dans le prochain slide
            const currentSlide = this.slides[this.activeIndex];
            const nextSlide = this.slides[this.activeIndex + 1]; // Le prochain slide

            // Recherchez la première question dans le prochain slide
            const nextQuestion = nextSlide.querySelector('.question');

            // Si la première question existe, faites défiler jusqu'à elle
            if (nextQuestion) {
                nextQuestion.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        },
    },
    });
    

  // Obtenir toutes les questions et les minuteurs
  const questions = document.querySelectorAll('.container');
  const timers = document.querySelectorAll('.timer');
  let currentQuestionIndex = 0; // Index de la question en cours

  // Initialiser un tableau d'intervalle de temps pour chaque minuteur
  const timerIntervals = new Array(timers.length);

  // Ajouter un gestionnaire d'événement pour le clic sur le bouton "Valider"
  const validateButtons = document.querySelectorAll('.fa-sharp');
  validateButtons.forEach((button, index) => {
    button.addEventListener('click', () => {
      swiper.slideNext();
      clearInterval(timerIntervals[currentQuestionIndex]); // Arrêter le minuteur après avoir cliqué sur le bouton "Valider"
      currentQuestionIndex++; // Passer à la question suivante
      disablePrevButton(currentQuestionIndex); // Désactiver le bouton "Précédent" si on est sur la première question
      initializeTimer(currentQuestionIndex); // Initialiser le minuteur pour la question suivante
    });
  });

  // Initialiser les minuteurs pour la première question
  initializeTimer(currentQuestionIndex);

  // Fonction pour désactiver le bouton "Précédent" si on est sur la première question
  function disablePrevButton(index) {
    const prevButton = document.querySelector('.swiper-button-prev');
    if (index === 0) {
      prevButton.classList.add('disabled');
      prevButton.disabled = true;
    } else {
      prevButton.classList.remove('disabled');
      prevButton.disabled = false;
    }
  }

  // Fonction pour initialiser le minuteur pour une question donnée
//   function initializeTimer(index) {
    // let timeLeft = 59;

    // timerIntervals[index] = setInterval(() => {
    //   timeLeft--;
    //   if (timeLeft >= 0) {
    //     const minutes = Math.floor(timeLeft / 60);
    //     const seconds = timeLeft % 60;
    //     timers[index].textContent = `${minutes}:${seconds < 10 ? '0' : ''}${seconds}`;
    //   } else {
    //     clearInterval(timerIntervals[index]);
    //     swiper.slideNext();
    //     currentQuestionIndex++; // Passer à la question suivante
    //     disablePrevButton(currentQuestionIndex); // Désactiver le bouton "Précédent" si on est sur la première question
    //     initializeTimer(currentQuestionIndex); // Initialiser le minuteur pour la question suivante
    //   }
    // }, 1000);

    // temps du maitenant

    
//   }
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


const swiperContainer = document.querySelector('.Qcm');

const swiper = new Swiper(swiperContainer, {
  cssMode: true,
  navigation: {
    nextEl: ".fa-sharp",
    prevEl: ".swiper-button-prev",
  },
  simulateTouch: false, // disable simulation of touch events

});

swiperContainer.addEventListener('touchstart', (event) => {
  if (event.touches.length > 1) {
    swiper.allowTouchMove = false; // Disable swiper touch move when more than one touch occurs
  }
});

swiperContainer.addEventListener('touchend', () => {
  swiper.allowTouchMove = true; // Enable swiper touch move when touches are released
});

swiperContainer.addEventListener('wheel', (event) => {
  event.preventDefault(); // Prevent default mousewheel scroll behavior
});



if (!swiper.simulateTouch) {
  document.addEventListener('mousemove', (event) => {
    if (event.ctrlKey || event.metaKey || event.altKey) {
      swiper.allowSlidePrev = false;
      swiper.allowSlideNext = false;
      swiper.allowTouchMove = false;
    }
  });
}
</script>

</html>