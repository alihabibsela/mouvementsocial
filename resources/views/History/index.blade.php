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

    .swiper-slide {
        width: max-content !important;
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
        <!-- <img class="curvedImage" src="uploads/images/{{$pages->banners[0]->image}}">
        <div class="curvedText">
            <h1><?= $title ?></h1>

            <svg viewBox="0 0 1440 319">
                <path fill="#fff" fill-opacity="1" d="M0,32L48,80C96,128,192,224,288,224C384,224,480,128,576,90.7C672,53,768,75,864,96C960,117,1056,139,1152,149.3C1248,160,1344,160,1392,160L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
            </svg>
        </div> -->
    </div>
</div>

<section class="cause-details blog-details  pt-60">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-8 mx-auto">
                <div class="cause-details__content">
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
                    <?= $details ?>

                </div>
            </div>

        </div>
        <div class="row pt-3">
            <div class="col-md-12 col-lg-8 mx-auto">
                <div class="comment-one">
                    @foreach ($HistoryImage as $item)
                    <div class="slider-item GalleryItem">
                        <img src="uploads/images/{{$item->image}}" style="width: 100%;height: 171px;">
                        <a href="uploads/images/{{$item->image}}" style="display: none;" class="img-popup" aria-label="open image"></a>

                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div><!-- /.container -->
</section>

<section class="cause-details blog-details  pt-60">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-8 mx-auto">
                <?php
                $titleMandate = $Mandate->name_en;
                $detailsMandate = $Mandate->details_en;
                if ($_SESSION["lng"] == "ar") {
                    $titleMandate = $Mandate->name_ar;
                    $detailsMandate = $Mandate->details_ar;
                } else if ($_SESSION["lng"] == "fr") {
                    $titleMandate = $Mandate->name_fr;
                    $detailsMandate = $Mandate->details_fr;
                }
                ?>
                <h3 class="text-center"><?= $titleMandate ?></h3>
                <div class="cause-details__content">
                    <?= $detailsMandate ?>
                </div>
            </div>

        </div>

    </div><!-- /.container -->
</section>

@include('History/SocialHistory')
<script>
    $(".GalleryItem").on("click", function(e) {
        $(this).find(".img-popup").click();
    });
    $(".comment-one").slick({
        items: 3,
        dots: true,
        infinite: true,
        margin: 0,
        centerMode: true,
        slidesToShow: 3,
        slidesToScroll: 3,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 2000,
        @if($_SESSION["lng"] == "ar")
        rtl: true,
        @endif
        //prevArrow: '<img src="img/group-2_4.png" class="fa fa-arrow-left reInitSlick">',
        // nextArrow: '<img src="img/right-arrow.png" class="fa fa-arrow-right">',
        // asNavFor: '.slider-nav',
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
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]

    });
</script>

@endsection