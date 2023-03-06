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
.container-w{
    width: 73%;
}
</style>
{{-- <section class="image-section">
    <div class="block no-padding">
        <img src="uploads/images/{{$pages->banners[0]->image}}" style="width:100%;" />
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
                    <h1 class="mobile" style=" font-size: 47px; color:white !important">
                        <?=$title?>
                    </h1>


                </div>
            </div>
        </div>
        <!-- <img class="curvedImage" src="uploads/images/{{$pages->banners[0]->image}}"> -->
        <!-- <div class="curvedText">
            <h1></h1>

            <svg viewBox="0 0 1440 319">
                <path fill="#fff" fill-opacity="1" d="M0,32L48,80C96,128,192,224,288,224C384,224,480,128,576,90.7C672,53,768,75,864,96C960,117,1056,139,1152,149.3C1248,160,1344,160,1392,160L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
            </svg>
        </div> -->
    </div>
</div>
<section class="cause-details blog-details pt-120">
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
<section class="event-pag pt-5">
    <div class="container container-w">
        <div class="col-md-12 col-lg-12">
            <div class="block-title">
                <h3>
                    <?=$_SESSION["lng"]=="ar"?"وظائف شاغرة":($_SESSION["lng"]=="fr"?"Postes vacants":"Job Vacancies")?>
                </h3>
            </div><!-- /.block-title -->
        </div>
        <div class="event-grid JobList"></div><!-- /.event-grid -->
        <ul class="list-unstyled post-pagination d-flex justify-content-center align-items-center JobPagination">
            {{-- <li>
                <a href="#">
                    <i class="far fa-angle-left"></i>
                </a>
            </li>
            <li>
                <a href="#">01</a>
            </li>
            <li>
                <a href="#">02</a>
            </li>
            <li>
                <a href="#">03</a>
            </li>
            <li>
                <a href="#">
                    <i class="far fa-angle-right"></i>
                </a>
            </li> --}}
        </ul><!-- /.post-pagination -->
    </div><!-- /.container -->
</section>
<section class="event-page pt-5 pb-5">
     
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
    const months = [
    'January',
    'February',
    'March',
    'April',
    'May',
    'June',
    'July',
    'August',
    'September',
    'October',
    'November',
    'December'
    ];
    const days = [
  'Sun',
  'Mon',
  'Tue',
  'Wed',
  'Thu',
  'Fri',
  'Sat'
];
    let page=1;
    let lng="{{$_SESSION['lng']}}";
    //calls
    try{
        $.ajax({
                type: "GET",
                url: "{{url('/')}}/call-data?page="+page,
                dataType: 'json',
                success: function (data) {
                   //console.log(data);
                   var html=``;
                   $.each(data.data,function( index, value ) {
                    var title=value.title_en;
                    var description_en=value.description_en;
                    d = new Date(value.dates);
                    var dates =d.getDay()+", "+months[d.getMonth()]+" "+d.getFullYear();
                    if(lng=="ar"){
                        title=value.title_ar;
                        description_en=value.description_ar;
                    }else if(lng=="fr"){
                        title=value.title_fr;
                        description_en=value.description_fr;
                    }
                    html +=`
                        <div class="event-card">
                                <div class="event-card-inner">
                                    <div class="event-card-content">
                                        <h3><a href="{{url("/")}}/call-details/`+value.title_en+`"> `+title+`</a></h3>
                                        <ul class="event-card-list">
                                            <li>
                                                <i class="azino-icon-clock"></i>
                                                <strong>Date:</strong> `+dates+`
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        `;
                    });

                    $(".CallsList").html(html);

                    if (data.last_page>1){
                        var html=``;
                            $.each(data.links,function( index, value ) {

                            if(index==0&&value.url!=null){
                                html+=`<li><a class="CallsLink `+(value.active?"active":"")+`" href="`+value.url+`"><i class="far fa-angle-left"></i></a></li>`;
                            }else if(index==(data.links.length-1)&&value.url!=null){
                                html+=`<li><a class="CallsLink `+(value.active?"active":"")+`" href="`+value.url+`"><i class="far fa-angle-right"></i></a></li>`;
                            }else if(index>0&&index<(data.links.length-1)){
                                html+=`<li><a class="CallsLink `+(value.active?"active":"")+`" href="`+value.url+`">`+value.label+`</a></li>`;
                            }
                        });
                        $(".CallsPagination").html(html);
                    }else{
                        $(".CallsPagination").attr("style","display:none !important;");
                    }


                }
            });
    }catch(ex){}
    try{
        $.ajax({
                type: "GET",
                url: "{{url('/')}}/careers-data?page="+page,
                dataType: 'json',
                success: function (data) {
                   console.log(data);
                   var html=``;
                   $.each(data.data,function( index, value ) {
                    var title=value.title_en;
                    var description_en=value.description_en;
                    d = new Date(value.dates);
                    var dates =d.getDay()+", "+months[d.getMonth()]+" "+d.getFullYear();
                    if(lng=="ar"){
                        title=value.title_ar;
                        description_en=value.description_ar;
                    }else if(lng=="fr"){
                        title=value.title_fr;
                        description_en=value.description_fr;
                    }
                    html +=`
                        <div class="event-card">
                                <div class="event-card-inner">
                                    <div class="event-card-content">
                                        <h3><a href="{{url("/")}}/career-details/`+value.title_en+`"> `+title+`</a></h3>
                                        <ul class="event-card-list">
                                            <li>
                                                <i class="azino-icon-clock"></i>
                                                <strong>Date:</strong> `+dates+`
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        `;
                    });

                    $(".JobList").html(html);

                    if (data.last_page>1){
                        var html=``;
                            $.each(data.links,function( index, value ) {

                            if(index==0&&value.url!=null){
                                html+=`<li><a class="CareerLink `+(value.active?"active":"")+`" href="`+value.url+`"><i class="far fa-angle-left"></i></a></li>`;
                            }else if(index==(data.links.length-1)&&value.url!=null){
                                html+=`<li><a class="CareerLink `+(value.active?"active":"")+`" href="`+value.url+`"><i class="far fa-angle-right"></i></a></li>`;
                            }else if(index>0&&index<(data.links.length-1)){
                                html+=`<li><a class="CareerLink `+(value.active?"active":"")+`" href="`+value.url+`">`+value.label+`</a></li>`;
                            }
                        });
                        $(".JobPagination").html(html);
                    }else{
                        $(".JobPagination").attr("style","display:none !important;");
                    }


                }
            });
    }catch(ex){}

    $("body").on("click",".CareerLink",function(e){
                e.preventDefault();
                $.ajax({
                type: "GET",
                url: $(this).attr("href"),
                dataType: 'json',
                success: function (data) {
                   console.log(data);
                   var html=``;
                   $.each(data.data,function( index, value ) {
                    var title=value.title_en;
                    var description_en=value.description_en;
                    d = new Date(value.dates);
                    var dates =d.getDay()+", "+months[d.getMonth()]+" "+d.getFullYear();
                    if(lng=="ar"){
                        title=value.title_ar;
                        description_en=value.description_ar;
                    }else if(lng=="fr"){
                        title=value.title_fr;
                        description_en=value.description_fr;
                    }
                    html +=`
                        <div class="event-card">
                                <div class="event-card-inner">
                                    <div class="event-card-content">
                                        <h3><a href="{{url("/")}}/career-details/`+value.title_en+`"> `+title+`</a></h3>
                                        <ul class="event-card-list">
                                            <li>
                                                <i class="azino-icon-clock"></i>
                                                <strong>Date:</strong> `+dates+`
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        `;
                    });

                    $(".JobList").html(html);

                    if (data.last_page>1){
                        var html=``;
                            $.each(data.links,function( index, value ) {

                            if(index==0&&value.url!=null){
                                html+=`<li><a class="CareerLink `+(value.active?"active":"")+`" href="`+value.url+`"><i class="far fa-angle-left"></i></a></li>`;
                            }else if(index==(data.links.length-1)&&value.url!=null){
                                html+=`<li><a class="CareerLink `+(value.active?"active":"")+`" href="`+value.url+`"><i class="far fa-angle-right"></i></a></li>`;
                            }else if(index>0&&index<(data.links.length-1)){
                                html+=`<li><a class="CareerLink `+(value.active?"active":"")+`" href="`+value.url+`">`+value.label+`</a></li>`;
                            }
                        });
                        $(".JobPagination").html(html);
                    }else{
                        $(".JobPagination").attr("style","display:none !important;");
                    }


                }
            });
            });
            $("body").on("click",".CallsLink",function(e){
                e.preventDefault();
                $.ajax({
                type: "GET",
                url: $(this).attr("href"),
                dataType: 'json',
                success: function (data) {
                   console.log(data);
                   var html=``;
                   $.each(data.data,function( index, value ) {
                    var title=value.title_en;
                    var description_en=value.description_en;
                    d = new Date(value.dates);
                    var dates =d.getDay()+", "+months[d.getMonth()]+" "+d.getFullYear();
                    if(lng=="ar"){
                        title=value.title_ar;
                        description_en=value.description_ar;
                    }else if(lng=="fr"){
                        title=value.title_fr;
                        description_en=value.description_fr;
                    }
                    html +=`
                        <div class="event-card">
                                <div class="event-card-inner">
                                    <div class="event-card-content">
                                        <h3><a href="{{url("/")}}/call-details/`+value.title_en+`"> `+title+`</a></h3>
                                        <ul class="event-card-list">
                                            <li>
                                                <i class="azino-icon-clock"></i>
                                                <strong>Date:</strong> `+dates+`
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        `;
                    });

                    $(".CallsList").html(html);

                    if (data.last_page>1){
                        var html=``;
                            $.each(data.links,function( index, value ) {

                            if(index==0&&value.url!=null){
                                html+=`<li><a class="CallsLink `+(value.active?"active":"")+`" href="`+value.url+`"><i class="far fa-angle-left"></i></a></li>`;
                            }else if(index==(data.links.length-1)&&value.url!=null){
                                html+=`<li><a class="CallsLink `+(value.active?"active":"")+`" href="`+value.url+`"><i class="far fa-angle-right"></i></a></li>`;
                            }else if(index>0&&index<(data.links.length-1)){
                                html+=`<li><a class="CallsLink `+(value.active?"active":"")+`" href="`+value.url+`">`+value.label+`</a></li>`;
                            }
                        });
                        $(".CallsPagination").html(html);
                    }else{
                        $(".CallsPagination").attr("style","display:none !important;");
                    }


                }
            });
            });
</script>
@endsection
