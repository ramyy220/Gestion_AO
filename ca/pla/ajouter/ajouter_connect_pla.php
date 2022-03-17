<?php

// !!!!!!!!!!!!!!!!! A REVOIR !!!!!!!!!!!!!!!!!!!!!\\
    
    $ref_pla = "";
    $date = "";
    $objet = "";
    $type = "";
    $ref_ao = "";
    $num_bao = 0;


    //Create connection
    $db = mysqli_connect('localhost', 'root', '', 'pfe_memoire');

    //si le bouton est cliqué
    if(isset($_POST['save'])){
        $ref_pla = $_POST['ref_pla'];
        $date = $_POST['date'];
        $objet =$_POST['obj'];
        $type = $_POST['type'];
        $ref_ao = $_POST['ref_ao'];
        $num_bao = $_POST['num_bao'];

        $query = "INSERT INTO placard (ref_placard, date_creation_placard, objet_placard, type_placard, ref_AO, num_baosem)
        VALUES ('$ref_pla', '$date', '$objet', '$type', '$ref_ao', '$num_bao')";

        mysqli_query($db, $query);
        header('location: ../accueil/accueil_pla.php');
    
    }
                    
?>