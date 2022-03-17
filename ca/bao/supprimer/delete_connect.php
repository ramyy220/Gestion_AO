<?php 
    include("../accueil_connection.php");
    error_reporting(0);

    $num_b = $_GET['num_bao'];
    $query = "DELETE from baosem where num_baosem = '$num_b'";

    $result = mysqli_query($con,$query);

    if($result) {
        header("Location: ../accueil/accueil_bao.php");
        die();
    }
?>