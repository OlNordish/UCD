<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Entdecken</title>
  
  <!-- Sidebar & Navigation -->
  <link rel="stylesheet" href="/include/headerneu.css">
  
  <style>
    body {
      margin: 0;
      font-family: 'Nunito', sans-serif;
      background: url("../bilder/bg1.svg") no-repeat center center fixed;
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
      border-radius: 10px;
    }

    .tier.active,
    .avatar-tier.active {
      filter: drop-shadow(0 0 10px yellow);
      transform: scale(1.1);
      z-index: 99;
      transition: all 0.3s ease;
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

    .avatar-tier {
      width: 80px;
      height: 80px;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      font-weight: bold;
      font-size: 2rem;
      border-radius: 10px;
      cursor: pointer;
    }

    #wolf svg { transform: scale(2.5); }
    #kaefer svg { transform: scale(0.3); }
    #reh svg { transform: scale(1.6); }
    #specht svg { transform: scale(0.5); }
    #eule svg { transform: scale(0.7); }
    #fuchs-avatar svg { transform: scale(1.2); }
    #kaninchen svg { transform: scale(0.8); }

    #audio-controls {
      display: flex;
      align-items: center;
      gap: 10px;
      margin-top: 10px;
    }

    #play-button {
      padding: 8px 14px;
      background-color: #66a832;
      color: #fff;
      border: none;
      border-radius: 8px;
      font-weight: bold;
      font-size: 14px;
      cursor: pointer;
      transition: background-color 0.2s ease;
    }

    #play-button:hover {
      background-color: #4e8a25;
    }

    #volume-slider {
      width: 100px;
      appearance: none;
      height: 6px;
      background: #ccc;
      border-radius: 4px;
      outline: none;
      transition: background 0.3s;
    }

    #volume-slider::-webkit-slider-thumb {
      appearance: none;
      width: 14px;
      height: 14px;
      border-radius: 50%;
      background: #66a832;
      cursor: pointer;
      border: none;
      box-shadow: 0 0 2px rgba(0, 0, 0, 0.3);
    }

    #volume-slider::-moz-range-thumb {
      width: 14px;
      height: 14px;
      border-radius: 50%;
      background: #66a832;
      cursor: pointer;
      border: none;
    }
  </style>
</head>
<body>

<!-- Sidebar & Navigation -->
<?php include($_SERVER['DOCUMENT_ROOT'] . '/include/headerneu.php'); ?>

<div id="waldszene">
  <div class="tier" id="eichhoernchen" style="top: 22%; left: 5%;">
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/bilder/eichhoernchen.svg'); ?>
  </div>

  <div class="tier" id="maus" style="top: 90%; left: 8%;">
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/bilder/maus.svg'); ?>
  </div>

  <div class="tier" id="eule" style="top: 8%; left: 96%;">
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/bilder/eule.svg'); ?>
  </div>

  <div class="tier" id="specht" style="top: 14%; left: 53%;">
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/bilder/specht.svg'); ?>
  </div>

  <div class="tier" id="kaninchen" style="top: 67%; left: 50%;">
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/bilder/kaninchen.svg'); ?>
  </div>

  <div class="tier" id="reh" style="top: 50%; left: 40%;">
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/bilder/reh.svg'); ?>
  </div>

  <div class="tier" id="wolf" style="top: 55%; left: 85%;">
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/bilder/wolf.svg'); ?>
  </div>

  <div class="tier" id="kaefer" style="top: 60%; left: 2%;">
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/bilder/kaefer.svg'); ?>
  </div>

  <div id="sprechblase-container">
    <div id="sprechblase">
      <p id="textfeld">Klicke auf ein Tier, um mit ihm zu reden!</p>
      <div id="audio-controls">
        <button id="play-button">🔊 Abspielen</button>
        <input type="range" id="volume-slider" min="0" max="1" step="0.01" value="1" />
      </div>
    </div>
    <div class="avatar-tier" id="fuchs-avatar">
      <?php include($_SERVER['DOCUMENT_ROOT'] . '/bilder/fuchs.svg'); ?>
    </div>
  </div>
</div>

<script>
  const tierTexte = {
    eichhoernchen: ["Hallo, ich bin das Eichhörnchen! Ich liebe Nüsse.", "eichhoernchen.mp3"],
    maus: ["Ich bin die Maus – vorsichtig und flink!", "maus.mp3"],
    eule: ["Ich bin die Eule. Nachts bin ich unterwegs!", "eule.mp3"],
    specht: ["Ich bin der Specht – ich klopfe gern.", "specht.mp3"],
    fuchs: ["Hallo! Ich bin der schlaue Fuchs.", "fuchs.mp3"],
    kaninchen: ["Ich bin das Kaninchen. Immer auf Zack!", "kaninchen.mp3"],
    reh: ["Ich bin das Reh und liebe junge Blätter.", "reh.mp3"],
    wolf: ["Ich bin der Wolf – auuu!", "wolf.mp3"],
    kaefer: ["Ich bin der Borkenkäfer. Die Baumrinde schmeckt super!", "kaefer.mp3"]
  };

  let currentAudio = null;

  const playButton = document.getElementById('play-button');
  const volumeSlider = document.getElementById('volume-slider');
  const audioControls = document.getElementById('audio-controls');
  const textfeld = document.getElementById('textfeld');
  const fuchsAvatar = document.getElementById('fuchs-avatar');

  // Tier-Klick
  document.querySelectorAll(".tier").forEach(tier => {
    tier.addEventListener("click", (event) => {
      event.stopPropagation();

      const [text, audioFile] = tierTexte[tier.id];
      textfeld.innerText = text;

      if (currentAudio) {
        currentAudio.pause();
        currentAudio = null;
      }

      currentAudio = new Audio(`/audio/${audioFile}`);
      currentAudio.volume = volumeSlider.value;

      audioControls.style.display = "flex";

      document.querySelectorAll(".tier, .avatar-tier").forEach(t => t.classList.remove("active"));
      tier.classList.add("active");
    });
  });

  // Play
  playButton.addEventListener("click", () => {
    if (currentAudio) {
      currentAudio.currentTime = 0;
      currentAudio.play();
    }
  });

  // Volume
  volumeSlider.addEventListener("input", () => {
    if (currentAudio) {
      currentAudio.volume = volumeSlider.value;
    }
  });

  // Hintergrund-Klick → Reset
  document.getElementById("waldszene").addEventListener("click", () => {
    document.querySelectorAll(".tier, .avatar-tier").forEach(t => t.classList.remove("active"));
    textfeld.innerText = "Klicke auf ein Tier, um mit ihm zu reden!";
    if (currentAudio) {
      currentAudio.pause();
      currentAudio = null;
    }
    audioControls.style.display = "none";
  });

  // Fuchs bei Start
  window.addEventListener("DOMContentLoaded", () => {
    zeigeFuchsDialog();
  });

  // Fuchs bei Klick
  fuchsAvatar.addEventListener("click", (event) => {
    event.stopPropagation();
    zeigeFuchsDialog();
  });

  // Fuchs-Funktion
  function zeigeFuchsDialog() {
    textfeld.innerText = "Hallo! Ich bin der schlaue Fuchs.";
    audioControls.style.display = "flex";

    if (currentAudio) currentAudio.pause();
    currentAudio = new Audio("/audio/fuchs.mp3");
    currentAudio.volume = volumeSlider.value;

    document.querySelectorAll(".tier, .avatar-tier").forEach(t => t.classList.remove("active"));
    fuchsAvatar.classList.add("active");
  }
</script>

<!-- Sidebar & Navigation -->
<script src="/include/headerneu.js"></script>
	
</body>
</html>
