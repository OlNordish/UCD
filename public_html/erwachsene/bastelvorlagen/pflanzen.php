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
      background: url('/bilder/bg1.svg') no-repeat center center fixed;
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

<!-- Sidebar & Navigation -->
<?php include($_SERVER['DOCUMENT_ROOT'] . '/include/headerneu.php'); ?>

<main>
  <h1>Tiere des Waldes</h1>
  <p>Hier findest du spannende Bastelideen rund um Reh, Fuchs, Eule &amp; Co.</p>

  <div class="bastelbox">
    <img src="/bilder/eichhoernchen.svg" alt="Vorschau" />
    <div class="bastelbox-content">
      <h3>Herbstblätter zum Ausmalen</h3>
      <p>Eine bunte Malvorlage mit verschiedenen Blattformen – lass den Herbst in deinen Lieblingsfarben erstrahlen!</p>
      <a href="/downloads/herbstblaetter.pdf" download>PDF herunterladen</a>
    </div>
  </div>

  <div class="bastelbox">
    <img src="/bilder/eichhoernchen.svg" alt="Vorschau" />
    <div class="bastelbox-content">
      <h3>Blätterbuch selber machen</h3>
      <p>Sammle, presse und entdecke die Blätter der Bäume – gestalte dein eigenes kleines Naturlexikon!</p>
      <a href="/downloads/blaetterbuch.pdf" download>PDF herunterladen</a>
    </div>
  </div>
	
  <div class="bastelbox">
    <img src="/bilder/eichhoernchen.svg" alt="Vorschau" />
    <div class="bastelbox-content">
      <h3>Dein eigenes Wald-Memory</h3>
      <p>Bastle dein persönliches Memory-Spiel mit Waldtieren und Pflanzen und spiele es mit Freunden und Familie!</p>
      <a href="/downloads/waldmemory.pdf" download>PDF herunterladen</a>
    </div>
  </div>

  <div class="bastelbox">
    <img src="/bilder/eichhoernchen.svg" alt="Vorschau" />
    <div class="bastelbox-content">
      <h3>VIER</h3>
      <p>VIER</p>
      <a href="/downloads/.pdf" download>PDF herunterladen</a>
    </div>
  </div>
	
  <div class="bastelbox">
    <img src="/bilder/eichhoernchen.svg" alt="Vorschau" />
    <div class="bastelbox-content">
      <h3>FÜNF</h3>
      <p>FÜNF</p>
      <a href="/downloads/.pdf" download>PDF herunterladen</a>
    </div>
  </div>
</main>

<!-- Sidebar & Navigation -->
<script src="/include/headerneu.js"></script>
	
</body>
</html>