<?php
    
    //connect database
    $db = mysqli_connect('localhost', 'root', '', 'pfe_memoire');

    //if button is clicked
    if (isset($_POST['update'])) {
        $refcc = mysqli_real_escape_string($db, $_POST['ref_cc']);
        $date = mysqli_real_escape_string($db, $_POST['dateC']);
        $obj = mysqli_real_escape_string($db, $_POST['obj']);
        $obs = mysqli_real_escape_string($db, $_POST['obs']);
        $duree = mysqli_real_escape_string($db, $_POST['dureeG']);
        $montant = mysqli_real_escape_string($db, $_POST['montantG']);

        $query = "UPDATE cahier_des_charges SET date_creation_CC = '$date', objet_CC = '$obj', 
        observation_CC = '$obs', duree_garantie = '$duree', montant_CC = '$montant' WHERE ref_CC = '$refcc'";

        mysqli_query($db, $query);
        header('location: ../accueil/accueil_cc.php');
    }

                    
    
?>