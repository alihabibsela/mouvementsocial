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
.blog-details__title {
    font-weight: 600;
    font-size: 34px !important;
}
.blog-details__title_new {
    padding-bottom: 5px;
    margin-bottom: 15px !important;
    font-size: 26px !important;
    font-weight: 600;
    border-bottom: 1px solid #0022ff;
    width: fit-content;
}
.ul-list-one li {
    font-size: 16px;
    margin-bottom: 21px;
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
    <div class="curvedBackgroundImage" style="background: url('uploads/images/{{$pages->banners[0]->image}}');">
        <img class="curvedImage" src="uploads/images/{{$pages->banners[0]->image}}">
        <div class="curvedText">
            <h1><?=$title?></h1>

            <svg viewBox="0 0 1440 319">
                <path fill="#fff" fill-opacity="1" d="M0,32L48,80C96,128,192,224,288,224C384,224,480,128,576,90.7C672,53,768,75,864,96C960,117,1056,139,1152,149.3C1248,160,1344,160,1392,160L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
            </svg>
        </div>
    </div>
</div>
<section class="cause-details blog-details  pt-5 pb-5">
    <?php

                    $title=$Calls->title_en;
                    $details=$Calls->description_en;
                    if($_SESSION["lng"]=="ar"){
                        $title=$Calls->title_ar;
                        $details=$Calls->description_ar;
                    }else if($_SESSION["lng"]=="fr"){
                        $title=$Calls->title_fr;
                        $details=$Calls->description_fr;
                    }
                ?>
    <div class="container">
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
        <div class="row mt-5">
            <div class="col-md-12 col-lg-8 mx-auto">
                <h3 class="blog-details__title blog-details__title_new" style="font-size: 16px !important;"><?=$_SESSION["lng"]=="ar"?"تحميل المستندات":($_SESSION["lng"]=="fr"?"Descargar documentos":"Download Documents")?></h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-8 mx-auto">
                <div class="cause-details__content">
                    <ul class="list-unstyled ul-list-one">
                        @foreach ($Calls->calls_docs as $item)
                            <?php
                                $title=$item->doc_title_en;
                                $doc=$item->doc_en;
                                if($_SESSION["lng"]=="ar"){
                                    $title=$item->doc_title_ar;
                                    $doc=$item->doc_ar;
                                }else if($_SESSION["lng"]=="fr"){
                                    $title=$item->doc_title_fr;
                                    $doc=$item->doc_fr;
                                }
                            ?>
                        <li><a style="color: #000;" href="uploads/files/{{$doc}}" target="_blank"><?=$title?></a></li>
                        @endforeach
                    </ul>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-12 mt-5" style="text-align: center;">
                <a class="thm-btn dynamic-radius thm-btn2" href="mailto:support@mouvementsocial.org" ><?=$_SESSION["lng"]=="ar"?"قدم هنا":($_SESSION["lng"]=="fr"?"Appliquer ici":"Apply here")?></a>
            </div>
        </div>
    </div>
</section>

@endsection
