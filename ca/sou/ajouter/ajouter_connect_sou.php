<?php

    // a re voir !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
    
    //initialisation
    $code_soum = "";
    $raison = "";
    $nom = "";
    $prenom = "";
    $registre = "";
    $nif = "";
    $nfix = "";
    $nfax= "";
    $nmob = "";
    $adr = "";
    $email = "";

    //connection
    $db = mysqli_connect('localhost', 'root', '', 'pfe_memoire');

    //si le bouton est cliqué
    if(isset($_POST['save'])) {
        $code_soum = $_POST['code_soum'];
        $raison = $_POST['raison'];
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $registre = $_POST['registre'];
        $nif = $_POST['NIF'];
        $nfix = $_POST['NFix'];
        $nfax= $_POST['NFax'];
        $nmob = $_POST['NM'];
        $adr = $_POST['Adr'];
        $email = $_POST['email'];


        $query = "INSERT INTO soumissionnaire (code_soumissionnaire, raison_social, nom_contact, prenom_contact, registre_commerce, num_idf_fiscal, num_fix, num_fax, num_mobile, adresse, email)
        VALUES ('$code_soum', '$raison', '$nom', '$prenom', '$registre', '$nif', '$nfix', '$nfax', '$nmob', '$adr', '$email')";

        mysqli_query($db, $query);
        header('location: ../accueil/accueil_sou.php'); // nous envoie vers la page d'accueil
    }

?>