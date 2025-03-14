<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="n_3inco.css" type="text/css">
  <title>Connexion</title>
</head>
<body>
  <header>
    <p class="logo">Connexion</p>
    <form method="post">
      <fieldset><!-- Formulaire d'inscription -->
        <div id="form">
          <label for="pseudo">Pseudo:
            <input class="label" placeholder="Saisissez votre pseudo" id="pseudo" type="text" size="30" name="pseudo" required>
          </label><br>
          <label for="email">E-Mail:
            <input class="label" placeholder="Saisissez votre email" id="email" type="email" size="30" name="email" required>
          </label><br>
          <label for="password">Mot de passe:
            <input class="label" placeholder="Saisissez votre mot de passe" id="password" type="password" size="22" name="password" required>
          </label>
          <div class="password-icon">
            <i data-feather="eye"></i>
            <i data-feather="eye-off"></i>
          </div>
        </div>
      </fieldset>
      <div class="soumission-container">
        <input type="submit" class="soumission" id="envoie" name="formsend" value="Se connecter">
        <input type="reset" value="Effacer" id="effacer" class="soumission">
      </div>
    </form>
  </header>

  <!-- Barre de navigation -->
  <nav class="navbar">
    <div class="nav-links">
      <ul>
        <!-- Lien cliquable de navigation -->
        <li><a href="/" onmouseover="colornav(this, true)" onmouseout="colornav(this, false)">Accueil</a></li>
        <li><a href="j_1Tableaux_de_bord.php" onmouseover="colornav(this, true)" onmouseout="colornav(this, false)">Tableau de bord</a></li>
        <li><a href="k_1Forum.php" onmouseover="colornav(this, true)" onmouseout="colornav(this, false)">Forum</a></li>
        <li><a href="l_1Agenda.php" onmouseover="colornav(this, true)" onmouseout="colornav(this, false)">Agenda</a></li>
        <li><a href="m_1Annexe.php" onmouseover="colornav(this, true)" onmouseout="colornav(this, false)">Annexe</a></li>
        <li><a href="n_1Inscription.php" onmouseover="colornav(this, true)" onmouseout="colornav(this, false)">Connexion</a></li>
      </ul>
    </div>
    <!-- Bouton cliquable pour afficher le menu de navigation -->
    <img src="zimage(menu).png" alt="Button" class="menu" onclick="menu()">
  </nav>
  
  <script src="https://unpkg.com/feather-icons"></script>
  <script src="script.js"></script>
  <script>
    feather.replace();
    hidePassword(); // Appel à la fonction hidePassword()
  </script>
</body>
</html>
