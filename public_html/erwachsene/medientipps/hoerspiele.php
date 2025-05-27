<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Hörspielempfehlungen</title>

  <!-- Sidebar & Navigation -->    
  <link rel="stylesheet" href="/include/headerneu.css">

  <style>
  body {
    margin: 0;
    font-family: 'Nunito', sans-serif;
    background: url('/bilder/bg1.svg') no-repeat center center fixed;
    background-size: cover;
    color: #333333;
  }

  main {
    max-width: 1000px;
    margin: 4rem auto;
    padding: 2rem;
    background: rgba(170, 190, 165, 0.6);
    border-radius: 12px;
  }

  h1 {
    font-size: 2.5rem;
    text-align: center;
    margin-bottom: 1rem;
    color: #FFFFF;
  }

  p.intro {
    font-size: 1.2rem;
    text-align: center;
    margin-bottom: 2rem;
    color: #4A4A4A;
  }

  .entry-box {
    background-color: rgba(255, 255, 255, 0.95);
    color: #333;
    border-radius: 12px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.3);
    margin-bottom: 2rem;
    padding: 1.5rem;
    display: grid;
    grid-template-columns: auto 1fr;
    gap: 1rem;
    align-items: center;
  }

  .entry-icon {
    width: 80px;
    height: 80px;
    object-fit: cover;
    border-radius: 8px;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.25);
  }

  .entry-content h2 {
    font-size: 1.4rem;
    margin: 0 0 0.5rem;
    color: #5A3E36;
  }

  .entry-content p {
    margin: 0 0 0.75rem;
    color: #3C3C3C;
  }

  .entry-content a {
    color: #4A6D4F;
    font-weight: bold;
    text-decoration: none;
  }

  .entry-content a:hover {
    text-decoration: underline;
    color: #365539;
  }

  .author {
    font-style: italic;
    margin-bottom: 0.5rem;
    display: block;
  }

  @media (max-width: 600px) {
    main {
      padding: 1rem;
    }

    .entry-box {
      grid-template-columns: 1fr;
      text-align: center;
    }

    .entry-icon {
      margin: 0 auto;
    }
  }
  </style>
</head>

<body>

<!-- Sidebar & Navigation -->
<?php include($_SERVER['DOCUMENT_ROOT'] . '/include/headerneu.php'); ?>

<main>
  <h1>🎧 Hörspielempfehlungen</h1>
  <p class="intro">Spannende Geschichten und Geräusche aus dem Wald – ideal für kleine Naturfreunde.</p>

  <article class="entry-box">
    <img src="/downloads/Medientipps_Hoerspiele/Hörspiel_1.jpeg" alt="WAS IST WAS Junior – Wald" class="entry-icon">
    <div class="entry-content">
      <h2>WAS IST WAS Junior – Wald</h2>
      <span class="author">Tessloff Verlag</span>
      <p>Hörspielwissen über den Wald für Kinder von 4–7 Jahren.</p>
      <a href="https://www.thalia.de/shop/home/artikeldetails/A1058265069" target="_blank">Bei Thalia ansehen</a>
    </div>
  </article>

  <article class="entry-box">
    <img src="/downloads/Medientipps_Hoerspiele/Hörspiel_2.jpg" alt="WAS IST WAS – Wilde Wälder / Lebendiger Boden" class="entry-icon">
    <div class="entry-content">
      <h2>WAS IST WAS – Wilde Wälder / Lebendiger Boden</h2>
      <span class="author">Tessloff Verlag</span>
      <p>Zwei spannende Themen auf einer CD – mit viel Waldwissen und Naturgeräuschen.</p>
      <a href="https://www.thalia.de/shop/home/artikeldetails/A1061275714" target="_blank">Bei Thalia ansehen</a>
    </div>
  </article>

  <article class="entry-box">
    <img src="/downloads/Medientipps_Hoerspiele/Hörspiel_3.jpeg" alt="Kleine Helden im Wald" class="entry-icon">
    <div class="entry-content">
      <h2>Kleine Helden im Wald</h2>
      <span class="author">Matthias Meyer-Göllner</span>
      <p>Ein musikalisches Naturerlebnis mit Playback-Versionen für Kinder.</p>
      <a href="https://www.jumboverlag.de/Kleine-Helden-im-Wald-CD" target="_blank">Bei Jumbo Verlag ansehen</a>
    </div>
  </article>

  <article class="entry-box">
    <img src="/downloads/Medientipps_Hoerspiele/Hörspiel_4.jpeg" alt="Im Wald – Was hör ich da?" class="entry-icon">
    <div class="entry-content">
      <h2>Im Wald – Was hör ich da?</h2>
      <span class="author">Jens-Uwe Bartholomäus</span>
      <p>Ein Geräuschequiz für Kinder mit spannender Waldgeschichte und vielen Tierlauten.</p>
      <a href="https://www.thalia.de/shop/home/artikeldetails/A1054164339" target="_blank">Bei Thalia ansehen</a>
    </div>
  </article>

</main>

<!-- Sidebar & Navigation -->
<script src="/include/headerneu.js"></script>

</body>
</html>
