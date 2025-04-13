const loader = document.querySelector('.loader');

window.onload = function () {
  loader.classList.remove('loader--active');
};

document.querySelector('.nav-link')?.addEventListener('click', function () {
  loader.classList.add('loader--active');

  setTimeout(() => {
    loader.classList.remove('loader--active');
  }, 5000);
});

function checkVisibility() {
  const boxes = document.querySelectorAll('.box');
  const windowHeight = window.innerHeight;

  boxes.forEach((box, index) => {
    const boxTop = box.getBoundingClientRect().top;

    if (boxTop <= windowHeight * 0.8) {
      setTimeout(() => {
        box.classList.add('visible');
      }, index * 50);
    }
  });
}

window.addEventListener('scroll', checkVisibility);
checkVisibility();

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

const aTags = document.querySelectorAll('ul li a');
const randomChars = "!@#$%^&*()_+-<>?";

aTags.forEach((element) => {
  const originalText = element.dataset.text;

  if (!originalText) {
    console.warn("Missing data-text attribute on:", element);
    return;
  }

  element.addEventListener("mouseover", () => {
    let iteration = 0;

    const interval = setInterval(() => {
      element.textContent = originalText
        .split("")
        .map((char, index) => {
          if (index < iteration) return char;
          return randomChars.charAt(Math.floor(Math.random() * randomChars.length));
        })
        .join("");

      if (iteration >= originalText.length) clearInterval(interval);
      iteration++;
    }, 100);
  });
});

document.addEventListener("DOMContentLoaded", function () {
  const accordionHeaders = document.querySelectorAll(".accordion-header");

  accordionHeaders.forEach((header) => {
    const collapseTargetId = header.getAttribute("data-bs-target");
    const collapseTarget = document.querySelector(collapseTargetId);

    collapseTarget?.addEventListener("shown.bs.collapse", function () {
      const icon = header.querySelector(".icon");
      if (icon) icon.textContent = "−";
    });

    collapseTarget?.addEventListener("hidden.bs.collapse", function () {
      const icon = header.querySelector(".icon");
      if (icon) icon.textContent = "+";
    });
  });
});
