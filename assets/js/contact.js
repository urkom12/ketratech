(() => {
    'use strict';
  
    document.addEventListener("DOMContentLoaded", () => {
      const forms = document.querySelectorAll('.needs-validation');
  
      forms.forEach((form) => {
        form.addEventListener('submit', (event) => {
          if (!form.checkValidity()) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
        });
      });
    });
  
    let lastScrollY = window.scrollY;
    const navbar = document.querySelector('.navbar');
  
    window.addEventListener('scroll', () => {
      if (!navbar) return;
  
      if (window.scrollY > lastScrollY) {
        navbar.classList.add('hide');
        navbar.classList.remove('show');
      } else {
        navbar.classList.add('show');
        navbar.classList.remove('hide');
      }
      lastScrollY = window.scrollY;
    });
  
    const aTags = document.querySelectorAll("ul li a");
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
  
    const loader = document.querySelector('.loader');
    const navLink = document.querySelector('.nav-link');
  
    window.addEventListener("load", () => {
      loader?.classList.remove('loader--active');
    });
  
    navLink?.addEventListener('click', () => {
      loader?.classList.add('loader--active');
  
      setTimeout(() => {
        loader?.classList.remove('loader--active');
      }, 5000);
    });
  })();
  