<?php



ini_set('display_errors', 1);

ini_set('display_startup_errors', 1);

error_reporting(E_ALL);





$conn = mysqli_connect("localhost", "Ketra", "ketratechmyteam", "KetraTech");



if (!$conn) {

    die("Connection failed: " . mysqli_connect_error());

}



if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $firstName = mysqli_real_escape_string($conn, $_POST['firstName'] ?? '');

    $lastName = mysqli_real_escape_string($conn, $_POST['lastName'] ?? '');

    $businessEmail = mysqli_real_escape_string($conn, $_POST['businessEmail'] ?? '');

    $title = mysqli_real_escape_string($conn, $_POST['title'] ?? '');

    $phoneNumber = mysqli_real_escape_string($conn, $_POST['phoneNumber'] ?? '');

    $company = mysqli_real_escape_string($conn, $_POST['company'] ?? '');

    $companySize = mysqli_real_escape_string($conn, $_POST['companySize'] ?? '');

    $country = mysqli_real_escape_string($conn, $_POST['country'] ?? '');

    $additionalMessage = mysqli_real_escape_string($conn, $_POST['additionalMessage'] ?? '');



    if (empty($firstName) || empty($lastName) || empty($businessEmail)) {

        die('Required fields are missing.');

    }



    $sql = "INSERT INTO contact_form 

            (first_name, last_name, business_email, title, phone_number, company, company_size, country, additional_message) 

            VALUES ('$firstName', '$lastName', '$businessEmail', '$title', '$phoneNumber', '$company', '$companySize', '$country', '$additionalMessage')";



    if (mysqli_query($conn, $sql)) {

      echo "<script>alert('Form submitted successfully!');</script>";

    } else {

        echo "Error: " . mysqli_error($conn);

    }

}



mysqli_close($conn);

?>







<!DOCTYPE html>

<html lang="en">

<head>

  <meta charset="UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Ketra Tech</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>

  <link rel="stylesheet" href="styles.css">

</head>

<body>



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

     <video autoplay muted loop>

      <source src="img/gradient.webm" type="video/mp4">

      Your browser does not support the video tag.

    </video>

  </div>





  <nav class="navbar navbar-expand-lg">

    <div class="container">

        <a class="navbar-brand" href="index.html"><img src="img/logo.png" alt="Logo"></a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">

            <span class="navbar-toggler-icon"></span>

        </button>      

        <div class="collapse navbar-collapse justify-content-between" id="navbarNav">

            <ul class="navbar-nav mx-auto">

                <li class="nav-item">

                    <a class="nav-link" href="services.php" data-text="service">Services</a>

                </li>

                <li class="nav-item">

                    <a class="nav-link" href="contact.php" data-text="contact">Contact</a>

                </li>

                <li class="nav-item">

                    <a class="nav-link" href="aboutus.php" data-text="about us">About us</a>

                </li>

                <li class="nav-item">

                    <a class="nav-link" href="careers.php" data-text="careers">Careers</a>

                </li>

            </ul>

            <a href="hirenow.php"><button class="schedule">Hire Now</button></a>

        </div>

    </div>

</nav>



  <div class="container py-5">

    <div class="row justify-content-center" style="padding: 100px 0px;">

        <div class="col-md-12">

            <div class="form-section">

              <div class="row">

                <div class="col-md-4">

                <h2 class="mb-4">Contact Sales Team</h2>

                <p>Get yourself a better, faster and more efficient website.</p>

                </div>

                <div class="col-md-8">



                  <form id="contactForm" class="needs-validation" action="" method="POST" novalidate>

                  <div class="row" style="justify-content: space-between;">

                        <div class="form-border col-md-6 mb-3">

                            <label for="firstName" class="form-label">First Name</label>

                            <input type="text" class="form-control" id="firstName" name="firstName" required>

                            <div class="invalid-feedback">First Name is required</div>

                        </div>

                        <div class="form-border col-md-6 mb-3">

                            <label for="lastName" class="form-label">Last Name</label>

                            <input type="text" class="form-control" id="lastName" name="lastName" required>

                            <div class="invalid-feedback">Last Name is required</div>

                        </div>

                        <div class="form-border col-md-6 mb-3">

                            <label for="businessEmail" class="form-label">Business Email</label>

                            <input type="email" class="form-control" id="businessEmail" name="businessEmail" required>

                            <div class="invalid-feedback">Business Email is required</div>

                        </div>

                        <div class="form-border col-md-6 mb-3">

                            <label for="title" class="form-label">Title</label>

                            <input type="text" class="form-control" id="title" name="title" required>

                            <div class="invalid-feedback">Title is required</div>

                        </div>

                        <div class="form-border col-md-6 mb-3">

                            <label for="phoneNumber" class="form-label">Phone Number</label>

                            <input type="tel" class="form-control" id="phoneNumber" name="phoneNumber" required>

                            <div class="invalid-feedback">Phone Number is required</div>

                        </div>

                        <div class="form-border col-md-6 mb-3">

                            <label for="company" class="form-label">Company</label>

                            <input type="text" class="form-control" id="company" name="company" required>

                            <div class="invalid-feedback">Company is required</div>

                        </div>

                        <div class="form-border col-md-6 mb-3">

                            <label for="companySize" class="form-label">Company Size</label>

                            <select class="form-select" id="companySize" name="companySize" required>

                                <option value="" disabled selected>Select</option>

                                <option>1-200 employees</option>

                                <option>201-2,500 employees</option>

                                <option>2,501-10,000 employees</option>

                                <option>10,001+ employees</option>

                            </select>

                            <div class="invalid-feedback">Please select company size</div>

                        </div>

                        <div class="form-border col-md-6 mb-3">

                            <label for="country" class="form-label">Country</label>

                            <select id="country" name="country" class="form-control">

                                <option value="Afghanistan">Afghanistan</option>

                                <option value="Åland Islands">Åland Islands</option>

                                <option value="Albania">Albania</option>

                                <option value="Algeria">Algeria</option>

                                <option value="American Samoa">American Samoa</option>

                                <option value="Andorra">Andorra</option>

                                <option value="Angola">Angola</option>

                                <option value="Anguilla">Anguilla</option>

                                <option value="Antarctica">Antarctica</option>

                                <option value="Antigua and Barbuda">Antigua and Barbuda</option>

                                <option value="Argentina">Argentina</option>

                                <option value="Armenia">Armenia</option>

                                <option value="Aruba">Aruba</option>

                                <option value="Australia">Australia</option>

                                <option value="Austria">Austria</option>

                                <option value="Azerbaijan">Azerbaijan</option>

                                <option value="Bahamas">Bahamas</option>

                                <option value="Bahrain">Bahrain</option>

                                <option value="Bangladesh">Bangladesh</option>

                                <option value="Barbados">Barbados</option>

                                <option value="Belarus">Belarus</option>

                                <option value="Belgium">Belgium</option>

                                <option value="Belize">Belize</option>

                                <option value="Benin">Benin</option>

                                <option value="Bermuda">Bermuda</option>

                                <option value="Bhutan">Bhutan</option>

                                <option value="Bolivia">Bolivia</option>

                                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>

                                <option value="Botswana">Botswana</option>

                                <option value="Bouvet Island">Bouvet Island</option>

                                <option value="Brazil">Brazil</option>

                                <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>

                                <option value="Brunei Darussalam">Brunei Darussalam</option>

                                <option value="Bulgaria">Bulgaria</option>

                                <option value="Burkina Faso">Burkina Faso</option>

                                <option value="Burundi">Burundi</option>

                                <option value="Cambodia">Cambodia</option>

                                <option value="Cameroon">Cameroon</option>

                                <option value="Canada">Canada</option>

                                <option value="Cape Verde">Cape Verde</option>

                                <option value="Cayman Islands">Cayman Islands</option>

                                <option value="Central African Republic">Central African Republic</option>

                                <option value="Chad">Chad</option>

                                <option value="Chile">Chile</option>

                                <option value="China">China</option>

                                <option value="Christmas Island">Christmas Island</option>

                                <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>

                                <option value="Colombia">Colombia</option>

                                <option value="Comoros">Comoros</option>

                                <option value="Congo">Congo</option>

                                <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>

                                <option value="Cook Islands">Cook Islands</option>

                                <option value="Costa Rica">Costa Rica</option>

                                <option value="Cote D'ivoire">Cote D'ivoire</option>

                                <option value="Croatia">Croatia</option>

                                <option value="Cuba">Cuba</option>

                                <option value="Cyprus">Cyprus</option>

                                <option value="Czech Republic">Czech Republic</option>

                                <option value="Denmark">Denmark</option>

                                <option value="Djibouti">Djibouti</option>

                                <option value="Dominica">Dominica</option>

                                <option value="Dominican Republic">Dominican Republic</option>

                                <option value="Ecuador">Ecuador</option>

                                <option value="Egypt">Egypt</option>

                                <option value="El Salvador">El Salvador</option>

                                <option value="Equatorial Guinea">Equatorial Guinea</option>

                                <option value="Eritrea">Eritrea</option>

                                <option value="Estonia">Estonia</option>

                                <option value="Ethiopia">Ethiopia</option>

                                <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>

                                <option value="Faroe Islands">Faroe Islands</option>

                                <option value="Fiji">Fiji</option>

                                <option value="Finland">Finland</option>

                                <option value="France">France</option>

                                <option value="French Guiana">French Guiana</option>

                                <option value="French Polynesia">French Polynesia</option>

                                <option value="French Southern Territories">French Southern Territories</option>

                                <option value="Gabon">Gabon</option>

                                <option value="Gambia">Gambia</option>

                                <option value="Georgia">Georgia</option>

                                <option value="Germany">Germany</option>

                                <option value="Ghana">Ghana</option>

                                <option value="Gibraltar">Gibraltar</option>

                                <option value="Greece">Greece</option>

                                <option value="Greenland">Greenland</option>

                                <option value="Grenada">Grenada</option>

                                <option value="Guadeloupe">Guadeloupe</option>

                                <option value="Guam">Guam</option>

                                <option value="Guatemala">Guatemala</option>

                                <option value="Guernsey">Guernsey</option>

                                <option value="Guinea">Guinea</option>

                                <option value="Guinea-bissau">Guinea-bissau</option>

                                <option value="Guyana">Guyana</option>

                                <option value="Haiti">Haiti</option>

                                <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>

                                <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>

                                <option value="Honduras">Honduras</option>

                                <option value="Hong Kong">Hong Kong</option>

                                <option value="Hungary">Hungary</option>

                                <option value="Iceland">Iceland</option>

                                <option value="India">India</option>

                                <option value="Indonesia">Indonesia</option>

                                <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>

                                <option value="Iraq">Iraq</option>

                                <option value="Ireland">Ireland</option>

                                <option value="Isle of Man">Isle of Man</option>

                                <option value="Israel">Israel</option>

                                <option value="Italy">Italy</option>

                                <option value="Jamaica">Jamaica</option>

                                <option value="Japan">Japan</option>

                                <option value="Jersey">Jersey</option>

                                <option value="Jordan">Jordan</option>

                                <option value="Kazakhstan">Kazakhstan</option>

                                <option value="Kenya">Kenya</option>

                                <option value="Kiribati">Kiribati</option>

                                <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>

                                <option value="Korea, Republic of">Korea, Republic of</option>

                                <option value="Kuwait">Kuwait</option>

                                <option value="Kyrgyzstan">Kyrgyzstan</option>

                                <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>

                                <option value="Latvia">Latvia</option>

                                <option value="Lebanon">Lebanon</option>

                                <option value="Lesotho">Lesotho</option>

                                <option value="Liberia">Liberia</option>

                                <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>

                                <option value="Liechtenstein">Liechtenstein</option>

                                <option value="Lithuania">Lithuania</option>

                                <option value="Luxembourg">Luxembourg</option>

                                <option value="Macao">Macao</option>

                                <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>

                                <option value="Madagascar">Madagascar</option>

                                <option value="Malawi">Malawi</option>

                                <option value="Malaysia">Malaysia</option>

                                <option value="Maldives">Maldives</option>

                                <option value="Mali">Mali</option>

                                <option value="Malta">Malta</option>

                                <option value="Marshall Islands">Marshall Islands</option>

                                <option value="Martinique">Martinique</option>

                                <option value="Mauritania">Mauritania</option>

                                <option value="Mauritius">Mauritius</option>

                                <option value="Mayotte">Mayotte</option>

                                <option value="Mexico">Mexico</option>

                                <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>

                                <option value="Moldova, Republic of">Moldova, Republic of</option>

                                <option value="Monaco">Monaco</option>

                                <option value="Mongolia">Mongolia</option>

                                <option value="Montenegro">Montenegro</option>

                                <option value="Montserrat">Montserrat</option>

                                <option value="Morocco">Morocco</option>

                                <option value="Mozambique">Mozambique</option>

                                <option value="Myanmar">Myanmar</option>

                                <option value="Namibia">Namibia</option>

                                <option value="Nauru">Nauru</option>

                                <option value="Nepal">Nepal</option>

                                <option value="Netherlands">Netherlands</option>

                                <option value="Netherlands Antilles">Netherlands Antilles</option>

                                <option value="New Caledonia">New Caledonia</option>

                                <option value="New Zealand">New Zealand</option>

                                <option value="Nicaragua">Nicaragua</option>

                                <option value="Niger">Niger</option>

                                <option value="Nigeria">Nigeria</option>

                                <option value="Niue">Niue</option>

                                <option value="Norfolk Island">Norfolk Island</option>

                                <option value="Northern Mariana Islands">Northern Mariana Islands</option>

                                <option value="Norway">Norway</option>

                                <option value="Oman">Oman</option>

                                <option value="Pakistan">Pakistan</option>

                                <option value="Palau">Palau</option>

                                <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>

                                <option value="Panama">Panama</option>

                                <option value="Papua New Guinea">Papua New Guinea</option>

                                <option value="Paraguay">Paraguay</option>

                                <option value="Peru">Peru</option>

                                <option value="Philippines">Philippines</option>

                                <option value="Pitcairn">Pitcairn</option>

                                <option value="Poland">Poland</option>

                                <option value="Portugal">Portugal</option>

                                <option value="Puerto Rico">Puerto Rico</option>

                                <option value="Qatar">Qatar</option>

                                <option value="Reunion">Reunion</option>

                                <option value="Romania">Romania</option>

                                <option value="Russian Federation">Russian Federation</option>

                                <option value="Rwanda">Rwanda</option>

                                <option value="Saint Helena">Saint Helena</option>

                                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>

                                <option value="Saint Lucia">Saint Lucia</option>

                                <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>

                                <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>

                                <option value="Samoa">Samoa</option>

                                <option value="San Marino">San Marino</option>

                                <option value="Sao Tome and Principe">Sao Tome and Principe</option>

                                <option value="Saudi Arabia">Saudi Arabia</option>

                                <option value="Senegal">Senegal</option>

                                <option value="Serbia">Serbia</option>

                                <option value="Seychelles">Seychelles</option>

                                <option value="Sierra Leone">Sierra Leone</option>

                                <option value="Singapore">Singapore</option>

                                <option value="Slovakia">Slovakia</option>

                                <option value="Slovenia">Slovenia</option>

                                <option value="Solomon Islands">Solomon Islands</option>

                                <option value="Somalia">Somalia</option>

                                <option value="South Africa">South Africa</option>

                                <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>

                                <option value="Spain">Spain</option>

                                <option value="Sri Lanka">Sri Lanka</option>

                                <option value="Sudan">Sudan</option>

                                <option value="Suriname">Suriname</option>

                                <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>

                                <option value="Swaziland">Swaziland</option>

                                <option value="Sweden">Sweden</option>

                                <option value="Switzerland">Switzerland</option>

                                <option value="Syrian Arab Republic">Syrian Arab Republic</option>

                                <option value="Taiwan">Taiwan</option>

                                <option value="Tajikistan">Tajikistan</option>

                                <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>

                                <option value="Thailand">Thailand</option>

                                <option value="Timor-leste">Timor-leste</option>

                                <option value="Togo">Togo</option>

                                <option value="Tokelau">Tokelau</option>

                                <option value="Tonga">Tonga</option>

                                <option value="Trinidad and Tobago">Trinidad and Tobago</option>

                                <option value="Tunisia">Tunisia</option>

                                <option value="Turkey">Turkey</option>

                                <option value="Turkmenistan">Turkmenistan</option>

                                <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>

                                <option value="Tuvalu">Tuvalu</option>

                                <option value="Uganda">Uganda</option>

                                <option value="Ukraine">Ukraine</option>

                                <option value="United Arab Emirates">United Arab Emirates</option>

                                <option value="United Kingdom">United Kingdom</option>

                                <option value="United States">United States</option>

                                <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>

                                <option value="Uruguay">Uruguay</option>

                                <option value="Uzbekistan">Uzbekistan</option>

                                <option value="Vanuatu">Vanuatu</option>

                                <option value="Venezuela">Venezuela</option>

                                <option value="Viet Nam">Viet Nam</option>

                                <option value="Virgin Islands, British">Virgin Islands, British</option>

                                <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>

                                <option value="Wallis and Futuna">Wallis and Futuna</option>

                                <option value="Western Sahara">Western Sahara</option>

                                <option value="Yemen">Yemen</option>

                                <option value="Zambia">Zambia</option>

                                <option value="Zimbabwe">Zimbabwe</option>

                            </select>

                            <div class="invalid-feedback">Please select a country</div>

                        </div>

                        <div class="form-border col-12 mb-3" style="max-width: 100%;">

                            <label for="additionalMessage" class="form-label">Additional Message</label>

                            <textarea class="form-control" id="additionalMessage" rows="3" name="additionalMessage"></textarea>

                            <div class="invalid-feedback">Additional message</div>

                        </div>

                    </div>

                    <button class="btn btn-custom w-100" type="submit">Contact</button>

                </form>

                <p class="mt-3 text-light small" style="color: #A89CFD !important;">By submitting this form, you agree to Ketra Tech's Terms of Service and Privacy Policy.</p>

            </div>

        </div>

    </div>

</div>



</div>

</div>



<script>

        (function () {

            'use strict';

            const forms = document.querySelectorAll('.needs-validation');

            Array.from(forms).forEach(form => {

                form.addEventListener('submit', event => {

                    if (!form.checkValidity()) {

                        event.preventDefault();

                        event.stopPropagation();

                    }

                    form.classList.add('was-validated');

                }, false);

            });

        })();

    </script>







<div class="container">

  <div class="row contact-section">

    <h1>Where to find us:</h1>

    <div class="col-lg-6 col-md-12 map-container">

      <iframe

        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2828.11284377154!2d20.647939369082433!3d44.85999749127713!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475a7fad01c25081%3A0xc8cbf100f80ab3c5!2sBravus%20Warehouse%20Pan%C4%8Devo!5e0!3m2!1sen!2srs!4v1736417830184!5m2!1sen!2srs"

        allowfullscreen=""

        loading="lazy"

        referrerpolicy="no-referrer-when-downgrade">

      </iframe>

    </div>



    <div class="col-lg-6 col-md-12 info">

      <h5>Address:</h5>

      <h3>Žarka Zrenjanina N/A</h3>



      <h5>City:</h5>

      <h3>Pančevo</h3>



      <h5>ZIP Code:</h5>

      <h3>26000</h3>



      <h5>Email:</h5>

      <h3>ketratech@info.com</h3>



      <h5>Phone:</h5>

      <h3>+381 13 123456</h3>

    </div>

  </div>

</div>





<section class="quick-links container py-5">

    <div class="row">

        <div class="col-12">

            <h5 class="quick-links-title">Quick Links</h5>

        </div>

    </div>

    <div class="row">

        <div class="col-md-4 animated-link-mob">

            <a href="aboutus.php" class="animated-link">Learn more about us</a>

        </div>

        <div class="col-md-4 animated-link-mob" style="text-align: center;">

            <a href="services.php" class="animated-link">See our plans</a>

        </div>

        <div class="col-md-4 animated-link-mob"style="text-align: right;">

            <a href="careers.php" class="animated-link">Open positions</a>

        </div>

    </div>

</section>

<?php include 'footer.php'; ?>

<script>

  let lastScrollY = window.scrollY;

  const navbar = document.querySelector('.navbar');



  window.addEventListener('scroll', () => {

    if (window.scrollY > lastScrollY) {

      navbar.classList.add('hide');

      navbar.classList.remove('show');

    } else {

      navbar.classList.add('show');

      navbar.classList.remove('hide');

    }

    lastScrollY = window.scrollY;

  });

</script>





<script>

    let aTag = document.querySelectorAll("ul li a");



    aTag.forEach((element) => {

      let randomCar = "!@#$%^&*()_+-<>?";

      let originalText = element.dataset.text;



      if (!originalText) {

        console.warn("Missing data-text attribute on:", element);

        return;

      }



      element.addEventListener("mouseover", () => {

        let iteration = 0;

        let interval = setInterval(() => {

          element.textContent = originalText

            .split("")

            .map((char, index) => {

              if (index < iteration) return char;

              return randomCar.charAt(Math.floor(Math.random() * randomCar.length));

            })

            .join("");



          if (iteration >= originalText.length) {

            clearInterval(interval);

          }

          iteration++;

        }, 100);

      });

    });

  </script>







<script>

  var loader = document.querySelector('.loader');



  window.onload = function() {

    loader.classList.remove('loader--active');

  };



  document.querySelector('.nav-link').addEventListener('click', function () {

    loader.classList.add('loader--active');



    window.setTimeout(function () {

      loader.classList.remove('loader--active');

    }, 5000);

  });

</script>







  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>

