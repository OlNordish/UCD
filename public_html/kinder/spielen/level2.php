<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Level 2</title>

  <!-- Sidebar & Navigation -->
  <link rel="stylesheet" href="/include/headerneu.css">

  <!-- CSS für Level -->
  <link rel="stylesheet" href="/kinder/spielen/level.css">
</head>

<body>

<!-- Sidebar & Navigation -->
<?php include($_SERVER['DOCUMENT_ROOT'] . '/include/headerneu.php'); ?>

<div id="waldszene">
  <div class="element tier" id="eule" style="top: 15%; left: 15%;">🦉</div>
  <div class="element tier" id="fuchs" style="top: 35%; left: 25%;">🦊</div>
  <div class="element pflanze" id="samen" style="top: 55%; left: 20%;">🌰</div>
  <div class="element tier" style="top: 40%; left: 70%;">🐭</div>

  <div id="sprechblase-container">
    <div id="sprechblase">
      <p id="textfeld">Fuchs: Hmm... Was fehlt hier wohl? Finde die 3 Veränderungen im Wald!</p>
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
    localStorage.setItem("level2done", "true");
    window.location.href = "level3.php";
  }

  const veränderungen = {
    eule: "Die Eule sitzt hungrig – keine Mäuse mehr da!",
    fuchs: "Der Fuchs wundert sich – wo sind die kleinen Nager hin?",
    samen: "Viele Samen bleiben liegen – niemand frisst sie mehr."
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
</script>

<!-- Sidebar & Navigation -->
<script src="/include/headerneu.js"></script>
	
</body>
</html>
