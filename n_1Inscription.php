<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="n_3inco.css" type="text/css">
  <title>Inscription</title>
</head>
<body>
  <header>
    <p class="logo">Inscription</p>
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
        <input type="submit" class="soumission" id="envoie" name="formsend" value="S'Inscrire">
        <input type="reset" value="Effacer" id="effacer" class="soumission">
      </div>
    </form>
  </header>
  
  <?php
  $message = ''; // Initialisez la variable $message pour éviter toute erreur de référence
  
  if (isset($_POST['formsend'])) {
    $pseudo = $_POST['pseudo'];
    $email = $_POST['email'];
    $password = $_POST['password'];
  
    include 'includes/database.php';
  
    // Vérifier si le pseudo existe déjà dans la base de données
    $q = $db->prepare("SELECT COUNT(*) AS count FROM user WHERE pseudo = ?");
    $q->execute([$pseudo]);
    $result = $q->fetch(PDO::FETCH_ASSOC);
  
    if ($result['count'] > 0) {
      $message = "Ce pseudo est déjà pris.";
    } else {
      // Vérifier si l'adresse e-mail existe déjà dans la base de données
      $q = $db->prepare("SELECT COUNT(*) AS count FROM user WHERE email = ?");
      $q->execute([$email]);
      $result_email = $q->fetch(PDO::FETCH_ASSOC);
  
      if ($result_email['count'] > 0) {
        $message = "Cette adresse e-mail est déjà prise.";
      } else {
        $options = [
          'cost' => 12,
        ];
        $hashpass = password_hash($password, PASSWORD_BCRYPT, $options);
        $q = $db->prepare("INSERT INTO user(pseudo,email,password) VALUES(:pseudo,:email,:password)");
        $q->execute([
          'pseudo' => $pseudo,
          'email' => $email,
          'password' => $hashpass
        ]);
        $message = "Inscription réussie !";
        header("Location: n_2Connexion.php"); // Redirection vers Connexion.php après une inscription réussie
        exit();
      }
    }
  } else {
    $message = "Les champs ne sont pas tous remplis.";
  }
  ?>
  
  <?php
  // Code PHP pour vérifier si le formulaire est bien envoyé
  if (isset($_POST['formsend'])) {
    // Code PHP pour vérifier si le pseudo ou email sont déjà utilisés
    if ($result['count'] > 0) {
      // Message d'erreur pseudo déjà pris
      echo "<script>alert('Ce pseudo est déjà pris.');</script>";
    } else if ($result_email['count'] > 0) {
      // Message d'erreur email déjà pris
      echo "<script>alert('Cette adresse e-mail est déjà prise.');</script>";
    } else {
      // Message d'inscription réussie
      echo "<script>alert('Inscription réussie !');</script>";
      header("Location: Connexion.php"); // Redirection vers Connexion.php après une inscription réussie
      exit();
    }
  }
  ?>
  
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
        <li><a href="n_2Connexion.php" onmouseover="colornav(this, true)" onmouseout="colornav(this, false)">Connexion</a></li>
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
