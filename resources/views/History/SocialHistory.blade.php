<style>
    .gallery-testimonials-parallax .gallery-home-one {
        top: -57px;
        position: relative;
    }
    .gallery-testimonials-parallax {
    margin-top: 93px;
}
.gallery-testimonials-parallax .gallery-home-one {
    width: 60%;
    margin: auto;
}
.team-about__top-text {
    padding-right: 0px;
    text-align: center;
}
.gallery-testimonials-parallax .container {
    position: relative;
    z-index: 11;
    margin-top: 101px;
}
.gallery-card{
    text-align: center;
    padding: 19px 10px;
    /* padding-left: 10px; */
    background: #01aef0;
    color: #fff;
    font-size: 23px;
    font-weight: 700;
}
.selectedYear.active{
    background:#fff ;
    color: #01aef0;
}
</style>
<div class="col-md-12 col-lg-12 mt-5">
    <div class="block-title">
        <h3 class="text-center"><?=$_SESSION["lng"]=="ar"?"حركة التاريخ الاجتماعي":($_SESSION["lng"]=="fr"?"Mouvement d'histoire sociale":"Mouvement Social History")?></h3>
    </div><!-- /.block-title -->
</div>
<div class="gallery-testimonials-parallax">

    <section class="gallery-home-one ">

        <div class="container-fluid">

            <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 100, "slidesPerView": 8, "breakpoints": {
                "0": {
                    "spaceBetween": 0,
                    "slidesPerView": 1
                },
                "425": {
                    "spaceBetween": 0,
                    "slidesPerView": 1
                },
                "575": {
                    "spaceBetween": 30,
                    "slidesPerView": 2
                },
                "767": {
                    "spaceBetween": 30,
                    "slidesPerView": 2
                },
                "991": {
                    "spaceBetween": 20,
                    "slidesPerView": 3
                },
                "1289": {
                    "spaceBetween": 20,
                    "slidesPerView": 8
                },
                "1440": {
                    "spaceBetween": 20,
                    "slidesPerView": 8
                }
            }}'>
                <div class="swiper-wrapper" style="justify-content: center;">
                    @foreach ($MsHistory as $item)
                            <?php
                                $details=$item->details_en;
                                if($_SESSION["lng"]=="ar"){
                                    $details=$item->details_ar;
                                }else if($_SESSION["lng"]=="fr"){
                                    $details=$item->details_fr;
                                }
                            ?>
                        <div class="swiper-slide">
                            <div class="gallery-card selectedYear" details='{{$details}}'>
                                <span>{{$item->year}}</span>
                                <div class="gallery-content">
                                    <a><i class="fal fa-hand"></i></a>
                                </div>
                                {{-- <img src="assets/images/gallery/gallery-3-1.jpg" class="img-fluid" alt="">
                                <div class="gallery-content">
                                    <a href="assets/images/gallery/gallery-3-1.jpg" class="img-popup" aria-label="open image"><i class="fal fa-plus"></i></a>
                                </div> --}}
                            </div>
                        </div>
                    @endforeach


                </div><!-- /.swiper-wrapper -->
            </div><!-- /.swiper-container -->
        </div><!-- /.container -->
    </section><!-- /.gallery-home-one -->

    <section class="testimonials-two mb-5">
        <div class="container">
            <div class="team-about__top" style="    margin: 0px;">
                <div class="row align-items-center">
                    <div class="col-md-8 col-lg-8 mx-auto">
                        <p class="team-about__top-text text-center DetailsContainer"></p>
                    </div><!-- /.col-md-12 col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.team-about__top -->


        </div><!-- /.container -->
    </section><!-- /.testimonials-two -->
</div>
<script>
    $(".selectedYear").on("click",function(e){
        console.log("mazen");
        $(".DetailsContainer").html($(this).attr("details"));
        $(".selectedYear").removeClass("active");
        $(this).addClass("active");
    });
    $(document).ready(function(e){
        if($(".selectedYear").length>0){
            $(".selectedYear")[0].click();
        }

    });
</script>
