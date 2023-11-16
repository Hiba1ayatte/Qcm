<?php
$conn = mysqli_connect("localhost", "root", "", "menarahold");
if (!$conn) {
  die('Erreur de connexion à la base de données : ' . mysqli_connect_error());
}
if (isset($_GET['id'])) {
    // Récupérez l'ID du candidat
    $candidatId = $_GET['id'];

    // Requête SQL pour récupérer les détails du candidat
    $sqlCandidat = "SELECT nom, prenom FROM noteq1 WHERE id = ?";
    $stmtCandidat = $conn->prepare($sqlCandidat);
    $stmtCandidat->bind_param("i", $candidatId);
    $stmtCandidat->execute();
    $resultCandidat = $stmtCandidat->get_result();
    // Vérifiez s'il y a des résultats
    if ($resultCandidat->num_rows > 0) {
        $rowCandidat = $resultCandidat->fetch_assoc();
        $nomCandidat = $rowCandidat['nom'];
        $prenomCandidat = $rowCandidat['prenom'];
    } 

    // $sqlDetails ="SELECT c.id_q ,t.Question , c.reponse_q , c.reponse_u ,c.est_correcte FROM comp_noteq1 c , test1 t , noteq1 n WHERE t.id = c.id_q AND c.id_u = $candidatId";
    // Requête SQL pour récupérer les détails du candidat
    $sqlDetails = "SELECT c.id_q, t.Question, c.reponse_q, c.reponse_u, c.est_correcte
                   FROM comp_noteq1 c
                   JOIN test1 t ON t.id = c.id_q
                   WHERE c.id_u = ?";
                   
    // Préparez la requête
    $stmtDetails = $conn->prepare($sqlDetails);

    // Liez l'ID du candidat à la requête préparée
    $stmtDetails->bind_param("i", $candidatId);

    // Exécutez la requête
    $stmtDetails->execute();

    // Obtenez le résultat de la requête
    $resultDetails = $stmtDetails->get_result();
}
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
        .text-success {
        color: green;
        font-weight: bold;
    }

    .text-danger {
        color: red;
        font-weight: bold;

        
    }
    .modal-content {
            max-width: 180% !important; /* Ajustez la largeur de la fenêtre modale selon vos besoins */
            max-height: 80vh;
            overflow-y: auto;
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
             <div class="container-fluid" style="background:white; margin-left:5px; margin-right:5px;">
                    <h1 class="mt-4" style="margin-left:20%;">Réponses De <?php echo $nomCandidat .' '. $prenomCandidat ?></h1>
                    <a href="#" onclick="imprimerTableau()" style="margin-left:87%;margin-top:2%;margin-bottom:3%" class="btn btn-danger">Imprimer</a>
                    <br>
                    <table id="example" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>Numero Question</th>
                            <th>Question</th>
                            <th>Reponse Correcte</th>
                            <th>Reponse d'Utilisateur</th>
                            <th>est correcte</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Numero Question</th>
                            <th>Question</th>
                            <th>Reponse Correcte</th>
                            <th>Reponse d'Utilisateur</th>
                            <th>est correcte</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php
                    if ($resultDetails->num_rows > 0) {
                        while ($rowDetails = $resultDetails->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $rowDetails["id_q"] . "</td>";
                            echo "<td>" . $rowDetails["Question"] . "</td>";
                            echo "<td>" . $rowDetails["reponse_q"] . "</td>";
                            echo "<td>" . $rowDetails["reponse_u"] . "</td>";
                            // echo "<td>" . ($rowDetails["est_correcte"] ? 'Oui' : 'Non') . "</td>";
                            echo "<td class='" . ($rowDetails["est_correcte"] ? 'text-success' : 'text-danger') . "'>" . ($rowDetails["est_correcte"] ? 'Oui' : 'Non') . "</td>";
                            echo "</tr>";
                            
                        }
                    } else {
                        echo "<p>Aucun résultat trouvé pour cet ID de candidat.</p>";
                    }
                ?>
                    </tbody>
                </table>
                    
                </div>
            </div>
        </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <!-- jQuery and DataTables JS-->
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
    new DataTable('#example');

//     function imprimerTableau() {
//     // Désactiver la pagination temporairement
//     var table = $('#example').DataTable();
//     var oldPaging = table.page();
//     table.page('all').draw();

//     // Ouvrir une nouvelle fenêtre
//     var popupWin = window.open('', '_blank', 'width=1000,height=1000');

//     // Construire le contenu de la fenêtre
//     var content = document.getElementById('example').outerHTML;

//     // Ajouter le contenu dans la fenêtre
//     popupWin.document.open();
//     popupWin.document.write(`
//         <html>
//             <head>
//                 <title>Tableau Imprimé</title>
//             </head>
//             <body onload="window.print(); window.onafterprint = function() { window.close(); }">
//                 ${content}
//             </body>
//         </html>
//     `);
//     popupWin.document.close();

//     // Restaurer la pagination
//     table.page(oldPaging).draw();
// }

function imprimerTableau() {
            // Ouvrir une nouvelle fenêtre
            var popupWin = window.open('', '_blank', 'width=1000,height=1000');

            // Construire le contenu de la fenêtre
            var content = document.getElementById('example').outerHTML;

            // Ajouter le contenu dans la fenêtre
            popupWin.document.open();
            popupWin.document.write(`
                <html>
                    <head>
                        <title>Tableau Imprimé</title>
                    </head>
                    <body onload="window.print(); window.onafterprint = function() { window.close(); }">
                        ${content}
                    </body>
                </html>
            `);
            popupWin.document.close();
        }
</script>
</body>
</html>
