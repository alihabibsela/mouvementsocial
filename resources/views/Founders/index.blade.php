
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
.blog-details__title {
    font-weight: 600;
    font-size: 34px !important;
}
.team-card__content {
    padding-top: 16px;
    padding-bottom: 16px;
    height: auto;
}
.team-card__content h3 {
    margin: 0;
    color: #fff;
    font-size: 14px;
    font-weight: 700;
    line-height: 22px;
    margin-bottom: 6px;
}
.event-grid {
    display: flex;
    justify-content: center;
}
.event-card-content h3 a {
    width: 289px;
    display: block;
}
</style>
{{-- <section class="image-section">
    <div class="block no-padding">
        <img src="uploads/images/{{$pages->banners[0]->image}}" style="width:100%;">
    </div>
</section> --}}
<?php
    $title=$pages[0]->banners[0]->title_en;
    if($_SESSION["lng"]=="ar"){
        $title=$pages[0]->banners[0]->title_ar;
    }else if($_SESSION["lng"]=="fr"){
        $title=$pages[0]->banners[0]->title_fr;
    }

?>
<div class="curved-div" style="width:100%;">
    <div class="curvedBackgroundImage" style="background-image: url('uploads/images/{{$pages[0]->banners[0]->image}}'); opacity:0.8">
    <div style="padding-top: 177px;" class="container">
                        <div class="row justify-content-center">
                            <div class="col-xl-7 col-lg-12 text-center">
                                {{-- <p>Help the poor in need</p> --}}
                                <h1 class="mobile" style=" font-size: 47px; color:white !important"><?=$title?></h1>
                                

                            </div>
                        </div>
</div>    
    <!-- <img class="curvedImage" src="uploads/images/{{$pages[0]->banners[0]->image}}">
        <div class="curvedText">
            <h1><?=$title?></h1>

            <svg viewBox="0 0 1440 319">
                <path fill="#fff" fill-opacity="1" d="M0,32L48,80C96,128,192,224,288,224C384,224,480,128,576,90.7C672,53,768,75,864,96C960,117,1056,139,1152,149.3C1248,160,1344,160,1392,160L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
            </svg>
        </div> -->
    </div>
</div>
<section class="cause-details blog-details  pt-120">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-8 mx-auto">
                <div class="cause-details__content">

                    <?php
                    $title=$pages[0]->name_en;
                    $details=$pages[0]->details_en;
                    if($_SESSION["lng"]=="ar"){
                        $title=$pages[0]->name_ar;
                        $details=$pages[0]->details_ar;
                    }else if($_SESSION["lng"]=="fr"){
                        $title=$pages[0]->name_fr;
                        $details=$pages[0]->details_fr;
                    }

                ?>
                    <?=$details?>

                </div>
            </div>

        </div>
        <div class="row  mx-auto" style="justify-content: center;">
            <div class="col-md-4 col-lg-4 col-12 mt-5 mb-5">
                <img src="uploads/images/{{$pages[0]->banners[0]->image}}" style="width: 100%;">
            </div>
            <div class="col-md-4 col-lg-4 col-12 mt-5 mb-5">
                <img src="uploads/images/{{$pages[0]->banners[0]->image}}" style="width: 100%;">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-8 mx-auto">
                <div class="cause-details__content">

                    <?php
                    $title=$pages[1]->name_en;
                    $details=$pages[1]->details_en;
                    if($_SESSION["lng"]=="ar"){
                        $title=$pages[1]->name_ar;
                        $details=$pages[1]->details_ar;
                    }else if($_SESSION["lng"]=="fr"){
                        $title=$pages[1]->name_fr;
                        $details=$pages[1]->details_fr;
                    }

                ?>
                    <?=$details?>

                </div>
            </div>

        </div>
    </div>
</section>
<section class="event-page pt-120 pb-120">
    <div class="container">
        <div class="event-grid">

            @foreach ($founders as $key=>$item)
                    <?php
                        $title=$item->name_en;
                        $details=$item->bio_en;
                        $position=$item->position_en;
                        if($_SESSION["lng"]=="ar"){
                            $title=$item->name_ar;
                            $details=$item->bio_ar;
                            $position=$item->position_ar;
                        }else if($_SESSION["lng"]=="fr"){
                            $title=$item->name_fr;
                            $details=$item->bio_fr;
                            $position=$item->position_fr;
                        }
                        //$details=substr(strip_tags($details), 0, 90);

                    ?>
                    <div class="event-card" onclick="window.location='{{url('/')}}/founders-details/{{$item->name_en}}'" style="cursor: pointer;">
                        <div class="event-card-inner">
                            <div class="event-card-image">
                                <div class="event-card-image-inner">
                                    <img src="uploads/images/{{$item->image}}" style="width: 142px;">
                                    {{-- <span>20 May</span> --}}
                                </div><!-- /.event-card-image-inner -->
                            </div><!-- /.event-card-image -->
                            <div class="event-card-content">
                                <h3><a href="{{url('/')}}/founders-details/{{$item->name_en}}"><?=$title?></a></h3>
                                <ul class="event-card-list">
                                    {{-- <li>
                                        <i class="azino-icon-clock"></i>
                                        <strong>Time:</strong> 9:00am 02:00pm
                                    </li> --}}
                                    <li>
                                        <i class="azino-icon-pin1"></i>
                                        <strong>Position:</strong> <?=$position?>
                                    </li>
                                </ul><!-- /.event-card-list -->
                            </div><!-- /.event-card-content -->
                        </div><!-- /.event-card-inner -->
                    </div><!-- /.event-card -->
            @endforeach
        </div><!-- /.event-grid -->

    </div><!-- /.container -->
</section>



{{-- <section class="team-page pt-120 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-8 mx-auto">
                <div class="team-4-col">
                    <?php
                    $count=0;?>
                    @foreach ($founders as $key=>$item)
                            <?php
                                if($key!=0){
                                    $count++;
                                }

                                if($count==4){
                                    $count=1;
                                }
                                if($key==0){
                                    $color="#01aef0";
                                }else if($count==1){
                                    $color="#01526d";
                                }else if($count==2){
                                    $color="#407994";
                                }else if($count==3){
                                    $color="#7fa8bc";
                                }
                                $title=$item->name_en;
                                $details=$item->bio_en;
                                $position=$item->position_en;
                                if($_SESSION["lng"]=="ar"){
                                    $title=$item->name_ar;
                                    $details=$item->bio_ar;
                                    $position=$item->position_ar;
                                }else if($_SESSION["lng"]=="fr"){
                                    $title=$item->name_fr;
                                    $details=$item->bio_fr;
                                    $position=$item->position_fr;
                                }
                            ?>
                        <div class="team-card text-center content-bg-1" onclick="window.location='{{url('/')}}/founders-details/{{$item->name_en}}'" style="cursor: pointer;">
                            <div class="team-card__image">
                                <img src="uploads/images/{{$item->image}}" alt="">
                            </div>
                            <div class="team-card__content" style="background-color: {{$color}};">
                                <h3>{{$title}}</h3>
                                <p>{{$position}}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section> --}}
@endsection
