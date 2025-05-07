<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Waldspiel – Levelauswahl</title>
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
    }

    .sidebar section {
      margin-bottom: 20px;
    }

    .sidebar a {
      display: block;
      color: white;
      text-decoration: none;
      margin: 5px 0;
    }

    #overlay {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0,0,0,0.5);
      z-index: 8;
      display: none;
    }

    main {
      display: flex;
      flex-direction: column;
      align-items: center;
      margin-top: 30px;
    }

    h1 {
      margin: 20px 0 10px;
      color: #2f4f4f;
    }

    .level-grid {
      display: grid;
      grid-template-columns: repeat(4, 120px);
      gap: 20px;
      margin: 30px;
    }

    .level-tile {
      width: 120px;
      height: 120px;
      background-color: #2f4f4f;
      color: white;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 18px;
      font-weight: bold;
      border-radius: 10px;
      text-decoration: none;
      pointer-events: none;
      opacity: 0.4;
      transition: all 0.3s;
    }

    .level-tile.active {
      pointer-events: auto;
      opacity: 1;
      background-color: #3cb371;
    }

    #reset-btn {
      margin-bottom: 30px;
      padding: 10px 20px;
      background-color: #d9534f;
      color: white;
      border: none;
      border-radius: 10px;
      font-size: 16px;
      cursor: pointer;
    }

    #reset-btn:hover {
      background-color: #c9302c;
    }
  </style>
</head>
<body>

  <!-- HEADER -->
  <nav>
    <div class="nav-left">
      <div class="burger-menu" onclick="toggleSidebar()">☰</div>
      <div>Spielen</div>
    </div>
    <div class="nav-logo">Waldlogo</div>
  </nav>

  <!-- SIDEBAR -->
  <div class="sidebar" id="sidebar">
    <section>
      <h3>Erwachsene</h3>
      <a href="erwachsene/bastelvorlagen.html">Bastelvorlagen</a>
      <a href="erwachsene/medientipps.html">Medientipps</a>
    </section>
    <section>
      <h3>Kinder</h3>
      <a href="kinder/entdecken.html">Entdecken</a>
      <a href="kinder/spielen.html">Spielen</a>
      <a href="kinder/quiz.html">Quiz</a>
    </section>
  </div>

  <!-- Overlay für Sidebar -->
  <div id="overlay" onclick="toggleSidebar()"></div>

  <!-- MAIN -->
  <main>
    <h1>Wähle ein Level</h1>

    <div class="level-grid" id="levelGrid">
      <!-- Level-Kacheln -->
    </div>

    <button id="reset-btn" onclick="resetSpiel()">Neu beginnen</button>
  </main>

  <!-- SCRIPT -->
  <script>
    function toggleSidebar() {
      const sidebar = document.getElementById("sidebar");
      const overlay = document.getElementById("overlay");
      sidebar.classList.toggle("active");
      overlay.style.display = sidebar.classList.contains("active") ? "block" : "none";
    }

    const grid = document.getElementById("levelGrid");
    const totalLevels = 8;

    for (let i = 1; i <= totalLevels; i++) {
      const tile = document.createElement("a");
      tile.classList.add("level-tile");
      tile.innerText = `Level ${i}`;
      tile.href = `spielen/level${i}.html`;

      const key = `level${i - 1}done`;
      const unlocked = i === 1 || localStorage.getItem(key) === "true";

      if (unlocked) {
        tile.classList.add("active");
      }

      grid.appendChild(tile);
    }

    function resetSpiel() {
      const sicher = confirm("Willst du wirklich neu beginnen? Dein Fortschritt wird gelöscht.");
      if (sicher) {
        localStorage.clear();
        location.reload();
      }
    }
  </script>
</body>
</html>
