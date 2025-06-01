<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Geschafft!</title>

  <link rel="stylesheet" href="/include/header.css">
  <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;700&family=Fredoka:wght@400;500&family=Nunito&display=swap" rel="stylesheet">

  <style>
    body {
      font-family: 'Nunito', sans-serif;
      margin: 0;
      background-color: #f8f9f5;
      color: #2f4f4f;
    }

    main {
      max-width: 900px;
      margin: 4rem auto;
      padding: 2rem;
      background: rgba(255, 255, 255, 0.9);
      border-radius: 16px;
      text-align: center;
      box-shadow: 0 4px 12px rgba(0,0,0,0.2);
    }

    h1 {
      font-size: 3rem;
      color: #2f4f4f;
      margin-bottom: 1rem;
      text-shadow: 1px 1px 3px rgba(0,0,0,0.1);
    }

    .abschluss-fuchs {
      width: 180px;
      margin: 1.5rem auto 1rem;
      filter: drop-shadow(2px 2px 5px rgba(0,0,0,0.25));
    }

    p {
      font-size: 1.3rem;
      line-height: 1.6;
      max-width: 650px;
      margin: 1rem auto 2rem;
      background: rgba(255, 255, 255, 0.6);
      padding: 1rem 1.5rem;
      border-radius: 12px;
    }

    .button-group {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      gap: 1rem;
    }

    .button-group button {
      font-size: 1rem;
      font-weight: bold;
      padding: 0.8rem 1.4rem;
      border: none;
      border-radius: 12px;
      cursor: pointer;
      transition: background-color 0.3s ease, transform 0.2s ease;
      color: white;
    }

    .btn-uebersicht {
      background-color: #4A6D4F;
    }

    .btn-uebersicht:hover {
      background-color: #365539;
      transform: scale(1.05);
    }

    .btn-reset {
      background-color: #d9534f;
    }

    .btn-reset:hover {
      background-color: #c9302c;
      transform: scale(1.05);
    }

    /* Modal-Stile */
    .modal {
      position: fixed;
      z-index: 9999;
      left: 0; top: 0;
      width: 100%; height: 100%;
      background-color: rgba(0,0,0,0.5);
      display: none;
      align-items: center;
      justify-content: center;
    }

    .modal-content {
      background: #fff;
      padding: 30px;
      border-radius: 14px;
      box-shadow: 0 6px 16px rgba(0,0,0,0.3);
      max-width: 400px;
      width: 90%;
      font-family: 'Baloo 2', cursive;
      text-align: center;
      color: #222;
    }

    .modal-buttons {
      margin-top: 20px;
      display: flex;
      gap: 20px;
      justify-content: center;
    }

    .modal-buttons button {
      font-family: 'Baloo 2', cursive;
      font-size: 18px;
      padding: 10px 20px;
      border-radius: 10px;
      border: none;
      cursor: pointer;
      box-shadow: 0 2px 6px rgba(0,0,0,0.2);
    }

    #confirmJa {
      background-color: #d9534f;
      color: white;
    }

    #confirmAbbrechen {
      background-color: #ccc;
      color: #222;
    }

    #confirmJa:hover {
      background-color: #c9302c;
    }

    #confirmAbbrechen:hover {
      background-color: #bbb;
    }

    @media (max-width: 600px) {
      h1 {
        font-size: 2.2rem;
      }

      p {
        font-size: 1.1rem;
      }
    }
  </style>
</head>
<body>

<?php include($_SERVER['DOCUMENT_ROOT'] . '/include/header.php'); ?>

<main>
  <h1>🎉 Super gemacht!</h1>
  <img src="/bilder/fuchs.svg" alt="Fuchs Illustration" class="abschluss-fuchs">
  <p>Du hast alle 8 Level abgeschlossen und den Wald genau beobachtet.<br>
  Jetzt weißt du, dass alles im Wald zusammenhängt – ein lebendes Netzwerk!</p>

  <div class="button-group">
    <button class="btn-uebersicht" onclick="window.location.href='/kinder/spielen.php'">🔍 Zurück zur Spielübersicht</button>
    <button class="btn-reset" onclick="zeigeResetDialog()">🔄 Spiel zurücksetzen</button>
  </div>
</main>

<!-- MODAL -->
<div id="confirmModal" class="modal">
  <div class="modal-content">
    <p>Willst du wirklich neu beginnen? Dein gesamter Fortschritt wird gelöscht.</p>
    <div class="modal-buttons">
      <button id="confirmJa">Ja, löschen</button>
      <button id="confirmAbbrechen">Abbrechen</button>
    </div>
  </div>
</div>

<script>
  function zeigeResetDialog() {
    document.getElementById("confirmModal").style.display = "flex";
  }

  document.getElementById("confirmJa").addEventListener("click", () => {
    localStorage.clear();
    window.location.href = '/kinder/spielen.php';
  });

  document.getElementById("confirmAbbrechen").addEventListener("click", () => {
    document.getElementById("confirmModal").style.display = "none";
  });
</script>

<script src="/include/header.js"></script>
</body>
</html>
