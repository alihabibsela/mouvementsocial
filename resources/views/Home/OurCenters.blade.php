
{{-- <section style=" padding-bottom: 0px;">
    <div class="block">
        <div class="container">
            <div class="sec-ttl text-center">
                <div class="sec-ttl-inr">
                    <h2 itemprop="headline"><?=$_SESSION["lng"]=="ar"?"مراكزنا":($_SESSION["lng"]=="fr"?"Nos centres":"Our Centers")?></h2>
                </div>
            </div>
        </div>
    </div>
</section> --}}

<section style=" padding-bottom: 0px;">
    <div class="block" style="padding-bottom: 0px;padding-top: 23px;">
        <div class="container">
            <div class="sec-ttl text-center">
                <div class="sec-ttl-inr">
                    {{-- <h2 itemprop="headline"><?=$_SESSION["lng"]=="ar"?"مراكزنا":($_SESSION["lng"]=="fr"?"Nos centres":"Our Centers")?></h2> --}}
                </div>
            </div>
            <div class="sec-ttl text-center">
                <div class="sec-ttl-inr">
                    <a href="{{url('/contact')}}">
                        <img src="assets/images/map.PNG" style="width:100%">
                    </a>

                </div>
            </div>
        </div>
    </div>
</section>
<style>
    @media (min-width: 481px){
        .block-title h3 {
    font-size: 34px !important;
}
    }

</style>
