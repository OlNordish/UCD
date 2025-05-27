
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
  <?php include($_SERVER['DOCUMENT_ROOT'] . '/bilder/level4.svg'); ?>
  <a id="zurueck-btn" href="/kinder/spielen.php">← Zurück</a>

  <div id="sprechblase-container">
    <div id="sprechblase">
      <p id="textfeld">Oh nein! Der Specht fehlt – was passiert jetzt im Wald?</p>
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
  // Konfiguration für Level 4
  window.erwartet = 3;
  window.levelDoneKey = "level4done";
  window.klickbareElemente = ["laub", "eichhoernchen", "kaefer"];

  window.levelEinleitung = [
	 "Wo ist der Specht geblieben?",
	  "Die Insekten haben jetzt leichtes spiel",
	  "Ein Tier ist besonders besorgt, aber wer?",
	  "Klicke in den Wald, wenn du alles gefunden hast!",
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
<script src="/include/level.js"></script>
<script src="/include/headerneu.js"></script>
</body>
</html>



	  
  