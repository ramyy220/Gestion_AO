<?php
    //initialiser les variables
    $num_ordre = "";
    $dateRetr = "";
    $nom = "";
    $prenom = "";
    $obs = "";
    $code_soum = ""; 
    $ref_ao = "";

    // se connecter a la bdd
    $db = mysqli_connect('localhost', 'root', '', 'pfe_memoire');

    //si le bouton est cliqué
    if (isset($_POST['save'])) {
        $num_ordre = $_POST['num_ordre'];
        $dateRetr = $_POST['dateR'];
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $obs = $_POST['obs'];
        $code_soum = $_POST['code_soum'];
        $ref_ao = $_POST['ref_ao'];


        $query = "INSERT INTO registre_retrait_cahier_charges (num_ordre_retrait, date_retrait, nom_retrait, prenom_retrait, 
        observation_retrait, code_soumissionnaire, ref_AO)
        VALUES ('$num_ordre', '$dateRetr', '$nom', '$prenom', '$obs', '$code_soum', '$ref_ao')";

        mysqli_query($db, $query);
        header('location: ../accueil/accueil_rcc.php'); // nous envoie vers la page d'accueil

    }
    
?>