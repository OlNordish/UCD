<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Doppelsidebar Header</title>
  <style>
    body {
      margin: 0;
      font-family: sans-serif;
      background-color: #8fbc8f;
    }

    nav {
      background-color: #2f4f4f;
      color: white;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 10px 20px;
      position: relative;
      z-index: 10;
    }

    .nav-left {
      display: flex;
      align-items: center;
      gap: 20px;
    }

    .burger-menu {
      font-size: 24px;
      cursor: pointer;
    }

    .nav-logo {
      position: absolute;
      left: 50%;
      transform: translateX(-50%);
      font-weight: bold;
      font-size: 20px;
      text-decoration: none;
      color: white;
    }

    .sidebar {
      position: fixed;
      top: 0;
      left: -300px;
      width: 250px;
      height: 100%;
      background-color: #2f4f4f;
      color: white;
      padding: 20px;
      box-shadow: 2px 0 5px rgba(0,0,0,0.5);
      transition: left 0.3s ease-in-out;
      z-index: 9;
    }

    .sidebar.active {
      left: 0;
    }

    .sidebar h3 {
      margin-top: 40px;
      font-size: 18px;
      font-weight: bold;
      border-bottom: 1px solid #ccc;
      padding-bottom: 5px;
      color: white;
    }

    .sidebar a,
    #bastelvorlagen-link {
      display: block;
      color: white;
      text-decoration: none;
      margin: 5px 0;
      cursor: pointer;
    }

    .submenu-sidebar {
      position: fixed;
      top: 50px;
      left: -300px;
      width: 250px;
      height: calc(100% - 50px);
      background-color: #3a5f5f;
      padding: 20px;
      box-shadow: 2px 0 5px rgba(0,0,0,0.5);
      transition: left 0.3s ease-in-out;
      z-index: 8;
    }

    .submenu-sidebar.active {
      left: 290px;
    }

    .submenu-sidebar h3 {
      font-size: 18px;
      font-weight: bold;
      border-bottom: 1px solid #ccc;
      padding-bottom: 5px;
      margin-top: 0;
      color: white;
    }

    .submenu-sidebar a {
      display: block;
      color: white;
      text-decoration: none;
      margin: 5px 0;
      cursor: pointer;
    }

    #overlay {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0,0,0,0.5);
      z-index: 7;
      display: none;
    }
  </style>
</head>
<body>

<!-- HEADER -->
<nav>
  <div class="nav-left">
    <div class="burger-menu" onclick="toggleSidebar()">☰</div>
    <div>Menü</div>
  </div>
  <a href="../index.php" class="nav-logo">🌳</a>
</nav>

<!-- SIDEBAR -->
<div class="sidebar" id="sidebar">
  <section>
    <h3><a href="../index.php">Startseite</a></h3>
  </section>
  <section>
    <h3><a href="../erwachsene/erwachsene.php">Erwachsene</a></h3>
    <div id="bastelvorlagen-link" onclick="window.location.href='../erwachsene/bastelvorlagen.php'">Bastelvorlagen</div>
    <a href="../erwachsene/medientipps.php">Medientipps</a>
  </section>
  <section>
    <h3><a href="../kinder/kinder.php">Kinder</a></h3>
    <a href="../kinder/entdecken.php">Entdecken</a>
    <a href="../kinder/spielen.php">Spielen</a>
    <a href="../kinder/quiz.php">Quiz</a>
  </section>
  <section style="margin-top: auto;">
    <h3>Info</h3>
    <a href="../impressum.php">Impressum</a>
    <a href="../about.php">About</a>
  </section>
</div>

<!-- SUBMENU -->
<div class="submenu-sidebar" id="submenu">
  <h3>Bastelvorlagen</h3>
  <a href="../erwachsene/bastelvorlagen/tiere.php">Tiere des Waldes</a>
  <a href="../erwachsene/bastelvorlagen/pflanzen.php">Bäume und Pflanzen</a>
  <a href="../erwachsene/bastelvorlagen/umweltschutz.php">Umweltschutz</a>
  <a href="../erwachsene/bastelvorlagen/jahreszeiten.php">Jahreszeiten und Wetter</a>
</div>

<!-- OVERLAY -->
<div id="overlay" onclick="toggleSidebar(); hideSubmenu();"></div>

<!-- SCRIPT -->
<script>
  const sidebar = document.getElementById("sidebar");
  const overlay = document.getElementById("overlay");
  const submenu = document.getElementById("submenu");
  const bastelLink = document.getElementById("bastelvorlagen-link");

  function toggleSidebar() {
    sidebar.classList.toggle("active");

    if (!sidebar.classList.contains("active")) {
      submenu.classList.remove("active");
    }

    overlay.style.display = sidebar.classList.contains("active") ? "block" : "none";
  }

  bastelLink.addEventListener("mouseenter", () => {
    submenu.classList.add("active");
  });

  submenu.addEventListener("mouseleave", () => {
    submenu.classList.remove("active");
  });

  function hideSubmenu() {
    submenu.classList.remove("active");
  }
</script>

</body>
</html>
