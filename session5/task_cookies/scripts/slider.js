let btns = document.querySelectorAll(".slider-btn-con > div");
let sliders = document.querySelectorAll(".sliders > div");

btns.forEach((element, index) => {
  element.addEventListener("click", () => {
    sliders[index].style.opacity = "1";
    btns[index].classList.add("slider-btn-active");
    sliders.forEach((e, i) => {
      if (i != index) {
        e.style.opacity = "0";
        btns[i].classList.remove("slider-btn-active");
      }
    });
  });
});

btns.forEach((element) => {
  element.addEventListener("mouseover", () => {
    // element.children[0].style.transform = "translateY(-30%)";
  });
});
