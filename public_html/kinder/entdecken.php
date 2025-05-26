<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Level 1</title>
  <link rel="stylesheet" href="/include/headerneu.css" />
  <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;700&display=swap" rel="stylesheet">
  <style>
    body {
      margin: 0;
      font-family: 'Comic Sans MS', 'Arial Rounded MT Bold', 'Fredoka', sans-serif;
      background-color: #22724E;
      color: #fff;
    }

    #waldszene {
      width: 100%;
      max-height: calc(100vh - 60px);
      position: relative;
    }

    svg {
      width: 100%;
      height: auto;
      display: block;
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
      -webkit-backdrop-filter: blur(12px);
      padding: 20px 24px;
      border-radius: 20px;
      width: 360px;
      height: 160px;
      font-size: 28px;
      color: #222;
      box-shadow: 0 6px 12px rgba(0, 0, 0, 0.25);
      line-height: 1.5;
      overflow: hidden;
      position: relative;
      font-family: 'Baloo 2', sans-serif;
      pointer-events: auto;
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
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
    }

    .pfeil:disabled {
      opacity: 0.4;
      cursor: default;
    }

    g.active {
      filter: drop-shadow(0 0 10px yellow);
      transform: scale(1.1);
      transform-box: fill-box;
      transform-origin: center;
      transition: transform 0.3s ease;
    }

    #counter {
      position: absolute;
      top: 10px;
      right: 20px;
      background: rgba(255,255,255,0.2);
      padding: 10px 16px;
      border-radius: 10px;
      font-family: 'Baloo 2', sans-serif;
      font-size: 20px;
      z-index: 200;
      pointer-events: none;
    }

    @keyframes wackeln {
      0%, 100% { transform: rotate(0deg); }
      25% { transform: rotate(2deg); }
      75% { transform: rotate(-2deg); }
    }

    g.wackel {
      transform-box: fill-box;
      transform-origin: center;
      animation: wackeln 0.6s ease;
    }
  </style>
</head>
<body>

<?php include($_SERVER['DOCUMENT_ROOT'] . '/include/headerneu.php'); ?>
<div id="waldszene">
  <div id="counter">0 / 3 Dinge entdeckt</div>

  <?php include($_SERVER['DOCUMENT_ROOT'] . '/bilder/level1.svg'); ?>

  <div id="sprechblase-container">
    <div id="sprechblase">
      <p id="textfeld">Oh nein, das Eichhörnchen fehlt! Was verändert sich jetzt im Wald?</p>
      <div class="pfeile">
        <button class="pfeil" id="prev" disabled>&larr;</button>
        <button class="pfeil" id="next" disabled>&rarr;</button>
      </div>
    </div>
  </div>
</div>

<script>
const textfeld = document.getElementById("textfeld");
const nextBtn = document.getElementById("next");
const prevBtn = document.getElementById("prev");
const counterBox = document.getElementById("counter");

const entdeckte = new Set();
let aktuellerText = ["Oh nein, das Eichhörnchen fehlt! Was verändert sich jetzt im Wald?"];
let aktuellerIndex = 0;

const veränderungstexte = {
  maus: [
    "Mehr Mäuse unterwegs.",
    "Sie finden viele Eicheln, die sonst eingesammelt würden.",
    "Die Samen werden gefressen."
  ],
  eicheln: [
    "Überall liegen Eicheln herum.",
    "Niemand sammelt sie ein – das ist ungewöhnlich.",
    "Wachsen daraus neue Bäume?"
  ],
  baeume: [
    "Weniger junge Bäumchen!",
    "Die Eicheln bleiben liegen, aber nichts wächst.",
    "Fehlt da nicht jemand?"
  ]
};

function zeigeText(index) {
  textfeld.innerHTML = aktuellerText[index];
  prevBtn.disabled = index === 0;
  nextBtn.disabled = index >= aktuellerText.length - 1;
}

function zeigeVeränderung(id) {
  aktuellerText = veränderungstexte[id];
  aktuellerIndex = 0;
  zeigeText(0);

  document.querySelectorAll("g").forEach(g => g.classList.remove("active"));
  const el = document.getElementById(id);
  if (el) el.classList.add("active");

  if (!entdeckte.has(id)) {
    entdeckte.add(id);
    counterBox.innerText = `${entdeckte.size} / 3 Dinge entdeckt`;
  }

  if (entdeckte.size === 3) {
    setTimeout(() => {
      aktuellerText = [
        "Du hast es herausgefunden!",
        "Weil das Eichhörnchen fehlt, bleiben die Eicheln liegen.",
        "Es wachsen keine neuen Bäume mehr.",
        "Willst du weiter ins nächste Level?",
        '<a href="level2.php" style="display:inline-block;margin-top:10px;padding:8px 16px;background:#ffeb3b;color:#222;border-radius:10px;font-weight:bold;text-decoration:none;">Ja, weiter!</a>'
      ];
      aktuellerIndex = 0;
      zeigeText(0);

      // optional happy fuchs anzeigen
      const fuchs = document.getElementById("fuchs");
      const fuchsHappy = document.getElementById("fuchs_happy");
      if (fuchs && fuchsHappy) {
        fuchs.style.display = "none";
        fuchsHappy.style.display = "inline";
        fuchsHappy.classList.add("active", "wackel");
        setTimeout(() => fuchsHappy.classList.remove("wackel"), 600);
      }
    }, 500);
  }
}

document.addEventListener("DOMContentLoaded", () => {
  ["maus", "eicheln", "baeume"].forEach(id => {
    const el = document.getElementById(id);
    if (el) {
      el.style.cursor = "pointer";
      el.addEventListener("click", e => {
        e.stopPropagation();
        zeigeVeränderung(id);
      });
    }
  });

  zeigeText(0);
});

nextBtn.addEventListener("click", () => {
  if (aktuellerIndex < aktuellerText.length - 1) {
    aktuellerIndex++;
    zeigeText(aktuellerIndex);
  }
});

prevBtn.addEventListener("click", () => {
  if (aktuellerIndex > 0) {
    aktuellerIndex--;
    zeigeText(aktuellerIndex);
  }
});

document.getElementById("waldszene").addEventListener("click", (e) => {
  const aufElement = e.target.closest("g");
  const aufBlase = e.target.closest("#sprechblase-container");

  if (!aufElement && !aufBlase) {
    document.querySelectorAll("g").forEach(g => g.classList.remove("active"));
    aktuellerText = ["Oh nein, das Eichhörnchen fehlt! Was verändert sich jetzt im Wald?"];
    aktuellerIndex = 0;
    zeigeText(0);
  }
});
</script>

<script src="/include/headerneu.js"></script>
</body>
</html>
