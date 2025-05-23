<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Jahreszeiten</title>

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

    main h1 {
      font-size: 2.5rem;
      margin-bottom: 1rem;
      text-align: center;
    }

    main p {
      font-size: 1.2rem;
      text-align: center;
      margin-bottom: 2.5rem;
    }

    .bastelbox {
      display: flex;
      background-color: rgba(255, 255, 255, 0.95);
      color: #333;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.3);
      margin-bottom: 2rem;
      overflow: hidden;
      transition: transform 0.3s ease;
    }

    .bastelbox:hover {
      transform: scale(1.01);
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
      display: flex;
      flex-direction: column;
      justify-content: center;
    }

    .bastelbox-content h3 {
      margin-top: 0;
      font-size: 1.4rem;
      color: #2f4f4f;
    }

    .bastelbox-content p {
      margin: 0.5rem 0 1rem;
      line-height: 1.4;
    }

    .bastelbox-content a {
      align-self: flex-start;
      padding: 0.6rem 1rem;
      background-color: #2f4f4f;
      color: white;
      border-radius: 6px;
      text-decoration: none;
      transition: background-color 0.3s ease;
    }

    .bastelbox-content a:hover {
      background-color: #4f6f6f;
    }

    @media (max-width: 700px) {
      .bastelbox {
        flex-direction: column;
        align-items: center;
        text-align: center;
      }

      .bastelbox img {
        width: 100px;
        height: 100px;
      }

      .bastelbox-content {
        padding: 1rem;
        align-items: center;
      }

      .bastelbox-content a {
        margin-top: 1rem;
      }
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
      <h3>Jahreszeiten-Lernuhr zum Ausschneiden</h3>
      <p>Bastle und male deine eigene Uhr, um spielerisch die vier Jahreszeiten zu lernen!</p>
      <a href="/downloads/umweltschutz.pdf" download>PDF herunterladen</a>
    </div>
  </div>

  <div class="bastelbox">
    <img src="/bilder/eichhoernchen.svg" alt="Vorschau" />
    <div class="bastelbox-content">
      <h3>Jahreszeitenbaum zum Anmalen und Basteln</h3>
      <p>Gestalte deinen eigenen Baum und entdecke, wie sich die Jahreszeiten verändern!</p>
      <a href="/downloads/erde.pdf" download>PDF herunterladen</a>
    </div>
  </div>
	
  <div class="bastelbox">
    <img src="/bilder/eichhoernchen.svg" alt="Vorschau" />
    <div class="bastelbox-content">
      <h3>Herbstdrachen zum Basteln</h3>
      <p>Baue deinen eigenen Drachen und lass ihn im Herbstwind fliegen!</p>
      <a href="/downloads/recycling.pdf" download>PDF herunterladen</a>
    </div>
  </div>

  <div class="bastelbox">
    <img src="/bilder/eichhoernchen.svg" alt="Vorschau" />
    <div class="bastelbox-content">
      <h3>Malvorlage zu den Jahreszeiten</h3>
      <p>Male die bunten Szenen der vier Jahreszeiten aus und entdecke ihre Besonderheiten!</p>
      <a href="/downloads/.pdf" download>PDF herunterladen</a>
    </div>
  </div>
	
  <div class="bastelbox">
    <img src="/bilder/eichhoernchen.svg" alt="Vorschau" />
    <div class="bastelbox-content">
      <h3>Symbolbilder der Jahreszeiten</h3>
      <p>Entdecke die typischen Motive für Frühling, Sommer, Herbst und Winter zum Ausmalen!</p>
      <a href="/downloads/.pdf" download>PDF herunterladen</a>
    </div>
  </div>
</main>

<!-- Sidebar & Navigation -->
<script src="/include/headerneu.js"></script>
	
</body>
</html>