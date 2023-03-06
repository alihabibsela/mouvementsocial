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
use App\Models\Publication;
use App\Models\ContactUs;
use App\Models\ProgramsCategory;
use App\Models\PublicationCategory;

class PublicationsController extends Controller
{

    public function landing()
    {
        session_start();
        $_SESSION["page"] = 6;
        HomeController::SetDefaultLng();
        $publicationsCategories = PublicationCategory::all();
        $pages = Page::with('banners')->OrderBy("page_id")->whereIn("page_id", [27])->first();
        $ProgramsCategory = ProgramsCategory::select('*')->where('active', 1)->OrderBy("orders")->OrderByDesc("programs_category_id")->get();
        $ContactUs = ContactUs::select('*')->get()->first();
        $Contactpages = Page::with('banners')->OrderBy("page_id")->whereIn("page_id", [16])->get()->first();
        //dd($pages);
        return view('Publications/main', [
            'categories' => $publicationsCategories,
            'pages' => $pages,
            "ProgramsCategoryMenu" => $ProgramsCategory,
            "ContactUs" => $ContactUs,
            "Contactpages" => $Contactpages,
        ]);
    }

    public function Index($id)
    {
        $page=1;
        $perPage=12;
        if(isset($_GET["page"])){
            $page=$_GET["page"];
        }

        session_start();
        $_SESSION["page"]=6;
        HomeController::SetDefaultLng();
        $pages=Page::with('banners')->OrderBy("page_id")->whereIn("page_id",[11])->first();
        $Publication=Publication::select('*')->where('publication_category_id', $id)->OrderByDesc("publication_id")->paginate($perPage);
        $PaginatePublication=json_encode($Publication);
        $PaginatePublication=json_decode($PaginatePublication);
        $ContactUs=ContactUs::select('*')->get()->first();
        $Contactpages=Page::with('banners')->OrderBy("page_id")->whereIn("page_id",[16])->get()->first();
        $ProgramsCategory=ProgramsCategory::select('*')->where('active',1)->OrderBy("orders")->OrderByDesc("programs_category_id")->get();
        return view('Publications/index',["pages"=>$pages,"Publication"=>$PaginatePublication,
        "ContactUs"=>$ContactUs,
        "Contactpages"=>$Contactpages,
        "ProgramsCategoryMenu"=> $ProgramsCategory]);
    }
    public function Details($name)
    {
        session_start();
        $_SESSION["page"]=6;
        HomeController::SetDefaultLng();
        $pages=Page::with('banners')->OrderBy("page_id")->whereIn("page_id",[11])->first();
        $Publication=Publication::select('*')->where("title_en",'like', '%' . $name . '%')->first();
        $ContactUs=ContactUs::select('*')->get()->first();
        $Contactpages=Page::with('banners')->OrderBy("page_id")->whereIn("page_id",[16])->get()->first();
        return view('Publications/details',["pages"=>$pages,"Publication"=>$Publication,
        "ContactUs"=>$ContactUs,
        "Contactpages"=>$Contactpages]);
    }

}

?>
