<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Willkommen im Wald!</title>

  <!-- Globale Navigation + Styles -->
  <link rel="stylesheet" href="/include/headerneu.css" />
  <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;700&family=Fredoka&family=Nunito&display=swap" rel="stylesheet">
  <style>
    body {
      margin: 0;
      font-family: 'Baloo 2', cursive;
      background: url('/bilder/bg1.svg') no-repeat center center fixed;
      background-size: cover;
      color: #fff;
      overflow-x: hidden;
    }

    main {
      max-width: 1000px;
      margin: 5rem auto 2rem;
      padding: 2rem;
      background: rgba(255, 255, 255, 0.85);
      border-radius: 16px;
      text-align: center;
      box-shadow: 0 8px 24px rgba(0, 0, 0, 0.3);
    }

    h1 {
      font-size: 3.2rem;
      margin-bottom: 1.5rem;
      color: #2f4f4f;
      text-shadow: 2px 2px 5px rgba(0,0,0,0.2);
    }

    p.intro {
      font-size: 1.6rem;
      color: #333;
      margin-bottom: 2.5rem;
    }

    .start-buttons {
      display: flex;
      justify-content: center;
      gap: 2rem;
      flex-wrap: wrap;
    }

    .start-buttons a {
      padding: 1.5rem 3rem;
      font-size: 2rem;
      background-color: #2f4f4f;
      color: white;
      border-radius: 14px;
      text-decoration: none;
      font-weight: bold;
      box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
      transition: transform 0.2s ease, background-color 0.3s ease;
    }

    .start-buttons a:hover {
      background-color: #446969;
      transform: scale(1.05);
    }

    /* Elternbereich unten rechts */
    .elternbereich-hinweis {
      position: fixed;
      bottom: 20px;
      right: 20px;
      background-color: rgba(47, 79, 79, 0.8);
      color: #fff;
      padding: 10px 14px;
      border-radius: 10px;
      font-size: 0.9rem;
      font-family: 'Nunito', sans-serif;
      box-shadow: 0 4px 8px rgba(0,0,0,0.3);
    }

    .elternbereich-hinweis a {
      color: #fff;
      text-decoration: underline;
      font-weight: bold;
    }

    .elternbereich-hinweis a:hover {
      color: #ffeb3b;
    }

    /* Kind-Grafik im unteren Bereich */
    #waldboden {
      position: relative;
      width: 100%;
      height: 60vh;
      overflow: hidden;
    }

    #kind {
      position: absolute;
      bottom: 0;
      width: 300px;
      height: auto;
      transition: transform 0.2s ease, left 0.2s ease, top 0.2s ease;
    }
  </style>
</head>

<body>

  <!-- Navigation (Burger-Menü & Logo) -->
  <?php include($_SERVER['DOCUMENT_ROOT'] . '/include/headerneu.php'); ?>

  <!-- Hauptbereich für Kinder -->
  <main>
    <h1>Willkommen im Wald!</h1>
    <p class="intro">Bist du bereit für dein Abenteuer?</p>
    <div class="start-buttons">
      <a href="/kinder/kinder.php">👧👦 Für Kinder</a>
    </div>
  </main>

  <!-- Kind im Waldboden (Zufällige Positionierung) -->
  <div id="waldboden">
    <img id="kind" src="/downloads/kind.svg" alt="Kind im Wald">
  </div>

  <!-- Elternbereich als dezenter Button unten rechts -->
  <div class="elternbereich-hinweis">
    <a href="/erwachsene/erwachsene.php">Elterninfos öffnen</a>
  </div>

  <!-- Script zur Zufallspositionierung des Kindes -->
  <script>
    window.addEventListener('DOMContentLoaded', () => {
      const kind = document.getElementById('kind');
      const waldboden = document.getElementById('waldboden');

      const maxLeft = waldboden.clientWidth - kind.offsetWidth;
      const maxTop = waldboden.clientHeight - kind.offsetHeight;

      const left = Math.random() * maxLeft;
      const top = Math.random() * (maxTop * 0.6); // oben max. 60% der Fläche

      const scale = 0.8 - (top / waldboden.clientHeight) * 0.2;

      kind.style.left = `${left}px`;
      kind.style.top = `${top}px`;
      kind.style.transform = `scale(${scale})`;
    });
  </script>

  <!-- Navigation-Logik -->
  <script src="/include/headerneu.js"></script>
</body>
</html>
