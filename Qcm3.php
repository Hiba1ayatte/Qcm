<?php
if (isset($_POST['submit'])) {

}
?>
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
$query1 = "SELECT * FROM test2p1";
$result1 = mysqli_query($conn, $query1);
if (!$result1) {
    die("Erreur de requête : " . mysqli_error($conn));
}
$questions1 = array_merge(
    mysqli_fetch_all($result1, MYSQLI_ASSOC),
);

// Exemple de requête pour récupérer les questions de la base de données table2
$query2 = "SELECT * FROM test2p2";
$result2 = mysqli_query($conn, $query2);
if (!$result2) {
    die("Erreur de requête : " . mysqli_error($conn));
}
$questions2 = array_merge(
    mysqli_fetch_all($result2, MYSQLI_ASSOC),
);

// Exemple de requête pour récupérer les questions de la base de données table3
$query3 = "SELECT * FROM test2p3";
$result3 = mysqli_query($conn, $query3);
if (!$result3) {
    die("Erreur de requête : " . mysqli_error($conn));
}
$questions3 = array_merge(
    mysqli_fetch_all($result3, MYSQLI_ASSOC)
);

if (isset($_POST['submit_questionnaire'])) {
    // Récupérer les réponses de l'utilisateur depuis le formulaire
    $reponsesUtilisateur = $_POST['reponse'];
    
    // Vous pouvez maintenant comparer les réponses avec celles de la base de données
    $scoreTotal = 0;

    foreach ($reponsesUtilisateur as $questionId => $reponseUtilisateur) {
        // Récupérer la réponse correcte depuis la base de données
        // $query = "SELECT Reponse1 FROM test2 WHERE id = $questionId";
         //table1
         $query = "SELECT Reponse1 FROM test2p1 WHERE id = $questionId";
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
         $query = "SELECT Reponse1 FROM test2p2 WHERE id = $questionId";
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
         $query = "SELECT Reponse1 FROM test2p3 WHERE id = $questionId";
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
    $sql = "INSERT INTO noteq2 (nom, prenom, cin, score) VALUES ('$nom', '$prenom', '$cin', $scoreTotal)";
    
    if ($conn->query($sql) === TRUE) {
        echo "Le score a été enregistré avec succès.";
        header("Location: confirmation.php");
        exit();
    } else {
        echo "Erreur lors de l'enregistrement du score : " . $conn->error;
    }
}

// Redirigez l'utilisateur vers une page de confirmation ou où vous le souhaitez
// header("Location: confirmation.php");
// exit();

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CSS-->
    <link rel="stylesheet" href="css/Qcm2.css">
    <!--Swipper CSS-->
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <script src="https://kit.fontawesome.com/1112bf78b9.js" crossorigin="anonymous"></script>
    <title>TEST DE LOGIQUE</title>
</head>
<style>
    @media screen and (min-width: 1200px)  and (max-width: 1600px) {
    .quest  img{
        margin-left: 20%;
        /* margin-top: 4%; */
    }

    .quest p{
        /* margin-left: 15%;  */
        /* margin-top: 7%; */
        width: 800px; /* Vous pouvez ajuster la largeur selon vos besoins */
        word-wrap: break-word;
    }

    .quest span{
        margin-left: 10%; 
        margin-top: 7%;
        width: 200px !important; /* Vous pouvez ajuster la largeur selon vos besoins */
        word-wrap: break-word;
    }

    .titre{
        margin-left: 60%;
        width: 460px;
        height: 40px;
        padding-top: 10px;
       
       
    }
    #timer{
    display: flex;
    justify-content: center;
    align-items: center;
    color: green;
    margin: 20px auto;
}
.swiper-button-next, .swiper-button-prev {
        color: #ae9d72;
    }
    .card-perso{
        
        padding:5% ;
        width: 400px;
        height: 140px;
        margin-top: 10%;
        padding-left: 5%;
        border-radius:10px ;
        margin-left: 20%;
     
    }
    .custom-next-button,
.custom-prev-button {
    position: absolute;
    top: 12px; /* Ajustez cette valeur pour positionner les boutons verticalement */
    z-index: 10;
}

/* Styles pour le bouton "Next" personnalisé */
.custom-next-button {
    right: 10px; /* Ajustez cette valeur pour positionner le bouton "Next" horizontalement */
}

/* Styles pour le bouton "Previous" personnalisé */
.custom-prev-button {
    left: 10px; /* Ajustez cette valeur pour positionner le bouton "Previous" horizontalement */
}
    }
   @media screen and (min-width: 901px)  and (max-width: 1200px) {
    #img1{
        width: 400px;
        height: 200px;
        margin-left: 5%;
    }
   
    .titre{
        margin-left: 60%;
        width: 260px;
        height: 40px;
        padding-top: 10px;
       
       
    }
    .card-perso{
        
        padding:5% ;
        width: 400px;
        height: 100px;
        margin-top: 10%;
        padding-left: 5%;
        border-radius:10px ;
        margin-left: 20%;
     
    }

    .quest  img{
    margin-left: 20%;
    margin-top: 4%;
    
}
}

   @media screen and (min-width: 601px)  and (max-width: 900px) {

    #img1{
        width: 300px;
        height: 250px;
        margin-left: 5%;
    }
    .titre{

        width: 200px;
        height: 40px;
        padding-top: 10px;
        margin-left: 70%;
       
    }
    .card-perso{
        
        padding:5% ;
        width: 160px;
        height: 100px;
        margin-top: 10%;
        padding-left: 5%;
        border-radius:10px ;
        margin-left: 40%;
     
    }
    .questions{
        margin-left: -5%;
       
    }
    .container{
        width: 100%;
        margin-top: 7%;
    }
    .quest h6 {
      margin-left: 10%;
      margin-top: 5%;
    }
    .quest p{
        margin-left: 15%; 
        margin-top: 7%;
    }
    .quest span{
        margin-left: 20%; 
        margin-top: 7%;
    }
    
    .reponse input{
        width: 30%;
        height: 30px;
        margin-top: 30%;
        margin-left: 50%;
    }
    .quest img {
        width: 80%;
        height: 560%;
    }
    input[type="radio"] {
        /* Ajustez la taille souhaitée ici */
        width: 20px;
        height: 20px;
       
    }
    .reponse label{
        white-space: nowrap;
        margin-bottom: 30%;
    }
    .timer{
        margin-left:25%;
        margin-top:13%;
    }
    .ensemble input{
        margin-left: 35%;
    }
}
   @media screen and (min-width: 200px)  and (max-width: 600px) {
    
    #img1{
        width: 150px;
        height: 100px;
        margin-left: 2.5%;
    }
    .titre{

        width: 150px;
        height: 40px;
        padding-top: 10px;
        margin-left: 50%;
       
    }
    .card-perso{
        
        padding:5% ;
        width: 115px;
        height: 150px;
        margin-top: 15%;
        padding-left: 15%;
        border-radius:10px ;
        margin-left: 1%;
        font-size: 15px ;
       
     
    }
    
    .questions{
        margin-left: -5%;
    }
    .container{
        width: 80%;
        margin-top:25%;
        margin-left: 10%;
    }
    .quest h6, .quest p {
      margin-left: 6%;
    }
    .quest span{
        margin-left: 12%;
        word-spacing: 1px;
    }
    #question18{
        margin-left: 6%;
        margin-right: 10%;
        width: 50%;
    }
    .reponse input{
        width: 40%;
        height: 30px;
        margin-top: 25%;
        margin-left: 40%;
    }
    .quest img {
        width: 100%;
        height: 50%;
    }
    input[type="radio"] {
        /* Ajustez la taille souhaitée ici */
        width: 20px;
        height: 20px;
    }
    .timer{
        margin-left:25%;
        margin-top:20%;
    }
    .ensemble input{
        margin-left: 35%;
    }
    .espace {
        white-space: nowrap;
    }
    
}

</style>

<body style="margin-left: 5% ; margin-top: 4%">
   
    <div class="titre"  >
        <h3>TEST DE LOGIQUE</h3>
    </div>
    <div class="navBar">
        <img src="https://menara-holding.ma/Assets/images/Logo_mh.svg" id="img1">

        <div class="card-perso" >
            <h5>Cin:
                <?php echo $cin ?>
            </h5>
            <br>
            <h5>Nom:
                <?php echo $nom ?>
            </h5>
            <br>
            <h5>Prenom:
                <?php echo $prenom ?>
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
    <form action="process-quiz3.php" method="POST">
        <div class="Qcm swiper">

            <div class="questions  swiper-wrapper">
            <div class="container swiper-slide ">
                        <?php 
                            $imageBasePath = "images/qcm2/"; // Remplacez ceci par le chemin réel
                            foreach ($questions1 as $question) { ?>
                            <div class="quest">
                                <h6><?php echo "Question " . $question['id'] . " :" ?></h6>
                                <br>
                                <p><?php echo $question['Question'] ?></p>
                                <br>
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
                            <div class="reponse">
                                <input type="text" title="Si il y a 2 '?' Si Non entre Une seul Réponse " name="reponse1[<?php echo $question['id'] ?>]" placeholder="?-?">
                                <button type="submit" name="submit1[<?php echo $question['id'] ?>]"><i class="fa-sharp fa-solid fa-check "></i></button>
                            </div>
                            <!-- <button class="swiper-button-next">Suivant</button> -->
                    <?php } ?>
                        <!-- Bouton Suivant -->
                        
                </div>
                
                <div class="container swiper-slide ">
                        <?php 
                            $imageBasePath = "images/qcm2/"; // Remplacez ceci par le chemin réel
                            foreach ($questions2 as $question) { ?>
                            <div class="quest">
                                <h6><?php echo "Question " . $question['id'] . " :" ?></h6>
                                <br>
                                <p><?php echo $question['Question'] ?></p>
                                <br>
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
                            <div class="reponse">
                                <input type="text" title="Si il y a 2 '?' Si Non entre Une seul Réponse " name="reponse1[<?php echo $question['id'] ?>]" placeholder="?-?">
                                <button type="submit" name="submit1[<?php echo $question['id'] ?>]"><i class="fa-sharp fa-solid fa-check "></i></button>
                            </div>
                            <!-- <button class="swiper-button-next">Suivant</button> -->
                    <?php } ?>
                        <!-- Bouton Suivant -->
                        
                </div>
                
                <div class="container swiper-slide ">
                        <?php 
                            $imageBasePath = "images/qcm2/"; // Remplacez ceci par le chemin réel
                            foreach ($questions3 as $question) { ?>
                            <div class="quest">
                                <h6><?php echo "Question " . $question['id'] . " :" ?></h6>
                                <br>
                                <p><?php echo $question['Question'] ?></p>
                                <br>
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
                            <div class="reponse">
                                <input type="text" title="Si il y a 2 '?' Si Non entre Une seul Réponse " name="reponse1[<?php echo $question['id'] ?>]" placeholder="?-?">
                                <button type="submit" name="submit1[<?php echo $question['id'] ?>]"><i class="fa-sharp fa-solid fa-check "></i></button>
                            </div>
                            <!-- <button class="swiper-button-next">Suivant</button> -->
                    <?php } ?>
                        <!-- Bouton Suivant -->
                        
                </div>

                    <div class="container swiper-slide ensemble">
                        <input type="submit" name="submit-all" value="Soumettre toutes les réponses">
                    </div>

                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>

            <div class="swiper-button-prev" style="display: none;"></div>



        </div>

    </form>


</body>

<!--Swipper js-->
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
    simulateTouch: false, // disable simulation of touch events
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
//     let timeLeft = 59;

//     timerIntervals[index] = setInterval(() => {
//       timeLeft--;
//       if (timeLeft >= 0) {
//         const minutes = Math.floor(timeLeft / 60);
//         const seconds = timeLeft % 60;
//         timers[index].textContent = `${minutes}:${seconds < 10 ? '0' : ''}${seconds}`;
//       } else {
//         clearInterval(timerIntervals[index]);
//         swiper.slideNext();
//         currentQuestionIndex++; // Passer à la question suivante
//         disablePrevButton(currentQuestionIndex); // Désactiver le bouton "Précédent" si on est sur la première question
//         initializeTimer(currentQuestionIndex); // Initialiser le minuteur pour la question suivante
//       }
//     }, 1000);
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