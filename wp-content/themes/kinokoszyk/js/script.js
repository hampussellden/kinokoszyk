const hamburgerMenu = document.getElementById("hamburger-menu");

hamburgerMenu.addEventListener("click", toggleMenu);

const toggleMenu = () => {
  hamburgerMenu.classList.add("hidden");
};

console.log(toggleMenu);
