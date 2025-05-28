<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Über uns</title>

  <!-- Sidebar & Navigation -->
  <link rel="stylesheet" href="/include/headerneu.css">

  <style>
    h1 {
      font-size: 2.5rem;
      text-align: center;
      margin-bottom: 1.5rem;
      color: #333;
    }

    .intro {
      background-color: #fff;
      border-radius: 12px;
      padding: 1.5rem;
      margin-bottom: 3rem;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }

    .intro p {
      font-size: 1.05rem;
      line-height: 1.6;
      color: #3C3C3C;
      margin: 0 0 1rem;
    }

    .team-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      gap: 2rem;
    }

    .team-card {
      background-color: rgba(255, 255, 255, 0.95);
      border: 4px dashed #a8cfa1;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.15);
      padding: 1.5rem;
      flex: 1 1 28%;
      display: flex;
      flex-direction: column;
      align-items: center;
      text-align: center;
      position: relative;
      overflow: hidden;
      transition: transform 0.2s;
    }

    .team-card:hover {
      transform: translateY(-4px);
    }

    .team-card img {
      width: 120px;
      height: 120px;
      object-fit: cover;
      border-radius: 16px;
      background: #e9f5ec;
      border: 3px solid #6b8e23;
      margin-bottom: 0.8rem;
    }

    .team-card h2 {
      font-size: 1.3rem;
      color: #4a5e3b;
      margin: 0.5rem 0 0.4rem;
    }

    .team-card p {
      font-size: 0.95rem;
      color: #3C3C3C;
      margin: 0.3rem 0;
    }

    .team-card .matrikel {
      font-style: italic;
      color: #6b6b6b;
      font-size: 0.85rem;
      margin-top: 0.2rem;
    }

    @media (max-width: 800px) {
      .team-container {
        flex-direction: column;
        align-items: center;
      }

      .team-card {
        width: 100%;
        max-width: 400px;
      }
    }
  </style>
</head>
<body>

<!-- Sidebar & Navigation -->
<?php include($_SERVER['DOCUMENT_ROOT'] . '/include/headerneu.php'); ?>

<main>
  <h1>👩‍💻 Über uns</h1>

  <div class="intro">
    <p><strong>Willkommen auf unserer Wald-Website!</strong></p>
    <p>Wir sind drei Studierende, die den Wald, Tiere und kreative Ideen lieben. Im Rahmen eines Moduls an der Jade Hochschule haben wir diese Website entwickelt, weil wir glauben: Wer den Wald gut kennt, schützt ihn auch besser!</p>
    <p>Unsere Seite soll Kindern zeigen, was der Wald für spannende Dinge bereithält – mit Mal- und Bastelideen, Spielen und Geschichten. Dabei verzichten wir auf schwierige Wörter wie „Ökosystem“ oder „Biodiversität“ und erklären den Wald lieber anhand und mit Hilfe von Tieren, Bildern und Aktionen.</p>
    <p>Auch für Eltern, Großeltern oder andere Begleitpersonen gibt es Material. Und der Wald kann auch außerhalb des Bildschirms erlebt werden – beim Sammeln von Blättern und Spazierengehen zum Beispiel.</p>
    <p><strong>Wir wünschen euch ganz viel Spaß beim Entdecken!</strong></p>
    <p>Euer Wald-Team</p>
  </div>

  <div class="team-container">

    <div class="team-card">
      <h2>🎨 Steffen Bosse</h2>
      <img src="/bilder/steffen.png" alt="Steffen Bosse">
      <p><strong>Design &amp; Visuals</strong></p>
      <p class="matrikel">📘 Matrikelnummer: 6052231</p>
      <p><a href="mailto:steffen.bosse@student.jade-hs.de">📩 E-Mail schreiben</a></p>
    </div>

    <div class="team-card">
      <h2>🧠 Florian Kolb</h2>
      <img src="/bilder/florian.png" alt="Florian Kolb">
      <p><strong>Konzeption, UX &amp; Frontend</strong></p>
      <p class="matrikel">📘 Matrikelnummer: 6050360</p>
      <p><a href="mailto:florian.kolb@student.jade-hs.de">📩 E-Mail schreiben</a></p>
    </div>

    <div class="team-card">
      <h2>🌼 Friederike Kroeger</h2>
      <img src="/bilder/ike.png" alt="Friederike Kroeger">
      <p><strong>📝 Redaktion &amp; Inhalte</strong></p>
      <p class="matrikel">📘 Matrikelnummer: 6047189</p>
      <p><a href="mailto:friederike.kroeger@student.jade-hs.de">📩 E-Mail schreiben</a></p>
    </div>

  </div>
</main>

<!-- Sidebar & Navigation -->
<script src="/include/headerneu.js"></script>
    
</body>
</html>
