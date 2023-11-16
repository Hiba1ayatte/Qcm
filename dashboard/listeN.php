<?php
$conn = mysqli_connect("localhost", "root", "", "menarahold");
if (!$conn) {
  die('Erreur de connexion à la base de données : ' . mysqli_connect_error());
}
$sql = "SELECT c.cin, c.nom, c.prenom, c.fonction,n.id, n.personalite FROM condidat c JOIN note n ON c.nom = n.nom AND c.prenom = n.prenom LEFT JOIN emp e ON c.nom = e.NOM AND c.prenom = e.PRENOM WHERE e.NOM IS NULL AND e.PRENOM IS NULL";
$result = $conn->query($sql);

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
                <br>
                <!-- <h1 class="mt-4">Liste des Employées</h1> -->
                <!-- Structure de la table --> <br>
                <div id="container" style="width:100%; height:400px;"></div>
                    <div class="container" style="background-color:white;width:100%; ">
                    <table id="example" class="display nowrap" width="100%" style="width:100%">
                        <thead>
                        <tr>
                            <th>Cin</th>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>Fonction</th>
                            <th>Personnalité</th>
                            <th>Réponses</th>
                        </tr>
                        </thead>

                        <tfoot>
                        <tr>
                            <th>Cin</th>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>Fonction</th>
                            <th>Personnalité</th>
                            <th>Réponses</th>
                        </tr>
                        </tfoot>

                        <tbody>
                        <?php
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    echo "<tr>";
                                    echo "<td>" . $row["cin"] . "</td>";
                                    echo "<td>" . $row["nom"] . "</td>";
                                    echo "<td>" . $row["prenom"] . "</td>";
                                    echo "<td>" . $row["fonction"] . "</td>";
                                    echo "<td>" . $row["personalite"] . "</td>";
                                    echo "<td><a href='detailsLN.php?id=" . $row["id"] . "'>Résponse</a></td>";
                                    echo "</tr>";
                                }
                            } else {
                                echo "<tr><td colspan='8'>Aucun résultat trouvé dans la base de données.</td></tr>";
                            }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
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
$(document).ready(function() {
    var table = $("#example").DataTable({
      dom: 'Pfrtip',
      scrollX: true, // Active le défilement horizontal
        // Autres options DataTable
    });
 
    var myChart = Highcharts.chart("container", {
        chart: {
            type: "pie"
        },
        colors: ["'#ae9d72","#9c8c63","#7e6845","#ad973d","#7e7344","#ab9956","#e6d1c9","#efdad7"],
        title: {
            text: "Synthése des Personnalité Nouveau Candidat"
        },
        series: [{
            data: chartData(table)
        }]
    });
 
    // Set the data for the first series to be the map returned from the chartData function
    table.on("draw", function() {
        myChart.series[0].setData(chartData(table));
    });
});
 
function chartData(table) {
    var counts = {};
 
    // Count the number of entries for each office
    table
        .column(4, { search: 'applied' })
        .data()
        .each(function (val) {
            if (counts[val]) {
                counts[val] += 1;
            } else {
                counts[val] = 1;
            }
        });
 
    // And map it to the format highcharts uses
    return $.map(counts, function (val, key) {
        return {
            name: key,
            y: val,
        };
    });
}
</script>
</body>
</html>
