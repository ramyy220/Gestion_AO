<?php
    

    //init
    $refpv = "";
    $date = "";
    $heure ="";
    $obj = "";
    $obs = "";
    $descr = "";
    $type = "";
    $ref_ao = "";

    //connection
    $db = mysqli_connect('localhost', 'root', '', 'pfe_memoire');
    
    if(isset($_POST['save'])) {
        $refpv = $_POST['ref_pv'];
        $date = $_POST['date'];
        $heure = $_POST['heure'];
        $obj = $_POST['obj'];
        $obs = $_POST['obs'];
        $descr = $_POST['descr'];
        $type = $_POST['type'];
        $ref_ao = $_POST['ref_ao'];


        $query = "INSERT INTO pv (ref_PV, date_PV, heure_PV, objet_PV, desc_PV, observation_PV, type_PV, ref_AO)
        VALUES ('$refpv', '$date','$heure','$obj','$obs', '$descr', '$type', '$ref_ao')";

        mysqli_query($db, $query);
        header('location: ../accueil/accueil_pvf.php'); // nous envoie vers la page d'accueil
    }

?>