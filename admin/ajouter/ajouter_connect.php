<?php
    
    $matricule = filter_input(INPUT_POST, 'matricule');
    $nom = filter_input(INPUT_POST, 'lname' );
    $prenom = filter_input(INPUT_POST, 'fname');
    $password = filter_input(INPUT_POST, 'pass');
    $role = filter_input(INPUT_POST, 'role');



    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "pfe_memoire";
                    
    //Create connection
    $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
                    
    if (mysqli_connect_error()){
        die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
    }
    else {
        $sql = "INSERT INTO utilisateur (matricule, nom_utilisateur, prenom_utilisateur, mot_de_passe, role_utilisateur)
        values ('$matricule', '$nom', '$prenom', '$password', '$role')";

        if ($conn->query($sql)){
            header("location: ../accueil/accueil_admin.php");
        }
        $conn->close();
    }
                    
?>