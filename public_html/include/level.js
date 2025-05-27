document.addEventListener("DOMContentLoaded", () => {
  const textfeld = document.getElementById("textfeld");
  const nextBtn = document.getElementById("next");
  const prevBtn = document.getElementById("prev");
  const counterBox = document.getElementById("counter");
  const buttonsContainer = document.getElementById("level-buttons");

  let aktuellerText = window.levelEinleitung || ["Was verändert sich hier im Wald?"];
  let aktuellerIndex = 0;
  const entdeckte = new Set();
  let bereitZurZusammenfassung = false;
  let inZusammenfassung = false;

  function zeigeText(index) {
    textfeld.innerHTML = aktuellerText[index];
    prevBtn.disabled = index === 0;
    nextBtn.disabled = index >= aktuellerText.length - 1;

    buttonsContainer.style.display =
      inZusammenfassung && index === aktuellerText.length - 1 ? "flex" : "none";
  }

  function zeigeVeränderung(id) {
    inZusammenfassung = false;
    aktuellerText = window.veränderungstexte[id] || ["????? Keine Infos."];
    aktuellerIndex = 0;
    zeigeText(0);

    document.querySelectorAll("g").forEach(g => g.classList.remove("active"));
    const el = document.getElementById(id);
    if (el) el.classList.add("active");

    if (!entdeckte.has(id)) {
      entdeckte.add(id);
      counterBox.innerText = `${entdeckte.size} / ${window.erwartet || 3} Dinge entdeckt`;
      counterBox.classList.remove("pulse");
      void counterBox.offsetWidth;
      counterBox.classList.add("pulse");
    }

    if (entdeckte.size === (window.erwartet || 3)) {
      bereitZurZusammenfassung = true;
    }
  }

  function zeigeZusammenfassung() {
    aktuellerText = window.zusammenfassung || ["Gut gemacht!"];
    aktuellerIndex = 0;
    inZusammenfassung = true;
    zeigeText(0);

    if (window.levelDoneKey) {
      localStorage.setItem(window.levelDoneKey, "true");
    }

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
if (!aufElement && !aufBlase) {
  document.querySelectorAll("g").forEach(g => g.classList.remove("active"));

  if (entdeckte.size === (window.erwartet || 3) && bereitZurZusammenfassung && !inZusammenfassung) {
    bereitZurZusammenfassung = false;
    zeigeZusammenfassung();
  }

  // Nur zurücksetzen, wenn NICHT in der Zusammenfassung
  if (!inZusammenfassung) {
    aktuellerText = window.levelEinleitung || ["Was verändert sich hier im Wald?"];
    aktuellerIndex = 0;
    zeigeText(0);
  }
}

  });
});
// JavaScript Document