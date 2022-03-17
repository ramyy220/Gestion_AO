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

    $ref_sou = $_GET['code_sou'];
    $query = "SELECT * from soumissionnaire where code_soumissionnaire = '$ref_sou'";

    $result = mysqli_query($con,$query);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style_consulter_sou.css">
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
                    <li class="active"> <a href="../../sou/accueil/accueil_sou.php">Soumissionnaires</a> </li>
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
                    <li> <a href="../../pla/accueil/accueil_pla.php">Placards</a> </li>
                    <li> <a href="../../bao/accueil/accueil_bao.php">BAOSEM</a> </li>
                </ul>
        </div>

        <div class="content">

            <div class="container">
                <div class="title">Consulter un Soumissionnaire</div>
                <a href="../accueil/accueil_sou.php" id="return"> Retourner à la page d'accueil </a>

                        <div class="form">
                            <?php 
                            while($rows=mysqli_fetch_assoc($result)){      
                            ?>
                            <div class="box">
                                <span class="details">Code du soumissionnaire :</span>
                                <p> <?php echo $rows['code_soumissionnaire']; ?> </p>
                            </div>
                            <div class="box">
                                <span class="details">Raison sociale :</span>
                                <p> <?php echo $rows['raison_social']; ?> </p>
                            </div>
                            <div class="box">
                                <span class="details">Nom :</span>
                                <p> <?php echo $rows['nom_contact']; ?> </p>
                            </div>
                            <div class="box">
                                <span class="details">Prénom :</span>
                                <p> <?php echo $rows['prenom_contact']; ?> </p>
                            </div>
                            <div class="box">
                                <span class="details">Registre de commerce :</span>
                                <p> <?php echo $rows['registre_commerce']; ?> </p>
                            </div>
                            <div class="box">
                                <span class="details">Numéro d'identification fiscale :</span>
                                <p> <?php echo $rows['num_idf_fiscal']; ?> </p>
                            </div>
                            <div class="box">
                                <span class="details">Numéro du fix :</span>
                                <p> <?php echo $rows['num_fix']; ?> </p>
                            </div>
                            <div class="box">
                                <span class="details">Numéro du fax:</span>
                                <p> <?php echo $rows['num_fax']; ?> </p>
                            </div>
                            <div class="box">
                                <span class="details">Numéro mobile :</span>
                                <p> <?php echo $rows['num_mobile']; ?> </p>
                            </div>
                            <div class="box">
                                <span class="details">Adresse :</span>
                                <p> <?php echo $rows['adresse']; ?> </p>
                            </div>
                            <div class="box">
                                <span class="details">E-mail :</span>
                                <p> <?php echo $rows['email']; ?> </p>
                            </div>
                            <?php
                                }
                            ?>
                        </div>
                            

                        <div class="button">
                            <button onclick="location='../accueil/accueil_sou.php'">Retourner</a>
                        </div>

            </div>

        </div>
    </body>
</html>