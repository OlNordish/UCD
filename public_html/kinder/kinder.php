<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Wald entdecken – Für Kinder</title>

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
  <h1>🌲 Hallo, Entdecker!</h1>
  <p class="intro">Was möchtest du heute im Wald erleben? Wähle aus, was dir Spaß macht!</p>

  <div class="entry-grid">

    <div class="entry-box">
      <img src="/downloads/kind.svg" alt="Entdecken-Icon" class="entry-icon" />
      <div class="entry-content">
        <h2>Wald entdecken</h2>
        <p>Beobachte Tiere, Pflanzen und entdecke versteckte Dinge im Wald.</p>
        <a href="entdecken.php">Jetzt entdecken</a>
      </div>
    </div>

    <div class="entry-box">
      <img src="/downloads/kind.svg" alt="Aufräumen-Icon" class="entry-icon" />
      <div class="entry-content">
        <h2>Aufräumen im Wald</h2>
        <p>Hilf mit, den Wald sauber zu halten – spielerisch und mit Sinn!</p>
        <a href="aufraeumen.php">Jetzt aufräumen</a>
      </div>
    </div>

    <div class="entry-box">
      <img src="/downloads/kind.svg" alt="Veränderungen-Icon" class="entry-icon" />
      <div class="entry-content">
        <h2>Veränderungen verstehen</h2>
        <p>Was passiert, wenn Tiere fehlen? Lerne die Zusammenhänge im Wald kennen.</p>
        <a href="veraenderungen.php">Mehr erfahren</a>
      </div>
    </div>

  </div>
</main>

<!-- Sidebar & Navigation -->
<script src="/include/header.js"></script>

</body>
</html>
