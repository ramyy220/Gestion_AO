<?php 
    include("../accueil_connection.php");
    error_reporting(0);

    $ref_ao = $_GET['ref_ao'];
    $query = "SELECT from appel_offre where ref_AO = '$ref_AO' ";
    

    $result = mysqli_query($con,$query);

    if($result) {
        header("Location: consulter_ao.php");
        die();
    }
?>
