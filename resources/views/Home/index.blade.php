@extends('layout.layout')
@section('content')

<section class="main-slider" style="opacity:inherit">
    <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true,
            "effect": "fade",
            "pagination": {
            "el": "#main-slider-pagination",
            "type": "bullets",
            "clickable": true
            },
            "autoplay": {
            "delay": 5000
            }}'>
        <div class="swiper-wrapper">
            @foreach ($pages[0]->banners as $row)
                <div class="swiper-slide">
                    <div class="image-layer" style=" opacity:0.6; background-image: url(uploads/images/{{$row->image}});"></div>
                    <!-- /.image-layer -->
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-xl-7 col-lg-12 text-center">
                                {{-- <p>Help the poor in need</p> --}}
                                <h2>
                                    <?=$_SESSION["lng"]=="ar"?$row->title_ar:($_SESSION["lng"]=="fr"?$row->title_fr:$row->title_en)?>                                    
                                </h2>
                                @if (!empty($row->btn_title_ar)&&!empty($row->btn_URL))
                                    <a href="{{$row->btn_URL}}" data-target=".donate-options" class="scroll-to-target thm-btn dynamic-radius"><?=$_SESSION["lng"]=="ar"?$row->btn_title_ar:($_SESSION["lng"]=="fr"?$row->btn_title_fr:$row->btn_title_ar)?></a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            {{-- <div class="swiper-slide">
                <div class="image-layer" style="background-image: url(assets/images/main-slider/slider-1-1.jpg);"></div>

                <div class="container">
                    <div class="row justify-content-end">
                        <div class="col-xl-7 col-lg-12 text-right">
                            <p>Help the poor in need</p>
                            <h2>Lend the <br> helping hand <br> get involved.</h2>
                            <a href="#" data-target=".donate-options" class="scroll-to-target thm-btn dynamic-radius">Start Donating</a>

                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="image-layer" style="background-image: url(assets/images/main-slider/slider-1-2.jpg);"></div>

                <div class="container">
                    <div class="row justify-content-end">
                        <div class="col-xl-8 col-lg-12 text-right">
                            <p>Help the poor in need</p>
                            <h2>Donat<span class="iconic-text">i</span>on <br> Can Change <br> Life</h2>
                            <a href="#" data-target=".donate-options" class="scroll-to-target thm-btn dynamic-radius">Start Donating</a>

                        </div>
                    </div>
                </div>
            </div> --}}

        </div>
        <div class="swiper-pagination" id="main-slider-pagination"></div>
    </div>
</section>
<style>
    .main-slider .container {
    padding-top: 248px;
    padding-bottom: 120px;
}
#main-slider-pagination .swiper-pagination-bullet.swiper-pagination-bullet-active {
    opacity: 0;
}
</style>
@include('Home/about')
@include('Home/OurPrograms')
@include('Home/news')
@include('Home/testimonial')
{{-- @include('Home/OurCenters') --}}
@endsection
