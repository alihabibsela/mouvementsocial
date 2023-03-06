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
use App\Models\Calls;
use App\Models\CallsDocs;
use App\Models\ContactUs;
use App\Models\ProgramsCategory;

class CallsController extends Controller
{

    public function Index()
    {
        session_start();
        $_SESSION["page"]=8;
        HomeController::SetDefaultLng();
        $pages=Page::with('banners')->OrderBy("page_id")->whereIn("page_id",[13])->get()->first();
        $ContactUs=ContactUs::select('*')->get()->first();
        $Contactpages=Page::with('banners')->OrderBy("page_id")->whereIn("page_id",[16])->get()->first();
        $ProgramsCategory=ProgramsCategory::select('*')->where('active',1)->OrderBy("orders")->OrderByDesc("programs_category_id")->get();

        return view('Calls/index',["pages"=>$pages,
        "ContactUs"=>$ContactUs,
        "Contactpages"=>$Contactpages,
        "ProgramsCategoryMenu"=> $ProgramsCategory]);
    }
    public function CallDetails($name)
    {
        session_start();
        $_SESSION["page"]=8;
        HomeController::SetDefaultLng();
        $pages=Page::with('banners')->OrderBy("page_id")->whereIn("page_id",[13])->get()->first();
        $Calls=Calls::with('calls_docs')->where("title_en",'like', '%' . $name . '%')->first();
        //print_r(json_encode($Calls));die();
        $ContactUs=ContactUs::select('*')->get()->first();
        $Contactpages=Page::with('banners')->OrderBy("page_id")->whereIn("page_id",[16])->get()->first();
        $ProgramsCategory=ProgramsCategory::select('*')->where('active',1)->OrderBy("orders")->OrderByDesc("programs_category_id")->get();

        return view('Calls/CallDetails',["pages"=>$pages,"Calls"=>$Calls,
        "ContactUs"=>$ContactUs,
        "Contactpages"=>$Contactpages,
        "ProgramsCategoryMenu"=> $ProgramsCategory]);
    }

    public function Data()
    {
        $page=1;
        $perPage=6;
        if(isset($_GET["page"])){
            $page=$_GET["page"];
        }
        $Calls=Calls::with('calls_docs')->OrderBy("orders")->OrderByDesc("calls_id")->paginate($perPage);
        $PaginateCalls=json_encode($Calls);

        return $PaginateCalls;
    }

}

?>
