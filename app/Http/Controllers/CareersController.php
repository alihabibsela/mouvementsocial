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
use App\Models\JobVacancy;
use App\Models\ContactUs;
use App\Models\ProgramsCategory;

class CareersController extends Controller
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

        return view('Careers/index',["pages"=>$pages,
        "ContactUs"=>$ContactUs,
        "Contactpages"=>$Contactpages,
        "ProgramsCategoryMenu"=> $ProgramsCategory]);
    }
    public function CareerDetails($name)
    {
        session_start();
        HomeController::SetDefaultLng();
        $pages=Page::with('banners')->OrderBy("page_id")->whereIn("page_id",[13])->get()->first();
        $JobVacancy=JobVacancy::select('*')->where("title_en",'like', '%' . $name . '%')->first();
        //print_r(json_encode($JobVacancy));die();
        $ContactUs=ContactUs::select('*')->get()->first();
        $Contactpages=Page::with('banners')->OrderBy("page_id")->whereIn("page_id",[16])->get()->first();
        $ProgramsCategory=ProgramsCategory::select('*')->where('active',1)->OrderBy("orders")->OrderByDesc("programs_category_id")->get();

        return view('Careers/CareerDetails',["pages"=>$pages,"JobVacancy"=>$JobVacancy,
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
        $JobVacancy=JobVacancy::select('*')->where("is_active",1)->OrderBy("orders")->OrderByDesc("job_vacancy_id")->paginate($perPage);
        $PaginateJobVacancy=json_encode($JobVacancy);

        return $PaginateJobVacancy;
    }

}

?>
