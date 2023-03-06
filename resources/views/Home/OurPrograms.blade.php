<?php use Carbon\Carbon;?>
<section class="news__top news-home ">
    <div class="container">
        <div class="row align-items-start align-items-md-center flex-column flex-md-row">
            <div class="col-lg-7">
                <div class="block-title">
                    {{-- <p><img src="assets/images/shapes/heart-2-1.png" width="15" alt="">Popular Causes</p> --}}
                    <h3><?=$_SESSION["lng"]=="ar"?"برامجنا":($_SESSION["lng"]=="fr"?"Nos programmes":"Our Programs")?></h3>
                </div><!-- /.block-title -->
            </div><!-- /.col-lg-7 -->
            {{-- <div class="col-lg-5 d-flex">
                <div class="my-auto">
                    <p class="block-text pr-10 mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry.
                        Have
                        you done google research which works all the time. </p>
                </div>
            </div> --}}
        </div>
    </div><!-- /.container -->
</section>
<section class="news-page pb-120">
    <div class="container">
        <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 3, "spaceBetween": 30,"dots": true,
            "breakpoints": {
                "0": {
                    "slidesPerView": 1,
                    "spaceBetween": 0
                },
                "375": {
                    "slidesPerView": 1,
                    "spaceBetween": 30
                },
                "575": {
                    "slidesPerView": 1,
                    "spaceBetween": 30
                },
                "768": {
                    "slidesPerView": 1,
                    "spaceBetween": 30
                },
                "991": {
                    "slidesPerView": 2,
                    "spaceBetween": 30
                },
                "1199": {
                    "slidesPerView": 2,
                    "spaceBetween": 30
                },
                "1200": {
                    "slidesPerView": 3,
                    "spaceBetween": 30,
                    
                }
            }
            }'>
            <div class="swiper-wrapper1" >
                @foreach ($programs as $item)
                <?php

                if ($item->date != '0000-00-00'){
                    $date = Carbon::parse($item->date)->locale($_SESSION["lng"]);
                    $date =$date->isoFormat('DD MMM');
                }else{
                    $date = $item->date;
                };

                //$date = Carbon::parse($item->date)->locale($_SESSION["lng"]);
                //$date =$date->isoFormat('DD MMM');
                $title=$item->title_en;
                $sub_title=$item->sub_title_en;
                $details=$item->description_en;
                $sub_details=$item->sub_details_en;
                $programs_category=$item->programs_category->cat_name_en;
                if($_SESSION["lng"]=="ar"){
                    $title=$item->title_ar;
                    $sub_title=$item->sub_title_ar;
                    $details=$item->description_ar;
                    $sub_details=$item->sub_details_ar;
                    $programs_category=$item->programs_category->cat_name_ar;
                }else if($_SESSION["lng"]=="fr"){
                    $title=$item->title_fr;
                    $sub_title=$item->sub_title_fr;
                    $details=$item->description_fr;
                    $sub_details=$item->sub_details_fr;
                    $programs_category=$item->programs_category->cat_name_fr;
                }
                $details=substr(strip_tags($details), 0, 70);

                ?>
                <div class="swiper-slide" style="width: 320px;">
                    <div class="wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="0ms">
                        <div class="blog-card">
                            <div class="blog-card__inner">
                                <div class="blog-card__image">
                                    <img src="uploads/images/{{$item->program_main_image==null?"":$item->program_main_image->image}}" alt="">
                                    <?php if ( $date != '0000-00-00') { ?>
                                        <div class="blog-card__date">{{$date}}</div>
                                    <?php }?>
                                </div>
                                <div class="blog-card__content">
                                    <div class="blog-card__meta">
                                        <div class="programs_category">{{$programs_category}}</div>
                                    </div>
                                    <h3><a href="{{url('/')}}/programs-details-Home/{{$item->title_en}}"><?=$sub_title?></a></h3>
                                    <p><?=$sub_details?></p>
                                    <a href="{{url('/')}}/programs-details-Home/{{$item->title_en}}" class="blog-card__more"><i class="far fa-angle-right"></i><?=$_SESSION["lng"]=="ar"?"اقرأ المزيد":($_SESSION["lng"]=="fr"?"Lire la suite":"Read More")?></a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div><!-- /.swiper-wrapper -->
        </div><!-- /.news-3-col -->
        <div class="w-100" style="text-align: center; padding-top: 51px;">
            <a class="custom-button" href="{{url("/programs")}}"><?=$_SESSION["lng"]=="ar"?"المزيد من المعلومات":($_SESSION["lng"]=="fr"?"Plus d'information":"More Information")?></a>
        </div>
    </div><!-- /.container -->
</section>
<style>
    @media (min-width: 481px){
        .block-title h3 {
    font-size: 34px !important;
}
    }

    @media (min-width: 768px){
        .blog-card__content h3 {
    font-size: 24px;
    margin-bottom: 35px;
    padding-left: 35px;
    padding-right: 35px;
}
    }
    .slick-slide {
    display: none;
    float: left;
    height: 100%;
    min-height: 1px;
    margin: 30px;
}

</style>
<script>
    
    $(".swiper-wrapper1").slick({
        items: 3,
        spaceBetween: 30,
        slidesPerView: 3,
        dots: true,
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
        //prevArrow: '<img src="img/group-2_4.png" class="fa fa-arrow-left reInitSlick">',
       // nextArrow: '<img src="img/right-arrow.png" class="fa fa-arrow-right">',
        // asNavFor: '.slider-nav',
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
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]

    });
    </script>
