@extends('layout.layout')
@section('content')

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
                    <h1 class="mobile" style=" font-size: 47px; color:white !important"><?= $title ?></h1>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="news-page pb-120 pt-120">
    <div class="container">
        <div class="row">
            @foreach ($categories as $item)
            <?php
            $title = $item->name_en;
            $desc = $item->desc_en;
            if ($_SESSION["lng"] == "ar") {
                $title = $item->name_ar;
                $desc = $item->desc_ar;
            } else if ($_SESSION["lng"] == "fr") {
                $title = $item->name_fr;
                $desc = $item->desc_fr;
            }
            ?>
            <div class="col-lg-4">
                <div class="testimonials-one__single">
                    <div class="testimonials-one__image">
                        <img src="uploads/images/{{$item->icon}}" alt="">
                    </div><!-- /.testimonials-one__image -->
                    <h3>{{$title}}</h3>
                    <p>{!! \Illuminate\Support\Str::words(strip_tags($desc), $limit = 25) !!}.</p>
                    <a href="{{url('/')}}/publications/{{$item->publication_category_id}}" class="blog-card__more"><i class="far fa-angle-right"></i>View Publications</a>
                </div><!-- /.testimonials-one__single -->
            </div><!-- /.col-lg-4 -->
            @endforeach
        </div><!-- /.news-3-col -->
    </div><!-- /.container -->
</section>
<style>
    .testimonials-one__image img {
        max-width: 150px;
        border-radius: 0;
    }

    .testimonials-one__image::before {
        content: none;
    }

    .testimonials-one__image {
        margin-bottom: 15px;
        margin-top: 25px;
        padding: 15px;
        background-color: #ebebeb;
        border-radius: 50%;
    }

    .testimonials-one__single h3 {
        margin-top: 10px;
    }

    .testimonials-one__single p {
        max-width: 85%;
    }

    .blog-card__more {
        margin-top: 40px;
    }

    .testimonials-one__single {
        padding-bottom: 0;
    }

    .testimonials-one__single:hover .blog-card__more {
        color: #00adef;
    }

    .testimonials-one__single:hover .blog-card__more {
        background-color: #fff;
        border-top-color: #e4e4e4;
    }
</style>
@endsection