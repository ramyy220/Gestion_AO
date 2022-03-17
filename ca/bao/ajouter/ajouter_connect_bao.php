<?php
    
    //initialisation des variables
    $num_bao = "";
    $date = "";
    $descr = "";

    // se connecter a la bdd
    $db = mysqli_connect('localhost', 'root', '', 'pfe_memoire');

    //si le bouton est cliqué
    if (isset($_POST['save'])) {
        $num_bao = $_POST['num_bao'];
        $date = $_POST['date'];
        $descr = $_POST['descr'];


        $query = "INSERT INTO baosem (num_baosem, date_apparition, desc_baosem) 
        VALUES ('$num_bao', '$date', '$descr')";

        mysqli_query($db, $query);
        header('location: ../accueil/accueil_bao.php'); // nous envoie vers la page d'accueil

    }
    
?>