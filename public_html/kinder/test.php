<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8" />
  <title>Wald aufräumen</title>
  <link href="https://fonts.googleapis.com/css2?family=Baloo+2&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/include/header.css" />
  <link rel="stylesheet" href="/include/level.css" />
  <style>
    .muell {
      position: absolute;
      width: 60px;
      cursor: grab;
      z-index: 100;
    }
    .muell.dragging {
      opacity: 0.7;
      cursor: grabbing;
    }
  </style>
</head>
<body class="level-page">

  <a href="#" id="zurueck-btn">Zurück</a>

  <div id="waldszene">
    <img src="../bilder/aufraeumen.svg" alt="Waldszene" style="width:100%; height:auto;" />

    <!-- Müllobjekte -->
    <img src="../bilder/muell1.svg" class="muell" id="muell1" style="top:20%; left:10%;">
    <img src="../bilder/muell2.svg" class="muell" id="muell2" style="top:30%; left:40%;">

    <!-- Eimer -->
    <img src="../bilder/fuchs.svg" id="eimer" style="position:absolute; bottom:10%; right:5%; width:100px;" />

    <!-- Counter -->
    <div id="counter">0/2 erledigt</div>

    <!-- Sprechblase -->
    <div id="sprechblase-container">
      <div id="sprechblase">
        <p id="sprechtext">Oh nein, jemand hat den Wald verschmutzt! Ziehe den Müll in den Eimer!</p>
      </div>
    </div>
  </div>

  <script>
    const muellteile = document.querySelectorAll('.muell');
    const eimer = document.getElementById('eimer');
    const counter = document.getElementById('counter');
    const sprechtext = document.getElementById('sprechtext');
    let gesammelt = 0;

    let dragging = null;
    let offsetX = 0;
    let offsetY = 0;

 muellteile.forEach(muell => {
  muell.addEventListener('mousedown', e => {
    dragging = muell;
    const rect = muell.getBoundingClientRect();
    offsetX = e.clientX - rect.left;
    offsetY = e.clientY - rect.top;
    muell.classList.add('dragging');
  });

  // Das hier ist neu – verhindert Ghost Drag Image:
  muell.addEventListener('dragstart', e => {
    e.preventDefault();
  });
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
        const eimerRect = eimer.getBoundingClientRect();

        const overlaps = !(
          muellRect.right < eimerRect.left ||
          muellRect.left > eimerRect.right ||
          muellRect.bottom < eimerRect.top ||
          muellRect.top > eimerRect.bottom
        );

        if (overlaps) {
          muell.style.display = 'none';
          gesammelt++;
          counter.textContent = `${gesammelt}/2 erledigt`;
          counter.classList.add('pulse');
          setTimeout(() => counter.classList.remove('pulse'), 500);

          if (gesammelt === 2) {
            sprechtext.textContent = 'Toll, der Wald ist wieder sauber!';
          }
        }

        dragging = null;
      }
    });
  </script>
</body>
</html>
