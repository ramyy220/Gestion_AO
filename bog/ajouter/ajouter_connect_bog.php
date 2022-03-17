<?php
    
    //initialisation des variables
    $num_ordre = "";
    $date = "";
    $heure = "";
    $nom = "";
    $prenom = "";
    $obs = "";
    $ref_ao = "";

    // se connecter a la bdd
    $db = mysqli_connect('localhost', 'root', '', 'pfe_memoire');

    //si le bouton est cliqué
    if (isset($_POST['save'])) {
        $num_ordre = $_POST['num_ord'];
        $date = $_POST['date_dep'];
        $heure = $_POST['heure_dep'];
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $obs = $_POST['obs'];
        $ref_ao = $_POST['ref_ao'];


        $query = "INSERT INTO depot_offre (num_ordre_bog, date_depot, heure_depot, nom_depot, prenom_depot, observation_depot, ref_AO) 
        VALUES ('$num_ordre', '$date', '$heure', '$nom', '$prenom', '$obs', '$ref_ao')";

        mysqli_query($db, $query);
        header('location: ../accueil/accueil_bog.php'); // nous envoie vers la page d'accueil

    }
    
?>