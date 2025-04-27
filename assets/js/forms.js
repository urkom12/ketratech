document.addEventListener("DOMContentLoaded", function () {
    const input = document.querySelector("#phone");
    if (input) {
        window.intlTelInput(input, {
            initialCountry: "us",
            nationalMode: false,
            utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js"
        });
    }
});
  

document.querySelectorAll('.error-text').forEach(el => {
    el.textContent = '';
    el.style.display = 'none';
});

document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector("#step-1");
    form.addEventListener("submit", function (event) {
        event.preventDefault();
        
        document.querySelectorAll('.error-text').forEach(el => {
            el.textContent = '';
            el.style.display = 'none';
        });
    
        let isValid = true;
    
        const name = document.querySelector("#name").value.trim();
        const email = document.querySelector("#email").value.trim();
        const phone = document.querySelector("#phone").value.trim();
    
        if (!name) {
            const err = document.querySelector("#name-error");
            err.textContent = "Name is required.";
            err.style.display = "block";
            isValid = false;
        }
    
        if (!email || !email.includes("@")) {
            const err = document.querySelector("#email-error");
            err.textContent = "Email invalid.";
            err.style.display = "block";
            isValid = false;
        }
    
        const phoneRegex = /^\+[0-9]+$/;
        if (!phone || !phoneRegex.test(phone)) {
            const err = document.querySelector("#phone-error");
            err.textContent = "Phone number invalid.";
            err.style.display = "block";
            isValid = false;
        }
    
        if (isValid) {
            form.submit();
        }
    });
});

document.addEventListener("DOMContentLoaded", function () {
    document.querySelector("#next-step-1").addEventListener("click", function () {
        document.querySelector("#step-1").style.display = "none";
        document.querySelector("#step-2").style.display = "block";
    });
  
    const step2Form = document.querySelector("#step-2");
    step2Form.addEventListener("submit", function (event) {
        event.preventDefault();
    
        step2Form.querySelectorAll('.error-text').forEach(el => {
            el.textContent = "";
            el.style.display = "none";
        });
    
        let isValid = true;
    
        const type1 = document.querySelector("#type1").value;
        const type2 = document.querySelector("#type2").value;
        const comments = document.querySelector("#additional").value.trim();
    
        if (!type1) {
            const err = document.querySelector("#type1-error");
            err.textContent = "Please choose.";
            err.style.display = "block";
            isValid = false;
        }
    
        if (!type2) {
            const err = document.querySelector("#type2-error");
            err.textContent = "Please choose.";
            err.style.display = "block";
            isValid = false;
        }
    
        if (isValid) {
            step2Form.submit();
        }
    });
});

document.addEventListener("DOMContentLoaded", function () {
    document.querySelector("#next-step-2").addEventListener("click", function () {
        document.querySelector("#step-2").style.display = "none";
        document.querySelector("#step-3").style.display = "block";
    });
});
  
document.addEventListener("DOMContentLoaded", function () {
    const calendarDates = document.getElementById("calendar-dates");
    const monthYear = document.getElementById("month-year");
    const nextMonthBtn = document.getElementById("next-month");
    const prevMonthBtn = document.getElementById("prev-month");

    let currentDate = new Date();

    function renderCalendar(date) {
        const year = date.getFullYear();
        const month = date.getMonth();
        const today = new Date();

        const firstDay = new Date(year, month, 1).getDay(); // day of week (0 = Sunday)
        const daysInMonth = new Date(year, month + 1, 0).getDate();

        // Prilagođavamo da nedelja bude poslednji dan, a ponedeljak prvi
        let startDay = firstDay === 0 ? 6 : firstDay - 1;

        calendarDates.innerHTML = "";
        monthYear.textContent = date.toLocaleString("default", { month: "long", year: "numeric" });

        // Prazna polja za dane pre 1. u mesecu
        for (let i = 0; i < startDay; i++) {
            const emptyDiv = document.createElement("div");
            calendarDates.appendChild(emptyDiv);
        }

        for (let day = 1; day <= daysInMonth; day++) {
            const dateEl = document.createElement("div");
            dateEl.classList.add("date");

            const thisDate = new Date(year, month, day);

            if (thisDate < today.setHours(0,0,0,0)) {
                dateEl.classList.add("disabled");
            } else {
                dateEl.classList.add("enabled");
                dateEl.addEventListener("click", function () {
                    // Skini prethodnu selekciju
                    document.querySelectorAll(".date").forEach(d => d.classList.remove("selected"));
                    this.classList.add("selected");
                });
            }

            dateEl.textContent = day;
            calendarDates.appendChild(dateEl);
        }

        // Disable previous month button
        if (year === today.getFullYear() && month === today.getMonth()) {
            prevMonthBtn.disabled = true;
        } else {
            prevMonthBtn.disabled = false;
        }
    }

    nextMonthBtn.addEventListener("click", function () {
        currentDate.setMonth(currentDate.getMonth() + 1);
        renderCalendar(currentDate);
    });

    prevMonthBtn.addEventListener("click", function () {
        currentDate.setMonth(currentDate.getMonth() - 1);
        renderCalendar(currentDate);
    });

    renderCalendar(currentDate);
});