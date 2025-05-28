<!-- Navigation -->
<nav class="header-nav">
  <div class="burger" onclick="toggleSidebar()">☰</div>
  <a href="/index.php" class="logo">
    <img src="/bilder/fuchs.svg" alt="Logo Fuchs" style="height: 40px; vertical-align: middle;">
    <span style="margin-left: 10px;">Waldzeit</span>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;700&display=swap" rel="stylesheet">
  </a>
</nav>

<!-- Sidebar -->
<aside class="sidebar" id="sidebar">
  <nav aria-label="Hauptnavigation">
    <ul>
      <!-- Kinderbereich -->
      <li>
        <h2 style="color: #ffeb3b;"><a href="/kinder/kinder.php" style="color: #ffeb3b;">Kinderbereich</a></h2>
      </li>
      <li><a href="/kinder/entdecken.php">🔍 Auf Spurensuche</a></li>
      <li><a href="/kinder/aufraeumen.php">🧹 Saubere Sache!</a></li>
      <li><a href="/kinder/spielen.php">🧪 Forschen &amp; Verstehen</a></li>

      <li><hr style="border-color: rgba(255,255,255,0.2); margin: 1rem 0;"></li>

      <!-- Erwachsene -->
      <li>
        <h2><a href="/erwachsene/erwachsene.php">Für Erwachsene</a></h2>
      </li>
      <li>
        <button class="submenu-btn" data-submenu="submenu-bastel" aria-haspopup="true">🎨 Bastelvorlagen</button>
      </li>
      <li>
        <button class="submenu-btn" data-submenu="submenu-medien" aria-haspopup="true">🎧 Medientipps</button>
      </li>
    </ul>
  </nav>

  <div class="sidebar-footer">
    <a href="/about.php">Über uns</a>
    <a href="/impressum.php">Impressum</a>
  </div>
</aside>

<!-- Submenü Bastelvorlagen -->
<aside class="submenu-sidebar" id="submenu-bastel" onmouseleave="hideSubmenus()" style="top: 280px;">
  <nav aria-label="Bastelvorlagen Untermenü">
    <ul>
      <li><a href="/erwachsene/bastelvorlagen/tiere.php">Tiere</a></li>
      <li><a href="/erwachsene/bastelvorlagen/pflanzen.php">Pflanzen</a></li>
      <li><a href="/erwachsene/bastelvorlagen/umweltschutz.php">Umweltschutz</a></li>
      <li><a href="/erwachsene/bastelvorlagen/jahreszeiten.php">Jahreszeiten</a></li>
    </ul>
  </nav>
</aside>

<!-- Submenü Medientipps -->
<aside class="submenu-sidebar" id="submenu-medien" onmouseleave="hideSubmenus()" style="top: 280px;">
  <nav aria-label="Medientipps Untermenü">
    <ul>
      <li><a href="/erwachsene/medientipps/buecher.php">📖 Bücher</a></li>
      <li><a href="/erwachsene/medientipps/hoerspiele.php">🎵 Hörspiele</a></li>
      <li><a href="/erwachsene/medientipps/videos.php">🎬 Videos</a></li>
    </ul>
  </nav>
</aside>

<!-- Submenü Bastelvorlagen -->
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

<!-- Submenü Medientipps -->
<aside class="submenu-sidebar" id="submenu-medien" onmouseleave="hideSubmenus()">
  <nav aria-label="Medientipps Untermenü">
    <ul>
      <li><a href="/erwachsene/medientipps/buecher.php">📖 Bücher</a></li>
      <li><a href="/erwachsene/medientipps/hoerspiele.php">🎵 Hörspiele</a></li>
      <li><a href="/erwachsene/medientipps/videos.php">🎬 Videos</a></li>
    </ul>
  </nav>
</aside>

<!-- Overlay -->
<div id="overlay" onclick="closeSidebar()"></div>
