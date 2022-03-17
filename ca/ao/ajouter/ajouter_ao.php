<?php
    session_start();

    if(!isset($_SESSION['CA_User']))
    {
        header('Location: ../../../login/login.php');
    }


?>

<?php include ("ajouter_connect_ao.php"); ?>

<?php
 $con = mysqli_connect("localhost","root","");
 $db = mysqli_select_db($con, "pfe_memoire");
 $get=mysqli_query($con, "SELECT ref_CC FROM cahier_des_charges ORDER BY ref_CC ASC");
 $option = '';
 while($row = mysqli_fetch_assoc($get))
{
  $option .= '<option value = "'.$row['ref_CC'].'">'.$row['ref_CC'].'</option>';
}
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style_ajouter_ao.css">
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
                <li class="active"> <a href="../../ao/accueil/accueil_ao.php">Appel d'Offres</a> </li>
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
                <li> <a href="../../bao/accueil/accueil_bao.php">BAOSEM</a> </li>
            </ul>
        </div>     
        <div class="content">

            <div class="container">
                <div class="title">Ajouter un Appel d'Offres</div>
                <a href="../accueil/accueil_ao.php" id="return"> Retourner à la page d'accueil </a>

                <div class="formulaire">
                    <form method="POST" action="ajouter_connect_ao.php">

                        <div class="user-details">
                            <div class="input-box">
                                <span class="details">Reference de l'appel d'offres :</span>
                                <input type="text" name="ref_ao" placeholder="Veuillez saisir la référence" required>
                            </div>
                            <div class="input-box">
                                <span class="details">Date de création : </span>
                                <input type="date" name="dateC" required>
                            </div> 
                            <div class="input-box">
                                <span class="details">Objet :</span>
                                <input type="text" name="obj" placeholder="Veuillez saisir l'objet" required>
                            </div>
                            <div class="input-box">
                                <span class="details">Description :</span>
                                <input type="text" name="descr" placeholder="Veuillez saisir la description" required>
                            </div> 
                            <div class="input-box">
                                <span class="details">Observation :</span>
                                <input type="text" name="obs" placeholder="Veuillez saisir l'observation" required>
                            </div> 
                            <div class="input-box">
                                <span class="details">Date d'ouverture du plis :</span>
                                <input type="date" name="dateO" required>
                            </div> 
                            <div class="input-box">
                                <span class="details"> Heure d'ouverture du plis :</span>
                                <input type="time" name="heureO" placeholder="Veuillez saisir l'heure de l'ouverture des plis" required>
                            </div> 
                            <div class="input-box">
                                <span class="details"> Mode :</span>
                                <select name="mod" required>
                                    <option value="National ouvert">National Ouvert</option>
                                    <option value="National restreint">National Restreint</option>
                                    <option value="National et international restreint">National et International Restreint</option>
                                </select>
                            </div> 
                            <div class="input-box">
                                <span class="details">Nature :</span>
                                <select name="natur" required>
                                    <option value="Travaux"> Travaux </option>
                                    <option value="Fourniture"> Fourniture </option>
                                    <option value="Service"> Service </option>
                                </select>
                            </div> 
                            <div class="input-box">
                                <span class="details">Etat :</span>
                                <select name="eta" required>
                                    <option value="Encours">En Cours</option>
                                    <option value="Infructueux">Infructueux</option>
                                    <option value="Attribution provisoire">Attribution Provisoire</option>
                                    <option value="Attribution definitive"> Attribution Définitive</option>
                                    <option value="Annulee"> Annulé </option>
                                </select>
                            </div>
                            <div class="input-box">
                                <span class="details">Etape :</span>
                                <select name="etap" required>
                                    <option value="Reception des offres"> Réception des Offres</option>
                                    <option value="COP technique">COP étape 1 (téchnique)</option>
                                    <option value="COP financier">COP étape 2 (financier)</option>
                                    <option value="CEOT">CEOT (téchnique)</option>
                                    <option value="Centre d''achats">Centre d'Achats</option>
                                </select>
                            </div>
                            <div class="input-box">
                                <span class="details"> Durée de validité (jours) :</span>
                                <input type="number" name="dureeV" placeholder="Veuillez saisir la durée" required>
                            </div>
                            <div class="input-box">
                                <span class="details">Durée d'engagement (jours) : </span>
                                <input type="number" name="dureeE" placeholder="Veuillez saisir la durée" required>
                            </div>
                            <div class="input-box">
                                <span class="details"> Montant garantie (%) :</span>
                                <input type="number" name="montant" placeholder="Veuillez saisir le montant de garantie" required>
                            </div>
                            <div class="input-box">
                                <span class="details"> Réference du cahier de charges : </span>
                                <select name="ref_cc" required>
                                    <?php echo $option; ?>
                                </select>  
                            </div>
                        </div>
                            <div class="button">
                                <input type="submit" name="save" value="Sauvegarder">
                            </div>
                    </form>
                    <div class="button">
                                <button onclick="location='../accueil/accueil_ao.php'">Annuler</a>
                            </div>

                </div>


            </div>

        </div>
    </body>
</html>