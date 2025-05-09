<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Wald aufräumen</title>
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
    }

    .sidebar a {
      display: block;
      color: white;
      text-decoration: none;
      margin: 5px 0;
      cursor: pointer;
    }

    .submenu-sidebar {
      position: fixed;
      top: 60px; /* Startet unter dem Header */
      left: -300px;
      width: 250px;
      height: calc(100% - 60px);
      background-color: #3a5f5f;
      color: white;
      padding: 20px;
      box-shadow: 2px 0 5px rgba(0,0,0,0.5);
      transition: left 0.3s ease-in-out;
      z-index: 8;
    }

    .submenu-sidebar.active {
      left: 250px;
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

    #wald {
      position: relative;
      width: 100%;
      height: calc(100vh - 60px);
      overflow: hidden;
    }

    .baum {
      position: absolute;
      width: 100px;
      height: 100px;
      background-color: #228b22;
      border-radius: 10px;
    }

    .muell {
      position: absolute;
      width: 60px;
      height: 60px;
      background-color: #696969;
      border-radius: 10px;
      text-align: center;
      line-height: 60px;
      font-weight: bold;
      color: white;
      cursor: grab;
    }

    .tier {
      position: absolute;
      width: 80px;
      height: 80px;
      border-radius: 10px;
      color: white;
      font-weight: bold;
      display: none;
      align-items: center;
      justify-content: center;
    }

    #eimer {
      position: absolute;
      bottom: 20px;
      left: 20px;
      width: 100px;
      height: 120px;
      background-color: #2f4f4f;
      border-radius: 10px;
      color: white;
      text-align: center;
      line-height: 120px;
      font-weight: bold;
    }

    #sprechblase-container {
      position: absolute;
      bottom: 20px;
      right: 20px;
      display: flex;
      align-items: flex-end;
      gap: 10px;
    }

    #sprechblase {
      background: #ffffaa;
      padding: 10px;
      border-radius: 10px;
      width: 280px;
      font-size: 16px;
    }

    #fuchs-avatar {
      width: 80px;
      height: 80px;
      background-color: #ff4500;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      font-weight: bold;
      border-radius: 10px;
      flex-shrink: 0;
    }
  </style>
</head>
<body>

<!-- HEADER -->
<nav>
  <div class="nav-left">
    <div class="burger-menu" onclick="toggleSidebar()">☰</div>
    <div>Wald aufräumen</div>
  </div>
  <a href="../index.php" class="nav-logo">🌳</a>
</nav>

<!-- SIDEBAR -->
<div class="sidebar" id="sidebar">
  <section>
    <h3><a href="../index.php">Startseite</a></h3>
  </section>
  <section>
    <h3><a href="../erwachsene.php">Erwachsene</a></h3>
    <a id="bastelvorlagen-link">Bastelvorlagen</a>
    <a href="../erwachsene/medientipps.php">Medientipps</a>
  </section>
  <section>
    <h3><a href="../kinder/kinder.php">Kinder</a></h3>
    <a href="../kinder/entdecken.php">Entdecken</a>
    <a href="../kinder/spielen.php">Spielen</a>
    <a href="../kinder/quiz.php">Quiz</a>
  </section>
</div>

<!-- SUBMENU SIDEBAR -->
<div class="submenu-sidebar" id="submenu">
  <h3>Bastelvorlagen</h3>
  <a href="#">Tiere des Waldes</a>
  <a href="#">Bäume und Pflanzen</a>
  <a href="#">Umweltschutz</a>
  <a href="#">Jahreszeiten und Wetter</a>
</div>

<!-- OVERLAY -->
<div id="overlay" onclick="toggleSidebar(); hideSubmenu();"></div>

<!-- WALDSZENE -->
<div id="wald">
  <div class="baum" style="top: 10%; left: 20%;"></div>
  <div class="baum" style="top: 50%; left: 60%;"></div>
  <div class="baum" style="top: 30%; left: 40%;"></div>

  <!-- Müll -->
  <div class="muell" draggable="true" id="muell1" style="top: 20%; left: 30%;">M</div>
  <div class="muell" draggable="true" id="muell2" style="top: 60%; left: 50%;">M</div>
  <div class="muell" draggable="true" id="muell3" style="top: 40%; left: 70%;">M</div>

  <!-- Tiere -->
  <div class="tier" id="eichhoernchen" style="top: 10%; left: 10%; background-color: #d2691e;">E</div>
  <div class="tier" id="eule" style="top: 20%; left: 60%; background-color: #4b0082;">Eu</div>
  <div class="tier" id="reh" style="top: 50%; left: 80%; background-color: #deb887; color:black;">R</div>

  <!-- Mülleimer -->
  <div id="eimer" ondragover="allowDrop(event)" ondrop="drop(event)">🗑️</div>

  <!-- Fuchs & Sprechblase -->
  <div id="sprechblase-container">
    <div id="fuchs-avatar">F</div>
    <div id="sprechblase">
      Fuchs: Oh nein, jemand hat den Wald verschmutzt!<br>
      Hilfst du mir, den Wald aufzuräumen?<br>
      Ziehe den Müll einfach in die Eimer!
    </div>
  </div>
</div>

<!-- SCRIPT -->
<script>
  function toggleSidebar() {
    const sidebar = document.getElementById("sidebar");
    const overlay = document.getElementById("overlay");
    sidebar.classList.toggle("active");
    overlay.style.display = sidebar.classList.contains("active") ? "block" : "none";
  }

  const bastelLink = document.getElementById("bastelvorlagen-link");
  const submenu = document.getElementById("submenu");

  bastelLink.addEventListener("mouseenter", () => {
    submenu.classList.add("active");
  });

  submenu.addEventListener("mouseleave", () => {
    submenu.classList.remove("active");
  });

  function hideSubmenu() {
    submenu.classList.remove("active");
  }

  // Drag and drop Müll
  const gesamtMuell = 3;
  let entfernt = 0;

  document.querySelectorAll(".muell").forEach(m => {
    m.addEventListener("dragstart", event => {
      event.dataTransfer.setData("text", event.target.id);
    });
  });

  function allowDrop(event) {
    event.preventDefault();
  }

  function drop(event) {
    event.preventDefault();
    const id = event.dataTransfer.getData("text");
    const element = document.getElementById(id);
    if (element) {
      element.remove();
      entfernt++;
      if (entfernt === gesamtMuell) {
        document.getElementById("sprechblase").innerText =
          "Fuchs: Super, jetzt ist der Wald wieder sauber. Schau mal, die Tiere sind zurückgekommen und fühlen sich wieder wohl!";
        document.querySelectorAll(".tier").forEach(t => t.style.display = "flex");
      }
    }
  }
</script>

</body>
</html>
