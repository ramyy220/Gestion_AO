<?php
    
    $db = mysqli_connect('localhost', 'root', '', 'pfe_memoire');

    if(isset($_POST['update'])) {
        $num_bao = mysqli_real_escape_string($db, $_POST['num_bao']);
        $date = mysqli_real_escape_string($db,$_POST['date']);
        $descr = mysqli_real_escape_string($db,$_POST['descr']);

        $query = "UPDATE baosem SET  date_apparition = '$date', desc_baosem = '$descr' WHERE num_baosem = '$num_bao'";

        mysqli_query($db, $query);
        header('location: ../accueil/accueil_bao.php');
    }
                    
?>