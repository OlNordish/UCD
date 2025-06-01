document.addEventListener("DOMContentLoaded", () => {
  const erwartet = 8;
  let muellWeg = 0;

  const counterBox = document.getElementById("counter");
  const dropzone = document.getElementById("dropzone");
  const eimerZu = document.querySelector("svg g#eimer_zu");
  const eimerAuf = document.querySelector("svg g#eimer_auf");
  const fuchs = document.getElementById("fuchs");
  const waldGesund = document.getElementById("wald_gesund");

  const textfeld = document.getElementById("textfeld");
  const buttonsContainer = document.getElementById("level-buttons");
  const nextBtn = document.getElementById("next");
  const prevBtn = document.getElementById("prev");

  const introTexte = [
    "Oh nein, jemand hat den Wald verschmutzt!",
    "Hilfst du mir ihn aufzuräumen?",
    "Ziehe einfach den Müll in den Mülleimer!"
  ];

  const zusammenfassung = [
    "Klasse, du hast den Wald sauber gemacht!",
    "Möchtest du sehen, wie sehr sich der Wald verändert?"
  ];

  let aktuellerText = introTexte;
  let aktuellerIndex = 0;
  let inZusammenfassung = false;

  function zeigeText(index) {
    textfeld.innerHTML = aktuellerText[index];
    prevBtn.disabled = index === 0;
    nextBtn.disabled = index === aktuellerText.length - 1;

    buttonsContainer.style.display =
      inZusammenfassung && index === zusammenfassung.length - 1 ? "flex" : "none";
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

  zeigeText(0);

  function istInDropzone(x, y) {
    const dz = dropzone.getBoundingClientRect();
    return x >= dz.left && x <= dz.right && y >= dz.top && y <= dz.bottom;
  }

  document.querySelectorAll(".muellbild").forEach((el) => {
    let offsetX, offsetY;

    el.addEventListener("mousedown", (e) => {
      e.preventDefault();

      const rect = el.getBoundingClientRect();
      offsetX = e.clientX - rect.left;
      offsetY = e.clientY - rect.top;

      el.style.zIndex = 1000;
      el.style.position = "absolute";
      el.style.pointerEvents = "none";

      if (eimerZu) eimerZu.style.display = "none";
      if (eimerAuf) eimerAuf.style.display = "inline";

      const moveAt = (pageX, pageY) => {
        el.style.left = pageX - offsetX + "px";
        el.style.top = pageY - offsetY + "px";
      };

      moveAt(e.pageX, e.pageY);

      const onMouseMove = (e) => moveAt(e.pageX, e.pageY);

      const onMouseUp = (e) => {
        document.removeEventListener("mousemove", onMouseMove);
        document.removeEventListener("mouseup", onMouseUp);

        if (istInDropzone(e.clientX, e.clientY)) {
          el.remove();
          muellWeg++;
          counterBox.textContent = `${muellWeg} / ${erwartet} Müll weggeworfen`;
          counterBox.classList.remove("pulse");
          void counterBox.offsetWidth;
          counterBox.classList.add("pulse");

          // Wenn letzter Müll entsorgt:
          if (muellWeg === erwartet) {
            if (fuchs) fuchs.style.display = "none";
            if (waldGesund) waldGesund.style.display = "inline";
            // Starte Zusammenfassung
            aktuellerText = zusammenfassung;
            aktuellerIndex = 0;
            inZusammenfassung = true;
            zeigeText(0);
          }
        } else {
          el.style.left = "";
          el.style.top = "";
        }

        el.style.pointerEvents = "auto";

        if (eimerZu) eimerZu.style.display = "inline";
        if (eimerAuf) eimerAuf.style.display = "none";
      };

      document.addEventListener("mousemove", onMouseMove);
      document.addEventListener("mouseup", onMouseUp);
    });

    el.ondragstart = () => false;
  });
});
