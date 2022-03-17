<?php 
    session_start();
    require_once "accueil_connection.php";

    $message = "";
    $role = "";
    if(isset($_POST['login'])) {

        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = "SELECT * FROM utilisateur WHERE matricule = '$username' AND mot_de_passe = '$password'";
        $result = mysqli_query($con, $query);

        if(mysqli_num_rows($result) > 0)
        {
            while($row = mysqli_fetch_assoc($result))
            {
                if($row["role_utilisateur"] == "Administrateur") 
                {
                    $_SESSION['Admin_User'] = $row["matricule"];
                    header('Location: ../admin/accueil/accueil_admin.php');
                }
                else if ($row["role_utilisateur"] == "Centre d'Achats") 
                    {
                        $_SESSION['CA_User'] = $row["matricule"];
                        header('Location: ../ca/ao/accueil/accueil_ao.php');
                    }
                    else if ($row["role_utilisateur"] == "BOG") 
                        {
                            $_SESSION['BOG_User'] = $row["matricule"];
                            header('Location: ../bog/accueil/accueil_bog.php');
                        }
                        else if ($row["role_utilisateur"] == "COP") 
                            {
                                $_SESSION['COP_User'] = $row["matricule"];
                                header('Location: ../cop/pv_tech/accueil/accueil_pvt.php');
                            }
                            else 
                            {
                                $_SESSION['CEOT_User'] = $row["matricule"];
                                header('Location: ../ceot/accueil/accueil_ceot.php');
                            }
            }
        }
        else
        {
            header("Location: login.php");
        }


    }



?>