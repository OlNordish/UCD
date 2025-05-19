<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Bastelvorlagen</title>
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
    <h1>Bastelvorlagen</h1>
    <p>Kreative Ideen zum Basteln – Tiere, Pflanzen, Wetter und mehr!</p>

    <div class="bastelbox">
      <img src="/img/tiere-icon.png" alt="Tiere Icon" />
      <div class="bastelbox-content">
        <h3>Tiere des Waldes</h3>
        <p>Male und bastle deine Lieblingstiere – vom Fuchs bis zum Reh.</p>
        <a href="bastelvorlagen/tiere.php">Ansehen</a>
      </div>
    </div>

    <div class="bastelbox">
      <img src="/img/pflanzen-icon.png" alt="Pflanzen Icon" />
      <div class="bastelbox-content">
        <h3>Bäume und Pflanzen</h3>
        <p>Lerne Blätter und Bäume kennen – mit Vorlagen zum Sammeln und Malen.</p>
        <a href="bastelvorlagen/pflanzen.php">Ansehen</a>
      </div>
    </div>

    <div class="bastelbox">
      <img src="/img/umweltschutz-icon.png" alt="Umweltschutz Icon" />
      <div class="bastelbox-content">
        <h3>Umweltschutz</h3>
        <p>Wie können wir dem Wald helfen? Tipps und kreative Bastelideen.</p>
        <a href="bastelvorlagen/umweltschutz.php">Ansehen</a>
      </div>
    </div>

    <div class="bastelbox">
      <img src="/img/jahreszeiten-icon.png" alt="Jahreszeiten Icon" />
      <div class="bastelbox-content">
        <h3>Jahreszeiten & Wetter</h3>
        <p>Was passiert im Frühling, Sommer, Herbst und Winter? Bastel das Jahr!</p>
        <a href="bastelvorlagen/jahreszeiten.php">Ansehen</a>
      </div>
    </div>
  </main>

  <script src="/include/headerneu.js"></script>
</body>
</html>