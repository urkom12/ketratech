<?php 
$page_title = "KetraTech | About Us";
$meta_description = "Meet the minds behind KetraTech. Discover our mission, values, and the passion that drives our digital creations.";
$page_canonical = "https://www.ketratech.com/aboutus";
include_once('header.php'); 
?>

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
    <video autoplay muted loop playsinline webkit-playsinline preload="auto" disablePictureInPicture>
        <source src="img/gradient.mp4" type="video/mp4">
        <source src="img/gradient.webm" type="video/webm">
        Your browser does not support the video tag.
    </video>
</div>

<section class="custom-section">
    <div class="container">
        <h1>Why us?</h1>
        <div class="row mb-5">
            <div class="col-lg-6 d-flex flex-column justify-content-center" style="padding-bottom: 1rem;">
                <h2>We combine innovation, expertise, and a deep understanding of your business needs to deliver outstanding results.</h2>
                <p>"Our goal is to build solutions that drive growth and create value for your business. With a tailored approach and attention to detail, we ensure every project exceeds expectations."</p>
                <a href="/" class="btn btn-custom mt-3">See our work</a>
            </div>
            <div class="col-lg-6">
                <img src="img/slika_aboutus1.webp" alt="People" class="custom-image">
            </div>
        </div>
        <div class="row g-4">
            <div class="col-lg-6">
                <img src="img/slika_aboutus2.avif" alt="People" class="custom-image">
            </div>
            <div class="col-lg-6 d-flex flex-column justify-content-center">
                <h2>Every project is unique, and we ensure that our solutions are crafted to meet your specific goals.</h2>
                <p>We work closely with you throughout the process, ensuring transparency and satisfaction.</p>
            </div>
        </div>
    </div>
</section>

<section class="ux-section py-5 text-center text-lg-start">
    <div class="container">
        <h2 class="text-primary" style="text-align: center; margin-bottom: 3rem !important;">What are our core values?</h2>
        <div class="row justify-content-center">
            <div class="box col-lg-4 col-md-6 mb-4">
                <div class="card bg-transparent border-0 h-100 text-white">
                    <div class="icon mb-3">
                        <img src="img/Priority.png" alt="Icon 1" class="img-fluid">
                    </div>
                    <h5 class="fw-bold">Prioritizing essential features.</h5>
                    <p class="text-muted">We focus on what truly matters to your users, avoiding unnecessary complexity that could overwhelm them.</p>
                </div>
            </div>
            <div class="box col-lg-4 col-md-6 mb-4">
                <div class="card bg-transparent border-0 h-100 text-white">
                    <div class="icon mb-3">
                        <img src="img/Inconsistent.png" alt="Icon 2" class="img-fluid">
                    </div>
                    <h5 class="fw-bold">Consistency in design.</h5>
                    <p class="text-muted">Our approach ensures a seamless and intuitive user experience through thoughtful and coherent design strategies.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="custom-section">
  <div class="container">
    <div class="row mb-5">
      <div class="col-lg-6 d-flex flex-column justify-content-center" style="padding-bottom: 1rem;">
        <h2>Empowering Businesses</h2>
        <p>At KetraTech, we craft solutions that combine technology and creativity, driving your business toward success.
          Our mission is to help you stand out in a competitive market with impactful strategies.</p>
      </div>
      <div class="col-lg-6">
        <img src="img/Empowering Businesses1.avif" alt="img/Empowering Businesses1.avif" class="custom-image">
      </div>
    </div>

    <div class="row g-4">
      <div class="col-lg-6">
        <img src="img/Empowering Businesses2.avif" alt="img/Empowering Businesses2.avif" class="custom-image">
      </div>
      <div class="col-lg-6 d-flex flex-column justify-content-center">
        <h2>Innovation at the Core</h2>
        <p>We place innovation at the heart of everything we do, delivering strategies tailored to your unique goals.
          By blending expertise and cutting-edge tools, we ensure lasting results for your business.</p>
      </div>
    </div>
  </div>
</section>

<section class="team-section">
    <h2>Meet the team</h2>
    <div class="container">
        <div class="row g-4">
            <div class="col-12 col-sm-6 col-md-4">
                <div class="image-container">
                    <img src="img/raketic.jpg" draggable="false" alt="Team Member" class="img-fluid shadow" style="object-position: top;">
                    <div class="overlay">
                        <h3>Nikola Raketić</h3>
                        <p>Co-Founder & Chief Operations Officer (COO)</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4">
                <div class="image-container">
                    <img src="img/igor.jpg" draggable="false" alt="Team Member" class="img-fluid shadow">
                    <div class="overlay">
                        <h3>Igor Ignjatović</h3>
                        <p>Lead Designer & UX/UI Specialist</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4">
                <div class="image-container">
                    <img src="img/vojinovic.jpg" draggable="false" alt="Team Member" class="img-fluid shadow" style="object-position: top;">
                    <div class="overlay">
                        <h3>Petar Vojinović</h3>
                        <p>Marketing Specialist & Brand Strategist</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4">
                <div class="image-container">
                    <img src="img/simonovic.jpg" draggable="false" alt="Team Member" class="img-fluid shadow" style="object-position: top;">
                    <div class="overlay">
                        <h3>Mihailo Simonović</h3>
                        <p>Full-Stack Developer & Backend Specialist</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4">
                <div class="image-container">
                    <img src="img/urkom.jpg" draggable="false" alt="Team Member" class="img-fluid shadow" style="object-position: center;">
                    <div class="overlay">
                        <h3>Aleksa Urkom</h3>
                        <p>Full-Stack Developer & DevOps Specialist</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4">
                <div class="image-container">
                    <img src="img/uros2.jpg" draggable="false" alt="Team Member" class="img-fluid shadow" style="object-position: center;">
                    <div class="overlay">
                        <h3>Uroš Stojanović</h3>
                        <p>Frontend Developer</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="centered-section">
    <h1>Behind every great project is <br><span>a truly dedicated team</span></h1>
    <p>At Ketra Tech, our experts combine creativity, technical - <br>expertise, and a passion to deliver succsessful solutions.</p>
    <a class="btn btn-schedule" href="/">See our work</a>
</section>

<?php include_once('footer.php'); ?>