<?php include_once('header.php')?>
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
        <source src="img/gradient.webm" type="video/webm">
        <source src="img/gradient.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
</div>

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
                <div class="accordion-header" id="headingOne" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                    <div class="d-flex justify-content-between align-items-center clickable">
                        <span class="text-white">Junior Backend Developer</span>
                        <span class="icon">+</span>
                    </div>
                </div>
                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                    <div class="accordion-body text-white-50">
                        We're looking for a passionate Junior Backend Developer to join our team. You'll be responsible for building and maintaining server-side logic, integrating APIs, and ensuring optimal performance. If you have a strong understanding of backend frameworks and are eager to grow, this role is for you!          
                    </div>
                </div>
            </div>
            <div class="box mb-3" style="max-width: 70%;">
                <div class="accordion-header" id="headingTwo" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    <div class="d-flex justify-content-between align-items-center clickable">
                        <span class="text-white">Copywriter</span>
                        <span class="icon">+</span>
                    </div>
                </div>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                    <div class="accordion-body text-white-50">
                        We are seeking a talented Copywriter to craft compelling and engaging content for our clients. Your creativity will drive brand messages, social media campaigns, and web copy. Join us to make an impact through words and storytelling.
                    </div>
                </div>
            </div>
            <div class="box mb-3" style="max-width: 70%;">
                <div class="accordion-header" id="headingThree" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    <div class="d-flex justify-content-between align-items-center clickable">
                        <span class="text-white">Senior UX Designer</span>
                        <span class="icon">+</span>
                    </div>
                </div>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                    <div class="accordion-body text-white-50">
                        Join our team as a Senior UX Designer and lead the creation of seamless user experiences. You'll collaborate with developers and clients to design intuitive interfaces that drive engagement. Bring your expertise and innovation to shape the future of user-centered design.
                    </div>
                </div>
            </div>
        </div>

        <div class="centered-section">
            <p>If there is a position for you, send us your application!</p>
            <a href="/hirenow"><div class="btn ketra_btn line-show">Apply</div</a>
        </div>
    </div>
</section>

<?php include_once('footer.php'); ?>