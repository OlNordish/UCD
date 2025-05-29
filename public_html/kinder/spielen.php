<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Levelauswahl</title>

  <!-- Sidebar & Navigation -->
  <link rel="stylesheet" href="/include/header.css">

  <style>
    body {
      margin: 0;
      font-family: 'Nunito', sans-serif;
      background: url('/bilder/bg1.svg') no-repeat center center fixed;
      background-size: cover;
      color: #ffffff;
    }

    main {
      display: flex;
      flex-direction: column;
      align-items: center;
      text-align: center;
      padding: 80px 20px 40px;
    }

    h1 {
      font-size: 2.5rem;
      margin-bottom: 1rem;
      text-shadow: 2px 2px 4px rgba(0,0,0,0.6);
    }

    .start-btn {
      margin: 20px 0;
      padding: 14px 30px;
      background-color: #3cb371;
      color: white;
      font-size: 18px;
      font-weight: bold;
      border: none;
      border-radius: 12px;
      cursor: pointer;
      transition: background-color 0.3s ease;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
    }

    .start-btn:hover {
      background-color: #2e8b57;
    }

    .level-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(120px, 1fr));
      gap: 20px;
      margin: 30px 0;
      width: 100%;
      max-width: 700px;
    }

    .level-tile {
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      font-size: 18px;
      font-weight: bold;
      border-radius: 10px;
      text-decoration: none;
      color: white;
      background-color: #2f4f4f;
      transition: background-color 0.3s;
      width: 100%;
      aspect-ratio: 1 / 1;
      pointer-events: none;
      opacity: 0.4;
    }

    .level-tile.active {
      pointer-events: auto;
      opacity: 1;
      background-color: #3cb371;
      cursor: pointer;
    }

    .level-tile.active:hover {
      background-color: #369d60;
    }

    #reset-btn {
      margin-top: 20px;
      padding: 12px 24px;
      background-color: #d9534f;
      color: white;
      border: none;
      border-radius: 10px;
      font-size: 16px;
      cursor: pointer;
      box-shadow: 0 4px 8px rgba(0,0,0,0.3);
    }

    #reset-btn:hover {
      background-color: #c9302c;
    }
  </style>
</head>
<body>

<!-- Sidebar & Navigation -->
<?php include($_SERVER['DOCUMENT_ROOT'] . '/include/headerneu.php'); ?>

<div id="overlay" onclick="toggleSidebar()"></div>

<main>
  <h1>Wähle ein Level</h1>

  <button class="start-btn" onclick="startSpiel()">🔴 Spiel starten</button>

  <div class="level-grid" id="levelGrid"></div>

  <button id="reset-btn" onclick="resetSpiel()">🔄 Neu beginnen</button>
</main>

<script>
  const grid = document.getElementById("levelGrid");
  const totalLevels = 8;

  for (let i = 1; i <= totalLevels; i++) {
    const tile = document.createElement("a");
    tile.classList.add("level-tile");
    tile.innerText = `Level ${i}`;
    tile.href = `/kinder/spielen/level${i}.php`;

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

  function startSpiel() {
    window.location.href = "/kinder/spielen/level1.php";
  }
</script>

<!-- Sidebar & Navigation -->
<script src="/include/header.js"></script>
	
</body>
</html>
