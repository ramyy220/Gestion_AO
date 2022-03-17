<?php
    session_start();

    if(!isset($_SESSION['BOG_User']))
    {
        header('Location: ../../../login/login.php');
    }


?>

<?php 
    include_once('../accueil_connection.php');
    $query="select ref_AO, objet_AO, date_creation_AO, date_ouverture_plis, ref_CC from appel_offre";
    $result = mysqli_query($con, $query)
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style_accueil_ao.css?1422585377">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&family=Mukta:wght@300;400;600;700;800&family=Noto+Sans:wght@400;700&display=swap" rel="stylesheet">
        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
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
                    <li> <a href="../../accueil/accueil_bog.php">Dépots d'Offres</a> </li>
                    <li class="active"> <a href="../ao/accueil/accueil_ao.php">Appels d'Offres</a> </li>
                </ul>
        </div>

        <div class="content">
            <div class="container">
                <div class="title">Appels d'Offres</div>
                
                
                <table class="tab" >
                    <col style="width:15%">
                    <col style="width:15%">
                    <col style="width:14.5%">
                    <col style="width:9%">
                    <col style="width:14.5%">
                    <col style="width:10%">

                    <thead>
                        <tr>
                            <th>Ref Appel d'Offres</th> 
                            <th>Objet</th>
                            <th>Date de Création</th>
                            <th>Date d'Ouverture</th>
                            <th>Ref Cahier de Charges</th>
                            <th>Consulter</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                        while($rows=mysqli_fetch_assoc($result)){
                            
                    ?>
                    <tr>
                        <td style="width:15%"><?php echo $rows['ref_AO']; ?></td>
                        <td style="width:15%"><?php echo $rows['objet_AO']; ?></td>
                        <td style="width:15%"><?php echo $rows['date_creation_AO']; ?></td>
                        <td style="width:10%"><?php echo $rows['date_ouverture_plis']; ?></td>
                        <td style="width:15%"><?php echo $rows['ref_CC']; ?></td>
                        <td style="width:10%"> <div class="consult"> <button onclick="location = '../consulter/consulter_ao.php?ref_ao=<?php echo $rows['ref_AO']; ?>'" style='font-size:20px'><i class='fa fa-search'></i></button> </div> </td>
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