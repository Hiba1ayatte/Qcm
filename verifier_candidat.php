<?php
// Connexion à la base de données
$conn = mysqli_connect("localhost", "root", "", "menarahold");
if (!$conn) {
  die('Erreur de connexion à la base de données : ' . mysqli_connect_error());
}

if(isset($_POST['inscription'])){
    // Récupération des données du formulaire
    $cin = $_POST['cin'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $fonction = $_POST['fonction'];
    $societe = $_POST['societe'];
    $direction = $_POST['direction'];
    $service = $_POST['service'];
    $test = $_POST['test'];
    $temps = $_POST['temps_total'];

    // Requête SQL pour vérifier si le candidat existe déjà
    $sql = "SELECT cin, nom, prenom FROM condidat WHERE cin='$cin' AND nom='$nom' AND prenom='$prenom'";
    $resultat = mysqli_query($conn, $sql);

    if ($resultat && mysqli_num_rows($resultat) > 0) {
        // Le candidat existe déjà
        echo "Le candidat existe déjà dans la base de données.";
    } else {
        // Le candidat n'existe pas, insérer le candidat
        $insertQuery = "INSERT INTO condidat (cin, nom, prenom, email,Direction,societe,service, fonction ,test , temps_total) VALUES ('$cin', '$nom', '$prenom', '$email', '$direction', '$societe', '$service', '$fonction','$test','$temps')";
        $insertResult = mysqli_query($conn, $insertQuery);

        if ($insertResult) {
            // Insertion réussie, rediriger vers la page du QCM
            header("Location: introduction.php");
            exit;
        } else {
            echo "Erreur lors de l'insertion du candidat dans la base de données : " . mysqli_error($conn);
        }
    }
}
?>
<?php
// Vérifier si les informations saisies correspondent à un enregistrement dans la base de données
$sql = "SELECT * FROM condidat WHERE cin='$cin' AND nom='$nom' AND prenom='$prenom' AND email='$email' AND Direction='$direction' AND societe='$societe' AND service='$service' AND fonction='$fonction' AND test='$test' AND temps_total='$temps'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 1) {
  // L'utilisateur existe dans la base de données
  // Stocker les données du candidat dans des variables de session
  session_start();
  $_SESSION['cin'] = $cin;
  $_SESSION['nom'] = $nom;
  $_SESSION['prenom'] = $prenom;
  $_SESSION['email'] = $email;
  $_SESSION['fonction'] = $fonction;
  $_SESSION['test'] = $test;
  $_SESSION['temps_total'] = $temps;
 
  

 // Rediriger l'utilisateur vers la page d'introduction
 header('Location: introduction.php');
 exit();
} else {
 // L'utilisateur n'existe pas dans la base de données
 echo "Désolé, vous n'êtes pas autorisé à accéder à cette page.";
}
?>
<?php
// Stocker les données du candidat dans des variables de session
// session_start();
// $_SESSION['nom'] = $nom;
// $_SESSION['prenom'] = $prenom;
// $_SESSION['cin'] = $cin;
// $_SESSION['temps_total'] = $temps;


?>