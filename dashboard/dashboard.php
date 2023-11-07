<?php
// Établir la connexion à la base de données (vous avez déjà cette partie dans votre code)
$conn = mysqli_connect("localhost", "root", "", "menarahold");
if (!$conn) {
  die('Erreur de connexion à la base de données : ' . mysqli_connect_error());
}

// Requête SQL pour obtenir le nombre de personnes pour chaque personnalité MBTI
$sql = "SELECT Name, COUNT(*) AS nombre FROM note GROUP BY Name";
$result = $conn->query($sql);

// Stocker les résultats dans un tableau associatif
$personnalites = array();
while ($row = $result->fetch_assoc()) {
    $personnalites[$row['Name']] = $row['nombre'];
}

$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Simple Sidebar - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css'>
        <style>
            .nav-item{
            margin-left:1700px;
        }
            .tooltip{ 
  position:relative;
  float:right;
}
.tooltip > .tooltip-inner {
  background-color: #ff4b4b;
  padding:5px 15px; 
  color:#fff; 
  font-weight:bold; 
  font-size:13px;
}
.popOver + .tooltip > .tooltip-arrow {
    border-left: 5px solid transparent; 
    border-right: 5px solid transparent; 
    border-top: 5px solid #ff4b4b;}

section{
  margin:0 auto; 
  height:1200px;
}
.progress{
  border-radius:0;
  overflow:visible;
}
.progress-bar{
   background:rgb(23,44,60); 
  -webkit-transition: width 1.5s ease-in-out;
  transition: width 1.5s ease-in-out;
}
        </style>
    </head>
    <body>
        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <div class="border-end bg-white" id="sidebar-wrapper">
                <div class="sidebar-heading border-bottom bg-white"><img src="https://www.jadid-alwadifa.com/wp-content/uploads/2018/11/menara-holding.jpg" 
                  style="width:90px;heigth:20px" alt="logo"></div>
                <div class="list-group list-group-flush">
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="dashboard.php">Statistique</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="liste.php">Liste</a>
                    <!-- <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Overview</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Events</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Profile</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Status</a> -->
                </div>
            </div>
            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
                <!-- Top navigation-->
                <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                    <div class="container-fluid">
                        <button class="btn" style="background-color:#ae9d72" id="sidebarToggle">Menu</button>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="#!">Action</a>
                                        <a class="dropdown-item" href="#!">Another action</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#!">logout</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <!-- Page content-->
                <div class="container-fluid">
                    <h1 class="mt-4">Simple Sidebar</h1>
                    <section>
                        <div class="container">
                        <div class="row">
                        <div class="col-md-8 col-lg-8">
                            
                        <div class="barWrapper">
                        <span class="progressText"><B>HTML5</B></span>
                        <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" >   
                                <span  class="popOver" data-toggle="tooltip" data-placement="top" title="90%"> </span>     
                        </div>
                        </div>
                        
                        <div class="barWrapper">
                        <span class="progressText"><B>CSS3</B></span>
                        <div class="progress ">
                        <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="10" aria-valuemax="100" style="">
                            <span  class="popOver" data-toggle="tooltip" data-placement="top" title="80%"> </span>  
                        </div>
                        
                        </div>
                        </div>
                        
                        <div class="barWrapper">
                        <span class="progressText"><B>BOOTSTRAP</B></span>
                        <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                            <span  class="popOver" data-toggle="tooltip" data-placement="top" title="60%"> </span>  
                        </div>
                        </div>
                        </div>
                        <div class="barWrapper">
                        <span class="progressText"><B>JQUERY</B></span>
                        <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                <span  class="popOver" data-toggle="tooltip" data-placement="top" title="50%"> </span>  
                        </div>
                        </div>
                        </div>
                        <div class="barWrapper">
                        <span class="progressText"><B>MYSQL</B></span>
                        <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                            <span  class="popOver" data-toggle="tooltip" data-placement="top" title="85%"> </span>  
                        </div>
                        </div>
                        </div>
                        <div class="barWrapper">
                        <span class="progressText"><B>PHP</B></span>
                        <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                            <span  class="popOver" data-toggle="tooltip" data-placement="top" title="75%"> </span> 
                        </div>
                        </div>
                        </div>
                        
                    </section>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script> 

        <script>
            $(function () { 
                $('[data-toggle="tooltip"]').tooltip({trigger: 'manual'}).tooltip('show');
                });  

                $(".progress-bar").each(function(){
                    each_bar_width = $(this).attr('aria-valuenow');
                    $(this).width(each_bar_width + '%');
                });
        </script>
    </body>
</html>
