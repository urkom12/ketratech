<?php include_once('header.php'); ?>
<link rel="stylesheet" href="/assets/css/hirenow.css">
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
<div class="container hire-now-main">
    <h1 class="mb-4">What's your next big idea?</h1>
    <div class="row justify-content-center align-self-center hire-now-boxes">
        <div class="col-md-4">
            <div class="box1">
                <img src="img/headphones.svg" alt="Headphones">
                <h4>Consultation Service</h4>
                <ul>
                    <li>Consult our experts for your next big idea</li>
                </ul>
                <button class="hire-now-buttons">Schedule a consultation</button>
            </div>
        </div>
        <div class="col-md-4">
            <div class="box2">
                <img src="img/people.svg" alt="People">
                <h4>Seeking technical professionals or an entire team ?</h4>
                <ul>
                    <li>Get dedicated resources to handle your project</li>
                </ul>
                <button class="hire-now-buttons">Hire Developer or Teams</button>
            </div>
        </div>
        <div class="col-md-4">
            <div class="box3">
                <img src="img/building.svg" alt="Building">
                <h4>Project Management Solution</h4>
                <ul>
                    <li>Seeking technical professionals to handle your project</li>
                </ul>
                <button class="hire-now-buttons">Hire Us</button>
            </div>
        </div>
    </div>
</div>
<?php include_once('footer.php'); ?>