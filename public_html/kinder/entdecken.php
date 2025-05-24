<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Entdecken</title>
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

    /* Sprechblase über der Szene */
    #sprechblase-container {
      position: absolute;
      bottom: 2%;
      right: 15%;
      display: flex;
      align-items: flex-end;
      gap: 10px;
      z-index: 100;
      pointer-events: none; /* verhindert versehentliche Klickblockaden */
    }

    #sprechblase {
      background: rgba(255, 249, 196, 0.5); /* sanft gelblich-transparent */
      backdrop-filter: blur(12px);         /* Milchglas-Unschärfe */
      -webkit-backdrop-filter: blur(12px); /* Safari Support */
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
      pointer-events: auto; /* erlaubt wieder Klicks auf die Buttons */
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
  <div id="counter">0 / 9 Tiere entdeckt</div>

  <!-- VG-Szene inline -->
  <?php include($_SERVER['DOCUMENT_ROOT'] . '/bilder/entdecken.svg'); ?>

  <!-- Sprechblase -->
  <div id="sprechblase-container">
    <div id="sprechblase">
      <p id="textfeld">Klicke auf ein Tier, um mit ihm zu reden!</p>
      <div class="pfeile">
        <button class="pfeil" id="prev" disabled>&larr;</button>
        <button class="pfeil" id="next" disabled>&rarr;</button>
      </div>
    </div>
  </div>
</div>

<script>
const tierTexte = {
  wolf: ["Auuu! Ich bin der Wolf.", "Ich jage Kaninchen und Rehe, damit der Wald im Gleichgewicht bleibt.", "Ich bin wichtig für den Wald – auch wenn viele mich fürchten."],
  specht: ["Klopf, klopf – ich bin der Specht!", "Ich hacke mit meinem Schnabel Löcher in Bäume, um Insekten zu fressen."],
  reh: ["Grüß dich! Ich bin das Reh.", "Am liebsten fresse ich frische Triebe und junge Blätter.", "Ich passe gut auf die kleinen Bäumchen auf...", "aber wenn es zu wenig gibt, wird es schwer."],
  maus: ["Pieps! Ich bin die kleine Maus.", "Am liebsten knabbere ich an Körnern und Samen.", "Aber ich muss gut aufpassen...", "der Fuchs und die Eule würden mich sonst schnell fressen!"],
  kaninchen: ["Hopp, hopp! Ich bin das flinke Kaninchen.", "Ich knabbere gerne an jungen Pflanzen und Kräutern.", "Mein größter Feind ist der Fuchs – deshalb bleibe ich immer wachsam!"],
  eule: ["Huhuu! Ich bin die Eule.", "Nachts jage ich Mäuse, Frösche und kleine Vögel.", "Mein bester Freund? Die dunkle Nacht – dann bin ich am stärksten!"],
  fuchs: ["Hallo! Ich bin der schlaue Fuchs.", "Ich esse Mäuse, Kaninchen und manchmal auch Beeren.", "Die Maus ist zwar lecker – aber ich respektiere auch meine Nachbarn im Wald!"],
  eichhoernchen: ["Hallo, ich bin das Eichhörnchen!", "Ich liebe es, Nüsse, Samen und Beeren zu futtern."],
  kaefer: ["Ich bin der Borkenkäfer.", "Die Baumrinde schmeckt super!", "Aber Vorsicht – zu viele von uns schaden dem Wald."]
};

let aktuellerText = ["Klicke auf ein Tier, um mit ihm zu reden!"];
let aktuellerIndex = 0;
const bereitsGesehen = new Set();
const textfeld = document.getElementById("textfeld");
const nextBtn = document.getElementById("next");
const prevBtn = document.getElementById("prev");
const counterBox = document.getElementById("counter");

const fuchs = document.getElementById("fuchs");
const fuchsHappy = document.getElementById("fuchs_happy");
if (fuchsHappy) fuchsHappy.style.display = "none";

function zeigeText(index) {
  textfeld.innerHTML = aktuellerText[index];
  prevBtn.disabled = index === 0;
  nextBtn.disabled = index >= aktuellerText.length - 1;
}

function zeigeTierText(tierId) {
  aktuellerText = tierTexte[tierId] || ["🤷‍♂️ Kein Text gefunden."];
  aktuellerIndex = 0;
  zeigeText(aktuellerIndex);

  document.querySelectorAll("g").forEach(g => g.classList.remove("active"));
  const el = document.getElementById(tierId);
  if (el) el.classList.add("active");

  if (!bereitsGesehen.has(tierId)) {
    bereitsGesehen.add(tierId);
    counterBox.innerText = `${bereitsGesehen.size} / 9 Tiere entdeckt`;
  }

  // kein automatischer Umschalttext hier – das machen wir später
}

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

document.addEventListener("DOMContentLoaded", () => {
  Object.keys(tierTexte).forEach(id => {
    const el = document.getElementById(id);
    if (el) {
      el.style.cursor = "pointer";
      el.addEventListener("click", e => {
        e.stopPropagation();
        zeigeTierText(id);
      });
    }
  });

  aktuellerText = ["Klicke auf ein Tier, um mit ihm zu reden!"];
  aktuellerIndex = 0;
  zeigeText(0);
});

document.getElementById("waldszene").addEventListener("click", (event) => {
  const klickAufTier = event.target.closest("g");
  const klickAufSprechblase = event.target.closest("#sprechblase-container");

  if (!klickAufTier && !klickAufSprechblase) {
    document.querySelectorAll("g").forEach(g => g.classList.remove("active"));

    if (bereitsGesehen.size === 9) {
      aktuellerText = [
        "Du hast alle Tiere kennengelernt!",
        "Möchtest du mir helfen, den Wald aufzuräumen?",
        '<a href="aufraeumen.php" style="display:inline-block;margin-top:10px;padding:8px 16px;background:#ffeb3b;color:#222;border-radius:10px;font-weight:bold;text-decoration:none;">Ja, ich helfe dir!</a>'
      ];
      aktuellerIndex = 0;
      zeigeText(aktuellerIndex);

if (fuchs && fuchsHappy) {
  fuchs.style.display = "none";
  fuchsHappy.style.display = "inline";

  // alle anderen Tiere deselektieren
  document.querySelectorAll("g").forEach(g => g.classList.remove("active"));

  // happy Fuchs hervorheben
  fuchsHappy.classList.add("active", "wackel");

  setTimeout(() => {
    fuchsHappy.classList.remove("wackel");
  }, 600);
}

    } else {
      aktuellerText = ["Klicke auf ein Tier, um mit ihm zu reden!"];
      aktuellerIndex = 0;
      zeigeText(aktuellerIndex);
    }
  }
});
</script>

<script src="/include/headerneu.js"></script>
</body>
</html>
