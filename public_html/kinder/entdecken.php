<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Entdecke den Wald</title>
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

    .sidebar h3 a {
      color: white;
      text-decoration: none;
      display: block;
      font-size: 18px;
      font-weight: bold;
      border-bottom: 1px solid #ccc;
      padding-bottom: 5px;
      margin-top: 40px;
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

    #waldszene {
      position: relative;
      width: 100%;
      height: calc(100vh - 60px);
      overflow: hidden;
    }

    .tier {
      position: absolute;
      width: 80px;
      height: 80px;
      cursor: pointer;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      font-weight: bold;
      border-radius: 10px;
    }

    #sprechblase-container {
      position: absolute;
      bottom: 20px;
      right: 20px;
      display: flex;
      align-items: flex-end;
      gap: 10px;
    }

    #sprechblase {
      background: #ffffaa;
      padding: 10px;
      border-radius: 10px;
      width: 300px;
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

  <!-- Navigation -->
  <nav>
    <div class="nav-left">
      <div class="burger-menu" onclick="toggleSidebar()">☰</div>
      <div>Entdecken</div>
    </div>
    <div class="nav-logo">Waldlogo</div>
  </nav>

  <!-- Sidebar -->
  <div class="sidebar" id="sidebar">
    <section>
      <h3><a href="../index.php">Startseite</a></h3>
    </section>
    <section>
      <h3><a href="../erwachsene.html">Erwachsene</a></h3>
      <a href="../erwachsene/bastelvorlagen.php">Bastelvorlagen</a>
      <a href="../erwachsene/medientipps.php">Medientipps</a>
    </section>
    <section>
      <h3><a href="../kinder.html">Kinder</a></h3>
      <a href="entdecken.php">Entdecken</a>
      <a href="spielen.php">Spielen</a>
      <a href="quiz.php">Quiz</a>
    </section>
  </div>

  <!-- Overlay -->
  <div id="overlay" onclick="toggleSidebar()"></div>

  <!-- Waldszene -->
  <div id="waldszene">
    <div class="tier" id="eichhoernchen" style="top: 10%; left: 10%; background-color: #d2691e;">E</div>
    <div class="tier" id="maus" style="top: 20%; left: 30%; background-color: #808080;">M</div>
    <div class="tier" id="eule" style="top: 30%; left: 50%; background-color: #4b0082;">Eu</div>
    <div class="tier" id="specht" style="top: 40%; left: 70%; background-color: #8b0000;">S</div>
    <div class="tier" id="fuchs" style="top: 60%; left: 20%; background-color: #ff4500;">F</div>
    <div class="tier" id="kaninchen" style="top: 70%; left: 40%; background-color: #f5deb3; color: black;">K</div>
    <div class="tier" id="reh" style="top: 50%; left: 60%; background-color: #deb887; color: black;">R</div>
    <div class="tier" id="wolf" style="top: 70%; left: 80%; background-color: #2f4f4f;">W</div>

    <!-- Sprechblase -->
    <div id="sprechblase-container">
      <div id="sprechblase">
        <p id="textfeld">Klicke auf ein Tier, um mit ihm zu reden!</p>
      </div>
      <div id="fuchs-avatar">F</div>
    </div>
  </div>

  <script>
    function toggleSidebar() {
      const sidebar = document.getElementById("sidebar");
      const overlay = document.getElementById("overlay");
      sidebar.classList.toggle("active");
      overlay.style.display = sidebar.classList.contains("active") ? "block" : "none";
    }

    const tierTexte = {
      eichhoernchen: "Hallo, ich bin das Eichhörnchen! Ich liebe es, Nüsse, Samen und Beeren zu futtern.",
      maus: "Pieps! Ich bin die kleine Maus. Am liebsten knabbere ich an Körnern und Samen. Aber ich muss gut aufpassen – der Fuchs und die Eule würden mich sonst schnell fressen!",
      eule: "Huhuu! Ich bin die Eule. Nachts jage ich Mäuse, Frösche und kleine Vögel. Mein bester Freund? Die dunkle Nacht – dann bin ich am stärksten!",
      specht: "Klopf, klopf – ich bin der Specht! Ich hacke mit meinem Schnabel Löcher in Bäume, um Insekten zu fressen.",
      fuchs: "Hallo! Ich bin der schlaue Fuchs. Ich esse Mäuse, Kaninchen und manchmal auch Beeren. Die Maus ist zwar lecker – aber ich respektiere auch meine Nachbarn im Wald!",
      kaninchen: "Hopp, hopp! Ich bin das flinke Kaninchen. Ich knabbere gerne an jungen Pflanzen und Kräutern. Mein größter Feind ist der Fuchs – deshalb bleibe ich immer wachsam!",
      reh: "Grüß dich! Ich bin das Reh. Am liebsten fresse ich frische Triebe und junge Blätter. Ich passe gut auf die kleinen Bäumchen auf – aber wenn es zu wenig gibt, wird es schwer.",
      wolf: "Auuu! Ich bin der Wolf. Ich jage Kaninchen und Rehe, damit der Wald im Gleichgewicht bleibt. Ich bin wichtig für den Wald – auch wenn viele mich fürchten."
    };

    document.querySelectorAll(".tier").forEach(tier => {
      tier.addEventListener("click", () => {
        const text = tierTexte[tier.id];
        document.getElementById('textfeld').innerText = text;
      });
    });
  </script>

</body>
</html>
