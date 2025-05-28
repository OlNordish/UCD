  <!-- Navigation -->
<nav class="header-nav">
<div class="burger" onclick="toggleSidebar()">☰</div>
<a href="/index.php" class="logo">🌲 Waldspiel</a>
</nav>

<!-- Sidebar -->
<aside class="sidebar" id="sidebar">
<nav aria-label="Hauptnavigation">
<ul>
<!-- Elternbereich -->
<li>
<h2><a href="/erwachsene/erwachsene.php">Elternbereich</a></h2>
</li>
<li>
<button class="submenu-btn" data-submenu="submenu-bastel" aria-haspopup="true">Bastelvorlagen</button>
</li>
<li>
<button class="submenu-btn" data-submenu="submenu-medien" aria-haspopup="true">Medientipps</button>
</li>

  <!-- Kinderbereich -->
  <li>
    <h2><a href="/kinder/kinder.php">Kinderbereich</a></h2>
  </li>
  <li><a href="/kinder/entdecken.php">Entdecken</a></li>
  <li><a href="/kinder/aufraeumen.php">Aufräumen</a></li>
  <li><a href="/kinder/spielen.php">Veränderungen</a></li>
</ul>
</nav>

<!-- Footer -->
<div class="sidebar-footer">
<a href="/about.php">Über uns</a>
<a href="/impressum.php">Impressum</a>
</div>
</aside>

<!-- Submen� Bastelvorlagen -->
<aside class="submenu-sidebar" id="submenu-bastel" onmouseleave="hideSubmenus()">
<nav aria-label="Bastelvorlagen Untermenü">
<ul>
<li><a href="/erwachsene/bastelvorlagen/tiere.php">Tiere</a></li>
<li><a href="/erwachsene/bastelvorlagen/pflanzen.php">Pflanzen</a></li>
<li><a href="/erwachsene/bastelvorlagen/umweltschutz.php">Umweltschutz</a></li>
<li><a href="/erwachsene/bastelvorlagen/jahreszeiten.php">Jahreszeiten</a></li>
</ul>
</nav>
</aside>

<!-- Submen� Medientipps -->
<aside class="submenu-sidebar" id="submenu-medien" onmouseleave="hideSubmenus()">
<nav aria-label="Medientipps Untermenü">
<ul>
<li><a href="/erwachsene/medientipps/buecher.php">Bücher</a></li>
<li><a href="/erwachsene/medientipps/hoerspiele.php">Hörspiele</a></li>
<li><a href="/erwachsene/medientipps/videos.php">Videos</a></li>
</ul>
</nav>
</aside>

<!-- Overlay -->
<div id="overlay" onclick="closeSidebar()"></div>