//console.log("hello");
const hamburgerMenu = document.querySelector("#hamburger-menu");
const hamburgerLines = hamburgerMenu.querySelectorAll("div");

// const dropdownMenu = document.querySelector(".drop-down");

// const dropdownItems = dropdownMenu.querySelector("div");
// console.log(dropdownItems);

const toggleMenu = () => {
  hamburgerMenu.classList.toggle("active");
};

hamburgerMenu.addEventListener("click", toggleMenu);
// const toggleItems = () => {
//   dropdownMenu.classList.add("active");
// };

//dropdownMenu.addEventListener("click", toggleItems);
