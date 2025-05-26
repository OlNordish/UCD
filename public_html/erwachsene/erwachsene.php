<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Für Erwachsene</title>

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
      background-color: rgba(0, 0, 0, 0.6);
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
      margin-bottom: 2.5rem;
      max-width: 700px;
      margin-left: auto;
      margin-right: auto;
    }

    .bereich {
      background-color: rgba(255, 255, 255, 0.95);
      color: #2f4f4f;
      border-radius: 16px;
      padding: 2rem;
      margin-bottom: 2.5rem;
      box-shadow: 0 4px 12px rgba(0,0,0,0.3);
    }

    .bereich h2 {
      font-size: 1.8rem;
      margin-bottom: 1rem;
    }

    .bereich p {
      margin-bottom: 1.5rem;
      color: #444;
    }

    .hauptlink {
      display: inline-block;
      font-size: 1.2rem;
      background-color: #3cb371;
      color: #ffffff;
      text-decoration: none;
      padding: 0.8rem 1.4rem;
      border-radius: 10px;
      font-weight: bold;
      box-shadow: 0 3px 6px rgba(0,0,0,0.2);
      transition: background-color 0.3s ease;
      margin-bottom: 1.5rem;
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
      font-size: 0.95rem;
      background-color: #2f4f4f;
      color: white;
      padding: 0.6rem 1rem;
      border-radius: 8px;
      text-decoration: none;
      transition: background-color 0.3s ease;
    }

    .unterlink:hover {
      background-color: #456666;
    }

    @media (max-width: 600px) {
      .bereich h2 {
        font-size: 1.5rem;
      }

      .hauptlink {
        font-size: 1rem;
        padding: 0.6rem 1rem;
      }

      .unterlink {
        font-size: 0.9rem;
        padding: 0.5rem 0.8rem;
      }
    }
  </style>
</head>

<body>

<!-- Sidebar & Navigation -->
<?php include($_SERVER['DOCUMENT_ROOT'] . '/include/headerneu.php'); ?>

<main>
  <h1>👩‍🏫 Für Erwachsene</h1>
  <p class="intro">Hier finden Sie vertiefende Inhalte zur Umweltbildung, Bastelideen sowie medienpädagogische Materialien.</p>

  <section class="bereich">
    <h2>🎨 Bastelvorlagen</h2>
    <p>Kreative Vorlagen zu saisonalen und waldbezogenen Themen – ideal für Kita, Schule oder Zuhause.</p>
    <a href="/erwachsene/bastelvorlagen.php" class="hauptlink">Zu den Bastelvorlagen</a>
    <div class="unterlinks">
      <a href="/erwachsene/bastelvorlagen/tiere.php" class="unterlink">Tiere</a>
      <a href="/erwachsene/bastelvorlagen/pflanzen.php" class="unterlink">Bäume &amp; Pflanzen</a>
      <a href="/erwachsene/bastelvorlagen/umweltschutz.php" class="unterlink">Umweltschutz</a>
      <a href="/erwachsene/bastelvorlagen/jahreszeiten.php" class="unterlink">Jahreszeiten</a>
    </div>
  </section>

  <section class="bereich">
    <h2>📚 Medientipps</h2>
    <p>Empfehlungen für Bücher, Hörspiele, Videos &amp; Spiele – für Kinder, Eltern und Pädagog*innen.</p>
    <a href="/erwachsene/medientipps.php" class="hauptlink">Zu den Medientipps</a>
    <div class="unterlinks">
      <a href="/erwachsene/buecher.php" class="unterlink">Bücher</a>
      <a href="/erwachsene/hoerspiele.php" class="unterlink">Hörspiele</a>
      <a href="/erwachsene/videos.php" class="unterlink">Videos</a>
      <a href="/erwachsene/spiele.php" class="unterlink">Spiele</a>
    </div>
  </section>
</main>

<!-- Sidebar & Navigation -->
<script src="/include/headerneu.js"></script>

</body>
</html>
