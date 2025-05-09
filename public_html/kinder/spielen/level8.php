<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Veränderung erkennen – Level 8</title>
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
      <div>Level 8</div>
    </div>
    <div class="nav-logo">Waldlogo</div>
  </nav>

  <div id="waldszene">
    <div class="element tier" id="reh" style="top: 25%; left: 15%;">R</div>
    <div class="element tier" id="kaninchen" style="top: 35%; left: 25%;">K</div>
    <div class="element pflanze" id="jungpflanzen" style="top: 60%; left: 20%;">JP</div>
    <div class="element pflanze" id="lichterwald" style="top: 50%; left: 70%;">LW</div>

    <div id="sprechblase-container">
      <div id="sprechblase">
        <p id="textfeld">Fuchs: Der Wolf ist weg – und der Wald verändert sich. Was erkennst du?</p>
        <button id="weiter-btn" onclick="nextLevel()">Fertig!</button>
      </div>
      <div id="fuchs-avatar">F</div>
    </div>
    <div id="fortschritt">0 von 3 entdeckt</div>
	  <button id="startseite-btn" onclick="zurStartseite()">Zur Startseite</button>
  </div>

  <script>
    const veränderungen = {
      reh: "Zu viele Rehe – niemand hält sie in Schach.",
      kaninchen: "Auch die Kaninchen werden mehr und mehr.",
      jungpflanzen: "Kaum noch junge Pflanzen – der Wald kann sich nicht erholen.",
      lichterwald: "Der Wald wird licht – überall fehlt Nachwuchs."
    };

    let gefunden = 0;
    const max = 3;
    const richtigeElemente = ["reh", "kaninchen", "jungpflanzen"];

    richtigeElemente.forEach(id => {
      const el = document.getElementById(id);
      el.addEventListener("click", () => {
        if (!el.classList.contains("gefunden")) {
          el.classList.add("gefunden");
          document.getElementById("textfeld").innerText = "Fuchs: " + veränderungen[id];
          gefunden++;
          document.getElementById("fortschritt").innerText = `${gefunden} von ${max} entdeckt`;
          if (gefunden === max) {
            document.getElementById("textfeld").innerText = "Fuchs: Sehr gut! Jetzt weißt du, wie wichtig der Wolf ist.";
            document.getElementById("weiter-btn").style.display = "block";
          }
        }
      });
    });
function zurStartseite() {
  window.location.href = "../spielen.html";
}
 
	  function nextLevel() {
  localStorage.setItem("level8done", "true");
  window.location.href = "abschluss.html";
}

  </script>
</body>
</html>
