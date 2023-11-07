<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;  

$conn = mysqli_connect("localhost", "root", "", "menarahold");
if (!$conn) {
  die('Erreur de connexion à la base de données : ' . mysqli_connect_error());
}

if (isset($_GET['session_id'])) {
    $session_id = $_GET['session_id'];

    // Effectuer une requête SELECT pour récupérer les données de la session
    $sql = "SELECT nom,matricule, fonction, test, temps_total, temps_part1, temps_part2, temps_part3, email , message FROM session WHERE id = $session_id";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        $session = mysqli_fetch_assoc($result);

        // Assurez-vous que les temps ne sont pas vides
        $temps_total = $session['temps_total'] ? $session['temps_total'] : "00:00";
        $temps_part1 = $session['temps_part1'] ? $session['temps_part1'] : "00:00";
        $temps_part2 = $session['temps_part2'] ? $session['temps_part2'] : "00:00";
        $temps_part3 = $session['temps_part3'] ? $session['temps_part3'] : "00:00";

        // Mettez à jour les temps dans la session
        $session['temps_total'] = $temps_total;
        $session['temps_part1'] = $temps_part1;
        $session['temps_part2'] = $temps_part2;
        $session['temps_part3'] = $temps_part3;
    } else {
        echo "Erreur de requête : " . mysqli_error($conn);
    }
}
if (isset($_POST['envoyer'])) {
    $nom = mysqli_real_escape_string($conn, $_POST['nom']);
    $matricule = mysqli_real_escape_string($conn, $_POST['matricule']);
    $fonction = mysqli_real_escape_string($conn, $_POST['fonction']);
    $test = mysqli_real_escape_string($conn, $_POST['test']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);
    $temps = $temps1 = $temps2 = $temps3 = null; // Initialisez-les à NULL

    if ($test === "Test Personnalité") {
        $temps = mysqli_real_escape_string($conn, $_POST['tempsT']);
    } else if ($test === "Test Logique 1" || $test === "Test Logique 2" ) {
        if (isset($_POST['temps1'])) {
            $temps1 = mysqli_real_escape_string($conn, $_POST['temps1']);
        }
        if (isset($_POST['temps2'])) {
            $temps2 = mysqli_real_escape_string($conn, $_POST['temps2']);
        }
        if (isset($_POST['temps3'])) {
            $temps3 = mysqli_real_escape_string($conn, $_POST['temps3']);
        }
    }

    // Maintenant, vous pouvez insérer ces valeurs dans votre table
    $query = "INSERT INTO session (nom ,matricule , fonction, test, temps_total, temps_part1, temps_part2, temps_part3, email, message) VALUES ('$nom','$matricule','$fonction', '$test', '$temps', '$temps1', '$temps2', '$temps3', '$email','$message')";
    
    if (mysqli_query($conn, $query)) {
        // Insertion réussie, maintenant envoyez l'e-mail
        require 'sendmail/includes/PHPMailer.php';
        require 'sendmail/includes/SMTP.php';
        require 'sendmail/includes/Exception.php';

        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'accueil@menara-holding.ma';
        $mail->Password = 'iziybkynydrxfgxq';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;
        $mail->setFrom('accueil@menara-holding.ma', 'Menara Holding');
        $mail->addAddress($email, $fonction);
        $mail->isHTML(true);
        $mail->Subject = $test;
        $mail->Body = $message;
        $mail->AltBody = 'Test';

        if ($mail->send()) {
            // Email envoyé avec succès
            echo 'Message envoyé';
            header("Location: session.php"); // Redirigez après avoir terminé
            exit;
        } else {
            echo 'Erreur lors de l\'envoi du message';
        }
    } else {
        echo 'Erreur lors de l\'enregistrement : ' . mysqli_error($conn);
    }
} else {
        
        echo '<script>alert("Erreur lors de l enregistrement : " . mysqli_error($conn)); </script>';
}



$fonctionQuery = mysqli_query($conn, "SELECT FONCTION FROM fonction");

$testQuery = mysqli_query($conn, "SELECT test, lien ,message FROM test");
$tests = array();

// Obtenez les données du test
$testData = mysqli_fetch_assoc($testQuery);

// Renvoyez les données au format JSON
// echo json_encode($testData);

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
input[type="text"], input[type="email"]{
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border: none;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}
#pre ,#mail{
    margin-left: 13em;
}
input[type="time"]{
    width: 40%;
    padding: 10px;
    margin-bottom: 20px;
    border: none;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}
input[type="number"]{
    width: 40%;
    padding: 10px;
    margin-bottom: 20px;
    border: none;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

select , textarea {
    width: 155%;
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
    margin-left: 23em;
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
                <div class="container-fluid" style="background-color:white;margin-top:3%; margin-left:1%;"><br>
                    <h2 style="text-align:center;font-familly:Dax;">Modification de la Session</h2>
                    <br>
                    <form method="post" name="inscription">
                        <div style="margin-left: 1em;">
                            <label>Nom De Session:</label>
                            <input type="text" name="nom" value="<?php echo $session['nom']; ?>" required><br>
                        </div>
                        <div style="margin-left: 1em;">
                            <label>Matricule:</label>
                            <input type="text" name="matricule" id="matricule" value="<?php echo $session['matricule']; ?>" required><br>
                        </div>
                        <div style="margin-left: 1em;width:63%;">
                            <label>Fonction :</label>
                            <select name="fonction">
                            <option value=""></option>
                                <?php
                                while ($row = mysqli_fetch_assoc($fonctionQuery)) {
                                    $selected = ($row['FONCTION'] == $session['fonction']) ? 'selected' : '';
                                ?>
                                <option value="<?php echo $row['FONCTION']; ?>" <?php echo $selected; ?>><?php echo $row['FONCTION']; ?></option>
                                <?php
                                }
                                mysqli_data_seek($testQuery, 0);
                                ?>
                            </select>
                        </div>
                        <div style="margin-left: 1em;width:63%;">
                            <label>Test :</label>
                            <select name="test" id="selectOption">
                            <option value=""></option>
                            <?php
                                while ($row = mysqli_fetch_assoc($testQuery)) {
                                    $testId = $row['id']; // Stockez l'ID du tes
                                    $selected = ($row['test'] == $session['test']) ? 'selected' : '';
                                ?>
                                <option value="<?php echo $row['test']; ?>" <?php echo $selected; ?>><?php echo $row['test']; ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div  id="divOption1" style="display: none;">
                            <div style="margin-left: 1.5em;">
                                <label style="margin-right: 1em;">Temps Total :</label>
                                <input type="time" id="temps" name="tempsT" value="<?php echo $session['temps_total']; ?>">
                                
                            </div>
                        </div>
                        <div  id="divOption2" style="display: none;">
                            <div style="margin-left: 1em;">
                                <label>Temps Partie 1 :</label>
                                <input type="time" id="temps1" name="temps1" value="<?php echo $session['temps_part1']; ?>">
                            </div>
                            <div style="margin-left: 1em;">
                                <label>Temps Partie 2 :</label>
                                <input type="time" id="temps2" name="temps2" value="<?php echo $session['temps_part2']; ?>">
                            </div>
                            <div style="margin-left: 1em;">
                                <label>Temps Partie 3 :</label>
                                <input type="time" id="temps3" name="temps3" value="<?php echo $session['temps_part3']; ?>">
                            </div>
                        </div>
                        <div style="margin-left: 1em;">
                            <label>Email :</label>
                            <input type="email" name="email" required><br>
                        </div>
                        <div style="margin-left: 1em;">
                            <label>Message :</label>
                            <textarea name="message" id="messageTextArea" cols="30" rows="10"><?php echo $session['message']; ?></textarea> <br>
                        </div>
                        <input type="submit" name="envoyer" value="Envoyer">
                        <br>
                        <br><br>
                        <!-- <br>
                        <input style="margin-left:85%" type="submit" name="save" value="Sauvegarder">
                        <br>
                        <br> -->
                    </form> 
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

        <!-- Bootstrap core JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <!-- Highcharts (for charts) -->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <!-- Add your custom JavaScript here -->
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
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
            const selectOption = document.getElementById('selectOption');
            const divOption1 = document.getElementById('divOption1');
            const divOption2 = document.getElementById('divOption2');
            const messageTextArea = document.getElementById("messageTextArea");
            const testLink = document.getElementById("testLink");

            selectOption.addEventListener('change', function() {
            // const selectedValue = selectOption.value;
            // const linkVariable = "";
            // const messageTextArea = document.getElementById("messageTextArea");

            const selectedOption = selectOption.options[selectOption.selectedIndex];
            // const testId = selectedOption.getAttribute('data-id');
            const selectedTestId = selectedOption.value; // Utilisez la variable stockée

            

            // Masquer tous les div d'options
            divOption1.style.display = 'none';
            divOption2.style.display = 'none';

            if (selectedTestId) {
                // const selectedTest = selectedOption.value;
                const xhr = new XMLHttpRequest();
                const formData = new FormData();
                formData.append('test', selectedTestId);

                xhr.open('POST', 'get_test_message.php', true);

                xhr.onload = function() {
                    if (xhr.status === 200) {
                        const response = JSON.parse(xhr.responseText);
                        // const message = xhr.responseText;
                        if (response && response.message) {
                            const message = response.message;
                            const link = response.lien;

                        // Mettez à jour le message
                        // messageTextArea.textContent = message;
                        //   messageTextArea.textContent = `${message}\nLien du test : ${link}`;

                        const sessionXHR = new XMLHttpRequest();
                        sessionXHR.open('GET', 'get_next_session_id.php', true); // Créez ce fichier pour obtenir le prochain ID de session
                        sessionXHR.onload = function() {
                            if (sessionXHR.status === 200) {
                                const sessionID = sessionXHR.responseText;
                               // Appelez une fonction pour mettre à jour le message avec le sessionID
                                updateMessageWithSessionID(message, link, sessionID);
                            } else {
                                console.error('Erreur AJAX pour obtenir le prochain ID de session : ' + sessionXHR.status + ' - ' + sessionXHR.statusText);
                            }
                        };
                        sessionXHR.send();

                        if (selectedTestId === "Test Personnalité") {
                            divOption1.style.display = 'block';
                        } else if (selectedTestId === "Test Logique 1" || selectedTestId === "Test Logique 2") {
                            divOption2.style.display = 'block';
                        }
                        } else {
                            console.error('Réponse JSON invalide depuis le serveur.');
                        }

                    } else {
                        console.error('Erreur AJAX : ' + xhr.status + ' - ' + xhr.statusText);
                    }
                };

                xhr.send(formData);
            } else {
                // Réinitialisez le message si aucune option n'est sélectionnée
                messageTextArea.textContent = '';
            }
            function updateMessageWithSessionID(message, link, sessionID) {
                messageTextArea.textContent = `${message}\nLien du test : ${link}?session_id=${sessionID}`;
            }
        });

            document.addEventListener("DOMContentLoaded", function () {
                const selectOption = document.getElementById('selectOption');
                const tempsInput = document.getElementById("temps");
                const minutesInput = document.getElementById("minutes");
                const secondesInput = document.getElementById("secondes");
                const divOption1 = document.getElementById('divOption1');
                const divOption2 = document.getElementById('divOption2');


                updateDivVisibility();
                selectOption.addEventListener('change', function () {
                    updateDivVisibility();
                });

                // Écoutez l'événement "input" sur le champ de temps
                tempsInput.addEventListener("input", function () {
                    // Obtenez la valeur du champ de temps (au format HH:mm)
                    const timeValue = tempsInput.value;

                    // Extrait les minutes et les secondes de la valeur du champ de temps
                    const [hours, minutes] = timeValue.split(":");
                    minutesInput.value = parseInt(minutes, 10);
                });

                // Écoutez l'événement "input" sur les champs de nombre
                minutesInput.addEventListener("input", function () {
                    // Synchronisez la valeur du champ de temps avec les valeurs des champs de nombre
                    const minutes = minutesInput.value;
                    const secondes = secondesInput.value;
                    tempsInput.value = `${minutes}:${secondes}`;
                });

                secondesInput.addEventListener("input", function () {
                    // Synchronisez la valeur du champ de temps avec les valeurs des champs de nombre
                    const minutes = minutesInput.value;
                    const secondes = secondesInput.value;
                    tempsInput.value = `${minutes}:${secondes}`;
                });


                function updateDivVisibility() {
                    // Masquer tous les div d'options
                    divOption1.style.display = 'none';
                    divOption2.style.display = 'none';

                    // Obtenir la valeur sélectionnée dans le champ de test
                    const selectedTestId = selectOption.value;

                    if (selectedTestId === "Test Personnalite") {
                        divOption1.style.display = 'block';
                    } else if (selectedTestId === "Test Logique 1") {
                        divOption2.style.display = 'block';
                    } else if (selectedTestId === "Test Logique 2") {
                        divOption2.style.display = 'block';
                    }
                }

            });

        </script>
      </body>
</html>
