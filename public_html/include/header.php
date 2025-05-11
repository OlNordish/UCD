<!-- Navigation -->
<nav class="header-nav">
  <div class="burger" onclick="toggleSidebar()">?</div>
  <a href="/index.php" class="logo">? Mein Wald</a>
</nav>

<!-- Sidebar -->
<aside class="sidebar" id="sidebar">
  <ul>
    <li><a href="/index.php">Startseite</a></li>
    <li>
      <button class="submenu-btn" data-submenu="submenu-bastel">Bastelvorlagen</button>
    </li>
    <li>
      <button class="submenu-btn" data-submenu="submenu-medien">Medientipps</button>
    </li>
    <li><a href="/kinder/kinder.php">Kinderbereich</a></li>
    <li><a href="/about.php">Über uns</a></li>
    <li><a href="/impressum.php">Impressum</a></li>
  </ul>
</aside>

<!-- Submenu für Bastelvorlagen -->
<aside class="submenu-sidebar" id="submenu-bastel" onmouseleave="hideSubmenus()">
  <ul>
    <li><a href="/erwachsene/bastelvorlagen/tiere.php">Tiere</a></li>
    <li><a href="/erwachsene/bastelvorlagen/pflanzen.php">Pflanzen</a></li>
    <li><a href="/erwachsene/bastelvorlagen/umweltschutz.php">Umweltschutz</a></li>
    <li><a href="/erwachsene/bastelvorlagen/jahreszeiten.php">Jahreszeiten</a></li>
  </ul>
</aside>

<!-- Submenu für Medientipps -->
<aside class="submenu-sidebar" id="submenu-medien" onmouseleave="hideSubmenus()">
  <ul>
    <li><a href="/erwachsene/medientipps/buecher.php">Bücher</a></li>
    <li><a href="/erwachsene/medientipps/hoerspiele.php">Hörspiele</a></li>
    <li><a href="/erwachsene/medientipps/dokus.php">Dokumentationen</a></li>
    <li><a href="/erwachsene/medientipps/apps.php">Apps</a></li>
    <li><a href="/erwachsene/medientipps/lernmaterial.php">Lernmaterialien</a></li>
  </ul>
</aside>

<!-- Overlay -->
<div id="overlay" onclick="closeSidebar()"></div>
