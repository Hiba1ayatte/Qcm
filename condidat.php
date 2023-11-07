<?php
$conn = mysqli_connect("localhost", "root", "", "menarahold");
if (!$conn) {
  die('Erreur de connexion à la base de données : ' . mysqli_connect_error());
}

$sessionID = $_GET['session_id'];

$sql = "SELECT matricule ,fonction,test , temps_total FROM session WHERE id = $sessionID";
$result = mysqli_query($conn, $sql);

if ($result && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $matricule = $row['matricule'];
    $fonction = $row['fonction'];
    $test = $row['test'];
    $temps = $row['temps_total'];

    if (!empty($matricule)) {
        $matriculeQuery = "SELECT PRENOM , NOM, DIRECTION , SERVICE , SOCIETE  FROM emp WHERE matricule = '$matricule' LIMIT 1";

        $result = mysqli_query($conn, $matriculeQuery);
        if ($result && mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $prenom = $row['PRENOM'];
            $nom = $row['NOM'];
            $direction = $row['DIRECTION'];
            $service = $row['SERVICE'];
            $societe = $row['SOCIETE'];
        }
    }

} else {
    // Gérer le cas où aucune donnée n'a été trouvée pour cette session
    // Vous pouvez rediriger l'utilisateur ou afficher un message d'erreur
    die("Erreur : session introuvable.");
}

// $directionQuery = mysqli_query($conn, "SELECT DIRECTION FROM direction");
// $societeQuery = mysqli_query($conn, "SELECT SOCIETE FROM societe");
// $serviceQuery = mysqli_query($conn, "SELECT SERVICE FROM service");
// $fonctionQuery = mysqli_query($conn, "SELECT FONCTION FROM fonction");

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $choix = $_POST["test"];
//     switch ($choix) {
//         case "1":
//             header("Location: verifier_candidat.php"); // Rediriger vers la page du test ou du lien
//             break;
//         case "2":
//             header("Location: Qcm2.php"); // Rediriger vers une autre page
//             break;
//         case "3":
//             header("Location: Qcm3.php"); // Rediriger vers un autre QCM
//             break;
//         default:
//             // Gérer d'autres cas si nécessaire
//     }
// }

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Test Personnalité</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    <link rel="stylesheet" href="condidat.css">
</head>
<body >
	<style>
        body::after{
    content: "";
    background-image: url(images/slide01.jpg);
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    filter: blur(3px); /* Ajustez la valeur en pixels selon le niveau de flou souhaité */
    opacity: 0.7; /* Ajustez l'opacité selon le niveau de transparence souhaité */
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 800px;
    z-index: -1;
}

h1 {
    text-align: center;
}

form {
    width: 50%;
    margin: auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
    border-top: transparent;
    border-left:  transparent  ;
    
   
}
.formulaire{
    margin: 80px 20px;
    
}
.image{
    display: flex;
    align-items: centre;
    justify-content: center;
    
}
.image img{
    width: 50%;
}
label {
    display: block;
    margin-bottom: 10px;
}

input[type="text"], input[type="email"]{
    width: 190%;
    padding: 10px;
    margin-bottom: 20px;
    border: none;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}
#pre ,#mail{
    margin-left: 13em;
}

select {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border: none;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    
}



input[type="submit"] {
    background-color: #7c52a5;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    margin-left: 23em;
}
@media screen and (min-width: 900px) and (max-width: 1300px) {        
body::after{
    content: "";
    background-image: url(images/slide01.jpg);
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    filter: blur(3px); /* Ajustez la valeur en pixels selon le niveau de flou souhaité */
    opacity: 0.7; /* Ajustez l'opacité selon le niveau de transparence souhaité */
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 670px;
    z-index: -1;
}

h1 {
    text-align: center;
}

form {
    width: 50%;
    margin: auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
    border-top: transparent;
    border-left:  transparent  ;
    
   
}
.formulaire{
    margin: 10px 20px;
    
}
.image{
    display: flex;
    align-items: centre;
    justify-content: center;
    
}
.image img{
    width: 50%;
    height:150px;
}
label {
    display: block;
    margin-bottom: 10px;
}

input[type="text"], input[type="email"]{
    width: 150%;
    padding: 10px;
    margin-bottom: 20px;
    border: none;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

select {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border: none;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    
}

#pre ,#mail{
    margin-left: 8em;
}


input[type="submit"] {
    background-color: #7c52a5;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    margin-left: 19em;
}
}
@media screen and (min-width: 601px) and (max-width: 900px) {
    body::after{
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
   
    top: 0;
    left: 0;
    width: 120%;
    height: 120%;
    z-index: -1;
    } 
    form {
    width: 80%;
    margin-top :30%;
    margin-bottom :20%;
    }
    .formulaire{
        width: 90%;
        height: 50%;
        margin-left: 15%
        
    }
}
@media screen  and ( min-width: 301px)and  (max-width: 600px) {
    form {
    width: 70%;
    margin-top :20%;
    margin-bottom :20%;
    }
    .formulaire{
        width: 90%;
        height: 50%;
        margin-left: 5%
    }
}
   
    

	</style>

<div class="formulaire">
		<form method="post" action="verifier_candidat.php">
			<div class="image"><img src="https://menara-holding.ma/Assets/images/Logo_mh.svg" alt="" srcset=""></div>
            <div>
            <?php
                // Vérifiez si le matricule est vide ou null
                if (!empty($matricule)) {
                    // Le matricule n'est pas vide, affichez les champs
                ?>
                <div style="display:flex">
                    <div>
                        <label>Matricule :</label>
                        <input type="text" name="matricule" value="<?php echo !empty($matricule) ? $matricule : ''; ?>" readonly><br>
                    </div>
                    <div id="pre">
                        <label >Socité :</label>
                        <input type="text" name="societe" value="<?php echo !empty($societe) ? $societe : ''; ?>" readonly><br>
                    </div>
                </div>
                <div style="display:flex">
                    <div>
                        <label>Direction :</label>
                        <input type="text" name="direction" value="<?php echo !empty($direction) ? $direction : ''; ?>" readonly><br>
                    </div>
                    <div id="mail">
                        <label>Service :</label>
                        <input type="text" name="service" value="<?php echo !empty($service) ? $service : ''; ?>" readonly><br>
                    </div>
                </div>
                <?php
                } // Fin de la condition pour afficher les champs de matricule, société et direction
                ?>
            </div>
            <div>
                <label>Fonction :</label>
                <input style="width:95%" type="text" name="fonction" value="<?php echo !empty($fonction) ? $fonction : ''; ?>" readonly>
                <input type="time" name="temps_total" value="<?php echo $temps; ?>" hidden>
                <input type="text" name="test" value="<?php echo $test; ?>" hidden>
            </div>
                <br>
            <div style="display:flex">
                <div>
                    <label>Nom :</label>
                    <input type="text" name="nom" value="<?php echo !empty($nom) ? $nom : ''; ?>" required><br>
                </div>
                <div id="pre">
                    <label>Prénom :</label>
                    <input type="text" name="prenom" value="<?php echo !empty($prenom) ? $prenom : ''; ?>" required><br>
                </div>
            
            </div>
            <div style="display:flex">
                <div>
                    <label>CIN :</label>
                    <input type="text" name="cin" required><br>
                </div>
                <div id="mail">
                    <label>Email :</label>
                    <input type="email" name="email" required><br>
                </div>
            </div>
          
            <input type="submit" name="inscription" value="Inscription">
           </div>
           <!-- <div>
                    <label>Fonction :</label>
                    <select name="test">
                      <option value=""></option>
                      <option value="1"><a href="">Test Personnalité</a></option>
                      <option value="2"><a href="">Questionnaire 1</a></option>
                      <option value="3"><a href="">Questionnaire 2</a></option>
                    </select>
                </div> -->
			
		</form>
	</div>

</body>
</html>