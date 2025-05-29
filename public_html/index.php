<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Waldzeit – Startseite</title>

  <!-- Sidebar & Navigation -->
  <link rel="stylesheet" href="/include/header.css">

  <style>
    p.intro {
      font-size: 1.2rem;
      text-align: center;
      margin-bottom: 2.5rem;
      color: #4A4A4A;
    }

    .entry-grid {
      display: flex;
      flex-direction: column;
      gap: 2rem;
      max-width: 800px;
      margin: 0 auto;
    }

    .entry-box {
      display: grid;
      grid-template-columns: auto 1fr;
      gap: 1.5rem;
      align-items: center;
      background-color: rgba(255, 255, 255, 0.95);
      color: #333;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.3);
      padding: 1.5rem;
    }

    .entry-icon {
      width: 80px;
      height: 80px;
      object-fit: contain;
      background: #f0f0f0;
      border-radius: 8px;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.25);
    }

    .entry-content h2 {
      font-size: 1.4rem;
      margin: 0 0 0.5rem;
      color: #5A3E36;
    }

    .entry-content p {
      margin: 0 0 0.75rem;
      color: #3C3C3C;
    }

    .entry-content .button-links {
      display: flex;
      gap: 1rem;
      flex-wrap: wrap;
      margin-top: 0.5rem;
    }

    .entry-content a {
      padding: 0.5rem 1rem;
      background-color: #4A6D4F;
      color: white;
      text-decoration: none;
      border-radius: 6px;
      font-weight: bold;
      transition: background-color 0.3s ease;
    }

    .entry-content a:hover {
      background-color: #365539;
    }
  </style>
</head>

<body>

<!-- Sidebar & Navigation -->
<?php include($_SERVER['DOCUMENT_ROOT'] . '/include/headerneu.php'); ?>

<main>
  <h1>🌳 Willkommen bei Waldzeit!</h1>
  <p class="intro">Entdecke den Wald spielerisch – für Kinder, Eltern und alle Naturentdecker.</p>

  <div class="entry-grid">
    
    <div class="entry-box">
      <img src="/bilder/fuchs.svg" alt="Fuchs Icon" class="entry-icon" />
      <div class="entry-content">
        <h2>Kinderbereich</h2>
        <p>Spannendes für kleine Entdecker: Tiere, Pflanzen, Spiele &amp; mehr.</p>
        <div class="button-links">
          <a href="/kinder/entdecken.php">🔍 Entdecken</a>
          <a href="/kinder/spielen.php">🎲 Spielen</a>
          <a href="/kinder/aufraeumen.php">🧹 Aufräumen</a>
          <a href="/kinder/kinder.php">👧 Zur Übersicht</a>
        </div>
      </div>
    </div>

    <div class="entry-box">
      <img src="/downloads/kind.svg" alt="Erwachsene Icon" class="entry-icon" />
      <div class="entry-content">
        <h2>Für Erwachsene</h2>
        <p>Materialien &amp; Tipps für Eltern, Pädagog:innen und Naturfreunde.</p>
        <a href="/erwachsene/erwachsene.php">Zum Elternbereich</a>
      </div>
    </div>

  </div>
</main>

<!-- Sidebar & Navigation -->
<script src="/include/header.js"></script>
</body>
</html>
