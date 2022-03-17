<?php 
    include("../accueil_connection_cc.php");
    error_reporting(0);

    $ref_cc = $_GET['ref_cc'];
    $query = "DELETE from cahier_des_charges where ref_CC = '$ref_cc'";

    $result = mysqli_query($con,$query);

    if($result) {
        header("Location: ../accueil/accueil_cc.php");
        die();
    }
?>