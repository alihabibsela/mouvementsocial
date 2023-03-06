@extends('layout.layout')
@section('content')
<style>
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
    .swiper-slide{
    width: max-content !important;
    }
</style>
{{-- <section class="image-section">
    <div class="block no-padding">
        <img src="uploads/images/{{$pages->banners[0]->image}}" style="width:100%;">
    </div>
</section> --}}
<div class="curved-div" style="width:100%;">
    <div class="curvedBackgroundImage">
        <img class="curvedImage" src="uploads/images/{{$pages->banners[0]->image}}">
        <div class="curvedText">
            <h1>Title Here</h1>
            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 700 1000" style="enable-background:new 0 0 700 1000;" xml:space="preserve">
            <style type="text/css">
                .st0{fill:#ffffff;position: relative;}
                .st0::before
                {
                    content: "";
                    background: #fff;
                    height: 200px;
                    width: 17px;
                    position: absolute;
                    right: 0px;
                }
            </style>
            <path id="XMLID_3_" class="st0" d="M310.2,499.9c4-18.8,18.5-80.6,39.4-90.3c19.6-9.1,31.9,12.1,40,26.1c2.6,4.6,5.1,8.9,7.4,11.8
                c7.2,8.9,18.6,10.8,24.2,7.6c5.7-3.3,15-15.9,21.6-45.8c11.4-51.7,20.2-133.3,21.8-179.4c2.6-71.1,1.5-181.1,0.9-230.7
                c6.7,0.1,13.3,0.4,19.9,1c0.7,50.7,1.7,160-0.9,231.1c-1.7,47.6-10.9,132.1-22.6,185.6c-8.1,36.9-24.6,60.5-35.9,64.1
                c-11.7,3.6-27,5.3-42.5-13.9c-3.6-4.4-6.7-9.8-9.7-15c-8.7-15.1-12.5-19.7-17.8-17.2c-6.8,3.2-19.3,37-26.9,72.9
                c-0.4,1.8-43.7,181.8-61.1,249.7c-13.6,52.8-57.2,181.1-86.5,242.6c-5.1-6-10.1-12.1-15-18.3c26.9-58,68.9-179.4,82.7-233
                C266.7,681,309.9,501.2,310.2,499.9z"/>
            </svg>

            {{-- <svg viewBox="0 0 1440 319">
                <path fill="#fff" fill-opacity="1" d="M0,32L48,80C96,128,192,224,288,224C384,224,480,128,576,90.7C672,53,768,75,864,96C960,117,1056,139,1152,149.3C1248,160,1344,160,1392,160L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
            </svg> --}}
        </div>
    </div>
</div>
<style>
.curved-div {
background: #fff;
color: #ccc !important;
text-align: center;
overflow: hidden;
margin-top: 160px;
}
.curved-div h1 {
font-size: 6rem;
font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
}
.curved-div p {
font-size: 1rem;
font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
}

.curved-div svg {
    position: absolute;
    height: inherit;
    transform: rotate(
180deg
);
    top: 0pc;
    right: -242px;
    width: -webkit-fill-available;
}
.curvedText{
    width: 27%;
    position: relative;
    background: #fff;
    color: #ccc !important;
    top: 0px;
    height: -webkit-fill-available;
}
.curvedText h1{
    padding-top: 50%;
    color: #ccc !important;
    text-align: center;
    margin: auto;
    width: 90%;
    font-size: 40px;
}
.curvedBackgroundImage{
width: 100%;
position: relative;
background: url('uploads/images/{{$pages->banners[0]->image}}');
background-position: center;
background-repeat: no-repeat;
background-size: cover;
display: flex;
height: 445px;
}
.curvedImage {
width: 0px;
visibility: hidden;
border-radius: 276px 0px 0px 0px;
}
</style>
<section class="cause-details blog-details  pt-120">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-8 mx-auto">
                <div class="cause-details__content">
                    <?php
                    $title=$pages->name_en;
                    $details=$pages->details_en;
                    if($_SESSION["lng"]=="ar"){
                        $title=$pages->name_ar;
                        $details=$pages->details_ar;
                    }else if($_SESSION["lng"]=="fr"){
                        $title=$pages->name_fr;
                        $details=$pages->details_fr;
                    }

                ?>
                    <?=$details?>

                </div>
            </div>

        </div>
        <div class="row pt-5">
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
@include('History/SocialHistory')
<script>
    $(".GalleryItem").on("click",function(e){
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

@endsection
