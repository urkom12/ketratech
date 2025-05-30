<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>KetraTech</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.min.css"/>
  <link href="/assets/css/bootstrap/bootstrap.css" rel="stylesheet">
  <link rel="stylesheet" href="/assets/css/forms.css">
  <link rel="canonical" href="https://www.ketratech.com/consultation"/>
</head>
<body>
    <div class="videol">
        <video autoplay muted loop playsinline webkit-playsinline preload="auto" disablePictureInPicture>
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
            <a href="/"><img src="img/logo-loading.png" alt="Logo" class="logo"></a>
            <h2 class="font-medium text-3xl">Get Expert Consultation for Your Next Move!</h2>
            <p>Need guidance? Our experts are here to help. Schedule a consultation and let’s bring your ideas to life!</p>

            <form action="/inc/consultation.php" method="post">
                <div class="form-step" id="step-1">
                    <div class="form-group">
                        <label class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70" for=":r39:-form-item">Your Full name</label>
                        <input type="text" id="firstname" name="name">
                        <input type="text" name="website" style="display:none" tabindex="-1">
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
                        <button type="button" id="back-step-1">Cancel</button>
                        <button type="button" id="next-step-1">Next</button>
                    </div>
                </div>

                <div class="form-step" id="step-2" style="display: none !important;">
                    <div class="form-group">
                        <label for="type1">Are you an individual or a company?</label>
                        <select id="type1" name="type1">
                            <option value="" disabled selected>Select your type</option>
                            <option value="Individual">Individual</option>
                            <option value="Company">Company</option>
                        </select>
                        <small class="error-text" id="type1-error"></small>
                    </div>
                    <div class="form-group">
                        <label for="type2">What kind of consultation are you looking for?</label>
                        <select id="type2" name="type2">
                            <option value="" disabled selected>Select your type</option>
                            <option value="Product/Niche related">Product/Niche related</option>
                            <option value="Our services">Our services</option>
                            <option value="Other">Other</option>
                        </select>
                        <small class="error-text" id="type2-error"></small>
                    </div>
                    <div class="form-group">
                        <label for="additional">Additional information</label>
                        <textarea id="additional" name="additional" placeholder="Any additional information..." rows="4"></textarea>
                    </div>
                    <div class="form-buttons">
                        <button type="button" id="back-step-2">Back</button>
                        <button type="button" id="next-step-2">Next</button>
                    </div>
                </div>

                <div id="step-3" class="form-step d-flex flex-column" style="display: none !important;">
                    <div class="step3">
                        <div class="form-group">
                            <label class="calendar-label">Select a date</label>
                            <div id="calendar-wrapper">
                                <div id="calendar-header">
                                    <button type="button" id="prev-month" disabled>&lt;</button>
                                    <span id="month-year"></span>
                                    <button type="button" id="next-month">&gt;</button>
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
                            <input type="hidden" id="selected-date" name="selected-date">
                            <small class="error-text" id="calendar-error"></small>
                        </div>
                        <div class="d-flex flex-column step3select">
                            <div class="form-group">
                                <label for="hour">Choose time</label>
                                <select id="hour" name="hour">
                                    <option value="" disabled selected>Select a time</option>
                                    <option value="1">1</option>
                                    <option value="1:30">1:30</option>
                                    <option value="2">2</option>
                                    <option value="2:30">2:30</option>
                                    <option value="3">3</option>
                                    <option value="3:30">3:30</option>
                                    <option value="4">4</option>
                                    <option value="4:30">4:30</option>
                                    <option value="5">5</option>
                                    <option value="5:30">5:30</option>
                                    <option value="6">6</option>
                                    <option value="6:30">6:30</option>
                                    <option value="7">7</option>
                                    <option value="7:30">7:30</option>
                                    <option value="8">8</option>
                                    <option value="8:30">8:30</option>
                                    <option value="9">9</option>
                                    <option value="9:30">9:30</option>
                                    <option value="10">10</option>
                                    <option value="10:30">10:30</option>
                                    <option value="11">11</option>
                                    <option value="11:30">11:30</option>
                                    <option value="12">12</option>
                                    <option value="12:30">12:30</option>
                                </select>
                                <select id="am-pm" name="am-pm">
                                    <option value="AM">AM</option>
                                    <option value="PM">PM</option>
                                </select>
                            </div>
                            <small class="error-text" id="hour-error" style="margin-left: 2rem;"></small>
                            <div class="form-group">
                                <label for="timezone">Choose timezone</label>
                                <select id="timezone" name="timezone">
                                    <option value="" disabled selected>Select a timezone</option>
                                    <option value="UTC-12:00">UTC-12:00 (International Date Line West)</option>
                                    <option value="UTC-11:00">UTC-11:00 (Samoa Time)</option>
                                    <option value="UTC-10:00">UTC-10:00 (Hawaii-Aleutian Standard Time)</option>
                                    <option value="UTC-09:00">UTC-09:00 (Alaska Standard Time)</option>
                                    <option value="UTC-08:00">UTC-08:00 (Pacific Standard Time)</option>
                                    <option value="UTC-07:00">UTC-07:00 (Mountain Standard Time)</option>
                                    <option value="UTC-06:00">UTC-06:00 (Central Standard Time)</option>
                                    <option value="UTC-05:00">UTC-05:00 (Eastern Standard Time)</option>
                                    <option value="UTC-04:00">UTC-04:00 (Atlantic Standard Time)</option>
                                    <option value="UTC-03:00">UTC-03:00 (Argentina Time)</option>
                                    <option value="UTC-02:00">UTC-02:00 (Mid-Atlantic Time)</option>
                                    <option value="UTC-01:00">UTC-01:00 (Azores Standard Time)</option>
                                    <option value="UTC+00:00">UTC+00:00 (Greenwich Mean Time)</option>
                                    <option value="UTC+01:00">UTC+01:00 (Central European Time)</option>
                                    <option value="UTC+02:00">UTC+02:00 (Eastern European Time)</option>
                                    <option value="UTC+03:00">UTC+03:00 (Moscow Time)</option>
                                    <option value="UTC+04:00">UTC+04:00 (Azerbaijan Time)</option>
                                    <option value="UTC+05:00">UTC+05:00 (Pakistan Standard Time)</option>
                                    <option value="UTC+06:00">UTC+06:00 (Bangladesh Standard Time)</option>
                                    <option value="UTC+07:00">UTC+07:00 (Indochina Time)</option>
                                    <option value="UTC+08:00">UTC+08:00 (China Standard Time)</option>
                                    <option value="UTC+09:00">UTC+09:00 (Japan Standard Time)</option>
                                    <option value="UTC+10:00">UTC+10:00 (Australian Eastern Standard Time)</option>
                                    <option value="UTC+11:00">UTC+11:00 (Solomon Islands Time)</option>
                                    <option value="UTC+12:00">UTC+12:00 (New Zealand Standard Time)</option>
                                </select>
                                <small class="error-text" id="timezone-error"></small>
                            </div>
                        </div>
                    </div>
                    <div class="form-buttons">
                        <button type="button" id="back-step-3">Back</button>
                        <button type="submit" id="submitForm">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
    <script src="/assets/js/consultation.js"></script>
    <script src="/assets/js/bootstrap/bootstrap.min.js"></script>
</body>

</html>