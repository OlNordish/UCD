document.addEventListener("DOMContentLoaded", function () {
  const sidebar = document.getElementById("sidebar");
  const overlay = document.getElementById("overlay");
  const submenu = document.getElementById("submenu");
  const bastelLink = document.getElementById("bastelvorlagen-link");

  function toggleSidebar() {
    sidebar.classList.toggle("active");
    overlay.style.display = sidebar.classList.contains("active") ? "block" : "none";

    if (!sidebar.classList.contains("active")) {
      submenu.classList.remove("active");
    }
  }

  function hideSubmenu() {
    submenu.classList.remove("active");
  }

  bastelLink?.addEventListener("mouseenter", () => {
    submenu.classList.add("active");
  });

  submenu?.addEventListener("mouseleave", () => {
    submenu.classList.remove("active");
  });

  // exportieren für onclick
  window.toggleSidebar = toggleSidebar;
  window.hideSubmenu = hideSubmenu;
});
