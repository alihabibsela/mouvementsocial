    <style>
        .footer-widget__contact li a:hover {
        color: #00adef;
    }
    .footer-widget__contact li a > i {
        position: absolute;
        color: #00adef;
        left: -27px;
    }
    .footer-widget__contact li a {
        padding-left: unset;
    }
    @media(max-width:700px){
        .footer-widget__contact li a > i {
            left: 0px;
        }
        .footer-widget__contact li a {
            padding-left: 28px;
            display: block;
        }
        .main-menu__list li.active a::before {
            width: 24%;
        }
    }
    </style>
    <section class="site-footer">
        <div class="main-footer pt-80 pb-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-1 col-md-6 col-sm-12">
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="footer-widget mb-40 footer-widget__about">
                            <div class="footer-social">
                                <a href="https://twitter.com/MouvementSocia2?s=09" target="_blank" aria-label="twitter"><i class="fab fa-twitter"></i></a>
                                <a href="https://www.facebook.com/Mouvementsociallb" target="_blank" aria-label="facebook"><i class="fab fa-facebook-square"></i></a>
                                <a href="https://youtube.com/channel/UCp8LmDjQryWsmReLpskjhmg" target="_blank" aria-label="youtube"><i class="fab fa-youtube"></i></a>
                                <a href="https://www.instagram.com/mouvement.social/" target="_blank" aria-label="instagram"><i class="fab fa-instagram"></i></a>
                            </div>
                            {{-- <a href="index.html" aria-label="logo image">
                                <img src="assets/images/logo-light.png" class="footer-widget__logo" width="101" alt="">
                            </a> --}}
                            <?php
                            $address=$ContactUs->address_en;
                            $details=$Contactpages->details_en;
                            if($_SESSION["lng"]=="ar"){
                                $address=$ContactUs->address_ar;
                                $details=$Contactpages->details_ar;
                            }else if($_SESSION["lng"]=="fr"){
                                $address=$ContactUs->address_fr;
                                $details=$Contactpages->details_fr;
                            }
                        ?>
                            <p><?=$details?></p>
                            <ul class="list-unstyled footer-widget__contact">
                                <li><a href="#"><i class="azino-icon-telephone"></i><?=$ContactUs->phone?></a></li>
                                {{-- <li><a href="#"><i class="azino-icon-email"></i>needhelp@azino.com</a></li> --}}
                                <li><a href="#"><i class="azino-icon-pin"></i><?=strip_tags($address)?></a></li>

                            </ul><!-- /.footer-widget__contact -->
                        </div><!-- /.footer-widget footer-widget__about -->
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                    </div>
                    {{-- <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="footer-widget footer-widget__link mb-40">
                            <h3 class="footer-widget__title">Explore</h3>
                            <ul class="list-unstyled footer-widget__link-list">
                                <li><a href="causes.html">Our Causes</a></li>
                                <li><a href="about.html">About us</a></li>
                                <li><a href="news.html">New Campaign</a></li>
                                <li><a href="events.html">Upcoming Events</a></li>
                                <li><a href="about.html">Site Map</a></li>
                                <li><a href="contact.html">Help</a></li>
                                <li><a href="causes.html">Donate</a></li>
                                <li><a href="contact.html">Contact us</a></li>
                                <li><a href="contact.html">Terms</a></li>
                            </ul>
                        </div>
                    </div> --}}

                    {{-- <div class="col-lg-2 col-md-6 col-sm-12">
                        <div class="footer-widget mb-40 footer-widget__blog">
                            <h3 class="footer-widget__title">Blog</h3>
                            <ul class="list-unstyled footer-widget__blog">
                                <li>
                                    <img src="assets/images/resources/footer-img-1-1.jpg" alt="">
                                    <p>22 May, 2020</p>
                                    <h3><a href="news-details.html">You can help the poor in need</a></h3>
                                </li>
                                <li>
                                    <img src="assets/images/resources/footer-img-1-2.jpg" alt="">
                                    <p>22 May, 2020</p>
                                    <h3><a href="news-details.html">Rise fund for Healthy Food</a></h3>
                                </li>
                            </ul>
                        </div>
                    </div> --}}
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <p style="font-size: 16px;  color: #7e7e7e;">© <?=$_SESSION["lng"]=="ar"?"حقوق النشر":($_SESSION["lng"]=="fr"?"droits d'auteur":"Copyright")?> {{date("Y")}} <?=$_SESSION["lng"]=="ar"?"كل الحقوق محفوظة":($_SESSION["lng"]=="fr"?"Tous les droits sont réservés":".All rights reserved")?></p>
                        <div class="footer-widget mb-40 footer-widget__newsletter" hidden>
                            <div class="fixed-bg patern-bg thm-bg back-blend-multiply" style="background-image: url(assets/images/pattern-bg1.jpg);"></div>
                            <p style="color: #fff;"><?=$_SESSION["lng"]=="ar"?"اشترك في قائمتنا البريدية للحصول على التحديثات إلى بريدك الإلكتروني":($_SESSION["lng"]=="fr"?"Abonnez-vous à notre liste de diffusion pour recevoir les mises à jour de votre courrier électronique.":"Subscribe to our mailing list to get the <span style='font-weight: bold;'>updates to your email.</span>")?></p>
                            <form style="display: flex;" class="footer-widget__newsletter-form mc-form" action="{{url('/newsletter/submit')}}">
                                <label for="mc-email" class="sr-only"><?=$_SESSION["lng"]=="ar"?"عنوان بريد الكتروني":($_SESSION["lng"]=="fr"?"Adresse Email":"Email Address")?></label>
                                <input type="email" name="email" id="mc-email" class="dynamic-radius" placeholder="<?=$_SESSION["lng"]=="ar"?"عنوان بريد الكتروني":($_SESSION["lng"]=="fr"?"Adresse Email":"Email Address")?>">
                                <div class="footer-widget__newsletter-btn-wrap d-flex justify-content-end">
                                    <button type="submit" class="thm-btn dynamic-radius"><?=$_SESSION["lng"]=="ar"?"إرسال":($_SESSION["lng"]=="fr"?"Nous faire parvenir":"Submit")?></button>
                                </div>
                            </form>
                            <div class="mc-form__response"></div>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-10">
                            <div class="logo-box" style="opacity:0.5">
                                <a href="{{url("/")}}" aria-label="logo image"><img src="assets/images/logo.png" class="mainLogo"></a>                               
                            </div> 
                        </div>
                    </div>
                    <div class="col-lg-1 col-md-6 col-sm-12">
                    </div>
                    {{-- <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="footer-widget mb-40 footer-widget__newsletter">
                            <h3 class="footer-widget__title">Newletter</h3>
                            <p>Signup now to get daily latest news
                                & updates from us</p>
                            <form data-url="https://xyz.us18.list-manage.com/subscribe/post?u=20e91746ef818cd941998c598&id=cc0ee8140e" class="footer-widget__newsletter-form mc-form">
                                <label for="mc-email" class="sr-only">Email Address</label>
                                <input type="email" name="EMAIL" id="mc-email" class="dynamic-radius" placeholder="Email address">
                                <div class="footer-widget__newsletter-btn-wrap d-flex justify-content-end">
                                    <button type="submit" class="thm-btn dynamic-radius">Subscribe Now</button>
                                </div>
                            </form>
                            <div class="mc-form__response"></div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <span class="scroll-to-top scroll-to-target" data-target="html"><i class="far fa-angle-up"></i></span>
                <p>Powered By <a href="https://www.multiframes.com/" target="_blank" style="color: #ffffff;">Multiframes</a></p>
                {{-- <div class="footer-social">
                    <a href="#" aria-label="twitter"><i class="fab fa-twitter"></i></a>
                    <a href="#" aria-label="facebook"><i class="fab fa-facebook-square"></i></a>
                    <a href="#" aria-label="pinterest"><i class="fab fa-pinterest-p"></i></a>
                    <a href="#" aria-label="instagram"><i class="fab fa-instagram"></i></a>
                </div> --}}
            </div>
        </div>
    </section>

</div><!-- /.page-wrapper -->

<div class="mobile-nav__wrapper">
    <div class="mobile-nav__overlay mobile-nav__toggler"></div>
    <!-- /.mobile-nav__overlay -->
    <div class="mobile-nav__content">
        <span class="mobile-nav__close mobile-nav__toggler"><i class="far fa-times"></i></span>

        <div class="logo-box">
            <a href="{{url('/')}}" aria-label="logo image"><img src="assets/images/logo3.png" width="101" alt="" /></a>
        </div>
        <!-- /.logo-box -->
        <div class="mobile-nav__container"></div>
        <!-- /.mobile-nav__container -->

        <ul class="mobile-nav__contact list-unstyled">
            <li>
                <i class="azino-icon-email"></i>
                <a href="mailto:needhelp@azino.com">{{$ContactUs->email}}</a>
            </li>
            <li>
                <i class="azino-icon-telephone"></i>
                <a href="tel:{{$ContactUs->phone}}">{{$ContactUs->phone}}</a>
            </li>
        </ul><!-- /.mobile-nav__contact -->
        <div class="mobile-nav__top">
            <div class="mobile-nav__language">
                <img src="assets/flags/{{$_SESSION["lng"]}}.png" alt="" style="width: 27px;">
                <label class="sr-only" for="language-select">select language</label><!-- /#language-select.sr-only -->
                <select class="selectpicker" id="language-select">
                    <option value="en" {{$_SESSION["lng"]=="en"?"selected":""}}>English</option>
                    <option value="fr" {{$_SESSION["lng"]=="fr"?"selected":""}}>French</option>
                    <option value="ar" {{$_SESSION["lng"]=="ar"?"selected":""}}>Arabic</option>
                </select>
                {{-- <select class="selectpicker" id="language-select">
                    <option value="english">English</option>
                    <option value="arabic">Arabic</option>
                </select> --}}
            </div><!-- /.mobile-nav__language -->
            <div class="mobile-nav__social">
                <a href="https://twitter.com/MouvementSocia2?s=09" target="_blank" aria-label="twitter"><i class="fab fa-twitter"></i></a>
                <a href="https://www.facebook.com/Mouvementsociallb" target="_blank" aria-label="facebook"><i class="fab fa-facebook-square"></i></a>
                <a href="https://youtube.com/channel/UCp8LmDjQryWsmReLpskjhmg" target="_blank" aria-label="youtube"><i class="fab fa-youtube"></i></a>
                <a href="https://www.instagram.com/mouvement.social/" target="_blank" aria-label="instagram"><i class="fab fa-instagram"></i></a>

                {{-- <a href="#" aria-label="twitter"><i class="fab fa-twitter"></i></a>
                <a href="#" aria-label="facebook"><i class="fab fa-facebook-square"></i></a>
                <a href="#" aria-label="pinterest"><i class="fab fa-pinterest-p"></i></a>
                <a href="#" aria-label="instagram"><i class="fab fa-instagram"></i></a> --}}
            </div><!-- /.mobile-nav__social -->
        </div><!-- /.mobile-nav__top -->



    </div>
    <!-- /.mobile-nav__content -->
</div>
<!-- /.mobile-nav__wrapper -->

<div class="search-popup">
    <div class="search-popup__overlay search-toggler"></div>
    <!-- /.search-popup__overlay -->
    <div class="search-popup__content">
        <form action="#">
            <label for="search" class="sr-only">search here</label><!-- /.sr-only -->
            <input type="text" id="search" placeholder="Search Here..." />
            <button type="submit" aria-label="search submit" class="thm-btn">
                <i class="fa fa-search"></i>
            </button>
        </form>
    </div>
    <!-- /.search-popup__content -->
</div>
<!-- /.search-popup -->
<style>
    .footer-widget__newsletter-form{
        position: relative;
    }
    #mc-email-error{
        position: absolute;
        bottom: -33px;
        color: red;
    }
</style>

    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/swiper.min.js"></script>
    <script src="assets/js/jquery.ajaxchimp.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/jquery.validate.min.js"></script>
    <script src="assets/js/bootstrap-select.min.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/odometer.min.js"></script>
    <script src="assets/js/jquery.appear.min.js"></script>

    <!-- template js -->
    <script src="assets/js/theme.js"></script>

    <script>
        $(document).ready(function(e){
            $("#language-select").on("change",function(e){
            $.ajax({
                    type: "POST",
                    url: "{{url('/')}}/lng",
                    data: {lng:$(this).val()},
                    dataType: 'json',
                    success: function (data) {
                       window.location.reload();
                    }
                });
        });
            if ($(".footer-widget__newsletter-form").length) {
                $(".footer-widget__newsletter-form").validate({
                // initialize the plugin
                rules: {

                    email: {
                    required: true,
                    email: true
                    },
                },
                submitHandler: function (form) {
                    $.post($(form).attr("action"), $(form).serialize(), function (
                    response
                    ) {
                        response=JSON.parse(response);
                        if(response.status){
                            form.reset();
                            Swal.fire({
                                title: 'Success!',
                                text: 'Thank you',
                                icon: 'success',
                                confirmButtonText: 'ok'
                                });
                        }else{
                            Swal.fire({
                                title: 'Error!',
                                text: 'Please try again later',
                                icon: 'error',
                                confirmButtonText: 'ok'
                                });
                        }
                    });
                    return false;
                }
                });
            }
        });
    </script>

</body>
