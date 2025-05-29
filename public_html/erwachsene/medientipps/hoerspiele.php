<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Hörspielempfehlungen</title>

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
<?php include($_SERVER['DOCUMENT_ROOT'] . '/include/header.php'); ?>

<main>
  <h1>🎧 Hörspielempfehlungen</h1>
  <p class="intro">Spannende Geschichten und Geräusche aus dem Wald – ideal für kleine Naturfreunde.</p>

  <article class="entry-box">
    <img src="/downloads/Medientipps_Hoerspiele/Hoerspiel_1.jpeg" alt="Cover WAS IST WAS Junior – Im Wald" class="entry-icon">
    <div class="entry-content">
      <h2>WAS IST WAS Junior – Im Wald</h2>
      <span class="author">Friederike Wilhelmi, Luis-Max Anders</span>
      <p>Rätsele mit dem Hörspiel mit, es sollen zum Beispiel verschiedene Baumarten bestimmt werden.</p>
      <a href="https://www.thalia.de/shop/home/artikeldetails/A1009060835" target="_blank">Bei Thalia ansehen</a>
    </div>
  </article>

  <article class="entry-box">
    <img src="/downloads/Medientipps_Hoerspiele/hoerspiel_2.jpg" alt="Cover WAS IST WAS – Wilde Wälder / Lebendiger Boden" class="entry-icon">
    <div class="entry-content">
      <h2>Wilde Wälder / Lebendiger Boden</h2>
      <span class="author">Manfred Baur, Kristiane Semar</span>
      <p>Erfahre, wie Boden entsteht, weshalb er verloren gehen kann und warum der Regenwurm ein guter Gärtner ist.</p>
      <a href="https://www.thalia.de/shop/home/artikeldetails/A1036069846" target="_blank">Bei Thalia ansehen</a>
    </div>
  </article>

  <article class="entry-box">
    <img src="/downloads/Medientipps_Hoerspiele/hoerspiel_3.jpeg" alt="Cover Kleine Helden im Wald" class="entry-icon">
    <div class="entry-content">
      <h2>Kleine Helden im Wald</h2>
      <span class="author">Matthias Meyer-Göllner</span>
      <p>Lerne am Abenteuer von Igel, Wildschwein, Kröte und Amselbaby die Tiere und Pflanzen des Waldes kennen.</p>
      <a href="https://www.thalia.de/shop/home/artikeldetails/A1038147083" target="_blank">Bei Thalia ansehen</a>
    </div>
  </article>
    
  <article class="entry-box">
    <img src="/downloads/Medientipps_Hoerspiele/hoerspiel_4.jpeg" alt="Cover Was hör ich da? Im Wald" class="entry-icon">
    <div class="entry-content">
      <h2>Was hör ich da? Im Wald</h2>
      <span class="author">Jens-Uwe Bartholomäus</span>
      <p>Hören sich unsere Schritte auf dem Waldboden anders an als die eines Rehs oder eines Fuchses? Und wer kann eine schimpfende Amsel von einem rufenden Schwarzspecht unterscheiden? Finde es heraus!</p>
      <a href="https://www.thalia.de/shop/home/artikeldetails/A1000892071" target="_blank">Bei Thalia ansehen</a>
    </div>
  </article>
</main>

<!-- Sidebar & Navigation -->
<script src="/include/header.js"></script>

</body>
</html>
