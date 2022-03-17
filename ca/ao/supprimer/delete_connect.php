<?php 
    include("../accueil_connection.php");
    error_reporting(0);

    $ref_ao = $_GET['ref_ao'];
    $query = "DELETE from appel_offre where ref_AO = '$ref_ao'";

    $result = mysqli_query($con,$query);

    if($result) {
        header("Location: ../accueil/accueil_ao.php");
        die();
    }
?>