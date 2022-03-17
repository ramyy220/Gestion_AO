<?php 
    include("../accueil_connection.php");
    error_reporting(0);

    $ref_pv = $_GET['ref_pv'];
    $query = "DELETE from pv where ref_PV = '$ref_pv'";

    $result = mysqli_query($con,$query);

    if($result) {
        header("location: ../accueil/accueil_pvt.php");
        die();
    }
?>