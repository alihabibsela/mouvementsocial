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
use App\Models\Centers;
use App\Models\CentersType;
use App\Models\ContactUs;
use App\Models\ProgramsCategory;

class ContactController extends Controller
{

    public function Index()
    {
        session_start();
        $_SESSION["page"]=9;
        HomeController::SetDefaultLng();
        $pages=Page::with('banners')->OrderBy("page_id")->whereIn("page_id",[16])->get()->first();
        $CentralDepartments=Centers::with('centers_type')->where("type",1)->OrderBy("orders")->OrderByDesc("centers_id")->get();
        $Centers=Centers::with('centers_type')->where("type",2)->OrderBy("orders")->OrderByDesc("centers_id")->get();
        $CentersType=CentersType::select('*')->get();
        $ContactUs=ContactUs::select('*')->get()->first();
        //print_r(json_encode($Centers));die();
        $Contactpages=Page::with('banners')->OrderBy("page_id")->whereIn("page_id",[16])->get()->first();
        $ProgramsCategory=ProgramsCategory::select('*')->where('active',1)->OrderBy("orders")->OrderByDesc("programs_category_id")->get();

        return view('Contact/index',[
            "pages"=>$pages,
            "CentralDepartments"=>$CentralDepartments,
            "Centers"=>$Centers,
            "CentersType"=>$CentersType,
            "ContactUs"=>$ContactUs,
            "Contactpages"=>$Contactpages,
            "ProgramsCategoryMenu"=> $ProgramsCategory
            ]);
    }

    public function Centers()
    {
        session_start();
        $_SESSION["page"]=10;
        HomeController::SetDefaultLng();
        $pages=Page::with('banners')->OrderBy("page_id")->whereIn("page_id",[25])->get()->first();
        $CentralDepartments=Centers::with('centers_type')->where("type",1)->OrderBy("orders")->OrderByDesc("centers_id")->get();
        $Centers=Centers::with('centers_type')->where("type",2)->OrderBy("orders")->OrderByDesc("centers_id")->get();
        $CentersType=CentersType::select('*')->get();
        $ContactUs=ContactUs::select('*')->get()->first();
        $area=DB::table('area')->get();
        //print_r(json_encode($Centers));die();
        $Contactpages=Page::with('banners')->OrderBy("page_id")->whereIn("page_id",[16])->get()->first();
        $ProgramsCategory=ProgramsCategory::select('*')->where('active',1)->OrderBy("orders")->OrderByDesc("programs_category_id")->get();
        return view('Contact/Centers',[
            "pages"=>$pages,
            "CentralDepartments"=>$CentralDepartments,
            "Centers"=>$Centers,
            "area"=>$area,
            "CentersType"=>$CentersType,
            "ContactUs"=>$ContactUs,
            "Contactpages"=>$Contactpages,
            "ProgramsCategoryMenu"=> $ProgramsCategory
            ]);
    }

    public function CentersDetails($name)
    {
        session_start();
        $_SESSION["page"]=10;
        HomeController::SetDefaultLng();
        $pages=Page::with('banners')->OrderBy("page_id")->whereIn("page_id",[25])->get()->first();

        $Centers=Centers::with('centers_type')->where("name_en",'like', '%' . $name . '%')->first();
        $galleryItem=DB::table('gallery_item')->where("centers_id",$Centers->centers_id)->where("video","")->get();
        $galleryItemVideos=DB::table('gallery_item')->where("centers_id",$Centers->centers_id)->where("video","!=","")->get();
        $CentersType=CentersType::select('*')->get();
        $ContactUs=ContactUs::select('*')->get()->first();
        //print_r(json_encode($Centers));die();
        $Contactpages=Page::with('banners')->OrderBy("page_id")->whereIn("page_id",[16])->get()->first();
        $ProgramsCategory=ProgramsCategory::select('*')->where('active',1)->OrderBy("orders")->OrderByDesc("programs_category_id")->get();

        return view('Contact/CentersDetails',[
            "pages"=>$pages,
            "Centers"=>$Centers,
            "galleryItem"=>$galleryItem,
            "galleryItemVideos"=>$galleryItemVideos,
            "CentersType"=>$CentersType,
            "ContactUs"=>$ContactUs,
            "Contactpages"=>$Contactpages,
            "ProgramsCategoryMenu"=> $ProgramsCategory
            ]);
    }
    public function ContactUsSubmit()
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
        $insertedId=DB::table('contact_form')->insertGetId($_POST);
        if($insertedId>0){
            $response["status"]=true;
        }
        print_r(json_encode($response));die();
    }
    public function NewsletterSubmit()
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
        $insertedId=DB::table('newsletter')->insertGetId($_POST);
        if($insertedId>0){
            $response["status"]=true;
        }
        print_r(json_encode($response));die();
    }

    public static function getRealIpAddr()
    {
        if (! empty($_SERVER['HTTP_CLIENT_IP'])) // check ip from share internet
          {
            $ip = $_SERVER['HTTP_CLIENT_IP'];
          } elseif (! empty($_SERVER['HTTP_X_FORWARDED_FOR'])) // to check ip is pass from proxy
          {
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
          } else {
            $ip = $_SERVER['REMOTE_ADDR'];
          }
        return $ip;
    }

    public static function getLocationInfoByIp($ip){
        $country="";
        $ip_data = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=".$ip));
        if($ip_data && $ip_data->geoplugin_countryName != null){
            $result['country'] = $ip_data->geoplugin_countryCode;
            $result['city'] = $ip_data->geoplugin_city;
            $country=$result['country'];
        }
        return $country;
    }

}

?>
