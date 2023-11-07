<?php
$conn = mysqli_connect("localhost", "root", "", "menarahold");
if (!$conn) {
  die('Erreur de connexion à la base de données : ' . mysqli_connect_error());
}
$sql = "SELECT c.cin, c.nom, c.prenom, c.direction, c.societe, c.service, c.fonction , n.personalite FROM condidat c, note n WHERE n.nom = c.nom AND n.prenom = c.prenom ";
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html>
  <head>
    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

    <link href="https://nightly.datatables.net/css/jquery.dataTables.css" rel="stylesheet" type="text/css" />
    <script src="https://nightly.datatables.net/js/jquery.dataTables.js"></script>
    
    <link href="https://nightly.datatables.net/select/css/select.dataTables.css?_=9a6592f8d74f8f520ff7b22342fa1183.css" rel="stylesheet" type="text/css" />
<script src="https://nightly.datatables.net/select/js/dataTables.select.js?_=9a6592f8d74f8f520ff7b22342fa1183"></script>

    <link href="https://nightly.datatables.net/searchpanes/css/searchPanes.dataTables.css?13" rel="stylesheet" type="text/css" />
    <script src="https://nightly.datatables.net/searchpanes/js/dataTables.searchPanes.js?13"></script>

<script src="https://code.highcharts.com/highcharts.js"></script>
    <meta charset=utf-8 />
<!--
Created using JS Bin
http://live.datatables.net

Copyright (c) 2023 by anonymous (http://live.datatables.net/pedakowe/1/edit)

Released under the MIT license: http://jsbin.mit-license.org
-->
    <title>DataTables - JS Bin</title>
  
<style id="jsbin-css">
body {
  font: 90%/1.45em "Helvetica Neue", HelveticaNeue, Verdana, Arial, Helvetica, sans-serif;
  margin: 0;
  padding: 0;
  color: #333;
  background-color: #fff;
}

</style>
</head>
  <body>
    <div id="container" style="width:100%; height:400px;"></div>
    <div class="container">
      <table id="example" class="display nowrap" width="100%">
        <thead>
        <tr>
            <th>Cin</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Direction</th>
            <th>Societe</th>
            <th>Service</th>
            <th>Fonction</th>
            <th>Personnalité</th>

        </tr>
        </thead>

        <tfoot>
          <tr>
            <th>Cin</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Direction</th>
            <th>Societe</th>
            <th>Service</th>
            <th>Fonction</th>
            <th>Personnalité</th>
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
                    echo "<td>" . $row["direction"] . "</td>";
                    echo "<td>" . $row["societe"] . "</td>";
                    echo "<td>" . $row["service"] . "</td>";
                    echo "<td>" . $row["fonction"] . "</td>";
                    echo "<td>" . $row["personalite"] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='8'>Aucun résultat trouvé dans la base de données.</td></tr>";
            }
          ?>
        </tbody>
      </table>
    </div>
  <script>
$(document).ready(function() {
    var table = $("#example").DataTable({
      dom: 'Pfrtip'
    });
 
    var myChart = Highcharts.chart("container", {
        chart: {
            type: "pie"
        },
        title: {
            text: "Liste "
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
        .column(7, { search: 'applied' })
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