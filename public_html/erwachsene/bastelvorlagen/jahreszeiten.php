<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Jahreszeiten &amp; Wetter</title>

  <!-- Sidebar & Navigation -->
  <link rel="stylesheet" href="/include/headerneu.css">

  <style>
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
  <h1>📅 Jahreszeiten &amp; Wetter</h1>
  <p class="intro">Spielerisch durchs Jahr – mit Ausmalbildern, Bastelideen und Wetteruhren.</p>

  <article class="entry-box">
    <img src="/downloads/bastelvorlagen/Bastelvorlage_12.png" alt="Vorschaubild Lernuhr" class="entry-icon">
    <div class="entry-content">
      <h2>Jahreszeiten-Lernuhr zum Ausschneiden</h2>
      <p>Bastle und male deine eigene Uhr, um spielerisch die vier Jahreszeiten zu lernen!</p>
      <a href="/downloads/lernuhr.pdf" download>PDF herunterladen</a>
    </div>
  </article>

  <article class="entry-box">
    <img src="/downloads/bastelvorlagen/Bastelvorlage_13.png" alt="Vorschaubild Jahreszeitenbaum" class="entry-icon">
    <div class="entry-content">
      <h2>Jahreszeitenbaum zum Anmalen und Basteln</h2>
      <p>Gestalte deinen eigenen Baum und entdecke, wie sich die Jahreszeiten verändern!</p>
      <a href="/downloads/jahreszeitenbaum.pdf" download>PDF herunterladen</a>
    </div>
  </article>

  <article class="entry-box">
    <img src="/downloads/bastelvorlagen/Bastelvorlage_14.png" alt="Vorschaubild Herbstdrachen" class="entry-icon">
    <div class="entry-content">
      <h2>Herbstdrachen zum Basteln</h2>
      <p>Baue deinen eigenen Drachen und lass ihn im Herbstwind fliegen!</p>
      <a href="/downloads/herbstdrachen.pdf" download>PDF herunterladen</a>
    </div>
  </article>

  <article class="entry-box">
    <img src="/downloads/bastelvorlagen/Bastelvorlage_15.png" alt="Vorschaubild Malvorlage Blätter" class="entry-icon">
    <div class="entry-content">
      <h2>Malvorlage zu den Jahreszeiten</h2>
      <p>Male die bunten Szenen der vier Jahreszeiten aus und entdecke ihre Besonderheiten!</p>
      <a href="/downloads/jahreszeiten.pdf" download>PDF herunterladen</a>
    </div>
  </article>

  <article class="entry-box">
    <img src="/downloads/bastelvorlagen/Bastelvorlage_16.png" alt="Vorschaubild Symbolbilder" class="entry-icon">
    <div class="entry-content">
      <h2>Symbolbilder der Jahreszeiten</h2>
      <p>Entdecke die typischen Motive für Frühling, Sommer, Herbst und Winter zum Ausmalen!</p>
      <a href="/downloads/symbolbilder.pdf" download>PDF herunterladen</a>
    </div>
  </article>
</main>

<!-- Sidebar & Navigation -->
<script src="/include/headerneu.js"></script>

</body>
</html>
