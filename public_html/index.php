<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Wald entdecken – Startseite</title>

  <link rel="stylesheet" href="include/header.css">
  <script src="include/header.js" defer></script>

  <style>
    body {
      margin: 0;
      font-family: sans-serif;
      background-color: #8fbc8f;
    }
    main {
      display: flex;
      flex-direction: column;
      align-items: center;
      padding: 60px 20px;
      text-align: center;
    }
    .start-buttons {
      display: flex;
      gap: 30px;
      margin: 40px 0;
      flex-wrap: wrap;
      justify-content: center;
    }
    .start-buttons a {
      background-color: #3cb371;
      color: white;
      text-decoration: none;
      padding: 20px 40px;
      font-size: 20px;
      border-radius: 10px;
      font-weight: bold;
      transition: background-color 0.3s;
    }
    .start-buttons a:hover {
      background-color: #2e8b57;
    }
    #sprechblase-container {
      position: relative;
      margin-top: 60px;
      display: flex;
      align-items: flex-end;
      gap: 10px;
    }
    #sprechblase {
      background: #ffffaa;
      padding: 10px;
      border-radius: 10px;
      width: 280px;
      font-size: 16px;
    }
    #fuchs-avatar {
      width: 80px;
      height: 80px;
      background-color: #ff4500;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      font-weight: bold;
      border-radius: 10px;
      flex-shrink: 0;
    }
    #loslegen-btn {
      margin-top: 20px;
      background-color: #2f4f4f;
      color: white;
      border: none;
      padding: 10px 20px;
      border-radius: 10px;
      font-size: 16px;
      cursor: pointer;
    }
    #loslegen-btn:hover {
      background-color: #1f2f2f;
    }
  </style>
</head>
<body>

  <?php include($_SERVER['DOCUMENT_ROOT'] . '/include/header.php'); ?>

  <main>
    <h1>Willkommen im Wald!</h1>
    <p>Wähle aus, was du entdecken möchtest:</p>

    <div class="start-buttons">
      <a href="kinder/kinder.php">Kinder</a>
      <a href="erwachsene/erwachsene.php">Erwachsene</a>
    </div>

    <div id="sprechblase-container">
      <div id="fuchs-avatar">F</div>
      <div id="sprechblase">
        Hallo! Schön, dass du da bist.<br>
        Willst du direkt loslegen?
        <br><br>
        <button id="loslegen-btn" onclick="location.href='kinder/spielen.php'">Loslegen</button>
      </div>
    </div>
  </main>

</body>
</html>
