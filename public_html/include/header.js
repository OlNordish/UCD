document.addEventListener("DOMContentLoaded", () => {
	const sidebar = document.getElementById("sidebar");
	const overlay = document.getElementById("overlay");
	const submenuBastel = document.getElementById("submenu-bastel");
	const submenuMedien = document.getElementById("submenu-medien");
	
	window.toggleSidebar = function () {
		const isOpen = sidebar.classList.contains("active");
		
		if (isOpen) {
			sidebar.classList.remove("active");
			overlay.style.display = "none";
			hideSubmenus();
		} else {
			sidebar.classList.add("active");
			overlay.style.display = "block";
		}
	};  // Quelle: https://developer.mozilla.org/en-US/docs/Web/API/Element/classList
	
	window.closeSidebar = function () {
		sidebar.classList.remove("active");
		overlay.style.display = "none"; // Quelle: https://developer.mozilla.org/en-US/docs/Web/API/HTMLElement/style
		hideSubmenus();
	};
	window.hideSubmenus = function () {
		submenuBastel?.classList.remove("active");
		submenuMedien?.classList.remove("active");
	}; // Quelle: https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Operators/Optional_chaining
	document.querySelectorAll(".submenu-btn").forEach(button => {
	button.addEventListener("click", () => {
	const targetId = button.getAttribute("data-submenu");
	const submenu = document.getElementById(targetId);
	const isVisible = submenu?.classList.contains("active");

	hideSubmenus();
	if (!isVisible && submenu) {
	submenu.classList.add("active");
	submenu.style.top = "0";
	overlay.style.display = "block";
	}
	});
	});// Quelle: https://developer.mozilla.org/en-US/docs/Web/API/Document/querySelectorAll // https://developer.mozilla.org/en-US/docs/Web/API/Element/getAttribute
});