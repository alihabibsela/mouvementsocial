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
use App\Models\Programs;
use App\Models\News;
use App\Models\Testimonials;
use App\Models\Donor;
use App\Models\Founders;
use App\Models\MsValues;
use App\Models\HistoryImage;
use App\Models\MsHistory;
use App\Models\ContactUs;
use App\Models\ProgramsCategory;

class HomeController extends Controller
{

    public function Index()
    {
        session_start();
        $_SESSION["page"]=1;
        HomeController::SetDefaultLng();
        $pages=Page::with('banners')->OrderBy("page_id")->whereIn("page_id",[1,2,3])->get();
        $programs=Programs::with('program_images','programs_category','programs_donors','program_main_image')->where("show_home",1)->OrderByDesc("date")->get();
        $News=News::with('main_image')->OrderByDesc("dates")->limit(6)->get();
        $testimonials=Testimonials::select('*')->OrderBy("orders")->OrderByDesc("testimonials_id")->where("show_home",1)->get();

        $ContactUs=ContactUs::select('*')->get()->first();
        $Contactpages=Page::with('banners')->OrderBy("page_id")->whereIn("page_id",[16])->get()->first();

        $ProgramsCategory=ProgramsCategory::select('*')->where('active',1)->OrderBy("orders")->OrderByDesc("programs_category_id")->get();

        return view('Home/index',["pages"=>$pages,"programs"=>$programs,"News"=>$News,"testimonials"=>$testimonials,
        "ContactUs"=>$ContactUs,
        "Contactpages"=>$Contactpages,
        "ProgramsCategoryMenu"=> $ProgramsCategory]);
    }
    public function About()
    {
        session_start();
        $_SESSION["page"]=2;
        HomeController::SetDefaultLng();
        $pages=Page::with('banners')->OrderBy("page_id")->whereIn("page_id",[23])->get()->first();
        $donor=Donor::select('*')->OrderBy("orders")->OrderByDesc("donor_id")->get();
       // print_r(json_encode($pages->banners));die();
        $ContactUs=ContactUs::select('*')->get()->first();
        $Contactpages=Page::with('banners')->OrderBy("page_id")->whereIn("page_id",[16])->get()->first();
        $ProgramsCategory=ProgramsCategory::select('*')->where('active',1)->OrderBy("orders")->OrderByDesc("programs_category_id")->get();

        return view('About/index',["pages"=>$pages,"donor"=>$donor,
        "ContactUs"=>$ContactUs,
        "Contactpages"=>$Contactpages,
        "ProgramsCategoryMenu"=> $ProgramsCategory]);
    }
    public function Founders()
    {
        session_start();
        $_SESSION["page"]=2;
        HomeController::SetDefaultLng();
        $pages=Page::with('banners')->OrderBy("page_id")->whereIn("page_id",[4,24])->get();
        $founders=Founders::select('*')->OrderBy("orders")->OrderByDesc("founders_id")->get();
        //print_r(json_encode($founders));die();
        $ContactUs=ContactUs::select('*')->get()->first();
        $Contactpages=Page::with('banners')->OrderBy("page_id")->whereIn("page_id",[16])->get()->first();
        $ProgramsCategory=ProgramsCategory::select('*')->where('active',1)->OrderBy("orders")->OrderByDesc("programs_category_id")->get();

        return view('Founders/index',["pages"=>$pages,"founders"=>$founders,
        "ContactUs"=>$ContactUs,
        "Contactpages"=>$Contactpages,
        "isTeam"=>1,
        "ProgramsCategoryMenu"=> $ProgramsCategory]);
    }
    public function FoundersDetails($name)
    {
        session_start();
        $_SESSION["page"]=2;
        HomeController::SetDefaultLng();
        $pages=Page::with('banners')->OrderBy("page_id")->whereIn("page_id",[4])->get()->first();
        $founders=Founders::select('*')->where("name_en",'like', '%' . $name . '%')->get()->first();
        //print_r(json_encode($founders));die();
        $ContactUs=ContactUs::select('*')->get()->first();
        $Contactpages=Page::with('banners')->OrderBy("page_id")->whereIn("page_id",[16])->get()->first();
        $ProgramsCategory=ProgramsCategory::select('*')->where('active',1)->OrderBy("orders")->OrderByDesc("programs_category_id")->get();

        return view('Founders/details',["pages"=>$pages,"founders"=>$founders,
        "ContactUs"=>$ContactUs,
        "Contactpages"=>$Contactpages,
        "ProgramsCategoryMenu"=> $ProgramsCategory]);
    }

    public function Mission()
    {
        session_start();
        $_SESSION["page"]=2;
        HomeController::SetDefaultLng();
        $pages=Page::with('banners')->OrderBy("page_id")->whereIn("page_id",[5,6,7,20,22])->get();
        $MsValues=MsValues::select('*')->OrderBy("orders")->OrderByDesc("ms_values_id")->get();
       // print_r(json_encode($pages));die();
       $ContactUs=ContactUs::select('*')->get()->first();
       $Contactpages=Page::with('banners')->OrderBy("page_id")->whereIn("page_id",[16])->get()->first();
       $ProgramsCategory=ProgramsCategory::select('*')->where('active',1)->OrderBy("orders")->OrderByDesc("programs_category_id")->get();

        return view('Mission/index',["pages"=>$pages,"MsValues"=>$MsValues,
        "ContactUs"=>$ContactUs,
        "Contactpages"=>$Contactpages,
        "ProgramsCategoryMenu"=> $ProgramsCategory]);
    }
    public function History()
    {
        session_start();
        $_SESSION["page"]=2;
        HomeController::SetDefaultLng();
        $pages=Page::with('banners')->OrderBy("page_id")->whereIn("page_id",[8])->get()->first();
        $HistoryImage=HistoryImage::select('*')->OrderBy("orders")->OrderByDesc("history_image_id")->get();
        $MsHistory=MsHistory::select('*')->OrderBy("year")->OrderByDesc("ms_history_id")->get();
        //print_r(json_encode($MsHistory));die();
        $ContactUs=ContactUs::select('*')->get()->first();
        $Contactpages=Page::with('banners')->OrderBy("page_id")->whereIn("page_id",[16])->get()->first();
        $Mandate=Page::select('*')->whereIn("page_id",[26])->get()->first();
        $ProgramsCategory=ProgramsCategory::select('*')->where('active',1)->OrderBy("orders")->OrderByDesc("programs_category_id")->get();

        return view('History/index',["pages"=>$pages,"HistoryImage"=>$HistoryImage,"MsHistory"=>$MsHistory,
        "ContactUs"=>$ContactUs,
        "Contactpages"=>$Contactpages,
        "Mandate"=>$Mandate,
        "ProgramsCategoryMenu"=> $ProgramsCategory
        ]);
    }

    public static function SetDefaultLng()
    {
        if(!isset($_SESSION["lng"])){
            $_SESSION["lng"]="en";
        }
    }
    public function lng()
    {
        session_start();
        $response["status"]=true;
        $_SESSION["lng"]=$_POST["lng"];
        return json_encode($response);
    }
}

?>
