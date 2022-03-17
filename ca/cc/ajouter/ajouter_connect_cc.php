<?php

    //initialize variables
    $refcc = "";
    $date = "";
    $obj = "";
    $obs = "";
    $duree = 0;
    $montant = 0;

    //connect database
    $db = mysqli_connect('localhost', 'root', '', 'pfe_memoire');

    //if button is clicked
    if (isset($_POST['save'])) {
        $refcc = $_POST['ref_cc'];
        $date = $_POST['dateC'];
        $obj = $_POST['obj'];
        $obs = $_POST['obs'];
        $duree = $_POST['dureeG'];
        $montant = $_POST['montantG'];

        $query = "INSERT INTO cahier_des_charges (ref_CC, date_creation_CC, objet_CC, observation_CC, duree_garantie, montant_CC)
        VALUES ('$refcc', '$date', '$obj', '$obs', '$duree', '$montant')";

        mysqli_query($db, $query);
        header('location: ../accueil/accueil_cc.php');
    }

                    
    
?>