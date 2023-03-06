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
justify-content-center {
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
.blog-details__title_new {
    padding-bottom: 5px;
    margin-bottom: 15px !important;
    font-size: 26px !important;
    font-weight: 600;
    border-bottom: 1px solid #0022ff;
    width: fit-content;
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
    <div style="padding-top: 177px;" class="container">
                        <div class="row justify-content-center">
                            <div class="col-xl-7 col-lg-12 text-center">
                                {{-- <p>Help the poor in need</p> --}}
                                <h1 class="mobile" style=" font-size: 47px; color:#ccc !important"><?=$title?></h1>
                                

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
            <?php

            $title=$JobVacancy->title_en;
            $details=$JobVacancy->description_en;
            $requirements=$JobVacancy->requirements_en;
            if($_SESSION["lng"]=="ar"){
                $title=$JobVacancy->title_ar;
                $details=$JobVacancy->description_ar;
                $requirements=$JobVacancy->requirements_ar;
            }else if($_SESSION["lng"]=="fr"){
                $title=$JobVacancy->title_fr;
                $details=$JobVacancy->description_fr;
                $requirements=$JobVacancy->requirements_fr;
            }
        ?>
            <div class="col-md-12 col-lg-8 mx-auto">
                <h3 class="blog-details__title"><?=$title?></h3>
            </div>
        </div>
        <div class="row"  style="{{empty(str_replace("&nbsp;","",$details))?"display:none;":""}}">
            <div class="col-md-12 col-lg-8 mx-auto">
                <h3 class="blog-details__title blog-details__title_new"><?=$_SESSION["lng"]=="ar"?"الوصف الوظيفي":($_SESSION["lng"]=="fr"?"Description de l'emploi":"Job Description")?></h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-8 mx-auto">
                <div class="cause-details__content">
                    <?=$details?>

                </div>
            </div>

        </div>
        <div class="row mt-5" style="{{empty(str_replace("&nbsp;","",$requirements))?"display:none;":""}}">
            <div class="col-md-12 col-lg-8 mx-auto">
                <h3 class="blog-details__title blog-details__title_new"><?=$_SESSION["lng"]=="ar"?"المتطلبات":($_SESSION["lng"]=="fr"?"Conditions":"Requirements")?></h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-8 mx-auto">
                <div class="cause-details__content">
                    <?=$requirements?>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-12 mt-5" style="text-align: center;">
                <a class="thm-btn dynamic-radius thm-btn2" href="mailto:hr@mouvementsocial.org" ><?=$_SESSION["lng"]=="ar"?"قدم هنا":($_SESSION["lng"]=="fr"?"Appliquer ici":"Apply here")?></a>
            </div>
        </div>
    </div>
</section>

@endsection
