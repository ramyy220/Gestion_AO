<?php
    session_start();

    if(!isset($_SESSION['CEOT_User']))
    {
        header('Location: ../../../login/login.php');
    }


?>

<?php 
    include_once('../accueil_connection.php');
    error_reporting(0);

    $ref_ao = $_GET['ref_ao'];
    $query = "SELECT * from appel_offre where ref_AO = '$ref_ao'";

    $result = mysqli_query($con,$query);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style_consulter_ao.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&family=Mukta:wght@300;400;600;700;800&family=Noto+Sans:wght@400;700&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="headerr">
                <div class="logout">
                   <a href="../../deconnexion.php" id="deco"> Déconnexion </a>
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
                    <li> <a href="../../accueil/accueil_ceot.php">PV CEOT</a> </li>
                    <li class="active"> <a href="../../ao/accueil/accueil_ao.php">Appels d'Offres</a> </li>
                </ul>
        </div>

        <div class="content">

        <div class="container">
                <div class="title">Consulter un Appel d'Offres</div>
                <a href="../accueil/accueil_ao.php" id="return"> Retourner à la page d'accueil </a>

                            <?php 
                            while($rows=mysqli_fetch_assoc($result)){      
                            ?>
                        <div class="form">
                            <div class="box">
                                <span class="details">Référence de l'appel d'offres:</span>
                                <p> <?php echo $rows['ref_AO']; ?> </p>
                            </div>
                            <div class="box">
                                <span class="details">Date de création:</span>
                                <p> <?php echo $rows['date_creation_AO']; ?> </p>
                            </div>
                            <div class="box">
                                <span class="details">Objet:</span>
                                <p> <?php echo $rows['objet_AO']; ?> </p>
                            </div>
                            <div class="box">
                                <span class="details">Observation:</span>
                                <p> <?php echo $rows['observation_AO']; ?> </p>
                            </div>
                            <div class="box">
                                <span class="details">Description:</span>
                                <p> <?php echo $rows['desc_AO']; ?> </p>
                            </div>
                            <div class="box">
                                <span class="details">Date d'ouverture du plis:</span>
                                <p> <?php echo $rows['date_ouverture_plis']; ?> </p>
                            </div>
                            <div class="box">
                                <span class="details">Heure d'ouverture du plis:</span>
                                <p> <?php echo $rows['heure_ouverture_plis']; ?> </p>
                            </div>
                            <div class="box">
                                <span class="details">Mode:</span>
                                <p> <?php echo $rows['mode']; ?> </p>
                            </div>
                            <div class="box">
                                <span class="details">Nature:</span>
                                <p> <?php echo $rows['nature']; ?> </p>
                            </div>
                            <div class="box">
                                <span class="details">État:</span>
                                <p> <?php echo $rows['etat']; ?> </p>
                            </div>
                            <div class="box">
                                <span class="details">Étape:</span>
                                <p> <?php echo $rows['etape']; ?> </p>
                            </div>
                            <div class="box">
                                <span class="details">Durée de validité:</span>
                                <p> <?php echo $rows['duree_validite']; ?> jours </p>
                            </div>
                            <div class="box">
                                <span class="details">Durée d'engagement:</span>
                                <p> <?php echo $rows['duree_engagement']; ?> jours </p>
                            </div>
                            <div class="box">
                                <span class="details">Montant de garantie:</span>
                                <p> <?php echo $rows['montant_garantie']; ?>%</p>
                            </div>
                            <div class="box">
                                <span class="details">Référence du cahier de charges:</span>
                                <p> <?php echo $rows['ref_CC']; ?> </p>
                            </div>
                        </div>
                            <?php
                                }
                            ?>
                            

                        <div class="button">
                            <button onclick="location='../accueil/accueil_ao.php'">Retourner</a>
                        </div>

            </div>

        </div>
    </body>
</html>