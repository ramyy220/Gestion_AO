<?php
    session_start();

    if(!isset($_SESSION['BOG_User']))
    {
        header('Location: ../../login/login.php');
    }

?> 

<?php 
    include_once('../accueil_connection.php');
    $query="select num_ordre_bog, date_depot, heure_depot, nom_depot, prenom_depot, ref_AO from depot_offre";
    $result = mysqli_query($con, $query)
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style_accueil_bog.css?1422585377">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&family=Mukta:wght@300;400;600;700;800&family=Noto+Sans:wght@400;700&display=swap" rel="stylesheet">
        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
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
                    <li class="active"> <a href="accueil_bog.php">Dépots d'Offres</a> </li>
                    <li> <a href="../ao/accueil/accueil_ao.php">Appels d'Offres</a> </li>
                </ul>
        </div>

        <div class="content">
            <div class="container">
                <div class="title">Registre des Dépots d'Offres</div>
                <a href="../ajouter/ajouter_bog.php"> Ajouter un dépot d'offres </a>
                
                
                <table class="tab" >
                    <col style="width:12%">
                    <col style="width:20%">
                    <col style="width:15%">
                    <col style="width:20%">
                    <col style="width:12,5%">
                    <col style="width:12,5%">
                    <col style="width:12,5%">

                    <thead>
                        <tr>
                            <th>Num. Ordre</th> 
                            <th>Ref Appel d'Offres</th>
                            <th>Date Dépot</th>
                            <th>Nom & Prénom</th>
                            <th>Consulter</th>
                            <th>Modifier</th>
                            <th>Supprimer</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                        while($rows=mysqli_fetch_assoc($result)){
                            
                    ?>
                    <tr>
                        <td style="width:10%"><?php echo $rows['num_ordre_bog']; ?></td>
                        <td style="width:20%"><?php echo $rows['ref_AO']; ?></td>
                        <td style="width:10%; padding-left:0.2rem;"><?php echo $rows['date_depot']; ?></td>
                        <td style="width:20%; padding-left:2rem;"><?php echo $rows['nom_depot']; 
                                  echo (" ");
                                  echo $rows['prenom_depot']; ?></td>
                        <td style="width:10%"> <div class="consult"> <button onclick="location = '../consulter/consulter_bog.php?ref_bog=<?php echo $rows['num_ordre_bog']; ?>'" style='font-size:20px'><i class='fa fa-search'></i></button> </div> </td>
                        <td style="width:10%"> <div class="edit"> <button onclick="location = '../modifier/modifier_bog.php?ref_bog=<?php echo $rows['num_ordre_bog']; ?>'" style='font-size:20px'><i class='fas fa-pen'></i> </button> </div> </td>
                        <td style="width:10%"s> <div class="delete"> <button onclick="location = '../supprimer/delete_connect.php?num_ordre=<?php echo $rows['num_ordre_bog']; ?>'" style='font-size:20px'><i class='far fa-trash-alt'></i> </button> </div> </td>
                    </tr>
                    <?php
                        }
                    ?>
                    </tbody>
                </table>
            
            
            </div>

        </div>

    </body>
</html>