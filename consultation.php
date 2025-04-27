<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>KetraTech</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.min.css"/>
  <link href="/assets/css/bootstrap/bootstrap.css" rel="stylesheet">
  <link rel="stylesheet" href="/assets/css/forms.css">
</head>
<body>
    <div class="videol">
        <video autoplay muted loop playsinline preload="auto" disablePictureInPicture> 
            <source src="img/gradient.mp4" type="video/mp4">
            <source src="img/gradient.webm" type="video/webm">
            Your browser does not support the video tag.
        </video>
    </div>
    <div class="container d-flex bigbox">
        <div class="left col-md-6">
            <div class="main">
                <h1>Start Your Consultation!</h1>
                <ul class="check-list">
                    <li>We build a comprehensive solution strategy</li>
                    <li>We plan, staff, deliver, and manage technology projects and programs across several technical domains</li>
                    <li>We get the right people for the job with the quality, speed, and cost effectiveness of our Talent Cloud</li>
                </ul>
            </div>
        </div>
        <div class="right col-md-6">
            <img src="img/logo-loading.png" alt="Logo" class="logo">
            <h2 class="font-medium text-3xl">Get Expert Consultation for Your Next Move!</h2>
            <p>Need guidance? Our experts are here to help. Schedule a consultation and let’s bring your ideas to life!</p>

            <form action="#" method="post" class="form-step" id="step-1">
                <div class="form-group">
                    <label class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70" for=":r39:-form-item">Your Full name</label>
                    <input type="text" id="name" name="name">
                    <small class="error-text" id="name-error"></small>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email">
                    <small class="error-text" id="email-error"></small>
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="tel" id="phone" name="phone">
                    <small class="error-text" id="phone-error"></small>
                </div>
                <div class="form-buttons">
                    <button type="button" onclick="history.back()">Cancel</button>
                    <button type="button" id="next-step-1">Next</button>
                </div>
            </form>

            <form action="#" method="post" class="form-step" id="step-2" style="display: none !important;">
                <div class="form-group">
                <label for="type1">Are you an individual or a company?</label>
                    <select id="type1" name="type1">
                        <option value="" disabled selected>Select your type</option>
                        <option value="typeA">Individual</option>
                        <option value="typeB">Company</option>
                    </select>
                    <small class="error-text" id="type1-error"></small>
                </div>
                <div class="form-group">
                    <label for="type2">What kind of consultation are you looking for?</label>
                    <select id="type2" name="type2">
                        <option value="" disabled selected>Select your type</option>
                        <option value="optionA">Product/Niche related</option>
                        <option value="optionB">Our services</option>
                        <option value="optionC">Other</option>
                    </select>
                    <small class="error-text" id="type2-error"></small>
                </div>
                <div class="form-group">
                    <label for="additional">Additional information</label>
                    <textarea id="additional" name="additional" placeholder="Any additional information..." rows="4"></textarea>
                    <small class="error-text" id="additional-error"></small>
                </div>
                <div class="form-buttons">
                    <button type="button" onclick="history.back()">Cancel</button>
                    <button type="button" id="next-step-2">Next</button>
                </div>
            </form>

            <form id="step-3" class="form-step d-flex flex-column" style="display: none !important;">
                <div class="d-flex flex-row">
                    <div class="form-group">
                        <label>Select a date</label>
                        <div id="calendar-wrapper">
                            <div id="calendar-header">
                                <button id="prev-month" disabled>&lt;</button>
                                <span id="month-year"></span>
                                <button id="next-month">&gt;</button>
                            </div>
                            <div id="calendar-days">
                                <div>Mo</div>
                                <div>Tu</div>
                                <div>We</div>
                                <div>Th</div>
                                <div>Fr</div>
                                <div>Sa</div>
                                <div>Su</div>
                            </div>
                            <div id="calendar-dates"></div>
                        </div>
                    </div>
                    <div class="d-flex flex-column">
                        <div class="form-group">
                            <label for="hour">Hour</label>
                            <select id="hour" name="hour">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="am-pm">AM/PM</label>
                            <select id="am-pm" name="am-pm">
                                <option value="AM">AM</option>
                                <option value="PM">PM</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="timezone">Timezone</label>
                            <select id="timezone" name="timezone">
                                <option value="UTC-12:00">UTC-12:00</option>
                                <option value="UTC-11:00">UTC-11:00</option>
                                <option value="UTC-10:00">UTC-10:00</option>
                                <option value="UTC-09:00">UTC-09:00</option>
                                <option value="UTC-08:00">UTC-08:00</option>
                                <option value="UTC-07:00">UTC-07:00</option>
                                <option value="UTC-06:00">UTC-06:00</option>
                                <option value="UTC-05:00">UTC-05:00</option>
                                <option value="UTC-04:00">UTC-04:00</option>
                                <option value="UTC-03:00">UTC-03:00</option>
                                <option value="UTC-02:00">UTC-02:00</option>
                                <option value="UTC-01:00">UTC-01:00</option>
                                <option value="UTC+00:00">UTC+00:00</option>
                                <option value="UTC+01:00">UTC+01:00</option>
                                <option value="UTC+02:00">UTC+02:00</option>
                                <option value="UTC+03:00">UTC+03:00</option>
                                <option value="UTC+04:00">UTC+04:00</option>
                                <option value="UTC+05:00">UTC+05:00</option>
                                <option value="UTC+06:00">UTC+06:00</option>
                                <option value="UTC+07:00">UTC+07:00</option>
                                <option value="UTC+08:00">UTC+08:00</option>
                                <option value="UTC+09:00">UTC+09:00</option>
                                <option value="UTC+10:00">UTC+10:00</option>
                                <option value="UTC+11:00">UTC+11:00</option>
                                <option value="UTC+12:00">UTC+12:00</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-buttons">
                    <button type="button" onclick="previousStep()">Back</button>
                    <button type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
    <script src="/assets/js/forms.js"></script>
    <script src="/assets/js/bootstrap/bootstrap.min.js"></script>
</body>

</html>