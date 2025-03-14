<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Agenda</title>
  <link rel="stylesheet" href="l_2agenda.css" type="text/css">
</head>
<body>
  <!-- Barre de navigation -->
  <nav class="navbar">
    <div class="nav-links">
      <ul>
        <!-- Lien cliquable de navigation -->
        <li><a class="link1" href="/" onmouseover="colornav(this, true)" onmouseout="colornav(this, false)">Acceuil</a></li>
        <li><a class="link1" href="j_1Tableaux_de_bord.php" onmouseover="colornav(this, true)" onmouseout="colornav(this, false)">Tableau de bord</a></li>
        <li><a class="link1" href="k_1Forum.php" onmouseover="colornav(this, true)" onmouseout="colornav(this, false)">Forum</a></li>
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
  <div class="fond">
    <p>Calendrier</p>
    <table>
      <thead>
        <tr>
          <th>Dim</th>
          <th>Lun</th>
          <th>Mar</th>
          <th>Mer</th>
          <th>Jeu</th>
          <th>Ven</th>
          <th>Sam</th>
        </tr>
      </thead>
      <tbody id="calendar-body">
      </tbody>
    </table>
  </div class="fond">
  <script src="script.js"></script>
</body>
</html>
