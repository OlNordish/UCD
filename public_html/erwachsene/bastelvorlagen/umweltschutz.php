<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Umweltschutz</title>
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
  <h1>Umweltschutz</h1>
  <p>Projekte, die zeigen, wie wir gemeinsam die Natur schützen können.</p>

  <div class="bastelbox">
    <img src="/img/recycling-icon.png" alt="Recycling Icon" />
    <div class="bastelbox-content">
      <h3>Recycling-Memory</h3>
      <p>Ein Memory-Spiel, bei dem recycelbare Materialien zugeordnet werden.</p>
      <a href="/downloads/recycling-memory.pdf" download>PDF herunterladen</a>
    </div>
  </div>

  <div class="bastelbox">
    <img src="/img/energie-icon.png" alt="Energie Icon" />
    <div class="bastelbox-content">
      <h3>Stromfresser finden</h3>
      <p>Eine Checkliste für Kinder: Wo kann man im Alltag Energie sparen?</p>
      <a href="/downloads/stromspar-check.pdf" download>PDF herunterladen</a>
    </div>
  </div>
</main>

<script src="../../include/headerneu.js"></script>
</body>
</html>
