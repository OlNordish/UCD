<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Bastelvorlagen – Tiere des Waldes</title>
  <style>
    body {
      margin: 0;
      font-family: sans-serif;
      background-color: #8fbc8f;
    }

    nav {
      background-color: #2f4f4f;
      color: white;
      padding: 10px 20px;
      position: fixed;
      width: 100%;
      top: 0;
      left: 0;
      z-index: 10;
    }

    .nav-logo {
      text-align: center;
      font-weight: bold;
      font-size: 20px;
    }

    main {
      padding: 100px 40px 60px 40px;
      max-width: 800px;
      margin: auto;
    }

    h1 {
      margin-bottom: 20px;
    }

    .bastelbox {
      background-color: #eafbe0;
      border-radius: 10px;
      display: flex;
      align-items: center;
      padding: 20px;
      margin-bottom: 30px;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }

    .bastelbox img {
      width: 80px;
      height: 80px;
      margin-right: 20px;
      border-radius: 8px;
      object-fit: contain;
      background-color: white;
      padding: 5px;
    }

    .bastelbox-content {
      flex-grow: 1;
    }

    .bastelbox-content h3 {
      margin: 0 0 10px 0;
    }

    .bastelbox-content p {
      margin: 0 0 10px 0;
    }

    .bastelbox-content a {
      display: inline-block;
      background-color: #3cb371;
      color: white;
      text-decoration: none;
      padding: 8px 16px;
      border-radius: 6px;
    }

    .bastelbox-content a:hover {
      background-color: #2e8b57;
    }
  </style>
</head>
<body>
  
  <?php include("include/header.php"); ?>
  <?php include("include/sidebar.php"); ?>
  
	<!-- Hauptinhalt -->
  <main>
    <h1>Tiere des Waldes</h1>
    <p>Hier finden Sie liebevoll gestaltete Bastelvorlagen zu verschiedenen Waldbewohnern – ideal zum Ausdrucken, Ausschneiden und Gestalten mit Kindern.</p>

    <div class="bastelbox">
      <img src="../img/fuchs-icon.png" alt="Fuchs Icon" />
      <div class="bastelbox-content">
        <h3>Fuchs-Maske</h3>
        <p>Eine einfache Maske zum Ausschneiden, Bemalen und Spielen.</p>
        <a href="../downloads/fuchs-maske.pdf" download>PDF herunterladen</a>
      </div>
    </div>

    <div class="bastelbox">
      <img src="../img/vogel-icon.png" alt="Vogel Icon" />
      <div class="bastelbox-content">
        <h3>Vogel-Mobile</h3>
        <p>Ein schönes Mobile mit bunten Vögeln zum Aufhängen.</p>
        <a href="../downloads/vogel-mobile.pdf" download>PDF herunterladen</a>
      </div>
    </div>

    <div class="bastelbox">
      <img src="../img/reh-icon.png" alt="Reh Icon" />
      <div class="bastelbox-content">
        <h3>Reh-Figur</h3>
        <p>Zum Ausschneiden, Zusammenkleben und Aufstellen.</p>
        <a href="../downloads/reh-figur.pdf" download>PDF herunterladen</a>
      </div>
    </div>

    <div class="bastelbox">
      <img src="../img/eichhoernchen-icon.png" alt="Eichhörnchen Icon" />
      <div class="bastelbox-content">
        <h3>Eichhörnchen basteln</h3>
        <p>Ein süßes Eichhörnchen mit Ausmal- und Klebeanleitung.</p>
        <a href="../downloads/eichhoernchen.pdf" download>PDF herunterladen</a>
      </div>
    </div>

  </main>
  <?php include("include/footer.php"); ?>
</body>
</html>
