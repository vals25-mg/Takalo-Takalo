<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/c/CodingLabYT-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--<title> Login and Registration Form in HTML & CSS | CodingLab </title>-->
    <link rel="stylesheet" href="<?php echo base_url('./assets/fontawesome-free-5.15.3-web/css/all.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('./assets/css/style.css'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <input type="checkbox" id="flip">
    <div class="cover">
      <div class="front">
        <img src="<?php echo base_url("Images/frontImg.jpg"); ?>" alt="error">
        <div class="text">
          <span class="text-1">Trouvez des millions d'objets à echanger<br></span>
          <span class="text-2">Commençons maintenant</span>
        </div>
      </div>
      <div class="back">
        <img class="backImg" src="<?php echo  base_url('Images/backImg.jpg');?>" alt="">
        <div class="text">
          <span class="text-1">Des objets que vous ne voulez plus? <br> </span>
          <span class="text-2">Echangez-le(s) ici</span>
        </div>
      </div>
    </div>
    <div class="forms">
        <div class="form-content">
          <div class="login-form">
            <div class="title">Connection</div>
          <form action="<?php echo base_url('index.php/welcome/connection')?>" method="post">
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input type="email" placeholder="email" name="email" required>
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Mot de passe" name="password" required>
              </div>
              <div class="button input-box">
                <input type="submit" value="Submit">
              </div>
              <div class="text sign-up-text">Je n'ai pas encore de compte? <label for="flip">S'inscrire maintenant</label></div>
            </div>
        </form>
      </div>
        <div class="signup-form">
          <div class="title">Inscription</div>
        <form action="<?php echo base_url('index.php/welcome/singin')?>" method="post">
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input type="email" placeholder="email"  name="email" required>
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Mot de passe" name="password" required>
              </div>
              <div class="input-box">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="Nom" name="nom" required>
              </div>
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input type="text" placeholder="Prénom(s)" name="prenom" required>
              </div>
              <div class="input-box">
                <i class="fas fa-phone icon-rotate-90"></i>
                <input type="number" placeholder="Téléphone" name="tel" required>
              </div>
              <!-- <div class="input-box">
                <i class="fas fa-user-circle"></i>
                <input type="file" placeholder="Profil" name="img" required>
              </div> -->
              
              <div class="button input-box">
                <input type="submit" value="S'inscrire">
              </div>
              <div class="text sign-up-text">J'ai déjà un compte existant? <label for="flip">Se connecter maintenant</label></div>
            </div>
      </form>
    </div>
    </div>
    </div>
  </div>
</body>
</html>
