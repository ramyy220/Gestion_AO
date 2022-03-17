<?php 
    include("../accueil_connection.php");
    error_reporting(0);

    $ref_pla = $_GET['ref_pla'];
    $query = "DELETE from placard where ref_placard = '$ref_pla'";

    $result = mysqli_query($con,$query);

    if($result) {
        header("Location: ../accueil/accueil_pla.php");
        die();
    }
?>