<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Wald aufräumen – Interaktives Spiel</title>

  <!-- Styles -->
  <link rel="stylesheet" href="/include/headerneu.css">

  <style>
    body {
      margin: 0;
      font-family: 'Nunito', sans-serif;
      background: url('/bilder/bg1.svg') no-repeat center center fixed;
      background-size: cover;
      color: #ffffff;
    }

    #wald {
      position: relative;
      width: 100%;
      height: calc(100vh - 60px);
      overflow: hidden;
    }

    .baum {
      position: absolute;
      width: 100px;
      height: 100px;
      background-color: #228b22;
      border-radius: 10px;
    }

    .muell {
      position: absolute;
      width: 60px;
      height: 60px;
      background-color: #696969;
      border-radius: 10px;
      text-align: center;
      line-height: 60px;
      font-weight: bold;
      color: white;
      cursor: grab;
    }

    .tier {
      position: absolute;
      width: 80px;
      height: 80px;
      font-size: 2rem;
      border-radius: 10px;
      display: none;
      align-items: center;
      justify-content: center;
      background-color: #ffffff33;
    }

    #eimer {
      position: absolute;
      bottom: 20px;
      left: 20px;
      width: 100px;
      height: 120px;
      background-color: #2f4f4f;
      border-radius: 10px;
      color: white;
      text-align: center;
      line-height: 120px;
      font-weight: bold;
      font-size: 2rem;
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
      color: #333;
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

<!-- Sidebar & Navigation -->
<?php include($_SERVER['DOCUMENT_ROOT'] . '/include/headerneu.php'); ?>

<!-- Wald-Spielszene -->
<div id="wald">
  <div class="baum" style="top: 10%; left: 20%;"></div>
  <div class="baum" style="top: 50%; left: 60%;"></div>
  <div class="baum" style="top: 30%; left: 40%;"></div>

  <div class="muell" draggable="true" id="muell1" style="top: 20%; left: 30%;">🗑️</div>
  <div class="muell" draggable="true" id="muell2" style="top: 60%; left: 50%;">🗑️</div>
  <div class="muell" draggable="true" id="muell3" style="top: 40%; left: 70%;">🗑️</div>

  <div class="tier" id="eichhoernchen" style="top: 10%; left: 10%;">🐿️</div>
  <div class="tier" id="eule" style="top: 20%; left: 60%;">🦉</div>
  <div class="tier" id="reh" style="top: 50%; left: 80%;">🦌</div>

  <div id="eimer" ondragover="allowDrop(event)" ondrop="drop(event)">🧺</div>

  <div id="sprechblase-container">
    <div id="sprechblase">
      Fuchs: Oh nein, jemand hat den Wald verschmutzt!<br>
      Hilfst du mir, den Wald aufzuräumen?<br>
      Ziehe den Müll einfach in den Korb!
    </div>
    <div id="fuchs-avatar">🦊</div>
  </div>
</div>

<!-- Scripts -->
<script src="/include/headerneu.js"></script>
<script>
  const gesamtMuell = 3;
  let entfernt = 0;

  document.querySelectorAll(".muell").forEach(m => {
    m.addEventListener("dragstart", event => {
      event.dataTransfer.setData("text", event.target.id);
    });
  });

  function allowDrop(event) {
    event.preventDefault();
  }

  function drop(event) {
    event.preventDefault();
    const id = event.dataTransfer.getData("text");
    const element = document.getElementById(id);
    if (element) {
      element.remove();
      entfernt++;
      if (entfernt === gesamtMuell) {
        document.getElementById("sprechblase").innerText =
          "Fuchs: Super, jetzt ist der Wald wieder sauber. Die Tiere fühlen sich wieder wohl!";
        document.querySelectorAll(".tier").forEach(t => t.style.display = "flex");
      }
    }
  }
</script>
</body>
</html>
