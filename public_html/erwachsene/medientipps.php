<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Medientipps</title>

  <!-- Sidebar & Navigation -->
  <link rel="stylesheet" href="/include/headerneu.css">

  <style>
  body {
    margin: 0;
    font-family: 'Nunito', sans-serif;
    background: url('/bilder/bg1.svg') no-repeat center center fixed;
    background-size: cover;
    color: #333333;
  }

  main {
    max-width: 1000px;
    margin: 4rem auto;
    padding: 2rem;
    background: rgba(170, 190, 165, 0.6);
    border-radius: 12px;
  }

  h1 {
    font-size: 2.5rem;
    text-align: center;
    margin-bottom: 1rem;
    color: #FFFFF;
  }

  p.intro {
    font-size: 1.2rem;
    text-align: center;
    margin-bottom: 2rem;
    color: #4A4A4A;
  }

  .entry-box {
    display: flex;
    background-color: rgba(255, 255, 255, 0.95);
    color: #333;
    border-radius: 12px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.3);
    margin-bottom: 2rem;
    overflow: hidden;
  }

  .entry-box img {
    width: 150px;
    height: 150px;
    object-fit: contain;
    background: #f0f0f0;
    padding: 1rem;
  }

  .entry-box-content {
    padding: 1rem 1.5rem;
    display: flex;
    flex-direction: column;
    justify-content: center;
  }

  .entry-box-content h2 {
    margin: 0;
    font-size: 1.4rem;
    color: #5A3E36;
  }

  .entry-box-content p {
    margin: 0.5rem 0 1rem;
    color: #3C3C3C;
  }

  .entry-box-content a {
    align-self: flex-start;
    padding: 0.5rem 1rem;
    background-color: #4A6D4F;
    color: #ffffff;
    border-radius: 6px;
    text-decoration: none;
    transition: background-color 0.3s ease;
  }

  .entry-box-content a:hover {
    background-color: #365539;
  }

  @media (max-width: 700px) {
    .entry-box {
      flex-direction: column;
      align-items: center;
      text-align: center;
    }

    .entry-box img {
      width: 100px;
      height: 100px;
    }

    .entry-box-content {
      padding: 1rem;
      align-items: center;
    }

    .entry-box-content a {
      margin-top: 1rem;
    }
  }
  </style>
</head>

<body>

<!-- Sidebar & Navigation -->
<?php include($_SERVER['DOCUMENT_ROOT'] . '/include/headerneu.php'); ?>

<main>
  <h1>📚 Medientipps</h1>
  <p class="intro">Entdecke Bücher, Hörspiele, Videos und Spiele rund um den Wald – für Kinder leicht erklärt und liebevoll gestaltet.</p>

  <div class="entry-box">
    <img src="/downloads/kind.svg" alt="Kind Icon" />
    <div class="entry-box-content">
      <h2>Bücher</h2>
      <p>Spannende und kindgerechte Bücher über Waldtiere, Pflanzen und Umweltschutz.</p>
      <a href="medientipps/buecher.php">Zur Bücherseite</a>
    </div>
  </div>

  <div class="entry-box">
    <img src="/downloads/kind.svg" alt="Kind Icon" />
    <div class="entry-box-content">
      <h2>Hörspiele</h2>
      <p>Waldabenteuer zum Anhören – ideal für Kita, Grundschule oder Zuhause.</p>
      <a href="medientipps/hoerspiele.php">Zu den Hörspielen</a>
    </div>
  </div>

  <div class="entry-box">
    <img src="/downloads/kind.svg" alt="Kind Icon" />
    <div class="entry-box-content">
      <h2>Videos</h2>
      <p>Dokumentationen und Kinderserien rund um den Lebensraum Wald.</p>
      <a href="medientipps/videos.php">Zu den Videos</a>
    </div>
  </div>

  <div class="entry-box">
    <img src="/downloads/kind.svg" alt="Kind Icon" />
    <div class="entry-box-content">
      <h2>Spiele &amp; Rätsel</h2>
      <p>Wald entdecken mit Puzzles, Rätseln und Spielideen für drinnen & draußen.</p>
      <a href="medientipps/spiele.php">Zu den Spielen</a>
    </div>
  </div>
</main>

<!-- Sidebar & Navigation -->
<script src="/include/headerneu.js"></script>

</body>
</html>
