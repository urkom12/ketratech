<footer class="footer-section text-white py-5">
    <div class="container">
        <div class="text-center mb-5 hidden">
            <h2 class="mb-3">Elevate your UX today!<br>Schedule a call and make a difference!</h2>
            <a class="btn btn-primary" href="/hire">Hire Now</a>
        </div>
        <hr class="divider">
        <div class="row">
            <div class="col-md-3 mb-4">
                <p class="footerp">LEAVE YOUR MAIL AND STAY UP TO DATE!</p>
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
                    <div class="toast-body" id="toastMessage">You have successfully subscribed for newsletter!</div>
                    <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <p class="footerp">COMPANY</p>
                <br>
                <ul class="list-unstyled footer-list">
                    <li><a href="/aboutus" class="text-muted">About us</a></li>
                    <li><a href="/contact" class="text-muted">Clients</a></li>
                    <li><a href="/services" class="text-muted">Pricing</a></li>
                    <li><a href="/careers" class="text-muted">Careers</a></li>
                </ul>
            </div>
            <div class="col-md-3 mb-4">
                <p class="footerp">CASE STUDIES</p>
                <br>
                <ul class="list-unstyled footer-list">
                    <li><a href="#" class="text-muted">Coming Soon</a></li>
                </ul>
            </div>
            <div class="col-md-3 mb-4">
                <p class="footerp">CONTACT</p>
                <br>
                <ul class="list-unstyled footer-list">
                    <li class="text-muted">+381 60 3345087</li>
                    <li class="text-muted"><a href="mailto:support@ketratech.com" target="_blank" style="font-weight: 400; text-decoration: none; font-size: 17px; text-transform: unset;">contact@ketratech.com</a></li>
                    <li class="text-muted">Žarka Zrenjanina 38a - 26000 Pančevo, Serbia</li>
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
                <a href="https://www.instagram.com/ketra.tech/" class="mx-2" target="_blank"><img src="img/insta.svg" alt="Instagram" style="width: 45px;"></a>
                <a href="https://www.tiktok.com/@ketratech" class="mx-2" target="_blank"><img src="img/tiktok.svg" alt="TikTok" style="width: 45px;"></a>
            </div>
        </div>
        <br><br>
        <hr class="divider-margin divider">
        <div class="copyright-section d-flex flex-column flex-md-row justify-content-between align-items-center mt-4">
            <div class="copyright-text d-flex align-items-center">
                <p class="mb-0" style="color: white; font-weight: 700;"><i class="bi bi-c-circle"></i>Copyright Ketra Tech® 2025</p>
            </div>
            <div class="policy-links mt-3 mt-md-0">
                <a href="/tos" class="text-muted">Terms of Service</a>
                <a href="/privacy-policy" class="text-muted">Privacy policy</a>
                <a href="/cookies" class="text-muted">Cookie policy</a>
            </div>
        </div>
    </div>
</footer>
</div>
    <script src="/assets/js/bootstrap/bootstrap.min.js"></script>
    <script src="/assets/js/script.js"></script>
</body>

</html>