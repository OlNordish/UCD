<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Bäume &amp; Pflanzen</title>

  <!-- Sidebar & Navigation -->
  <link rel="stylesheet" href="/include/header.css">

 <style>
  p.intro {
    font-size: 1.2rem;
    text-align: center;
    margin-bottom: 2rem;
    color: #4A4A4A;
  }

  .entry-box {
    width: 90%;
    display: grid;
    grid-template-columns: auto 1fr;
    gap: 1rem;
    align-items: center;
    background-color: rgba(255, 255, 255, 0.95);
    color: #333;
    border-radius: 12px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.3);
    padding: 1.5rem;
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
</style>
</head>

<body>

<!-- Sidebar & Navigation -->
<?php include($_SERVER['DOCUMENT_ROOT'] . '/include/headerneu.php'); ?>

<main>
  <h1>🌳 Bäume &amp; Pflanzen</h1>
  <p class="intro">Mal- und Bastelideen rund um Blätter, Bäume und Naturspiele.</p>

  <article class="entry-box">
    <img src="/downloads/bastelvorlagen/Bastelvorlage_6.png" alt="Herbstblätter zum Ausmalen" class="entry-icon">
    <div class="entry-content">
      <h2>Herbstblätter zum Ausmalen</h2>
      <p>Eine bunte Malvorlage mit verschiedenen Blattformen – lass den Herbst in deinen Lieblingsfarben erstrahlen!</p>
      <a href="/downloads/herbstblaetter.pdf" download>PDF herunterladen</a>
    </div>
  </article>

  <article class="entry-box">
    <img src="/downloads/bastelvorlagen/Bastelvorlage_7.png" alt="Blätterbuch basteln" class="entry-icon">
    <div class="entry-content">
      <h2>Blätterbuch selber machen</h2>
      <p>Sammle, presse und entdecke die Blätter der Bäume – gestalte dein eigenes kleines Naturlexikon!</p>
      <a href="/downloads/blaetterbuch.pdf" download>PDF herunterladen</a>
    </div>
  </article>

  <article class="entry-box">
    <img src="/downloads/bastelvorlagen/Bastelvorlage_8.png" alt="Wald-Memory basteln" class="entry-icon">
    <div class="entry-content">
      <h2>Dein eigenes Wald-Memory</h2>
      <p>Bastle dein persönliches Memory-Spiel mit Waldtieren und Pflanzen und spiele es mit Freunden und Familie!</p>
      <a href="/downloads/waldmemory.pdf" download>PDF herunterladen</a>
    </div>
  </article>
</main>

<!-- Sidebar & Navigation -->
<script src="/include/header.js"></script>

</body>
</html>
