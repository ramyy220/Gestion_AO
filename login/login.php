<?php 
  include('auth.php');
?>
<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Authentification</title>
    <link rel="stylesheet" href="style_login.css?1422585377">
  </head>
  <body>
    <div class="center">

    
     <img src="logo2.jpg" alt="" >
      <form method="POST" action="auth.php" name="f1">
        <div class="txt_field">
          <input type="text" name="username" required>
          <span></span>
          <label>Matricule : </label>
        </div>
        <div class="txt_field">
          <input type="password" name="password" required>
          <span></span>
          <label>Mot de passe :</label>
        </div>
        <p> 
          <?php echo $message; ?>
        </p>
        <div class="pass"> <input type="submit" name="login" value="Entrer"></div>
        
       
      </form>
    </div>

  </body>
</html>