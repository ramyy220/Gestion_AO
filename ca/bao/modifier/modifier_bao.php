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

    $num_bao = $_GET['cons'];
    $query = "SELECT * from baosem where num_baosem = '$num_bao'";

    $result = mysqli_query($con,$query);
?>

<?php include('modifier_connect_bao.php'); ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style_modifier_bao.css">
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
                    <li> <a href="../../pla/accueil/accueil_pla.php">Placards</a> </li>
                    <li class="active"> <a href="../../bao/accueil/accueil_bao.php">BAOSEM</a> </li>
                </ul>
        </div>


        <div class="content">

            <div class="container">
                <div class="title">Modifier un BAOSEM</div>
                <a href="../accueil/accueil_bao.php" id="return"> Retourner à la page d'accueil </a>

                <div class="formulaire">

                    <form method="POST" action="modifier_connect_bao.php">
                        <?php 
                            while($rows=mysqli_fetch_assoc($result)){
                                
                        ?>


                        <div class="user-details">
                            <div class="input-box">
                                <span class="details">Numéro du BAOSEM :</span>
                                <input type="text" name="num_bao" value="<?php echo $rows['num_baosem']; ?>" readonly="readonly"  required>
                            </div>
                            <div class="input-box">
                                <span class="details">Date d'apparition : </span>
                                <input type="text" name="date" value="<?php echo $rows['date_apparition']; ?>" required>
                            </div>
                            <div class="input-box">
                                <span class="details">Description :</span>
                                <input type="text" name="descr" value="<?php echo $rows['desc_baosem']; ?>" required>
                            </div>
                        </div>
                        <?php 
                            }     
                        ?>
                            <div class="button">
                                <input type="submit" name="update" value="Sauvegarder">
                            </div>
                    </form>
                    <div class="button">
                                <button onclick="location='../accueil/accueil_bao.php'">Annuler</a>
                    </div>

                </div>


            </div>

        </div>
    </body>
</html>