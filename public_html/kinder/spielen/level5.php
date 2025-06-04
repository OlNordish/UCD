   <!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Level 5</title>
	<link href="https://fonts.googleapis.com/css2?family=Baloo+2&display=swap" rel="stylesheet">

  <!-- Level CSS -->
  <link rel="stylesheet" href="/include/level.css" />
</head>
<body class="level-page">
<div id="waldszene">
  <div id="counter">0 / 3 Dinge entdeckt</div>

  <!-- Ansteuerung der SVG -->
  <?php include($_SERVER['DOCUMENT_ROOT'] . '/bilder/level5.svg'); ?>

  <a id="zurueck-btn" href="/kinder/spielen.php">← Zurück</a>

  <div id="sprechblase-container">
    <div id="sprechblase">
      <p id="textfeld">Lade...</p>
      <div class="pfeile">
        <button class="pfeil" id="prev" disabled>&larr;</button>
        <button class="pfeil" id="next" disabled>&rarr;</button>
      </div>
      <div class="level-buttons" id="level-buttons">
        <a href="level6.php" class="weiter-btn">Ja, weiter!</a>
        <a href="/kinder/spielen.php" class="zurueck-btn">Zurück zur Übersicht</a>
      </div>
    </div>
  </div>
</div>

<script>
  window.erwartet = 3;
  window.levelDoneKey = "level5done";
  window.klickbareElemente = ["kaninchen", "rehe", "letzte_voegel"];

  window.levelEinleitung = [
    "Der Wolf ist weg – und der Wald verändert sich. Was erkennst du?",
    "Ein Bewohner musste den Wald verlassen.",
    "In seinem Zuhause wohnen jetzt andere Tiere!",
    "Klicke in den Wald, wenn du alles gefunden hast!"
  ];

  window.veränderungstexte = {
    kaninchen: [
      "Die Kaninchen werden mehr und mehr.",
      "Bald gibt es nicht mehr genug Essen zu finden!",
      "Auch die Sträucher sind verschwunden."
    ],
    rehe: [
      "Zu viele Rehe – niemand hält sie in Schach.",
      "Sie fressen alle jungen Bäume und Pflanzen an!",
      "Es sind einfach zu viele geworden."
    ],
    letzte_voegel: [
      "Kaum noch junge Pflanzen – der Wald kann sich nicht erholen.",
      "Somit mussten Eule und Specht auf den letzten gesunden Baum ziehen.",
      "Für das Eichhörnchen gibt es hier keinen Platz mehr."
    ]
  };
 
  window.zusammenfassung = [
    "Wow! Gut beobachtet!",
    "Zu viele Rehe fressen alle jungen Bäume und Pflanzen.",
    "So kann der Wald nicht nachwachsen.",
	"Es gibt nicht genug Bäume zum Wohnen.",
    "Darum haben Specht und Eule den Baum des Eichhörnchens besetzt.", 
    "Zum nächsten Level?"
  ];
</script>

<!-- Level JavaScript -->
<script src="/include/level.js"></script>

</body>
</html>
