<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Geschafft!</title>

  <!-- Sidebar & Navigation -->
  <link rel="stylesheet" href="/include/headerneu.css" />

  <style>
    body {
      margin: 0;
      font-family: 'Nunito', sans-serif;
      background: url('/bilder/bg1.svg') no-repeat center center fixed;
      background-size: cover;
      color: #ffffff;
    }

    main {
      min-height: 100vh;
      padding: 6rem 2rem 3rem;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      text-align: center;
    }

    h1 {
      font-size: 3rem;
      margin-bottom: 1rem;
      text-shadow: 2px 2px 4px rgba(0,0,0,0.6);
    }

    p {
      font-size: 1.4rem;
      max-width: 600px;
      margin-bottom: 2.5rem;
      line-height: 1.6;
      background-color: rgba(0, 0, 0, 0.5);
      padding: 1rem 1.5rem;
      border-radius: 12px;
    }

    .button-group {
      display: flex;
      flex-wrap: wrap;
      gap: 1rem;
      justify-content: center;
    }

    button {
      background-color: #2f4f4f;
      color: white;
      border: none;
      padding: 1rem 2rem;
      font-size: 1.1rem;
      border-radius: 10px;
      cursor: pointer;
      transition: background-color 0.3s ease;
      box-shadow: 0 4px 10px rgba(0,0,0,0.3);
    }

    button:hover {
      background-color: #4f6f6f;
    }

    #fuchs-avatar {
      font-size: 4rem;
      filter: drop-shadow(2px 2px 4px rgba(0,0,0,0.4));
      margin-bottom: 1rem;
    }
  </style>
</head>
<body>

<!-- Sidebar & Navigation -->
<?php include($_SERVER['DOCUMENT_ROOT'] . '/include/headerneu.php'); ?>

<main>
  <h1>🎉 Super gemacht!</h1>
  <div id="fuchs-avatar">🦊</div>
  <p>Du hast alle 8 Level erfolgreich abgeschlossen und den Wald genau beobachtet.<br>Der Fuchs ist stolz auf dich!</p>

  <div class="button-group">
    <button onclick="window.location.href='/kinder/spielen.php'">Zurück zur Spielübersicht</button>
    <button onclick="neustart()">Spiel zurücksetzen</button>
  </div>
</main>

<script>
  function neustart() {
    const sicher = confirm("Willst du wirklich neu beginnen? Dein gesamter Fortschritt wird gelöscht.");
    if (sicher) {
      localStorage.clear();
      window.location.href = '/kinder/spielen.php';
    }
  }
</script>

<!-- Sidebar & Navigation -->
<script src="/include/headerneu.js"></script>
	
</body>
</html>
