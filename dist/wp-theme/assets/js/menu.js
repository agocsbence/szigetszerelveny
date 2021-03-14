const hamburger = document.querySelector(".hamburger"),
      mobileMenu = document.querySelector('.mobile-navbar');

hamburger.addEventListener("click", function() {
    hamburger.classList.toggle("is-active");
    mobileMenu.classList.toggle("is-active");
});