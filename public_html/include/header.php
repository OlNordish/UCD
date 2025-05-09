<nav>
  <div class="nav-left">
    <div class="burger-menu" onclick="toggleSidebar()">☰</div>
    <div>Menü</div>
  </div>
  <a href="/index.php" class="nav-logo">🌳</a>
</nav>

<div class="sidebar" id="sidebar">
  <section>
    <h3><a href="/index.php">Startseite</a></h3>
  </section>
  <section>
    <h3><a href="/erwachsene/erwachsene.php">Erwachsene</a></h3>
    <a id="bastelvorlagen-link">Bastelvorlagen</a>
    <a href="/erwachsene/medientipps.php">Medientipps</a>
  </section>
  <section>
    <h3><a href="/kinder/kinder.php">Kinder</a></h3>
    <a href="/kinder/entdecken.php">Entdecken</a>
    <a href="/kinder/spielen.php">Spielen</a>
    <a href="/kinder/quiz.php">Quiz</a>
  </section>
  <section style="margin-top: auto;">
    <a href="/impressum.php">Impressum</a>
    <a href="/about.php">Über diese Seite</a>
  </section>
</div>

<div class="submenu-sidebar" id="submenu">
  <h3>Bastelvorlagen</h3>
  <a href="#">Tiere des Waldes</a>
  <a href="#">Bäume und Pflanzen</a>
  <a href="#">Umweltschutz</a>
  <a href="#">Jahreszeiten und Wetter</a>
</div>

<div id="overlay" onclick="toggleSidebar(); hideSubmenu();"></div>
