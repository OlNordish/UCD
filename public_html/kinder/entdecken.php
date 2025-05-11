<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Entdecke den Wald – Interaktives Spiel</title>

  <!-- Styles -->
  <link rel="stylesheet" href="/include/headerneu.css">

  <style>
    body {
      margin: 0;
      font-family: 'Nunito', sans-serif;
      background: url('/img/Background1.png') no-repeat center center fixed;
      background-size: cover;
      color: #ffffff;
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
      font-size: 2rem;
      cursor: pointer;
      display: flex;
      align-items: center;
      justify-content: center;
      background-color: #ffffff33;
      border-radius: 10px;
    }

    #sprechblase-container {
      position: absolute;
      bottom: 20px;
      right: 20px;
      display: flex;
      align-items: flex-end;
      gap: 10px;
      z-index: 100;
    }

    #sprechblase {
      background: #ffffaa;
      padding: 10px;
      border-radius: 10px;
      width: 300px;
      font-size: 16px;
      color: #000;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
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
      font-size: 2rem;
      border-radius: 10px;
    }
  </style>
</head>
<body>

<!-- Navigation + Sidebar -->
<?php include($_SERVER['DOCUMENT_ROOT'] . '/include/headerneu.php'); ?>

<!-- Waldszene mit Tieren -->
<div id="waldszene">
  <div class="tier" id="eichhoernchen" style="top: 10%; left: 10%;">🐿️</div>
  <div class="tier" id="maus" style="top: 20%; left: 30%;">🐭</div>
  <div class="tier" id="eule" style="top: 30%; left: 50%;">🦉</div>
  <div class="tier" id="specht" style="top: 40%; left: 70%;">🐦</div>
  <div class="tier" id="fuchs" style="top: 60%; left: 20%;">🦊</div>
  <div class="tier" id="kaninchen" style="top: 70%; left: 40%;">🐰</div>
  <div class="tier" id="reh" style="top: 50%; left: 60%;">🦌</div>
  <div class="tier" id="wolf" style="top: 70%; left: 80%;">🐺</div>

  <div id="sprechblase-container">
    <div id="sprechblase">
      <p id="textfeld">Klicke auf ein Tier, um mit ihm zu reden!</p>
    </div>
    <div id="fuchs-avatar">🦊</div>
  </div>
</div>

<!-- JavaScript für Menü & Tierdialog -->
<script src="/include/headerneu.js"></script>
<script>
  const tierTexte = {
    eichhoernchen: ["Hallo, ich bin das Eichhörnchen! Ich liebe Nüsse.", "eichhoernchen.mp3"],
    maus: ["Ich bin die Maus – vorsichtig und flink!", "maus.mp3"],
    eule: ["Ich bin die Eule. Nachts bin ich unterwegs!", "eule.mp3"],
    specht: ["Ich bin der Specht – ich klopfe gern.", "specht.mp3"],
    fuchs: ["Hallo! Ich bin der schlaue Fuchs.", "fuchs.mp3"],
    kaninchen: ["Ich bin das Kaninchen. Immer auf Zack!", "kaninchen.mp3"],
    reh: ["Ich bin das Reh und liebe junge Blätter.", "reh.mp3"],
    wolf: ["Ich bin der Wolf – auuu!", "wolf.mp3"]
  };

  document.querySelectorAll(".tier").forEach(tier => {
    tier.addEventListener("click", () => {
      const [text, audioFile] = tierTexte[tier.id];
      document.getElementById('textfeld').innerText = text;

      const audio = new Audio(`/audio/${audioFile}`);
      audio.play();
    });
  });
</script>
</body>
</html>
