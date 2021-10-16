let input = document.querySelectorAll("form input");
let label = document.querySelectorAll("form label");
let form = document.querySelector("form");
let eyes = document.querySelectorAll(".beye");
input.forEach((element) => {
  element.addEventListener("focusin", (e) => {
    e.target.nextSibling.nextElementSibling.style.transform =
      "translateY(-50%) scale(0.9)";
    e.target.nextSibling.nextElementSibling.style.color = "#FF4081";
    if (e.target.type == "password") {
      form.style.top = "-80px";
    }
  });
});
input.forEach((element) => {
  element.addEventListener("focusout", (e) => {
    e.target.nextSibling.nextElementSibling.style.transform =
      "translateY(65%) scale(1)";
    e.target.nextSibling.nextElementSibling.style.color = "#555";
    if (e.target.type == "password") {
      form.style.top = "0px";
    }
  });
});

onmousemove = function (e) {
  var w =
    window.innerWidth ||
    document.documentElement.clientWidth ||
    document.body.clientWidth;
  var h =
    window.innerHeight ||
    document.documentElement.clientHeight ||
    document.body.clientHeight;
  x = e.clientX / (w / 15);
  y = e.clientY / (h / 15);

  eyes[0].style.right = `${x}px`;
  eyes[0].style.bottom = `${y}px`;
  eyes[1].style.right = `${x}px`;
  eyes[1].style.bottom = `${y}px`;
};
