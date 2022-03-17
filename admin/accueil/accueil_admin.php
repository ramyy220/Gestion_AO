<?php
    session_start();

    if(!isset($_SESSION['Admin_User']))
    {
        header('Location: ../../login/login.php');
    }

?>

<?php 
    include_once('../accueil_connection.php');
    $query="SELECT nom_utilisateur, prenom_utilisateur, role_utilisateur, matricule FROM utilisateur";
    $result = mysqli_query($con, $query)
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Gestion des Utilisateurs</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style_accueil_admin.css?1422585377">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&family=Mukta:wght@300;400;600;700;800&family=Noto+Sans:wght@400;700&display=swap" rel="stylesheet">
        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
        
        <!-- modal part -->
        
        
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
                    <li class="active"> <a href="accueil_admin.php">Gestion des Utilisateurs</a> </li>
                </ul>
        </div>
        <div class="content">
            <div class="container">
                <div class="title">Utilisateurs</div>
                <a href="../ajouter/ajouter_user.php"> Ajouter un utilisateur </a>
                
                <table class="tab">
                    <thead>
                        <tr>
                            <th>Nom</th> 
                            <th>Prénom</th>
                            <th>Fonction</th>
                            <th>Modifier</th>
                            <th>Supprimer</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                        while($rows=mysqli_fetch_assoc($result)){       
                    ?>
                    <tr>
                        <td><?php echo $rows['nom_utilisateur']; ?></td>
                        <td><?php echo $rows['prenom_utilisateur']; ?></td>
                        <td><?php echo $rows['role_utilisateur']; ?></td>
                        <td> <div class="edit"> <button onclick="location = '../modifier/modifier_user.php?mat=<?php echo $rows['matricule']; ?>'" style='font-size:20px'> <i class='fas fa-pen'> </i></button> </div> </td>
                        <td> <div class="delete"> <button onclick="location = '../supprimer/delete_connect.php?mat=<?php echo $rows['matricule']; ?>'" name="delete_btn" data-toggle="modal" style='font-size:20px'><i class='far fa-trash-alt'></i> </button> </div> </td>
                    </tr>
                    <?php
                        }   
                    ?>
                    </tbody>
                </table>
            
            
            </div>

        </div>
        
        <div class="popup" id="popup1">
		<div class="popup-inner">
			<h3>Êtes-vous sûr?</h3>
			<p>
				Voulez-vous vraiment supprimer cet utilisateur? Ce processus n'est pas réversible.
			</p>
			<a href="#" class="cancel_btn">Close popup</a>
			<a href="#" class="delete_btn">Delete</a>
		</div>
	</div>
    </body>
</html>