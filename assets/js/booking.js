const calendarContainer = document.getElementById('calendarContainer');
const timeSelectorForm = document.getElementById('timeSelectorForm');
const calendarDays = document.getElementById('calendarDays');
const currentMonthYear = document.getElementById('currentMonthYear');
const toTimeSelectorButton = document.getElementById('toTimeSelector');
const backToCalendarButton = document.getElementById('backToCalendar');
const toFormButton = document.getElementById('toForm');
const selectedDateText = document.getElementById('selectedDateText');
const backToTimeSelectorButton = document.getElementById('backToTimeSelector');
const formContainer = document.getElementById('formContainer'); // <- Ovo je falilo!
const timezoneSelect = document.getElementById('timezone');
const timeInput = document.getElementById('appt');
const form = document.querySelector('form');
const hiddenTimezone = document.getElementById('selected-timezone');
const hiddenTime = document.getElementById('selected-appt');

const today = new Date();
let selectedDate = null;
let currentMonth = today.getMonth();
let currentYear = today.getFullYear();

function formatDate(date) {
  return date.toISOString().split('T')[0];
}

function isDateInPast(year, month, day) {
  const date = new Date(year, month, day);
  return date < new Date(today.getFullYear(), today.getMonth(), today.getDate());
}

function renderCalendar() {
  const firstDayOfWeek = new Date(currentYear, currentMonth, 1).getDay();
  const adjustedFirstDay = firstDayOfWeek === 0 ? 6 : firstDayOfWeek - 1;
  const lastDate = new Date(currentYear, currentMonth + 1, 0).getDate();
  const daysInPrevMonth = new Date(currentYear, currentMonth, 0).getDate();

  const dates = [];

  for (let i = 0; i < adjustedFirstDay; i++) {
    dates.push({ date: '', class: 'empty' });
  }  

  for (let i = 1; i <= lastDate; i++) {
    const isPast = isDateInPast(currentYear, currentMonth, i);
    dates.push({ date: i, class: isPast ? 'past' : 'active' });
  }  

  const totalCells = 42;
  const nextMonthDays = totalCells - dates.length;
  for (let i = 0; i < nextMonthDays; i++) {
    dates.push({ date: '', class: 'empty' });
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

  currentMonthYear.textContent = new Intl.DateTimeFormat('en-US', {
    month: 'long',
    year: 'numeric'
  }).format(new Date(currentYear, currentMonth));
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
    selectedDateText.textContent = selectedDate.toDateString();
  }
});

backToCalendarButton.addEventListener('click', () => {
  timeSelectorForm.classList.remove('active');
  calendarContainer.classList.add('active');
});

toFormButton.addEventListener('click', () => {
  document.getElementById('selected-date').value = formatDate(selectedDate);
  document.getElementById('selected-time').value = timeInput.value;
  document.getElementById('selected-timezone').value = timezoneSelect.value;

  timeSelectorForm.classList.remove('active');
  formContainer.classList.add('active');
});

backToTimeSelectorButton.addEventListener('click', () => {
  formContainer.classList.remove('active');
  timeSelectorForm.classList.add('active');
});

function validateTimeSelection() {
  toFormButton.disabled = !(timezoneSelect.value !== "0" && timeInput.value);
}

timezoneSelect.addEventListener('change', validateTimeSelection);
timeInput.addEventListener('input', validateTimeSelection);

form.addEventListener('submit', () => {
  hiddenTimezone.value = timezoneSelect.value;
  hiddenTime.value = timeInput.value;
});

validateTimeSelection();
renderCalendar();
