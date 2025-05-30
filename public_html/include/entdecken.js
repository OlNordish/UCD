// JavaScript Documentdocument.addEventListener("DOMContentLoaded", () => {
  const textfeld = document.getElementById("textfeld");
  const nextBtn = document.getElementById("next");
  const prevBtn = document.getElementById("prev");
  const counterBox = document.getElementById("counter");
  const buttonsContainer = document.getElementById("level-buttons");

  const audio = new Audio();
  const playBtn = document.getElementById("play-audio");
  const volumeSlider = document.getElementById("volume-control");

  let currentSound = null;
  let aktuellerText = window.levelEinleitung;
  let aktuellerIndex = 0;
  const entdeckte = new Set();
  let inZusammenfassung = false;

  // Tier → Ton-Datei (Pfad anpassen)
  const tierSounds = {
    maus: "/audio/maus.mp3",
    eichhoernchen: "/audio/eichhoernchen.mp3",
    fuchs: "/audio/fuchs.mp3",
    eule: "/audio/eule.mp3",
    specht: "/audio/specht.mp3",
    kaninchen: "/audio/kaninchen.mp3",
    reh: "/audio/reh.mp3",
    wolf: "/audio/wolf.mp3",
    kaefer: "/audio/kaefer.mp3"
  };

  function zeigeText(index) {
    textfeld.innerHTML = aktuellerText[index];
    prevBtn.disabled = index === 0;
    nextBtn.disabled = index >= aktuellerText.length - 1;

    buttonsContainer.style.display =
      inZusammenfassung && index === aktuellerText.length - 1 ? "flex" : "none";
  }

  function zeigeVeränderung(id) {
    inZusammenfassung = false;
    aktuellerText = window.veränderungstexte[id] || ["Keine Infos."];
    aktuellerIndex = 0;
    zeigeText(0);

    document.querySelectorAll("g").forEach(g => g.classList.remove("active"));
    const el = document.getElementById(id);
    if (el) el.classList.add("active");

    if (!entdeckte.has(id)) {
      entdeckte.add(id);
      counterBox.innerText = `${entdeckte.size} / ${window.erwartet || 9} Dinge entdeckt`;
      counterBox.classList.remove("pulse");
      void counterBox.offsetWidth;
      counterBox.classList.add("pulse");
    }

    // 🔊 Sound vorbereiten
    if (tierSounds[id]) {
      currentSound = tierSounds[id];
      audio.src = currentSound;
      audio.volume = volumeSlider.value;
    }
  }

  function zeigeZusammenfassung() {
    aktuellerText = window.zusammenfassung;
    aktuellerIndex = 0;
    inZusammenfassung = true;
    zeigeText(0);

    const fuchs = document.getElementById("fuchs");
    const fuchsHappy = document.getElementById("fuchs_happy");
    if (fuchs && fuchsHappy) {
      fuchs.style.display = "none";
      fuchsHappy.style.display = "inline";
      document.querySelectorAll("g").forEach(g => g.classList.remove("active"));
      fuchsHappy.classList.add("active", "wackel");
      setTimeout(() => fuchsHappy.classList.remove("wackel"), 600);
    }
  }

  nextBtn.addEventListener("click", () => {
    if (aktuellerIndex < aktuellerText.length - 1) {
      aktuellerIndex++;
      zeigeText(aktuellerIndex);
    }
  });

  prevBtn.addEventListener("click", () => {
    if (aktuellerIndex > 0) {
      aktuellerIndex--;
      zeigeText(aktuellerIndex);
    }
  });

  volumeSlider.addEventListener("input", () => {
    audio.volume = volumeSlider.value;
  });

  playBtn.addEventListener("click", () => {
    if (!currentSound) return;
    if (audio.paused) {
      audio.play();
      playBtn.textContent = "⏸";
    } else {
      audio.pause();
      playBtn.textContent = "▶";
    }
  });

  (window.klickbareElemente || []).forEach(id => {
    const el = document.getElementById(id);
    if (el) {
      el.style.cursor = "pointer";
      el.addEventListener("click", e => {
        e.stopPropagation();
        zeigeVeränderung(id);
      });
    }
  });

  zeigeText(0);

  document.getElementById("waldszene").addEventListener("click", (e) => {
    const aufElement = e.target.closest("g");
    const aufBlase = e.target.closest("#sprechblase-container");
    if (!aufElement && !aufBlase && !inZusammenfassung) {
      aktuellerText = window.levelEinleitung;
      aktuellerIndex = 0;
      zeigeText(0);

      document.querySelectorAll("g").forEach(g => g.classList.remove("active"));

      if (entdeckte.size === (window.erwartet || 9)) {
        zeigeZusammenfassung();
      }
    }
  });
