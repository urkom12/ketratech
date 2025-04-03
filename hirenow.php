<?php include_once('header.php'); ?>
<link rel="stylesheet" href="hirenow.css">

<div class="main">   
    <video autoplay muted loop>
    <source src="img/gradient.webm" type="video/mp4">
    Your browser does not support the video tag.
    </video>
</div>
<div class="hire-now container text-center text-md-start">
    <div class="row justify-content-center align-self-center">
        <div class="col-lg-6" style="align-self: center;">
            <h1 class="display-4 text-light">Let’s talk about your project.</h1>
            <p class="lead text-light">Choose the time that suits you the most and we will make a 30 minutes call.</p>
        </div>

        <div class="calc-response col-6" style="margin-right: auto;">
            <div class="calendar-container active" id="calendarContainer">
                <div class="calendar-header">
                    <button id="prevMonth">&#8249;</button>
                    <h2 id="currentMonthYear"></h2>
                    <button id="nextMonth">&#8250;</button>
                </div>
                <div class="calendar-days" id="calendarDays"></div>
                <button id="toTimeSelector" disabled>Next Step</button>
            </div>

            <div class="time-selector-form" id="timeSelectorForm">
                <h1 style="font-size: 2rem;">Select a time</h1>
                <p id="selectedDateText"></p>

                <div class="timezone">
                    <label for="timezone">Select a timezone:</label>
                    <select id="timezone" name="timezone">
                        <option value="0">Select your time zone</option>
                        <option value="(GMT -12:00)">(GMT -12:00) Eniwetok, Kwajalein</option>
                        <option value="(GMT -11:00)">(GMT -11:00) Midway Island, Samoa</option>
                        <option value="(GMT -10:00)">(GMT -10:00) Hawaii</option>
                        <option value="(GMT -9:30)">(GMT -9:30) Taiohae</option>
                        <option value="(GMT -9:00)">(GMT -9:00) Alaska</option>
                        <option value="(GMT -8:00)">(GMT -8:00) Pacific Time (US &amp; Canada)</option>
                        <option value="(GMT -7:00)">(GMT -7:00) Mountain Time (US &amp; Canada)</option>
                        <option value="(GMT -6:00)">(GMT -6:00) Central Time (US &amp; Canada), Mexico City</option>
                        <option value="(GMT -5:00)">(GMT -5:00) Eastern Time (US &amp; Canada), Bogota, Lima</option>
                        <option value="(GMT -4:30)">(GMT -4:30) Caracas</option>
                        <option value="(GMT -4:00)">(GMT -4:00) Atlantic Time (Canada), Caracas, La Paz</option>
                        <option value="(GMT -3:30)">(GMT -3:30) Newfoundland</option>
                        <option value="(GMT -3:00)">(GMT -3:00) Brazil, Buenos Aires, Georgetown</option>
                        <option value="(GMT -2:00)">(GMT -2:00) Mid-Atlantic</option>
                        <option value="(GMT -1:00)">(GMT -1:00) Azores, Cape Verde Islands</option>
                        <option value="(GMT)"> (GMT) Western Europe Time, London, Lisbon, Casablanca</option>
                        <option value="(GMT +1:00)">(GMT +1:00) Brussels, Copenhagen, Madrid, Paris</option>
                        <option value="(GMT +2:00)">(GMT +2:00) Kaliningrad, South Africa</option>
                        <option value="(GMT +3:00)">(GMT +3:00) Baghdad, Riyadh, Moscow, St. Petersburg</option>
                        <option value="(GMT +3:30)">(GMT +3:30) Tehran</option>
                        <option value="(GMT +4:00)">(GMT +4:00) Abu Dhabi, Muscat, Baku, Tbilisi</option>
                        <option value="(GMT +4:30)">(GMT +4:30) Kabul</option>
                        <option value="(GMT +5:00)">(GMT +5:00) Ekaterinburg, Islamabad, Karachi, Tashkent</option>
                        <option value="(GMT +5:30)">(GMT +5:30) Bombay, Calcutta, Madras, New Delhi</option>
                        <option value="(GMT +5:45)">(GMT +5:45) Kathmandu, Pokhara</option>
                        <option value="(GMT +6:00)">(GMT +6:00) Almaty, Dhaka, Colombo</option>
                        <option value="(GMT +6:30)">(GMT +6:30) Yangon, Mandalay</option>
                        <option value="(GMT +7:00)">(GMT +7:00) Bangkok, Hanoi, Jakarta</option>
                        <option value="(GMT +8:00)">(GMT +8:00) Beijing, Perth, Singapore, Hong Kong</option>
                        <option value="(GMT +8:45)">(GMT +8:45) Eucla</option>
                        <option value="(GMT +9:00)">(GMT +9:00) Tokyo, Seoul, Osaka, Sapporo, Yakutsk</option>
                        <option value="(GMT +9:30)">(GMT +9:30) Adelaide, Darwin</option>
                        <option value="(GMT +10:00)">(GMT +10:00) Eastern Australia, Guam, Vladivostok</option>
                        <option value="(GMT +10:30)">(GMT +10:30) Lord Howe Island</option>
                        <option value="(GMT +11:00)">(GMT +11:00) Magadan, Solomon Islands, New Caledonia</option>
                        <option value="(GMT +11:30)">(GMT +11:30) Norfolk Island</option>
                        <option value="(GMT +12:00)">(GMT +12:00) Auckland, Wellington, Fiji, Kamchatka</option>
                        <option value="(GMT +12:45)">(GMT +12:45) Chatham Islands</option>
                        <option value="(GMT +13:00)">(GMT +13:00) Apia, Nukualofa</option>
                        <option value="(GMT +14:00)">(GMT +14:00) Line Islands, Tokelau</option>
                    </select>
                </div>

                <div class="time-input">
                    <label for="appt">Select a time:</label>
                    <input type="time" id="appt" name="appt" step="1800" required>
                </div>

                <div class="form-navigation">
                    <button class="back-button" id="backToCalendar">Back</button>
                    <button id="toForm" disabled>Next Step</button>
                </div>
            </div>

            <div class="form-container" id="formContainer">
                <h2>Details</h2>
                <form action="https://formsubmit.co/steveagency2001@gmail.com" method="POST" data-error="http://ketratech.net/error-page.html">
                    <input type="hidden" id="selected-date" name="selected-date">
                    <input type="hidden" id="selected-time" name="selected-time">
                    <input type="hidden" id="selected-timezone" name="selected-timezone">
                    <input type="hidden" id="selected-appt" name="selected-appt">
                    <input type="hidden" name="_template" value="box">
                    <input type="hidden" name="_next" value="http://ketratech.net/thank-you.html">

                    <div class="form-field">
                        <label for="first-name">First Name</label>
                        <input type="text" id="first-name" name="first-name" placeholder="Enter your first name" required>
                    </div>

                    <div class="form-field">
                        <label for="last-name">Last Name</label>
                        <input type="text" id="last-name" name="last-name" placeholder="Enter your last name" required>
                    </div>

                    <div class="form-field">
                        <label for="email">Business Email</label>
                        <input type="email" id="email" name="email" placeholder="Enter your business email" required>
                    </div>

                    <div class="form-field">
                        <label for="company">Company</label>
                        <input type="text" id="company" name="company" placeholder="Name of your business" required>
                    </div>

                    <div class="form-field">
                        <label for="additional-message">Additional Message</label>
                        <textarea id="additional-message" name="additional-message"></textarea>
                    </div>

                    <button class="back-button" id="backToTimeSelector">Back</button>
                    <button type="submit">Book a Call</button>
                </form>
            </div>

        </div>
    </div>
</div>
<script>

if (!response.ok) {

  window.location.href = 'http://localhost/ketra1/error-page.html';

}

</script>

<script src="hirenow.js"></script>

</body>
</html>
