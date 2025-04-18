<footer class="footer-section text-white py-5">
    <div class="container">
        <div class="text-center mb-5 hidden">
            <h2 class="mb-3">Elevate your UX today!<br>Schedule a call and make a difference!</h2>
            <a href="/hire"><button class="btn btn-primary">Hire Now</button></a>
        </div>
        <hr class="divider">
        <div class="row">
            <div class="col-md-3 mb-4">
                <h4>LEAVE YOUR MAIL AND STAY UP TO DATE!</h4>
                <form id="subscribeForm">
                    <?php
                        if (!isset($_SESSION['csrf_token'])) {
                            $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
                        }
                    ?>
                    <input type="email" name="email" id="emailInput" class="footer-form-control my-3" placeholder="Enter your email" required>
                    <input type="hidden" name="csrf_token" id="csrfToken" value="<?php echo $_SESSION['csrf_token']; ?>">

                    <div class="form-check mb-3">
                        <input type="checkbox" name="privacy" class="form-check-input" id="privacyPolicy" required>
                        <label class="form-check-label" for="privacyPolicy">
                            By checking the box, I agree to and accept the Privacy Policy and Terms of Service.
                        </label>
                    </div>

                    <button type="submit" class="btn btn-primary">Get updates</button>
                </form>
            </div>
            <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 9999">
                <div id="subscribeToast" class="toast align-items-center text-bg-success border-0" role="alert" aria-live="assertive" aria-atomic="true">
                    <div class="d-flex">
                    <div class="toast-body" id="toastMessage">Uspešno ste se pretplatili!</div>
                    <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <h4>COMPANY</h4>
                <br>
                <ul class="list-unstyled">
                    <li><a href="/aboutus" class="text-muted">About us</a></li>
                    <li><a href="/contact" class="text-muted">Clients</a></li>
                    <li><a href="/services" class="text-muted">Pricing</a></li>
                    <li><a href="/careers" class="text-muted">Careers</a></li>
                </ul>
            </div>
            <div class="col-md-3 mb-4">
                <h4>CASE STUDIES</h4>
                <br>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-muted">Coffee</a></li>
                    <li><a href="#" class="text-muted">Spinner</a></li>
                    <li><a href="#" class="text-muted">Inovatech</a></li>
                    <li><a href="#" class="text-muted">View all</a></li>
                </ul>
            </div>
            <div class="col-md-3 mb-4">
                <h4>CONTACT</h4>
                <br>
                <ul class="list-unstyled">
                    <li class="text-muted">+381 65 123456</li>
                    <li class="text-muted">support@ketratech.com</li>
                    <li class="text-muted">Ulica 3 - 26000 Pančevo, Serbia</li>
                </ul>
            </div>
        </div>
        <hr class="divider">
        <div class="container d-flex flex-column flex-lg-row align-items-center justify-content-between footer-section-links">
            <div class="d-flex align-items-center padding-left1">
                <a href="/"><img src="img/logo.png" alt="Logo" class="footer-logo me-3"></a>
            </div>
            <div class="d-flex align-items-center padding-right1">
                <a href="https://www.facebook.com/" class="mx-2" target="_blank"><img src="img/face.svg" alt="Facebook" style="width: 45px;"></a>
                <a href="https://x.com/" class="mx-2" target="_blank"><img src="img/x.svg" alt="X" style="width: 45px;"></a>
                <a href="https://www.instagram.com/" class="mx-2" target="_blank"><img src="img/insta.svg" alt="Instagram" style="width: 45px;"></a>
                <a href="https://www.tiktok.com/" class="mx-2" target="_blank"><img src="img/tiktok.svg" alt="TikTok" style="width: 45px;"></a>
            </div>
        </div>
        <br><br>
        <hr class="divider">
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-center mt-4">
            <div class="d-flex align-items-center">
                <p class="mb-0" style="color: #A89CFD;"><i class="bi bi-c-circle"></i>Copyright Ketra Tech 2024</p>
            </div>
            <div class="mt-3 mt-md-0">
                <a href="#" class="text-muted me-3">Terms of Service</a>
                <a href="#" class="text-muted me-3">Privacy policy</a>
                <a href="#" class="text-muted">Cookie policy</a>
            </div>
        </div>
    </div>
</footer>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/js/script.js"></script>
</body>

</html>