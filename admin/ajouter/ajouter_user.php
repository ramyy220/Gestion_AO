<?php
    session_start();

    if(!isset($_SESSION['Admin_User']))
    {
        header('Location: ../../login/login.php');
    }

?>


<!DOCTYPE html>
<html>
    <head>
        <?php include ("ajouter_connect.php"); ?>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style_ajouter_user.css">
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
                <div class="title">Ajouter un Utilisateur</div>
                <a href="../accueil/accueil_admin.php" id="return"> Retourner à la page d'accueil </a>

                <div class="formulaire">

                    <form method="POST" action="ajouter_connect.php">

                        <div class="user-details">
                            <div class="input-box">
                                <span class="details">Matricule</span>
                                <input type="number" name="matricule" id="matricule" placeholder="Veuillez saisir le matricule" required>
                            </div>
                            <div class="input-box">
                                <span class="details">Nom</span>
                                <input type="text" name="lname" id="lname" placeholder="Veuillez saisir le nom" required>
                            </div>
                            <div class="input-box">
                                <span class="details">Prénom</span>
                                <input type="text" name="fname" id="fname" placeholder="Veuillez saisir le prénom" required>
                            </div>
                            <div class="input-box">
                                <span class="details">Mot de Passe</span>
                                <input type="password" name="pass" id="password" placeholder="Veuillez saisir le mot de passe" required>
                            </div>
                        </div>

                        <div class="role-details">
                            <span class="details"> Rôle </span>
                            <select name="role" id="role" required>
                                <option value="Administrateur">Administrateur</option>
                                <option value="Centre d''Achats">Centre d'Achats</option>
                                <option value="BOG">BOG</option>
                                <option value="COP">COP</option>
                                <option value="CEOT">CEOT</option>
                            </select>
                        </div>

                        <div class="button">
                            <input type="submit" value="Sauvegarder">
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