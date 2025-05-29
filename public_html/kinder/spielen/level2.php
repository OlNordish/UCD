<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Level 2</title>

  <!-- Sidebar & Navigation -->
  <link rel="stylesheet" href="/include/header.css" />
    
  <!-- Level CSS -->
  <link rel="stylesheet" href="/include/level.css" />
</head>
<body class="level-page">

<!-- Sidebar & Navigation -->
<?php include($_SERVER['DOCUMENT_ROOT'] . '/include/header.php'); ?>

<div id="waldszene">
  <div id="counter">0 / 3 Dinge entdeckt</div>

  <!-- Ansteuerung der SVG -->
  <?php include($_SERVER['DOCUMENT_ROOT'] . '/bilder/level2.svg'); ?>

  <a id="zurueck-btn" href="/kinder/spielen.php">← Zurück</a>

  <div id="sprechblase-container">
    <div id="sprechblase">
      <p id="textfeld">Lade...</p>
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
  window.erwartet = 3;
  window.levelDoneKey = "level2done";
  window.klickbareElemente = ["fuchs_sad", "junge_baeume", "eule_sad"];

  window.levelEinleitung = [
    "Oh nein! Die Mäuse sind weg.",
    "Zwei Tiere sind jetzt besonders traurig.",
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
      "Ohne Mäuse wachsen mehr Bäume."
    ],
    eule_sad: [
      "Ich finde keine Nahrung mehr.",
      "Die Nächte sind still geworden.",
      "Keine Mäuse, kein Futter für mich."
    ]
  };

  window.zusammenfassung = [
    "Du hast es erkannt!",
    "Ohne Mäuse finden viele Tiere kein Futter.",
    "Und doch: Mehr junge Bäume wachsen nun heran.",
    "Weiter zum nächsten Level?"
  ];
</script>

<!-- Level JavaScript -->
<script src="/include/level.js"></script>

<!-- Sidebar & Navigation -->
<script src="/include/header.js"></script>

</body>
</html>
