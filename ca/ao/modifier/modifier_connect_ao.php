<?php
    // se connecter a la bdd
    $db = mysqli_connect('localhost', 'root', '', 'pfe_memoire');

    //si le bouton est cliqué
    if (isset($_POST['update'])) {
        $ref_ao = $_POST['ref_ao'];
        $dateC = $_POST['dateC'];
        //$objet = $_POST['obj'];$descr = $_POST['descr'];$obs = $_POST['obs'];$dateO = $_POST['dateO'];$mode = $_POST['mode'];$nature = $_POST['nature'];$etat = $_POST['etat'];$etape = $_POST['etape'];$dureeV = $_POST['dureeV'];$dureeE = $_POST['dureeE'];$montant = $_POST['montant'];


        $query = "UPDATE appel_offre SET date_creation_AO = '$dateC'  WHERE ref_AO = $ref_ao";

        mysqli_query($db, $query);
        header('location: ../accueil/accueil_ao.php'); // nous envoie vers la page d'accueil

    }

    //, , objet_AO = '$objet' , desc_AO = '$descr', observation_AO = '$obs', date_ouverture_plis = '$dateO', 
    //mode = '$mode', nature = '$nature', etat = '$etat', etape = '$etape', duree_validite = '$dureeV', duree_engagement = '$dureeE', montant_garantie = '$montant'
    
?>