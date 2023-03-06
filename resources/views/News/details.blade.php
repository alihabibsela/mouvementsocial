@extends('layout.layout')
@section('content')
<?php use Carbon\Carbon;?>
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
.justify-content-center {
    -ms-flex-pack: center!important;
    justify-content: center!important;
}
.text-center {
    text-align: center!important;
}
@media(max-width:800px) {
    h1.mobile{
    
    font-size: 47px !important;
    color: #ccc !important;
}
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
.img-fluid {
    max-width: 100%;
    height: 300px;
}
.statment-by-year{
    background: #cccccc2b;
    border-radius: 10px;
    padding: 24px;
    box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;
    height: 300px;

}

.statment-by-year h3{
    font-size: 16px;
}
.statment-by-year ul{
    padding: 11px;
    overflow: auto;
    height: 200px;
}
.statment-by-year ul li{
    list-style: none;
    padding-bottom: 8px;
    font-size: 16px;
}
.statment-by-year ul li .arrow{
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
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
    border-radius: 10px;
}

.scroll::-webkit-scrollbar-thumb {
    border-radius: 10px;
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.5);
}
.blog-details__title {
    margin-top: 45px !important;
    margin-bottom: 6px !important;
}
.slick-slide img {
    border-radius: 10px;
}
.gallery-card{
    text-align: center;
    padding: 14px 8px;
    /* padding-left: 10px; */
    background: #01aef0;
    color: #fff;
    font-size: 18px;
    font-weight: 700;
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
    <!-- <img class="curvedImage" src="uploads/images/{{$pages->banners[0]->image}}">
        <div class="curvedText">
            <h1><?=$title?></h1>

            <svg viewBox="0 0 1440 319">
                <path fill="#fff" fill-opacity="1" d="M0,32L48,80C96,128,192,224,288,224C384,224,480,128,576,90.7C672,53,768,75,864,96C960,117,1056,139,1152,149.3C1248,160,1344,160,1392,160L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
            </svg>
        </div> -->
    </div>
</div>
<section class="cause-details blog-details  pt-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-12 mx-auto">
            <div class="row">
                        <div class="gallery-card selectedYear" style="{{$_SESSION["lng"]=="ar"?"text-align: right;":"text-align: left;"}} margin:18px">
                            <a  class="custom-button" style="cursor: pointer;" onclick="history.back()"><?=$_SESSION["lng"]=="ar"?"عودة":($_SESSION["lng"]=="fr"?"Dos":"Back")?></a>
                        </div>
                </div>
                <div class="comment-one">
                    @foreach ($News->news_images as $item)
                            <?php
                            $url = $item->video_url;
                            $urlArray=[];
                            if($item->video_url!=""){
                                $urlArray = explode("/",$item->video_url);

                                if(sizeof($urlArray)>2){
                                    $url =$urlArray[3];
                                    $url=str_replace("watch?v=", "", $url);
                                    $url ="https://www.youtube.com/embed/".$url;
                                }
                            }

                        ?>
                        <div class="item GalleryItem" video="{{$url}}">
                            <img src="uploads/images/{{$item->image}}" width="100%">
                            <a href="uploads/images/{{$item->image}}" style="display: none;" class="img-popup" aria-label="open image"></a>
                        </div>
                    @endforeach

                    {{-- <div class="item">
                        <img src="assets/images/blog/blog-1-2.jpg" width="100%">
                    </div>
                    <div class="item">
                        <img src="assets/images/blog/blog-1-2.jpg" width="100%">
                    </div> --}}
                </div>

            </div>
        </div>
        <?php
            $date = Carbon::parse($News->dates)->locale($_SESSION["lng"]);
            $date =$date->isoFormat('DD MMM Y');
            $title=$News->title_en;
            $details=$News->details_en;
            if($_SESSION["lng"]=="ar"){
                $title=$News->title_ar;
                $details=$News->details_ar;
            }else if($_SESSION["lng"]=="fr"){
                $title=$News->title_fr;
                $details=$News->details_fr;
            }

    ?>
        <div class="row">
            <div class="col-md-12 col-lg-8 mx-auto">
                <h3 class="blog-details__title"><?=$title?></h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-8 mx-auto">
                <div class="cause-details__content">
                    <?=$details?>

                </div>
            </div>

        </div>
    </div>
</section>
<!-- Modal -->
<style>
    .modal-dialog{
        width: 100%;
        max-width: 79%;
        height: -webkit-fill-available;
    }
    .modal-content{
        height: inherit;
    }
    .modal-content {
    height: inherit;
    background: transparent;
    border: 0px solid rgba(0,0,0,.2);
    border-radius: 0px;
}
</style>
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        {{-- <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div> --}}
        <div class="modal-body">
            <iframe class="embed-responsive-item" src="" id="video" allowscriptaccess="always" allow="autoplay" style="width: 100%;height: 100%;"></iframe>
        </div>
        {{-- <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div> --}}
      </div>
    </div>
  </div>
<script>
        $(".GalleryItem").on("click",function(e){
            if($(this).attr("video")!=""){
                videoSrc = $(this).attr("video");
                console.log("1", videoSrc);
                $("#video").attr('src', videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0");

                $("#exampleModalLong").modal("show");
            }else{
                $(this).find(".img-popup").click();
            }

        });
    $(".comment-one").slick({
        items: 1,
        dots: true,
        infinite: true,
        margin: 0,
        centerMode: true,
        slidesToShow: 1,
        slidesToScroll: 1,
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
