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

    $ref_cc = $_GET['ref_cc'];
    $query = "SELECT * from cahier_des_charges where ref_CC = '$ref_cc'";

    $result = mysqli_query($con,$query);
?>

<?php include ('modifier_connect_cc.php'); ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style_modifier_cc.css">
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
                    <li class="active"> <a href="../../cc/accueil/accueil_cc.php">Cahiers de Charges</a> </li>
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
                    <li> <a href="../../pla/accueil/accueil_pla.php">Placards</a> </li>
                    <li> <a href="../../bao/accueil/accueil_bao.php">BAOSEM</a> </li>
                </ul>
            </div>

        <div class="content">

            <div class="container">
                <div class="title">Modifier un Cahier de Charges</div>
                <a href="../accueil/accueil_cc.php" id="return"> Retourner à la page d'accueil </a>

                <div class="formulaire">

                    <form method="POST" action="modifier_connect_cc.php">
                        <?php 
                            while($rows=mysqli_fetch_assoc($result)){
                                
                        ?>

                        <div class="user-details">
                            <div class="input-box">
                                <span class="details">Réference du cahier de charges :</span>
                                <input type="text" name="ref_cc" value="<?php echo $rows['ref_CC']; ?>" readonly="readonly"  required>
                            </div>
                            <div class="input-box">
                                <span class="details">Date de création : </span>
                                <input type="date" name="dateC" value="<?php echo $rows['date_creation_CC']; ?>"  required>
                            </div>
                            <div class="input-box">
                                <span class="details">Objet :</span>
                                <input type="text" name="obj" value="<?php echo $rows['objet_CC']; ?>"  required>
                            </div>
                            <div class="input-box">
                                <span class="details">Observation :</span>
                                <input type="text" name="obs" value="<?php echo $rows['observation_CC']; ?>" required>
                            </div>
                            <div class="input-box">
                                <span class="details"> Durée de garantie (jours) :</span>
                                <input type="number" name="dureeG" value="<?php echo $rows['duree_garantie']; ?>" required>
                            </div>
                            <div class="input-box">
                                <span class="details"> Montant garantie (%) :</span>
                                <input type="number" name="montantG" value="<?php echo $rows['montant_CC']; ?>" required>
                            </div>
                        </div>
                            <div class="button">
                                <input type="submit" name="update" value="Sauvegarder">
                            </div>
                    </form>
                        <?php 
                            }   
                        ?>
                    <div class="button">
                                <button onclick="location='../accueil/accueil_cc.php'">Annuler</a>
                            </div>

                </div>


            </div>

        </div>
    </body>
</html>