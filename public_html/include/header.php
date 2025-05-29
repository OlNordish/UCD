<!-- Navigation -->
<nav class="header-nav">
  <div class="burger" onclick="toggleSidebar()">&#x2630;</div>
  <div class="breadcrumb-wrapper">
  <div class="breadcrumb-path">
<?php
// Dateinamen zu Anzeigenamen
$breadcrumbLabels = [
    'erwachsene' => 'Erwachsenenbereich',
    'bastelvorlagen' => 'Bastelvorlagen',
    'jahreszeiten' => 'Jahreszeiten',
    'pflanzen' => 'Pflanzen & B&auml;ume',
    'tiere' => 'Tiere des Waldes',
    'umweltschutz' => 'Umweltschutz',
    'medientipps' => 'Medientipps',
    'buecher' => 'Buchempfehlungen',
    'hoerspiele' => 'H&ouml;rspiele',
    'spiele' => 'Spiele',
    'videos' => 'Videos',
    'kinder' => 'Kinderbereich',
    'entdecken' => 'Auf Spurensuche',
    'aufraeumen' => 'Saubere Sache!',
    'veraenderungen' => 'Forschen & Verstehen',
];

// Aktueller Pfad
$currentPath = $_SERVER['PHP_SELF'];

if (preg_match('#/index\.php$#', $currentPath)) {
    $displayPath = '';
} else {
    $path = ltrim($currentPath, '/');
    $path = preg_replace('/\.php$/', '', $path);
    $parts = explode('/', $path);

    $filteredParts = array_filter($parts, function($part) {
        return strtolower($part) !== 'index';
    });

    // Labels statt Rohteile verwenden
    $niceParts = array_map(function($part) use ($breadcrumbLabels) {
        return $breadcrumbLabels[$part] ?? ucfirst($part);
    }, $filteredParts);

    $displayPath = implode(' <span style="opacity: 0.6;">&#8594;</span> ', $niceParts);
}

if (!empty($displayPath)) {
    echo '<div class="breadcrumb-path">' . $displayPath . '</div>';
}
?>
  </div>
  </div>
  <a href="/index.php" class="logo">
    <img src="/bilder/fuchs.svg" alt="Logo Fuchs" style="height: 40px; vertical-align: middle;">
    <span style="margin-left: 10px;">Waldzeit</span>
  </a>
  <title>Waldzeit Navigation</title>
  <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;700&display=swap" rel="stylesheet">
</nav>

<!-- Sidebar -->
<aside class="sidebar" id="sidebar">
  <nav aria-label="Hauptnavigation">
    <ul>
      <!-- Kinderbereich -->
      <li>
        <h2 style="color: #ffeb3b;"><a href="/kinder/kinder.php" style="color: #ffeb3b;">Kinderbereich</a></h2>
      </li>
      <li><a href="/kinder/entdecken.php">&#x1F50D; Auf Spurensuche</a></li>
      <li><a href="/kinder/aufraeumen.php">&#x1F9F9; Saubere Sache!</a></li>
      <li><a href="/kinder/spielen.php">&#x1F52C; Forschen &amp; Verstehen</a></li>

      <li><hr style="border-color: rgba(255,255,255,0.2); margin: 1rem 0;"></li>

      <!-- Erwachsene -->
      <li>
        <h2><a href="/erwachsene/erwachsene.php">F&uuml;r Erwachsene</a></h2>
      </li>
      <li>
        <button class="submenu-btn" data-submenu="submenu-bastel" aria-haspopup="true">&#x2702;&#xFE0F; Bastelvorlagen</button>
      </li>
      <li>
        <button class="submenu-btn" data-submenu="submenu-medien" aria-haspopup="true">&#x1F4DA; Medientipps</button>
      </li>
    </ul>
  </nav>

  <div class="sidebar-footer">
    <a href="/about.php">&Uuml;ber uns</a>
    <a href="/impressum.php">Impressum</a>
  </div>
</aside>

<!-- Submenü Bastelvorlagen -->
<aside class="submenu-sidebar" id="submenu-bastel" onmouseleave="hideSubmenus()">
  <nav aria-label="Bastelvorlagen Untermenü">
    <ul>
 <li><a href="/erwachsene/bastelvorlagen/tiere.php">&#x1F43E; Tiere</a></li>
      <li><a href="/erwachsene/bastelvorlagen/pflanzen.php">&#x1F33F; Pflanzen</a></li>
      <li><a href="/erwachsene/bastelvorlagen/umweltschutz.php">&#x1F30D; Umweltschutz</a></li>
      <li><a href="/erwachsene/bastelvorlagen/jahreszeiten.php">&#x1F326;&#xFE0F; Jahreszeiten</a></li>
    </ul>
  </nav>
</aside>

<!-- Submenü Medientipps -->
<aside class="submenu-sidebar" id="submenu-medien" onmouseleave="hideSubmenus()">
  <nav aria-label="Medientipps Untermenü">
    <ul>
      <li><a href="/erwachsene/medientipps/buecher.php">&#x1F4D6; B&uuml;cher</a></li>
      <li><a href="/erwachsene/medientipps/hoerspiele.php">&#x1F3A7; H&ouml;rspiele</a></li>
      <li><a href="/erwachsene/medientipps/videos.php">&#x1F3AC; Videos</a></li>
      <li><a href="/erwachsene/medientipps/spiele.php">&#x1F3B2; Spiele</a></li>
    </ul>
  </nav>
</aside>

<!-- Overlay -->
<div id="overlay" onclick="closeSidebar()"></div>
