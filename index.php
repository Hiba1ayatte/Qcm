<?php
// Connexion à la base de données
$conn = mysqli_connect("localhost", "root", "", "menarahold");
if (!$conn) {
  die('Erreur de connexion à la base de données : ' . mysqli_connect_error());
}

// Récupération des données du formulaire
// $matricule = $_POST['matricule']; // Utiliser $matricule plutôt que $nom
// $password = $_POST['password']; // Utiliser $password pour correspondre au champ "password"

$matricule = isset($_POST['matricule']) ? $_POST['matricule'] : "";
$password = isset($_POST['password']) ? $_POST['password'] : "";


// Requête SQL pour vérifier si l'utilisateur existe dans la base de données
$query = "SELECT id FROM login WHERE matricule=? AND password=?";
$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt, "ss", $matricule, $password);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

if (mysqli_num_rows($result) > 0) {
    // L'utilisateur est authentifié avec succès
    header("Location: dashboard/session.php"); // Utiliser "Location: URL" pour spécifier l'URL complète
} else {
    // L'authentification a échoué
    // echo "Authentification échouée. Vérifiez vos informations de connexion.";
}

// Fermeture de la connexion à la base de données
mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Dashboard</title>
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
    margin: 80px 20px;
    
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

input[type="text"],input[type="password"]{
    width: 97%;
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
    margin-left: 19em;
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
<form method="POST">
			<div class="image"><img src="https://menara-holding.ma/Assets/images/Logo_mh.svg" alt="" srcset=""></div>
                    <label>Matricule :</label>
                    <input type="text" name="matricule" required><br>
                

                    <label>Mot de Passe :</label>
                    <input type="password" name="password" required><br>

<input type="submit" name="inscription" value="Inscription">
		</form>

 </form>
	</div>

</body>
</html>