<?php
    session_start();

    if(!isset($_SESSION['COP_User']))
    {
        header('Location: ../../../login/login.php');
    }

?>

<?php
 $con = mysqli_connect("localhost","root","");
 $db = mysqli_select_db($con, "pfe_memoire");
 $get=mysqli_query($con, "SELECT ref_AO FROM pv ORDER BY ref_AO ASC");
 $option = '';
 while($row = mysqli_fetch_assoc($get))
{
  $option .= '<option value = "'.$row['ref_AO'].'">'.$row['ref_AO'].'</option>';
}
?>

<?php 
    include_once('../accueil_connection.php');
    error_reporting(0);

    $ref_pv = $_GET['ref_pv'];
    $query = "SELECT * from pv where ref_PV = '$ref_pv'";

    $result = mysqli_query($con,$query);
?>

<?php include ('modifier_connect_pvt.php'); ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style_modifier_pvt.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&family=Mukta:wght@300;400;600;700;800&family=Noto+Sans:wght@400;700&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="headerr">
                <div class="logout">
                   <a href="../../deconnexion.php" id="deco"> Déconnexion </a>
                </div>
                <div class="logo">
                    <img src="Logo.JPG">
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
                    <li class="active"> <a href="../accueil/accueil_pvt.php">PV Techniques</a> </li>
                    <li> <a href="../../pv_fin/accueil/accueil_pvf.php">PV Financiers</a> </li>
                    <li> <a href="../../ao/accueil/accueil_ao.php">Appels d'Offres</a> </li>
                </ul>
        </div>
        <div class="content">

            <div class="container">
                <div class="title">Modifier un PV Technique</div>
                <a href="../accueil/accueil_pvt.php" id="return"> Retourner à la page d'accueil </a>

                <div class="formulaire">

                    <form method="POST" action="modifier_connect_pvt.php">
                    <?php 
                            while($rows=mysqli_fetch_assoc($result)){
                                
                        ?>

                        <div class="user-details">
                            <div class="input-box">
                                <span class="details">Réference du PV :</span>
                                <input type="text" name=" ref_pv" value="<?php echo $rows['ref_PV']; ?>" readonly required>
                            </div>
                            <div class="input-box">
                                <span class="details">Date : </span>
                                <input type="date" name="date" value="<?php echo $rows['date_PV']; ?>" required>
                            </div>
                            <div class="input-box">
                                <span class="details">Heure :</span>
                                <input type="text" name="heure" value="<?php echo $rows['heure_PV']; ?>" readonly required>
                            </div>
                            <div class="input-box">
                                <span class="details">Objet :</span>
                                <input type="text" name="obj" value="<?php echo $rows['objet_PV']; ?>" required>
                            </div>
                            <div class="input-box">
                                <span class="details"> Observation :</span>
                                <input type="text" name="obs" value="<?php echo $rows['observation_PV']; ?>" required>
                            </div>
                            <div class="input-box">
                                <span class="details"> Description :</span>
                                <input type="text" name="descr" value="<?php echo $rows['desc_PV']; ?>" required>
                            </div>
                            <div class="input-box">
                                <span class="details"> Réference de l'appel d'offres : </span>
                                <select name="ref_ao"  required>
                                    <?php echo $option; ?>
                                </select>  
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
                                <button onclick="location='../accueil/accueil_pvt.php'">Annuler</a>
                            </div>

                </div>


            </div>

        </div>
    </body>
</html>