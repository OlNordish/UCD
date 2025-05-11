<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Waldspiel – Level 5</title>

  <!-- Navigation + Styles -->
  <link rel="stylesheet" href="/include/headerneu.css">
  <link rel="stylesheet" href="/kinder/spielen/level.css">
</head>
<body>

<?php include($_SERVER['DOCUMENT_ROOT'] . '/include/headerneu.php'); ?>

<div id="waldszene">
  <div class="element tier" id="kaninchen" style="top: 20%; left: 20%;">🐰</div>
  <div class="element tier" id="maus" style="top: 40%; left: 30%;">🐭</div>
  <div class="element pflanze" id="pflanze" style="top: 50%; left: 60%;">🌿</div>
  <div class="element tier" id="reh" style="top: 30%; left: 70%;">🦌</div>

  <div id="sprechblase-container">
    <div id="sprechblase">
      <p id="textfeld">Fuchs: Stell dir vor, ich wäre nicht mehr hier… Was würde im Wald passieren?</p>
      <button id="weiter-btn" onclick="nextLevel()">Weiter zum nächsten Level</button>
    </div>
    <div id="fuchs-avatar">🦊</div>
  </div>

  <div id="fortschritt">0 von 3 entdeckt</div>
  <button id="startseite-btn" onclick="zurStartseite()">Zurück zur Spielübersicht</button>
</div>

<script src="/include/headerneu.js"></script>
<script>
  function zurStartseite() {
    window.location.href = "/kinder/spielen.php";
  }

  function nextLevel() {
    localStorage.setItem("level5done", "true");
    window.location.href = "level6.php";
  }

  const veränderungen = {
    kaninchen: "Überall hoppeln Kaninchen – niemand hält sie auf!",
    maus: "Die Mäuse vermehren sich – es gibt keine Fressfeinde mehr.",
    pflanze: "Pflänzchen werden weggefressen – der Wald kann nicht nachwachsen."
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
          document.getElementById('textfeld').innerText = 'Fuchs: Sehr gut erkannt! Ohne mich läuft’s aus dem Ruder.';
          document.getElementById('weiter-btn').style.display = 'block';
        }
      }
    });
  });
</script>

</body>
</html>
