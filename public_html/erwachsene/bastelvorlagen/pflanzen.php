<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Pflanzen &amp; Bäume</title>
  <link rel="stylesheet" href="../../include/headerneu.css">

  <style>
    body {
      margin: 0;
      font-family: 'Nunito', sans-serif;
      background: url('/img/Background1.png') no-repeat center center fixed;
      background-size: cover;
      color: #ffffff;
    }

    main {
      max-width: 1000px;
      margin: 4rem auto;
      padding: 0 2rem;
      background: rgba(0, 0, 0, 0.6);
      border-radius: 12px;
    }

    h1 {
      font-size: 2.5rem;
      text-align: center;
      margin-bottom: 1.5rem;
    }

    p {
      font-size: 1.2rem;
      text-align: center;
      margin-bottom: 2rem;
    }

    .bastelbox {
      display: flex;
      background-color: rgba(255, 255, 255, 0.95);
      color: #333;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.3);
      margin-bottom: 2rem;
      overflow: hidden;
    }

    .bastelbox img {
      width: 150px;
      height: 150px;
      object-fit: contain;
      background: #f0f0f0;
      padding: 1rem;
    }

    .bastelbox-content {
      padding: 1rem 1.5rem;
    }

    .bastelbox-content h3 {
      margin-top: 0;
      font-size: 1.4rem;
      color: #2f4f4f;
    }

    .bastelbox-content a {
      display: inline-block;
      margin-top: 1rem;
      background: #2f4f4f;
      color: white;
      padding: 0.5rem 1rem;
      border-radius: 6px;
      text-decoration: none;
    }

    .bastelbox-content a:hover {
      background-color: #4f6f6f;
    }
  </style>
</head>
<body>

<?php include($_SERVER['DOCUMENT_ROOT'] . '/include/headerneu.php'); ?>

<main>
  <h1>Pflanzen und Bäume</h1>
  <p>Bastelideen und Lernmaterialien über das grüne Herz des Waldes.</p>

  <div class="bastelbox">
    <img src="/img/baum-icon.png" alt="Baum Icon" />
    <div class="bastelbox-content">
      <h3>Laubbaum-Puzzle</h3>
      <p>Ein einfaches Ausschneide-Puzzle, um Baumteile kennenzulernen.</p>
      <a href="/downloads/baum-puzzle.pdf" download>PDF herunterladen</a>
    </div>
  </div>

  <div class="bastelbox">
    <img src="/img/blatt-icon.png" alt="Blatt Icon" />
    <div class="bastelbox-content">
      <h3>Blätter-Sammelkarte</h3>
      <p>Eine Sammelkarte zum Bestimmen und Aufkleben echter Blätter.</p>
      <a href="/downloads/blaetterkarte.pdf" download>PDF herunterladen</a>
    </div>
  </div>
</main>

<script src="../../include/headerneu.js"></script>
</body>
</html>
