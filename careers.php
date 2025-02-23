<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ketra Tech</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>
  <link rel="stylesheet" href="styles.css">
  <style>
.footer-section {
  position: relative;
  z-index: 1;
}

.footer-section h2 {
  font-size: 2.827rem;
  color: #ffffff;
}

.footer-section h5 {
  font-size: 1rem;
  color: #ffffff;
}

.footer-section .divider {
  border-color: #FFFFFF;
  border: 2px solid #FFFFFF;
  margin-bottom: 5rem;
}

.footer-section .form-check-label {
  color: #cfcfcf;
  font-size: 0.875rem;
}

.footer-section input ::placeholder{
  background-color: white !important;
  color: black;
}

.footer-section .btn-primary {
  background-color: #6a33ff;
  color: #FFFFFF;
  border: none;
  padding: 10px 20px;
}

.footer-section .btn-primary:hover {
  background-color: #5a29e6;
}

.footer-section li{
  font-size: 18px;
}

.footer-section a {
  color: #cfcfcf;
  text-decoration: none;
  font-size: 18px;
  text-transform: capitalize;
}

.footer-section a:hover {
  color: #ffffff;
}

.footer-form-control{
  color: black;
  background-color: white;
}

.footer-logo {
  margin-bottom: 20px;
}

/* Stilovi za mobilne uređaje */
@media (max-width: 768px) {
  .footer-section .row {
    flex-direction: column;
  }

  .footer-section .col-lg-3 {
    text-align: center;
    margin-bottom: 30px;
  }

  .footer-links {
    flex: 1;
    text-align: center;
  }

  .footer-links ul {
    padding: 0;
    font-size: 0.7rem;
  }
  .footer-links a {
    font-size: 0.7rem;
  }
  .footer-links .text-muted{
    font-size: 0.7rem;
  }
  .footer-links h5{
    font-size: 0.7rem
  }
}
  </style>
</head>
<body>

  <div class="loader loader--active">
    <div class="loader__icon">
      <svg version="1.1" id="loader-1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="40px" height="40px" viewBox="0 0 40 40" enable-background="new 0 0 40 40" xml:space="preserve">
        <path opacity="0.2" fill="#000" d="M20.201,5.169c-8.254,0-14.946,6.692-14.946,14.946c0,8.255,6.692,14.946,14.946,14.946s14.946-6.691,14.946-14.946C35.146,11.861,28.455,5.169,20.201,5.169z M20.201,31.749c-6.425,0-11.634-5.208-11.634-11.634c0-6.425,5.209-11.634,11.634-11.634c6.425,0,11.633,5.209,11.633,11.634C31.834,26.541,26.626,31.749,20.201,31.749z" />
        <path fill="#000" d="M26.013,10.047l1.654-2.866c-2.198-1.272-4.743-2.012-7.466-2.012h0v3.312h0C22.32,8.481,24.301,9.057,26.013,10.047z">
          <animateTransform attributeType="xml" attributeName="transform" type="rotate" from="0 20 20" to="360 20 20" dur="0.5s" repeatCount="indefinite" />
        </path>
      </svg>
    </div>
    <div class="loader__tile"></div>
    <div class="loader__tile"></div>
    <div class="loader__tile"></div>
    <div class="loader__tile"></div>
    <div class="loader__tile"></div>
  </div>


  <div class="main">   
    <video autoplay muted loop>
     <source src="img/gradient.webm" type="video/mp4">
     Your browser does not support the video tag.
   </video>
 </div>


 <nav class="navbar navbar-expand-lg">
  <div class="container">
      <a class="navbar-brand" href="index.html"><img src="img/logo.png" alt="Logo"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>      
      <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
          <ul class="navbar-nav mx-auto">
              <li class="nav-item">
                  <a class="nav-link" href="services.html" data-text="service">Services</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="contact.php" data-text="contact">Contact</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="aboutus.html" data-text="about us">About us</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="careers.html" data-text="careers">Careers</a>
              </li>
          </ul>
          <a href="hirenow.php"><button class="schedule">Hire Now</button></a>
      </div>
  </div>
</nav>


  <section class="hero-career container py-5">
    <div class="row align-items-center" style="padding-top: 50px;">
        <div class="col-lg-6 text-center text-lg-start mb-4 mb-lg-0">
            <h1 class="display-4 fw-bold">Let’s Grow Together</h1>
            <p class="lead">Explore our culture, and see open positions</p>
        </div>
        <div class="col-lg-6">
            <img src="img/hero-careers.avif" alt="Professional" class="img-fluid rounded shadow">
        </div>
    </div>
    <br>
    <div class="row mt-5">
        <div class="col text-center">
            <p class="lead">
                Our passionate and skilled team is here to bring your vision to life. With expertise in web development, design, and strategy, we ensure your business achieves its full potential.
            </p>
        </div>
    </div>
</section>
<br>

<section class="img-career">
    <img class="visible-img" src="img/slika1-careers.avif" alt="img-career">
    <img class="unvisible-img" src="img/slika_aboutus1.avif" alt="img/slika_aboutus1.png" class="custom-image">
</section>


<section class="ux-section py-5 text-center text-lg-start">
  <div class="container">
    <h2 class="text-primary mb-4" style="text-align: center;">Why will you love<br><span style="color: #A89CFD;">Working with us?</span></h2>
    <div class="row justify-content-center">
      <div class="box col-lg-4 col-md-6 mb-4">
        <div class="card bg-transparent border-0 h-100 text-white">
          <div class="icon mb-3">
            <img src="img/icon1.svg" alt="Icon 1" class="img-fluid">
          </div>
          <h5 class="fw-bold">Prioritizing all of the features can backfire. </h5>
          <p class="text-muted">Too much information overwhelms users, leading to confusion and a steeper learning curve.</p>
        </div>
      </div>
      <div class="box col-lg-4 col-md-6 mb-4">
        <div class="card bg-transparent border-0 h-100 text-white">
          <div class="icon mb-3">
            <img src="img/icon2.svg" alt="Icon 2" class="img-fluid">
          </div>
          <h5 class="fw-bold">Inconsistent and unpractical design. </h5>
          <p class="text-muted">Adding elements without a clear strategy disrupts user experience and flow.</p>
        </div>
      </div>
      <div class="box col-lg-4 col-md-6 mb-4">
        <div class="card bg-transparent border-0 h-100 text-white">
          <div class="icon mb-3">
            <img src="img/icon3.svg" alt="Icon 3" class="img-fluid">
          </div>
          <h5 class="fw-bold">Design which is not user - centered.</h5>
          <p class="text-muted">Ignoring the user needs results in decreased engagement, and higher bounce rates</p>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="testimonial-section">
  <div class="container">  
    <h2 class="testimonial-title justify-content-center">What our people said...</h2>
    <div class="row justify-content-center">
      <div class="col-md-11">
        <div class="testimonial-item">
          <img src="img/testimonial_img1.avif" alt="testimonial">
          <div>
            <p>
              "Being part of KetraTech has been a transformative experience. The collaborative atmosphere, challenging projects, and room for growth make every day exciting and fulfilling. It's inspiring to work in a place where innovation and teamwork are truly valued."            </p>
            <p class="author">Jovan <span class="role">UX Specialist</span></p>
          </div>
        </div>
      </div>
    </div>

    <div class="row justify-content-center">
      <div class="col-md-11">
        <div class="testimonial-item reverse">
          <img src="img/testimonial_img2.avif" alt="testimonial">
          <div>
            <p>
              "KetraTech is not just a workplace; it's a community of passionate individuals striving for excellence. The opportunities to innovate, collaborate, and grow are unparalleled. I'm proud to be part of a team that continuously pushes boundaries and delivers exceptional results."            </p>
            <p class="author">Milena <span class="role">Frontend Lead</span></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="faq-section py-5">
  <div class="container">
    <h2 class="text-center text-white mb-4" style="color: #A89CFD !important;">Open job positions</h2>
    <div class="accordion" id="faqAccordion">
      <div class="box mb-3" style="max-width: 70%;">
        <div
          class="accordion-header"
          id="headingOne"
          data-bs-toggle="collapse"
          data-bs-target="#collapseOne"
          aria-expanded="false"
          aria-controls="collapseOne"
        >
          <div class="d-flex justify-content-between align-items-center clickable">
            <span class="text-white">Junior Backend Developer</span>
            <span class="icon">+</span>
          </div>
        </div>
        <div
          id="collapseOne"
          class="accordion-collapse collapse"
          aria-labelledby="headingOne"
          data-bs-parent="#faqAccordion"
        >
          <div class="accordion-body text-white-50">
            We're looking for a passionate Junior Backend Developer to join our team. You'll be responsible for building and maintaining server-side logic, integrating APIs, and ensuring optimal performance. If you have a strong understanding of backend frameworks and are eager to grow, this role is for you!          
          </div>
        </div>
      </div>
      <div class="box mb-3" style="max-width: 70%;">
        <div
          class="accordion-header"
          id="headingTwo"
          data-bs-toggle="collapse"
          data-bs-target="#collapseTwo"
          aria-expanded="false"
          aria-controls="collapseTwo"
        >
          <div class="d-flex justify-content-between align-items-center clickable">
            <span class="text-white">Copywriter</span>
            <span class="icon">+</span>
          </div>
        </div>
        <div
          id="collapseTwo"
          class="accordion-collapse collapse"
          aria-labelledby="headingTwo"
          data-bs-parent="#faqAccordion"
        >
          <div class="accordion-body text-white-50">
            We are seeking a talented Copywriter to craft compelling and engaging content for our clients. Your creativity will drive brand messages, social media campaigns, and web copy. Join us to make an impact through words and storytelling.          </div>
        </div>
      </div>
      <div class="box mb-3" style="max-width: 70%;">
        <div
          class="accordion-header"
          id="headingThree"
          data-bs-toggle="collapse"
          data-bs-target="#collapseThree"
          aria-expanded="false"
          aria-controls="collapseThree"
        >
          <div class="d-flex justify-content-between align-items-center clickable">
            <span class="text-white">Senior UX Designer</span>
            <span class="icon">+</span>
          </div>
        </div>
        <div
          id="collapseThree"
          class="accordion-collapse collapse"
          aria-labelledby="headingThree"
          data-bs-parent="#faqAccordion"
        >
          <div class="accordion-body text-white-50">
            Join our team as a Senior UX Designer and lead the creation of seamless user experiences. You'll collaborate with developers and clients to design intuitive interfaces that drive engagement. Bring your expertise and innovation to shape the future of user-centered design.          </div>
        </div>
      </div>
    </div>

    <div class="centered-section">
      <p>If there is a position for you, send us your application!</p>
      <a href="hirenow.php"><div class="btn ketra_btn line-show">Apply</div</a>
    </div>
  </div>
</section>

<script>
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
</script>



<footer class="footer-section text-white py-5">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="mb-3">Elevate your UX today!<br>Schedule a call and make a difference!</h2>
      <a href="hirenow.php"><button class="btn btn-primary">Hire Now</button></a>
    </div>
    <hr class="divider">
    <div class="row align-items-start">
      <div class="col-md-12 col-lg-3 mb-4 text-center">
        <h4>LEAVE YOUR MAIL AND STAY UP TO DATE!</h4>
        <input type="email" class="footer-form-control my-3" placeholder="Enter your email">
        <div class="form-check mb-3">
          <input type="checkbox" class="form-check-input" id="privacyPolicy">
          <label class="form-check-label" for="privacyPolicy">
            By checking the box, I agree to and accept the Privacy Policy and Terms of Service.
          </label>
        </div>
        <a href="hirenow.php"><button class="btn btn-primary">Get updates</button></a>
      </div>
      <div class="col-md-12 col-lg-9 d-flex flex-wrap justify-content-between">
        <div class="footer-links">
          <h5>COMPANY</h5>
          <ul class="list-unstyled">
            <li><a href="aboutus.html" class="text-muted">About us</a></li>
            <li><a href="contact.php" class="text-muted">Clients</a></li>
            <li><a href="services.html" class="text-muted">Pricing</a></li>
            <li><a href="careers.html" class="text-muted">Careers</a></li>
          </ul>
        </div>
        <div class="footer-links">
          <h5>CASE STUDIES</h5>
          <ul class="list-unstyled">
            <li><a href="#" class="text-muted">Coffee</a></li>
            <li><a href="#" class="text-muted">Spinner</a></li>
            <li><a href="#" class="text-muted">Inovatech</a></li>
            <li><a href="#" class="text-muted">View all</a></li>
          </ul>
        </div>
        <div class="footer-links">
          <h5>CONTACT</h5>
          <ul class="list-unstyled">
            <li class="text-muted">+381 65 123456</li>
            <li class="text-muted">support@ketratech.com</li>
            <li class="text-muted">Ulica 3 - 26000 Pančevo, Serbia</li>
          </ul>
        </div>
      </div>
    </div>
    <hr class="divider">
    <div class="container d-flex flex-column flex-lg-row align-items-center justify-content-between">
      <div class="d-flex align-items-center">
        <a href="index.html"><img src="img/logo.png" alt="Logo" class="footer-logo me-3"></a>
      </div>
      <div class="d-flex align-items-center">
        <a href="https://www.facebook.com/" class="mx-2"><img src="img/face.svg" alt="Facebook" style="width: 24px;"></a>
        <a href="https://x.com/" class="mx-2"><img src="img/x.svg" alt="X" style="width: 24px;"></a>
        <a href="https://www.instagram.com/" class="mx-2"><img src="img/insta.svg" alt="Instagram" style="width: 24px;"></a>
        <a href="https://www.tiktok.com/" class="mx-2"><img src="img/tiktok.svg" alt="TikTok" style="width: 24px;"></a>
      </div>
    </div>
    <br><br>
    <hr class="divider">
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-center mt-4">
      <div class="d-flex align-items-center">
        <p class="mb-0" style="color: #A89CFD;"><i class="bi bi-c-circle"></i>Copyright Ketra Tech 2024</p>
      </div>
      <div class="mt-3 mt-md-0">
        <a href="#" class="text-muted me-3">Terms of Service</a>
        <a href="#" class="text-muted me-3">Privacy policy</a>
        <a href="#" class="text-muted">Cookie policy</a>
      </div>
    </div>
  </div>
</footer>



  <script>
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
    </script>
  

<script>
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
</script>


  <script>
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
  </script>


<script>
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
</script>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>