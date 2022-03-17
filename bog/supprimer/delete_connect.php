<?php 
    include("../accueil_connection.php");
    error_reporting(0);

    $num_ordre = $_GET['num_ordre'];
    $query = "DELETE from depot_offre where num_ordre_bog = '$num_ordre'";

    $result = mysqli_query($con,$query);

    if($result) {
        header("Location: ../accueil/accueil_bog.php");
        die();
    }
?>