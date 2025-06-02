<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8" />
  <title>Wald aufräumen</title>
  <link href="https://fonts.googleapis.com/css2?family=Baloo+2&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/include/level.css" />
  <style>
    body.level-page {
      margin: 0;
      font-family: 'Baloo 2', cursive;
      background-color: #22724E !important;
      color: #fff !important;
    }

    .muell {
      position: absolute;
      width: 60px;
      cursor: grab;
      z-index: 100;
    }

    .muell.dragging {
     
      cursor: grabbing;
    }

    #waldszene {
      position: relative;
    }

    #sprechblase-container {
      position: absolute;
      bottom: 2%;
      right: 15%;
      display: flex;
      align-items: flex-end;
      gap: 10px;
      z-index: 100;
      pointer-events: none;
    }

    #sprechblase {
      background: rgba(255, 249, 196, 0.5);
      backdrop-filter: blur(12px);
      padding: 20px 24px;
      border-radius: 20px;
      width: 360px;
      height: 160px;
      font-size: 28px;
      color: #222;
      box-shadow: 0 6px 12px rgba(0, 0, 0, 0.25);
      font-family: 'Baloo 2', sans-serif;
      pointer-events: auto;
      z-index: 110;
      position: relative;
    }

    .pfeile {
      position: absolute;
      bottom: 10px;
      right: 10px;
      display: flex;
      gap: 10px;
    }

    .pfeil {
      background: #ffeb3b;
      border: none;
      border-radius: 50%;
      font-size: 20px;
      width: 32px;
      height: 32px;
      cursor: pointer;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .level-buttons {
      margin-top: 8px;
      display: flex;
      justify-content: flex-end;
      gap: 10px;
      flex-wrap: wrap;
    }

    .level-buttons a {
      padding: 6px 12px;
      border-radius: 8px;
      font-weight: bold;
      font-size: 18px;
      text-decoration: none;
      white-space: nowrap;
      max-width: 48%;
      text-align: center;
      flex: 1 1 auto;
    }

    .weiter-btn {
      background: #ffeb3b;
      color: #222;
    }

    .zurueck-btn {
      background: #ccc;
      color: #222;
    }

    #counter {
      position: absolute;
      top: 10px;
      right: 20px;
      background: rgba(255, 255, 255, 0.2);
      padding: 10px 16px;
      border-radius: 10px;
      font-family: 'Baloo 2', sans-serif;
      font-size: 20px;
      z-index: 200;
      pointer-events: none;
    }

    @keyframes pulse {
      0% { transform: scale(1); background-color: rgba(255,255,255,0.2); }
      50% { transform: scale(1.2); background-color: rgba(255,255,255,0.5); }
      100% { transform: scale(1); background-color: rgba(255,255,255,0.2); }
    }

    #counter.pulse {
      animation: pulse 0.5s ease;
    }
  </style>
</head>
<body class="level-page">

  <a href="fuchsbau.php" id="zurueck-btn">← Zurück</a>

  <div id="waldszene" style="background-color: #22724E;">
    <img src="../bilder/aufrauemen_light.svg" alt="Waldszene" style="width:100%; height:auto;" />
    <img id="wald-gesund" src="../bilder/aufrauemen_fertig.svg"
         alt="Waldszene fertig"
         style="width:100%; height:auto; position:absolute; top:0; left:0; display:none; z-index:2;" />

    <!-- Müllobjekte -->
    <img src="../bilder/muell1.svg" class="muell" id="muell1" style="bottom:24%; left:12%;">
    <img src="../bilder/muell2.svg" class="muell" id="muell2" style="bottom:30%; left:38%;">
	  <img src="../bilder/muell3.svg" class="muell" id="muell2" style="bottom:5%; left:5%; width:80px;">
	  <img src="../bilder/muell4.svg" class="muell" id="muell2" style="bottom:10%; left:20%; width:30px;">
	  <img src="../bilder/muell5.svg" class="muell" id="muell2" style="bottom:2%; left:52%; width:30px;">
	  <img src="../bilder/muell6.svg" class="muell" id="muell2" style="bottom:10%; left:40%; width:70px;">
	  <img src="../bilder/muell7.svg" class="muell" id="muell2" style="bottom:31%; left:46%;">
	  <img src="../bilder/muell8.svg" class="muell" id="muell2" style="bottom:30%; left:76%; width:80px;">

    <!-- Eimer -->
    <img id="eimer-zu" src="../bilder/eimer_zu.svg" style="position:absolute; bottom:10%; left:25%; width:100px; z-index:10; display:block;" />
    <img id="eimer-auf" src="../bilder/eimer_auf.svg" style="position:absolute; bottom:10%; left:25%; width:100px; z-index:11; display:none;" />

    <!-- Counter -->
    <div id="counter">0/8 erledigt</div>

    <!-- Sprechblase -->
    <div id="sprechblase-container">
      <div id="sprechblase">
        <p id="textfeld">Oh nein, jemand hat den Wald verschmutzt! Ziehe den Müll in den Eimer!</p>
        <div class="pfeile">
          <button class="pfeil" id="prev" disabled>&larr;</button>
          <button class="pfeil" id="next">&rarr;</button>
        </div>
        <div class="level-buttons" id="abschluss-buttons" style="display: none;">
          <a href="spielen.php" class="weiter-btn">Weiter</a>
          <a href="fuchsbau.php" class="zurueck-btn" onclick="window.location.reload(); return false;">Nochmal spielen</a>
        </div>
      </div>
    </div>
  </div>

<script>
  const muellteile = document.querySelectorAll('.muell');
  const eimerZu = document.getElementById('eimer-zu');
  const eimerAuf = document.getElementById('eimer-auf');
  const eimerBereich = eimerAuf;
  const counter = document.getElementById('counter');
  const textfeld = document.getElementById('textfeld');
  const waldGesund = document.getElementById('wald-gesund');
  const abschlussButtons = document.getElementById('abschluss-buttons');
  const prevBtn = document.getElementById('prev');
  const nextBtn = document.getElementById('next');

  let gesammelt = 0;
  let dragging = null;
  let offsetX = 0;
  let offsetY = 0;

  const texte = [
    "Toll, der Wald ist wieder sauber und gesund!",
	"Auch die Tiere fühlen sich hier wieder wohl!",
    "Danke für deine Hilfe!"
  ];
  let currentText = 0;
  let levelAbgeschlossen = false;

  function updateText() {
    if (!levelAbgeschlossen) {
      // Noch nicht abgeschlossen → Pfeile sperren
      prevBtn.disabled = true;
      nextBtn.disabled = true;
      return;
    }

    textfeld.innerHTML = texte[currentText];
    prevBtn.disabled = currentText === 0;
    nextBtn.disabled = currentText === texte.length - 1;
    abschlussButtons.style.display = currentText === texte.length - 1 ? "flex" : "none";
  }

  prevBtn.addEventListener("click", () => {
    if (!levelAbgeschlossen) return;
    if (currentText > 0) {
      currentText--;
      updateText();
    }
  });

  nextBtn.addEventListener("click", () => {
    if (!levelAbgeschlossen) return;
    if (currentText < texte.length - 1) {
      currentText++;
      updateText();
    }
  });

  muellteile.forEach(muell => {
    muell.addEventListener('mousedown', e => {
      dragging = muell;
      const rect = muell.getBoundingClientRect();
      offsetX = e.clientX - rect.left;
      offsetY = e.clientY - rect.top;
      muell.classList.add('dragging');
      eimerZu.style.display = 'none';
      eimerAuf.style.display = 'block';
    });

    muell.addEventListener('dragstart', e => e.preventDefault());
  });

  document.addEventListener('mousemove', e => {
    if (dragging) {
      e.preventDefault();
      dragging.style.left = `${e.clientX - offsetX}px`;
      dragging.style.top = `${e.clientY - offsetY}px`;
    }
  });

  document.addEventListener('mouseup', e => {
    if (dragging) {
      const muell = dragging;
      muell.classList.remove('dragging');
      const muellRect = muell.getBoundingClientRect();
      const eimerRect = eimerBereich.getBoundingClientRect();

      const overlaps = !(
        muellRect.right < eimerRect.left ||
        muellRect.left > eimerRect.right ||
        muellRect.bottom < eimerRect.top ||
        muellRect.top > eimerRect.bottom
      );

      if (overlaps) {
        muell.style.display = 'none';
        gesammelt++;
        counter.textContent = `${gesammelt}/8 erledigt`;
        counter.classList.add('pulse');
        setTimeout(() => counter.classList.remove('pulse'), 500);

        if (gesammelt === 8) {
          waldGesund.style.display = 'block';
          levelAbgeschlossen = true;
          currentText = 0;
          updateText();
        }
      }

      eimerZu.style.display = 'block';
      eimerAuf.style.display = 'none';
      dragging = null;
    }
  });

  // Anfangszustand sicherstellen
  updateText();
</script>


</body>
</html>
