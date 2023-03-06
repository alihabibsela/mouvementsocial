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

    .contact-page .footer-social a {
        background-color: var(--thm-secondary) !important;
    }

    .contact-page .footer-social a:nth-child(2) {
        background-color: var(--thm-special) !important;
    }

    .contact-page .footer-social a:nth-child(3) {
        background-color: #00adef !important;
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
    <div class="curvedBackgroundImage" style="background-image: url('uploads/images/{{$pages->banners[0]->image}}'); opacity:0.8">

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
@include('Contact/central')
<style>
    .thm-swiper__slider1 .swiper-wrapper .slick-track {
        margin: auto;
    }
</style>
<script>
    $(document).ready(function(e) {
        $(".thm-swiper__slider1 .swiper-wrapper").slick({
            items: 3,
            dots: false,
            infinite: false,
            margin: 0,
            centerMode: false,
            slidesToShow: 3,
            slidesToScroll: 3,
            arrows: false,
            autoplay: false,
            autoplaySpeed: 4000,
            @if($_SESSION["lng"] == "ar")
            rtl: true,
            @endif
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]

        });

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
@endsection