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
use App\Models\ProgramsCategory;

class DonateController extends Controller
{
    public function Index()
    {
        session_start();
        $_SESSION["page"]=8;
        HomeController::SetDefaultLng();
        $ContactUs=ContactUs::select('*')->get()->first();
        $Contactpages=Page::with('banners')->OrderBy("page_id")->whereIn("page_id",[16])->get()->first();
        $page=Page::with('banners')->OrderBy("page_id")->whereIn("page_id",[15])->get()->first();
        $ProgramsCategory=ProgramsCategory::select('*')->where('active',1)->OrderBy("orders")->OrderByDesc("programs_category_id")->get();

        return view('Donate/index',[
        "pages"=>$page,
        "ContactUs"=>$ContactUs,
        "Contactpages"=>$Contactpages,
        "ProgramsCategoryMenu"=> $ProgramsCategory
        ]);
    }

}

?>
