<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>AS Connect</title>
  <link rel="stylesheet" href="k_2forum.css" type="text/css">
</head>
<body>
  <div class="background"></div>

  <!-- Barre de navigation -->
  <nav class="navbar">
    <p class="logo">Forum</p>
    <div class="nav-links">
      <ul>
        <!-- Lien cliquable de navigation -->
        <li>
          <a class="link1" href="/" onmouseover="colornav(this, true)" onmouseout="colornav(this, false)">Accueil</a>
        </li>
        <li>
          <a class="link1" href="j_1Tableaux_de_bord.php" onmouseover="colornav(this, true)" onmouseout="colornav(this, false)">Forum</a>
        </li>
        <li>
          <a class="link1" href="l_1Agenda.php" onmouseover="colornav(this, true)" onmouseout="colornav(this, false)">Agenda</a>
        </li>
        <li>
          <a class="link1" href="m_1Annexe.php" onmouseover="colornav(this, true)" onmouseout="colornav(this, false)">Annexe</a>
        </li>
        <li>
          <a class="link2" href="n_1Inscription.php" onmouseover="colornav(this, true)" onmouseout="colornav(this, false)">Inscription /</a>
          <a class="link2" href="n_2Connexion.php" onmouseover="colornav(this, true)" onmouseout="colornav(this, false)">Connexion</a>
        </li>
      </ul>
    </div>
    <!-- Bouton cliquable pour sortir le menu de navigation -->
    <img src="zimage(menu).png" alt="Button" class="menu" onclick="menu()">
  </nav>
  <div class="fond"></div>
 <div class="container">
    <div class="conversation">
      <h2>Monsieur Ferudja</h2>
      <ul id="messagesF"></ul>
      <input type="text" id="messageInputF" placeholder="Entrez votre message">
      <button onclick="sendMessage('F')">Envoyer</button>
    </div>

    <div class="conversation">
      <h2>Madame Brunel</h2>
      <ul id="messagesB"></ul>
      <input type="text" id="messageInputB" placeholder="Entrez votre message">
      <button onclick="sendMessage('B')">Envoyer</button>
    </div>

    <div class="conversation">
      <h2>Monsieur UsaÏ</h2>
      <ul id="messagesU"></ul>
      <input type="text" id="messageInputU" placeholder="Entrez votre message">
      <button onclick="sendMessage('U')">Envoyer</button>
    </div>
  </div>
  <script src="script.js"></script>
</body>
</html>
