<?php
    session_start();

    if(!isset($_SESSION['CA_User']))
    {
        header('Location: ../../../login/login.php');
    }


?>

<?php 
    include_once('../accueil_connection.php');
    $query="select ref_CC, objet_CC, date_creation_CC, duree_garantie from cahier_des_charges";
    $result = mysqli_query($con, $query)
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style_accueil_cc.css?1422585377">
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
                    <li> <a href="../../ao/accueil/accueil_ao.php">Appel d'Offres</a> </li>
                    <li class="active"> <a href="../../cc/accueil/accueil_cc.php">Cahiers de Charges</a> </li>
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
                <div class="title">Cahiers de Charges</div>
                <a href="../ajouter/ajouter_cc.php"> Ajouter un cahier de charges </a>
                
                
                <table class="tab" >
                    <col style="width:15%">
                    <col style="width:20%">
                    <col style="width:12%">
                    <col style="width:8%">
                    <col style="width:10%">
                    <col style="width:10%">
                    <col style="width:10%">

                    <thead>
                        <tr>
                            <th>Ref Cahier de Charge</th> 
                            <th>Objet</th>
                            <th>Date Création</th>
                            <th>Durée de garantie</th>
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
                        <td style="width: 15%;"><?php echo $rows['ref_CC']; ?></td>
                        <td style="width: 20%;"><?php echo $rows['objet_CC']; ?></td>
                        <td style="width: 12%;"><?php echo $rows['date_creation_CC']; ?></td>
                        <td style="width: 8%;"><?php echo $rows['duree_garantie']; ?></td>
                        <td style="width: 10%;"> <div class="consult"> <button onclick="location = '../consulter/consulter_cc.php?ref_cc=<?php echo $rows['ref_CC']; ?>'" style='font-size:20px'><i class='fa fa-search'></i></button> </div> </td>
                        <td style="width: 10%;"> <div class="edit"> <button onclick="location = '../modifier/modifier_cc.php?ref_cc=<?php echo $rows['ref_CC']; ?>'" style='font-size:20px'><i class='fas fa-pen'></i> </button> </div> </td>
                        <td style="width: 10%;"> <div class="delete"> <button onclick="location = '../supprimer/delete_connect.php?ref_cc=<?php echo $rows['ref_CC']; ?>'" style='font-size:20px'><i class='far fa-trash-alt'></i> </button> </div> </td>
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