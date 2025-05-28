<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Level 4</title>

  <!-- Sidebar & Navigation -->
  <link rel="stylesheet" href="/include/headerneu.css" />
    
  <!-- Level CSS -->
  <link rel="stylesheet" href="/include/level.css" />
</head>
<body>

<!-- Sidebar & Navigation -->
<?php include($_SERVER['DOCUMENT_ROOT'] . '/include/headerneu.php'); ?>

<div id="waldszene">
  <div class="element pflanze" id="altebaeume" style="top: 20%; left: 15%;">🌳</div>
  <div class="element tier" id="eichhoernchen" style="top: 35%; left: 25%;">🐿️</div>
  <div class="element tier" id="specht" style="top: 50%; left: 30%;">🐦</div>
  <div class="element tier" id="reh" style="top: 40%; left: 75%;">🦌</div>

  <div id="sprechblase-container">
    <div id="sprechblase">
      <p id="textfeld">Fuchs: Zu viele Rehe? Der Wald sieht verändert aus… Was fällt dir auf?</p>
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
    localStorage.setItem("level7done", "true");
    window.location.href = "level8.php";
  }

  const veränderungen = {
    altebaeume: "Nur noch alte Bäume – junge Triebe wurden alle gefressen.",
    eichhoernchen: "Das Eichhörnchen hat keinen Schutz mehr – es flüchtet.",
    specht: "Der Specht findet kaum noch gesunde Bäume – schlecht für ihn!"
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
          document.getElementById('textfeld').innerText = 'Fuchs: Klasse! Du hast den Wald gut beobachtet.';
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
