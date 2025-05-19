<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Waldspiel – Medientipps</title>

  <!-- Einheitliche Navigation & Sidebar -->
  <link rel="stylesheet" href="/include/headerneu.css">

  <style>
    body {
      margin: 0;
      font-family: 'Nunito', sans-serif;
      background: url('/bilder/bg1.svg') no-repeat center center fixed;
      background-size: cover;
      color: #ffffff;
    }

    main {
      padding: 80px 20px 40px;
      display: flex;
      flex-direction: column;
      align-items: center;
      text-align: center;
    }

    h1 {
      font-size: 2.5rem;
      margin-bottom: 1rem;
      text-shadow: 2px 2px 4px rgba(0,0,0,0.6);
    }

    p {
      font-size: 1.2rem;
      margin-bottom: 2.5rem;
      max-width: 700px;
    }

    .kachel-container {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
      gap: 30px;
      width: 100%;
      max-width: 900px;
    }

    .kachel {
      background-color: rgba(255, 255, 255, 0.95);
      color: #2f4f4f;
      text-decoration: none;
      padding: 2rem 1.5rem;
      border-radius: 16px;
      font-size: 1.2rem;
      font-weight: bold;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
      transition: transform 0.3s, background-color 0.3s;
    }

    .kachel:hover {
      background-color: #e8f5e9;
      transform: scale(1.03);
    }

    .kachel span {
      font-size: 2.2rem;
      display: block;
      margin-bottom: 0.6rem;
    }

    @media (max-width: 600px) {
      h1 {
        font-size: 2rem;
      }

      p {
        font-size: 1.1rem;
      }

      .kachel {
        font-size: 1rem;
        padding: 1.5rem 1rem;
      }
    }
  </style>
</head>
<body>

<?php include($_SERVER['DOCUMENT_ROOT'] . '/include/headerneu.php'); ?>
<div id="overlay" onclick="toggleSidebar(); hideSubmenu();"></div>

<main>
  <h1>📚 Medientipps</h1>
  <p>Empfehlungen für Bücher, Hörspiele und Videos – kindgerecht, spannend und lehrreich rund um den Wald.</p>

  <div class="kachel-container">
    <a href="/erwachsene/buecher.php" class="kachel">
      <span>📖</span>
      Bücher<br>für Kinder & Eltern
    </a>
    <a href="/erwachsene/hoerspiele.php" class="kachel">
      <span>🎧</span>
      Hörspiele<br>zum Lauschen & Lernen
    </a>
    <a href="/erwachsene/videos.php" class="kachel">
      <span>🎬</span>
      Videos & Filme<br>zum Wald entdecken
    </a>
  </div>
</main>

<script src="/include/headerneu.js"></script>
</body>
</html>