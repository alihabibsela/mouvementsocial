<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Response;
use stdClass;
use Carbon\Carbon;
use Exception;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Crypt;
use App\Models\Page;
use App\Models\Testimonials;
use App\Models\ContactUs;
use App\Models\ProgramsCategory;

class TestimonialsController extends Controller
{

    public function Index()
    {
        session_start();
        $_SESSION["page"]=7;
        HomeController::SetDefaultLng();
        $pages=Page::with('banners')->OrderBy("page_id")->whereIn("page_id",[18])->get()->first();
        //print_r(json_encode($pages));die();
        $testimonials=Testimonials::select('*')->OrderBy("orders")->OrderByDesc("testimonials_id")->where("show_home",1)->get();
        $ContactUs=ContactUs::select('*')->get()->first();
        $Contactpages=Page::with('banners')->OrderBy("page_id")->whereIn("page_id",[16])->get()->first();
        $ProgramsCategory=ProgramsCategory::select('*')->where('active',1)->OrderBy("orders")->OrderByDesc("programs_category_id")->get();

        return view('Testimonials/index',["pages"=>$pages,"testimonials"=>$testimonials,
        "ContactUs"=>$ContactUs,
        "Contactpages"=>$Contactpages,
        "ProgramsCategoryMenu"=> $ProgramsCategory]);
    }

}

?>
