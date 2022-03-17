<?php 
    include("../accueil_connection.php");
    error_reporting(0);

    $num_ord = $_GET['num_ord'];
    $query = "DELETE from registre_retrait_cahier_charges where num_ordre_retrait = '$num_ord'";

    $result = mysqli_query($con,$query);

    if($result) {
        header("Location: ../accueil/accueil_rcc.php");
        die();
    }
?>