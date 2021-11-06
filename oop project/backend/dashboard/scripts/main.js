let burger = document.querySelector(".home .col2 nav .burger");
let sideNav = document.querySelector(".home .col1");
let sideNav2 = document.querySelector(".home .col2");

burger.addEventListener("click", function () {
  sideNav.classList.toggle("nav-hidden");
  sideNav2.classList.toggle("home-active");
});
