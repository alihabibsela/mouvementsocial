@extends('layout.layout')
@section('content')
<style>
    .image-section {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        max-width: 100%;
        position: relative;
        width: 100%;
    }

    .justify-content-center {
        -ms-flex-pack: center !important;
        justify-content: center !important;
    }

    .text-center {
        text-align: center !important;
    }

    @media(max-width:800px) {
        h1.mobile {

            font-size: 47px !important;
            color: #ccc !important;
        }
    }

    .image-section .no-padding,
    .image-section .block.no-padding {
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

    .comment-one .slick-list {
        padding: 0px !important;
    }

    .slider-item {
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

    .statment-by-year {
        background: #cccccc2b;
        border-radius: 10px;
        padding: 24px;
        box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;
        height: 300px;

    }

    .statment-by-year h3 {
        font-size: 16px;
    }

    .statment-by-year ul {
        padding: 11px;
        overflow: auto;
        height: 200px;
    }

    .statment-by-year ul li {
        list-style: none;
        padding-bottom: 8px;
        font-size: 16px;
    }

    .statment-by-year ul li .arrow {
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
        -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
        border-radius: 10px;
    }

    .scroll::-webkit-scrollbar-thumb {
        border-radius: 10px;
        -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.5);
    }

    .blog-details__title {
        margin-top: 45px !important;
        margin-bottom: 6px !important;
    }

    .blog-card__content h3 {
        text-align: left;
    }

    .blog-card__content p {
        text-align: left;
        padding-left: 35px;
        padding-right: 35px;
    }
</style>
{{-- <section class="image-section">
    <div class="block no-padding">
        <img src="uploads/images/{{$pages->banners[0]->image}}" style="width:100%;">
</div>
</section> --}}
<?php
$title = $pages->banners[0]->title_en;
if ($_SESSION["lng"] == "ar") {
    $title = $pages->banners[0]->title_ar;
} else if ($_SESSION["lng"] == "fr") {
    $title = $pages->banners[0]->title_fr;
}

?>
<div class="curved-div" style="width:100%;">
    <div class="curvedBackgroundImage" style="background-image: url('uploads/images/{{$pages->banners[0]->image}}'); opacity:0.8">

        <div style="padding-top: 177px;" class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-12 text-center">
                    {{-- <p>Help the poor in need</p> --}}
                    <h1 class="mobile" style=" font-size: 47px; color:white !important"><?= $title ?></h1>


                </div>
            </div>
        </div>
        <!-- <img class="curvedImage" src="uploads/images/{{$pages->banners[0]->image}}"> -->
        <!-- <div class="curvedText">
            <h1><?= $title ?></h1>

            <svg viewBox="0 0 1440 319">
                <path fill="#fff" fill-opacity="1" d="M0,32L48,80C96,128,192,224,288,224C384,224,480,128,576,90.7C672,53,768,75,864,96C960,117,1056,139,1152,149.3C1248,160,1344,160,1392,160L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
            </svg>
        </div> -->
    </div>
</div>
<section class="news-page pb-120 pt-120">
    <div class="container">
        <div class="news-3-col">
            @if(count($Publication->data) > 0)
            @foreach ($Publication->data as $item)
            <?php
            $title = $item->title_en;
            if ($_SESSION["lng"] == "ar") {
                $title = $item->title_ar;
            } else if ($_SESSION["lng"] == "fr") {
                $title = $item->title_fr;
            }

            ?>
            <div class="blog-card">
                <div class="blog-card__inner">
                    <div class="blog-card__image">
                        <img src="uploads/images/{{$item->image}}" alt="">
                    </div>
                    <div class="blog-card__content">
                        <div class="blog-card__meta" style="justify-content: left;">
                            <?php
                            $file = $item->file_en;
                            if ($_SESSION["lng"] == "ar") {
                                $file = $item->file_ar;
                            } else if ($_SESSION["lng"] == "fr") {
                                $file = $item->file_fr;
                            }
                            ?>
                        </div>
                        <h3><a target="_blank" href="{{url('/')}}/content/uploads/files/{{$file}}"><?= $title ?></a></h3>

                    </div>
                </div>
            </div>
            @endforeach
            @else
                               <h3>Nothing found</h3> 

            @endif




        </div><!-- /.news-3-col -->
        @if ($Publication->last_page>1)
        <ul class="list-unstyled post-pagination d-flex justify-content-center align-items-center">
            @foreach ($Publication->links as $key=>$value)
            <?php
            if (isset($_GET["cat"]) && $value->url != null) {
                $value->url .= "&p=1&cat=" . $_GET["cat"];
            }
            ?>
            @if($key==0&&$value->url!=null)
            <li><a class="{{$value->active?"active":""}}" href="{{$value->url}}"><i class="far fa-angle-left"></i></a></li>
            @elseif ($key==(sizeof($Publication->links)-1)&&$value->url!=null)
            <li><a class="{{$value->active?"active":""}}" href="{{$value->url}}"><i class="far fa-angle-right"></i></a></li>
            @elseif($key>0&&$key<(sizeof($Publication->links)-1))
                <li><a class="{{$value->active?"active":""}}" href="{{$value->url}}">{{$value->label}}</a></li>
                @endif
                @endforeach
        </ul>
        @endif
    </div><!-- /.container -->
</section>

@endsection