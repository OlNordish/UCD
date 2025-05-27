<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Level 2</title>
  <link rel="stylesheet" href="/include/headerneu.css" />
  <link rel="stylesheet" href="/include/level.css" />
  <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>

<?php include($_SERVER['DOCUMENT_ROOT'] . '/include/headerneu.php'); ?>

<div id="waldszene">
  <div id="counter">0 / 3 Dinge entdeckt</div>
  <?php include($_SERVER['DOCUMENT_ROOT'] . '/bilder/level2.svg'); ?>
  <a id="zurueck-btn" href="/kinder/spielen.php">← Zurück</a>

  <div id="sprechblase-container">
    <div id="sprechblase">
      <p id="textfeld">Oh nein! Die Mäuse sind weg – was passiert jetzt im Wald?</p>
      <div class="pfeile">
        <button class="pfeil" id="prev" disabled>&larr;</button>
        <button class="pfeil" id="next" disabled>&rarr;</button>
      </div>
      <div class="level-buttons" id="level-buttons">
        <a href="level3.php" class="weiter-btn">Ja, weiter!</a>
        <a href="/kinder/spielen.php" class="zurueck-btn">Zurück zur Übersicht</a>
      </div>
    </div>
  </div>
</div>
<script>
  // Konfiguration für Level 2
  window.erwartet = 3;
  window.levelDoneKey = "level2done";
  window.klickbareElemente = ["fuchs_sad", "junge_baeume", "eule_sad"];

  window.levelEinleitung = [
    "Oh nein! Die Mäuse sind weg.",
    "2 Tiere sind jetzt besonders traurig.",
	"Klicke in den Wald, wenn du alles gefunden hast!"  
  ];
  window.veränderungstexte = {
  fuchs_sad: [
      "Wir Füchse suchen verzweifelt.",
      "Wo sind die Mäuse hin?",
      "Mein Lieblingsfutter ist verschwunden!"
    ],
    junge_baeume: [
      "Mehr Pflanzen sprießen im Wald.",
      "Niemand knabbert die Samen an!",
      "Ob das gut geht?"
    ],
    eule_sad: [
      "Die Eule sitzt hungrig auf dem Ast.",
      "Auch sie findet keine Mäuse mehr.",
      "Das Gleichgewicht ist gestört."
    ]
  };

  window.zusammenfassung = [
     "Super, du hast alle Veränderungen entdeckt!",
    "Die Mäuse fehlen – dadurch gibt es zu viele Samen und leere Mägen.",
    "Das stört viele Tiere im Wald.",
    "Zum nächsten Level?"
  ];
</script>	
<script src="/include/level.js"></script>
<script src="/include/headerneu.js"></script>

</body>
</html>
