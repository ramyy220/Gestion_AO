<?php
    

    $db = mysqli_connect('localhost', 'root', '', 'pfe_memoire');

    if(isset($_POST['update'])) {
        $mat = mysqli_real_escape_string($db, $_POST['matricule']);
        $nom = mysqli_real_escape_string($db,$_POST['lname']);
        $prenom = mysqli_real_escape_string($db,$_POST['fname']);
        $pass = mysqli_real_escape_string($db,$_POST['pass']);
        $role = mysqli_real_escape_string($db,$_POST['role']);


        $query = "UPDATE utilisateur SET nom_utilisateur = '$nom', prenom_utilisateur = '$prenom',
        mot_de_passe = '$pass', role_utilisateur = '$role' WHERE matricule = '$mat'";

        mysqli_query($db, $query);
        header('location: ../accueil/accueil_admin.php');
    }
                    
?>