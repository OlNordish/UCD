<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Umweltschutz</title>

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
  <h1>🌍 Umweltschutz</h1>
  <p class="intro">Male oder bastle für die Natur: Umweltschutz und Nachhaltigkeit kindgerecht erklärt.</p>

  <article class="entry-box">
    <img src="/downloads/bastelvorlagen/Bastelvorlage_9.png" alt="Umweltschutz malen" class="entry-icon">
    <div class="entry-content">
      <h2>Malvorlage zum Umweltschutz</h2>
      <p>Male bunte Bilder, die zeigen, wie wir unsere Natur schützen können!</p>
      <a href="/downloads/umweltschutz.pdf" download>PDF herunterladen</a>
    </div>
  </article>

  <article class="entry-box">
    <img src="/downloads/bastelvorlagen/Bastelvorlage_10.png" alt="Erde schützen malen" class="entry-icon">
    <div class="entry-content">
      <h2>Malvorlage: Die Erde schützen</h2>
      <p>Gestalte tolle Bilder und lerne, wie wichtig der Schutz unserer Umwelt ist!</p>
      <a href="/downloads/erde.pdf" download>PDF herunterladen</a>
    </div>
  </article>

  <article class="entry-box">
    <img src="/downloads/bastelvorlagen/Bastelvorlage_11.png" alt="Recycling ausmalen" class="entry-icon">
    <div class="entry-content">
      <h2>Malvorlage zum Recycling</h2>
      <p>Male die Erde und Recycling-Symbole bunt aus – für mehr Umweltbewusstsein beim Malen!</p>
      <a href="/downloads/recycling.pdf" download>PDF herunterladen</a>
    </div>
  </article>
</main>

<!-- Sidebar & Navigation -->
<script src="/include/headerneu.js"></script>

</body>
</html>
