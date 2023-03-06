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
use App\Models\Finance;
use App\Models\FinanceStatement;
use App\Models\ContactUs;
use App\Models\ProgramsCategory;

class FinanceController extends Controller
{

    public function Index()
    {
        session_start();
        $_SESSION["page"]=5;
        HomeController::SetDefaultLng();
        $pages=Page::with('banners')->OrderBy("page_id")->whereIn("page_id",[10])->get()->first();
        $Finance=Finance::select('*')->OrderBy("orders")->OrderByDesc("finance_id")->get();
        $FinanceStatement=FinanceStatement::select('*')->OrderByDesc("year")->get();
        $ContactUs=ContactUs::select('*')->get()->first();
        $Contactpages=Page::with('banners')->OrderBy("page_id")->whereIn("page_id",[16])->get()->first();
        $ProgramsCategory=ProgramsCategory::select('*')->where('active',1)->OrderBy("orders")->OrderByDesc("programs_category_id")->get();

        return view('Finance/index',["pages"=>$pages,"Finance"=>$Finance,"FinanceStatement"=>$FinanceStatement,
        "ContactUs"=>$ContactUs,
        "Contactpages"=>$Contactpages,
        "ProgramsCategoryMenu"=> $ProgramsCategory]);
    }

}

?>
