<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Videos über den Wald</title>
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

    .video-box {
      background-color: rgba(255, 255, 255, 0.95);
      color: #333;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.3);
      margin-bottom: 2rem;
      overflow: hidden;
      padding: 1rem;
    }

    .video-box h3 {
      margin-top: 0;
      font-size: 1.4rem;
      color: #2f4f4f;
    }

    .video-box iframe {
      width: 100%;
      height: 315px;
      border: none;
      border-radius: 8px;
    }
  </style>
</head>
<body>
<?php include($_SERVER['DOCUMENT_ROOT'] . '/include/headerneu.php'); ?>
<main>
  <h1>🎬 Videos über den Wald</h1>
  <p>Spannende Clips für Kinder über Tiere, Bäume und das Leben im Wald – ideal für Zuhause oder den Unterricht.</p>

  <div class="video-box">
    <h3>Wer lebt im Wald?</h3>
    <iframe src="https://www.youtube.com/embed/qV1LrxVZ1f8" allowfullscreen></iframe>
  </div>

  <div class="video-box">
    <h3>Die Jahreszeiten im Wald</h3>
    <iframe src="https://www.youtube.com/embed/OXr1pOYz1bs" allowfullscreen></iframe>
  </div>

  <div class="video-box">
    <h3>Wie schützt man den Wald?</h3>
    <iframe src="https://www.youtube.com/embed/KzZaxfhJ7FE" allowfullscreen></iframe>
  </div>
</main>

<script src="/include/headerneu.js"></script>
</body>
</html>
