<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Medientipps</title>

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

    .entry-content a {
      color: #4A6D4F;
      font-weight: bold;
      text-decoration: none;
    }

    .entry-content a:hover {
      text-decoration: underline;
      color: #365539;
    }
  </style>
</head>

<body>

<!-- Sidebar & Navigation -->
<?php include($_SERVER['DOCUMENT_ROOT'] . '/include/headerneu.php'); ?>

<main>
  <h1>📚 Medientipps</h1>
  <p class="intro">Entdecke Bücher, Hörspiele, Videos und Spiele rund um den Wald – für Kinder leicht erklärt und liebevoll gestaltet.</p>

  <div class="entry-grid">

    <div class="entry-box">
      <img src="/downloads/kind.svg" alt="Icon Bücher" class="entry-icon" />
      <div class="entry-content">
        <h2>Bücher</h2>
        <p>Spannende und kindgerechte Bücher über Waldtiere, Pflanzen und Umweltschutz.</p>
        <a href="medientipps/buecher.php">Zur Bücherseite</a>
      </div>
    </div>

    <div class="entry-box">
      <img src="/downloads/kind.svg" alt="Icon Hörspiele" class="entry-icon" />
      <div class="entry-content">
        <h2>Hörspiele</h2>
        <p>Waldabenteuer zum Anhören – ideal für Kita, Grundschule oder Zuhause.</p>
        <a href="medientipps/hoerspiele.php">Zu den Hörspielen</a>
      </div>
    </div>

    <div class="entry-box">
      <img src="/downloads/kind.svg" alt="Icon Videos" class="entry-icon" />
      <div class="entry-content">
        <h2>Videos</h2>
        <p>Dokumentationen und Kinderserien rund um den Lebensraum Wald.</p>
        <a href="medientipps/videos.php">Zu den Videos</a>
      </div>
    </div>

    <div class="entry-box">
      <img src="/downloads/kind.svg" alt="Icon Spiele" class="entry-icon" />
      <div class="entry-content">
        <h2>Spiele &amp; Rätsel</h2>
        <p>Wald entdecken mit Puzzles, Rätseln und Spielideen für drinnen &amp; draußen.</p>
        <a href="medientipps/spiele.php">Zu den Spielen</a>
      </div>
    </div>

  </div>
</main>

<!-- Sidebar & Navigation -->
<script src="/include/header.js"></script>

</body>
</html>
