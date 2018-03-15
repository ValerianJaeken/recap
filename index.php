<?php 
  
  session_start();
  

 ?>





<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Training</title>
    <!-- LIEN VERS LA PAGE CSS -->
    
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <!-- FONT AWESOME -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
  </head>
  <body>
  <header class="hc">
    <div class="headerM">
      <p>Menu 1</p>
      <p>Menu 2</p>
      <p>Menu 3</p>
      <p>Menu 4</p>
    </div>
    <div class="HeaderI">
      <i class="fab fa-facebook-square"></i>
      <i class="fab fa-linkedin"></i>
      <i class="fab fa-youtube"></i>
      <i class="fab fa-twitch"></i>
      <i class="fab fa-twitter-square"></i>
    </div>
    <div class="headerS">
      <nav class="navbar navbar-light bg-light">
        <form class="form-inline">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </nav>
    </div>
  </header>

  <!-- section 1 sera une grosse image classe avec du texte en arrière plan, éventuellement un carousel -->
  <section class="s1">
    <h3>This is me training, pretend this is a motivational one-liner.</h3>
  </section>

  <!-- section 2 sera un formulaire pour écrire une histoire/livre/aventure/n'importe avec titre, histoire et nom de l'auteur -->
  <!-- enregistrer le titre + histoire par rapport au nom rentré dans en SQL -->
  <!-- pouvoir accéder aux titres cliquables pour lire les histoires en cherchant le nom -->
  <section class="s2">
    <form>
      <fieldset>
        <legend>Section 2</legend>
        <p>I'm not exactly sure what this section will be about or even the site, we just need some stuff and whatnot.</p>
        <ul>
          <li>Title  <br><input type="text" name="s2t"><br></li>
          <li>Genre</li>

            <select>
              <option value="Horror">Horror</option>
              <option value="Thriller">Thriller</option>
              <option value="Martial_arts">Martial arts</option>
              <option value="Romance">Romance</option>
              <option value="Police">Police</option>
            </select>

          <li>Content  <br><input type="text" name="s2c"><br></li>
          <li>Author name  <br><input type="text" name="s2n"><br></li>
          <button type="submit" name="button">Send</button>
        </ul>
      </fieldset>
    </form>
  </section>

  <form action="signup.php" method="POST">
    <input type="text" name="pseudo" placeholder="login">
    <input type="text" name="email" placeholder="email address">
    <input type="password" name="password" placeholder="password">
    <input type="submit" name="submit-up" value="signup">
  </form>

  <form action="login.php" method="POST">
    <input type="text" name="login" placeholder="login">
    <input type="password" name = "password" placeholder="password">
    <input type="submit" name="submit-in" value="login">
  </form>

  <!-- cette section sera une galerie avec des div contenant texte et éventuellement background, qui enverront vers une histoire rentrée ou qui est déjà dans la database -->
  <!-- idéalement cette galerie se mettrait à jour via les histoires rentrées en montrant les 15 dernières rentrées -->
  <section class="s3">
    <div class="s3g">
      <span class="s3t"></span>
    </div>
  </section>

  <!-- cette section proposera différents genres et filtres qui permettront d'afficher les styles correspondants dans la bdd -->
  <section class="s4">
    <h2>Which genre would you be interested in ?</h2>
    <a href="#">Horror</a>
    <a href="#">Thriller</a>
    <a href="#">Martial arts</a>
    <a href="#">Romance</a>
    <a href="#">Police</a>
  </section>
  <a href="https://www.gohkbkhjbkbhbbhogle.com">hello</a>
  <footer>
    <div class="f1">
      <ul>
        <li>Bunch</li>
        <li>Of</li>
        <li>Menus</li>
        <li>That</li>
      </ul>
    </div>
    <div class="f2">
      <ul>
        <li>Nobody</li>
        <li>Will</li>
        <li>Ever</li>
        <li>Read</li>
      </ul>
    </div>
    <div class="f3">
      <ul>
        <li>Nor</li>
        <li>Click</li>
        <li>Or</li>
        <li>Notice</li>
      </ul>
      <p>Copyright by iHaveNoIdeaWhatImDoin ©</p>
    </div>
  </footer>
  </body>
</html>
