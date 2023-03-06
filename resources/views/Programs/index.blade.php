@extends('layout.layout')
@section('content')
<?php use Carbon\Carbon;?>
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
.background-secondary {
    background-color: #cccccc;
}
.background-secondary.active {
    background-color: #0197dd;
}
.service-one .container::before {
    background-image: unset;

}
.service-one {
    -webkit-box-shadow: unset;
    box-shadow: unset;
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
{{-- <section class="service-one pt-120 pb-90" style="background-image: url(assets/images/backgrounds/service-hand-bg-1-1.png);"> --}}
    <section class="service-one pt-50 pb-30">
    <div class="container">
        <div class="col-md-12 col-lg-8 mx-auto">
            <h2 class="text-center">{{$ProgramsCategory[0]->cat_name_en}}</h2>
        </div>
        <div class="row" hidden>
            @foreach ($ProgramsCategory as $key=>$item)
                    <?php
                    $title=$item->cat_name_en;
                    $description=$item->description_en;

                    if($_SESSION["lng"]=="ar"){
                        $title=$item->cat_name_ar;
                        $description=$item->description_ar;
                    }else if($_SESSION["lng"]=="fr"){
                        $title=$item->cat_name_fr;
                        $description=$item->description_fr;
                    }
                    $active="";
                    if(isset($_GET["cat"])&&$_GET["cat"]==$item->programs_category_id){
                        $active="active";
                    }
                ?>
                <div class="col-md-6 col-lg-3">
                    <div class="service-one__box">
                        <a href="{{url('/programs')}}/data?cat={{$item->programs_category_id}}" class="ProgramsCategoryBtn ProgramsCategoryBtn_{{$key}}" id="ProgramsCategoryBtn{{$item->programs_category_id}}" description="{{$description}}">
                            <div class="service-one__icon background-secondary {{$active}}">
                                <div class="service-one__icon-inner">                                    
                                    <img src="uploads/images/{{$item->icon}}" style="width:80%">
                                    {{-- <img class="azino-icon-water-bottle"></img> --}}
                                </div><!-- /.service-one__icon-inner -->
                            </div><!-- /.service-one__icon -->
                            <h3><a href="{{url('/programs')}}?cat={{$item->programs_category_id}}">{{$title}}</a></h3>
                        </a>


                    </div><!-- /.service-one__box -->
                </div>
            @endforeach
            {{-- <div class="col-md-6 col-lg-3">
                <div class="service-one__box">
                    <div class="service-one__icon background-secondary">
                        <div class="service-one__icon-inner">
                            <i class="azino-icon-water-bottle"></i>
                        </div><!-- /.service-one__icon-inner -->
                    </div><!-- /.service-one__icon -->
                    <h3><a href="#">Water</a></h3>

                </div><!-- /.service-one__box -->
            </div><!-- /.col-md-6 col-lg-3 -->
            <div class="col-md-6 col-lg-3">
                <div class="service-one__box">
                    <div class="service-one__icon background-base">
                        <div class="service-one__icon-inner">
                            <i class="azino-icon-hamburger"></i>
                        </div><!-- /.service-one__icon-inner -->
                    </div><!-- /.service-one__icon -->
                    <h3><a href="#">Food</a></h3>

                </div><!-- /.service-one__box -->
            </div><!-- /.col-md-6 col-lg-3 -->
            <div class="col-md-6 col-lg-3">
                <div class="service-one__box ">
                    <div class="service-one__icon background-primary">
                        <div class="service-one__icon-inner">
                            <i class="azino-icon-reading-book"></i>
                        </div><!-- /.service-one__icon-inner -->
                    </div><!-- /.service-one__icon -->
                    <h3><a href="#">Education</a></h3>

                </div><!-- /.service-one__box -->
            </div><!-- /.col-md-6 col-lg-3 -->
            <div class="col-md-6 col-lg-3">
                <div class="service-one__box">
                    <div class="service-one__icon background-special">
                        <div class="service-one__icon-inner">
                            <i class="azino-icon-stethoscope"></i>
                        </div><!-- /.service-one__icon-inner -->
                    </div><!-- /.service-one__icon -->
                    <h3><a href="#">Medical</a></h3>

                </div><!-- /.service-one__box -->
            </div><!-- /.col-md-6 col-lg-3 --> --}}
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>
<section class="cause-details blog-details pb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-8 mx-auto">
                <div class="cause-details__content">
                    {{-- <?php
                        $details=$pages->details_en;
                        if($_SESSION["lng"]=="ar"){
                            $details=$pages->details_ar;
                        }else if($_SESSION["lng"]=="fr"){
                            $details=$pages->details_fr;
                        }
                    ?>
                   <?=$details?> --}}

                </div>
            </div>

        </div>
    </div>
</section>
<section class="news-page pb-60 pt-60">
    <div class="container">
        <div class="news-3-col" id="programsList">
             @foreach ($programs->data as $item)
                    <?php
                    $date = Carbon::parse($item->date)->locale($_SESSION["lng"]);
                    $date =$date->isoFormat('DD MMM');
                    $title=$item->title_en;
                    $details=$item->description_en;
                    if($_SESSION["lng"]=="ar"){
                        $title=$item->title_ar;
                        $details=$item->description_ar;
                    }else if($_SESSION["lng"]=="fr"){
                        $title=$item->title_fr;
                        $details=$item->description_fr;
                    }
                    $details=substr(strip_tags($details), 0, 90);
                ?>
                
                <div class="blog-card">
                    <div class="blog-card__inner">
                        <div class="blog-card__image">                                                      
                            <a class="imageContainer blog-card__more" style="overflow: unset;" href="{{url('/')}}/programs-details/{{$item->title_en}}" title="" itemprop="url">
                                <img style="height: 246px;width:100%;" src="uploads/images/{{$item->program_main_image==null?"":$item->program_main_image->image}}" alt="">
                            </a>                             
                        </div>
                        <div class="blog-card__content">
                            <div class="blog-card__meta">
                            </div>
                            <h3 style="margin-bottom: 12px;margin-top: 12px;"><a href="{{url('/')}}/programs-details/{{$item->title_en}}"><?=$title?></a></h3>
                            <p><?=$details?></p>
                            <a href="{{url('/')}}/programs-details/{{$item->title_en}}" class="blog-card__more"><i class="far fa-angle-right"></i><?=$_SESSION["lng"]=="ar"?"اقرأ المزيد":($_SESSION["lng"]=="fr"?"Lire la suite":"Read More")?></a>

                        </div>
                    </div>
                </div>
            @endforeach
        </div><!-- /.news-3-col -->
        {{-- @if ($programs->last_page>1) --}}
            {{--<ul class="list-unstyled post-pagination d-flex justify-content-center align-items-center linksList">
                @foreach ($programs->links as $key=>$value)
                    <?php
                    if(isset($_GET["cat"])&&$value->url!=null){$value->url.="&p=1&cat=".$_GET["cat"];}
                    ?>
                    @if($key==0&&$value->url!=null)
                        <li><a class="{{$value->active?"active":""}}" href="{{$value->url}}"><i class="far fa-angle-left"></i></a></li>
                    @elseif ($key==(sizeof($programs->links)-1)&&$value->url!=null)
                        <li><a class="{{$value->active?"active":""}}" href="{{$value->url}}"><i class="far fa-angle-right"></i></a></li>
                    @elseif($key>0&&$key<(sizeof($programs->links)-1))
                        <li><a class="{{$value->active?"active":""}}" href="{{$value->url}}">{{$value->label}}</a></li>
                    @endif
                @endforeach
            </ul>--}}
        {{-- @endif --}}

    </div>
</section>
<style>
     .post-pagination a{
        background-color: #f1f1f1 !important;
        color: #7e7e7e !important;
    }
    .post-pagination a.active{
        background-color: #00adef !important;
        color: #fff !important;
    }

</style>
<script>
    let clickNum=0;
    $(document).ready(function(e){
        $(".cause-details__content").html($(".ProgramsCategoryBtn_0").attr("description"));
        setTimeout(function(e){
            $(".ProgramsCategoryBtn_0").click();
        $(".ProgramsCategoryBtn_0 .background-secondary").addClass("active");},1000);

        @if (isset($_GET["p"]))
            var elmnt = document.getElementById("programsList");
            elmnt.scrollIntoView();
        @endif

        $(".ProgramsCategoryBtnnnnnn").on("click",function(e){           
            e.preventDefault();
            $(".cause-details__content").html($(this).attr("description"));
            var link =$(this).attr("href");
            $(".service-one__icon.background-secondary").removeClass("active");
            //console.log("clickNum",clickNum);
            if(clickNum>2){
                $('html, body').animate({
                 scrollTop: $(".cause-details__content").offset().top-200
                }, 2000);
            }

            clickNum++;
            $(this).find(".service-one__icon.background-secondary").addClass("active");
            $.ajax({
                type:"GET",
                url:link,
                dataType:"json",
                success:function(data){
                    alert('sdfg');

                    console.log(data);
                    var html=``;
                    $.each(data.data,function(index,value){
                        var mainImage=value.program_main_image;
                        var title=value.title_en;
                        var details=value.description_en;
                        var sub_title=value.sub_title_en;
                        var sub_details=value.sub_details_en;
                        @if($_SESSION["lng"]=="ar")
                            title=value.title_ar;
                            details=value.description_ar;
                            sub_title=value.sub_title_ar;
                            sub_details=value.sub_details_ar;
                        @elseif($_SESSION["lng"]=="fr")
                            title=value.title_fr;
                            details=value.description_fr;
                            sub_title=value.sub_title_fr;
                            sub_details=value.sub_details_fr;
                        @endif
                        if(sub_title==null){sub_title="";}
                        if(sub_details==null){sub_details="";}
                         html+=` <div class="blog-card">
                                    <div class="blog-card__inner">
                                        <div class="blog-card__image">
                                        <a class="imageContainer" style="overflow: unset;" href="{{url('/')}}/programs-details/`+value.title_en+`" class="blog-card__more" title="" itemprop="url">
                                        <img style="height: 246px;width:100%;" src="uploads/images/`+(mainImage==null?"":mainImage.image)+`" alt="">
                                    </a>
                                            
                                            <div ` + (value.date == '0000-00-00' ? `hidden` : ``) + ` class="blog-card__date">`+value.date+`</div>
                                        </div>
                                        <div class="blog-card__content">
                                            <div class="blog-card__meta">
                                            </div>
                                            <h3 style="margin-bottom: 12px;margin-top: 12px;"><a href="{{url('/')}}/programs-details/`+value.title_en+`">`+sub_title+`</a></h3>
                                            <p>`+sub_details+`</p>
                                            <a href="{{url('/')}}/programs-details/`+value.title_en+`" class="blog-card__more"><i class="far fa-angle-right"></i><?=$_SESSION["lng"]=="ar"?"اقرأ المزيد":($_SESSION["lng"]=="fr"?"Lire la suite":"Read More")?></a>
                                        </div>
                                    </div>
                                </div>`;

                    });
                    $("#programsList").html(html);
                    html=``;
                    $(".linksList").attr("style","display: none !important;");
                    if (data.last_page>1){
                        $(".linksList").attr("style","");
                    }
                    $.each(data.links,function($key,$value){
                        @if(isset($_GET["cat"]))
                            if($value.url!=null){
                                $value.url+="&p=1&cat={{$_GET["cat"]}}";
                            }
                        @endif
                        if($key==0&&$value.url!=null){
                            html+=`<li><a class="`+($value.active?"active":"")+`" href="`+$value.url+`"><i class="far fa-angle-left"></i></a></li>`;
                        }else if ($key==(data.links.length-1)&&$value.url!=null){
                            html+=`<li><a class="`+($value.active?"active":"")+`" href="`+$value.url+`"><i class="far fa-angle-right"></i></a></li>`;
                        }else if($key>0&&$key<(data.links.length-1)){
                            html+=`<li><a class="`+($value.active?"active":"")+`" href="`+$value.url+`">`+$value.label+`</a></li>`;
                        }
                    });
                    $(".linksList").html(html);
                }
            });
        });

        $("body").on("click",".linksList li a",function(e){
            e.preventDefault();
            var link=$(this).attr("href");
            $.ajax({
                type:"GET",
                url:link,
                dataType:"json",
                success:function(data){
                    console.log(data);
                    var html=``;
                    $.each(data.data,function(index,value){
                        var mainImage=value.program_main_image;
                        var title=value.title_en;
                        var details=value.description_en;
                        var sub_title=value.sub_title_en;
                        var sub_details=value.sub_details_en;
                        @if($_SESSION["lng"]=="ar")
                            title=value.title_ar;
                            details=value.description_ar;
                            sub_title=value.sub_title_ar;
                            sub_details=value.sub_details_ar;
                        @elseif($_SESSION["lng"]=="fr")
                            title=value.title_fr;
                            details=value.description_fr;
                            sub_title=value.sub_title_fr;
                            sub_details=value.sub_details_fr;
                        @endif
                        if(sub_title==null){sub_title="";}
                        if(sub_details==null){sub_details="";}

                         html+=` <div class="blog-card">
                                    <div class="blog-card__inner">
                                        <div class="blog-card__image">
                                        <a class="imageContainer" style="overflow: unset;" href="{{url('/')}}/programs-details/`+value.title_en+`" class="blog-card__more" title="" itemprop="url">
                                        <img style="height: 246px;width:100%;" src="uploads/images/`+(mainImage==null?"":mainImage.image)+`" alt="">
                                    </a>
                                            <div class="blog-card__date">`+value.date+`</div>
                                        </div>
                                        <div class="blog-card__content">
                                            <div class="blog-card__meta">
                                            </div>
                                            <h3  style="margin-bottom: 12px;margin-top: 12px;"><a href="{{url('/')}}/programs-details/`+value.title_en+`">`+sub_title+`</a></h3>
                                            <p>`+sub_details+`</p>
                                            <a href="{{url('/')}}/programs-details/`+value.title_en+`" class="blog-card__more"><i class="far fa-angle-right"></i><?=$_SESSION["lng"]=="ar"?"اقرأ المزيد":($_SESSION["lng"]=="fr"?"Lire la suite":"Read More")?></a>
                                        </div>
                                    </div>
                                </div>`;
                    });
                    $("#programsList").html(html);
                    html=``;


                    $.each(data.links,function($key,$value){
                        @if(isset($_GET["cat"]))
                            if($value.url!=null){
                                $value.url+="&p=1&cat={{$_GET["cat"]}}";
                            }
                        @endif
                        if($key==0&&$value.url!=null){
                            html+=`<li><a class="`+($value.active?"active":"")+`" href="`+$value.url+`"><i class="far fa-angle-left"></i></a></li>`;
                        }else if ($key==(data.links.length-1)&&$value.url!=null){
                            html+=`<li><a class="`+($value.active?"active":"")+`" href="`+$value.url+`"><i class="far fa-angle-right"></i></a></li>`;
                        }else if($key>0&&$key<(data.links.length-1)){
                            html+=`<li><a class="`+($value.active?"active":"")+`" href="`+$value.url+`">`+$value.label+`</a></li>`;
                        }
                    });
                    $(".linksList").html(html);
                }
            });
        });

    setTimeout(function(e){
            @if(isset($_GET['cat']))
                $("#ProgramsCategoryBtn{{$_GET['cat']}}").click();
            @endif
    },1500);

    });
</script>
<style>
    .blog-card__content h3{
        height: auto;
        min-height: 120px;
    }
</style>
@endsection
