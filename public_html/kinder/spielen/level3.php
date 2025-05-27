<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Level 3</title>
  <link rel="stylesheet" href="/include/headerneu.css" />
	<link rel="stylesheet" href="/include/level.css" />
  <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>

<?php include($_SERVER['DOCUMENT_ROOT'] . '/include/headerneu.php'); ?>
<div id="waldszene">
  <div id="counter">0 / 3 Dinge entdeckt</div>
  <?php include($_SERVER['DOCUMENT_ROOT'] . '/bilder/level3.svg'); ?>
  <a id="zurueck-btn" href="/kinder/spielen.php">← Zurück</a>

  <div id="sprechblase-container">
    <div id="sprechblase">
      <p id="textfeld">Es war still letzte Nacht. Keine Eule ruft mehr. Einer ist besonders besorgt, aber wer?</p>
      <div class="pfeile">
        <button class="pfeil" id="prev" disabled>&larr;</button>
        <button class="pfeil" id="next" disabled>&rarr;</button>
      </div>
      <div class="level-buttons" id="level-buttons">
        <a href="level4.php" class="weiter-btn">Ja, weiter!</a>
        <a href="/kinder/spielen.php" class="zurueck-btn">Zurück zur Übersicht</a>
      </div>
    </div>
  </div>
</div>

<script>
const textfeld = document.getElementById("textfeld");
const nextBtn = document.getElementById("next");
const prevBtn = document.getElementById("prev");
const counterBox = document.getElementById("counter");
const buttonsContainer = document.getElementById("level-buttons");

const veränderungstexte = {
  maeuse: [
    "Die Mäuse vermehren sich stark.",
    "Überall huscht es im Gebüsch!",
    "Sie knabbern an Samen und Jungpflanzen."
  ],
  junge_baeume_kaputt: [
    "Viele junge Bäumchen werden angefressen.",
    "Sie haben keine Chance groß zu werden.",
    "Der Wald bekommt kaum noch Nachwuchs."
  ],
  specht: [
    "Der Specht blickt nervös auf den Boden.",
    "Er weiß: Zu viele Insekten und Nager stören das Gleichgewicht.",
    "Er braucht gesunde Bäume!"
  ]
};

let aktuellerText = ["Es war still letzte Nacht. Keine Eule ruft mehr. Einer ist besonders besorgt, aber wer?"];
let aktuellerIndex = 0;
const entdeckte = new Set();
let bereitZurZusammenfassung = false;
let inZusammenfassung = false;

function zeigeText(index) {
  textfeld.innerHTML = aktuellerText[index];
  prevBtn.disabled = index === 0;
  nextBtn.disabled = index >= aktuellerText.length - 1;

  if (inZusammenfassung && index === aktuellerText.length - 1) {
    buttonsContainer.style.display = "flex";
  } else {
    buttonsContainer.style.display = "none";
  }
}

function zeigeVeränderung(id) {
  inZusammenfassung = false;
  aktuellerText = veränderungstexte[id];
  aktuellerIndex = 0;
  zeigeText(0);

  document.querySelectorAll("g").forEach(g => g.classList.remove("active"));
  const el = document.getElementById(id);
  if (el) el.classList.add("active");

  if (!entdeckte.has(id)) {
    entdeckte.add(id);
    counterBox.innerText = `${entdeckte.size} / 3 Dinge entdeckt`;
    counterBox.classList.remove("pulse");
    void counterBox.offsetWidth;
    counterBox.classList.add("pulse");
  }

  if (entdeckte.size === 3) {
    bereitZurZusammenfassung = true;
  }
}

function zeigeZusammenfassung() {
  aktuellerText = [
    "Gut beobachtet!",
    "Wenn die Eule fehlt, gibt es zu viele Mäuse.",
    "Sie fressen Samen und Jungpflanzen – und der Specht wird nervös!",
	"Er hat in Zukunft weniger Bäume zum bewohnen.",
	  "Zum nächsten Level?"
	  
  ];
  aktuellerIndex = 0;
  inZusammenfassung = true;
  zeigeText(0);

  localStorage.setItem("level3done", "true");

  const fuchs = document.getElementById("fuchs");
  const fuchsHappy = document.getElementById("fuchs_happy");
  if (fuchs && fuchsHappy) {
    fuchs.style.display = "none";
    fuchsHappy.style.display = "inline";
    document.querySelectorAll("g").forEach(g => g.classList.remove("active"));
    fuchsHappy.classList.add("active", "wackel");
    setTimeout(() => fuchsHappy.classList.remove("wackel"), 600);
  }
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
  const fuchs = document.getElementById("fuchs");
  const fuchsHappy = document.getElementById("fuchs_happy");
  if (fuchs) fuchs.style.display = "inline";
  if (fuchsHappy) fuchsHappy.style.display = "none";

  ["maeuse", "junge_baeume_kaputt", "specht"].forEach(id => {
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

document.getElementById("waldszene").addEventListener("click", (e) => {
  const aufElement = e.target.closest("g");
  const aufBlase = e.target.closest("#sprechblase-container");

  if (!aufElement && !aufBlase) {
    document.querySelectorAll("g").forEach(g => g.classList.remove("active"));

    if (entdeckte.size === 3 && bereitZurZusammenfassung) {
      bereitZurZusammenfassung = false;
      zeigeZusammenfassung();
    } else {
      aktuellerText = ["Puh, es wird still in der Nacht. Keine Eule ruft mehr – was verändert sich?"];
      aktuellerIndex = 0;
      inZusammenfassung = false;
      zeigeText(0);
    }
  }
});
</script>

<script src="/include/headerneu.js"></script>
</body>
</html>
