<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Für Kinder – Wald entdecken</title>
  <style>
    body {
      margin: 0;
      font-family: sans-serif;
      background-color: #8fbc8f;
    }

    nav {
      background-color: #2f4f4f;
      color: white;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 10px 20px;
      position: relative;
      z-index: 10;
    }

    .nav-left {
      display: flex;
      align-items: center;
      gap: 20px;
    }

    .burger-menu {
      font-size: 24px;
      cursor: pointer;
    }

    .nav-logo {
      position: absolute;
      left: 50%;
      transform: translateX(-50%);
      font-weight: bold;
      font-size: 20px;
    }

    .sidebar {
      position: fixed;
      top: 0;
      left: -300px;
      width: 250px;
      height: 100%;
      background-color: #2f4f4f;
      color: white;
      padding: 20px;
      box-shadow: 2px 0 5px rgba(0,0,0,0.5);
      transition: left 0.3s ease-in-out;
      z-index: 9;
    }

    .sidebar.active {
      left: 0;
    }

    .sidebar h3 {
      margin-top: 40px;
      font-size: 18px;
      font-weight: bold;
      border-bottom: 1px solid #ccc;
      padding-bottom: 5px;
    }

    .sidebar section {
      margin-bottom: 20px;
    }

    .sidebar a {
      display: block;
      color: white;
      text-decoration: none;
      margin: 5px 0;
    }

    #overlay {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0,0,0,0.5);
      z-index: 8;
      display: none;
    }

    main {
      padding: 60px 20px;
      display: flex;
      flex-direction: column;
      align-items: center;
      text-align: center;
    }

    h1 {
      color: #2f4f4f;
    }

    .info-text {
      font-size: 18px;
      margin: 10px 0 40px;
      max-width: 600px;
    }

    .kinder-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
      gap: 30px;
      width: 100%;
      max-width: 600px;
    }

    .kachel {
      background-color: #3cb371;
      color: white;
      text-decoration: none;
      padding: 30px 20px;
      border-radius: 15px;
      font-size: 20px;
      font-weight: bold;
      transition: background-color 0.3s;
    }

    .kachel:hover {
      background-color: #2e8b57;
    }

    #sprechblase-container {
      position: fixed;
      bottom: 20px;
      right: 20px;
      display: flex;
      align-items: flex-end;
      gap: 10px;
      z-index: 10;
    }

    #sprechblase {
      background: #ffffaa;
      padding: 10px;
      border-radius: 10px;
      width: 250px;
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
  </style>
</head>
<body>

  <!-- HEADER -->
  <nav>
    <div class="nav-left">
      <div class="burger-menu" onclick="toggleSidebar()">☰</div>
      <div>Kinder</div>
    </div>
    <div class="nav-logo">Waldlogo</div>
  </nav>

  <!-- SIDEBAR -->
  <div class="sidebar" id="sidebar">
    <section>
      <h3>Erwachsene</h3>
      <a href="erwachsene/bastelvorlagen.html">Bastelvorlagen</a>
      <a href="erwachsene/medientipps.html">Medientipps</a>
    </section>
    <section>
      <h3>Kinder</h3>
      <a href="kinder/entdecken.html">Entdecken</a>
      <a href="kinder/spielen.html">Spielen</a>
      <a href="kinder/quiz.html">Quiz</a>
    </section>
  </div>

  <!-- OVERLAY -->
  <div id="overlay" onclick="toggleSidebar()"></div>

  <!-- INHALT -->
  <main>
    <h1>Hallo, Entdecker!</h1>
    <p class="info-text">Was möchtest du heute im Wald erleben? Wähle aus, was dir Spaß macht!</p>

    <div class="kinder-grid">
      <a href="entdecken.php" class="kachel">🌲 Entdecken<br><small>Entdecke den Wald</small></a>
      <a href="spielen.php" class="kachel">🧩 Spielen<br><small>Was bewirkt Veränderung?</small></a>
      <a href="quiz.php" class="kachel">❓ Quiz<br><small>Teste dein Waldwissen</small></a>
    </div>
  </main>

  <!-- FUCHS-SPRECHBLASE -->
  <div id="sprechblase-container">
    <div id="fuchs-avatar">F</div>
    <div id="sprechblase">
      Hallo! Ich bin dein Begleiter.<br>
      Ich helfe dir beim Entdecken, Spielen und Rätseln.
    </div>
  </div>

  <!-- SCRIPT -->
  <script>
    function toggleSidebar() {
      const sidebar = document.getElementById("sidebar");
      const overlay = document.getElementById("overlay");
      sidebar.classList.toggle("active");
      overlay.style.display = sidebar.classList.contains("active") ? "block" : "none";
    }
  </script>

</body>
</html>
