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

  <!-- PHP-Header mit absolutem Serverpfad einbinden -->
  <?php include($_SERVER['DOCUMENT_ROOT'] . '/include/headerneu.php'); ?>

  <main>
    <h1>Jahreszeiten &amp; Wetter</h1>
    <p>Ob Frühling, Sommer, Herbst oder Winter – hier finden Sie kreative Bastelideen für jede Jahreszeit und passendes Wetter, die Kinder das Jahr über begleiten.</p>

    <div class="bastelbox">
      <img src="/img/fruehling-icon.png" alt="Frühling Icon" />
      <div class="bastelbox-content">
        <h3>Blumenwiese zum Ausmalen</h3>
        <p>Eine fröhliche Frühlingsvorlage mit Blumen, Insekten und Sonne zum Ausmalen und Erzählen.</p>
        <a href="/downloads/blumenwiese.pdf" download>PDF herunterladen</a>
      </div>
    </div>

    <div class="bastelbox">
      <img src="/img/sommer-icon.png" alt="Sommer Icon" />
      <div class="bastelbox-content">
        <h3>Wetterrad – Sonne, Regen &amp; Co.</h3>
        <p>Ein drehbares Bastelrad, das verschiedene Wetterlagen zeigt – ideal für Gespräche über das Wetter.</p>
        <a href="/downloads/wetterrad.pdf" download>PDF herunterladen</a>
      </div>
    </div>

    <div class="bastelbox">
      <img src="/img/herbst-icon.png" alt="Herbst Icon" />
      <div class="bastelbox-content">
        <h3>Laub-Igel basteln</h3>
        <p>Ein süßer Igel mit echten oder ausgeschnittenen Blättern – perfekt für den Herbst.</p>
        <a href="/downloads/laub-igel.pdf" download>PDF herunterladen</a>
      </div>
    </div>

    <div class="bastelbox">
      <img src="/img/winter-icon.png" alt="Winter Icon" />
      <div class="bastelbox-content">
        <h3>Schneekristalle falten</h3>
        <p>Filigrane Schneeflocken aus Papier – eine schöne Bastelidee für kalte Wintertage.</p>
        <a href="/downloads/schneekristalle.pdf" download>PDF herunterladen</a>
      </div>
    </div>
  </main>

  <script src="../../include/headerneu.js"></script>
</body>
</html>
