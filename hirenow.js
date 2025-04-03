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