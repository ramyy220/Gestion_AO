<?php

// se connecter a la bdd
    $db = mysqli_connect('localhost', 'root', '', 'pfe_memoire');

    //si le bouton est cliqué
    if (isset($_POST['update'])) {
        $num_ordre = $_POST['num_ordre'];
        $dateRetr = $_POST['dateR'];
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $obs = $_POST['obs'];
        $code_soum = $_POST['code_soum'];
        $ref_ao = $_POST['ref_ao'];


        $query = "UPDATE registre_retrait_cahier_charges SET  date_retrait = '$dateRetr', nom_retrait = '$nom', prenom_retrait = '$prenom',
        observation_retrait = '$obs', code_soumissionnaire = '$code_soum' , ref_AO = '$ref_ao' WHERE num_ordre_retrait = '$num_ordre'";

        mysqli_query($db, $query);
        header('location: ../accueil/accueil_rcc.php'); // nous envoie vers la page d'accueil

    }

    
?>