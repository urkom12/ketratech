<?php include_once('header.php'); ?>

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
    <video autoplay muted loop playsinline preload="auto" disablePictureInPicture>
    <source src="img/gradient.mp4" type="video/mp4">
        <source src="img/gradient.webm" type="video/webm">
        Your browser does not support the video tag.
    </video>
</div>

<section class="team-section-about">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <img src="img/aboutus_img.avif" alt="Team" class="img-fluid shadow">
            </div>
            <div class="animation-div col-md-10">
                <h1>The team dedicated to your success</h1>
                <p>Our passionate and skilled team is here to bring your vision to life. With expertise in web development, design, and strategy, we ensure your business achieves its full potential. Let us guide you to success with solutions crafted for your unique needs.</p>
            </div>
        </div>
    </div>
</section>

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
                <img src="img/slika_aboutus1.avif" alt="img/slika_aboutus1.png" class="custom-image">
            </div>
        </div>
        <div class="row g-4">
            <div class="col-lg-6">
                <img src="img/slika_aboutus2.avif" alt="img/slika_aboutus2.png" class="custom-image">
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
        <h2 class="text-primary mb-4" style="text-align: center;">What are our core values?<br><span style="color: #A89CFD;">Why us?</span></h2>
        <div class="row justify-content-center">
            <div class="box col-lg-4 col-md-6 mb-4">
                <div class="card bg-transparent border-0 h-100 text-white">
                    <div class="icon mb-3">
                        <img src="img/icon1.svg" alt="Icon 1" class="img-fluid">
                    </div>
                    <h5 class="fw-bold">Prioritizing essential features.</h5>
                    <p class="text-muted">We focus on what truly matters to your users, avoiding unnecessary complexity that could overwhelm them.</p>
                </div>
            </div>
            <div class="box col-lg-4 col-md-6 mb-4">
                <div class="card bg-transparent border-0 h-100 text-white">
                    <div class="icon mb-3">
                        <img src="img/icon2.svg" alt="Icon 2" class="img-fluid">
                    </div>
                    <h5 class="fw-bold">Consistency in design.</h5>
                    <p class="text-muted">Our approach ensures a seamless and intuitive user experience through thoughtful and coherent design strategies.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include_once('footer.php'); ?>