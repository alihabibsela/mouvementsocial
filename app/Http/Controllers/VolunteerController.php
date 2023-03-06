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
use App\Models\ContactUs;
use App\Models\ProgramsCategory;

class VolunteerController extends Controller
{

    public function Index()
    {
        session_start();
        $_SESSION["page"]=8;
        HomeController::SetDefaultLng();
        $pages=Page::with('banners')->OrderBy("page_id")->whereIn("page_id",[14])->get()->first();
        $ContactUs=ContactUs::select('*')->get()->first();
        $Contactpages=Page::with('banners')->OrderBy("page_id")->whereIn("page_id",[16])->get()->first();
        $ProgramsCategory=ProgramsCategory::select('*')->where('active',1)->OrderBy("orders")->OrderByDesc("programs_category_id")->get();

        return view('Volunteer/index',["pages"=>$pages,
        "ContactUs"=>$ContactUs,
        "Contactpages"=>$Contactpages,
        "ProgramsCategoryMenu"=> $ProgramsCategory]);
    }
    public function VolunteerSubmit()
    {
        $response["status"]=false;
        session_start();

        $carbonDate = new Carbon();
        $carbonDate->timezone = 'Asia/Beirut';
        $DateNow=$carbonDate->toDateTime();
        $DateNow=json_decode(json_encode($DateNow));
        $DateNow=$DateNow->date;
        $_POST["submitted_date_time"]=$DateNow;
        $_POST['ip']= ContactController::getRealIpAddr();
        $_POST['country']=ContactController::getLocationInfoByIp($_POST['ip']);
        $insertedId=DB::table('volunteer_form')->insertGetId($_POST);
        if($insertedId>0){
            $response["status"]=true;
        }
        print_r(json_encode($response));die();
    }
}

?>
