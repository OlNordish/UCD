<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Hörspielempfehlungen</title>

  <!-- Sidebar & Navigation -->    
  <link rel="stylesheet" href="/include/headerneu.css">

  <style>
    h1 {
      font-size: 2.5rem;
      text-align: center;
      margin-bottom: 1rem;
      color: #333333;
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
    <img src="/downloads/Medientipps_Hoerspiele/Hoerspiel_1.jpg" alt="Cover WAS IST WAS Junior – Im Wald" class="entry-icon">
    <div class="entry-content">
      <h2>WAS IST WAS Junior – Im Wald</h2>
      <span class="author">Friederike Wilhelmi, Luis-Max Anders</span>
      <p>Rätsele mit dem Hörspiel mit, es sollen zum Beispiel verschiedene Baumarten bestimmt werden.</p>
      <a href="https://www.thalia.de/shop/home/artikeldetails/A1009060835" target="_blank">Bei Thalia ansehen</a>
    </div>
  </article>

  <article class="entry-box">
    <img src="/downloads/Medientipps_Hoerspiele/Hoerspiel_2.jpg" alt="Cover WAS IST WAS – Wilde Wälder / Lebendiger Boden" class="entry-icon">
    <div class="entry-content">
      <h2>Wilde Wälder / Lebendiger Boden</h2>
      <span class="author">Manfred Baur, Kristiane Semar</span>
      <p>Erfahre, wie Boden entsteht, weshalb er verloren gehen kann und warum der Regenwurm ein guter Gärtner ist.</p>
      <a href="https://www.thalia.de/shop/home/artikeldetails/A1036069846" target="_blank">Bei Thalia ansehen</a>
    </div>
  </article>

  <article class="entry-box">
    <img src="/downloads/Medientipps_Hoerspiele/Hoerspiel_3.jpg" alt="Cover Kleine Helden im Wald" class="entry-icon">
    <div class="entry-content">
      <h2>Kleine Helden im Wald</h2>
      <span class="author">Matthias Meyer-Göllner</span>
      <p>Lerne am Abenteuer von Igel, Wildschwein, Kröte und Amselbaby die Tiere und Pflanzen des Waldes kennen.</p>
      <a href="https://www.thalia.de/shop/home/artikeldetails/A1038147083" target="_blank">Bei Thalia ansehen</a>
    </div>
  </article>
</main>

<!-- Sidebar & Navigation -->
<script src="/include/headerneu.js"></script>

</body>
</html>
