<?php
$conn = mysqli_connect("localhost", "root", "", "menarahold");
if (!$conn) {
  die('Erreur de connexion à la base de données : ' . mysqli_connect_error());
}
// Requête SQL pour récupérer les données des sessions
$sql = "SELECT id, nom,test, created_at FROM session ORDER BY created_at DESC";
// Exécution de la requête
$result = mysqli_query($conn, $sql);
// Vérification des erreurs
if (!$result) {
    die("Erreur de requête : " . mysqli_error($conn));
}
// Tableau pour stocker les données des sessions
$sessions = array();
// Parcourir les résultats et stocker les données dans le tableau
while ($row = mysqli_fetch_assoc($result)) {
    $sessions[] = $row;
}
// Fermer la requête
mysqli_free_result($result);


// Requête SQL pour récupérer la dernière session
$lastSessionQuery = "SELECT id, nom, test, created_at FROM session ORDER BY created_at DESC LIMIT 1";
// Exécution de la requête
$lastSessionResult = mysqli_query($conn, $lastSessionQuery);
// Vérification des erreurs
if (!$lastSessionResult) {
    die("Erreur de requête : " . mysqli_error($conn));
}
// Récupération des données de la dernière session
$lastSession = mysqli_fetch_assoc($lastSessionResult);
// Fermer la requête
mysqli_free_result($lastSessionResult);



?>
<!DOCTYPE html>
<html lang="en">
<head>
<head>
<link href="css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
    <!-- <link rel="stylesheet" type="text/css" href="https://code.highcharts.com/css/themes/dark-unica.css"> -->

        <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css"> 
        <link rel="stylesheet" href="https://cdn.datatables.net/fixedheader/3.2.3/css/fixedHeader.dataTables.min.css"> 
    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

    <link href="https://nightly.datatables.net/css/jquery.dataTables.css" rel="stylesheet" type="text/css" />
    <script src="https://nightly.datatables.net/js/jquery.dataTables.js"></script>
    
    <link href="https://nightly.datatables.net/select/css/select.dataTables.css?_=9a6592f8d74f8f520ff7b22342fa1183.css" rel="stylesheet" type="text/css" />
<script src="https://nightly.datatables.net/select/js/dataTables.select.js?_=9a6592f8d74f8f520ff7b22342fa1183"></script>

    <link href="https://nightly.datatables.net/searchpanes/css/searchPanes.dataTables.css?13" rel="stylesheet" type="text/css" />
    <script src="https://nightly.datatables.net/searchpanes/js/dataTables.searchPanes.js?13"></script>

<script src="https://code.highcharts.com/highcharts.js"></script>
    <meta charset=utf-8 />
    <title>Dashboard</title>
    <style id="jsbin-css">
body {
  font: 90%/1.45em "Helvetica Neue", HelveticaNeue, Verdana, Arial, Helvetica, sans-serif;
  margin: 0;
  padding: 0;
  color: #333;
  background-color: #fff;
}
body::after{
    content: "";
    background-image: url(../images/slide01.jpg);
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    filter: blur(3px); /* Ajustez la valeur en pixels selon le niveau de flou souhaité */
    opacity: 0.7; /* Ajustez l'opacité selon le niveau de transparence souhaité */
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 1600px;
    z-index: -1;
}
td,tr{

}
.submenu {
            display: none;
        }

</style>
</head>
<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar-->
        <div class="border-end bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading border-bottom bg-white"><img src="https://menara-holding.ma/Assets/images/Logo_mh.svg"
                  style="width:140px;heigth:20px" alt="logo"></div>
            <div class="list-group list-group-flush">
                <!-- <a class="list-group-item list-group-item-action list-group-item-light p-3" style="font-size: 1.3em;margin: 0;" href="dashboard.php">Statistique</a> -->
                <a class="list-group-item list-group-item-action list-group-item-light p-3 allow-navigation" style="font-size: 1.1em;margin: 0;" href="session.php">Session</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3 allow-navigation" style="font-size: 1.1em;margin: 0;" href="#" id="menu1">Test Personnalté</a>
                <ul class="submenu" id="submenu1">
                <li><a class="list-group-item list-group-item-action list-group-item-light p-2 allow-navigation" style="text-decoration: none;color:grey;border-left:0;" href="listeM.php">Menara Candidat</a></li>
                    <li><a class="list-group-item list-group-item-action list-group-item-light p-2 allow-navigation" style="text-decoration: none;color:grey;border-left:0;" href="listeN.php">Nouveau Candidat</a></li>
                </ul>
                <a class="list-group-item list-group-item-action list-group-item-light p-3 allow-navigation" style="font-size: 1.1em;margin: 0;" href="#" id="menu2">Questionnaire 1</a>
                <ul class="submenu" id="submenu2">
                    <li><a class="list-group-item list-group-item-action list-group-item-light p-2 allow-navigation" style="text-decoration: none;color:grey;border-left:0;" href="Qcm1M.php">Menara Candidat</a></li>
                    <li><a class="list-group-item list-group-item-action list-group-item-light p-2 allow-navigation" style="text-decoration: none;color:grey;border-left:0;" href="Qcm1N.php">Nouveau Candidat</a></li>
                </ul>
                <a class="list-group-item list-group-item-action list-group-item-light p-3 allow-navigation" style="font-size: 1.1em;margin: 0;" href="#" id="menu3">Questionnaire 2</a>
                <ul class="submenu" id="submenu3">
                    <li><a  class="list-group-item list-group-item-action list-group-item-light p-2 allow-navigation" style="text-decoration: none;color:grey;border-left:0;" href="Qcm2M.php">Menara Candidat</a></li>
                    <li><a class="list-group-item list-group-item-action list-group-item-light p-2 allow-navigation" style="text-decoration: none;color:grey;border-left:0;" href="Qcm2N.php">Nouveau Candidat</a></li>
                </ul>
                <a class="list-group-item list-group-item-action list-group-item-light p-3 allow-navigation" style="font-size: 1.1em;margin: 0;color:red" href="logout.php">logout</a>
                <!-- <form action="logout.php">
                    <button type="submit" >Logout</button>
                </form> -->
            </div>
        </div>
        <!-- Page content wrapper-->
        <div id="page-content-wrapper">
            <!-- Top navigation-->
            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                <div class="container-fluid">
                    
                    <button class="btn" style="background-color:#ae9d72" id="sidebarToggle">Menu</button>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

                </div>
            </nav>
                <!-- Page content-->
                <div class="container-fluid">
                    <a href="create_session.php" style="margin-left:85%;margin-top:3%" class="btn btn-primary">Créer Session</a>
                    <div class="row" style="margin-top:3%;">
                        <div class="col-sm-8">
                            <div class="card" style="max-height: 230px; overflow-y: auto;">
                                <div class="card-header">
                                    Listes des Sessions
                                </div>
                                <!-- <ul class="list-group list-group-flush">
                                <?php
                                    // foreach ($sessions as $session) {
                                    //     $nom = $session['nom'];
                                    //     $test = $session['test']; 
                                    //     $createdAt = $session['created_at'];
                                    // ?>
                                    // <li class="list-group-item" data-nom="<?php echo $nom; ?>" data-test="<?php echo $test; ?>" data-created-at="<?php echo $createdAt; ?>">
                                    //     <a  href="?session_id=<?php echo $session['id']; ?>"><?php echo $nom; ?></a> - <?php echo $createdAt; ?>
                                    // </li>
                                    // <?php
                                    // }
                                    // ?>
                                </ul> -->
                                <ul class="list-group list-group-flush">
                                    <?php
                                    foreach ($sessions as $session) {
                                        $nom = $session['nom'];
                                        $test = $session['test'];
                                        $createdAt = $session['created_at'];
                                        $sessionID = $session['id']; // Récupérez l'ID de la session

                                        echo '<li class="list-group-item" data-nom="' . $nom . '" data-test="' . $test . '" data-created-at="' . $createdAt . '"data-id="' . $sessionID . '">';
                                        echo '<a href="edit_session.php?session_id=' . $sessionID . '">' . $nom . '</a> - ' . $createdAt;
                                        echo '</li>';
                                    }
                                    ?>
                                </ul>

                            </div>
                        </div>
                        <div class="col-sm-4">
                        <div class="card text-center">
                            <div class="card-header">
                                Session
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">
                                    <?php echo $lastSession['nom'];?>
                                </h5>
                                <p class="card-text"><?php echo $lastSession['test'];?></p>
                                <!-- <a href="edit_session.php?session_id=<?php echo $lastSession['id']; ?>">Entrer</a> -->
                                <a href="edit_session.php" class="enter-button">Entrer</a>
                            </div>
                            <div class="card-footer text-muted">
                               <?php echo $lastSession['created_at']; ?>
                            </div>
                            </div>
                        </div>
                                
                    </div>

                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- Bootstrap core JS-->
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script> 
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.datatables.net/fixedheader/3.2.3/js/dataTables.fixedHeader.min.js"></script> 

        <!-- <script>
    const listItems = document.querySelectorAll(".list-group-item"); // Sélectionnez tous les éléments de la liste

    listItems.forEach((item) => {
        item.addEventListener("click", (event) => {
            // Obtenez les données de la session à partir de l'élément cliqué (peut nécessiter une certaine structure HTML)
            const sessionName = item.dataset.nom;
            const testGiven = item.dataset.test;
            const createdAt = item.dataset.createdAt;

            // Mettez à jour le contenu de la carte de la session
            const cardTitle = document.querySelector(".card-title");
            const cardText = document.querySelector(".card-text");
            const cardFooter = document.querySelector(".card-footer");

            cardTitle.textContent = nom;
            cardText.textContent = test;
            cardFooter.textContent = createdAt;
        });
    });
</script> -->
<script>
    const listItems = document.querySelectorAll(".list-group-item"); // Sélectionnez tous les éléments de la liste
    listItems.forEach(item => {
        item.addEventListener('click', (e) => {
            // e.preventDefault();
            // Cacher tous les sous-menus
            const submenus = document.querySelectorAll('.submenu');
            submenus.forEach(submenu => submenu.style.display = 'none');

            // Récupérer l'ID du sous-menu correspondant
            const id = item.getAttribute('id');
            const submenu = document.getElementById('submenu' + id.substr(4));

            // Afficher le sous-menu correspondant
            if (submenu) {
                submenu.style.display = 'block';
            }
        });
    });
//    listItems.forEach((item) => {
//     item.addEventListener("click", (event) => {
//         event.preventDefault();
//         // Obtenez les données de la session à partir de l'élément cliqué
//         const sessionName = item.dataset.nom;
//         const testGiven = item.dataset.test;
//         const createdAt = item.dataset.createdAt;
//         const sessionID = item.dataset.id; // Utilisez data-id pour obtenir l'ID de la session

//         // Mettez à jour le contenu de la carte de la session
//         const cardTitle = document.querySelector(".card-title");
//         const cardText = document.querySelector(".card-text");
//         const cardFooter = document.querySelector(".card-footer");

//         cardTitle.textContent = sessionName; // Utilisez sessionName au lieu de nom
//         cardText.textContent = testGiven; // Utilisez testGiven au lieu de test
//         cardFooter.textContent = createdAt;

//         // Mettez à jour le lien "Entrer" pour pointer vers edit_session.php avec l'ID de la session
//         const enterButton = document.querySelector(".enter-button");
//         enterButton.href = `edit_session.php?session_id=${sessionID}`;
//     });
// });
listItems.forEach((item) => {
    if (!item.classList.contains('allow-navigation')) {
        item.addEventListener("click", (event) => {
            event.preventDefault();
            // Obtenez les données de la session à partir de l'élément cliqué
            const sessionName = item.getAttribute('data-nom');
            const testGiven = item.getAttribute('data-test');
            const createdAt = item.getAttribute('data-created-at');
            const sessionID = item.getAttribute('data-id'); // Récupérer l'ID de la session

            // Mettez à jour le contenu de la carte de la session
            const cardTitle = document.querySelector(".card-title");
            const cardText = document.querySelector(".card-text");
            const cardFooter = document.querySelector(".card-footer");
            const enterButton  = document.querySelector(".enter-button");

            cardTitle.textContent = sessionName;
            cardText.textContent = testGiven;
            cardFooter.textContent = createdAt;

            enterButton.href = `edit_session.php?session_id=${sessionID}`;
            // Mettez à jour le lien "Entrer" pour pointer vers edit_session.php avec l'ID de la session
            // const enterButton = document.querySelector(".enter-button");
            // enterButton.addEventListener("click", (event) => {
            //     event.preventDefault();
            //     // Obtenez l'ID de la session à partir de l'attribut "data-id"
            //     const sessionID = enterButton.getAttribute("data-id");

            //     // Redirigez l'utilisateur vers la page "edit_session.php" avec l'ID de la session
            //     window.location.href = `edit_session.php?session_id=${sessionID}`;
            // });
        });
    };
});



</script>

</html>
