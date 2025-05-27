<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Über uns</title>
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
      margin-bottom: 2rem;
      color: #333;
    }

    .team-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      gap: 2rem;
    }

    .team-card {
      background-color: rgba(255, 255, 255, 0.95);
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.2);
      padding: 1.5rem;
      flex: 1 1 28%;
      display: flex;
      flex-direction: column;
      align-items: center;
      text-align: center;
    }

    .team-card img {
      width: 120px;
      height: 120px;
      object-fit: contain;
      border-radius: 50%;
      background: #f0f0f0;
      margin-bottom: 1rem;
    }

    .team-card h2 {
      font-size: 1.3rem;
      color: #5A3E36;
      margin: 0.5rem 0 0.25rem;
    }

    .team-card p {
      font-size: 0.95rem;
      color: #3C3C3C;
      margin: 0.25rem 0;
    }

    .team-card .matrikel {
      font-style: italic;
      color: #666666;
      font-size: 0.9rem;
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

<?php include($_SERVER['DOCUMENT_ROOT'] . '/include/headerneu.php'); ?>

<main>
  <h1>👩‍💻 Über uns</h1>

  <div class="team-container">

    <div class="team-card">
      <img src="/bilder/steffen.png" alt="Steffen Bosse">
      <h2>Steffen Bosse</h2>
        <p>Design &amp; Visuals</p>
      <p class="matrikel">Matrikelnummer: 6052231</p>
      <p><a href="mailto:steffen.bosse@student.jade-hs.de">E-Mail schreiben</a></p>
    </div>

    <div class="team-card">
      <img src="/bilder/florian.png" alt="Florian Kolb">
      <h2>Florian Kolb</h2>
        <p>Konzeption, UX &amp; Frontend</p>
      <p class="matrikel">Matrikelnummer: 6050360</p>
      <p><a href="mailto:florian.kolb@student.jade-hs.de">E-Mail schreiben</a></p>
    </div>

    <div class="team-card">
      <img src="/bilder/ike.png" alt="Friederike Kroeger">
      <h2>Friederike Kroeger</h2>
      <p>Content &amp;; Redaktion</p>
      <p class="matrikel">Matrikelnummer: 6047189</p>
      <p><a href="mailto:friederike.kroeger@student.jade-hs.de">E-Mail schreiben</a></p>
    </div>

  </div>
</main>

<script src="/include/headerneu.js"></script>
</body>
</html>
