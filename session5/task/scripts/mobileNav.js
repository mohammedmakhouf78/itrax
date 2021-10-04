nav = document.querySelector("nav ul");
burger = document.querySelector(".burger");
navCloseButton = document.querySelector("nav ul .btn");

burger.addEventListener("click", () => {
  nav.classList.toggle("nav-active");
});

navCloseButton.addEventListener("click", () => {
  nav.classList.remove("nav-active");
  nav.style.transition = "transform 0.5s ease-in-out";
  setTimeout(() => {
    nav.style.transition = "";
  }, 1000);
});
