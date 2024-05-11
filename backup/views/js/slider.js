

window.addEventListener("scroll", (ev) => {
  var header = document.querySelector(".menu");
  header.classList.toggle("blur-md", window.scrollY > 100);
});