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
.blog-details__title {
    margin-top: 45px !important;
    margin-bottom: 6px !important;
}
.slick-slide img {
    border-radius: 10px;
}
.video-card-two {
    padding-top: 27px;
    position: relative;
    z-index: 11;
}
.about-counter .footer-social a {
    background-color: var(--thm-secondary) !important;
}
.about-counter .footer-social a:nth-child(2) {
    background-color: var(--thm-special) !important;
}
.about-counter .footer-social a:nth-child(3) {
    background-color: #00adef !important;
}
.cnt-inr{
    padding: 50px;
    background: #f1f1f1;
}
.form-one input[type=text], .form-one input[type=email], .form-one textarea, .form-one select {
    display: block;
    width: 100%;
    height: 51px;
    border-radius: 36.5px;
    background-color: #fff;
    color: #7e7e7e;
    font-size: 16px;
    font-weight: 500;
    border: none;
    outline: none;
    padding-left: 30px;
}
.headline {
    font-family: Rubik;
    font-size: 19px;
}
.payemntType{
    float: right;
    width: fit-content;
    border: 1px solid #ccc;
    border-radius: 10px;
    padding: 7px;
}
.custom-button {
    padding: 10px;
    border-radius: 0px;
    background-color: #00adef;
    color: #fff;
    width: 370px;
    display: block;
    margin: auto;
}

@media(max-width:700px){
    .payemntType {
        float: unset;
        width: fit-content;
        border: 1px solid #ccc;
        border-radius: 10px;
        padding: 7px;
    }
    .custom-button {
        padding: 10px;
        border-radius: 0px;
        background-color: #00adef;
        color: #fff;
        width: 260px;
        display: block;
        margin: auto;
    }
}
select{
    -moz-appearance: none;
}
</style>
{{-- <section class="image-section">
    <div class="block no-padding">
        <img src="assets/images/pg-tp-bg1.jpg" style="width:100%;">
    </div>
</section> --}}
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
                                <h1 class="mobile" style=" font-size: 47px; color:white !important"><?=$title?></h1>
                                

                            </div>
                        </div>
                    </div>    
    <!-- <img class="curvedImage" src="uploads/images/{{$pages->banners[0]->image}}"> -->
        <!-- <div class="curvedText">
            <h1><?=$title?></h1>

            <svg viewBox="0 0 1440 319">
                <path fill="#fff" fill-opacity="1" d="M0,32L48,80C96,128,192,224,288,224C384,224,480,128,576,90.7C672,53,768,75,864,96C960,117,1056,139,1152,149.3C1248,160,1344,160,1392,160L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
            </svg>
        </div> -->
    </div>
</div>
<section class="cause-details blog-details  pt-120">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-8 mx-auto">
                <div class="cause-details__content">
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
                    <?=$details?>

                </div>
            </div>

        </div>
    </div>
</section>
<section class="mt-5 mb-5">
    <div class="container">
        <div class="cnt-wrp">
            <div class="row">
                <div class="col-md-8 col-sm-12 col-lg-8 mx-auto">
                    <div class="cnt-inr">
                        <h2 class="headline pb-3" itemprop="headline"><?=$_SESSION["lng"]=="ar"?"تبرع الآن للمساعدة":($_SESSION["lng"]=="fr"?"Faites un don maintenant pour aider":"Donate Now For Helping")?></span></h2>

                        <form  class="contact-form-validated become-volunteer__form form-one mb-40">
                            <div class="row">
                                <div class="col-md-6 col-12" style="padding-bottom: 8px;">
                                    <div class="form-control" style="border: 1.9px  solid #ad0808;">
                                        <label for="amount" class="sr-only"><?=$_SESSION["lng"]=="ar"?"مبلغ":($_SESSION["lng"]=="fr"?"Montante":"Amount")?></label>
                                        <input type="text" name="amount" id="amount" placeholder="<?=$_SESSION["lng"]=="ar"?"مبلغ":($_SESSION["lng"]=="fr"?"Montante":"Amount")?>">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-control">
                                        <label for="currency" class="sr-only"><?=$_SESSION["lng"]=="ar"?"اختر العملة":($_SESSION["lng"]=="fr"?"Sélectionnez la devise":"Select Currency")?></label>
                                        <select name="currency"  id="currency">
                                            <option selected disabled ><?=$_SESSION["lng"]=="ar"?"اختر العملة":($_SESSION["lng"]=="fr"?"Sélectionnez la devise":"Select Currency")?></option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12 col-12" >
                                    <h2 class="headline pb-3 w-100 pt-5" style="font-size: 18px;"><?=$_SESSION["lng"]=="ar"?"أدخل معلومات فاتورتك":($_SESSION["lng"]=="fr"?"Entrez vos informations de facturation":"Enter your billing information")?></span></h2>
                                </div>
                                <div class="col-md-12 col-12 pb-3" style="margin-bottom: 16px;">
                                    <div class="row">
                                        <div class="col-md-3 MainLabel">
                                            <label for="email" style="margin-top: .5rem;"><?=$_SESSION["lng"]=="ar"?"عنوان بريد الكتروني":($_SESSION["lng"]=="fr"?"Adresse Email":"Email Address")?></label>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="form-control">
                                                <label for="email" class="sr-only">Email Address</label>
                                                <input type="text" name="email" id="email">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-12 pb-3" style="margin-bottom: 16px;">
                                    <div class="row">
                                        <div class="col-md-3 MainLabel">
                                            <label for="phone" style="margin-top: .5rem;"><?=$_SESSION["lng"]=="ar"?"رقم الهاتف":($_SESSION["lng"]=="fr"?"Numéro de téléphone":"Phone Number")?></label>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="form-control">
                                                <label for="phone" class="sr-only">phone</label>
                                                <input type="text" name="phone" id="phone">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-12 pb-3" style="margin-bottom: 16px;">
                                    <div class="row">
                                        <div class="col-md-3 MainLabel">
                                            <label for="name" style="margin-top: .5rem;"><?=$_SESSION["lng"]=="ar"?"الاسم الكامل":($_SESSION["lng"]=="fr"?"Nom complet":"Complete Name")?></label>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="form-control">
                                                <input type="text" name="name" id="name">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-12 pb-3" style="margin-bottom: 16px;">
                                    <div class="row">
                                        <div class="col-md-3 MainLabel">
                                            <label for="city" style="margin-top: .5rem;"><?=$_SESSION["lng"]=="ar"?"المدينة / الولاية والرمز البريدي":($_SESSION["lng"]=="fr"?"Ville / État et code postal":"City / State & Postal Code")?></label>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="form-control">
                                                <input type="text" name="city" id="city">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-12 pb-3 MainLabel" style="margin-bottom: 16px;">
                                    <div class="row">
                                        <div class="col-md-3" >
                                            <label for="state_id" style="margin-top: .5rem;"><?=$_SESSION["lng"]=="ar"?"الولاية / الرمز البريدي":($_SESSION["lng"]=="fr"?"État / Code postal":"State / Zipcode")?></label>
                                        </div>
                                        <div class="col-md-5" style="padding-bottom: 8px;">
                                            <div class="form-control" style="border: 1.9px  solid #ad0808;">
                                                <select name="state_id"  id="state_id">
                                                    <option selected disabled ><?=$_SESSION["lng"]=="ar"?"الولاية":($_SESSION["lng"]=="fr"?"État":"State")?></option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4" >
                                            <div class="form-control" style="border: 1.9px  solid #ad0808;">
                                                <input type="text" name="zipcode" id="zipcode" placeholder="<?=$_SESSION["lng"]=="ar"?"الرمز البريدي":($_SESSION["lng"]=="fr"?"Code postal":"Zipcode")?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-12 pb-3 MainLabel" style="margin-bottom: 16px;">
                                    <div class="row">
                                        <div class="col-md-3" >
                                            <label for="state_id" style="margin-top: .5rem;"><?=$_SESSION["lng"]=="ar"?"البلد":($_SESSION["lng"]=="fr"?"Pays":"Country")?></label>
                                        </div>
                                        <div class="col-md-9" style="padding-bottom: 8px;">
                                            <div class="form-control" style="border: 1.9px  solid #ad0808;">
                                                <select name="state_id"  id="state_id">
                                                    <option selected disabled ><?=$_SESSION["lng"]=="ar"?"البلد":($_SESSION["lng"]=="fr"?"Pays":"Country")?></option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-12">
                                    <h2 class="headline pb-3 w-100 pt-5" style="font-size: 18px;"><?=$_SESSION["lng"]=="ar"?"أدخل معلومات الدفع الخاصة بك":($_SESSION["lng"]=="fr"?"Entrez vos informations de paiement":"Enter Your Payment Information")?></span></h2>
                                </div>
                                <div class="col-md-12 col-12 pb-3">
                                    <div class="row">
                                        <div class="col-md-4" style="flex: 0 0 36.333333%;max-width: 36.333333%;">
                                            <input type="radio" name="type" style="margin-top: 17px;">
                                                <div class="payemntType" >
                                                    <img src="assets/images/pymnt-mthd-img1.jpg">
                                                </div>
                                        </div>
                                        <div class="col-md-2">
                                            <input type="radio" name="type" style="margin-top: 17px;">
                                            <div class="payemntType" >
                                                <img src="assets/images/pymnt-mthd-img2.jpg">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-control form-control-full" style="text-align: center;margin: auto;margin-top: 25px;">
                                    <button type="submit" class="thm-btn dynamic-radius custom-button"><?=$_SESSION["lng"]=="ar"?"تبرع الآن":($_SESSION["lng"]=="fr"?"Faire un don maintenant":"Donate Now")?></button>
                                </div>
                                    {{-- <div class="w-100" style="text-align: center; padding-top: 51px;">
                                        <a class="custom-button" href="{{url("/")}}">Donate Now</a>
                                    </div> --}}
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<style>
    .form-one .thm-btn {
    padding: 10px;
}
label.error {
    position: absolute;
    color: red;
}
</style>
<script>
    $(document).ready(function(e){

        if ($(".become-volunteer__form").length) {
            $(".become-volunteer__form").validate({
            // initialize the plugin
            rules: {
                amount: {
                    required: true
                },
                currency: {
                    required: true
                },
                phone: {
                    required: true
                },
                name: {
                    required: true
                },

                email: {
                required: true,
                email: true
                },
                city: {
                required: true
                },
                state_id: {
                required: true
                },
                zipcode: {
                required: true
                }
            },
            submitHandler: function (form) {
                // sending value with ajax request
                // $.post($(form).attr("action"), $(form).serialize(), function (
                // response
                // ) {
                //     response=JSON.parse(response);
                //     if(response.status){
                //         form.reset();
                //         Swal.fire({
                //             title: 'Success!',
                //             text: 'Thank you for contact us',
                //             icon: 'success',
                //             confirmButtonText: 'ok'
                //             });
                //     }else{
                //         Swal.fire({
                //             title: 'Error!',
                //             text: 'Please try again later',
                //             icon: 'error',
                //             confirmButtonText: 'ok'
                //             });
                //     }
                // });
                return false;
            }
            });
        }
    });
</script>
@endsection
