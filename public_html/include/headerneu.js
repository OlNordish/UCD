document.addEventListener("DOMContentLoaded", () => {
const sidebar = document.getElementById("sidebar");
const overlay = document.getElementById("overlay");

const submenuBastel = document.getElementById("submenu-bastel");
const submenuMedien = document.getElementById("submenu-medien");

window.toggleSidebar = function () {
sidebar.classList.add("active");
overlay.style.display = "block";
};

window.closeSidebar = function () {
sidebar.classList.remove("active");
overlay.style.display = "none";
hideSubmenus();
};

window.hideSubmenus = function () {
submenuBastel.classList.remove("active");
submenuMedien.classList.remove("active");
};

document.querySelectorAll(".submenu-btn").forEach(button => {
button.addEventListener("click", () => {
const targetId = button.getAttribute("data-submenu");
const submenu = document.getElementById(targetId);
const isVisible = submenu.classList.contains("active");

```
  hideSubmenus();

  if (!isVisible) {
    submenu.classList.add("active");
  }
});

```

});
});