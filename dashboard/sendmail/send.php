<?php

// session_start();

// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\SMTP;
// use PHPMailer\PHPMailer\Exception;  

// $conn = mysqli_connect("localhost", "root", "", "menarahold");
// if (!$conn) {
//   die('Erreur de connexion à la base de données : ' . mysqli_connect_error());
// }



// // Récupérez les données de la session
// if (isset($_SESSION['sessionData'])) {
//   $sessionData = $_SESSION['sessionData'];

//   // Exemple de récupération d'e-mail à partir des données de la session
//   $email = $sessionData['email'];
//   $fonction = $sessionData['fonction'];
//   $test = $sessionData['test'];
//   $message = $sessionData['message'];

//   if(isset($_GET['session_id'])) {
//     $id = mysqli_real_escape_string($conn, $_GET['session_id']);
//     $query = "SELECT * FROM `session` WHERE `id` = '$id'";
//     $query_run = mysqli_query($conn, $query);
//     if(mysqli_num_rows($query_run) > 0) {
//     $stag = mysqli_fetch_array($query_run);

//         if(isset($_POST['envoyer'])) {
//             $fonction = mysqli_real_escape_string($conn, $stag['fonction']);
//             $test = mysqli_real_escape_string($conn, $stag['test']);
//             $email = mysqli_real_escape_string($conn, $stag['email']);
//             $message = mysqli_real_escape_string($conn, $stag['message']);
//           //   $date_debut = mysqli_real_escape_string($conn, $stag['date_debut']);
//           //   $date_fin = mysqli_real_escape_string($conn, $stag['date_fin']);


//             require 'includes/PHPMailer.php';
//             require 'includes/SMTP.php';
//             require 'includes/Exception.php';
    
//             $mail = new PHPMailer();
//             $mail->isSMTP();
//             $mail->Host = 'smtp.gmail.com';
//             $mail->SMTPAuth = true;
//             $mail->Username = 'accueil@menara-holding.ma';
//             $mail->Password = 'iziybkynydrxfgxq';
//             $mail->SMTPSecure = 'tls';
//             $mail->Port = 587;
//             $mail->setFrom('accueil@menara-holding.ma', 'Menara Holding');
//             $mail->addAddress($email, $fonction); // Utilisez l'adresse e-mail et le prénom du stagiaire spécifié
//             $mail->isHTML(true);
//             $mail->Subject = $test;
//           //   $mail->Body = 'Bonjour '.strtoupper($nom).' '.$prenom.',<br><br>
//           //       Faisant suite à votre demande de stage, nous vous informons que votre admission est acceptée pour effectuer un stage dans notre entreprise (MENARA HOLDING) 
//           //       du '.$date_debut.' au '.$date_fin.'. Nous vous prions de bien vouloir vous présenter à la Direction du capital humain afin de compléter les formalités administratives le jour de début de stage à 10h00.<br><br>
//           //       Veuillez agréer, l expression de nos salutations distinguées.<br><br>
//           //       Cordialement,<br>
//           //       Direction des Ressources Humaines MENARA HOLDING';
//             $mail->Body = $message;
//             $mail->AltBody = 'Test';
//             if ($mail->send()) {
//                 echo 'Message envoyé';
//                 header("Location: session.php");
//                 exit;
//             } else {
//                 echo 'Erreur lors de l\'envoi du message';
//             }
//         }
//       }
//     }
// } else {
//   echo 'Données d\'e-mail manquantes.';
// }

session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;  

if (isset($_SESSION['sessionData'])) {
    $sessionData = $_SESSION['sessionData'];

    $email = $sessionData['email'];
    $fonction = $sessionData['fonction'];
    $test = $sessionData['test'];
    $message = $sessionData['message'];

    require 'includes/PHPMailer.php';
    require 'includes/SMTP.php';
    require 'includes/Exception.php';

    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'accueil@menara-holding.ma';
    $mail->Password = 'iziybkynydrxfgxq';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;
    $mail->setFrom('accueil@menara-holding.ma', 'Menara Holding');
    $mail->addAddress($email, $fonction);
    $mail->isHTML(true);
    $mail->Subject = $test;
    $mail->Body = $message;
    $mail->AltBody = 'Test';

    if ($mail->send()) {
        echo 'Message envoyé';
    } else {
        echo 'Erreur lors de l\'envoi du message : ' . $mail->ErrorInfo;
    }
} else {
    echo 'Données d\'e-mail manquantes.';
}
?>


