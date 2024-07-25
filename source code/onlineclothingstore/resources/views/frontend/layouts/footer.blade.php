<footer class="bg-dark mt-5">
    <div class="container pb-5 pt-3">
        <div class="row">
            <div class="col-md-4">
                <div class="footer-card">
                    <h3>Get In Touch</h3>
                    <p>Zoha's Online Clothing Brand <br>
                        Farid Town Sahiwal, Pakistan<br>
                        zohatazmen@gmail.com <br>
                        03077936306</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="footer-card">
                    <h3>Important Links</h3>
                    <ul>
                        <li><a href="about-us" title="About">About</a></li>
                        <li><a href="contact-us" title="Contact Us">Contact Us</a></li>
                        <li><a href="reviews" title="Privacy">Review</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-4">
                <div class="footer-card">
                    <h3>My Account</h3>
                    <ul>
                        <li><a href="login" title="Sell">Login</a></li>
                        <li><a href="register" title="Advertise">Register</a></li>
                        <li><a href="cart" title="Contact Us">My Orders</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-12 mt-3">
                    <div class="copy-right text-center" style="white-space: nowrap;">
                        <p class="disc" style="display: inline;">
                            ©<?php echo date('Y'); ?> Zoha's Online Clothing Brand | Developed by
                            <a href="mailto:zohatazmen@example.com" style="display: inline;">Zoha Tazmen</a>
                        </p>
                    </div>

                </div>
            </div>
        </div>
</footer>
<script src="{{ url('frontend/js/jquery-3.6.0.min.js') }}"></script>
<script src="{{ url('frontend/js/bootstrap.bundle.5.1.3.min.js') }}"></script>
<script src="{{ url('frontend/js/instantpages.5.1.0.min.js') }}"></script>
<script src="{{ url('frontend/js/lazyload.17.6.0.min.js') }}"></script>
<script src="{{ url('frontend/js/slick.min.js') }}"></script>
<script src="{{ url('frontend/js/custom.js') }}"></script>
<script>
    window.onscroll = function() {
        myFunction()
    };

    var navbar = document.getElementById("navbar");
    var sticky = navbar.offsetTop;

    function myFunction() {
        if (window.pageYOffset >= sticky) {
            navbar.classList.add("sticky")
        } else {
            navbar.classList.remove("sticky");
        }
    }
</script>
</body>

</html>
