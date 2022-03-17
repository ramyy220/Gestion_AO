<?php 
    include("../accueil_connection.php");
    error_reporting(0);

    $matricule = $_GET['mat'];
    $query = "DELETE from utilisateur where matricule = '$matricule'";

    $result = mysqli_query($con,$query);

    if($result) {
        header("Location: ../accueil/accueil_admin.php");
        die();
    }
?>