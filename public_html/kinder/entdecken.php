<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Entdecken</title>

  <link rel="stylesheet" href="/include/headerneu.css">

  <style>
    body {
      margin: 0;
      font-family: 'Comic Sans MS', 'Arial Rounded MT Bold', 'Fredoka', sans-serif;
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
      background: #fff9c4;
      padding: 20px 24px;
      border-radius: 20px;
      width: 360px;
      height: 160px;
      font-size: 26px;
      color: #333;
      box-shadow: 0 6px 12px rgba(0, 0, 0, 0.25);
      line-height: 1.5;
      overflow: hidden;
      position: relative;
    }

    #textfeld {
      margin: 0;
    }

    .pfeile {
      position: absolute;
      bottom: 10px;
      right: 10px;
      display: flex;
      gap: 10px;
    }

    .pfeil {
      background: #ffeb3b;
      border: none;
      border-radius: 50%;
      font-size: 20px;
      width: 32px;
      height: 32px;
      cursor: pointer;
      display: flex;
      align-items: center;
      justify-content: center;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
    }

    .pfeil:disabled {
      opacity: 0.4;
      cursor: default;
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
  </style>
</head>
<body>

<?php include($_SERVER['DOCUMENT_ROOT'] . '/include/headerneu.php'); ?>

<div id="waldszene">
  <!-- Tiere -->
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

  <!-- Sprechblase -->
  <div id="sprechblase-container">
    <div id="sprechblase">
      <p id="textfeld">Klicke auf ein Tier, um mit ihm zu reden!</p>
      <div class="pfeile">
        <button class="pfeil" id="prev" disabled>&larr;</button>
        <button class="pfeil" id="next" disabled>&rarr;</button>
      </div>
    </div>
    <div class="avatar-tier" id="fuchs-avatar">
      <?php include($_SERVER['DOCUMENT_ROOT'] . '/bilder/fuchs.svg'); ?>
    </div>
  </div>
</div>

<script>
  const tierTexte = {
    eichhoernchen: [
      "Hallo, ich bin das Eichhörnchen!",
      "Ich liebe es, Nüsse, Samen und Beeren zu futtern."
    ],
    maus: [
      "Pieps! Ich bin die kleine Maus.",
      "Am liebsten knabbere ich an Körnern und Samen.",
      "Aber ich muss gut aufpassen – der Fuchs und die Eule würden mich sonst schnell fressen!"
    ],
    eule: [
      "Huhuu! Ich bin die Eule.",
      "Nachts jage ich Mäuse, Frösche und kleine Vögel.",
      "Mein bester Freund? Die dunkle Nacht – dann bin ich am stärksten!"
    ],
    specht: [
      "Klopf, klopf – ich bin der Specht!",
      "Ich hacke mit meinem Schnabel Löcher in Bäume, um Insekten zu fressen."
    ],
    fuchs: [
      "Hallo! Ich bin der schlaue Fuchs.",
      "Ich esse Mäuse, Kaninchen und manchmal auch Beeren.",
      "Die Maus ist zwar lecker – aber ich respektiere auch meine Nachbarn im Wald!"
    ],
    kaninchen: [
      "Hopp, hopp! Ich bin das flinke Kaninchen.",
      "Ich knabbere gerne an jungen Pflanzen und Kräutern.",
      "Mein größter Feind ist der Fuchs – deshalb bleibe ich immer wachsam!"
    ],
    reh: [
      "Grüß dich! Ich bin das Reh.",
      "Am liebsten fresse ich frische Triebe und junge Blätter.",
      "Ich passe gut auf die kleinen Bäumchen auf – aber wenn es zu wenig gibt, wird es schwer."
    ],
    wolf: [
      "Auuu! Ich bin der Wolf.",
      "Ich jage Kaninchen und Rehe, damit der Wald im Gleichgewicht bleibt.",
      "Ich bin wichtig für den Wald – auch wenn viele mich fürchten."
    ],
    kaefer: [
      "Ich bin der Borkenkäfer.",
      "Die Baumrinde schmeckt super!",
      "Aber Vorsicht – zu viele von uns schaden dem Wald."
    ]
  };

  let aktuellerIndex = 0;
  let aktuellerText = ["Klicke auf ein Tier, um mit ihm zu reden!"];

  const textfeld = document.getElementById("textfeld");
  const nextBtn = document.getElementById("next");
  const prevBtn = document.getElementById("prev");
  const fuchsAvatar = document.getElementById("fuchs-avatar");

  function zeigeText(index) {
    textfeld.innerText = aktuellerText[index];
    prevBtn.disabled = index === 0;
    nextBtn.disabled = index >= aktuellerText.length - 1;
  }

  function zeigeTierText(tierId) {
    aktuellerText = tierTexte[tierId];
    aktuellerIndex = 0;
    zeigeText(aktuellerIndex);
    document.querySelectorAll(".tier, .avatar-tier").forEach(t => t.classList.remove("active"));
    document.getElementById(tierId)?.classList.add("active");
  }

  document.querySelectorAll(".tier").forEach(tier => {
    tier.addEventListener("click", (event) => {
      event.stopPropagation();
      zeigeTierText(tier.id);
    });
  });

  fuchsAvatar.addEventListener("click", (event) => {
    event.stopPropagation();
    zeigeTierText("fuchs");
    fuchsAvatar.classList.add("active");
  });

  nextBtn.addEventListener("click", (event) => {
  event.stopPropagation();
  if (aktuellerIndex < aktuellerText.length - 1) {
    aktuellerIndex++;
    zeigeText(aktuellerIndex);
  }
});

prevBtn.addEventListener("click", (event) => {
  event.stopPropagation();
  if (aktuellerIndex > 0) {
    aktuellerIndex--;
    zeigeText(aktuellerIndex);
  }

  });

  document.getElementById("waldszene").addEventListener("click", () => {
    aktuellerText = ["Klicke auf ein Tier, um mit ihm zu reden!"];
    aktuellerIndex = 0;
    zeigeText(aktuellerIndex);
    document.querySelectorAll(".tier, .avatar-tier").forEach(t => t.classList.remove("active"));
  });

  window.addEventListener("DOMContentLoaded", () => {
    zeigeTierText("fuchs");
  });
</script>

<script src="/include/headerneu.js"></script>
</body>
</html>