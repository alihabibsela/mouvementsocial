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
use App\Models\News;
use App\Models\ContactUs;
use App\Models\ProgramsCategory;

class NewsController extends Controller
{

    public function Index()
    {
        session_start();
        $_SESSION["page"]=4;
        HomeController::SetDefaultLng();
        $page=1;
        $perPage=12;
        if(isset($_GET["page"])){
            $page=$_GET["page"];
        }

        $pages=Page::with('banners')->OrderBy("page_id")->whereIn("page_id",[17])->first();
        $News=News::with('main_image')->OrderByDesc("dates")->OrderByDesc("news_id")->paginate($perPage);
        $PaginateNews=json_encode($News);
        $PaginateNews=json_decode($PaginateNews);
        //print_r(json_encode($PaginateNews));die();
        $ContactUs=ContactUs::select('*')->get()->first();
        $Contactpages=Page::with('banners')->OrderBy("page_id")->whereIn("page_id",[16])->get()->first();
        $ProgramsCategory=ProgramsCategory::select('*')->where('active',1)->OrderBy("orders")->OrderByDesc("programs_category_id")->get();

        return view('News/index',["pages"=>$pages,"News"=>$PaginateNews,
        "ContactUs"=>$ContactUs,
        "Contactpages"=>$Contactpages,
        "ProgramsCategoryMenu"=> $ProgramsCategory
        ]);
    }
    public function Details($name)
    {
        session_start();
        $_SESSION["page"]=4;
        HomeController::SetDefaultLng();
        $pages=Page::with('banners')->OrderBy("page_id")->whereIn("page_id",[17])->first();
        $News=News::with('news_images')->where("title_en",'like', '%' . $name . '%')->first();
        //print_r(json_encode($News));die();
        $ContactUs=ContactUs::select('*')->get()->first();
        $Contactpages=Page::with('banners')->OrderBy("page_id")->whereIn("page_id",[16])->get()->first();
        return view('News/details',["pages"=>$pages,"News"=>$News,
        "ContactUs"=>$ContactUs,
        "Contactpages"=>$Contactpages]);
    }

}

?>
