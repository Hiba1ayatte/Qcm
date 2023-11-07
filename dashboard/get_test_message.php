<?php
$conn = mysqli_connect("localhost", "root", "", "menarahold");

if (!$conn) {
    die('Erreur de connexion à la base de données : ' . mysqli_connect_error());
}

// if (isset($_POST['test'])) {
//     $selectedTest = mysqli_real_escape_string($conn, $_POST['test']);

//     // Exécutez une requête SQL pour obtenir le message du test
//     $query = "SELECT message FROM test WHERE test = '$selectedTest'";
//     $result = mysqli_query($conn, $query);

//     if ($result && mysqli_num_rows($result) > 0) {
//         $row = mysqli_fetch_assoc($result);
//         echo $row['message'];
//     } else {
//         echo 'Aucun message trouvé pour ce test.';
//     }
// } else {
//     echo 'Test non spécifié.';
// }

if (isset($_POST['test'])) {
    $selectedTest = mysqli_real_escape_string($conn, $_POST['test']);

    // Exécutez une requête SQL pour obtenir le message et le lien du test
    $query = "SELECT message, lien FROM test WHERE test = '$selectedTest'";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);

        $testData = array(
            'message' => $row['message'],
            'lien' => $row['lien']
        );

        echo json_encode($testData);
    } else {
        echo json_encode(['message' => 'Aucune donnée trouvée pour ce test.']);
    }
} else {
    echo 'Test non spécifié.';
}


mysqli_close($conn);
?>