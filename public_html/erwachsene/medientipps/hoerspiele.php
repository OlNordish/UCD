<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Hörspiele für Kinder</title>
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

    .media-box {
      background-color: rgba(255, 255, 255, 0.95);
      color: #333;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.3);
      margin-bottom: 2rem;
      overflow: hidden;
      padding: 1rem 1.5rem;
    }

    .media-box h3 {
      margin-top: 0;
      font-size: 1.4rem;
      color: #2f4f4f;
    }

    .media-box p {
      margin-bottom: 0.5rem;
    }

    .media-box a {
      display: inline-block;
      margin-top: 0.5rem;
      color: #2f4f4f;
      font-weight: bold;
      text-decoration: underline;
    }
  </style>
</head>
<body>
<?php include($_SERVER['DOCUMENT_ROOT'] . '/include/headerneu.php'); ?>
<main>
  <h1>Hörspiele für Kinder</h1>
  <p>Hier findest du spannende, lehrreiche und naturbezogene Hörspiel-Empfehlungen für Kindergruppen, Projekte oder ruhige Momente zu Hause.</p>

  <div class="media-box">
    <h3>„Der Wald spricht“ – Abenteuer-Hörspiel</h3>
    <p>Ein spannendes Hörspiel über Tiere und Geheimnisse im Wald. Perfekt für Kinder ab 5 Jahren.</p>
    <a href="https://example.com/hoerspiel-wald" target="_blank">Jetzt anhören</a>
  </div>

  <div class="media-box">
    <h3>„Kleine Füchse ganz groß“ – Naturpädagogik zum Lauschen</h3>
    <p>Ein liebevoll gestaltetes Hörspiel über den Lebensraum Wald mit Hintergrundmusik und Geräuschen.</p>
    <a href="https://example.com/kleine-fuechse" target="_blank">Anhören & herunterladen</a>
  </div>

  <div class="media-box">
    <h3>„Das geheime Baumhaus“ – Fantasie trifft Natur</h3>
    <p>Für Grundschulkinder: Fantastische Geschichten, die auf echten Naturphänomenen basieren.</p>
    <a href="https://example.com/baumhaus" target="_blank">Reinhören</a>
  </div>
</main>
<script src="/include/headerneu.js"></script>
</body>
</html>
