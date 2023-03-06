@extends('layout.layout')
@section('content')
<style>
    .image-section {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        max-width: 100%;
        position: relative;
        width: 100%;
    }

    .justify-content-center {
        -ms-flex-pack: center !important;
        justify-content: center !important;
    }

    .text-center {
        text-align: center !important;
    }

    @media(max-width:800px) {
        h1.mobile {

            font-size: 47px !important;
            color: #ccc !important;
        }
    }

    .image-section .no-padding,
    .image-section .block.no-padding {
        padding: 0;
    }

    .image-section .block {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        max-width: 100%;
        position: relative;
        width: 100%;
    }

    .image-section .pg-tp-bg {
        min-height: 41.25rem;
        background-size: cover;
        background-position: center;
        width: 100%;
    }

    .comment-one .slick-list {
        padding: 0px !important;
    }

    .slider-item {
        padding: 10px;
    }

    .slick-dots li button:before {
        font-size: 13px;
        color: #00adef;
    }

    .slick-dots li.slick-active button:before {
        opacity: .75;
        color: #00adef;
    }

    .img-fluid {
        max-width: 100%;
        height: 300px;
    }

    .statment-by-year {
        background: #cccccc2b;
        border-radius: 10px;
        padding: 24px;
        box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;
        height: 300px;

    }

    .statment-by-year h3 {
        font-size: 16px;
    }

    .statment-by-year ul {
        padding: 11px;
        overflow: auto;
        height: 200px;
    }

    .statment-by-year ul li {
        list-style: none;
        padding-bottom: 8px;
        font-size: 16px;
    }

    .statment-by-year ul li .arrow {
        float: right;
        font-family: Rubik;
    }

    .statment-by-year ul li a {
        color: var(--thm-color);
    }

    .scroll::-webkit-scrollbar {
        width: 3px;
    }

    .scroll::-webkit-scrollbar-track {
        -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
        border-radius: 10px;
    }

    .scroll::-webkit-scrollbar-thumb {
        border-radius: 10px;
        -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.5);
    }

    .blog-details__title {
        margin-top: 45px !important;
        margin-bottom: 6px !important;
    }

    .slick-slide img {
        border-radius: 10px;
    }

    .video-card-two {
        padding-top: 27px;
        position: relative;
        z-index: 11;
    }

    .about-counter .footer-social a {
        background-color: var(--thm-secondary) !important;
    }

    .about-counter .footer-social a:nth-child(2) {
        background-color: var(--thm-special) !important;
    }

    .about-counter .footer-social a:nth-child(3) {
        background-color: #00adef !important;
    }

    .form-one .thm-btn {
        padding: 19.5px 80.5px;
        border-radius: 59px !important;
        background-color: #00adef;
        color: #fff;
    }

    .form-one .thm-btn:hover {
        border: 1px solid #00adef;
        ;
        background-color: #fff;
        color: #00adef;
    }

    .form-one input[type=date] {
        display: block;
        width: 100%;
        height: 73px;
        border-radius: 36.5px;
        background-color: #f1f1f1;
        color: #7e7e7e;
        font-size: 16px;
        font-weight: 500;
        border: none;
        outline: none;
        padding-left: 30px;
        padding-right: 30px;
    }

    .about-counter__image-content2 {
        position: absolute;
        top: 0px;
        left: 0px;
        right: 0px;
        bottom: 0px;
        width: 100%;
        max-width: 100%;
        min-width: 100%;
        background-color: #c3d8db6b;
        border-top-left-radius: 15px;
        border-bottom-right-radius: 15px;


    }

    .about-counter__image-content2 img {
        position: absolute;
        left: 0px;
        right: 0px;
        bottom: 0px;
        top: 0px;
        margin: auto;
    }

    .video-card-two__box-btn {
        width: unset !important;
        height: unset !important;
        background-color: unset !important;
        color: #fff !important;
        display: -webkit-box !important;
        display: -ms-flexbox !important;
        display: flex !important;
        -webkit-box-align: center !important;
        -ms-flex-align: center !important;
        align-items: center !important;
        font-size: 80px !important;
        -webkit-box-pack: center !important;
        -ms-flex-pack: center !important;
        justify-content: center !important;
        -webkit-transition: unset !important;
        transition: unset !important;
        border-radius: 50% !important;
        position: absolute !important;
        top: 0px !important;
        right: 0 !important;
        left: 0px !important;
        bottom: 0px !important;
        -webkit-transform: unset !important;
        transform: unset !important;
    }

    .p0 {
        padding: 0px !important;
    }

    @media(min-width:800px) {
        .about-counter .container {
            position: relative;
            z-index: 11;
            width: 92%;
            max-width: 100%;
            @if ($_SESSION["lng"]=="ar") padding-left: 0px;
            margin: auto auto auto 0px;
            @else padding-right: 0px;
            margin: auto 0px auto auto;
            @endif
        }

        .about-counter__image>img {
            border-radius: unset;
            @if ($_SESSION["lng"]=="ar") border-top-right-radius: 15px;
            border-bottom-right-radius: 15px;
            @else border-top-left-radius: 15px;
            border-bottom-left-radius: 15px;
            @endif
        }
    }
</style>
{{-- <section class="image-section">
    <div class="block no-padding">
        <img src="uploads/images/{{$pages->banners[0]->image}}" style="width:100%;">
</div>
</section> --}}
<?php
$title = $pages->banners[0]->title_en;
if ($_SESSION["lng"] == "ar") {
    $title = $pages->banners[0]->title_ar;
} else if ($_SESSION["lng"] == "fr") {
    $title = $pages->banners[0]->title_fr;
}

?>
<div class="curved-div" style="width:100%;">
    <div class="curvedBackgroundImage" style="background: url('uploads/images/{{$pages->banners[0]->image}}');">
        <div style="padding-top: 177px;" class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-12 text-center">
                    {{-- <p>Help the poor in need</p> --}}
                    <h1 class="mobile" style=" font-size: 47px; color:white !important"><?= $title ?></h1>


                </div>
            </div>
        </div>
        <!-- <img class="curvedImage" src="uploads/images/{{$pages->banners[0]->image}}"> -->
        <!-- <div class="curvedText">
            <h1><?= $title ?></h1>

            <svg viewBox="0 0 1440 319">
                <path fill="#fff" fill-opacity="1" d="M0,32L48,80C96,128,192,224,288,224C384,224,480,128,576,90.7C672,53,768,75,864,96C960,117,1056,139,1152,149.3C1248,160,1344,160,1392,160L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
            </svg>
        </div> -->
    </div>
</div>
<section class="about-counter pt-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="block-title">
                    <?php
                    $title = $pages->name_en;
                    $details = $pages->details_en;
                    if ($_SESSION["lng"] == "ar") {
                        $title = $pages->name_ar;
                        $details = $pages->details_ar;
                    } else if ($_SESSION["lng"] == "fr") {
                        $title = $pages->name_fr;
                        $details = $pages->details_fr;
                    }

                    ?>

                    {{-- <p><img src="assets/images/shapes/heart-2-1.png" width="15" alt="">Help People Now</p> --}}
                    <h3><?= $title ?></h3>
                </div><!-- /.block-title -->
                <p class="about-counter__text"><?= $details ?> </p>
                <div class="footer-social black-hover" hidden style="padding-top: 7px;">
                    <a href="#" aria-label="twitter"><i class="fab fa-twitter"></i></a>
                    <a href="#" aria-label="facebook"><i class="fab fa-facebook-square"></i></a>
                    <a href="#" aria-label="instagram"><i class="fab fa-instagram"></i></a>
                </div>
                {{-- <ul class="list-unstyled ul-list-one">
                    <li>Nsectetur cing elit.</li>
                    <li>Suspe ndisse suscipit sagittis leo.</li>
                    <li>Entum estibulum dignissim posuere.</li>
                </ul>
                <div class="about-counter__count">
                    <h3 class="odometer" data-count="8860">00</h3>
                    <p>Donation campaigns <br> are running</p>
                </div> --}}
            </div>
            <div class="col-lg-7">
                <div class="about-counter__image clearfix wow fadeInRight" data-wow-duration="1500ms" style="width: fit-content;">

                    <img src="uploads/images/{{$pages->image}}" alt="" class="float-left imageMain" style="width:100%">
                    <div class="about-counter__image-content2">
                        <a href="{{$pages->video_url}}" class="video-card-two__box-btn video-popup"><i class="fa fa-play"></i></a>

                    </div>
                </div>
                {{-- <div class="about-counter__image clearfix wow fadeInRight" data-wow-duration="1500ms" style="width: fit-content;">

                    <img src="uploads/images/{{$pages->image}}" alt="" class="float-left imageMain">
                <div class="about-counter__image-content2">
                    <a href="{{$pages->video_url}}" class="video-card-two__box-btn video-popup"><i class="fa fa-play"></i></a>

                </div>
            </div> --}}
        </div>
    </div>
    </div>
</section>

<section class="become-volunteer pt-120 pb-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 mx-auto">
                <form action="{{url('/Volunteer/Submit')}}" class="contact-form-validated become-volunteer__form form-one mb-40">
                    <div class="form-group">
                        <div class="form-control">
                            <label for="name" class="sr-only">name</label>
                            <input type="text" name="name" id="name" placeholder="<?= $_SESSION["lng"] == "ar" ? "اسمك" : ($_SESSION["lng"] == "fr" ? "votre nom" : "Your Name") ?>">
                        </div><!-- /.form-control -->
                        <div class="form-control">
                            <label for="email" class="sr-only">email</label>
                            <input type="text" name="email" id="email" placeholder="<?= $_SESSION["lng"] == "ar" ? "عنوان بريد الكتروني" : ($_SESSION["lng"] == "fr" ? "Adresse Email" : "Email Address") ?>">
                        </div><!-- /.form-control -->
                        <div class="form-control">
                            <label for="phone" class="sr-only">phone</label>
                            <input type="text" name="phone" id="phone" placeholder="<?= $_SESSION["lng"] == "ar" ? "رقم التليفون" : ($_SESSION["lng"] == "fr" ? "Numéro de téléphone" : "Phone Number") ?>">
                        </div><!-- /.form-control -->
                        <div class="form-control">
                            <label for="date-of-birth" class="sr-only">date of birth</label>
                            <input type="text" name="DOB" id="date-of-birth" placeholder="<?= $_SESSION["lng"] == "ar" ? "تاريخ الولادة" : ($_SESSION["lng"] == "fr" ? "Date de naissance" : "Date of Birth") ?>" onfocus="(this.type='date')">
                        </div><!-- /.form-control -->
                        <div class="form-control">
                            <label for="address" class="sr-only">address</label>
                            <input type="text" name="address" id="address" placeholder="<?= $_SESSION["lng"] == "ar" ? "العنوان" : ($_SESSION["lng"] == "fr" ? "Adresse" : "Address") ?>">
                        </div><!-- /.form-control -->
                        <div class="form-control">
                            <label for="occupation" class="sr-only">occupation</label>
                            <input type="text" name="occupation" id="occupation" placeholder="<?= $_SESSION["lng"] == "ar" ? "الوظيفة" : ($_SESSION["lng"] == "fr" ? "Occupation" : "Occupation") ?>">
                        </div><!-- /.form-control -->
                        <div class="form-control form-control-full">
                            <label for="message" class="sr-only">message</label>
                            <textarea name="message" id="message" placeholder="<?= $_SESSION["lng"] == "ar" ? "اكتب رسالة" : ($_SESSION["lng"] == "fr" ? "Écrire un message" : "Write a Message") ?>"></textarea>
                        </div><!-- /.form-control -->
                        <div class="form-control form-control-full" style="text-align: center;">
                            <button type="submit" class="thm-btn dynamic-radius"><?= $_SESSION["lng"] == "ar" ? "سجل الان" : ($_SESSION["lng"] == "fr" ? "S'inscrire maintenant" : "Register Now") ?></button>
                        </div>
                        {{-- <div class="form-control form-control-full">
                            <div class="w-100" style="text-align: center; padding-top: 51px;">
                                <a class="custom-button" href="{{url("/")}}">Register Now</a>
                    </div>

            </div> --}}
        </div><!-- /.form-group -->
        </form><!-- /.become-volunteer__form -->
        <div class="result"></div><!-- /.result -->
    </div><!-- /.col-lg-7 -->
    </div><!-- /.row -->
    </div><!-- /.container -->
</section>
<script>
    $(document).ready(function(e) {

        if ($(".contact-form-validated").length) {
            $(".contact-form-validated").validate({
                // initialize the plugin
                rules: {
                    name: {
                        required: true
                    },
                    email_address: {
                        required: true,
                        email: true
                    },
                    message: {
                        required: true
                    },
                    subject: {
                        required: true
                    }
                },
                submitHandler: function(form) {
                    // sending value with ajax request
                    $.post($(form).attr("action"), $(form).serialize(), function(
                        response
                    ) {
                        response = JSON.parse(response);
                        if (response.status) {
                            form.reset();
                            Swal.fire({
                                title: 'Success!',
                                text: 'Thank you for contact us',
                                icon: 'success',
                                confirmButtonText: 'ok'
                            });
                        } else {
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
<style>
    .about-counter {
        position: initial;
    }
</style>
@endsection