console.log("hello");
const hamburgerMenu = document.querySelector("#hamburger-menu");
console.log(hamburgerMenu);

hamburgerMenu.addEventListener("click", toggleMenu());

const toggleMenu = () => {
  hamburgerMenu.classList.add("hidden");
};
