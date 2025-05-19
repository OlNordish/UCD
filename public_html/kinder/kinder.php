<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Kinderseite – Wald entdecken</title>

  <!-- Sidebar & Navigation -->
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
  </style>
</head>
<body>

<!-- Sidebar & Navigation -->
<?php include($_SERVER['DOCUMENT_ROOT'] . '/include/headerneu.php'); ?>

<main>
  <h1>Hallo, Entdecker!</h1>
  <p class="info-text">Was möchtest du heute im Wald erleben? Wähle aus, was dir Spaß macht!</p>
  <div class="kachel-container">
    <a class="kachel" href="entdecken.php">🌲 Entdecken</a>
    <a class="kachel" href="aufraeumen.php">🧹 Aufräumen</a>
    <a class="kachel" href="veraenderungen.php">🔄 Veränderungen</a>
  </div>
</main>

<!-- Sidebar & Navigation -->
<script src="/include/headerneu.js"></script>
	
</body>
</html>
