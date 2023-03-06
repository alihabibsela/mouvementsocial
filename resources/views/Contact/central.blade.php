<style>
    .blog-details__title_new {
        padding-bottom: 5px;
        margin-bottom: 15px !important;
        font-size: 26px !important;
        font-weight: 600;
        border-bottom: 1px solid #00adef;
        width: fit-content;
    }

    .cause-details__content {
        background: #fff;
        border-radius: 10px;
        padding: 25px;
        box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;
        height: 470px;
    }

    .cause-details__content h4 {
        font-family: Rubik;
        font-size: 20px;
    }

    .cause-details__content p {
        line-height: 21px;
    }

    /* .slick-slide {
    padding: 40px;
} */
    .slick-slide {
        padding: 17px;
    }

    @media(max-width:700px) {
        .slick-dots {
            display: none !important;
        }
    }

    .areaHidden {
        display: none;
    }

    select {
        -moz-appearance: none;
        display: block;
        width: 100%;
        height: 33px;
        border-radius: 36.5px;
        background-color: #fff;
        color: #7e7e7e;
        font-size: 16px;
        font-weight: 500;
        border: none;
        outline: none;
        padding-left: 30px;
    }

    .form-control {
        width: 233px;
    }

    .form-control {
        height: auto;
    }

    a.blog-card__more {
        position: absolute;
        bottom: 0;
        left: 15px;
        width: calc(100% - 30px);
    }
</style>

<section class="cause-details blog-details  pt-50 pb-3">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12 mx-auto">
                <?php
                $details = $pages->details_en;
                if ($_SESSION["lng"] == "ar") {
                    $details = $pages->details_ar;
                } else if ($_SESSION["lng"] == "fr") {
                    $details = $pages->details_fr;
                }
                ?>
                <div class="">
                    <?php echo  $details; ?>
                </div>
            </div>

        </div>
    </div>
</section>
<section class="cause-details blog-details mb-3">

    <div class="container pt-20">
        <div class="row">
            <div class="col-md-12 col-lg-12" style="padding-left: 57px;">
                <div class="row">
                    {{-- <div class="col-md-3" >
                            <label for="state_id" style="margin-top: .5rem;"><?= $_SESSION["lng"] == "ar" ? "البلد" : ($_SESSION["lng"] == "fr" ? "Pays" : "Country") ?></label>
                        </div> --}}
                    <div class="col-md-12" style="padding-bottom: 8px;">
                        <div class="form-control" style="border: 1.9px  solid #ad0808;    margin: auto;">
                            <select name="area_id" id="area_id">
                                {{-- <option selected disabled ><?= $_SESSION["lng"] == "ar" ? "منطقة" : ($_SESSION["lng"] == "fr" ? "Région" : "Area") ?></option> --}}
                                <option value="0" selected><?= $_SESSION["lng"] == "ar" ? "كل المنطقة" : ($_SESSION["lng"] == "fr" ? "Toute la région" : "All area") ?></option>
                                @foreach ($area as $item)
                                <option value="{{$item->area_id}}"><?= $_SESSION["lng"] == "ar" ? $item->name_ar : ($_SESSION["lng"] == "fr" ? $item->name_fr : $item->name_en) ?></option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="cause-details blog-details pb-5 mb-5" style="background: #e6e6e6;">

    <div class="container pt-5" {{sizeof($Centers)>0?"":"style=display:none;"}}>
        <div class="row">
            <div class="col-md-12 col-lg-8" style="padding-left: 57px;">
                <h3 class="blog-details__title blog-details__title_new"><?= $_SESSION["lng"] == "ar" ? $CentersType[1]->centers_type_ar : ($_SESSION["lng"] == "fr" ? $CentersType[1]->centers_type_fr : $CentersType[1]->centers_type_en) ?></h3>
            </div>
        </div>
        <div class="row">

            @foreach ($Centers as $item)
            <?php
            $title = $item->name_en;
            $details = $item->address_en;
            $text = $item->text_en;
            if ($_SESSION["lng"] == "ar") {
                $title = $item->name_ar;
                $details = $item->address_ar;
                $text = $item->text_ar;
            } else if ($_SESSION["lng"] == "fr") {
                $title = $item->name_fr;
                $details = $item->address_fr;
                $text = $item->text_fr;
            }
            ?>
            <div class="col-md-4 col-lg-4 mb-3 area{{$item->area_id}} ItemArea">
                <div class="comment-one">
                    <a href="{{url('/')}}/centers/{{$item->name_en}}" style="color: #8a8a8a;">
                        <div class="cause-details__content">
                            <h4><?= $title ?></h4>
                            <?php if (!empty(str_replace("&nbsp;", "", $text))) { ?>
                                <p><?php echo substr(strip_tags($text), 0, 90); ?>...</p>
                            <?php } ?>
                            <p><i class="fas fa-map-marker"></i> <?= $details ?></p>
                            <p <?= empty($item->phone) ? "style=display:none;" : "" ?>><i class="fas fa-phone"></i> <?= $item->phone ?></p>
                            <p <?= empty($item->fax) ? "style=display:none;" : "" ?>><i class="fas fa-fax"></i> <?= $item->fax ?></p>
                            <p <?= empty($item->email) ? "style=display:none;" : "" ?>><i class="fas fa-envelope"></i> <?= $item->email ?></p>
                            <a href="{{url('/')}}/centers/{{$item->name_en}}" class="blog-card__more"><i class="far fa-angle-right"></i>Read More</a>
                        </div>
                    </a>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>
{{-- <section class="cause-details blog-details pb-5 mb-5" style="background: #e6e6e6;">
    <div class="container pt-5 " {{sizeof($CentralDepartments)>0?"":"style=display:none;"}}>
<div class="row">
    <div class="col-md-12 col-lg-8" style="padding-left: 57px;">
        <h3 class="blog-details__title blog-details__title_new"><?= $_SESSION["lng"] == "ar" ? $CentersType[0]->centers_type_ar : ($_SESSION["lng"] == "fr" ? $CentersType[0]->centers_type_fr : $CentersType[0]->centers_type_en) ?></h3>
    </div>
</div>
<div class="row">
    <div class="col-md-12 col-lg-12">
        <div class="comment-one">
            @foreach ($CentralDepartments as $item)
            <?php
            $title = $item->name_en;
            $details = $item->address_en;
            if ($_SESSION["lng"] == "ar") {
                $title = $item->name_ar;
                $details = $item->address_ar;
            } else if ($_SESSION["lng"] == "fr") {
                $title = $item->name_fr;
                $details = $item->address_fr;
            }
            ?>
            <div class="cause-details__content">
                <h4><?= $title ?></h4>
                <p><i class="fas fa-map-marker"></i> <?= $details ?></p>
                <p <?= empty($item->phone) ? "style=display:none;" : "" ?>><i class="fas fa-phone"></i> <?= $item->phone ?></p>
                <p <?= empty($item->fax) ? "style=display:none;" : "" ?>><i class="fas fa-fax"></i> <?= $item->fax ?></p>
                <p <?= empty($item->email) ? "style=display:none;" : "" ?>><i class="fas fa-envelope"></i> <?= $item->email ?></p>
            </div>
            @endforeach
        </div>
    </div>

</div>
</div>
<div class="container pt-5" {{sizeof($Centers)>0?"":"style=display:none;"}}>
    <div class="row">
        <div class="col-md-12 col-lg-8" style="padding-left: 57px;">
            <h3 class="blog-details__title blog-details__title_new"><?= $_SESSION["lng"] == "ar" ? $CentersType[1]->centers_type_ar : ($_SESSION["lng"] == "fr" ? $CentersType[1]->centers_type_fr : $CentersType[1]->centers_type_en) ?></h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-lg-12">
            <div class="comment-one">
                @foreach ($Centers as $item)
                <?php
                $title = $item->name_en;
                $details = $item->address_en;
                if ($_SESSION["lng"] == "ar") {
                    $title = $item->name_ar;
                    $details = $item->address_ar;
                } else if ($_SESSION["lng"] == "fr") {
                    $title = $item->name_fr;
                    $details = $item->address_fr;
                }
                ?>
                <a href="{{url('/')}}/centers/{{$item->name_en}}" style="color: #8a8a8a;">
                    <div class="cause-details__content">
                        <h4><?= $title ?></h4>
                        <p><i class="fas fa-map-marker"></i> <?= $details ?></p>
                        <p <?= empty($item->phone) ? "style=display:none;" : "" ?>><i class="fas fa-phone"></i> <?= $item->phone ?></p>
                        <p <?= empty($item->fax) ? "style=display:none;" : "" ?>><i class="fas fa-fax"></i> <?= $item->fax ?></p>
                        <p <?= empty($item->email) ? "style=display:none;" : "" ?>><i class="fas fa-envelope"></i> <?= $item->email ?></p>
                    </div>
                </a>

                @endforeach

            </div>
        </div>

    </div>
</div>
</section> --}}
<script>
    $(".comment-one12").slick({
        items: 3,
        dots: true,
        infinite: false,
        margin: 0,
        centerMode: false,
        slidesToShow: 3,
        slidesToScroll: 3,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 4000,
        @if($_SESSION["lng"] == "ar")
        rtl: true,
        @endif
        //prevArrow: '<img src="img/group-2_4.png" class="fa fa-arrow-left reInitSlick">',
        // nextArrow: '<img src="img/right-arrow.png" class="fa fa-arrow-right">',
        // asNavFor: '.slider-nav',
        responsive: [{
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
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]

    });

    $("[name=area_id]").on("change", function(e) {
        //areaHidden
        var area_id = $(this).val();
        console.log(area_id);
        if (area_id == 0) {
            $(".ItemArea").removeClass("areaHidden");
        } else {
            $(".ItemArea").addClass("areaHidden");
            $(".area" + area_id).removeClass("areaHidden");
        }

    });
</script>