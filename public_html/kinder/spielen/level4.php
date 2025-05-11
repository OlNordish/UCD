<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Waldspiel – Level 4</title>

  <!-- Navigation + Styles -->
  <link rel="stylesheet" href="/include/headerneu.css">
  <link rel="stylesheet" href="/kinder/spielen/level.css">
</head>
<body>

<?php include($_SERVER['DOCUMENT_ROOT'] . '/include/headerneu.php'); ?>

<div id="waldszene">
  <div class="element tier" id="borkenkaefer" style="top: 20%; left: 20%;">🪲</div>
  <div class="element pflanze" id="baumgrau" style="top: 50%; left: 30%;">🌳</div>
  <div class="element tier" id="eichhoernchen" style="top: 35%; left: 60%;">🐿️</div>
  <div class="element pflanze" style="top: 60%; left: 75%;">🍂</div>

  <div id="sprechblase-container">
    <div id="sprechblase">
      <p id="textfeld">Fuchs: Klopf, klopf... oder doch nicht? Irgendetwas fehlt im Wald. Findest du die 3 Veränderungen?</p>
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
    localStorage.setItem("level4done", "true");
    window.location.href = "level5.php";
  }

  const veränderungen = {
    borkenkaefer: "Oh nein, Borkenkäfer nagen an den Bäumen – der Specht fehlt!",
    baumgrau: "Die Bäume werden grau und verlieren Blätter.",
    eichhoernchen: "Das Eichhörnchen findet kaum noch Nahrung – zu wenig gesunde Bäume."
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
          document.getElementById('textfeld').innerText = 'Fuchs: Stark! Du hast alle Veränderungen erkannt!';
          document.getElementById('weiter-btn').style.display = 'block';
        }
      }
    });
  });
</script>

</body>
</html>
