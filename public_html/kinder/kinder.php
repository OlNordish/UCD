<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Wald entdecken – Für Kinder</title>

  <!-- Sidebar & Navigation -->
  <link rel="stylesheet" href="/include/header.css">

  <style>
    h1 {
      font-size: 2.5rem;
      text-align: center;
      margin-bottom: 1rem;
      color: #333333;
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
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
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
  <h1>🌲 Hallo, Entdecker!</h1>
  <p class="intro">Was möchtest du heute im Wald erleben? Wähle aus, was dir Spaß macht!</p>

  <div class="entry-box">
    <img src="/downloads/kind.svg" alt="Entdecken-Icon" />
    <div class="entry-box-content">
      <h2>Wald entdecken</h2>
      <p>Beobachte Tiere, Pflanzen und entdecke versteckte Dinge im Wald.</p>
      <a href="entdecken.php">Jetzt entdecken</a>
    </div>
  </div>

  <div class="entry-box">
    <img src="/downloads/kind.svg" alt="Aufräumen-Icon" />
    <div class="entry-box-content">
      <h2>Aufräumen im Wald</h2>
      <p>Hilf mit, den Wald sauber zu halten – spielerisch und mit Sinn!</p>
      <a href="aufraeumen.php">Jetzt aufräumen</a>
    </div>
  </div>

  <div class="entry-box">
    <img src="/downloads/kind.svg" alt="Veränderungen-Icon" />
    <div class="entry-box-content">
      <h2>Veränderungen verstehen</h2>
      <p>Was passiert, wenn Tiere fehlen? Lerne die Zusammenhänge im Wald kennen.</p>
      <a href="veraenderungen.php">Mehr erfahren</a>
    </div>
  </div>
</main>

<!-- Sidebar & Navigation -->
<script src="/include/header.js"></script>

</body>
</html>
