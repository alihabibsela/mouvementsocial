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
                                <h1 class="mobile" style=" font-size: 47px; color:white !important">Annual Reports</h1>
                                

                            </div>
                        </div>
</div> <!-- <img class="curvedImage" src="uploads/images/{{$pages->banners[0]->image}}">
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
        <div class="row">
            <div class="col-md-12 col-lg-8 mx-auto">
                <h3 class="blog-details__title"><?= $title ?></h3>
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
                <div class="row mt-5">
                    <?php $setFinanceStatement=0;?>
                    @foreach ($Finance as $key=>$value)
                        @if($key==2)
                        <?php $setFinanceStatement=1;?>
                            <div class="col-md-4 col-12" style="padding-bottom: 8px;">
                                <div class="statment-by-year">
                                    <h3>
                                        <?=$_SESSION["lng"]=="ar"?"تقرير سنوي":($_SESSION["lng"]=="fr"?"Rapport annuel":"Annual Report")?>
                                    </h3>
                                    <ul class="scroll">
                                        @foreach ($FinanceStatement as $item)
                                            <?php
                                            $file=$item->file_en;
                                            if($_SESSION["lng"]=="ar"){
                                                $file=$item->file_an;
                                            }else if($_SESSION["lng"]=="fr"){
                                                $file=$item->file_fr;
                                            }
                                            ?>
                                            <li><a target="_blank" href="uploads/files/{{$file}}">{{$item->year}}<span class="arrow">></span></a></li>
                                        @endforeach

                                    </ul>
                                </div>
                            </div>
                        @endif
                        <div class="col-md-4 col-12" style="padding-bottom: 8px;">
                            <div class="gallery-card">
                                <img src="uploads/images/{{$value->image}}" class="img-fluid" alt="">
                                <div class="gallery-content">
                                    <a href="uploads/images/{{$value->image}}" class="img-popup" aria-label="open image"><i class="fal fa-plus"></i></a>
                                </div>
                                <p class="text-center"><?=$_SESSION["lng"]=="ar"?$value->title_ar:($_SESSION["lng"]=="fr"?$value->title_fr:$value->title_en)?></p>
                            </div>
                        </div>
                    @endforeach
                    @if ($setFinanceStatement==0)
                        <div class="col-md-4 col-12" style="padding-bottom: 8px;">
                            <div class="statment-by-year">
                                <h3><?=$_SESSION["lng"]=="ar"?"بيان من السنة":($_SESSION["lng"]=="fr"?"Relevé par année":"Statment by Year")?></h3>
                                <ul class="scroll">
                                    @foreach ($FinanceStatement as $item)
                                        <?php
                                        $file=$item->file_en;
                                        if($_SESSION["lng"]=="ar"){
                                            $file=$item->file_an;
                                        }else if($_SESSION["lng"]=="fr"){
                                            $file=$item->file_fr;
                                        }
                                        ?>
                                        <li><a target="_blank" href="uploads/files/{{$file}}">{{$item->year}}<span class="arrow">></span></a></li>
                                    @endforeach

                                </ul>
                            </div>
                        </div>
                    @endif

                </div>
            </div>

        </div>
        {{-- <div class="row mt-5">
            <div class="col-md-12 col-lg-8 mx-auto">
                <h3 class="blog-details__title blog-details__title_new" style="font-size: 16px !important;">Download Documents</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-8 mx-auto">
                <div class="cause-details__content">
                    <ul class="list-unstyled ul-list-one">
                        <li>TOR Document One</li>
                        <li>TOR Document Two</li>
                    </ul>
                </div>
            </div>

        </div> --}}
    </div>
</section>

@endsection
