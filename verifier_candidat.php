<?php
// Connexion à la base de données
$conn = mysqli_connect("localhost", "root", "", "menarahold");
if (!$conn) {
  die('Erreur de connexion à la base de données : ' . mysqli_connect_error());
}

if(isset($_POST['inscription'])){
    // Récupération des données du formulaire
    $cin = isset($_POST['cin']) ? $_POST['cin'] : "";
    $nom = isset($_POST['nom']) ? $_POST['nom'] : "";
    $prenom = isset($_POST['prenom']) ? $_POST['prenom'] : "";
    $email = isset($_POST['email']) ? $_POST['email'] : "";
    $fonction = isset($_POST['fonction']) ? $_POST['fonction'] : "";
    $societe = isset($_POST['societe']) ? $_POST['societe'] : "";
    $direction = isset($_POST['direction']) ? $_POST['direction'] : "";
    $service = isset($_POST['service']) ? $_POST['service'] : "";
    $test = isset($_POST['test']) ? $_POST['test'] : "";
    $temps = isset($_POST['temps_total']) ? $_POST['temps_total'] : "";

    // Vérifier si les champs obligatoires sont remplis
    if ($cin && $nom && $prenom && $email && $fonction && $test) {

        // Requête SQL pour vérifier si le candidat existe déjà
        $sql = "SELECT cin, nom, prenom FROM condidat WHERE cin='$cin' AND nom='$nom' AND prenom='$prenom'";
        $resultat = mysqli_query($conn, $sql);

        if ($resultat && mysqli_num_rows($resultat) > 0) {
            // Le candidat existe déjà
            echo "Le candidat existe déjà dans la base de données.";
        } else {
            // Le candidat n'existe pas, insérer le candidat
            // $insertQuery = "INSERT INTO condidat (cin, nom, prenom, email,Direction,societe,service, fonction ,test , temps_total) VALUES ('$cin', '$nom', '$prenom', '$email', '$direction', '$societe', '$service', '$fonction','$test','$temps')";
            // $insertResult = mysqli_query($conn, $insertQuery);

            // Le candidat n'existe pas, insérer le candidat
            $insertQuery = "INSERT INTO condidat (cin, nom, prenom, email, Direction, societe, service, fonction, test, temps_total) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
            $stmt = mysqli_prepare($conn, $insertQuery);

            // Liaison des paramètres
            mysqli_stmt_bind_param($stmt, "ssssssssss", $cin, $nom, $prenom, $email, $direction, $societe, $service, $fonction, $test, $temps);

            // Exécution de la requête
            $insertResult = mysqli_stmt_execute($stmt);

            if ($insertResult) {
                // Insertion réussie, rediriger vers la page du QCM
                // header("Location: introduction.php");
                // exit;
                 // Insertion réussie, récupérer les données du candidat
                $sqlSelect = "SELECT * FROM condidat WHERE cin=? AND nom=? AND prenom=? AND email=? AND Direction=? AND societe=? AND service=? AND fonction=? AND test=? AND temps_total=?";
                $stmtSelect = mysqli_prepare($conn, $sqlSelect);

                // Liaison des paramètres
                mysqli_stmt_bind_param($stmtSelect, "ssssssssss", $cin, $nom, $prenom, $email, $direction, $societe, $service, $fonction, $test, $temps);

                // Exécution de la requête de sélection
                mysqli_stmt_execute($stmtSelect);

                // Récupération des résultats
                $result = mysqli_stmt_get_result($stmtSelect);

                if ($result && mysqli_num_rows($result) == 1) {
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
            } else {
                echo "Erreur lors de l'insertion du candidat dans la base de données : " . mysqli_error($conn);
            }
        }
    } else {
        echo "Veuillez remplir tous les champs obligatoires.";
    }
}
?>
<?php
// Vérifier si les informations saisies correspondent à un enregistrement dans la base de données
// $sql = "SELECT * FROM condidat WHERE cin='$cin' AND nom='$nom' AND prenom='$prenom' AND email='$email' AND Direction='$direction' AND societe='$societe' AND service='$service' AND fonction='$fonction' AND test='$test' AND temps_total='$temps'";
// $result = mysqli_query($conn, $sql);

// if (mysqli_num_rows($result) == 1) {
//   // L'utilisateur existe dans la base de données
//   // Stocker les données du candidat dans des variables de session
//   session_start();
//   $_SESSION['cin'] = $cin;
//   $_SESSION['nom'] = $nom;
//   $_SESSION['prenom'] = $prenom;
//   $_SESSION['email'] = $email;
//   $_SESSION['fonction'] = $fonction;
//   $_SESSION['test'] = $test;
//   $_SESSION['temps_total'] = $temps;
 
  

//  // Rediriger l'utilisateur vers la page d'introduction
//  header('Location: introduction.php');
//  exit();
// } else {
//  // L'utilisateur n'existe pas dans la base de données
//  echo "Désolé, vous n'êtes pas autorisé à accéder à cette page.";
// }
?>
<?php
// Stocker les données du candidat dans des variables de session
// session_start();
// $_SESSION['nom'] = $nom;
// $_SESSION['prenom'] = $prenom;
// $_SESSION['cin'] = $cin;
// $_SESSION['temps_total'] = $temps;


?>