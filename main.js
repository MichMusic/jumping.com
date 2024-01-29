const scrollRevealOption = {
  distance: "50px",
  origin: "bottom",
  duration: 1000,
};

// header container
ScrollReveal().reveal(".header__container img", {
  duration: 1000,
});

ScrollReveal().reveal(".header__content", {
  ...scrollRevealOption,
  origin: "right",
  delay: 500,
});

ScrollReveal().reveal(".header__tag", {
  ...scrollRevealOption,
  origin: "left",
  delay: 1000,
});

// festive container
ScrollReveal().reveal(".festive__content .section__header", {
  ...scrollRevealOption,
});

ScrollReveal().reveal(".festive__content .section__description", {
  ...scrollRevealOption,
  delay: 500,
});

ScrollReveal().reveal(".festive__content .festive__btn", {
  ...scrollRevealOption,
  delay: 1000,
});

// shopping container
ScrollReveal().reveal(".shopping__card", {
  ...scrollRevealOption,
  interval: 500,
});

// festive container
ScrollReveal().reveal(".explore__content .section__header", {
  ...scrollRevealOption,
});

ScrollReveal().reveal(".explore__content .section__description", {
  ...scrollRevealOption,
  delay: 500,
});

ScrollReveal().reveal(".explore__content .explore__btn", {
  ...scrollRevealOption,
  delay: 1000,
});




let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}