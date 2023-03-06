<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MS</title>
    <!-- favicons Icons -->
    <base href="{{url("/")}}/content/">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png">
    <link rel="manifest" href="assets/images/favicons/site.webmanifest">
    <meta name="description" content="Mouvement Social">
    @if (isset($isTeam))
        {{-- <link rel="stylesheet" href="assets/v2/css/icons.min.css">
        <link rel="stylesheet" href="assets/v2/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/v2/css/bootstrap-select.min.css">
        <link rel="stylesheet" href="assets/v2/css/animate.min.css">
        <link rel="stylesheet" href="assets/v2/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/v2/css/fancybox.min.css">
        <link rel="stylesheet" href="assets/v2/css/perfect-scrollbar.css">
        <link rel="stylesheet" href="assets/v2/css/slick.css">
        <link rel="stylesheet" href="assets/v2/css/style.css">
        <link rel="stylesheet" href="assets/v2/css/responsive.css">
        <link rel="stylesheet" href="assets/v2/css/color.css"> --}}
    @endif


    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/swiper.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/azino-icons.css">
    <link rel="stylesheet" href="assets/css/odometer.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/bootstrap-select.min.css">

    <!-- template styles -->
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/main/css/main.css">
    <link rel="stylesheet" type="text/css" href="assets/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="assets/slick/slick-theme.css"/>


    <script src="assets/js/jquery-3.5.1.min.js"></script>
    <script src="assets/slick/slick.js" type="text/javascript" charset="utf-8"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <style>
        .mainLogo{
            width: 100%;
        }
        .whiteLogo{
            width: 145px;
        }
        @media(max-width:700px){
            .mainLogo{
                width: 68%;
            }
        }
        .blog-card__content p {
            height: 71px;
        }
        .blog-card__content h3 {
            height: 71px;
        }
        .blog-card__image {
            height: 266px;
        }
        .slick-track {
            margin-left: unset;
            margin-right: unset;
        }

        :focus {
            outline: unset !important;
        }
        .bootstrap-select .dropdown-toggle:focus, .bootstrap-select>select.mobile-device:focus+.dropdown-toggle {
            outline: unset !important;
            outline: unset !important;
            outline-offset: unset !important;
        }
        .main-header__social .dropdown.bootstrap-select{
            padding-top: 3px;
        }
        /* .thm-btn {
            background-color: #00adef;
            color: #fff;
            border-bottom-left-radius: 33px !important;
            border-top-left-radius: 33px !important;
            border-bottom-right-radius: 0px;
            border-top-right-radius: 0px;
            padding: 12px 25px !important;
        }
        .thm-btn:hover {
            background-color: #fff;
            color: #00adef;
        } */
        .footer-widget__newsletter input {
            width: 80%;
        }

        /* .footer-widget__newsletter:before {
    background-color: #00adef;
}
.footer-widget__newsletter:before {
    content: "";
    height: 100%;
    left: 0;
    position: absolute;
    top: 0;
    width: 100%;
    z-index: -1;
} */
    </style>

    @if ($_SESSION["lng"]=="ar")
        <link rel="stylesheet" href="assets/css/main_ar.css">

    @elseif ($_SESSION["lng"]=="fr")
        <style>
            .main-menu {
                padding-left: 20px;
                padding-right: 20px;
            }
            @media (min-width: 1281px){
                .main-menu .main-menu__list > li + li, .stricky-header .main-menu__list > li + li {
                    margin-left: 19px;
                }
            }
            .main-menu .main-menu__list > li > a, .stricky-header .main-menu__list > li > a {
                font-size: 15px;
            }
        </style>
    @endif

    <style>
        .mainLogo{
            width: 100%;
        }
        .whiteLogo{
            width: 145px;
        }
        @media(max-width:700px){
            .ceo-msg {
                padding: 0px !important;
            }
            .mainLogo{
                width: 68%;
            }
        }
        .blog-card__content p {
            height: 71px;
        }
        .blog-card__content h3 {
            height: 71px;
        }
        .blog-card__image {
            height: 266px;
        }
        .slick-track {
            margin-left: unset;
            margin-right: unset;
        }

        :focus {
            outline: unset !important;
        }
        .bootstrap-select .dropdown-toggle:focus, .bootstrap-select>select.mobile-device:focus+.dropdown-toggle {
            outline: unset !important;
            outline: unset !important;
            outline-offset: unset !important;
        }
        .main-header__social .dropdown.bootstrap-select{
            padding-top: 3px;
        }
        .main-slider .thm-btn {
            background-color: #00adef;
            color: #fff;
            border-bottom-left-radius: 33px !important;
            border-top-left-radius: 33px !important;
            border-bottom-right-radius: 0px;
            border-top-right-radius: 0px;
            padding: 12px 25px !important;
        }
       .main-slider .thm-btn:hover {
            background-color: #fff;
            color: #00adef;
        }
        .blog-card__content p {
            padding: 0px 23px;
        }
        .gallery-card:hover .gallery-content {
            opacity: 0;
            cursor: pointer;
        }
        .slick-dots li {
            margin: 0 0px;
        }
        .mobile-nav__content .main-menu__list li a.expanded {
            color: #ffffff;
        }
        .mobile-nav__content .main-menu__list li a button {
            background-color: transparent;
            color: #ffffff;
        }
    </style>
</head>

<body>
    <div class="preloader">
        <img class="preloader__image" src="assets/images/loader.png" alt="">
    </div><!-- /.preloader -->
    <div class="page-wrapper">

        <header class="main-header">
            <div class="container">
                <div class="inner-container">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-2">
                            <div class="logo-box">
                                <a href="{{url("/")}}" aria-label="logo image"><img src="assets/images/logo.png" class="mainLogo"></a>
                                <span class="fa fa-bars mobile-nav__toggler"></span>
                            </div><!-- /.logo-box -->
                        </div>
                        <!--<div class="col-sm-12 col-md-12 col-lg-12 col-xl-1">
                            <div class="logo-box">
                             
                            </div>--><!-- /.logo-box -->
                        <!--</div>--><!-- /.col-sm-12 -->
                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-10 d-none d-md-none d-lg-none d-xl-block pad0">
                            <div class="main-header__top" style="justify-content: flex-end;">

                                <div class="main-header__social">
                                    <a href="https://twitter.com/MouvementSocia2?s=09" target="_blank" aria-label="twitter"><i class="fab fa-twitter"></i></a>
                                    <a href="https://www.facebook.com/Mouvementsociallb" target="_blank" aria-label="facebook"><i class="fab fa-facebook-square"></i></a>
                                    <a href="https://youtube.com/channel/UCp8LmDjQryWsmReLpskjhmg" target="_blank" aria-label="youtube"><i class="fab fa-youtube"></i></a>
                                    <a href="https://www.instagram.com/mouvement.social/" target="_blank" aria-label="instagram"><i class="fab fa-instagram"></i></a>
                                    {{-- <a href="#" aria-label="twitter"><i class="fab fa-twitter"></i></a>
                                    <a href="#" aria-label="facebook"><i class="fab fa-facebook-square"></i></a>
                                    <a href="#" aria-label="pinterest"><i class="fab fa-pinterest-p"></i></a>
                                    <a href="#" aria-label="instagram"><i class="fab fa-instagram"></i></a> --}}
                                    <div class="main-header__language">
                                        <div class="main-header__language-image">
                                            <img src="assets/flags/{{$_SESSION["lng"]}}.png" alt="" style="width: 27px;">
                                        </div><!-- /.main-header__language-image -->
                                        <label for="language-header" class="sr-only">select language</label>
                                        <select class="selectpicker" id="language-header">
                                            <option value="en" {{$_SESSION["lng"]=="en"?"selected":""}}>English</option>
                                            <option value="fr" {{$_SESSION["lng"]=="fr"?"selected":""}}>French</option>
                                            <option value="ar" {{$_SESSION["lng"]=="ar"?"selected":""}}>Arabic</option>
                                        </select>
                                    </div>
                                </div><!-- /.main-header__social -->

                            </div><!-- /.main-header__top -->
                            <nav class="main-menu dynamic-radius" style="margin-left:50px">
                                <ul class="main-menu__list">
                                    <li class="{{$_SESSION["page"]==1?"active":""}}">
                                        <a href="{{url("/")}}"><?=$_SESSION["lng"]=="ar"?"الصفحة الرئيسية":($_SESSION["lng"]=="fr"?"Maison":"Home")?></a>
                                    </li>
                                    
                                    <li class="dropdown {{$_SESSION["page"]==2?"active":""}}"><a><?=$_SESSION["lng"]=="ar"?"من نحن":($_SESSION["lng"]=="fr"?"À propos de":"About Us")?></a>
                                        <ul>
                                            <li>
                                                <a href="{{url("/history")}}"><?=$_SESSION["lng"]=="ar"?"القصة":($_SESSION["lng"]=="fr"?"L'histoire":"The Story")?></a>
                                            </li>
                                            <li>
                                                <a href="{{url("/values")}}"><?=$_SESSION["lng"]=="ar"?"محاور عملنا":($_SESSION["lng"]=="fr"?"Nos axes de travail":"Our Work Axes")?></a>
                                            </li>
                                            <li>
                                                <a href="{{url("/centers")}}"><?=$_SESSION["lng"]=="ar"?"مراكزنا":($_SESSION["lng"]=="fr"?"Nos Centres":"Our Centers")?></a>
                                            </li>
                                            <li>
                                                <a href="{{url("/team")}}"><?=$_SESSION["lng"]=="ar"?"المجلس التنفيذي":($_SESSION["lng"]=="fr"?"Conseil exécutif":"Executive Board")?></a>
                                            </li>
                                            <li>
                                                <a href="{{url("/AnnualReport")}}"><?=$_SESSION["lng"]=="ar"?"تقرير سنوي":($_SESSION["lng"]=="fr"?"Rapport annuel":"Annual Report")?></a>
                                            </li>
                                            <li hidden>
                                                <a href="{{url("/founders")}}"><?=$_SESSION["lng"]=="ar"?"المؤسسون":($_SESSION["lng"]=="fr"?"Fondateurs":"Founders")?></a>
                                            </li>
                                            <li hidden>
                                                <a href="{{url("/about")}}"><?=$_SESSION["lng"]=="ar"?"إجراءات مس":($_SESSION["lng"]=="fr"?"Actions MS":"MS Actions")?></a>
                                            </li>                                                                                     
                                        </ul>
                                    </li>
                                    
                                    <li  class="dropdown {{$_SESSION["page"]==3?"active":""}}"><a><?=$_SESSION["lng"]=="ar"?"العمل الأرضي":($_SESSION["lng"]=="fr"?"Travail au sol":"Ground Work")?></a>                                        
                                        <ul>
                                                        @foreach ($ProgramsCategoryMenu as $key=>$item)
                                                            <?php
                                                            $title=$item->cat_name_en;
                                                            $programsCategoryId=$item->programs_category_id;

                                                            if($_SESSION["lng"]=="ar"){
                                                                $title=$item->cat_name_ar;
                                                                
                                                            }else if($_SESSION["lng"]=="fr"){
                                                                $title=$item->cat_name_fr;
                                                                
                                                            }                                                            
                                                        ?>
                                            <li>
                                                <a href="{{url("/programs/$programsCategoryId")}}"><?=$title?></a>                                                
                                            </li>
                                                        @endforeach
                                           
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="{{url("/publications")}}"><?=$_SESSION["lng"]=="ar"?"مكتبتنا":($_SESSION["lng"]=="fr"?"Notre bibliothèque":"Our Library")?></a>
                                    </li>

                                    <li hidden><a href="{{url("/publications")}}"><?=$_SESSION["lng"]=="ar"?"مكتبتنا":($_SESSION["lng"]=="fr"?"Notre bibliothèque":"Our Library")?></a>
                                        <ul hidden>                                                                                        
                                            <li>
                                            <a href="{{url("/media")}}"><?=$_SESSION["lng"]=="ar"?"أخبار":($_SESSION["lng"]=="fr"?"Nouvelles":"Media")?></a>
                                            </li>
                                            
                                            <li >
                                                <a href="{{url("/publications")}}"><?=$_SESSION["lng"]=="ar"?"المكتبات":($_SESSION["lng"]=="fr"?"Bibliothèque MS":"MS Library ")?></a>
                                            </li>
                                            <li>
                                            <a href="{{url("/testimonials")}}"><?=$_SESSION["lng"]=="ar"?"الشهادات":($_SESSION["lng"]=="fr"?"Témoignages":"Testimonials")?></a>
                                            </li>
                                            

                                            <li hidden>
                                                <a href="{{url("/centers")}}"><?=$_SESSION["lng"]=="ar"?"تمويل":($_SESSION["lng"]=="fr"?"La finance":"Finance")?></a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li hidden  class="{{$_SESSION["page"]==10?"active":""}}">
                                        <a href="{{url("/centers")}}"><?=$_SESSION["lng"]=="ar"?"مراكزنا":($_SESSION["lng"]=="fr"?"Nos Centres":"Our Centers")?></a>
                                    </li>
                                    <li hidden  class="{{$_SESSION["page"]==4?"active":""}}">
                                        <a href="{{url("/media")}}"><?=$_SESSION["lng"]=="ar"?"أخبار":($_SESSION["lng"]=="fr"?"Nouvelles":"Media")?></a>
                                    </li>
                                    {{-- <li  class="{{$_SESSION["page"]==5?"active":""}}">
                                        <a href="{{url("/finance")}}"><?=$_SESSION["lng"]=="ar"?"تمويل":($_SESSION["lng"]=="fr"?"La finance":"Finance")?></a>
                                    </li> --}}
                                    <li hidden  class="{{$_SESSION["page"]==6?"active":""}}">
                                        <a href="{{url("/publications")}}"><?=$_SESSION["lng"]=="ar"?"المكتبات":($_SESSION["lng"]=="fr"?"Bibliothèque MS":"MS Library ")?></a>
                                    </li>
                                    <li hidden  class="{{$_SESSION["page"]==7?"active":""}}">
                                        <a href="{{url("/testimonials")}}"><?=$_SESSION["lng"]=="ar"?"الشهادات":($_SESSION["lng"]=="fr"?"Témoignages":"Testimonials")?></a>
                                    </li>
                                    <li  class="dropdown {{$_SESSION["page"]==8?"active":""}}"><a><?=$_SESSION["lng"]=="ar"?"اعمل معنا":($_SESSION["lng"]=="fr"?"Travaille avec nous":"Work With Us")?></a>
                                        <ul>
                                            <li><a href="{{url("/")}}/careers"><?=$_SESSION["lng"]=="ar"?"الوظائف":($_SESSION["lng"]=="fr"?"Carrières":"Careers")?></a></li>
                                            <li><a href="{{url("/")}}/calls"><?=$_SESSION["lng"]=="ar"?"المناقصات":($_SESSION["lng"]=="fr"?"Appels d'offres":"Tenders")?></a></li>
                                            
                                            <li><a href="{{url("/donate")}}"><?=$_SESSION["lng"]=="ar"?"تبرع":($_SESSION["lng"]=="fr"?"Faire un don":"Donate")?></a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{url("/volunteer")}}"><?=$_SESSION["lng"]=="ar"?"تطوع":($_SESSION["lng"]=="fr"?"Bénévole":"Volunteer")?></a></li>
                                    <li class="{{$_SESSION["page"]==9?"active":""}}"><a href="{{url("/contact")}}"><?=$_SESSION["lng"]=="ar"?"اتصل بنا":($_SESSION["lng"]=="fr"?"Nous contacter":"Contact Us")?></a></li>
                                    {{-- <li class="search-btn search-toggler">
                                        <a href="#"><i class="azino-icon-magnifying-glass"></i></a>
                                    </li> --}}
                                </ul>
                                <!-- /.main-menu__list -->
                            </nav>
                            <!-- /.main-menu -->
                            <div class="main-header__info">
                                {{-- <ul class="list-unstyled main-header__info-list">
                                    <li>
                                        <i class="azino-icon-email"></i>
                                        <a href="mailto:needhelp@azino.com">needhelp@azino.com</a>
                                    </li>
                                    <li>
                                        <i class="azino-icon-telephone"></i>
                                        <a href="tel:666-888-0000">666 888 0000</a>
                                    </li>
                                </ul> --}}

                                <!-- /.main-header__language -->
                            </div><!-- /.main-header__info -->
                        </div><!-- /.col-sm-12 -->
                    </div><!-- /.row -->
                </div><!-- /.inner-container -->
            </div><!-- /.container -->
        </header><!-- /.main-header -->


        <div class="stricky-header stricked-menu">
            <div class="container">
                <div class="logo-box">
                    <a href="{{url('/')}}"><img class="whiteLogo" src="assets/images/logo3.png" width="101" alt=""></a>
                </div><!-- /.logo-box -->
                <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
            </div><!-- /.container -->
        </div><!-- /.stricky-header -->
<script>
    $("#language-header").on("change",function(e){
        $.ajax({
                type: "POST",
                url: "{{url('/')}}/lng",
                data: {lng:$(this).val()},
                dataType: 'json',
                success: function (data) {
                   window.location.reload();
                }
            });
    });

</script>
<style>
    .main-slider h2 {
        font-size: 47px;
        min-height: 280px;
    }
    p,span,div,h1,h2,h3,h4,h5,h6 {
        line-height: 1.5 !important;
    }
    p,div{
        /* text-align: justify !important; */
    }
    .gallery-home-one .swiper-container {
        overflow: unset;
    }
    .footer-bottom {
        background-color: #d7d7d7;
    }
    .main-footer {
        background-color: #f1f1f1;
    }
    .main-footer::before {
        content: unset;
    }
    .footer-widget__contact li a {
        color: #7e7e7e;
    }

    .footer-widget__about p ,.site-footer p{
        color: #7e7e7e;
    }
    .footer-social a {
        color: #7e7e7e !important;
    }
    .footer-bottom .container p {
        color: #fff;
    }
    .footer-bottom .container .scroll-to-top {
        background-color: #d7d7d7;
    }
    .main-menu li.active a{
        position: relative;

    }
    .main-menu__list li.active a::before{
        content: '';
        position: absolute;
        width: 100%;
        bottom: 0px;
        height: 2px;
        background: #fff;
    }
    .main-menu__list li.active a{
        position: relative;

    }

</style>
<style>
    .curved-div {
    background: #fff;
    color: #ccc !important;
    text-align: center;
    overflow: hidden;
    margin-top: 160px;
    }
    .curved-div h1 {
    font-size: 6rem;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }
    .curved-div p {
    font-size: 1rem;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }

    .curved-div svg {
            position: absolute;
            width: 200%;
            height: 114px;
            <?=$_SESSION["lng"]=="ar"?"transform: rotate(270deg);":"transform: rotate(90deg);"?>
            top: 9pc;
            <?=$_SESSION["lng"]=="ar"?"right: 25px;":"left: 25px;"?>

        }
    .curvedText{
        width: 27%;
        position: relative;
        background: #fff;
        color: #ccc !important;
        top: 0px;
        height: -webkit-fill-available;
    }
    .curvedText h1{
        padding-top: 50%;
        color: #ccc !important;
        text-align: center;
        margin: auto;
        width: 90%;
        font-size: 40px;
    }
    .curvedBackgroundImage{
    width: 100%;
    position: relative;

    background-position: center  !important;
    background-repeat: no-repeat !important;
    background-size: cover !important;
    display: flex;
    height: 445px;
    }
    .curvedImage {
    width: 0px;
    visibility: hidden;
    border-radius: 276px 0px 0px 0px;
    }
    .dropdown li a::before {
        content: unset !important;
    }

    .thm-btn2 {
        border-radius: 10px !important;
    }

    @media(max-width:700px){
        .curved-div {
            margin-top: 0px;
        }
        .curvedText {
            display: none;
        }
    }
    /* @if ($_SESSION["lng"]!="ar")
        .main-menu {
            <?=$_SESSION["lng"]=="fr"?"padding-left: 18px;padding-right: 18px;":""?>
        }
        .main-menu .main-menu__list > li > a, .stricky-header .main-menu__list > li > a {
            <?=$_SESSION["lng"]=="fr"?"font-size: 14px;":""?>
        }
        @media (min-width: 1281px){
            .main-menu .main-menu__list > li + li, .stricky-header .main-menu__list > li + li {
                margin-left: 18px;
            }
        }
       .pad0 {
            padding: 0px;
        }
    @endif */
    @if ($_SESSION["lng"]!="ar")
        @media (min-width: 1281px){
            .main-menu .main-menu__list > li + li, .stricky-header .main-menu__list > li + li {
                <?=$_SESSION["lng"]=="fr"?"margin-left: 18px;":"margin-left: 32px;"?>
            }
        }
    @endif

    </style>
