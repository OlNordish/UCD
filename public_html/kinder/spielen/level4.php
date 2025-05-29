<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Level 4</title>

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
  <?php include($_SERVER['DOCUMENT_ROOT'] . '/bilder/level4.svg'); ?>

  <a id="zurueck-btn" href="/kinder/spielen.php">← Zurück</a>

  <div id="sprechblase-container">
    <div id="sprechblase">
      <p id="textfeld">Lade...</p>
      <div class="pfeile">
        <button class="pfeil" id="prev" disabled>&larr;</button>
        <button class="pfeil" id="next" disabled>&rarr;</button>
      </div>
      <div class="level-buttons" id="level-buttons">
        <a href="level5.php" class="weiter-btn">Ja, weiter!</a>
        <a href="/kinder/spielen.php" class="zurueck-btn">Zurück zur Übersicht</a>
      </div>
    </div>
  </div>
</div>

<script>
  window.erwartet = 3;
  window.levelDoneKey = "level4done";
  window.klickbareElemente = ["laub", "eichhoernchen", "kaefer"];

  window.levelEinleitung = [
    "Wo ist der Specht geblieben?",
    "Die Insekten haben jetzt leichtes Spiel.",
    "Ein Tier ist besonders besorgt, aber wer?",
    "Klicke in den Wald, wenn du alles gefunden hast!"
  ];

  window.veränderungstexte = {
    laub: [
      "Überall liegt Laub!",
      "Den Bäumen geht es nicht gut.",
      "Sie verlieren alle Blätter."
    ],
    eichhoernchen: [
      "Das Eichhörnchen sieht traurig aus.",
      "Es sucht überall nach Essen.",
      "Von den Bäumen fallen keine Eicheln mehr."
    ],
    kaefer: [
      "Wow, so viele Käfer!",
      "Sie nagen überall die Baumrinde an!",
      "Das schadet den Bäumen sehr."
    ]
  };

  window.zusammenfassung = [
    "Gut beobachtet!",
    "Wenn der Specht fehlt, gibt es zu viele Borkenkäfer.",
    "Sie machen die Bäume kaputt!",
    "Ohne Bäume, keine Eicheln für die Eichhörnchen.",
    "Zum nächsten Level?"
  ];
</script>

<!-- Level JavaScript -->
<script src="/include/level.js"></script>

<!-- Sidebar & Navigation -->
<script src="/include/header.js"></script>

</body>
</html>
