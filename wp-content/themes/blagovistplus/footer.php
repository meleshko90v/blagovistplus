<!-- *****Form***** -->
<section>
<div id="transitions" class="medilife-book-an-appoinment-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="appointment-form-content">
                    <div class="row no-gutters">
                        <div class="col-12">
                            <div class="medilife-appointment-form">
                               <div id="footer-widgets">
                                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-4') ) : ?>
                                <?php endif; ?>
                               </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

<!-- ***** contact-us ***** -->

<section class="footer1">
<footer class="page-footer font-small blue pt-4">
    <!-- Footer Links -->
    <div class="container-fluid text-center text-md-left">
        <div class="row">
            <!-- Grid column -->
            <div class="col-md-2 mt-md-0 mb-3">
                <div class="emergency-content">
                    <i class="icon-smartphone"></i>
                </div>
            </div>
            <div class="col-md-4 mt-md-0 mb-3 widget">
            <div id="footer-widgets">
                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-5') ) : ?>
                <?php endif; ?>
            </div>
            </div>
            <!-- Grid column -->
            <div class="col-md-2 mb-md-0 mb-3">
                <div id="footer-widgets">
                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-1') ) : ?>
                <?php endif; ?>
                </div>
            </div>
            <!-- Grid column -->
            <div class="col-md-2 mb-md-0 mb-3 padding-0">
                <div id="footer-widgets">
                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-2') ) : ?>
                <?php endif; ?>
                </div>
            </div>
            <!-- Grid column -->
            <div class="col-md-2 mb-md-0 mb-3">
                <div id="footer-widgets">
                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-3') ) : ?>
                <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</footer>
</section>

<!-- Map -->

<section>
<div class="map">
    <iframe class="size" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2588.7070943018152!2d25.59652791569894!3d49.546680079361025!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x473036ae054b8c5d%3A0x3bbaeddb43ff3aec!2z0LLRg9C70LjRhtGPINCa0L3Rj9C30Y8g0J7RgdGC0YDQvtC30YzQutC-0LPQviwgMzAsINCi0LXRgNC90L7Qv9GW0LvRjCwg0KLQtdGA0L3QvtC_0ZbQu9GM0YHRjNC60LAg0L7QsdC70LDRgdGC0YwsIDQ2MDAw!5e0!3m2!1suk!2sua!4v1578330903245!5m2!1suk!2sua"></iframe>
</div>
</section>

<!-- ***** footer ***** -->
<section class="copyright">
<div class="footer-ride">
    <div class="container">
        <div class="row footer-content">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 footer-left">
                <a class="navbar-footer" href="/home"><img class="logo" src="<?php echo get_template_directory_uri()?>/assets/img/core-img/logo.png" alt="Logo"> Медичний центр <br> Благовіст-Плюс <br> <p class="zero-footer"> Європейський рівень професіоналізму</p></a>
                <a href="" rel="nofollow" class="faq-page-link faq-link">Ліцензія</a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 footer-right">
                <p class="copyright-footer">COPYRIGHT © 2020. BLAGOVIST-PLUS.</p>
            </div>
        </div>
    </div>
</div>
</section>

<?php wp_footer(); ?>

</body>

</html>