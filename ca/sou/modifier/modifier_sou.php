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

    $code_sou = $_GET['code_sou'];
    $query = "SELECT * from soumissionnaire where code_soumissionnaire = '$code_sou'";

    $result = mysqli_query($con,$query);
?>

<?php include ("modifier_connect_sou.php"); ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style_modifier_sou.css">
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
                <div class="title">Modifier un Soumissionnaire</div>
                <a href="../accueil/accueil_sou.php" id="return"> Retourner à la page d'accueil </a>

                <div class="formulaire">

                    <form method="POST" action="modifier_connect_sou.php">
                        <?php 
                            while($rows=mysqli_fetch_assoc($result)){
                                
                        ?>

                        <div class="user-details">
                            <div class="input-box">
                                <span class="details">Code du Soumissionnaire :</span>
                                <input type="text" name="code_soum" value="<?php echo $rows['code_soumissionnaire']; ?>" readonly="readonly" required>
                            </div>
                            <div class="input-box">
                                <span class="details">Raison Sociale : </span>
                                <input type="text" name="raison" value="<?php echo $rows['raison_social']; ?>" required>
                            </div>
                            <div class="input-box">
                                <span class="details">Nom :</span>
                                <input type="text" name="nom" value="<?php echo $rows['nom_contact']; ?>" required>
                            </div>
                            <div class="input-box">
                                <span class="details">Prénom :</span>
                                <input type="text" name="prenom" value="<?php echo $rows['prenom_contact']; ?>" required>
                            </div>
                            <div class="input-box">
                                <span class="details">Registre du Commerce :</span>
                                <input type="text" name="registre" value="<?php echo $rows['registre_commerce']; ?>" required>
                            </div>
                            <div class="input-box">
                                <span class="details">Numéro d'Identification Fiscale :</span>
                                <input type="number" name="NIF" value="<?php echo $rows['num_idf_fiscal']; ?>" required>
                            </div>
                            <div class="input-box">
                                <span class="details"> Numéro du Fix :</span>
                                <input type="tel" name="NFix" value="<?php echo $rows['num_fix']; ?>" required>
                            </div>
                            <div class="input-box">
                                <span class="details"> Numéro du Fax :</span>
                                <input type="tel" name="NFax" value="<?php echo $rows['num_fax']; ?>" required>
                            </div>
                            <div class="input-box">
                                <span class="details">Numéro mobile :</span>
                                <input type="tel" name="NM" value="<?php echo $rows['num_mobile']; ?>" required>
                            </div>
                            <div class="input-box">
                                <span class="details">Adresse :</span>
                                <input type="text" name="Adr" value="<?php echo $rows['adresse']; ?>" required>
                            </div>
                            <div class="input-box">
                                <span class="details"> E-mail :</span>
                                <input type="email" name="email" value="<?php echo $rows['email']; ?>" required>
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
                                <button onclick="location='../accueil/accueil_sou.php'">Annuler</a>
                            </div>

                </div>


            </div>

        </div>
    </body>
</html>