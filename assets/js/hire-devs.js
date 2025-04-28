document.addEventListener("DOMContentLoaded", function () {
    
    const input = document.querySelector("#phone");
    if (input) {
        window.intlTelInput(input, {
            initialCountry: "us",
            nationalMode: false,
            utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js"
        });
    }

    const images = document.querySelectorAll('.selectable-image');

    images.forEach(image => {
        image.addEventListener('click', function() {
          if (this.classList.contains('selected')) {
            this.classList.remove('selected');
          } else {
            images.forEach(img => img.classList.remove('selected'));
            this.classList.add('selected');
          }
        });
    });
    
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

    if (calendarDates && monthYear && nextMonthBtn && prevMonthBtn) {
        let currentDate = new Date();

        function renderCalendar(date) {
            const year = date.getFullYear();
            const month = date.getMonth();
            const today = new Date();
            const todayMidnight = new Date(today.getFullYear(), today.getMonth(), today.getDate() +1);

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

                if (thisDate < todayMidnight) {
                    dateEl.classList.add("disabled");
                } else {
                    dateEl.classList.add("enabled");
                    dateEl.addEventListener("click", function () {
                        document.querySelectorAll(".date").forEach(d => d.classList.remove("selected"));
                        this.classList.add("selected");
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

            const email = document.querySelector("#email").value.trim();
            const phone = document.querySelector("#phone").value.trim();
            const type1 = document.querySelector("#type1").value;
            const frameworks = document.querySelector("#frameworks").value;

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

            if (!frameworks) {
                const err = document.querySelector("#frameworks-error");
                err.textContent = "Choose at least 1 framework.";
                err.style.display = "block";
                isValid = false;
            }

            if (!type1) {
                const err = document.querySelector("#type1-error");
                err.textContent = "Please choose.";
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

            const name = document.querySelector("#firstname").value.trim();
            const hiretype = document.querySelector("#hiretype").value;

            if (!hiretype) {
                const err = document.querySelector("#hiretype-error");
                err.textContent = "Please choose.";
                err.style.display = "block";
                isValid = false;
            }

            if (!name || name.length < 3) {
                const err = document.querySelector("#name-error");
                err.textContent = "Name is required.";
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

            const budgettype = document.querySelector("#budgettype").value;
            const hireframe = document.querySelector("#hireframe").value.trim();

            if (!budgettype) {
                const err = document.querySelector("#budgettype-error");
                err.textContent = "Please choose.";
                err.style.display = "block";
                isValid = false;
            }

            if (!hireframe) {
                const err = document.querySelector("#hireframe-error");
                err.textContent = "Hireframe is required.";
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