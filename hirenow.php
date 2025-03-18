







<!DOCTYPE html>

<html lang="en">

<head>

  <meta charset="UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <link rel="stylesheet" href="styles.css">

  <title>Interactive Calendar and Booking</title>

  <style>

    body {

      font-family: Arial, sans-serif;

      background: linear-gradient(145deg, #2e026b, #450d96);

      color: #fff;

      justify-content: center;

      align-items: center;

      height: 100vh;

      margin: 0;

    }

    nav button{

      width: auto !important;

    }



    .hire-now{

      padding-top: 7rem;

    }



    .hire-now h1 {

    font-size: 3.5rem; 

    font-weight: 700;

    margin-bottom: 20px;

    color: #A89CFD !important;

    }



    .hire-now p {

        font-size: 1.5rem;

        font-weight: 300;

    }



    .calendar-container, .time-selector-form, .form-container {

      background-color: #1e0735;

      border-radius: 8px;

      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);

      padding: 20px 20px;

      width: 400px;

      text-align: center;

      display: none;

    }



    .calendar-container.active, .time-selector-form.active, .form-container.active {

      display: block;

    }



    h1, h2 {

      font-size: 1.5rem;

      margin-bottom: 10px;

    }



    .calendar-header {

      display: flex;

      justify-content: space-between;

      align-items: center;

      margin-bottom: 20px;

    }



    .calendar-header button {

      background-color: transparent;

      border: none;

      color: #fff;

      font-size: 18px;

      cursor: pointer;

    }



    .calendar-header button:hover {

      color: #8f8fff;

    }



    .calendar-days {

      display: grid;

      grid-template-columns: repeat(7, 1fr);

      gap: 5px;

    }



    .calendar-days div {

      padding: 10px;

      text-align: center;

      border-radius: 4px;

      cursor: pointer;

    }



    .calendar-days .inactive {

      color: #555;

      pointer-events: none;

    }



    .calendar-days .active:hover {

      background-color: #3d3d5c;

    }



    .calendar-days .selected {

      background-color: #8f8fff;

      color: #fff;

    }



    button {

      background-color: #6a0dad;

      color: #fff;

      border: none;

      border-radius: 5px;

      padding: 10px;

      font-size: 1rem;

      cursor: pointer;

      width: 100%;

      transition: background-color 0.3s ease;

    }



    button:hover {

      background-color: #8145c3;

    }



    button:disabled {

      background-color: #555;

      cursor: not-allowed;

    }



    .back-button {

    position: absolute;

    top: 10px;

    left: 10px;

    border: none;

    padding: 8px 12px;

    border-radius: 4px;

    cursor: pointer;

    font-size: 0.9em;

    width: 5rem;

}



.back-button:hover {

  background-color: #ff4c4c;

}



.time-selector-form {

  position: relative;

  padding: 40px 20px 20px; 

  border-radius: 8px;

}





    .timezone {

      margin-bottom: 20px;

      border: 1px solid #A89CFD;

      border-radius: 5px;

    }



    .timezone label, .time-input label {

      display: block;

      margin-bottom: 5px;

      font-size: 1rem;

      text-align: left;

      padding-top: 5px;

      padding-left: 10px;

    }



    .time-input{

      border: 1px solid #A89CFD ;

      border-radius: 5px;

      margin-bottom: 20px;

    }



    .timezone select, .time-input input {

      background-color: transparent;

      color: white;

      width: 90%;

      padding: 10px;

      border: none;

      border-radius: 5px;

      font-size: 1rem;

      margin-bottom: 15px;

    }



    .timezone option{

      color: black;

      background-color: white;

    }



    .time-options {

      display: flex;

      flex-direction: column;

      gap: 10px;

      margin-bottom: 20px;

    }



    .time-options button {

      background-color: #3e1363;

      color: #fff;

      border: none;

      border-radius: 5px;

      padding: 10px;

      font-size: 1rem;

      cursor: pointer;

      transition: background-color 0.3s ease;

    }



    .time-options button:hover {

      background-color: #532285;

    }







    .form-container{

        position: relative;

    }



    .form-field {

      margin-bottom: 15px;

      text-align: left;

      border: 1px solid #A89CFD; 

      border-radius: 5px;

    }

 

    .form-field label {

      display: block;

      margin-bottom: 5px;

      font-size: 1rem;

      padding-top: 5px;

      padding-left: 10px;

    }



    .form-field input, .form-field textarea {

      background-color: transparent;

      color: white;

      width: 95%;

      padding: 10px;

      border: none;

      border-radius: 5px;

      font-size: 1rem;

    }



    input:focus{

      background-color: transparent;

      border-color: transparent;

      box-shadow: none; 

      color: white;

    }



    .form-field textarea {

      resize: none;

    }







    @media (max-width: 768px) {



      .hire-now{

        padding-top: 7rem;

        text-align: center;

      }



      .hire-now h1 {

        font-size: 2rem;

      }



      .hire-now p {

        font-size: 1rem;

      }



      .back-button {

        font-size: 0.8rem;

      }

    }



    @media (max-width: 480px) {



      .body{

        width: 100%;

      }



      button {

        font-size: 0.8rem;

        padding: 8px;

      }



      .hire-now h1 {

        font-size: 1.5rem;

        margin-left: 0;

        margin-right: 0;

      }



      .hire-now p {

        font-size: 0.9rem;

      }



      .calendar-container, .time-selector-form, .form-container {

        width: auto !important;

      }

      .calc-response{

        width: 100% !important;

      }

    }



  </style>

</head>

<body>



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





<div class="main">   

     <video autoplay muted loop>

      <source src="img/gradient.webm" type="video/mp4">

      Your browser does not support the video tag.

    </video>

  </div>

    

  <div class="hire-now container text-center text-md-start" >

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

      <option value="0">Selecte your time zone</option>

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

      <option value="(GMT)" >(GMT) Western Europe Time, London, Lisbon, Casablanca</option>

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

  <script>

  const calendarContainer = document.getElementById('calendarContainer');

  const timeSelectorForm = document.getElementById('timeSelectorForm');

  const calendarDays = document.getElementById('calendarDays');

  const currentMonthYear = document.getElementById('currentMonthYear');

  const toTimeSelectorButton = document.getElementById('toTimeSelector');

  const backToCalendarButton = document.getElementById('backToCalendar');

  const toFormButton = document.getElementById('toForm');

  const selectedDateText = document.getElementById('selectedDateText');

  const backToTimeSelectorButton = document.getElementById('backToTimeSelector');





  const today = new Date();

  let selectedDate = null;

  let currentMonth = today.getMonth();

  let currentYear = today.getFullYear();



  function renderCalendar() {

    const firstDay = new Date(currentYear, currentMonth, 1).getDay();

    const lastDate = new Date(currentYear, currentMonth + 1, 0).getDate();

    const daysInPrevMonth = new Date(currentYear, currentMonth, 0).getDate();



    const dates = [];



    for (let i = firstDay - 1; i >= 0; i--) {

      dates.push({ date: daysInPrevMonth - i, class: 'inactive' });

    }



    for (let i = 1; i <= lastDate; i++) {

      const isPast =

        currentYear < today.getFullYear() ||

        (currentYear === today.getFullYear() &&

          (currentMonth < today.getMonth() || (currentMonth === today.getMonth() && i < today.getDate())));

      dates.push({ date: i, class: isPast ? 'inactive' : 'active' });

    }



    const totalCells = 42;

    const nextMonthDays = totalCells - dates.length;

    for (let i = 1; i <= nextMonthDays; i++) {

      dates.push({ date: i, class: 'inactive' });

    }



    calendarDays.innerHTML = '';

    dates.forEach((day) => {

      const div = document.createElement('div');

      div.textContent = day.date;

      div.className = day.class;

      if (day.class === 'active') {

        div.addEventListener('click', () => {

          document.querySelectorAll('.selected').forEach((el) => el.classList.remove('selected'));

          div.classList.add('selected');

          selectedDate = new Date(currentYear, currentMonth, day.date);

          toTimeSelectorButton.disabled = false;

        });

      }

      calendarDays.appendChild(div);

    });



    currentMonthYear.textContent = `${new Intl.DateTimeFormat('en-US', {

      month: 'long',

      year: 'numeric',

    }).format(new Date(currentYear, currentMonth))}`;

  }



  document.getElementById('prevMonth').addEventListener('click', () => {

    if (currentYear > today.getFullYear() || (currentYear === today.getFullYear() && currentMonth > today.getMonth())) {

      currentMonth--;

      if (currentMonth < 0) {

        currentMonth = 11;

        currentYear--;

      }

      renderCalendar();

    }

  });



  document.getElementById('nextMonth').addEventListener('click', () => {

    currentMonth++;

    if (currentMonth > 11) {

      currentMonth = 0;

      currentYear++;

    }

    renderCalendar();

  });



  toTimeSelectorButton.addEventListener('click', () => {

    if (selectedDate) {

      calendarContainer.classList.remove('active');

      timeSelectorForm.classList.add('active');

      selectedDateText.textContent = `${selectedDate.toDateString()}`;

    }

  });



  backToCalendarButton.addEventListener('click', () => {

    timeSelectorForm.classList.remove('active');

    calendarContainer.classList.add('active');

  });



  toFormButton.addEventListener('click', () => {

    document.getElementById('selected-date').value = selectedDate.toISOString().split('T')[0]; // Postavlja format YYYY-MM-DD

    document.getElementById('selected-time').value = document.getElementById('appt').value; // Postavlja odabrano vreme

    document.getElementById('selected-timezone').value = document.getElementById('timezone').value; // Postavlja vremensku zonu



    timeSelectorForm.classList.remove('active');

    formContainer.classList.add('active');

});



  backToTimeSelectorButton.addEventListener('click', () => {

  formContainer.classList.remove('active');

  timeSelectorForm.classList.add('active');

});









const timezoneSelect = document.getElementById('timezone');

const timeInput = document.getElementById('appt');



function validateTimeSelection() {

  if (timezoneSelect.value !== "0" && timeInput.value) {

    toFormButton.disabled = false;

  } else {

    toFormButton.disabled = true;

  }

}



timezoneSelect.addEventListener('change', validateTimeSelection);

timeInput.addEventListener('input', validateTimeSelection);



validateTimeSelection();







const form = document.querySelector('form');

const hiddenTimezone = document.getElementById('selected-timezone');

const hiddenTime = document.getElementById('selected-appt');



form.addEventListener('submit', () => {

  hiddenTimezone.value = timezoneSelect.value;

  hiddenTime.value = timeInput.value;

});









  renderCalendar();

</script>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>



</body>

</html>









