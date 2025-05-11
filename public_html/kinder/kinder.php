<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Kinderseite – Wald entdecken</title>

  <!-- Header-CSS einbinden -->
  <link rel="stylesheet" href="/include/headerneu.css">

  <style>
    body {
      margin: 0;
      font-family: 'Nunito', sans-serif;
      background: url('/img/Background1.png') no-repeat center center fixed;
      background-size: cover;
      color: #ffffff;
    }

    main {
      padding: 60px 20px;
      display: flex;
      flex-direction: column;
      align-items: center;
      text-align: center;
    }

    h1 {
      font-size: 2.5rem;
      margin-bottom: 1rem;
    }

    .info-text {
      font-size: 1.2rem;
      margin-bottom: 2rem;
    }

    .kachel-container {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
      gap: 20px;
      width: 100%;
      max-width: 800px;
    }

    .kachel {
      background-color: #3cb371;
      color: white;
      text-decoration: none;
      padding: 2rem 1rem;
      border-radius: 50px;
      font-size: 1.3rem;
      font-weight: bold;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      transition: all 0.3s ease;
    }

    .kachel:hover {
      background-color: #2e8b57;
      transform: translateY(-2px);
    }

    #sprechblase-container {
      position: fixed;
      bottom: 20px;
      right: 20px;
      display: flex;
      align-items: flex-end;
      gap: 10px;
      max-width: 320px;
      z-index: 100;
    }

    #fuchs-avatar {
      font-size: 3.5rem;
      filter: drop-shadow(2px 2px 3px rgba(0, 0, 0, 0.4));
    }

    #sprechblase {
      background-color: rgba(255, 255, 255, 0.95);
      color: #333;
      padding: 1rem 1.3rem;
      border-radius: 20px;
      font-size: 1rem;
      box-shadow: 0 4px 10px rgba(0,0,0,0.3);
      border: 2px dashed #2f4f4f;
    }
  </style>
</head>
<body>

<!-- Sidebar & Navigation -->
<?php include($_SERVER['DOCUMENT_ROOT'] . '/include/headerneu.php'); ?>

<!-- Inhalt -->
<main>
  <h1>Hallo, Entdecker!</h1>
  <p class="info-text">Was möchtest du heute im Wald erleben? Wähle aus, was dir Spaß macht!</p>
  <div class="kachel-container">
    <a class="kachel" href="entdecken.php">🌲 Entdecken</a>
    <a class="kachel" href="aufraeumen.php">🧹 Aufräumen</a>
    <a class="kachel" href="veraenderungen.php">🔄 Veränderungen</a>
    <a class="kachel" href="quiz.php">❓ Quiz</a>
  </div>
</main>

<!-- Sprechblase & Avatar -->
<div id="sprechblase-container">
  <div id="sprechblase">
    Hallo! Ich bin dein Waldfuchs.<br>
    Ich begleite dich bei deinen Abenteuern.
  </div>
  <div id="fuchs-avatar">🦊</div>
</div>

<!-- JavaScript: Sidebar & Submenüs -->
<script src="/include/headerneu.js"></script>
</body>
</html>
