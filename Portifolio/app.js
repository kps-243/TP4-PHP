const burger = document.querySelector(".burger");
const menu = document.querySelector(".menu");
burger.addEventListener("click", () => {
  burger.classList.toggle("close");
  menu.classList.toggle("open");
});

// Pour l'animation lorsqu'on voit les compétences
const observer = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    // If the element is visible
    if (entry.isIntersecting) {
      // Add the animation class
      entry.target.classList.add("mp4-animation");
    }
  });
});

// Tell the observer which elements to track
observer.observe(document.querySelector("#mp4"));
