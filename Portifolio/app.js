const burger = document.querySelector(".burger");
const menu = document.querySelector(".menu");
burger.addEventListener("click", () => {
  burger.classList.toggle("close");
  menu.classList.toggle("open");
});

gsap.registerPlugin(ScrollTrigger);

// gsap.from("")

gsap.from(".progressbar", {
  scrollTrigger: {
    trigger: "#skill",
    start: "top center",
  },
  ease: "power2.out",
  width: "0",
  duration: 2,
});
