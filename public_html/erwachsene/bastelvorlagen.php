<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Bastelvorlagen</title>
  
  <!-- Sidebar & Navigation -->
  <link rel="stylesheet" href="/include/header.css">

  <style>
  p.intro {
      font-size: 1.2rem;
      text-align: center;
      margin-bottom: 2.5rem;
      color: #4A4A4A;
    }

    .entry-grid {
      display: flex;
      flex-direction: column;
      gap: 2rem;
      max-width: 800px;
      margin: 0 auto;
    }

    .entry-box {
      display: grid;
      grid-template-columns: auto 1fr;
      gap: 1.5rem;
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
      object-fit: contain;
      background: #f0f0f0;
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
<?php include($_SERVER['DOCUMENT_ROOT'] . '/include/header.php'); ?>

<main>
  <h1>🎨 Bastelvorlagen</h1>
  <p class="intro">Kreative Ideen zum Basteln – Tiere, Pflanzen, Wetter und mehr!</p>

  <div class="entry-grid">

    <div class="entry-box">
      <img src="/downloads/kind.svg" alt="Icon Tiere" class="entry-icon" />
      <div class="entry-content">
        <h2>Tiere des Waldes</h2>
        <p>Male und bastle deine Lieblingstiere – vom Fuchs bis zum Reh.</p>
        <a href="bastelvorlagen/tiere.php">Ansehen</a>
      </div>
    </div>

    <div class="entry-box">
      <img src="/downloads/kind.svg" alt="Icon Pflanzen" class="entry-icon" />
      <div class="entry-content">
        <h2>Bäume &amp; Pflanzen</h2>
        <p>Lerne Blätter und Bäume kennen – mit Vorlagen zum Sammeln und Malen.</p>
        <a href="bastelvorlagen/pflanzen.php">Ansehen</a>
      </div>
    </div>

    <div class="entry-box">
      <img src="/downloads/kind.svg" alt="Icon Umweltschutz" class="entry-icon" />
      <div class="entry-content">
        <h2>Umweltschutz</h2>
        <p>Wie können wir dem Wald helfen? Tipps und kreative Bastelideen.</p>
        <a href="bastelvorlagen/umweltschutz.php">Ansehen</a>
      </div>
    </div>

    <div class="entry-box">
      <img src="/downloads/kind.svg" alt="Icon Jahreszeiten" class="entry-icon" />
      <div class="entry-content">
        <h2>Jahreszeiten &amp; Wetter</h2>
        <p>Was passiert im Frühling, Sommer, Herbst und Winter? Bastel das Jahr!</p>
        <a href="bastelvorlagen/jahreszeiten.php">Ansehen</a>
      </div>
    </div>

  </div>
</main>

<!-- Sidebar & Navigation -->
<script src="/include/header.js"></script>

</body>
</html>
