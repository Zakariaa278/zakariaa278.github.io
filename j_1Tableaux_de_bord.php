<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Tableau de Bord</title>
  <link rel="stylesheet" href="j_2tableaux_de_bord.css" type="text/css">
</head>
<body>
  <!-- Barre de navigation -->
  <nav class="navbar">
    <p class="logo">Tableau de Bord</p>
    <div class="nav-links">
      <ul>
        <!-- Lien cliquable de navigation -->
        <li><a class="link1" href="/" onmouseover="colornav(this, true)" onmouseout="colornav(this, false)">Accueil</a></li>
        <li><a class="link1" href="k_1Forum.php" onmouseover="colornav(this, true)" onmouseout="colornav(this, false)">Forum</a></li>
        <li><a class="link1" href="l_1Agenda.php" onmouseover="colornav(this, true)" onmouseout="colornav(this, false)">Agenda</a></li>
        <li><a class="link1" href="m_1Annexe.php" onmouseover="colornav(this, true)" onmouseout="colornav(this, false)">Annexe</a></li>
        <li>
          <a class="link2" href="n_1Inscription.php" onmouseover="colornav(this, true)" onmouseout="colornav(this, false)">Inscription /</a>
          <a class="link2" href="n_2Connexion.php" onmouseover="colornav(this, true)" onmouseout="colornav(this, false)">Connexion</a>
        </li>
      </ul>
    </div>
    <!-- Bouton cliquable pour sortir le menu de navigation -->
    <img src="zimage(menu).png" alt="Button" class="menu" onclick="menu()">
  </nav>

  <div class="ss">
    <div class="second">
      <div class="ss">
        <img id="tableau" src="zimage(tableau).png" alt="tableau">
        <img class="ASPost" id="ASPost1" src="zimage(AS1).jpg" alt="Imageas">
        <img class="ASPost" id="ASPost2" src="zimage(AS3).jpg" alt="Imageas">
        <img class="ASPost" id="ASPost3" src="zimage(AS2).png" alt="Imageas">
        <img class="ASPost" id="ASPost4" src="zimage(AS4).jpg" alt="Imageas">
      </div>
    </div>
  </div>
  <script src="script.js"></script>
</body>
</html>
