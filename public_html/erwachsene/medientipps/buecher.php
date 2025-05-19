<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Bücher</title>
  
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
  </style>
</head>
<body>

<!-- Sidebar & Navigation -->
<?php include($_SERVER['DOCUMENT_ROOT'] . '/include/headerneu.php'); ?>

<main>
  <h1>Buchempfehlungen</h1>
  <p>Ausgewählte Kinderbücher über Wald, Tiere und Natur für Zuhause oder den Unterricht.</p>

  <div class="media-box">
    <h3>"Mein kleiner Waldführer"</h3>
    <p>Ein interaktives Buch mit Klappen, Rätseln und tollen Illustrationen.</p>
  </div>

  <div class="media-box">
    <h3>"Wer wohnt im Wald?"</h3>
    <p>Kindgerecht erklärt – mit vielen Bildern zu Tieren und Pflanzen im Wald.</p>
  </div>

  <div class="media-box">
    <h3>"Das große Waldbuch"</h3>
    <p>Für ältere Kinder: Spannende Fakten, Interviews mit Förstern und DIY-Projekte.</p>
  </div>
</main>

<!-- Sidebar & Navigation -->
<script src="/include/headerneu.js"></script>
	
</body>
</html>
