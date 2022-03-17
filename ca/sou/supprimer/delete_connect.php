<?php 
    include("../accueil_connection.php");
    error_reporting(0);

    $code_sou = $_GET['code_sou'];
    $query = "DELETE from soumissionnaire where code_soumissionnaire = '$code_sou'";

    $result = mysqli_query($con,$query);

    if($result) {
        header("Location: ../accueil/accueil_sou.php");
        die();
    }
?>