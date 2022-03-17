<?php
    session_start();

    if(!isset($_SESSION['CA_User']))
    {
        header('Location: ../../../login/login.php');
    }


?>

<?php include('ajouter_connect_pla.php'); ?>
<?php
 $con = mysqli_connect("localhost","root","");
 $db = mysqli_select_db($con, "pfe_memoire");
 $get=mysqli_query($con, "SELECT ref_AO FROM appel_offre ORDER BY ref_AO ASC");
 $option = '';
 while($row = mysqli_fetch_assoc($get))
{
  $option .= '<option value = "'.$row['ref_AO'].'">'.$row['ref_AO'].'</option>';
}
?>

<?php
 $get=mysqli_query($con, "SELECT num_baosem FROM baosem ORDER BY num_baosem ASC");
 $option2 = '';
 while($row = mysqli_fetch_assoc($get))
{
  $option2 .= '<option value = "'.$row['num_baosem'].'">'.$row['num_baosem'].'</option>';
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style_ajouter_pla.css">
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
                <div class="title">Ajouter un Placard</div>
                <a href="../accueil/accueil_pla.php" id="return"> Retourner à la page d'accueil </a>

                <div class="formulaire">

                    <form method="post" action="ajouter_connect_pla.php">

                        <div class="user-details">
                            <div class="input-box">
                                <span class="details">Réference du placard :</span>
                                <input type="text" name=" ref_pla" placeholder="Veuillez saisir la référence" required>
                            </div>
                            <div class="input-box">
                                <span class="details">Date de Création : </span>
                                <input type="date" name="date" placeholder="Veuillez saisir la date de création" required>
                            </div>
                            <div class="input-box">
                                <span class="details">Objet :</span>
                                <input type="text" name="obj" placeholder="Veuillez saisir l'objet" required>
                            </div>
                            <div class="input-box">
                                <span class="details">Type :</span>
                                <select name="type" required>
                                    <option value="Insertion"> Insertion </option>
                                </select>
                            </div>
                            <div class="input-box">
                                <span class="details"> Référence de l'appel d'offres :</span>
                                <select name="ref_ao" required>
                                    <?php echo $option; ?>
                                </select>
                            </div>
                            <div class="input-box">
                                <span class="details"> Numéro du BAOSEM :</span>
                                <select name="num_bao"  required>
                                    <?php echo $option2; ?>
                                </select>
                            </div>
                        </div>
                            <div class="button">
                                <input type="submit" name="save" value="Sauvegarder">
                            </div>
                    </form>
                    <div class="button">
                                <button onclick="location='../accueil/accueil_pla.php'">Annuler</a>
                            </div>

                </div>


            </div>

        </div>
    </body>
</html>