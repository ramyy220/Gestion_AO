<?php

    //initialiser les variables
    $ref_ao = "";
    $dateC = "";
    $objet = "";
    $descr = "";
    $obs = "";
    $dateO = "";
    $heureO = "";
    $mode = "";
    $nature = "";
    $etat = "";
    $etape = "";
    $dureeV = "";
    $dureeE = "";
    $montant = "";
    $ref_cc = "";

    // se connecter a la bdd
    $db = mysqli_connect('localhost', 'root', '', 'pfe_memoire');
    mysqli_set_charset($db, "utf8");

    //si le bouton est cliqué
    if (isset($_POST['save'])) {
        $ref_ao = $_POST['ref_ao'];
        $dateC = $_POST['dateC'];
        $objet = $_POST['obj'];
        $descr = $_POST['descr'];
        $obs = $_POST['obs'];
        $dateO = $_POST['dateO'];
        $heureO = $_POST['heureO'];
        $mode = $_POST['mod'];
        $nature = $_POST['natur'];
        $etat = $_POST['eta'];
        $etape = $_POST['etap'];
        $dureeV = $_POST['dureeV'];
        $dureeE = $_POST['dureeE'];
        $montant = $_POST['montant'];
        $ref_cc = $_POST['ref_cc'];


        $query = "INSERT INTO appel_offre (ref_AO, date_creation_AO, objet_AO, desc_AO, observation_AO, date_ouverture_plis, 
        heure_ouverture_plis, mode, nature, etat, etape, duree_validite, duree_engagement, montant_garantie, ref_CC) 
        VALUES ('$ref_ao', '$dateC', '$objet', '$descr', '$obs', '$dateO', '$heureO', '$mode', '$nature', '$etat', '$etape', '$dureeV', '$dureeE', '$montant', '$ref_cc' )";

        mysqli_query($db, $query);
        header('location: ../accueil/accueil_ao.php'); // nous envoie vers la page d'accueil

    }
    
?>
