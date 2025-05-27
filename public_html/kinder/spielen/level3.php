
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
      <p id="textfeld">Oh nein! Die Eule fehlt – was passiert jetzt im Wald?</p>
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
  // Konfiguration für Level 3
  window.erwartet = 3;
  window.levelDoneKey = "level3done";
  window.klickbareElemente = ["maeuse", "junge_baeume_kaputt", "specht"];

  window.levelEinleitung = [
	 "Es war still letzte Nacht.",
	  "Keine Eule ruft mehr.",
	  "Ein Tier ist besonders besorgt, aber wer?",
	  "Klicke in den Wald, wenn du alles gefunden hast!",
  ];
  window.veränderungstexte = {
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

  window.zusammenfassung = [
  "Gut beobachtet!",
    "Wenn die Eule fehlt, gibt es zu viele Mäuse.",
    "Sie fressen Samen und Jungpflanzen – und der Specht wird nervös!",
	"Er hat in Zukunft weniger Bäume zum bewohnen.",
	  "Zum nächsten Level?"
  ];
</script>	
<script src="/include/level.js"></script>
<script src="/include/headerneu.js"></script>
</body>
</html>



	  
  