<?php
    session_start();

    if(!isset($_SESSION['BOG_User']))
    {
        header('Location: ../../login/login.php');
    }

?> 

<?php 
    include_once('../accueil_connection.php');
    error_reporting(0);

    $ref_bog = $_GET['ref_bog'];
    $query = "SELECT * from depot_offre where num_ordre_bog = '$ref_bog'";

    $result = mysqli_query($con,$query);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style_consulter_bog.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&family=Mukta:wght@300;400;600;700;800&family=Noto+Sans:wght@400;700&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="headerr">
            <div class="logout">
                <a href="../deconnexion.php" id="deco"> Déconnexion </a>
            </div>
            <div class="logo">
                <img src="../Logo.JPG">
            </div>
            <div class="gtp">
                <p> Entreprise Nationale des Grands Travaux Pétroliers </p>
            </div>
            <div class="iso">
                <p> Filliale 100% du Groupe SONATRACH </p>
                <p> Certifie ISO 9001/2000 </p>
            </div>
        </div>       
        <div class="dropdwn">
                <ul class="flexnav">
                    <li class="active"> <a href="../accueil/accueil_bog.php">Dépots d'Offres</a> </li>
                    <li> <a href="../ao/accueil/accueil_ao.php">Appels d'Offres</a> </li>
                </ul>
        </div>

        <div class="content">

            <div class="container">
                <div class="title">Consulter un Dépot d'Offres</div>
                <a href="../accueil/accueil_bog.php" id="return"> Retourner à la page d'accueil </a>

                            <?php 
                            while($rows=mysqli_fetch_assoc($result)){      
                            ?>
                        <div class="form">
                            <div class="box">
                                <span class="details">Numéro d'Ordre :</span>
                                <p> <?php echo $rows['num_ordre_bog']; ?> </p>
                            </div>
                            <div class="box">
                                <span class="details">Date :</span>
                                <p> <?php echo $rows['date_depot']; ?> </p>
                            </div>
                            <div class="box">
                                <span class="details">Heure :</span>
                                <p> <?php echo $rows['heure_depot']; ?> </p>
                            </div>
                            <div class="box">
                                <span class="details">Nom :</span>
                                <p> <?php echo $rows['nom_depot']; ?> </p>
                            </div>
                            <div class="box">
                                <span class="details">Prénom :</span>
                                <p> <?php echo $rows['prenom_depot']; ?> </p>
                            </div>
                            <div class="box">
                                <span class="details">Observation :</span>
                                <p> <?php echo $rows['observation_depot']; ?> </p>
                            </div>
                            <div class="box">
                                <span class="details">Référence de l'appel d'offres :</span>
                                <p> <?php echo $rows['ref_AO']; ?> </p>
                            </div>
                        </div>
                            <?php
                                }
                            ?>
                            

                        <div class="button">
                            <button onclick="location='../modifier/modifier_bog.php'">Modifier</a>
                        </div>

            </div>

        </div>
    </body>
</html>