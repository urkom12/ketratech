<?php include "header.php"; ?>

<div id="particles-js"></div>

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
    <video autoplay muted loop disablePictureInPicture>
        <source src="img/gradient.webm" type="video/mp4">
        Your browser does not support the video tag.
    </video>
</div>



<div class="hero">
    <video autoplay muted loop disablePictureInPicture>
        <source src="img/hero.webm" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    <div class="container">
        <div class="hero-content d-flex flex-column align-items-start justify-content-center h-100">
            <h1>We make <span>custom websites</span> for your business</h1>
            <p>It doesn't matter if you are a startup or enterprise, we take our job seriously!</p>
            <a href="/hirenow" class="btn btn-custom">Hire Now</a>
        </div>
    </div>
</div>

<section class="ux-section py-5 text-center text-lg-start">
    <div class="container">
        <h2 class="text-primary mb-4">Is your UX good enough?<br><span>Check the following:</span></h2>
        <div class="row justify-content-center">
            <div class="box col-lg-4 col-md-6 mb-4">
                <div class="card bg-transparent border-0 h-100 text-white">
                    <div class="icon mb-3"><img src="img/icon1.svg" alt="Icon 1" class="img-fluid"></div>
                    <h3 class="fw-bold">Prioritizing all of the features can backfire.</h3>
                    <p class="text-muted">Too much information overwhelms users, leading to confusion and a steeper learning curve.</p>
                </div>
            </div>
            <div class="box col-lg-4 col-md-6 mb-4">
                <div class="card bg-transparent border-0 h-100 text-white">
                    <div class="icon mb-3"><img src="img/icon2.svg" alt="Icon 2" class="img-fluid"></div>
                    <h3 class="fw-bold">Inconsistent and unpractical design.</h3>
                    <p class="text-muted">Adding elements without a clear strategy disrupts user experience and flow.</p>
                </div>
            </div>
            <div class="box col-lg-4 col-md-6 mb-4">
                <div class="card bg-transparent border-0 h-100 text-white">
                    <div class="icon mb-3"><img src="img/icon3.svg" alt="Icon 3" class="img-fluid"></div>
                    <h3 class="fw-bold">Lack of user-centered design.</h3>
                    <p class="text-muted">Ignoring user needs results in decreased engagement and higher bounce rates.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include "footer.php"; ?>
