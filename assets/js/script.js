const loader = document.querySelector('.loader');

window.onload = function () {
  loader.classList.remove('loader--active');
};

document.querySelector('.nav-link')?.addEventListener('click', function () {
  loader.classList.add('loader--active');

  setTimeout(() => {
    loader.classList.remove('loader--active');
  }, 1000);
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
const delta = 5;

window.addEventListener('scroll', () => {
  const currentScroll = window.scrollY;

  if (!navbar) return;

  if (currentScroll <= 0) {
    navbar.classList.add('show');
    navbar.classList.remove('hide');
  } 
  else if (Math.abs(currentScroll - lastScrollY) > delta) {
    if (currentScroll > lastScrollY) {
      navbar.classList.add('hide');
      navbar.classList.remove('show');
    } else {
      navbar.classList.add('show');
      navbar.classList.remove('hide');
    }
  }

  lastScrollY = currentScroll;
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

function showToast(message, type = "success") {
  const toastEl = document.getElementById("subscribeToast");
  const toastBody = document.getElementById("toastMessage");

  toastBody.textContent = message;
  toastEl.classList.remove("text-bg-success", "text-bg-danger");
  toastEl.classList.add(type === "success" ? "text-bg-success" : "text-bg-danger");

  const toast = new bootstrap.Toast(toastEl);
  toast.show();
}

document.getElementById("subscribeForm").addEventListener("submit", function (e) {
  e.preventDefault();

  const email = document.getElementById("emailInput").value;
  const privacyChecked = document.getElementById("privacyPolicy").checked;
  const csrfToken = document.getElementById("csrfToken").value;

  if (!privacyChecked) {
    showToast("Morate prihvatiti uslove.", "danger");
    return;
  }

  fetch("/inc/subscribe.php", {
    method: "POST",
    headers: {
      "Content-Type": "application/x-www-form-urlencoded"
    },
    body: `email=${encodeURIComponent(email)}&privacy=1&csrf_token=${encodeURIComponent(csrfToken)}`
  })
  .then(response => response.text())
  .then(data => {
    if (data.toLowerCase().includes("uspe")) {
      showToast(data, "success");
      document.getElementById("subscribeForm").reset();
    } else {
      showToast(data, "danger");
    }
  })
  .catch(error => {
    showToast("Došlo je do greške. Pokušajte ponovo.", "danger");
    console.error(error);
  });
});