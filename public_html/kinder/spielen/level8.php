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
  <div class="element tier" id="reh" style="top: 25%; left: 15%;">🦌</div>
  <div class="element tier" id="kaninchen" style="top: 35%; left: 25%;">🐰</div>
  <div class="element pflanze" id="jungpflanzen" style="top: 60%; left: 20%;">🌱</div>
  <div class="element pflanze" id="lichterwald" style="top: 50%; left: 70%;">🌤️</div>

  <div id="sprechblase-container">
    <div id="sprechblase">
      <p id="textfeld">Fuchs: Der Wolf ist weg – und der Wald verändert sich. Was erkennst du?</p>
      <button id="weiter-btn" onclick="nextLevel()">Fertig!</button>
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
    localStorage.setItem("level8done", "true");
    window.location.href = "abschluss.php";
  }

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
</script>

<!-- Sidebar & Navigation -->
<script src="/include/headerneu.js"></script>
	
</body>
</html>