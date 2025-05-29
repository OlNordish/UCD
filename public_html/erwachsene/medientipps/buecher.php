<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Buchempfehlungen</title>
 
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
  <h1>📚 Buchempfehlungen</h1>
  <p class="intro">Ausgewählte Kinderbücher über Wald, Tiere und Natur – ideal für Zuhause, Kita oder Schule.</p>

  <article class="entry-box">
    <img src="/downloads/Medientipps_Buecher/Buch_1.jpg" alt="Buchcover Das große Waldbuch" class="entry-icon">
    <div class="entry-content">
      <h2>Das große Waldbuch: Entdecke über 350 Tiere und Pflanzen</h2>
      <span class="author">Bärbel Oftring, Holger Haag</span>
      <p>Umfassendes Sachbuch mit Bastelideen, Steckbriefen und Spielen.</p>
      <a href="https://www.thalia.de/shop/home/artikeldetails/A1053095006" target="_blank">Bei Thalia ansehen</a>
    </div>
  </article>

  <article class="entry-box">
    <img src="/downloads/Medientipps_Buecher/Buch_2.jpg" alt="Buchcover Egon Eichhorn" class="entry-icon">
    <div class="entry-content">
      <h2>Egon Eichhorn und der wilde Müll im Wald</h2>
      <span class="author">Alina Gries</span>
      <p>Sachgeschichte über heimische Waldtiere und die Folgen unachtsamer Müllentsorgung.</p>
      <a href="https://www.thalia.de/shop/home/artikeldetails/A1070097856" target="_blank">Bei Thalia ansehen</a>
    </div>
  </article>

  <article class="entry-box">
    <img src="/downloads/Medientipps_Buecher/Buch_3.jpeg" alt="Buchcover Komm mit uns in den Wald" class="entry-icon">
    <div class="entry-content">
      <h2>Komm mit uns in den Wald</h2>
      <span class="author">Peter Wohlleben</span>
      <p>Den Wald entdecken und dabei das Lesen lernen.</p>
      <a href="https://www.thalia.de/shop/home/artikeldetails/A1073146969" target="_blank">Bei Thalia ansehen</a>
    </div>
  </article>

  <article class="entry-box">
    <img src="/downloads/Medientipps_Buecher/Buch_4.jpeg" alt="Buchcover Was fressen die Tiere" class="entry-icon">
    <div class="entry-content">
      <h2>Was fressen die Tiere im Wald?</h2>
      <span class="author">Peter Wohlleben</span>
      <p>Vom Igel bis zum Schmetterling – spannende Einblicke für junge Naturfans.</p>
      <a href="https://www.thalia.de/shop/home/artikeldetails/A1066117193" target="_blank">Bei Thalia ansehen</a>
    </div>
  </article>

  <article class="entry-box">
    <img src="/downloads/Medientipps_Buecher/Buch_5.jpg" alt="Buchcover Tiere im Wald" class="entry-icon">
    <div class="entry-content">
      <h2>Tiere im Wald</h2>
      <span class="author">Bernd Pöppelmann</span>
      <p>Mal- und Zeichenbuch über unsere heimische Tierwelt – kreativ entdecken.</p>
      <a href="https://www.thalia.de/shop/home/artikeldetails/A1046987362" target="_blank">Bei Thalia ansehen</a>
    </div>
    </article>
</main>

<!-- Sidebar & Navigation -->
<script src="/include/header.js"></script>

</body>
</html>
