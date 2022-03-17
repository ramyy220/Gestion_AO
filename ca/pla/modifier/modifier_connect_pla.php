<?php
    
    //Create connection
    $db = mysqli_connect('localhost', 'root', '', 'pfe_memoire');

    //si le bouton est cliqué
    if(isset($_POST['update'])){
        $ref_pla = $_POST['ref_pla'];
        $date = $_POST['date'];
        $objet = $_POST['obj'];
        $type = $_POST['type'];
        $ref_ao = $_POST['ref_ao'];
        $num_bao = $_POST['num_bao'];

        $query = "UPDATE placard SET date_creation_placard = '$date', objet_placard = '$objet', 
        type_placard = '$type', ref_AO = '$ref_ao', num_baosem = '$num_bao'
        WHERE ref_placard = '$ref_pla' ";

        mysqli_query($db, $query);
        header('location: ../accueil/accueil_pla.php');
    
    }
                    
?>