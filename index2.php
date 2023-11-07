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
    header("Location: dashboard/liste.php"); // Utiliser "Location: URL" pour spécifier l'URL complète
} else {
    // L'authentification a échoué
    // echo "Authentification échouée. Vérifiez vos informations de connexion.";
}

// Fermeture de la connexion à la base de données
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="./css/stylesM.css"> -->

    <!-- Font Awesome -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
    rel="stylesheet"
    />
    <!-- MDB -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.css"
    rel="stylesheet"
    />
    <style>

    </style>
</head>
<body>
<section class="h-100 gradient-form" style="background-color: #eee;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-10">
        <div class="card rounded-3 text-black">
          <div class="row g-0">
            <div class="col-lg-6">
              <div class="card-body p-md-5 mx-md-4">

                <div class="text-center">
                  <img src="https://www.jadid-alwadifa.com/wp-content/uploads/2018/11/menara-holding.jpg" 
                  style="width: 300px;"
                    style="width: 185px;" alt="logo">
                  <h4 class="mt-2 mb-5 pb-1" style="font-family: dax;font-weight: bolder;">ESPACE MANAGER</h4>
                </div>

                <form method="POST">
                  <div class="form-outline mb-4">
                    <input type="text" id="Matricule" class="form-control" placeholder="Entrer votre Matricule" name="matricule"/>
                    <label class="form-label" for="Matricule">Matricule</label>
                    
                  </div><span></span>

                  <div class="form-outline mb-4">
                    <input type="password" id="password" class="form-control" name="password"/>
                    <label class="form-label" for="password">Password</label>
                   
                  </div> <span></span>

                  <div class="text-center pt-1 mb-5 pb-1">
                    <button id="login" class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit">Log
                      in</button>
                    <a class="text-muted" href="#!">Forgot password?</a>
                  </div>

                  <!-- <div class="d-flex align-items-center justify-content-center pb-4">
                    <p class="mb-0 me-2">Don't have an account?</p>
                    <button type="button" class="btn btn-outline-danger">Create new</button>
                  </div> -->

                </form>

              </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
              <img src="https://images.prismic.io/menara-holding-groupe/a383cf53-af0d-4953-a566-1e5ff78f2d33_Untitled-1.jpg?auto=compress" 
              style="width:462px;height: 586px;">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.js"></script>
</body>
</html>