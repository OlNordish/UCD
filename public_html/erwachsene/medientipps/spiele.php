<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Spiele &amp; Rätsel</title>

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
  <h1>🎲 Spiele &amp; Rätsel</h1>
  <p class="intro">Spielerisch den Wald entdecken – mit Naturpuzzles, Quizfragen und kreativen Spielideen.</p>

  <!-- Thalia-Spiele mit Links -->
  <article class="entry-box">
    <img src="/downloads/Medientipps_Spiele/Spiel_1.jpeg" alt="Ravensburger Puzzle" class="entry-icon">
    <div class="entry-content">
      <h2>Ravensburger: Tiere im Wald und auf der Wiese (Puzzle)</h2>
      <p>Puzzlevergnügen mit Sachwissen für Kinder ab 4 Jahren.</p>
      <a href="https://www.thalia.de/shop/home/artikeldetails/A1066111397" target="_blank">Bei Thalia ansehen</a>
    </div>
  </article>

  <article class="entry-box">
    <img src="/downloads/Medientipps_Spiele/Spiel_2.jpeg" alt="Schmidt Puzzle" class="entry-icon">
    <div class="entry-content">
      <h2>Schmidt Spiele – Tiere im Wald (100 Teile)</h2>
      <p>Puzzle dir deinen eigenen Wald mit detailreichen Tiermotiven!</p>
      <a href="https://www.thalia.de/shop/home/artikeldetails/A1058653863" target="_blank">Bei Thalia ansehen</a>
    </div>
  </article>

  <article class="entry-box">
    <img src="/downloads/Medientipps_Spiele/Spiel_3.jpg" alt="Mischwald Spiel" class="entry-icon">
    <div class="entry-content">
      <h2>Lookout Spiele – Mischwald</h2>
      <p>Ein strategisches Kartenspiel rund um ein ökologisches Waldsystem.</p>
      <a href="https://www.thalia.de/shop/home/artikeldetails/A1069032393" target="_blank">Bei Thalia ansehen</a>
    </div>
  </article>

  <article class="entry-box">
    <img src="/downloads/Medientipps_Spiele/Spiel_4.jpeg" alt="Baumkronen Spiel" class="entry-icon">
    <div class="entry-content">
      <h2>Kosmos: Baumkronen</h2>
      <p>Ein wunderschönes Zwei-Personen-Spiel – Regenwald aufbauen und entdecken.</p>
      <a href="https://www.thalia.de/shop/home/artikeldetails/A1060084139" target="_blank">Bei Thalia ansehen</a>
    </div>
  </article>

  <article class="entry-box">
    <img src="/downloads/Medientipps_Spiele/Spiel_5.jpeg" alt="Naturmemo Wald" class="entry-icon">
    <div class="entry-content">
      <h2>Quelle &amp; Meyer – Natur-Memo Wald</h2>
      <p>64 Karten für spielerisches Lernen mit Tieren und Pflanzen des Waldes.</p>
      <a href="https://www.thalia.de/shop/home/artikeldetails/A1046795929" target="_blank">Bei Thalia ansehen</a>
    </div>
  </article>

  <!-- Kostenlose Spiele mit PDFs -->
  <article class="entry-box">
    <img src="/downloads/Medientipps_Spiele/Spiel_6.png" alt="Blattdetektiv" class="entry-icon">
    <div class="entry-content">
      <h2>Blatt-Detektivbogen</h2>
      <p>Mache einen Waldspaziergang und finde verschiedene Blattformen!</p>
      <a href="/downloads/detektivbogen.pdf" download>PDF herunterladen</a>
    </div>
  </article>

  <article class="entry-box">
    <img src="/downloads/Medientipps_Spiele/Spiel_7.png" alt="Kreuzworträtsel 1" class="entry-icon">
    <div class="entry-content">
      <h2>Kreuzworträtsel Wald (Bildrätsel)</h2>
      <p>Teste dein Wissen über den Wald mit einem spannenden Bilderrätsel!</p>
      <a href="/downloads/kreuzwortraetselwald1.pdf" download>PDF herunterladen</a>
    </div>
  </article>

  <article class="entry-box">
    <img src="/downloads/Medientipps_Spiele/Spiel_9.png" alt="Jolinchens Waldquiz" class="entry-icon">
    <div class="entry-content">
      <h2>Jolinchens Waldquiz</h2>
      <p>Teste dein Wissen mit lustigen Fragen zu Tieren und Natur.</p>
      <a href="/downloads/waldraetsel.pdf" download>PDF herunterladen</a>
    </div>
  </article>

  <article class="entry-box">
    <img src="/downloads/Medientipps_Spiele/Spiel_10.png" alt="Fußabdrücke erkennen" class="entry-icon">
    <div class="entry-content">
      <h2>Hmm? - Fußspuren?</h2>
      <p>Spurensuche im Wald – zeichne nach, was du entdeckt hast!</p>
      <a href="/downloads/hmmfußspuren.pdf" download>PDF herunterladen</a>
    </div>
  </article>

</main>

<!-- Sidebar & Navigation -->
<script src="/include/headerneu.js"></script>

</body>
</html>
