<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Waldzeit – Startseite</title>

  <link rel="stylesheet" href="/include/header.css">

  <style>
    body {
      margin: 0;
      font-family: 'Baloo 2', cursive;
      background: url('/bilder/bg1.svg') no-repeat center center fixed;
      background-size: cover;
      color: #333;
    }

    main {
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      padding: 4vh 2rem;
      position: relative;
      text-align: center;
    }

    .kinderbereich-box {
      background: rgba(255, 255, 255, 0.95);
      border-radius: 20px;
      box-shadow: 0 6px 16px rgba(0,0,0,0.25);
      max-width: 600px;
      width: 100%;
      padding: 2rem;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .kinderbereich-box img {
      width: 120px;
      height: 120px;
      margin-bottom: 1rem;
    }

    .kinderbereich-box h1 {
      font-size: 2.5rem;
      color: #2f4f4f;
      margin: 0 0 1rem;
    }

    .kinderbereich-box p {
      font-size: 1.2rem;
      color: #444;
      margin-bottom: 1.5rem;
    }

    .kinder-links {
      display: flex;
      gap: 1rem;
      flex-wrap: wrap;
      justify-content: center;
    }

    .kinder-links a {
      padding: 0.8rem 1.4rem;
      font-size: 1.1rem;
      background-color: #4a6d4f;
      color: #fff;
      border-radius: 10px;
      text-decoration: none;
      transition: background-color 0.3s ease;
    }

    .kinder-links a:hover {
      background-color: #365539;
    }

    /* Erwachsene-Karte unten rechts */
    .eltern-card {
      position: fixed;
      bottom: 2rem;
      right: 2rem;
      width: 260px;
      background-color: rgba(255, 255, 255, 0.95);
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
      padding: 1rem 1.2rem;
      font-family: 'Nunito', sans-serif;
      text-align: left;
      z-index: 100;
    }

    .eltern-card h2 {
      font-size: 1.2rem;
      margin: 0 0 0.5rem;
      color: #3a5f5f;
    }

    .eltern-card p {
      font-size: 0.95rem;
      color: #444;
      margin: 0 0 0.8rem;
    }

    .eltern-card a {
      display: inline-block;
      font-size: 0.95rem;
      background-color: #4a6d4f;
      color: white;
      text-decoration: none;
      padding: 0.5rem 1rem;
      border-radius: 6px;
      transition: background-color 0.3s ease;
    }

    .eltern-card a:hover {
      background-color: #365539;
    }

    @media (max-width: 600px) {
      .kinderbereich-box h1 {
        font-size: 2rem;
      }

      .kinder-links a {
        font-size: 1rem;
        padding: 0.6rem 1rem;
      }

      .eltern-card {
        width: 90%;
        right: 5%;
        bottom: 1rem;
        padding: 1rem;
      }

      .eltern-card h2 {
        font-size: 1.1rem;
      }
    }
  </style>
</head>

<body>

<!-- Navigation -->
<?php include($_SERVER['DOCUMENT_ROOT'] . '/include/header.php'); ?>

<main>
  <!-- Kinderbereich Box -->
  <div class="kinderbereich-box">
    <img src="/bilder/fuchs.svg" alt="Fuchs Icon">
    <h1>Willkommen im Kinderbereich 🌳</h1>
    <p>Entdecke spielerisch den Wald und lerne Spannendes über Tiere, Pflanzen & Umweltschutz!</p>
    <div class="kinder-links">
      <a href="/kinder/entdecken.php">🔍 Entdecken</a>
      <a href="/kinder/spielen.php">🎲 Spielen</a>
      <a href="/kinder/aufraeumen.php">🧹 Aufräumen</a>
      <a href="/kinder/kinder.php">👧 Zur Übersicht</a>
    </div>
  </div>
</main>

<!-- Erwachsene-Karte -->
<div class="eltern-card">
  <h2>Für Erwachsene 👩‍🏫</h2>
  <p>Tipps, Materialien & Anregungen für Eltern, Lehrkräfte und alle, die mit Kindern arbeiten.</p>
  <a href="/erwachsene/erwachsene.php">Zum Elternbereich</a>
</div>

<!-- JS für Navigation -->
<script src="/include/header.js"></script>

</body>
</html>
