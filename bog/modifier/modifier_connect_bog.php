<?php
    
    // se connecter a la bdd
    $db = mysqli_connect('localhost', 'root', '', 'pfe_memoire');

    //si le bouton est cliqué
    if (isset($_POST['update'])) {
        $num_ordre = $_POST['num_ord'];
        $date = $_POST['date_dep'];
        $heure = $_POST['heure_dep'];
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $obs = $_POST['obs'];
        $ref_ao = $_POST['ref_ao'];


        $query = "UPDATE depot_offre SET date_depot = '$date', heure_depot = '$heure', nom_depot = '$nom', 
        prenom_depot = '$prenom', observation_depot = '$obs', ref_AO = '$ref_ao' WHERE num_ordre_bog = '$num_ordre'";

        mysqli_query($db, $query);
        header('location: ../accueil/accueil_bog.php'); // nous envoie vers la page d'accueil

    }
    
?>