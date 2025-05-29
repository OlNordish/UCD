<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Levelauswahl</title>

  <!-- Sidebar & Navigation -->
  <link rel="stylesheet" href="/include/header.css">
<style>
	
  main {
  max-width: 1000px;
  margin: auto;
  padding: 60px 20px 40px;
  text-align: center;
}

h1 {
  font-size: 42px;
  margin-bottom: 60px;
  font-family: 'Baloo 2', cursive;
  color: #222;
}

.start-btn {
  margin-bottom: 0px;
  padding: 20px 40px;
  background-color: #3cb371;
  color: white;
  font-size: 28px;
  font-weight: bold;
  border: none;
  border-radius: 16px;
  cursor: pointer;
  transition: background-color 0.3s ease;
  box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
}

.start-btn:hover {
  background-color: #2e8b57;
}

.level-grid {
  display: grid;
  grid-template-columns: repeat(2, 1fr); /* groß & übersichtlich */
  gap: 40px;
  margin: 40px 0;
  justify-content: center;

}

.level-tile {
	
  padding: 8px; 
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 30px;
  font-weight: bold;
  border-radius: 40px;
  text-decoration: none;
  color: white;
  background-color: #2f4f4f;
  transition: background-color 0.3s;
  width: 100%;
  aspect-ratio: 1 / 1;
  pointer-events: none;
  opacity: 0.4;
  font-family: 'Baloo 2', cursive;
  box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
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
  margin-top: 30px;
  padding: 12px 28px;
  background-color: #d9534f;
  color: white;
  border: none;
  border-radius: 12px;
  font-size: 20px;
  cursor: pointer;
  box-shadow: 0 4px 8px rgba(0,0,0,0.3);
  font-family: 'Baloo 2', cursive;
}

#reset-btn:hover {
  background-color: #c9302c;
}

@media (min-width: 1024px) {
  .level-grid {
    grid-template-columns: repeat(4, 1fr); /* 4 auf großen Screens */
  }
}

@media (max-width: 768px) {
  .level-grid {
    grid-template-columns: repeat(2, 1fr);
    gap: 30px;
  }

  .level-tile {
    font-size: 30px;
  }

  .start-btn {
    font-size: 24px;
    padding: 16px 32px;
  }
}
	.level-tile.completed {
  background-color: #2c9c5f; /* dunkleres Grün */
  position: relative;
}


</style>
</head>
<body>

<!-- Sidebar & Navigation -->
<?php include($_SERVER['DOCUMENT_ROOT'] . '/include/header.php'); ?>

<div id="overlay" onclick="toggleSidebar()"></div>

<main>
  <h1>Wähle ein Level</h1>

  <button class="start-btn" onclick="startSpiel()">🎮 Spiel starten</button>

  <div class="level-grid" id="levelGrid"></div>

  <button id="reset-btn" onclick="resetSpiel()">🔄 Neu beginnen</button>
</main>

<script>
  const grid = document.getElementById("levelGrid");
  const totalLevels = 8;

 for (let i = 1; i <= totalLevels; i++) {
  const tile = document.createElement("a");
  const levelKey = `level${i}done`;
  const unlocked = i === 1 || localStorage.getItem(`level${i - 1}done`) === "true";
  const completed = localStorage.getItem(levelKey) === "true";

  tile.classList.add("level-tile");
  tile.href = `/kinder/spielen/level${i}.php`;

  // ✅ Text mit Haken
  tile.innerText = completed ? `✔ Level ${i}` : `Level ${i}`;

  // 📗 Style je Zustand
  if (unlocked) tile.classList.add("active");
  if (completed) tile.classList.add("completed");

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
  const totalLevels = 8;
  let lastUnlockedLevel = 1;

  for (let i = 2; i <= totalLevels; i++) {
    const key = `level${i - 1}done`; // z. B. level1done → prüft, ob Level 2 freigeschaltet ist
    if (localStorage.getItem(key) === "true") {
      lastUnlockedLevel = i;
    } else {
      break;
    }
  }

  window.location.href = `/kinder/spielen/level${lastUnlockedLevel}.php`;
}

</script>

<!-- Sidebar & Navigation -->
<script src="/include/header.js"></script>
	
</body>
</html>
