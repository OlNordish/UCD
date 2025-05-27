<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Level 4</title>
  <link rel="stylesheet" href="/include/headerneu.css" />
  <link rel="stylesheet" href="/include/level.css" />
  <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>

<?php include($_SERVER['DOCUMENT_ROOT'] . '/include/headerneu.php'); ?>

<div id="waldszene">
  <div id="counter">0 / 3 Dinge entdeckt</div>
  <?php include($_SERVER['DOCUMENT_ROOT'] . '/bilder/level6.svg'); ?>
  <a id="zurueck-btn" href="/kinder/spielen.php">← Zurück</a>

  <div id="sprechblase-container">
    <div id="sprechblase">
      <p id="textfeld">So viele Kaninchen! Irgendwas stimmt nicht...</p>
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
  // Konfiguration für Level 6
  window.erwartet = 3;
  window.levelDoneKey = "level6done";
  window.klickbareElemente = ["junge_baeume_kaputt","eichhoernchen_sad", "reh_sad"];

  window.levelEinleitung = [
	 "So viele Kaninchen! Irgendwas stimmt nicht...",
	  "Findest du alle 3 Veränderungen?",
	  "Klicke in den Wald, wenn du alles gefunden hast!",
  ];
  window.veränderungstexte = {
  junge_baeume_kaputt: [
    "DIe vielen Kaninchen haben alles angenagt!",
    "So wachsen die Bäumen nicht.",
    "Auch kleine Pflanzen und Blumen sind weg."
  ],
  eichhoernchen_sad: [
    "Das Eichhörnchen sieht traurig aus.",
    "Es sucht überall nach Essen.",
    "Die vielen Kaninchen mögen sind oft schneller."
  ],
  reh_sad: [
    "Das Reh guckt traurig.",
    "Ohne Sträucher und Pflanzen gibt es bald wenig Futter!",
    "Ob noch jemand hungrig ist?"
  ]
  };

  window.zusammenfassung = [
    "Wow du hast alles entdeckt!",
    "Bei so vielen Kaninchen ist ist schnell kein Futter übrig.",
    "Sträucher und Pflanzen versorgen Tiere mit Beeren, Wurzeln und Knospen",
	"Noch geht es den Kaninchen gut, aber auch sie haben bald kein Essen mehr.",
	"Möchtest du zum nächsten Level?"
  ];
</script>	
<script src="/include/level.js"></script>
<script src="/include/headerneu.js"></script>
</body>
</html>



	  
  