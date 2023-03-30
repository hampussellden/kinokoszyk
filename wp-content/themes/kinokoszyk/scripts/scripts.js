//console.log("hello");
const hamburgerMenu = document.querySelector("#hamburger-menu");
const hamburgerLines = hamburgerMenu.querySelectorAll("div");
console.log(hamburgerLines);

const toggleMenu = () => {
  hamburgerMenu.classList.toggle("active");
};

hamburgerMenu.addEventListener("click", toggleMenu);
