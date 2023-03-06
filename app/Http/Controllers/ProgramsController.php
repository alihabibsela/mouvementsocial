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
use App\Models\ProgramsCategory;
use App\Models\ContactUs;

class ProgramsController extends Controller
{

    public function Index($id)
    {
        session_start();
        $_SESSION["page"]=3;
        HomeController::SetDefaultLng();

         $page=1;
         $perPage=9;
         if(isset($_GET["page"])){
             $page=$_GET["page"];
         }

        //programs_category_id
        $ProgramsCategoryItem=ProgramsCategory::select('*')->where('active',1)->where('programs_category_id',$id)->OrderBy("orders")->OrderByDesc("programs_category_id")->get();



        //if(!isset($_GET["cat"])&&sizeof($ProgramsCategory)>0){
        //    $_GET["cat"]=$id;
        //}
        $pages=Page::with('banners')->OrderBy("page_id")->whereIn("page_id",[9])->first();

         //if(isset($_GET["cat"])){
             $programs=Programs::with('program_images','programs_category','programs_donors','program_main_image')->where("programs_category_id",$id)->OrderByDesc("date")->paginate($perPage);
         //}else{
             //$programs=Programs::with('program_images','programs_category','programs_donors','program_main_image')->OrderByDesc("date")->paginate($perPage);
         //}


        // $PaginatePrograms=json_encode($programs);
        // $PaginatePrograms=json_decode($PaginatePrograms);
        //print_r(json_encode($PaginatePrograms));die();
        $ContactUs=ContactUs::select('*')->get()->first();
        $Contactpages=Page::with('banners')->OrderBy("page_id")->whereIn("page_id",[16])->get()->first();
        $ProgramsCategory=ProgramsCategory::select('*')->where('active',1)->OrderBy("orders")->OrderByDesc("programs_category_id")->get();

        $PaginatePrograms=json_encode($programs);
        $PaginatePrograms=json_decode($PaginatePrograms);

        foreach ($PaginatePrograms->data as $key => $item) {

            if ($item->date != '0000-00-00'){
                $date = Carbon::parse($item->date)->locale($_SESSION["lng"]);
                $item->date =$date->isoFormat('DD MMM');
            }

            $item->description_en=substr(strip_tags($item->description_en), 0, 90);
            $item->description_ar=substr(strip_tags($item->description_ar), 0, 90);
            $item->description_fr=substr(strip_tags($item->description_fr), 0, 90);
        }

        //print_r($PaginatePrograms);die();

        return view('Programs/index',["pages"=>$pages,
        "programs"=>$PaginatePrograms,
        "ProgramsCategory"=>$ProgramsCategoryItem,
        "ContactUs"=>$ContactUs,
        "Contactpages"=>$Contactpages,
        "PaginatePrograms"=>$PaginatePrograms,
        "ProgramsCategoryMenu"=>$ProgramsCategory]);
    }

    //programsData
    public function programsData()
    {
        session_start();
        HomeController::SetDefaultLng();

        $page=1;
        $perPage=9;
        if(isset($_GET["page"])){
            $page=$_GET["page"];
        }

        $ProgramsCategory=ProgramsCategory::select('*')->OrderBy("orders")->OrderByDesc("programs_category_id")->get();

        if(!isset($_GET["cat"])&&sizeof($ProgramsCategory)>0){
            $_GET["cat"]=$ProgramsCategory[0]->programs_category_id;
        }

        if(isset($_GET["cat"])){
            $programs=Programs::with('program_images','programs_category','programs_donors','program_main_image')->where("programs_category_id",$_GET["cat"])->OrderByDesc("date")->paginate($perPage);
        }else{
            $programs=Programs::with('program_images','programs_category','programs_donors','program_main_image')->OrderByDesc("date")->paginate($perPage);
        }


        $PaginatePrograms=json_encode($programs);
        $PaginatePrograms=json_decode($PaginatePrograms);

        foreach ($PaginatePrograms->data as $key => $item) {

            if ($item->date != '0000-00-00'){
                $date = Carbon::parse($item->date)->locale($_SESSION["lng"]);
                $item->date =$date->isoFormat('DD MMM');
            }

            $item->description_en=substr(strip_tags($item->description_en), 0, 90);
            $item->description_ar=substr(strip_tags($item->description_ar), 0, 90);
            $item->description_fr=substr(strip_tags($item->description_fr), 0, 90);
        }

        print_r(json_encode($PaginatePrograms));die();
        //return json_encode($PaginatePrograms);
        //return view('Programs/index',["programs"=>$PaginatePrograms]);
    }
    public function Details($name)
    {
        session_start();
        $_SESSION["page"]=3;
        HomeController::SetDefaultLng();
        $pages=Page::with('banners')->OrderBy("page_id")->whereIn("page_id",[9])->first();
        $programs=Programs::with('program_images','programs_category','programs_donors','program_main_image')->where("title_en",'like', '%' . $name . '%')->first();
        //print_r(json_encode($programs));die();
        $ContactUs=ContactUs::select('*')->get()->first();
        $Contactpages=Page::with('banners')->OrderBy("page_id")->whereIn("page_id",[16])->get()->first();
        $ProgramsCategory=ProgramsCategory::select('*')->where('active',1)->OrderBy("orders")->OrderByDesc("programs_category_id")->get();

        return view('Programs/details',["pages"=>$pages,"programs"=>$programs,
        "ContactUs"=>$ContactUs,
        "Contactpages"=>$Contactpages,
        "ProgramsCategoryMenu"=>$ProgramsCategory]);
    }
    public function DetailsHome($name)
    {
        session_start();
        $_SESSION["page"]=3;
        HomeController::SetDefaultLng();
        $pages=Page::with('banners')->OrderBy("page_id")->whereIn("page_id",[9])->first();
        $programs=Programs::with('program_images','programs_category','programs_donors','program_main_image')->where("title_en",'like', '%' . $name . '%')->first();
        //print_r(json_encode($programs));die();
        $ContactUs=ContactUs::select('*')->get()->first();
        $Contactpages=Page::with('banners')->OrderBy("page_id")->whereIn("page_id",[16])->get()->first();
        $ProgramsCategory=ProgramsCategory::select('*')->where('active',1)->OrderBy("orders")->OrderByDesc("programs_category_id")->get();

        return view('Programs/detailsHome',["pages"=>$pages,"programs"=>$programs,
        "ContactUs"=>$ContactUs,
        "Contactpages"=>$Contactpages,
        "ProgramsCategoryMenu"=>$ProgramsCategory]);
    }

}


?>
