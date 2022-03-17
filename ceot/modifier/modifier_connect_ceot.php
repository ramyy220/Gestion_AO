<?php
    
    //connection
    $db = mysqli_connect('localhost', 'root', '', 'pfe_memoire');
    
    if(isset($_POST['update'])) {
        $refpv = $_POST['ref_pv'];
        $date = $_POST['date'];
        $obj = $_POST['obj'];
        $obs = $_POST['obs'];
        $descr = $_POST['descr'];
        $ref_ao = $_POST['ref_ao'];



        $query = "UPDATE pv SET date_PV = '$date', objet_PV = '$obj', observation_PV = '$obs', 
        desc_PV = '$descr', ref_AO = '$ref_ao' WHERE ref_PV = '$refpv' ";

        mysqli_query($db, $query);
        header('location: ../accueil/accueil_ceot.php'); // nous envoie vers la page d'accueil
    }

?>