<?php
    session_start();

    if(!isset($_SESSION['Admin_User']))
    {
        header('Location: ../../login/login.php');
    }

?>

<?php 
    include_once('../accueil_connection.php');
    error_reporting(0);

    $mat = $_GET['mat'];
    $query = "SELECT * from utilisateur where matricule = '$mat'";

    $result = mysqli_query($con,$query);
?>

<?php include('modifier_connect_user.php'); ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style_modifier_user.css">
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
                    <li class="active"> <a href="../accueil/accueil_admin.php">Gestion des Utilisateurs</a> </li>
                </ul>
        </div>
        <div class="content">

            <div class="container">
                <div class="title"> Modifier </div>
                <a href="../accueil/accueil_admin.php" id="return"> Retourner à la page d'accueil </a>

                <div class="formulaire">

                    <form method="POST" action="modifier_connect_user.php">
                        <?php 
                            while($rows=mysqli_fetch_assoc($result)){
                                
                        ?>

                        <div class="user-details">
                            <div class="input-box">
                                <span class="details"> Matricule </span>
                                <input type="number" name="matricule" value="<?php echo $rows['matricule']; ?>" readonly required>
                            </div>
                            <div class="input-box">
                                <span class="details">Nom</span>
                                <input type="text" name="lname" value="<?php echo $rows['nom_utilisateur']; ?>" required>
                            </div>
                            <div class="input-box">
                                <span class="details">Prénom</span>
                                <input type="text" name="fname" value="<?php echo $rows['prenom_utilisateur']; ?>" required>
                            </div>
                            <div class="input-box">
                                <span class="details">Mot de Passe</span>
                                <input type="password" name="pass" value="<?php echo $rows['mot_de_passe']; ?>" required>
                            </div>
                        </div>

                        <div class="role-details">
                            <span class="details"> Rôle </span>
                            <select name="role" required>
                                <option value="Administrateur">Administrateur</option>
                                <option value="Centre d'Achats">Centre d'Achats</option>
                                <option value="BOG">BOG</option>
                                <option value="COP">COP</option>
                                <option value="CEOT">CEOT</option>
                            </select>
                        </div>
                        <?php 
                            }
                                
                        ?>

                        <div class="button">
                            <input type="submit" name="update" value="Sauvegarder">
                        </div>
                    </form>

                    <div class="button">
                        <button onclick="location='../accueil/accueil_admin.php'">Annuler</a>
                    </div>

                </div>


            </div>

        </div>
    </body>
</html>