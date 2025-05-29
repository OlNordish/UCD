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
<body>

<!-- Sidebar & Navigation -->
<?php include($_SERVER['DOCUMENT_ROOT'] . '/include/headerneu.php'); ?>

<div id="waldszene">
  <div id="counter">0 / 3 Dinge entdeckt</div>
    
  <!-- Ansteuerung der SVG -->
  <?php include($_SERVER['DOCUMENT_ROOT'] . '/bilder/level3.svg'); ?>
    
  <a id="zurueck-btn" href="/kinder/spielen.php">← Zurück</a>

  <div id="sprechblase-container">
    <div id="sprechblase">
      <p id="textfeld">Lade...</p>
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
  window.erwartet = 3;
  window.levelDoneKey = "level3done";
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
      "O
