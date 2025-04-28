document.addEventListener("DOMContentLoaded", function () {
    
    const input = document.querySelector("#phone");
    if (input) {
        window.intlTelInput(input, {
            initialCountry: "us",
            nationalMode: false,
            utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js"
        });
    }
    
    const frameworksSelect = document.getElementById("frameworks");

    if (frameworksSelect) {
        new Choices(frameworksSelect, {
            removeItemButton: true,
            searchEnabled: false,
            itemSelectText: '',
            shouldSort: false
        });
    }

    const calendarDates = document.getElementById("calendar-dates");
    const monthYear = document.getElementById("month-year");
    const nextMonthBtn = document.getElementById("next-month");
    const prevMonthBtn = document.getElementById("prev-month");
    const selectedDateInput = document.getElementById("selected-date");

    if (calendarDates && monthYear && nextMonthBtn && prevMonthBtn && selectedDateInput) {
        let currentDate = new Date();
        let selectedDate = null;

        function renderCalendar(date) {
            const year = date.getFullYear();
            const month = date.getMonth();
            const today = new Date();
            const todayMidnight = new Date(today.getFullYear(), today.getMonth(), today.getDate());

            const firstDay = new Date(year, month, 1).getDay();
            const daysInMonth = new Date(year, month + 1, 0).getDate();

            let startDay = firstDay === 0 ? 6 : firstDay - 1;

            calendarDates.innerHTML = "";
            monthYear.textContent = date.toLocaleString("default", { month: "long", year: "numeric" });

            for (let i = 0; i < startDay; i++) {
                const emptyDiv = document.createElement("div");
                calendarDates.appendChild(emptyDiv);
            }

            for (let day = 1; day <= daysInMonth; day++) {
                const dateEl = document.createElement("div");
                dateEl.classList.add("date");

                const thisDate = new Date(year, month, day);
                const formattedDate = `${thisDate.getFullYear()}-${String(thisDate.getMonth() + 1).padStart(2, '0')}-${String(thisDate.getDate()).padStart(2, '0')}`;

                if (thisDate < todayMidnight) {
                    dateEl.classList.add("disabled");
                } else {
                    dateEl.classList.add("enabled");
                    dateEl.dataset.date = formattedDate;
                    dateEl.addEventListener("click", function () {
                        document.querySelectorAll(".date.enabled").forEach(d => d.classList.remove("selected"));
                        this.classList.add("selected");
                        selectedDate = this.dataset.date;
                        selectedDateInput.value = selectedDate;
                        console.log("Selected date:", selectedDateInput.value);
                    });
                }

                dateEl.textContent = day;
                calendarDates.appendChild(dateEl);
            }

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
    }

    function clearErrors(scope = document) {
        scope.querySelectorAll('.error-text').forEach(el => {
            el.textContent = '';
            el.style.display = 'none';
        });
    }

    clearErrors();

    const backStep1Btn = document.querySelector("#back-step-1");

    if (backStep1Btn) {
        backStep1Btn.addEventListener("click", function() {
            window.location.href = "/hire";
        });
    }

    const step1Form = document.querySelector("#step-1");
    const step1Btn = document.querySelector("#next-step-1");
    const nextStep1Btn = document.querySelector("#next-step-1");

    if (step1Form && step1Btn) {
        step1Btn.addEventListener("click", function (event) {
            event.preventDefault();
            clearErrors();

            let isValid = true;

            const name = document.querySelector("#firstname").value.trim();
            const email = document.querySelector("#email").value.trim();
            const phone = document.querySelector("#phone").value.trim();
            if (!name || name.length < 3) {
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
                if (nextStep1Btn) {
                    document.querySelector("#step-1").style.display = "none";
                    document.querySelector("#step-2").style.display = "flex";
                }
            }
        });
    }

    const step2Form = document.querySelector("#step-2");
    const nextStep2Btn = document.querySelector("#next-step-2");
    const backStep2Btn = document.querySelector("#back-step-2");

    if (step2Form && nextStep2Btn) {
        nextStep2Btn.addEventListener("click", function (event) {
            event.preventDefault();
            clearErrors(step2Form);

            let isValid = true;

            const status = document.querySelector("#status").value;
            const frameworks = document.querySelector("#frameworks").value;
            const budget = document.querySelector("#budget").value;
            const title = document.querySelector("#title").value.trim();
            const description = document.querySelector("#description").value.trim();

            if (!status) {
                const err = document.querySelector("#status-error");
                err.textContent = "Please choose.";
                err.style.display = "block";
                isValid = false;
            }

            if (!frameworks) {
                const err = document.querySelector("#frameworks-error");
                err.textContent = "Choose at least 1 framework.";
                err.style.display = "block";
                isValid = false;
            }

            if (!budget) {
                const err = document.querySelector("#budget-error");
                err.textContent = "Please choose.";
                err.style.display = "block";
                isValid = false;
            }

            if (!title) {
                const err = document.querySelector("#title-error");
                err.textContent = "Title is required.";
                err.style.display = "block";
                isValid = false;
            }

            if (!description) {
                const err = document.querySelector("#description-error");
                err.textContent = "Describe your project.";
                err.style.display = "block";
                isValid = false;
            }
            
            if (isValid) {
                if (nextStep2Btn) {
                    document.querySelector("#step-2").style.display = "none";
                    document.querySelector("#step-3").style.display = "block";
                }
            }
        });

        backStep2Btn.addEventListener("click", function (event) {
            if (backStep2Btn) {
                document.querySelector("#step-2").style.display = "none";
                document.querySelector("#step-1").style.display = "block";
            }
        });
    }

    

    const step3Form = document.querySelector("#step-3");
    const nextStep3Btn = document.querySelector("#next-step-3");
    const backStep3Btn = document.querySelector("#back-step-3");

    if (step3Form && nextStep3Btn) {
        nextStep3Btn.addEventListener("click", function (event) {
            event.preventDefault();
            clearErrors(step3Form);

            let isValid = true;

            const estbudget = document.querySelector("#estbudget").value;
            const timeframe = document.querySelector("#timeframe").value;

            if (!estbudget || estbudget < 1) {
                const err = document.querySelector("#estbudget-error");
                err.textContent = "Budget is required.";
                err.style.display = "block";
                isValid = false;
            }

            if (!timeframe) {
                const err = document.querySelector("#timeframe-error");
                err.textContent = "Timeframe is required.";
                err.style.display = "block";
                isValid = false;
            }

            if (isValid) {
                if (nextStep3Btn) {
                    document.querySelector("#step-3").style.display = "none";
                    document.querySelector("#step-4").style.display = "block";
                }
            }
        });

        backStep3Btn.addEventListener("click", function (event) {
            if (backStep3Btn) {
                document.querySelector("#step-3").style.display = "none";
                document.querySelector("#step-2").style.display = "block";
            }
        })
    }

    const step4Form = document.querySelector("#step-4");
    const nextStep4Btn = document.querySelector("#submitForm");
    const backStep4Btn = document.querySelector("#back-step-4");

    if (step4Form && nextStep4Btn) {
        nextStep4Btn.addEventListener("submit", function (event) {
            event.preventDefault();
            clearErrors(step4Form);

            let isValid = true;

            const sat = document.querySelector("#hour").value;
            const zona = document.querySelector("#timezone").value;

            let brojac = 0;
            const datumi = document.querySelectorAll(".date");
            datumi.forEach((datum)=>{
                if(datum.classList.contains("selected")){
                    brojac++;
                }
            });

            if (brojac == 0) {
                const err = document.querySelector("#calendar-error");
                err.textContent = "Please select a date.";
                err.style.display = "block";
                isValid = false;
            }

            if (!sat) {
                const err = document.querySelector("#hour-error");
                err.textContent = "Please choose.";
                err.style.display = "block";
                isValid = false;
            }

            if (!zona) {
                const err = document.querySelector("#timezone-error");
                err.textContent = "Please choose.";
                err.style.display = "block";
                isValid = false;
            }
        });

        backStep4Btn.addEventListener("click", function (event) {
            if (backStep4Btn) {
                document.querySelector("#step-4").style.setProperty("display", "none", "important");
                document.querySelector("#step-3").style.display = "block";
            }
        });
    }
});