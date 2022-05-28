const primaryNav = document.querySelector(".primary-navigation");
const navToggle = document.querySelector(".mobile-nav-toggle");
const body = document.getElementsByTagName("body")[0];

navToggle.addEventListener("click", () => {
  const visibility = primaryNav.getAttribute("data-visible");

  if (visibility === "false") {
    primaryNav.setAttribute("data-visible", true);
    navToggle.setAttribute("aria-expanded", true);
    body.style.overflow = "hidden";
  } else if (visibility === "true") {
    primaryNav.setAttribute("data-visible", false);
    navToggle.setAttribute("aria-expanded", false);
    body.style.overflow = "auto";
  }
});

let lastScrollTop = 0;
const header = document.getElementsByTagName("header")[0];

window.addEventListener("scroll", () => {
  let scrollTop = window.pageYOffset || document.documentElement.scrollTop;
  if (scrollTop > lastScrollTop) {
    header.style.top = "-124px";
  } else {
    header.style.top = "0";
  }
  lastScrollTop = scrollTop;

  if (window.scrollY >= 80) {
    header.classList.add("nav__y-bg");
    header.classList.remove("nav__n-bg");
  } else {
    header.classList.add("nav__n-bg");
    header.classList.remove("nav__y-bg");
  }
});
