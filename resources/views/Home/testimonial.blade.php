  <section>
      <style>
          .ceo-wrp span:before {
                left: 15px;
                border: 0;
            }
      </style>
        <div class="block bottom-spac80 top-spac80 thm-layer opc9" style="position: relative;">
            <div class="fixed-bg patern-bg thm-bg back-blend-multiply" style="background-image: url(assets/images/image.png);
            background-position: bottom;background-repeat: no-repeat;bottom: -28px;top:unset;"></div>
            <div class="container">
                <div class="ceo-wrp TestimonialsSlider">
                    @foreach ($testimonials as $item)
                        <?php
                            $title=$item->title_en;
                            $details=$item->description_en;
                            if($_SESSION["lng"]=="ar"){
                                $title=$item->title_ar;
                                $details=$item->description_ar;
                            }else if($_SESSION["lng"]=="fr"){
                                $title=$item->title_fr;
                                $details=$item->description_fr;
                            }
                           // $details=substr(strip_tags($details), 0, 90);

                        ?>
                        <div>
                                <div class="row align-items-center">
                                    <div class="col-md-3 col-sm-4 col-lg-3">
                                        <div class="video-card-two__box">
                                            <img src="uploads/images/{{$item->image}}" alt="">
                                            <a style="{{empty($item->video_url)?"display:none;":""}}" href="{{$item->video_url}}" class="video-card-two__box-btn video-popup"><i class="fa fa-play"></i></a>

                                        </div>
                                        {{-- <span><img src="uploads/images/{{$item->image}}" alt="ceo-img.jpg" itemprop="image"></span> --}}
                                    </div>
                                <div class="col-md-9 col-sm-8 col-lg-9 mx-auto">
                                    <div class="ceo-msg">
                                        <p itemprop="description">“ <?=$details?> ”</p>
                                        <cite><?=$title?></cite>
                                    </div>
                                </div>
                            </div>
                        </div>

                    @endforeach
                    {{-- <div class="row align-items-center">
                        <div class="col-md-3 col-sm-4 col-lg-3">
                           <span><img src="assets/images/resources/ceo-img.jpg" alt="ceo-img.jpg" itemprop="image"></span>
                        </div>
                        <div class="col-md-9 col-sm-8 col-lg-9 mx-auto">
                            <div class="ceo-msg">
                                <p itemprop="description">“ One person can make all the difference for a child across the globe...Children International is living proof that, although helping just one person. ”</p>
                                <cite>- Shalynn p, Ci Sponsor Since 2019</cite>
                            </div>
                        </div>
                    </div> --}}

                </div><!-- Ceo Wrap Style 1 -->
            </div>
        </div>
    </section>
    <script>
        $(".TestimonialsSlider").slick({
            items: 1,
            dots: true,
            infinite: false,
            margin: 0,
            centerMode: false,
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            autoplay: true,
            autoplaySpeed: 5000,
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
            ]

        });
        </script>
