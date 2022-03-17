<?php
    session_start();

    if(!isset($_SESSION['BOG_User']))
    {
        header('Location: ../../login/login.php');
    }

?> 

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

<!DOCTYPE html>
<html>
    <head>
        <?php include ("ajouter_connect_bog.php"); ?>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style_ajouter_bog.css">
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
                <div class="title">Ajouter un Dépot d'Offres</div>
                <a href="../accueil/accueil_bog.php" id="return"> Retourner à la page d'accueil </a>

                <div class="formulaire">

                    <form method="POST" action="ajouter_connect_bog.php">

                        <div class="user-details">
                            <div class="input-box">
                                <span class="details">Numéro d'Ordre :</span>
                                <input type="text" name="num_ord" id="num_ord" placeholder="Veuillez saisir la numéro" required>
                            </div>
                            <div class="input-box">
                                <span class="details">Date : </span>
                                <input type="date" name="date_dep" id="date_dep" placeholder="Veuillez saisir la date" required>
                            </div>
                            <div class="input-box">
                                <span class="details">Heure :</span>
                                <input type="time" name="heure_dep" id="heure_dep" placeholder="Veuillez saisir l'heure" required>
                            </div>
                            <div class="input-box">
                                <span class="details">Nom :</span>
                                <input type="text" name="nom" id="nom" placeholder="Veuillez saisir le nom" required>
                            </div>
                            <div class="input-box">
                                <span class="details"> Prénom :</span>
                                <input type="text" name="prenom" id="prenom" placeholder="Veuillez saisir le prénom" required>
                            </div>
                            <div class="input-box">
                                <span class="details"> Observation :</span>
                                <input type="text" name="obs" id="obs" placeholder="Veuillez saisir l'observation" required>
                            </div>
                            <div class="input-box">
                                <span class="details"> Réference de l'appel d'offres : </span>
                                <select name="ref_ao" id="ref_ao" required>
                                    <?php echo $option; ?>
                                </select>  
                            </div>

                        </div>
                        <div class="button">
                            <input type="submit" name="save" value="Sauvegarder">
                        </div>
                    </form>
                    <div class="button">
                        <button onclick="location='../accueil/accueil_bog.php'">Annuler</a>
                    </div>

                </div>


            </div>

        </div>
    </body>
</html>