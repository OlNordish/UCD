<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Bäume &amp; Pflanzen</title>

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
      max-width: 1000px;
      margin: 4rem auto;
      padding: 2rem;
      background: rgba(0, 0, 0, 0.6);
      border-radius: 12px;
    }

    h1 {
      font-size: 2.5rem;
      text-align: center;
      margin-bottom: 1rem;
    }

    p.intro {
      font-size: 1.2rem;
      text-align: center;
      margin-bottom: 2rem;
    }

    .entry-box {
      background-color: rgba(255, 255, 255, 0.95);
      color: #333;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.3);
      margin-bottom: 2rem;
      padding: 1.5rem;
    }

    .entry-box h2 {
      font-size: 1.4rem;
      margin: 0 0 0.5rem;
      color: #2f4f4f;
    }

    .entry-box p {
      margin: 0 0 0.75rem;
    }

    .entry-box a {
      color: #006400;
      font-weight: bold;
      text-decoration: none;
    }

    .entry-box a:hover {
      text-decoration: underline;
    }

    @media (max-width: 600px) {
      main {
        padding: 1rem;
      }
    }
  </style>
</head>

<body>

<!-- Sidebar & Navigation -->
<?php include($_SERVER['DOCUMENT_ROOT'] . '/include/headerneu.php'); ?>

<main>
  <h1>🌳 Bäume &amp; Pflanzen</h1>
  <p class="intro">Mal- und Bastelideen rund um Blätter, Bäume und Naturspiele.</p>

  <article class="entry-box">
    <h2>Herbstblätter zum Ausmalen</h2>
    <p>Eine bunte Malvorlage mit verschiedenen Blattformen – lass den Herbst in deinen Lieblingsfarben erstrahlen!</p>
    <a href="/downloads/Malvorlage_Herbstbltter.pdf" download>PDF herunterladen</a>
  </article>

  <article class="entry-box">
    <h2>Blätterbuch selber machen</h2>
    <p>Sammle, presse und entdecke die Blätter der Bäume – gestalte dein eigenes kleines Naturlexikon!</p>
    <a href="/downloads/Bastelanleitung_Bltterbuch.pdf" download>PDF herunterladen</a>
  </article>

  <article class="entry-box">
    <h2>Dein eigenes Wald-Memory</h2>
    <p>Bastle dein persönliches Memory-Spiel mit Waldtieren und Pflanzen und spiele es mit Freunden und Familie!</p>
    <a href="/downloads/Bastelanleitung_Wald-Memory.pdf" download>PDF herunterladen</a>
  </article>
</main>

<!-- Sidebar & Navigation -->
<script src="/include/headerneu.js"></script>

</body>
</html>
