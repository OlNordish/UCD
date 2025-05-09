function toggleSidebar() {
  const sidebar = document.getElementById("sidebar");
  const submenu = document.getElementById("submenu");
  const overlay = document.getElementById("overlay");

  sidebar.classList.toggle("active");
  overlay.style.display = sidebar.classList.contains("active") ? "block" : "none";

  if (!sidebar.classList.contains("active")) {
    submenu.classList.remove("active");
  }
}

function hideSubmenu() {
  const submenu = document.getElementById("submenu");
  submenu.classList.remove("active");
}

document.addEventListener("DOMContentLoaded", function () {
  const bastelLink = document.getElementById("bastelvorlagen-link");
  const submenu = document.getElementById("submenu");

  if (bastelLink && submenu) {
    bastelLink.addEventListener("mouseenter", () => {
      submenu.classList.add("active");
    });

    submenu.addEventListener("mouseleave", () => {
      submenu.classList.remove("active");
    });
  }
});
