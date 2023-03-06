@extends('layout.layout')
@section('content')
<style>
    .justify-content-center {
    -ms-flex-pack: center!important;
    justify-content: center!important;
}
.text-center {
    text-align: center!important;
}
    .image-section{
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    max-width: 100%;
    position: relative;
    width: 100%;
}
.image-section .no-padding,.image-section .block.no-padding {
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

.comment-one .slick-list{
    padding: 0px !important;
}
.slider-item{
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
    border:1px solid #00adef;;
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
@media(max-width:800px) {
    h1.mobile{
    
    font-size: 47px !important;
    color: #ccc !important;
}
}
</style>
{{-- <section class="image-section">
    <div class="block no-padding">
       <img src="uploads/images/{{$pages->banners[0]->image}}" style="width:100%;">
    </div>
</section> --}}
<?php
    $title=$pages->banners[0]->title_en;
    if($_SESSION["lng"]=="ar"){
        $title=$pages->banners[0]->title_ar;
    }else if($_SESSION["lng"]=="fr"){
        $title=$pages->banners[0]->title_fr;
    }

?>
<div class="curved-div" style="width:100%;">
   <div class="curvedBackgroundImage" style="background-image: url('uploads/images/{{$pages->banners[0]->image}}'); opacity:0.8">
   <div style="padding-top: 177px;" class="container">
                        <div class="row justify-content-center">
                            <div class="col-xl-7 col-lg-12 text-center">
                                {{-- <p>Help the poor in need</p> --}}
                                <h1 class="mobile" style=" font-size: 47px; color:white !important"><?=$title?></h1>
                                

                            </div>
                        </div>
                    </div>
      <!-- <h1 class="mobile" style="padding-top:12%; padding-left: 41%; font-size: 47px; color:#ccc !important"><?=$title?></h1> -->
        <!-- <img class="curvedImage" src="uploads/images/{{$pages->banners[0]->image}}"> -->
        <!-- <div class="curvedText" hidden>
            <h1><?=$title?></h1>

            <svg viewBox="0 0 1440 319">
                <path fill="#fff" fill-opacity="1" d="M0,32L48,80C96,128,192,224,288,224C384,224,480,128,576,90.7C672,53,768,75,864,96C960,117,1056,139,1152,149.3C1248,160,1344,160,1392,160L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
            </svg>
        </div> -->
    </div>
</div>

<section class="contact-page pt-120 pb-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="contact-page__content mb-40">
                    <div class="block-title">
                        <h3><?=$_SESSION["lng"]=="ar"?"لا تتردد في مراسلتنا":($_SESSION["lng"]=="fr"?"N'hésitez pas à nous écrire<br>un message.":"Feel free to write us <br> a message.")?></h3>
                    </div><!-- /.block-title -->
                    <?php

                    $details=$pages->details_en;
                    if($_SESSION["lng"]=="ar"){
                        $details=$pages->details_ar;
                    }else if($_SESSION["lng"]=="fr"){
                        $details=$pages->details_fr;
                    }
                ?>
                    <p class="block-text mb-30 pr-10"><?=$details?> </p>
                    <div class="footer-social black-hover">
                        <a href="#" aria-label="twitter"><i class="fab fa-twitter"></i></a>
                        <a href="#" aria-label="facebook"><i class="fab fa-facebook-square"></i></a>
                        <a href="#" aria-label="instagram"><i class="fab fa-instagram"></i></a>
                    </div><!-- /.footer-social -->
                </div><!-- /.contact-page__content -->
            </div><!-- /.col-lg-5 -->
            <div class="col-lg-7">
                <form action="{{url('/ContactUs/Submit')}}" class="contact-form-validated contact-page__form form-one mb-40">
                    <div class="form-group">
                        <div class="form-control">
                            <label for="name" class="sr-only"><?=$_SESSION["lng"]=="ar"?"اسم":($_SESSION["lng"]=="fr"?"Nom":"Name")?></label>
                            <input type="text" name="name" id="name" placeholder="<?=$_SESSION["lng"]=="ar"?"اسمك":($_SESSION["lng"]=="fr"?"votre nom":"Your Name")?>">
                        </div><!-- /.form-control -->
                        <div class="form-control">
                            <label for="email" class="sr-only">email</label>
                            <input type="text" name="email_address" id="email_address" placeholder="<?=$_SESSION["lng"]=="ar"?"عنوان بريد الكتروني":($_SESSION["lng"]=="fr"?"Adresse Email":"Email Address")?>">
                        </div><!-- /.form-control -->
                        <div class="form-control">
                            <label for="phone" class="sr-only">phone</label>
                            <input type="text" name="phone" id="phone" placeholder="<?=$_SESSION["lng"]=="ar"?"رقم التليفون":($_SESSION["lng"]=="fr"?"Numéro de téléphone":"Phone Number")?>">
                        </div><!-- /.form-control -->
                        <div class="form-control">
                            <label for="subject" class="sr-only">subject</label>
                            <input type="text" name="subject" id="subject" placeholder="<?=$_SESSION["lng"]=="ar"?"الموضوع":($_SESSION["lng"]=="fr"?"Sujet":"Subject")?>">
                        </div><!-- /.form-control -->
                        <div class="form-control form-control-full">
                            <label for="message" class="sr-only">message</label>
                            <textarea name="message" placeholder="<?=$_SESSION["lng"]=="ar"?"اكتب رسالة":($_SESSION["lng"]=="fr"?"Écrire un message":"Write a Message")?>" id="message"></textarea>
                        </div><!-- /.form-control -->
                        <div class="form-control form-control-full" style="text-align: center;">
                            <button type="submit" class="thm-btn dynamic-radius"><?=$_SESSION["lng"]=="ar"?"تقديم رسالة":($_SESSION["lng"]=="fr"?"Soumettre un message":"Submit Message")?></button>
                        </div>
                    </div><!-- /.form-group -->
                </form><!-- /.contact-page__form -->
                {{-- <div class="result"></div> --}}
                <!-- /.result -->
            </div><!-- /.col-lg-7 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.contact-page -->

<div class="contact-card-carousel ">
    <div class="container">
        {{-- <div class="thm-swiper__slider1 swiper-container" data-swiper-options='{"spaceBetween": 30, "slidesPerView": 3, "breakpoints": {
        "0": {
            "spaceBetween": 0,
            "slidesPerView": 1
        },
        "480": {
            "spaceBetween": 0,
            "slidesPerView": 1
        },
        "767": {
            "spaceBetween": 30,
            "slidesPerView": 2
        },
        "1199": {
            "spaceBetween": 30,
            "slidesPerView": 3
        }
    }}'> --}}
    <div class="thm-swiper__slider1">
            <div class="swiper-wrapper" style="justify-content: center;">
                {{-- <div class="swiper-slide">
                    <div class="contact-card d-flex flex-column text-center justify-content-center align-items-center background-secondary" style="background-image: url(assets/images/shapes/contact-card-bg-1-1.png);">
                        <i aria-label="contact icon" class="azino-icon-family"></i>
                        <h3>About</h3>
                        <p>Lorem ipsum is simply free text <br> dolor sit amet, consectetur <br> adipiscing ullam blandit</p>
                    </div>
                </div> --}}

                 <?php

                 $details=$ContactUs->address_en;
                 if($_SESSION["lng"]=="ar"){
                     $details=$ContactUs->address_ar;
                 }else if($_SESSION["lng"]=="fr"){
                     $details=$ContactUs->address_fr;
                 }
             ?>
                <div class="swiper-slide">
                    <div class="contact-card d-flex flex-column text-center justify-content-center align-items-center background-primary" style="background-image: url(assets/images/shapes/contact-card-bg-1-1.png);padding: 4px;">
                        <i aria-label="contact icon" class="azino-icon-address"></i>
                        <h3><?=$_SESSION["lng"]=="ar"?"العنوان":($_SESSION["lng"]=="fr"?"Adresse":"Address")?></h3>
                        <p><?=$details?></p>
                    </div><!-- /.contact-card -->
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <div class="contact-card d-flex flex-column text-center justify-content-center align-items-center background-special" style="background-image: url(assets/images/shapes/contact-card-bg-1-1.png);padding: 4px;">
                        <i aria-label="contact icon" class="azino-icon-contact"></i>
                        <h3><?=$_SESSION["lng"]=="ar"?"اتصال":($_SESSION["lng"]=="fr"?"Contacter":"Contact")?></h3>
                        <p><a href="mailto:{{$ContactUs->email}}">{{$ContactUs->email}}</a> <br> <a href="tel:{{$ContactUs->phone}}">{{$ContactUs->phone}}</a>
                            <br> <a>{{$ContactUs->fax}}</a></p>
                    </div><!-- /.contact-card -->
                </div><!-- /.swiper-slide -->
            </div><!-- /.swiper-wrapper -->
        </div><!-- /.thm-swiper__slider -->
    </div><!-- /.container -->
</div>
{{-- @include('Contact/central') --}}
{{-- <section style=" padding-bottom: 0px;">
    <div class="block" style="padding-bottom: 0px;padding-top: 23px;">
        <div class="container">
            <div class="sec-ttl text-center">
                <div class="sec-ttl-inr">

                </div>
            </div>
            <div class="sec-ttl text-center">
                <div class="sec-ttl-inr">
                        <img src="assets/images/map.PNG" style="width:100%">

                </div>
            </div>
        </div>
    </div>
</section> --}}
<style>
   .thm-swiper__slider1 .swiper-wrapper .slick-track{
        margin: auto;
    }
</style>
<script>
    $(document).ready(function(e){
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
        @if($_SESSION["lng"]=="ar")
            rtl:true,
        @endif
        responsive: [
            {
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
            submitHandler: function (form) {
                // sending value with ajax request
                $.post($(form).attr("action"), $(form).serialize(), function (
                response
                ) {
                    response=JSON.parse(response);
                    if(response.status){
                        form.reset();
                        Swal.fire({
                            title: 'Success!',
                            text: 'Thank you for contact us',
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

    // $(".contact-form-validated").submit(function(e){
    //     var form = $(this);
    //     $.ajax({
    //             type: "POST",
    //             url: $(this).attr("action"),
    //             data: form.serialize(),
    //             dataType: 'json',
    //             async: false,
    //             success: function (data) {
    //                 console.log(data);
    //                 // if (data == 'success') {

    //                 // } else {
    //                 //     swal.fire({
    //                 //              title: 'Something went wrong!',
    //                 //              text: data,
    //                 //              type: 'error',
    //                 //              confirmButtonText: 'Yes',
    //                 //              reverseButtons: true
    //                 //              });
    //                 // }
    //             }
    //         });
    // });



    //   let testimonialsCarousel = new Swiper("#testimonials-two__carousel", {
    //     observer: true,
    //     observeParents: true,
    //     speed: 1400,
    //     mousewheel: true,
    //     slidesPerView: 1,
    //     autoplay: {
    //       delay: 5000
    //     },
    //     thumbs: {
    //       swiper: testimonialsThumb
    //     }
    //   });
</script>
@endsection
