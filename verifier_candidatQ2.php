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
$societe = $_POST['societe'];
$direction = $_POST['direction'];
$service = $_POST['service'];
$fonction = $_POST['fonction'];
$test = $_POST['test'];
$temps = $_POST['temps_total'];

// Requête SQL pour récupérer les données du candidat à partir du nom, prénom et email
$sql = "SELECT cin ,nom, prenom FROM condidat WHERE cin='$cin'AND nom='$nom' AND prenom='$prenom' AND email='$email'";
$resultat = mysqli_query($conn, $sql);

// Vérifier si la requête a réussi et récupérer les données du candidat
if ($resultat && mysqli_num_rows($resultat) > 0) {
  $candidat = mysqli_fetch_assoc($resultat);
  $cin = $candidat['cin'];
  $nom = $candidat['nom'];
  $prenom = $candidat['prenom'];
} else {
  // echo "Erreur : les informations saisies ne correspondent pas à un candidat enregistré.";
  // Les informations saisies ne correspondent pas à un candidat enregistré, insérer le candidat dans la base de données
  $insertQuery = "INSERT INTO condidat (cin,nom, prenom, email,Direction,societe,service, fonction ,test , temps_total) VALUES ('$cin','$nom', '$prenom', '$email', '$direction', '$societe', '$service', '$fonction','$test','$temps')";
  $insertResult = mysqli_query($conn, $insertQuery);

  if ($insertResult) {
      // Insertion réussie, rediriger vers la page du QCM
      // ehader("Location: page_qcm.php"); // Spécifiez la page du QCM
      // exit;
      echo "SUCESS !!";
      
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
 
 
  

  // Rediriger l'utilisateur vers la page QCM
  header('Location: introductionQ2.php');
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
// ?>