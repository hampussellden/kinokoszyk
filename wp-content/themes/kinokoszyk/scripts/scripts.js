//console.log("hello");
const hamburgerMenu = document.querySelector("#hamburger-menu");
const navbar = document.querySelector("#navigation");
const body = document.querySelector("body");
const hamburgerLines = hamburgerMenu.querySelectorAll("div");

// const dropdownMenu = document.querySelector(".drop-down");

// const dropdownItems = dropdownMenu.querySelector("div");
// console.log(dropdownItems);

const toggleMenu = () => {
  // navbar.classList.toggle("active");
  // hamburgerMenu.classList.toggle("active");
  body.classList.toggle("active");
};

hamburgerMenu.addEventListener("click", toggleMenu);

// const toggleItems = () => {
//   dropdownMenu.classList.add("active");
// };

//dropdownMenu.addEventListener("click", toggleItems);
