const photos = document.querySelectorAll(".grid-photo");

photos.forEach((photo) =>
  photo.addEventListener("click", () => {
    const background = document.createElement("div");
    background.classList.add(
      "h-screen",
      "w-screen",
      "flex",
      "justify-center",
      "items-center",
      "fixed",
      "inset-0",
      "bg-black",
      "bg-opacity-90"
    );
    const image = photo.cloneNode();
    image.classList.add("max-h-[90%]", "max-w-[90%]");
    background.appendChild(image);
    body.appendChild(background);
    background.addEventListener("click", () => {
      background.remove();
    });
  })
);
