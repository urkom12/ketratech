function checkVisibility() {
    const boxes = document.querySelectorAll('.box');
    const windowHeight = window.innerHeight;

    boxes.forEach((box, index) => {
        const boxTop = box.getBoundingClientRect().top;

        if (boxTop <= windowHeight * 0.8) { 
            setTimeout(() => {
                box.classList.add('visible');
            }, index * 200); 
        }
    });
}

window.addEventListener('scroll', checkVisibility);

checkVisibility();

document.addEventListener("DOMContentLoaded", function () {
    const accordionHeaders = document.querySelectorAll(".accordion-header");

    accordionHeaders.forEach((header) => {
        const collapseTargetId = header.getAttribute("data-bs-target");
        const collapseTarget = document.querySelector(collapseTargetId);

        collapseTarget.addEventListener("shown.bs.collapse", function () {
        const icon = header.querySelector(".icon");
        icon.textContent = "−";
        });

        collapseTarget.addEventListener("hidden.bs.collapse", function () {
        const icon = header.querySelector(".icon");
        icon.textContent = "+";
        });
    });
});

let lastScrollY = window.scrollY;
const navbar = document.querySelector('.navbar');

window.addEventListener('scroll', () => {
  if (window.scrollY > lastScrollY) {
    navbar.classList.add('hide');
    navbar.classList.remove('show');
  } else {
    navbar.classList.add('show');
    navbar.classList.remove('hide');
  }
  lastScrollY = window.scrollY;
});

let aTag = document.querySelectorAll("ul li a");

aTag.forEach((element) => {
  let randomCar = "!@#$%^&*()_+-<>?";
  let originalText = element.dataset.text;

  if (!originalText) {
    console.warn("Missing data-text attribute on:", element);
    return;
  }

  element.addEventListener("mouseover", () => {
    let iteration = 0;
    let interval = setInterval(() => {
      element.textContent = originalText
        .split("")
        .map((char, index) => {
          if (index < iteration) return char;
          return randomCar.charAt(Math.floor(Math.random() * randomCar.length));
        })
        .join("");

      if (iteration >= originalText.length) {
        clearInterval(interval);
      }
      iteration++;
    }, 100);
  });
});

var loader = document.querySelector('.loader');

    window.onload = function() {
    loader.classList.remove('loader--active');
    };

    document.querySelector('.nav-link').addEventListener('click', function () {
    loader.classList.add('loader--active');

    window.setTimeout(function () {
        loader.classList.remove('loader--active');
    }, 5000);
});