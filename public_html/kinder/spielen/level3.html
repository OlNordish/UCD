<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Veränderung erkennen – Level 3</title>
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
    #waldszene {
      position: relative;
      width: 100%;
      height: calc(100vh - 60px);
      background-color: #8fbc8f;
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
  <nav>
    <div class="nav-left">
      <div class="burger-menu">☰</div>
      <div>Level 3</div>
    </div>
    <div class="nav-logo">Waldlogo</div>
  </nav>

  <div id="waldszene">
    <div class="element tier" id="maeuse" style="top: 20%; left: 15%;">M</div>
    <div class="element pflanze" id="jungbaeume" style="top: 50%; left: 20%;">JB</div>
    <div class="element tier" id="specht" style="top: 35%; left: 60%;">S</div>
    <div class="element tier" style="top: 40%; left: 75%;">R</div>

    <div id="sprechblase-container">
      <div id="sprechblase">
        <p id="textfeld">Fuchs: Puh... In diesem Wald ist etwas aus dem Gleichgewicht geraten. Findest du die 3 Veränderungen?</p>
        <button id="weiter-btn" onclick="nextLevel()">Weiter zum nächsten Level</button>
      </div>
      <div id="fuchs-avatar">F</div>
    </div>
    <div id="fortschritt">0 von 3 entdeckt</div>
	<button id="startseite-btn" onclick="zurStartseite()">Zur Startseite</button>
  </div>

  <script>
    const veränderungen = {
      maeuse: "Überall Mäuse! Sie vermehren sich, weil keine Eule sie frisst.",
      jungbaeume: "Die Jungbäume werden angeknabbert – zu viele Mäuse!",
      specht: "Der Specht schaut nervös – es wimmelt am Boden vor Mäusen."
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
            document.getElementById('textfeld').innerText = 'Fuchs: Sehr gut! Du hast alles entdeckt.';
            document.getElementById('weiter-btn').style.display = 'block';
          }
        }
      });
    });
function zurStartseite() {
  window.location.href = "../spielen.html";
}

    function nextLevel() {
	  localStorage.setItem("level3done", "true");		
      window.location.href = "level4.html";
    }
  </script>
</body>
</html>
