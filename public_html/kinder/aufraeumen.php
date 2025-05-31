<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Aufräumen</title>
  <link rel="stylesheet" href="/include/header.css" />
  <link rel="stylesheet" href="/include/level.css" />
  <style>
    #waldszene {
      position: relative;
    }
    .muellbild {
      position: absolute;
      width: 20%; /* Skaliert auf 20 % */
      pointer-events: auto;
      user-select: none;
      z-index: 10;
      cursor: grab;
    }
    #dropzone {
      position: absolute;
      width: 10%;
      height: 12%;
      bottom: 20%;
      right: 14%;
      z-index: 20;
    }
    svg g#eimer_auf {
      display: none;
    }
    svg g#wald_gesund {
      display: none;
    }
    #counter {
      position: absolute;
      top: 10px;
      right: 10px;
      background: white;
      padding: 5px 10px;
      border-radius: 8px;
      font-weight: bold;
    }
  </style>
</head>
<body class="level-page">

<div id="waldszene">
  <div id="counter">0 / 8 Müll weggeworfen</div>
  <?php include($_SERVER['DOCUMENT_ROOT'] . '/bilder/aufraeumen.svg'); ?>

  <!-- Unsichtbares Dropziel -->
  <div id="dropzone"></div>

  <!-- Müll-SVGs einzeln -->
  <img id="muell1" class="muellbild" src="/bilder/muell1.svg" style="top: 10%; left: 10%;" />
  <img id="muell2" class="muellbild" src="/bilder/muell2.svg" style="top: 20%; left: 30%;" />
  <img id="muell3" class="muellbild" src="/bilder/muell3.svg" style="top: 30%; left: 50%;" />
  <img id="muell4" class="muellbild" src="/bilder/muell4.svg" style="top: 40%; left: 20%;" />
  <img id="muell5" class="muellbild" src="/bilder/muell5.svg" style="top: 50%; left: 60%;" />
  <img id="muell6" class="muellbild" src="/bilder/muell6.svg" style="top: 60%; left: 35%;" />
  <img id="muell7" class="muellbild" src="/bilder/muell7.svg" style="top: 70%; left: 15%;" />
  <img id="muell8" class="muellbild" src="/bilder/muell8.svg" style="top: 75%; left: 55%;" />

  <a id="zurueck-btn" href="/kinder/spielen.php">← Zurück</a>

  <div id="sprechblase-container">
    <div id="sprechblase">
      <p id="textfeld">Oh nein, jemand hat den Wald verschmutzt!<br>Hilfst du mir ihn aufzuräumen?<br><br>Ziehe einfach den Müll in den Mülleimer!</p>
      <div class="pfeile">
        <button class="pfeil" id="prev" disabled>&larr;</button>
        <button class="pfeil" id="next">&rarr;</button>
      </div>
      <div class="level-buttons" id="level-buttons" style="display: none;">
        <a href="/kinder/spielen.php" class="weiter-btn">Ja!</a>
        <a href="/kinder/aufraeumen.php" class="zurueck-btn">Nochmal aufräumen</a>
      </div>
    </div>
  </div>
</div>

<script>
document.addEventListener("DOMContentLoaded", () => {
  const erwartet = 8;
  let muellWeg = 0;
  const counterBox = document.getElementById("counter");
  const dropzone = document.getElementById("dropzone");
  const eimerZu = document.querySelector("svg g#eimer_zu");
  const eimerAuf = document.querySelector("svg g#eimer_auf");
  const fuchs = document.getElementById("fuchs");
  const waldGesund = document.getElementById("wald_gesund");
  const textfeld = document.getElementById("textfeld");
  const buttonsContainer = document.getElementById("level-buttons");

  const texts = [
    "Oh nein, jemand hat den Wald verschmutzt!",
    "Hilfst du mir ihn aufzuräumen?",
    "Ziehe einfach den Müll in den Mülleimer!"
  ];
  const summary = [
    "Klasse, du hast den Wald sauber gemacht!",
    "Möchtest du sehen wie sehr sich der Wald verändert?"
  ];
  let currentText = 0;
  let inSummary = false;

  function updateText() {
    if (inSummary) {
      textfeld.innerHTML = summary[currentText];
      document.getElementById("prev").disabled = currentText === 0;
      document.getElementById("next").disabled = currentText === summary.length - 1;
      buttonsContainer.style.display = currentText === summary.length - 1 ? "flex" : "none";
    } else {
      textfeld.innerHTML = texts[currentText];
      document.getElementById("prev").disabled = currentText === 0;
      document.getElementById("next").disabled = currentText === texts.length - 1;
    }
  }

  document.getElementById("prev").addEventListener("click", () => {
    if (currentText > 0) {
      currentText--;
      updateText();
    }
  });

  document.getElementById("next").addEventListener("click", () => {
    const max = inSummary ? summary.length - 1 : texts.length - 1;
    if (currentText < max) {
      currentText++;
      updateText();
    }
  });

  updateText();

  function istInDropzone(x, y) {
    const dz = dropzone.getBoundingClientRect();
    return x >= dz.left && x <= dz.right && y >= dz.top && y <= dz.bottom;
  }

  document.querySelectorAll(".muellbild").forEach((el) => {
    let offsetX, offsetY;

    el.addEventListener("mousedown", (e) => {
      e.preventDefault();

      const rect = el.getBoundingClientRect();
      offsetX = e.clientX - rect.left;
      offsetY = e.clientY - rect.top;

      el.style.zIndex = 1000;
      el.style.position = "absolute";
      el.style.pointerEvents = "none";

      if (eimerZu) eimerZu.style.display = "none";
      if (eimerAuf) eimerAuf.style.display = "inline";

      const moveAt = (pageX, pageY) => {
        el.style.left = pageX - offsetX + "px";
        el.style.top = pageY - offsetY + "px";
      };

      moveAt(e.pageX, e.pageY);

      const onMouseMove = (e) => moveAt(e.pageX, e.pageY);

      const onMouseUp = (e) => {
        document.removeEventListener("mousemove", onMouseMove);
        document.removeEventListener("mouseup", onMouseUp);

        if (istInDropzone(e.clientX, e.clientY)) {
          muellWeg++;
          counterBox.textContent = `${muellWeg} / ${erwartet} Müll weggeworfen`;
          counterBox.classList.remove("pulse");
          void counterBox.offsetWidth;
          counterBox.classList.add("pulse");

          el.remove(); // Müllbild entfernen

          if (muellWeg === erwartet) {
            if (fuchs) fuchs.style.display = "none";
            if (waldGesund) waldGesund.style.display = "inline";
            inSummary = true;
            currentText = 0;
            updateText();
          }
        } else {
          el.style.left = "";
          el.style.top = "";
        }

        el.style.pointerEvents = "auto";

        if (eimerZu) eimerZu.style.display = "inline";
        if (eimerAuf) eimerAuf.style.display = "none";
      };

      document.addEventListener("mousemove", onMouseMove);
      document.addEventListener("mouseup", onMouseUp);
    });

    el.ondragstart = () => false;
  });
});
</script>


</body>
</html>
