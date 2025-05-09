<nav>
  <div class="nav-left">
    <div class="burger-menu" onclick="toggleSidebar()">?</div>
  </div>
  <a href="index.php" class="nav-logo">?</a>
</nav>

<div class="sidebar" id="sidebar">
  <section>
    <h3><a href="index.php">Startseite</a></h3>
  </section>
  <section>
    <h3><a href="erwachsene/erwachsene.php">Erwachsene</a></h3>
    <div id="bastelvorlagen-link" onclick="window.location.href='erwachsene/bastelvorlagen.php'">Bastelvorlagen</div>
    <a href="erwachsene/medientipps.php">Medientipps</a>
  </section>
  <section>
    <h3><a href="kinder/kinder.php">Kinder</a></h3>
    <a href="kinder/entdecken.php">Entdecken</a>
    <a href="kinder/spielen.php">Spielen</a>
    <a href="kinder/quiz.php">Quiz</a>
  </section>
  <section style="margin-top: auto;">
    <h3>Info</h3>
    <a href="impressum.php">Impressum</a>
    <a href="about.php">About</a>
  </section>
</div>

<div class="submenu-sidebar" id="submenu">
  <h3>Bastelvorlagen</h3>
  <a href="erwachsene/bastelvorlagen/tiere.php">Tiere</a>
  <a href="erwachsene/bastelvorlagen/pflanzen.php">Pflanzen</a>
  <a href="erwachsene/bastelvorlagen/umweltschutz.php">Umweltschutz</a>
  <a href="erwachsene/bastelvorlagen/jahreszeiten.php">Jahreszeiten</a>
</div>

<div id="overlay" onclick="toggleSidebar(); hideSubmenu();"></div>