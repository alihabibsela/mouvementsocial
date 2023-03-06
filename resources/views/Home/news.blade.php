<?php use Carbon\Carbon;?>
<style>
    @media(max-width:700px){
        .blg-wrp .row > div:nth-child(2n+1) .blg-bx .blg-dat {
            left: 0.875rem;
        }
        .blg-dat {
            left: 0.875rem;
        }
    }
    .blog-card__more {
    background-color: #f1f1f1;
    border-bottom-right-radius: 15px;
    border-bottom-left-radius: 15px;
    width: 100%;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    text-align: center;
    font-size: 16px;
    color: #7e7e7e;
    border-top: 1px solid #f1f1f1;
    -webkit-transition: all 500ms ease;
    transition: all 500ms ease;
    font-weight: 500;
    line-height: 64px;
}
    .MainItemBox{
        display: table-row-group !important;
    }
</style>
<section class="NewsSection pb-120">
    <div class="block11">
        <div class="container">
            <div class="sec-ttl text-center">
                <div class="sec-ttl-inr">
                    <h2 itemprop="headline"><?=$_SESSION["lng"]=="ar"?"آخر الأخبار":($_SESSION["lng"]=="fr"?"Nouvelles récentes":"Recent Media")?></h2>
                </div>
            </div><!-- Sec Title -->
            <div class="blg-wrp remove-ext9">
                <div class="row comment-one">
                    @foreach ($News as $item)
                    <?php

                        if ($item->dates != '0000-00-00'){
                            $date = Carbon::parse($item->dates)->locale($_SESSION["lng"]);
                            $date =$date->isoFormat('DD MMM Y');
                        }else{
                            $date = $item->dates;
                        };                       

                        //$date = Carbon::parse($item->dates)->locale($_SESSION["lng"]);
                        //$date =$date->isoFormat('DD MMM Y');
                        $title=$item->title_en;
                        $details=$item->details_en;
                        $sub_title=$item->sub_title_en;
                        $sub_details=$item->sub_details_en;
                        if($_SESSION["lng"]=="ar"){
                            $title=$item->title_ar;
                            $details=$item->details_ar;
                            $sub_title=$item->sub_title_ar;
                            $sub_details=$item->sub_details_ar;
                        }else if($_SESSION["lng"]=="fr"){
                            $title=$item->title_fr;
                            $details=$item->details_fr;
                            $sub_title=$item->sub_title_fr;
                            $sub_details=$item->sub_details_fr;
                        }
                        $details=substr(strip_tags($details), 0, 90);

                    ?>
                        <div class="col-md-4 col-sm-6 col-lg-4 MainItemBox">
                            <div class="blg-bx">
                                <div class="blg-thmb" style="overflow: unset;" >
                                    <a class="imageContainer" style="overflow: unset;" href="{{url('/')}}/news-details/{{$item->title_en}}" title="" itemprop="url">
                                        <img style="height: 246px;width:100%;" src="uploads/images/{{$item->main_image==null?"":$item->main_image->image}}" alt="blg-img1-1.jpg" itemprop="image">
                                    </a>
                                    <?php if ( $date != '0000-00-00') { ?>
                                        <span class="blg-dat"><?=$date?></span>
                                    <?php }?>                                    
                                </div>
                                <div href="{{url('/')}}/news-details/{{$item->title_en}}" class="blg-inf">
                                <a class="" style="overflow: unset;" href="{{url('/')}}/news-details/{{$item->title_en}}" title="" itemprop="url">
                                <h3 ><?=$sub_title?></h3>
                                </a>
                                    <p><?=$sub_details?></p>                                                                        
                                    <a href="{{url('/')}}/news-details/{{$item->title_en}}" class="blog-card__more"><i class="far fa-angle-right"></i><?=$_SESSION["lng"]=="ar"?"اقرأ المزيد":($_SESSION["lng"]=="fr"?"Lire la suite":"Read More")?></a>
                                </div>
                                
                            </div>
                            
                        </div>
                    @endforeach

                </div>
            </div><!-- Blog Wrap Style 1 -->
            <div class="w-100" style="text-align: center; margin-top:45px;">
                <a class="custom-button" href="{{url("/media")}}"><?=$_SESSION["lng"]=="ar"?"المزيد من المعلومات":($_SESSION["lng"]=="fr"?"Plus d'information":"More Information")?></a>
            </div>
        </div>
    </div>
</section>
<script>
    $(".comment-one").slick({
        items: 3,
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
    <style>
    @media (min-width: 481px){
        .block-title h3 {
    font-size: 34px !important;
}
    }
    

</style>
