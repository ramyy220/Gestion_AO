<?php
    session_start();

    if(!isset($_SESSION['CA_User']))
    {
        header('Location: ../../../login/login.php');
    }


?>

<?php 
    include_once('../accueil_connection.php');
    error_reporting(0);

    $ref_pla = $_GET['ref_pla'];
    $query = "SELECT * from placard where ref_placard = '$ref_pla'";

    $result = mysqli_query($con,$query);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style_consulter_pla.css">
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
                    <li> <a href="../../ao/accueil/accueil_ao.php">Appel d'Offres</a> </li>
                    <li> <a href="../../cc/accueil/accueil_cc.php">Cahiers de Charges</a> </li>
                    <li> <a href="../../rcc/accueil/accueil_rcc.php">Retraits C.C</a> </li>
                    <li> <a href="../../sou/accueil/accueil_sou.php">Soumissionnaires</a> </li>
                    <li> <i class="fa fa-angle-down"></i> <a href="#">Statistiques et Listings</a> 
                        <div class="sub_menu">
                            <ul>
                                <li class="hover-me"> <i class="fa fa-angle-right"></i> <a href="#"> Statistiques </a>
                                    <div class="sub_menu2">
                                        <ul><a href="#">Par retraits et depots</a></ul>
                                        <ul><a href="#">Par état</a></ul>
                                        <ul><a href="#">Par étape</a></ul>
                                        <ul><a href="#">Par mode</a></ul>
                                        <ul><a href="#">Par nature</a></ul>
                                    </div>
                                </li>
                                <li class="hover-me"> <i class="fa fa-angle-right"></i> <a href="#"> Listings </a>
                                    <div class="sub_menu2">
                                        <ul><a href="#">Par état</a></ul>
                                        <ul><a href="#">Par étape</a></ul>
                                        <ul><a href="#">Par mode</a></ul>
                                        <ul><a href="#">Par nature</a></ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="active"> <a href="../../pla/accueil/accueil_pla.php">Placards</a> </li>
                    <li> <a href="../../bao/accueil/accueil_bao.php">BAOSEM</a> </li>
                </ul>
        </div>

        <div class="content">

            <div class="container">
                <div class="title">Consulter un Placard</div>
                <a href="../accueil/accueil_pla.php" id="return"> Retourner à la page d'accueil </a>

                            <?php 
                            while($rows=mysqli_fetch_assoc($result)){      
                            ?>
                        <div class="form">
                            <div class="box">
                                <span class="details">Réference du placard:</span>
                                <p> <?php echo $rows['ref_placard']; ?> </p>
                            </div>
                            <div class="box">
                                <span class="details">Date de Création:</span>
                                <p> <?php echo $rows['date_creation_placard']; ?> </p>
                            </div>
                            <div class="box">
                                <span class="details">Objet:</span>
                                <p> <?php echo $rows['objet_placard']; ?> </p>
                            </div>
                            <div class="box">
                                <span class="details">Type:</span>
                                <p> <?php echo $rows['type_placard']; ?> </p>
                            </div>
                            <div class="box">
                                <span class="details">Référence de l'appel d'offres:</span>
                                <p> <?php echo $rows['ref_AO']; ?> </p>
                            </div>
                            <div class="box">
                                <span class="details">Numéro du BAOSEM:</span>
                                <p> <?php echo $rows['num_baosem']; ?> </p>
                            </div>
                        </div>
                            <?php
                                }
                            ?>
                            

                        <div class="button">
                            <button onclick="location='../accueil/accueil_pla.php'">Retourner</a>
                        </div>

            </div>

        </div>
    </body>
</html>