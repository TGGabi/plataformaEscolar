const navToggle = document.querySelector(".nav-toggle");
const navMenu = document.querySelector(".nav-menu");
const navMenu2 = document.querySelector(".nav-menu2");

navToggle.addEventListener("click", () => {
  navMenu.classList.toggle("nav-menu_visible");
  navMenu2.classList.toggle("nav-menu_visible");

  if (navMenu.classList.contains("nav-menu_visible")) {
    navToggle.setAttribute("aria-label", "Cerrar menú");
  } else {
    navToggle.setAttribute("aria-label", "Abrir menú");
  }
})
;
