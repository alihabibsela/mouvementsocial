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
    .about-counter::after {
        content: "";
        width: 100%;
        height: 120px;
        background-color: #f1f1f1;
        position: absolute;
        bottom: 0;
        right: 0;
        z-index: -1;
    }
    .newBG.about-counter::before {
        /* background-image: url('{{url("/")}}/content/assets/images/shapes/hand-bg-1-1.png') !important; */
        background-image: unset !important;
        opacity: 0.8;

    }

    .about-counter::before {
        opacity: 0.2;
        right: 25%;
        background-size: cover;
        background-image: url('{{url("/")}}/content/assets/images/shapes/curves.png');
    }
    .ul-list-one li::before {
        top: 16px;
    }
    .ul-list-one li {
        padding-bottom: 9px;
    }
</style>
{{-- <section class="image-section">
    <div class="block no-padding">
        <img src="uploads/images/{{$pages[0]->banners[0]->image}}" style="width:100%;">
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
    <!-- <img class="curvedImage" src="uploads/images/{{$pages[0]->banners[0]->image}}"> -->
        <!-- <div class="curvedText">
            <h1><?=$title?></h1>

            <svg viewBox="0 0 1440 319">
                <path fill="#fff" fill-opacity="1" d="M0,32L48,80C96,128,192,224,288,224C384,224,480,128,576,90.7C672,53,768,75,864,96C960,117,1056,139,1152,149.3C1248,160,1344,160,1392,160L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
            </svg>
        </div> -->
    </div>
</div>
<section class="cause-details blog-details  pt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-8 mx-auto">
                <div class="cause-details__content">
                    <?php
                    $title=$pages[3]->name_en;
                    $details=$pages[3]->details_en;
                    if($_SESSION["lng"]=="ar"){
                        $title=$pages[3]->name_ar;
                        $details=$pages[3]->details_ar;
                    }else if($_SESSION["lng"]=="fr"){
                        $title=$pages[3]->name_fr;
                        $details=$pages[3]->details_fr;
                    }

                ?>
                    <?=$details?>
                </div>
            </div>

        </div>
    </div>
</section>
<section class="about-counter pt-5 mt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 mx-auto">
                <div class="block-title">
                    <h3><?=$_SESSION["lng"]=="ar"?"القيم التي نشاركها":($_SESSION["lng"]=="fr"?"Les valeurs que nous partageons":"Values We Share")?></h3>
                </div>

                <div id="accordion">
                    @foreach ($MsValues as $item)
                    <?php
                                $title=$item->title_en;
                                $details=$item->value_en;
                                if($_SESSION["lng"]=="ar"){
                                    $title=$item->title_ar;
                                    $details=$item->value_ar;
                                }else if($_SESSION["lng"]=="fr"){
                                    $title=$item->title_fr;
                                    $details=$item->value_fr;
                                }

                                $id = $item->ms_values_id;
                    ?>
                    <div class="card">
                        <div class="card-header" id="heading<?=$id?>">
                            <div class=" " style="cursor:pointer; padding: 0.375rem 0.75rem" data-toggle="collapse" data-target="#collapse<?=$id?>" aria-expanded="true" aria-controls="collapse<?=$id?>">
                                <h5 class="mb-0">
                                    <?=($title == ''? 'Title not found in CMS': $title)?>
                                    <i class="far fa-plus" style="right:25px; position:absolute;"></i>
                                </h5>
                            </div>                            
                        </div>

                        <div id="collapse<?=$id?>" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">
                                <?=$details?>
                            </div>
                        </div>
                    </div>                    
                    @endforeach                    
                </div>

                {{--<ul class="list-unstyled ul-list-one">
                    @foreach ($MsValues as $item)
                            <?php
                                $title=$item->value_en;
                                if($_SESSION["lng"]=="ar"){
                                    $title=$item->value_ar;
                                }else if($_SESSION["lng"]=="fr"){
                                    $title=$item->value_fr;
                                }

                            ?>
                        <li><?=$title?></li>
                    @endforeach
                </ul>--}}
                <br/>
            </div>
        </div><!-- /.row -->
    </div><!-- /.containerr -->
</section><!-- /.about-counter hand-bg-1-1.png-->

{{--<section hidden class="cause-details blog-details  pt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-8 mx-auto">
                <div class="cause-details__content">
                    <?php
                    $title=$pages[4]->name_en;
                    $details=$pages[4]->details_en;
                    if($_SESSION["lng"]=="ar"){
                        $title=$pages[4]->name_ar;
                        $details=$pages[4]->details_ar;
                    }else if($_SESSION["lng"]=="fr"){
                        $title=$pages[4]->name_fr;
                        $details=$pages[4]->details_fr;
                    }

                    ?>
                    <?=$details?>
                </div>
            </div>

        </div>
    </div>
</section>--}}

<section class="about-counter pt-5 mt-5 mb-5 newBG">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-12">
                <div class="block-title">
                    <?php
                    $title=$pages[4]->name_en;
                    $details=$pages[4]->details_en;
                    if($_SESSION["lng"]=="ar"){
                        $title=$pages[4]->name_ar;
                        $details=$pages[4]->details_ar;
                    }else if($_SESSION["lng"]=="fr"){
                        $title=$pages[4]->name_fr;
                        $details=$pages[4]->details_fr;
                    }

                ?>
                    <h3 class="text-center">Social Work Approach </h3>
                </div>
                <div class="cause-details__content">

                    <p class="mb-5"><?=$details?> </p>

                </div>
            </div>
        </div>
    </div>
</section>

{{-- <section class="about-counter pt-5 mt-5 mb-5 newBG">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-12">
                <div class="block-title">
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
                    <h3 class="text-center"><?=$title?></h3>
                </div>
                <div class="cause-details__content">

                    <p class="mb-5"><?=$details?> </p>

                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="block-title">
                    <?php
                    $title=$pages[2]->name_en;
                    $details=$pages[2]->details_en;
                    if($_SESSION["lng"]=="ar"){
                        $title=$pages[2]->name_ar;
                        $details=$pages[2]->details_ar;
                    }else if($_SESSION["lng"]=="fr"){
                        $title=$pages[2]->name_fr;
                        $details=$pages[2]->details_fr;
                    }

                ?>
                    <h3 class="text-center"><?=$title?></h3>
                </div>
                <div class="cause-details__content">

                    <p class="mb-5"><?=$details?> </p>

                </div>
            </div>
        </div>
    </div>
</section> --}}
@endsection
