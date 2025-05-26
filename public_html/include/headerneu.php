<!-- Navigation -->
<nav class="header-nav">
  <div class="nav-left">
    <div class="burger" onclick="toggleSidebar()">x</div>
    <div class="breadcrumb">
      <?php
        $path = $_SERVER['REQUEST_URI'];
        $pathParts = array_filter(explode('/', $path));

        $titles = [
          'erwachsene' => 'Elternbereich',
          'kinder' => 'Kinderbereich',
          'bastelvorlagen' => 'Bastelvorlagen',
          'medientipps' => 'Medientipps',
          'videos.php' => 'Videos',
          'hoerspiele.php' => 'Hˆrspiele',
          'buecher.php' => 'B¸cher',
          'spiele.php' => 'Spiele',
          'tiere.php' => 'Tiere',
          'pflanzen.php' => 'B‰ume & Pflanzen',
          'umweltschutz.php' => 'Umweltschutz',
          'jahreszeiten.php' => 'Jahreszeiten & Wetter'
        ];

        $breadcrumbs = [];

        foreach ($pathParts as $part) {
          if (isset($titles[$part])) {
            $breadcrumbs[] = $titles[$part];
          } else {
            $breadcrumbs[] = ucfirst(str_replace('.php', '', $part));
          }
        }

        echo implode(' - ', $breadcrumbs);
      ?>
    </div>
  </div>

  <a href="/index.php" class="logo">Waldlogo</a>
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
      <li><a href="/kinder/aufraeumen.php">Aufr√§umen</a></li>
      <li><a href="/kinder/spielen.php">Ver√§nderungen</a></li>
    </ul>
  </nav>

  <!-- Footer -->
  <div class="sidebar-footer">
    <a href="/about.php">√úber uns</a>
    <a href="/impressum.php">Impressum</a>
  </div>
</aside>

<!-- Submen¸ Bastelvorlagen -->
<aside class="submenu-sidebar" id="submenu-bastel" onmouseleave="hideSubmenus()">
  <nav aria-label="Bastelvorlagen Untermen√º">
    <ul>
      <li><a href="/erwachsene/bastelvorlagen/tiere.php">Tiere</a></li>
      <li><a href="/erwachsene/bastelvorlagen/pflanzen.php">Pflanzen</a></li>
      <li><a href="/erwachsene/bastelvorlagen/umweltschutz.php">Umweltschutz</a></li>
      <li><a href="/erwachsene/bastelvorlagen/jahreszeiten.php">Jahreszeiten</a></li>
    </ul>
  </nav>
</aside>

<!-- Submenu Medientipps -->
<aside class="submenu-sidebar" id="submenu-medien" onmouseleave="hideSubmenus()">
  <nav aria-label="Medientipps Untermen√º">
    <ul>
      <li><a href="/erwachsene/medientipps/buecher.php">B√ºcher</a></li>
      <li><a href="/erwachsene/medientipps/hoerspiele.php">H√∂rspiele</a></li>
      <li><a href="/erwachsene/medientipps/videos.php">Videos</a></li>
      <li><a href="/erwachsene/medientipps/spiele.php">Spiele</a></li>
    </ul>
  </nav>
</aside>

<!-- Overlay -->
<div id="overlay" onclick="closeSidebar()"></div>
