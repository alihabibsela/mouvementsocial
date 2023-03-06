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
use App\Models\ContactUs;
use App\Models\Page;
use App\Models\MsTeam;
use App\Models\TeamType;
use App\Models\ProgramsCategory;

class TeamController extends Controller
{

    public function Index()
    {
        session_start();
        $_SESSION["page"]=2;
        HomeController::SetDefaultLng();
        $pages=Page::with('banners')->OrderBy("page_id")->whereIn("page_id",[19])->get()->first();
        $ContactUs=ContactUs::select('*')->get()->first();
        $Contactpages=Page::with('banners')->OrderBy("page_id")->whereIn("page_id",[16])->get()->first();
        // $MsTeam=MsTeam::with('team_type')->OrderBy("orders")->OrderByDesc("ms_team_id")->get();
        // $MsTeam =$MsTeam->groupBy("team_type_id");
        $TeamType=TeamType::with('ms_team')->get();
        $ProgramsCategory=ProgramsCategory::select('*')->where('active',1)->OrderBy("orders")->OrderByDesc("programs_category_id")->get();

        //print_r(json_encode($TeamType));die();
        return view('Team/index',[
            "pages"=>$pages,
            "TeamType"=>$TeamType,
            "ContactUs"=>$ContactUs,
            "Contactpages"=>$Contactpages,
            "ProgramsCategoryMenu"=> $ProgramsCategory
        ]);
    }
    public function Details($name)
    {
        session_start();
        $_SESSION["page"]=2;
        HomeController::SetDefaultLng();
        $pages=Page::with('banners')->OrderBy("page_id")->whereIn("page_id",[19])->get()->first();
        $ContactUs=ContactUs::select('*')->get()->first();
        $Contactpages=Page::with('banners')->OrderBy("page_id")->whereIn("page_id",[16])->get()->first();

        $MsTeam=MsTeam::with('team_type')->OrderBy("orders")->OrderByDesc("ms_team_id")->where("name_en",'like', '%' . $name . '%')->first();
        //print_r(json_encode($MsTeam));die();
        return view('Team/details',[
            "pages"=>$pages,
            "MsTeam"=>$MsTeam,
        "ContactUs"=>$ContactUs,
        "Contactpages"=>$Contactpages]);
    }

}

?>
