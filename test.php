<?php
$conn = mysqli_connect("localhost", "root", "", "menarahold");
if (!$conn) {
  die('Erreur de connexion à la base de données : ' . mysqli_connect_error());
}
$sql = "SELECT c.cin, c.nom, c.prenom, c.direction, c.societe, c.service, c.fonction , n.personalite FROM condidat c, note n WHERE n.nom = c.nom AND n.prenom = c.prenom ";
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css"/>
    <link rel="stylesheet" href="https://cdn.datatables.net/select/1.7.0/css/select.dataTables.min.css">
    <link rel="stylesheet" href="https://code.highcharts.com/css/highcharts.css"> 
    <link rel="stylesheet" href="https://cdn.datatables.net/fixedheader/3.2.3/css/fixedHeader.dataTables.min.css"> 
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css'>
</head>
<body>
    
</body>
</html>
<div class="demo-html">
					<div id="demo-output" style="margin-bottom: 1em; overflow: hidden;" class="chart-display highcharts-light" data-highcharts-chart="0">
                        <div id="highcharts-bas3b05-0" dir="ltr" class="highcharts-container "></div>
                    </div>
					<div id="example_wrapper" class="dataTables_wrapper">
                        <!-- <div class="dataTables_length" id="example_length">
                            <label>Show 
                                <select name="example_length" aria-controls="example" class="">
                                    <option value="10">10</option><option value="25">25</option>
                                    <option value="50">50</option><option value="100">100</option>
                                </select> entries</label>
                            </div> -->
                    <!-- <div id="example_filter" class="dataTables_filter">
                        <label>Search:
                            <input type="search" class="" placeholder="" aria-controls="example"></label>
                        </div> -->
                        <table id="example" class="display dataTable" style="width: 100%;" aria-describedby="example_info">
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

						<tbody>
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
                            <!-- Add more rows with data here -->
                        </tbody>
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
					</table>
                    <!-- <div class="dataTables_info" id="example_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div><div class="dataTables_paginate paging_simple_numbers" id="example_paginate"><a class="paginate_button previous disabled" aria-controls="example" aria-disabled="true" role="link" data-dt-idx="previous" tabindex="-1" id="example_previous">Previous</a><span><a class="paginate_button current" aria-controls="example" role="link" aria-current="page" data-dt-idx="0" tabindex="0">1</a><a class="paginate_button " aria-controls="example" role="link" data-dt-idx="1" tabindex="0">2</a><a class="paginate_button " aria-controls="example" role="link" data-dt-idx="2" tabindex="0">3</a><a class="paginate_button " aria-controls="example" role="link" data-dt-idx="3" tabindex="0">4</a><a class="paginate_button " aria-controls="example" role="link" data-dt-idx="4" tabindex="0">5</a><a class="paginate_button " aria-controls="example" role="link" data-dt-idx="5" tabindex="0">6</a></span><a class="paginate_button next" aria-controls="example" role="link" data-dt-idx="next" tabindex="0" id="example_next">Next</a></div></div> -->
				</div>

    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.7.0/js/dataTables.select.min.js"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://cdn.datatables.net/fixedheader/3.2.3/js/dataTables.fixedHeader.min.js"></script> 
    <!-- <script>
        $(document).ready(function () {
            var table = $('#example').DataTable({
                ScrollX:true,
                orderCellsTop: true,
                fixedHeader: true,
                initComplete: function () {
                    this.api().columns().every(function () {
                        var column = this;
                        var title = $(column.header()).text();
                        $(column.header()).html('<input type="text" placeholder="' + title + '" />');

                        // Apply the search
                        $(column.header()).find('input').on('keyup change', function () {
                            if (column.search() !== this.value) {
                                column
                                    .search(this.value)
                                    .draw();
                            }
                        });
                    });
                }
            });
        });
    </script> 
<script>   
Create DataTable
const table = new DataTable('#example');
 
 // Create chart
 const chart = Highcharts.chart('demo-output', {
     chart: {
         type: 'pie',
         styledMode: true
     },
     title: {
         text: 'Staff Count Per Position'
     },
     series: [
         {
             data: chartData(table)
         }
     ]
 });
  
 // On each draw, update the data in the chart
 table.on('draw', function () {
     chart.series[0].setData(chartData(table));
 });
  
 function chartData(table) {
     var counts = {};
  
     // Count the number of entries for each position
     table
         .column(1, { search: 'applied' })
         .data()
         .each(function (val) {
             if (counts[val]) {
                 counts[val] += 1;
             }
             else {
                 counts[val] = 1;
             }
         });
  
     return Object.entries(counts).map((e) => ({
         name: e[0],
         y: e[1]
     }));
 }
</script> -->
<script>
    $(document).ready(function () {
        // Initialise le DataTable
        var table = $('#example').DataTable({
            ScrollX: true,
            orderCellsTop: true,
            fixedHeader: true,
            initComplete: function () {
                this.api().columns().every(function () {
                    var column = this;
                    var title = $(column.header()).text();
                    $(column.header()).html('<input type="text" placeholder="' + title + '" />');

                    // Applique la recherche
                    $(column.header()).find('input').on('keyup change', function () {
                        if (column.search() !== this.value) {
                            column
                                .search(this.value)
                                .draw();
                        }
                    });
                });
            }
        });

        // Crée le graphique Highcharts
        const chart = Highcharts.chart('demo-output', {
            chart: {
                type: 'pie',
                styledMode: true
            },
            title: {
                text: 'Staff Count Per Position'
            },
            series: [
                {
                    data: chartData(table)
                }
            ]
        });

        // Sur chaque événement de dessin du tableau, met à jour les données du graphique
        table.on('draw', function () {
            chart.series[0].setData(chartData(table));
        });

        // Fonction pour récupérer les données du graphique en fonction des filtres
        function chartData(table) {
            var counts = {};

            // Compter le nombre d'entrées pour chaque position
            table
                .column(1, { search: 'applied' })
                .data()
                .each(function (val) {
                    if (counts[val]) {
                        counts[val] += 1;
                    }
                    else {
                        counts[val] = 1;
                    }
                });

            return Object.entries(counts).map((e) => ({
                name: e[0],
                y: e[1]
            }));
        }
    });
</script>
