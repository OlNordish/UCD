<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Level 1</title>

  <!-- Sidebar & Navigation -->
  <link rel="stylesheet" href="/include/headerneu.css">

  <!-- CSS für Level -->
  <link rel="stylesheet" href="/kinder/spielen/level.css">
</head>

<body>

<!-- Sidebar & Navigation -->
<?php include($_SERVER['DOCUMENT_ROOT'] . '/include/headerneu.php'); ?>

<div id="waldszene">
  <div class="element tier" id="maeuse" style="top: 20%; left: 15%;">🐭</div>
  <div class="element pflanze" id="jungbaeume" style="top: 50%; left: 20%;">🌱</div>
  <div class="element tier" id="specht" style="top: 35%; left: 60%;">🪵</div>
  <div class="element tier" style="top: 40%; left: 75%;">🦉</div>

  <div id="sprechblase-container">
    <div id="sprechblase">
      <p id="textfeld">Fuchs: Puh... In diesem Wald ist etwas aus dem Gleichgewicht geraten. Findest du die 3 Veränderungen?</p>
      <button id="weiter-btn" onclick="nextLevel()">Weiter zum nächsten Level</button>
    </div>
    <div id="fuchs-avatar">🦊</div>
  </div>

  <div id="fortschritt">0 von 3 entdeckt</div>
  <button id="startseite-btn" onclick="zurStartseite()">Zurück zur Spielübersicht</button>
</div>

<script>
  function zurStartseite() {
    window.location.href = "/kinder/spielen.php";
  }

  function nextLevel() {
    localStorage.setItem("level3done", "true");
    window.location.href = "level4.php";
  }

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
</script>

<!-- Sidebar & Navigation -->
<script src="/include/headerneu.js"></script>
	
</body>
</html>
