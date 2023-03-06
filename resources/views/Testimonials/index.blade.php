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
.video-card-two {
    padding-top: 27px;
    position: relative;
    z-index: 11;
}


.video-card-two p {
    color: #fff;
}
</style>
{{-- <section class="image-section">
    <div class="block no-padding">
        
    </div>
</section> --}}
<?php
//print_r(json_encode($pages->banners[0]));die();
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
        <!-- <img class="curvedImage" src="uploads/images/{{$pages->banners[0]->image}}"> -->
        <!-- <div class="curvedText">
            <h1><?=$title?></h1>

            <svg viewBox="0 0 1440 319">
                <path fill="#fff" fill-opacity="1" d="M0,32L48,80C96,128,192,224,288,224C384,224,480,128,576,90.7C672,53,768,75,864,96C960,117,1056,139,1152,149.3C1248,160,1344,160,1392,160L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
            </svg>
        </div> -->
    </div>
</div>
<style>

    .spnsr-chld-dtl-tbs .nav-tabs {
        justify-content: center;
    }
    .spnsr-chld-dtl-tbs .nav-tabs li.nav-item a.nav-link {
        padding: 5px 1.875rem;
        background-color: transparent;
        border: 0;
        -webkit-border-radius: 0;
        border-radius: 0;
        position: relative;
    }
    .spnsr-chld-dtl-tbs ul li a.active {
        color: #007bff !important;
    }
    .spnsr-chld-dtl-tbs ul li a.active:before {
        content: "";
        position: absolute;
        left: 1.875rem;
        right: 1.875rem;
        bottom: -0.0625rem;
        height: 0.125rem;
        opacity: 1;
        background-color: #007bff;
    }
    .spnsr-chld-dtl-tbs .nav-tabs li.nav-item {
        margin-bottom: 0;
        font-size: 1rem;
        text-transform: uppercase;
        color: #d7d7d7;
        font-weight: 700;
    }
    .spnsr-chld-dtl-tbs .nav-tabs li.nav-item a {
        color: #d7d7d7;
    }

    .inner-container.dynamic-radius{
        border-bottom-left-radius: 146px !important;
        border-top-left-radius: 146px !important;
    }
    .videoCard img {
        border-radius: 31px;
        width: 375px;
        height: 251px;
    }
</style>
<section>
    <div class="block">
        <div class="container">
            <div class="spnsr-chld-dtl-wrp">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-lg-12">
                        <div class="spnsr-chld-dtl-tbs">
                            <ul class="nav nav-tabs">
                            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#spnsr-chld1">Testimonials</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#spnsr-chld2">Video Testimonials</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="spnsr-chld1">
                                    @foreach ($testimonials as $item)
                                    <?php
                                    if(empty($item->video_url)){
                                        $colorList=array("background-color: #00adef;","background-color: rgb(0 0 0 / 80%);","background-color: rgb(175 175 175);background-color: rgb(93 70 159);");
                                        $color=$colorList[array_rand($colorList,1)];
                                        //print_r($color);die();
                                        $title=$item->title_en;
                                        $description=$item->description_en;
                                        if($_SESSION["lng"]=="ar"){
                                            $title=$item->title_ar;
                                            $description=$item->description_ar;
                                        }else if($_SESSION["lng"]=="fr"){
                                            $title=$item->title_fr;
                                            $description=$item->description_fr;
                                        }
                                        //$details=substr(strip_tags($details), 0, 90);

                                    ?>
                                <section class="video-card-two mb-3">
                                    <div class="container wow fadeInUp" data-wow-duration="1500ms">
                                        <div class="inner-container dynamic-radius" style="background-image: url(assets/images/shapes/video-bg-1-1.png);{{$color}}">
                                            <div class="row align-items-center">
                                                <div class="col-lg-3">
                                                    <div class="video-card-two__box">
                                                        <img src="uploads/images/{{$item->image}}" alt="">
                                                        <a style="{{empty($item->video_url)?"display:none;":""}}" href="{{$item->video_url}}" class="video-card-two__box-btn video-popup"><i class="fa fa-play"></i></a>

                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <h3><?=$title?></h3>
                                                </div>
                                                <div class="col-lg-5">
                                                    <p><?=$description?> </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <?php }?>
                            @endforeach
                                </div>
                                <div class="tab-pane fade" id="spnsr-chld2">
                                    @foreach ($testimonials as $item)
                                    <?php
                                     if(!empty($item->video_url)){
                                        $colorList=array("background-color: #00adef;","background-color: rgb(0 0 0 / 80%);","background-color: rgb(175 175 175);background-color: rgb(93 70 159);");
                                        $color=$colorList[array_rand($colorList,1)];
                                        //print_r($color);die();
                                        $title=$item->title_en;
                                        $description=$item->description_en;
                                        if($_SESSION["lng"]=="ar"){
                                            $title=$item->title_ar;
                                            $description=$item->description_ar;
                                        }else if($_SESSION["lng"]=="fr"){
                                            $title=$item->title_fr;
                                            $description=$item->description_fr;
                                        }
                                        //$details=substr(strip_tags($details), 0, 90);

                                    ?>
                                    <section class="video-card-two mb-3 videoCard">
                                        <div class="container wow fadeInUp" data-wow-duration="1500ms">
                                            <div class="inner-container dynamic-radius" style="background-image: url(assets/images/shapes/video-bg-1-1.png);{{$color}}">
                                                <div class="row align-items-center">
                                                    <div class="col-lg-7 text-center">
                                                        <div class="video-card-two__box">
                                                            <img src="uploads/images/{{$item->image}}" alt="">
                                                            <a style="{{empty($item->video_url)?"display:none;":""}}" href="{{$item->video_url}}" class="video-card-two__box-btn video-popup"><i class="fa fa-play"></i></a>

                                                        </div>
                                                    </div>
                                                    {{-- <div class="col-lg-4">
                                                        <h3><?=$title?></h3>
                                                    </div> --}}
                                                    <div class="col-lg-5">
                                                        <h3><?=$title?></h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                <?php }?>
                            @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



@endsection
