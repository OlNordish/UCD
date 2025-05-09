<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Veränderung erkennen – Level 1</title>
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

    #waldszene {
      position: relative;
      width: 100%;
      height: calc(100vh - 60px);
    }

    .element {
      position: absolute;
      width: 80px;
      height: 80px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-weight: bold;
      color: white;
      border-radius: 10px;
      cursor: pointer;
    }

    .tier { background-color: #b22222; }
    .pflanze { background-color: #228b22; }
    .gefunden { outline: 4px solid yellow; }

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
      width: 300px;
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

    #fortschritt {
      position: absolute;
      top: 10px;
      right: 20px;
      background-color: white;
      padding: 5px 10px;
      border-radius: 10px;
      font-weight: bold;
    }

    #weiter-btn {
      display: none;
      margin-top: 10px;
      background-color: #2f4f4f;
      color: white;
      border: none;
      padding: 10px;
      border-radius: 10px;
      cursor: pointer;
    }

    #startseite-btn {
      position: absolute;
      top: 10px;
      left: 20px;
      background-color: #2f4f4f;
      color: white;
      border: none;
      padding: 8px 14px;
      border-radius: 10px;
      cursor: pointer;
    }
  </style>
</head>
<body>

  <!-- Header -->
  <nav>
    <div class="nav-left">
      <div class="burger-menu" onclick="toggleSidebar()">☰</div>
      <div>Wald</div>
    </div>
    <div class="nav-logo">Waldlogo</div>
  </nav>

  <div class="sidebar" id="sidebar">
    <section>
      <h3>Erwachsene</h3>
      <a href="../../erwachsene/bastelvorlagen.php">Bastelvorlagen</a>
      <a href="../../erwachsene/medientipps.php">Medientipps</a>
    </section>
    <section>
      <h3>Kinder</h3>
      <a href="../entdecken.php">Entdecken</a>
      <a href="../spielen.php">Spielen</a>
      <a href="../quiz.php">Quiz</a>
    </section>
  </div>

  <div id="overlay"
       style="position: fixed; top: 0; left: 0; width: 100%; height: 100%;
              background: rgba(0,0,0,0.5); z-index: 8; display: none;"
       onclick="toggleSidebar()">
  </div>

  <!-- Spielfläche -->
  <div id="waldszene">
    <div class="element tier" id="eichhoernchen" style="top: 15%; left: 10%;">E</div>
    <div class="element pflanze" id="eicheln" style="top: 40%; left: 20%;">S</div>
    <div class="element pflanze" id="baeume" style="top: 60%; left: 15%;">B</div>
    <div class="element tier" style="top: 30%; left: 70%;">M</div>

    <div id="sprechblase-container">
      <div id="sprechblase">
        <p id="textfeld">Fuchs: Hmm... Irgendwas stimmt hier nicht. Kannst du die 3 Veränderungen entdecken?</p>
        <button id="weiter-btn" onclick="nextLevel()">Weiter zum nächsten Level</button>
      </div>
      <div id="fuchs-avatar">F</div>
    </div>

    <div id="fortschritt">0 von 3 entdeckt</div>
    <button id="startseite-btn" onclick="zurStartseite()">Zur Startseite</button>
  </div>

  <!-- Skript -->
  <script>
    function toggleSidebar() {
      const sidebar = document.getElementById("sidebar");
      const overlay = document.getElementById("overlay");
      sidebar.classList.toggle("active");
      overlay.style.display = sidebar.classList.contains("active") ? "block" : "none";
    }

    const veränderungen = {
      eichhoernchen: "Weniger Eichhörnchen! Eicheln bleiben liegen, junge Bäumchen fehlen.",
      eicheln: "Mehr Samen bleiben liegen – niemand sammelt sie ein!",
      baeume: "Weniger junge Bäume wachsen, weil niemand die Samen verteilt."
    };

    let gefunden = 0;

    Object.keys(veränderungen).forEach(id => {
      const el = document.getElementById(id);
      el.addEventListener('click', () => {
        if (!el.classList.contains('gefunden')) {
          el.classList.add('gefunden');
          document.getElementById('textfeld').innerText = 'Fuchs: ' + veränderungen[id];
          gefunden++;
          document.getElementById('fortschritt').innerText = `${gefunden} von 3 entdeckt`;
          if (gefunden === 3) {
            document.getElementById('textfeld').innerText = 'Fuchs: Super! Du hast alle Veränderungen entdeckt!';
            document.getElementById('weiter-btn').style.display = 'block';
          }
        }
      });
    });

    function zurStartseite() {
      window.location.href = "../spielen.html";
    }

    function nextLevel() {
      localStorage.setItem("level1done", "true");
      window.location.href = "level2.html";
    }
  </script>
</body>
</html>
