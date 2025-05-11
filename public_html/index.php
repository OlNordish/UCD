<!DOCTYPE html>
<html lang="de">

<head>
  <meta charset="UTF-8" />
  <title>Wald entdecken – Startseite</title>
  <base href="/" />
  
	<!-- Schriftart und Styles -->
  <link rel="stylesheet" href="include/headerneu.css">

  <style>
    body {
      margin: 0;
      font-family: 'Nunito', sans-serif, 'Segoe UI Emoji', 'Segoe UI Symbol', 'Apple Color Emoji';
      background: url('/assets/wald-startbild.jpg') no-repeat center center fixed;
      background-size: cover;
      color: #ffffff;
    }

    main {
      padding: 4rem 2rem;
      text-align: center;
    }

    h1 {
      font-size: 3rem;
      margin-bottom: 1rem;
      text-shadow: 2px 2px 4px rgba(0,0,0,0.6);
    }

    p {
      font-size: 1.5rem;
      margin-bottom: 2rem;
    }

    .start-buttons {
      display: flex;
      justify-content: center;
      gap: 2rem;
      flex-wrap: wrap;
      margin-bottom: 3rem;
    }

    .start-buttons a {
      padding: 1.2rem 2.5rem;
      font-size: 1.5rem;
      background-color: #2f4f4f;
      color: white;
      border-radius: 12px;
      text-decoration: none;
      transition: background-color 0.3s ease;
    }

    .start-buttons a:hover {
      background-color: #4f6f6f;
    }

    #sprechblase-container {
      position: fixed;
      bottom: 20px;
      right: 20px;
      display: flex;
      align-items: flex-end;
      gap: 10px;
      max-width: 320px;
      z-index: 100;
    }

    #fuchs-avatar {
      font-size: 3.5rem;
      filter: drop-shadow(2px 2px 3px rgba(0, 0, 0, 0.4));
    }

    #sprechblase {
      background-color: rgba(255, 255, 255, 0.95);
      color: #333;
      padding: 1rem 1.3rem;
      border-radius: 14px;
      font-size: 1rem;
      box-shadow: 0 4px 10px rgba(0,0,0,0.2);
    }

    #loslegen-btn {
      margin-top: 1rem;
      padding: 0.6rem 1.2rem;
      font-size: 1rem;
      border: none;
      background-color: #2f4f4f;
      color: white;
      border-radius: 8px;
      cursor: pointer;
    }

    #loslegen-btn:hover {
      background-color: #4f6f6f;
    }

    @media (max-width: 600px) {
      h1 {
        font-size: 2rem;
      }

      .start-buttons a {
        font-size: 1.2rem;
        padding: 1rem 2rem;
      }

      #sprechblase-container {
        flex-direction: column-reverse;
        align-items: flex-end;
      }
    }
  </style>
</head>
<body>

  <!-- PHP-Header (Navigation + Sidebar) -->
  <?php include $_SERVER['DOCUMENT_ROOT'] . "/include/headerneu.php"; ?>

  <main>
    <h1>Willkommen im Wald!</h1>
    <p>Wähle aus, was du entdecken möchtest:</p>

    <div class="start-buttons">
      <a href="/kinder/kinder.php">Kinder</a>
      <a href="/erwachsene/erwachsene.php">Erwachsene</a>
    </div>
  </main>

  <!-- Fuchs mit Sprechblase -->
  <div id="sprechblase-container">
    <div id="sprechblase">
      Hallo! Schön, dass du da bist.<br>
      Willst du direkt loslegen?
      <br><br>
      <button id="loslegen-btn" onclick="location.href='/kinder/spielen.php'">Loslegen</button>
    </div>
    <div id="fuchs-avatar">🦊</div>
  </div>

  <!-- JavaScript -->
  <script src="/include/headerneu.js"></script>
</body>
</html>
