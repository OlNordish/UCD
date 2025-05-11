<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Waldspiel – Level 1</title>

  <!-- Navigation + Style -->
  <link rel="stylesheet" href="/include/headerneu.css">
  <link rel="stylesheet" href="/kinder/spielen/level.css">
</head>

<body>

<?php include($_SERVER['DOCUMENT_ROOT'] . '/include/headerneu.php'); ?>

<div id="waldszene">
  <div class="element tier" id="eichhoernchen" style="top: 15%; left: 10%;">🐿️</div>
  <div class="element pflanze" id="eicheln" style="top: 40%; left: 20%;">🌰</div>
  <div class="element pflanze" id="baeume" style="top: 60%; left: 15%;">🌱</div>
  <div class="element tier" style="top: 30%; left: 70%;">🐭</div>

  <div id="sprechblase-container">
    <div id="sprechblase">
      <p id="textfeld">Fuchs: Hmm... Irgendwas stimmt hier nicht. Kannst du die 3 Veränderungen entdecken?</p>
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
    localStorage.setItem("level1done", "true");
    window.location.href = "level2.php";
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
</script>
</body>
</html>
