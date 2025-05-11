document.addEventListener("DOMContentLoaded", () => {
  const sidebar = document.getElementById("sidebar");
  const overlay = document.getElementById("overlay");
  const submenuPanels = document.querySelectorAll(".submenu-sidebar");
  const submenuTriggers = document.querySelectorAll(".submenu-trigger");

  window.toggleSidebar = function () {
    sidebar.classList.toggle("active");
    overlay.style.display = sidebar.classList.contains("active") ? "block" : "none";

    if (!sidebar.classList.contains("active")) {
      closeAllSubmenus();
    }
  };

  window.closeAll = function () {
    sidebar.classList.remove("active");
    overlay.style.display = "none";
    closeAllSubmenus();
  };

  function closeAllSubmenus() {
    submenuPanels.forEach((menu) => menu.classList.remove("active"));
  }

  submenuTriggers.forEach(trigger => {
    const targetId = trigger.getAttribute("data-target");
    const targetMenu = document.getElementById(targetId);

    trigger.addEventListener("click", (e) => {
      e.preventDefault(); // blockiere das # als Link-Ziel
      const alreadyActive = targetMenu.classList.contains("active");
      closeAllSubmenus();
      if (!alreadyActive) {
        targetMenu.classList.add("active");
      }
    });
  });
});
