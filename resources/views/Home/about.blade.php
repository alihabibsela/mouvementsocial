<style>
    .about-counter__image-content {
        background-color: #00adef;
    }
    @if ($_SESSION["lng"]=="ar")
    .about-counter__image-content {
            right: 0px;
            left: unset;
            border-top-left-radius: 0px;
            border-bottom-right-radius: 0px;

            border-top-right-radius: 15px;
            border-bottom-left-radius: 15px;
        }
    @endif
    .p0{
    padding: 0px !important;
}
@media(min-width:800px){
.about-counter .container {
    position: relative;
    z-index: 11;
    width: 92%;
    max-width: 100%;
   @if ($_SESSION["lng"]=="ar")
        padding-left: 0px;
        margin: auto auto auto 0px;
    @else
        padding-right: 0px;
        margin: auto 0px auto auto;
   @endif
}
.about-counter__image > img {
    border-radius: unset;
    inline-size: max-content;
    height: max-content;
    block-size: max-content;
    @if ($_SESSION["lng"]=="ar")
        border-top-right-radius: 15px;
        border-bottom-right-radius: 15px;
    @else
        border-top-left-radius: 15px;
        border-bottom-left-radius: 15px;
   @endif

}
@-moz-document url-prefix() {
    .about-counter__image > img {
    height: 700px;

}
}
}
</style>
<section class="about-counter pt-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="block-title">
                    {{-- <p><img src="assets/images/shapes/heart-2-1.png" width="15" alt="">Help People Now</p> --}}
                    <h3><?=$_SESSION["lng"]=="ar"?$pages[1]->name_ar:($_SESSION["lng"]=="fr"?$pages[1]->name_fr:$pages[1]->name_en)?></h3>
                </div><!-- /.block-title -->
                <?php
                $details=$pages[1]->details_en;
                if($_SESSION["lng"]=="ar"){
                    $details=$pages[1]->details_ar;
                }else if($_SESSION["lng"]=="fr"){
                    $details=$pages[1]->details_fr;
                }
                $details=substr(strip_tags($details, '<br>'), 0, 500);
                ?>
                <p class="about-counter__text"><?=$details?> </p>
                    <div class="w-100" style="text-align: center; padding-top: 28px;">
                        <a class="custom-button" href="{{url("/values")}}"><?=$_SESSION["lng"]=="ar"?"قيمنا":($_SESSION["lng"]=="fr"?"Nos valeurs":"Our Values")?></a>
                    </div>
                {{-- <ul class="list-unstyled ul-list-one">
                    <li>Nsectetur cing elit.</li>
                    <li>Suspe ndisse suscipit sagittis leo.</li>
                    <li>Entum estibulum dignissim posuere.</li>
                </ul>
                <div class="about-counter__count">
                    <h3 class="odometer" data-count="8860">00</h3>
                    <p>Donation campaigns <br> are running</p>
                </div> --}}
            </div>
            <div class="col-lg-7">
                <div class="about-counter__image clearfix wow fadeInRight" data-wow-duration="1500ms">
                    <div class="about-counter__image-content">
                        <img src="assets/images/shapes/about-count-heart-1-1.png" alt="">
                        <p>We’re here to support you every step of the way.</p>
                    </div>
                    <img src="uploads/images/{{$pages[1]->image}}" alt="" class="float-left" style="width:100%;">
                </div><!-- /.about-counter__image -->
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
    </div><!-- /.containerr -->
</section>
