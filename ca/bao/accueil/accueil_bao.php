<?php
    session_start();

    if(!isset($_SESSION['CA_User']))
    {
        header('Location: ../../../login/login.php');
    }


?>

<?php 
    include_once('../accueil_connection.php');
    $query="select num_baosem,  date_apparition, desc_baosem from baosem";
    $result = mysqli_query($con, $query);
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style_accueil_bao.css?1422585377">
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
                    <li class="active"> <a href="../../bao/accueil/accueil_bao.php">BAOSEM</a> </li>
                </ul>
        </div>
        <div class="content">
            <div class="container">
                <div class="title">BAOSEM</div>
                <a href="../ajouter/ajouter_bao.php"> Ajouter un baosem </a>
                
                
                <table class="tab" >
                    <col style="width:13%">
                    <col style="width:15%">
                    <col style="width:30%">
                    <col style="width:12.5%">
                    <col style="width:12.5%">
                    <col style="width:12.5%">

                    <thead>
                        <tr>
                            <th>Numéro baosem</th> 
                            <th>date d'apparition</th>
                            <th>description</th>
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
                        <td style="width:13%"><?php echo $rows['num_baosem']; ?></td>
                        <td style="width:15%"><?php echo $rows['date_apparition']; ?></td>
                        <td style="width:30%"><?php echo $rows['desc_baosem']; ?></td>
                        <td style="width:14%"> <div class="consult"> <button name="consult" onclick="location = '../consulter/consulter_bao.php?cons=<?php echo $rows['num_baosem']; ?>'" style='font-size:20px'><i class='fa fa-search'></i></button> </div> </td>
                        <td style="width:12.5%"> <div class="edit"> <button name="editt" onclick="location = '../modifier/modifier_bao?cons=<?php echo $rows['num_baosem']; ?>'" style='font-size:20px'><i class='fas fa-pen'></i> </button> </div> </td>
                        <td style="width:12.5%"> <div class="delete"> <button onclick="location = '../supprimer/delete_connect.php?num_bao=<?php echo $rows['num_baosem']; ?>'" style='font-size:20px'><i class='far fa-trash-alt'></i> </button> </div> </td>
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