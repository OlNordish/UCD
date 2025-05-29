<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Waldzeit – Startseite</title>
  <link rel="stylesheet" href="/include/header.css">

  <style>
    .intro-section {
      padding-top: 4rem;
      text-align: center;
    }

    .intro-section h1 {
      margin-bottom: 0.5rem;
    }

    .intro-section p {
      font-size: 1.2rem;
      color: #222;
    }

    .kinderbereich {
      display: flex;
      flex-direction: column;
      align-items: center;
      margin-top: 3rem;
    }

    .kinderbereich img {
      width: 180px;
      margin-bottom: 1.5rem;
    }

    .kinderbereich h2 {
      font-size: 2rem;
      color: #2f4f4f;
      margin-bottom: 0.5rem;
    }

    .kinderbereich p {
      font-size: 1.1rem;
      margin-bottom: 1.5rem;
      color: #333;
      text-align: center;
      max-width: 500px;
    }

    .button-links {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 1rem;
    }

    .button-links a {
      background-color: #4A6D4F;
      color: white;
      text-decoration: none;
      padding: 0.7rem 1.4rem;
      border-radius: 12px;
      font-weight: bold;
      font-size: 1rem;
      transition: background-color 0.3s ease;
    }

    .button-links a:hover {
      background-color: #365539;
    }

    .elternbereich {
      max-width: 700px;
      margin: 4rem auto 2rem;
      padding: 1.5rem 2rem;
      background-color: rgba(255, 255, 255, 0.9);
      border-radius: 16px;
      color: #2f4f4f;
      font-family: 'Nunito', sans-serif;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
    }

    .elternbereich h3 {
      margin-top: 0;
      font-size: 1.6rem;
      color: #333;
      font-family: 'Fredoka', sans-serif;
    }

    .elternbereich p {
      font-size: 1rem;
      line-height: 1.5;
      color: #444;
      margin-bottom: 1rem;
    }

    .elternbereich a {
      display: inline-block;
      margin-top: 0.5rem;
      color: #2f4f4f;
      font-weight: bold;
      text-decoration: underline;
    }

    .elternbereich a:hover {
      text-decoration: none;
    }
  </style>
</head>

<body>

<?php include($_SERVER['DOCUMENT_ROOT'] . '/include/header.php'); ?>

<section class="intro-section">
  <h1>🌳 Willkommen bei Waldzeit!</h1>
  <p>Entdecke den Wald spielerisch – für Kinder, Eltern und alle Naturentdecker.</p>
</section>

<section class="kinderbereich">
  <img src="/bilder/fuchs.svg" alt="Fuchs Illustration" />
  <h2>Kinderbereich</h2>
  <p>Spannendes für kleine Entdecker: Tiere, Pflanzen, Spiele &amp; mehr.</p>
  <div class="button-links">
    <a href="/kinder/entdecken.php">🔍 Entdecken</a>
    <a href="/kinder/spielen.php">🎲 Spielen</a>
    <a href="/kinder/aufraeumen.php">🧹 Aufräumen</a>
    <a href="/kinder/fuchsbau.php">👧 Übersicht</a>
  </div>
</section>

<section class="elternbereich">
  <h3>👨‍👩‍👧 Elternbereich</h3>
  <p>Dieser Bereich richtet sich an alle, die Kinder beim Entdecken des Waldes begleiten. Ob zu Hause oder draußen: Hier finden Erwachsene Anregungen, um Themen zu vertiefen und das Naturerlebnis gemeinsam zu gestalten.</p>
  <p>Von Mal- und Bastelvorlagen über Medientipps bis hin zu pädagogischen Ideen – das Begleitmaterial lädt dazu ein, spielerisch Umweltbewusstsein zu fördern und mit allen Sinnen in den Wald einzutauchen.</p>
  <a href="/erwachsene/begleitmaterial.php">Begleitmaterial öffnen</a>
</section>

<script src="/include/header.js"></script>
</body>
</html>
