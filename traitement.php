<?php
session_start();
// Récupérer les valeurs du formulaire
$nom = $_SESSION['nom'];
$prenom = $_SESSION['prenom'];
// $cin = $_SESSION['cin'];
$cin = isset($_SESSION['cin']) ? $_SESSION['cin'] : "";


$resultatE = isset($_POST['resultatE']) ? $_POST['resultatE'] : array();
$resultatI = isset($_POST['resultatI']) ? $_POST['resultatI'] : array();
$resultatS = isset($_POST['resultatS']) ? $_POST['resultatS'] : array();
$resultatN = isset($_POST['resultatN']) ? $_POST['resultatN'] : array();
$resultatT = isset($_POST['resultatT']) ? $_POST['resultatT'] : array();
$resultatF = isset($_POST['resultatF']) ? $_POST['resultatF'] : array();
$resultatJ = isset($_POST['resultatJ']) ? $_POST['resultatJ'] : array();
$resultatP = isset($_POST['resultatP']) ? $_POST['resultatP'] : array();



if(isset($_POST['submit'])) {
    $resultatE = isset($_POST['resultatE']) ? $_POST['resultatE'] : array();
    $resultatI = isset($_POST['resultatI']) ? $_POST['resultatI'] : array();
    $resultatS = isset($_POST['resultatS']) ? $_POST['resultatS'] : array();
    $resultatN = isset($_POST['resultatN']) ? $_POST['resultatN'] : array();
    $resultatT = isset($_POST['resultatT']) ? $_POST['resultatT'] : array();
    $resultatF = isset($_POST['resultatF']) ? $_POST['resultatF'] : array();
    $resultatJ = isset($_POST['resultatJ']) ? $_POST['resultatJ'] : array();
    $resultatP = isset($_POST['resultatP']) ? $_POST['resultatP'] : array();


    // Comparaison des scores pour déterminer les dimensions dominantes
    $scoreE = count($resultatE);
    $scoreI = count($resultatI);
    $scoreS = count($resultatS);
    $scoreN = count($resultatN);
    $scoreT = count($resultatT);
    $scoreF = count($resultatF);
    $scoreJ = count($resultatJ);
    $scoreP = count($resultatP);

    $dimensionE = ($scoreE > $scoreI) ? "E" : "I";
    $dimensionS = ($scoreS > $scoreN) ? "S" : "N";
    $dimensionT = ($scoreT > $scoreF) ? "T" : "F";
    $dimensionJ = ($scoreJ > $scoreP) ? "J" : "P";

    // Concaténation des dimensions dominantes pour obtenir la personnalité globale
    $personnalite = $dimensionE . $dimensionS . $dimensionT . $dimensionJ;

    if (count($resultatE) < 1 || count($resultatS) < 1 || count($resultatT) < 1 || count($resultatJ) < 1) {
        // echo "Veuillez répondre à toutes les questions pour voir votre personnalité MBTI." ;
        echo '<script>alert("Veuillez répondre à toutes les questions pour voir votre personnalité MBTI.");</script>';
        echo '<script>window.history.back();</script>';
        exit; 
        // header("Location: Qcm1.php");
        // exit();
    } elseif($scoreE === $scoreI || $scoreS === $scoreN || $scoreT === $scoreF || $scoreJ === $scoreP)  {
        // Comparer les dimensions pour déclencher une alerte si elles sont égales
        // Les dimensions sont égales, afficher une alerte
        // alert("Les scores des dimensions sont égaux !");
        echo '<script>alert("Les scores des dimensions sont égaux !");</script>';
        echo '<script>window.history.back();</script>';
        exit; 
    } else{

        // Connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "menarahold";

$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Connexion échouée : " . $conn->connect_error);
}

// Vérifier si l'utilisateur existe déjà dans la base de données
$stmt = $conn->prepare("SELECT * FROM note WHERE cin = ? AND nom = ? AND prenom = ?");
// $stmt = $conn->prepare("SELECT * FROM note WHERE nom = ? AND prenom = ?");
$stmt->bind_param("sss", $cin , $nom, $prenom);
// $stmt->bind_param("ss", $nom, $prenom);
$stmt->execute();
$result = $stmt->get_result();
if ($result->num_rows > 0) {
    echo '<script>window.history.back();</script>';
    exit; 
}else{
// Préparer et exécuter la requête SQL pour insérer les données dans la table "note"
$stmt = $conn->prepare("INSERT INTO note (cin ,nom, prenom, personalite) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss",$cin , $nom, $prenom, $personnalite);

$stmt->execute();

// Récupérer l'id auto-incrémenté généré pour l'utilisateur
$idUtilisateur = $conn->insert_id;

// Maintenant, après avoir inséré les données, récupérez les informations de la personnalité
$sql = "SELECT * FROM mbti WHERE Name = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $personnalite);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // Récupérez les informations de la personnalité
    $row = $result->fetch_assoc();
    $photo = $row['photo'];
    $Personnalite = $row['Name'];
    $nomPersonnalite = $row['resume'];
    $description = $row['description'];
    $categorie = $row['categorie'];
    // Maintenant, vous pouvez afficher ces informations dans votre code HTML

    $images = 'images/';

    $image = $images . $photo;
}

    // Vérifier si l'utilisateur existe déjà dans la base de données
    $stmt = $conn->prepare("SELECT * FROM note WHERE id = ?");
    $stmt->bind_param("i", $idUtilisateur);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Utiliser l'id de l'utilisateur pour insérer les réponses dans la table "reponses"
        $stmtReponses = $conn->prepare("INSERT INTO comp_note (id_u, lettre, contexte) VALUES (?, ?, ?)");
        
        // Insérer les réponses pour chaque catégorie dans la table "comp_note"
        insertReponses($stmtReponses, $idUtilisateur, 'E', $resultatE);
        insertReponses($stmtReponses, $idUtilisateur, 'I', $resultatI);
        insertReponses($stmtReponses, $idUtilisateur, 'S', $resultatS);
        insertReponses($stmtReponses, $idUtilisateur, 'N', $resultatN);
        insertReponses($stmtReponses, $idUtilisateur, 'T', $resultatT);
        insertReponses($stmtReponses, $idUtilisateur, 'F', $resultatF);
        insertReponses($stmtReponses, $idUtilisateur, 'J', $resultatJ);
        insertReponses($stmtReponses, $idUtilisateur, 'P', $resultatP);


        // Continuer avec le reste du code pour l'affichage
        // ...
    }
}
    echo '<script>alert("Merci de Remplir votre personnalité MBTI.");</script>';
    exit; 
    // exit();
    }

    // // Comparer les dimensions pour déclencher une alerte si elles sont égales
    // if ($scoreE === $scoreI || $scoreS === $scoreN || $scoreT === $scoreF || $scoreJ === $scoreP) {
    //     // Les dimensions sont égales, afficher une alerte
    //     alert("Les scores des dimensions sont égaux !");
    //     echo '<script>window.history.back();</script>';
    //         exit; 
    // }

}

// Fonction pour insérer les réponses dans la table "reponses"
function insertReponses($stmt, $idUtilisateur, $lettre, $reponses) {
    foreach ($reponses as $reponse) {
        $stmt->bind_param("iss", $idUtilisateur, $lettre, $reponse);
        $stmt->execute();
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
    <title>Document</title>
</head>
<body>
<style>

body::after{
    content: "";
    filter: blur(5px); /* Ajustez la valeur en pixels selon le niveau de flou souhaité */
    opacity: 0.7; /* Ajustez l'opacité selon le niveau de transparence souhaité */
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: -1;
} 
*{
    padding: 0;
    margin: 0;
    font-size: 18px;
    font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
}

.card{
    background-color: #fff;
    align-items: centre;
    justify-content: center;
    margin: 50px auto;
    border: 3px solid black;
    border-top: #fff ;
    border-left:  #fff   ;
    height: 600px;
    width: 50%;
    border-radius: 10px;
    box-shadow: 1px  1px  1px  1px black;
    
}
.image {
    display: flex;
    align-items: centre;
    justify-content: center;
 
   

}
.image img{
    width: 50%;

}
.information h3{
    text-align: center;
    margin: 15px auto;
}
.information p{
    word-spacing: 1px;
    margin: 50px 30px;
}
.button{
    display: flex;
    align-items: center;
    justify-content: center;
    margin-top: 100px;
}
.button input {
    background-color:#7c52a5;
    width: 100px;
    height: 40px;
    border-radius: 5px;
    color: #fff;
    box-shadow: 2px 2px black;
}
.button input:hover {
    transition: all 0.3s ease;
    background-color: #a771dd;
}
#pers{
    font-size: bolder;
}
@media screen and (min-width: 601px) and (max-width: 900px) {
    .card{
      height: 500px;
      width: 80%;
      margin-top: 40%;
       
    }
    .button{
    margin-top: 60px;
   }
    
   }
   @media screen and (min-width: 301px) and (max-width: 600px) {
    .card{
      height: 500px;
       width: 70%;
    }
    .button{
    margin-top: 50px;
   }
   } 
   </style>  
  
    <div class="card" style="margin-top: 7%;">
        <div class="image">
            <img src="<?php echo $image ?>" alt="" srcset="">
            <h2><?php echo $categorie ?></h2>
        </div>
        <div class="information">
            <h3><?php echo $cin. " " .$nom  . " ". $prenom  ?></h3>
            <p>Merci d'avoir terminé le QCM de personnalité. 
                <br/>
                <span style="font-size: large;text-align:center;margin: left 30px;">Votre Personnalité est : <strong><ins><?php echo $personnalite ?></ins></strong></span> 
                <span> Vous étes : <?php echo $nomPersonnalite?></span>
                 <br/>
                 <?php echo $description ?></p>
        </div>
       
            <div class="button"><a href="#"><input type="submit" value="Confirmer"></a></div>
        
</div>
</body>
</html>
