<?php
    
    //connection
    $db = mysqli_connect('localhost', 'root', '', 'pfe_memoire');

    //si le bouton est cliqué
    if(isset($_POST['update'])) {
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


        $query = "UPDATE soumissionnaire SET raison_social = '$raison', nom_contact = '$nom', prenom_contact = '$prenom', registre_commerce = '$registre', num_idf_fiscal = '$nif', 
        num_fix = '$nfix', num_fax = '$nfax', num_mobile = '$nmob', adresse = '$adr', email = '$email' WHERE code_soumissionnaire = '$code_soum'";

        mysqli_query($db, $query);
        header('location: ../accueil/accueil_sou.php'); // nous envoie vers la page d'accueil
    }

?>