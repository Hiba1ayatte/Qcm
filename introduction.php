<?php
// Récupérer les données du candidat à partir de la variable de session
session_start();

$nom = $_SESSION['nom'];
$prenom = $_SESSION['prenom'];
$cin = $_SESSION['cin'];
$temps = $_SESSION['temps_total'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/introduction.css">
    <title>QCM Personnalité</title>
</head>
<body >
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
    margin: 30px auto;
    border: 3px solid black;
    border-top: #fff ;
    border-left:  #fff   ;
    height: 530px;
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
            <img src="https://menara-holding.ma/Assets/images/Logo_mh.svg" style="margin-bottom:8%;margin-top:2%" alt="" srcset="">
        </div>
        <div class="information">
            <h3><?php echo $nom  . " ". $prenom  ?></h3>

            <p>Cher candidat  <strong><?php echo $cin ?></strong>,

Nous vous souhaitons la bienvenue pour ce test de personnalité Vous passerai le test dans <?php echo $temps ?> . C'est une excellente opportunité pour vous de mieux vous connaître. Prenez le temps de répondre aux questions avec attention et sincérité. Nous vous encourageons à donner le meilleur de vous-même. Êtes-vous prêt à commencer ?</p>
        </div>
        <form method="POST" action="Qcm1.php">
            <div class="button"><input type="submit" value="Entrer"></div>
        </form>
</div>

</body>
</html>