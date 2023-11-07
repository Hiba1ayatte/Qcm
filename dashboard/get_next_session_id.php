<?php
$conn = mysqli_connect("localhost", "root", "", "menarahold");
if (!$conn) {
  die('Erreur de connexion à la base de données : ' . mysqli_connect_error());
}

// Requête pour obtenir le dernier ID de session
$query = "SELECT MAX(id) AS max_id FROM session";
// Exécutez la requête
$result = mysqli_query($conn, $query);
if ($result) {
    // Récupérez le résultat
    $row = mysqli_fetch_assoc($result);

    // Obtenez le dernier ID de session
    $lastSessionID = $row['max_id'];

    // Calculez le prochain ID en incrémentant le dernier ID
    $nextSessionID = $lastSessionID + 1;
    
    // Utilisez $nextSessionID pour créer la nouvelle session
    echo $nextSessionID;
} else {
    echo 'Erreur lors de la récupération du dernier ID de session : ' . mysqli_error($conn);
}