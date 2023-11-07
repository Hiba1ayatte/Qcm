<?php
session_start();
$nom = $_SESSION['nom'];
$prenom = $_SESSION['prenom'];
$cin = $_SESSION['cin'];

// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "menarahold";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the user responses from the form
    $userResponses = $_POST['reponse'];

    // Initialize variables
    $score = 0;

    // Loop through the questions
    for ($questionNumber = 1; $questionNumber <= 25; $questionNumber++) {
        // Check if the question has been answered
        if (isset($userResponses[$questionNumber])) {
            // Retrieve the user's answer
            $userAnswer = $userResponses[$questionNumber];

            // Query to retrieve the correct answer from the database
            $sql = "SELECT Reponse1 FROM test2 WHERE id = $questionNumber";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
            $correctAnswer = $row['Reponse1'];

            // Compare the user's answer with the correct answer
            if ($userAnswer === $correctAnswer) {
                // The user's answer is correct, increment the score
                $score += 4;
            }elseif (empty($userAnswer)){
                $score += 0;
            }else{
                $score -= 4;
            }
        } else {
            // Set an empty value for unanswered questions
            $userResponses[$questionNumber] = "";
        }
    }

    // Retrieve the user's name and surname
   
    // Check if the user's score already exists in the database
    $stmt = $conn->prepare("SELECT * FROM noteq2 WHERE cin = ? AND nom = ? AND prenom = ?");
    $stmt->bind_param("sss",$cin , $nom, $prenom);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Update the existing score in the database
        $requet = $conn->prepare("UPDATE noteq2 SET score = ? WHERE nom = ?");
        $requet->bind_param("ss",  $score, $nom);
        $requet->execute();
        header("Location: process-quiz3.php");
        exit();
    }

    // Store the score in the database
    $sql = "INSERT INTO noteq2 (cin, nom, prenom, score) VALUES (?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "sssi", $cin, $nom, $prenom, $score);
    mysqli_stmt_execute($stmt);

    // Increment the current question number
    $currentQuestionNumber = $_GET['question'] ?? 1;
    $nextQuestionNumber = intval($currentQuestionNumber) + 1;

    // Redirect to the next question
    //header("Location: quiz.php?question=$nextQuestionNumber");
    header("Location: process-quiz3.php");
    exit();
}


// Close the database connection
mysqli_close($conn);
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
    background-image: url(images/slide01.jpg);
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
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
            <img src="images/MP.png" alt="" srcset="">
        </div>
        <div class="information">
            <h3><?php echo $nom  . " ". $prenom  ?></h3>
            <p>Merci d'avoir terminé le QCM Logique. Vos réponses ont été enregistrées avec succès. Si vous avez d'autres questions ou besoin d'une assistance supplémentaire, n'hésitez pas à demander.</p>
        </div>
       
            <div class="button"><input type="submit" value="Confirmer"></div>
        
</div>
</body>
</html>