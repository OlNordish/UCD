<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Erwachsene</title>
  
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

    p {
      font-size: 1.2rem;
      margin-bottom: 2.5rem;
      max-width: 700px;
    }

    .bereich {
      background-color: rgba(255, 255, 255, 0.95);
      color: #2f4f4f;
      border-radius: 20px;
      padding: 2rem;
      margin-bottom: 40px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.3);
      max-width: 700px;
      width: 100%;
    }

    .bereich h2 {
      font-size: 1.8rem;
      margin-bottom: 1rem;
    }

    .bereich p {
      color: #444;
      margin-bottom: 1.5rem;
    }

    .hauptlink {
      display: inline-block;
      font-size: 1.3rem;
      background-color: #3cb371;
      color: white;
      text-decoration: none;
      padding: 0.8rem 1.4rem;
      border-radius: 12px;
      margin-bottom: 1.5rem;
      font-weight: bold;
      box-shadow: 0 3px 6px rgba(0,0,0,0.2);
      transition: background-color 0.3s ease;
    }

    .hauptlink:hover {
      background-color: #2e8b57;
    }

    .unterlinks {
      display: flex;
      flex-wrap: wrap;
      gap: 10px;
      justify-content: center;
    }

    .unterlink {
      font-size: 1rem;
      background-color: #2f4f4f;
      color: white;
      padding: 0.6rem 1rem;
      border-radius: 10px;
      text-decoration: none;
      transition: background-color 0.3s ease;
    }

    .unterlink:hover {
      background-color: #3f5f5f;
    }
  </style>
</head>
<body>

<!-- Sidebar & Navigation -->
<?php include($_SERVER['DOCUMENT_ROOT'] . '/include/headerneu.php'); ?>

<main>
  <h1>Für Erwachsene</h1>
  <p>Hier finden Sie vertiefende Inhalte zur Umweltbildung, Bastelideen sowie medienpädagogische Materialien.</p>

  <section class="bereich">
    <h2>🎨 Bastelvorlagen</h2>
    <p>Hier finden Sie kreative Vorlagen zu saisonalen und waldbezogenen Themen – ideal für Bildungsangebote mit Kindern.</p>
    <a href="/erwachsene/bastelvorlagen.php" class="hauptlink">Zu den Bastelvorlagen</a>
    <div class="unterlinks">
      <a href="/erwachsene/bastelvorlagen/tiere.php" class="unterlink">Tiere</a>
      <a href="/erwachsene/bastelvorlagen/pflanzen.php" class="unterlink">Pflanzen</a>
      <a href="/erwachsene/bastelvorlagen/umweltschutz.php" class="unterlink">Umweltschutz</a>
      <a href="/erwachsene/bastelvorlagen/jahreszeiten.php" class="unterlink">Jahreszeiten</a>
    </div>
  </section>

  <section class="bereich">
    <h2>📚 Medientipps</h2>
    <p>Empfehlungen zu Büchern, Videos und ergänzenden Materialien – für Kinder, Eltern und Pädagogen.</p>
    <a href="/erwachsene/medientipps.php" class="hauptlink">Zu den Medientipps</a>
    <div class="unterlinks">
      <a href="/erwachsene/videos.php" class="unterlink">Videos</a>
      <a href="/erwachsene/materialien.php" class="unterlink">Materialien</a>
      <a href="/erwachsene/buecher.php" class="unterlink">Bücher</a>
    </div>
  </section>
</main>

<!-- Sidebar & Navigation -->
<script src="/include/headerneu.js"></script>
	
</body>
</html>
