<?php

namespace App\Http\Controllers;

use App\Models\TBase;
use App\Models\TMenu;
use App\Models\TCategory;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MenuController extends Controller
{
    public function index()
    {
        $base=TBase::where("user_id",session()->get("userid"))->first();
        $menu=null;
        $category=null;
        if($base!=null){
        $category=TCategory::where("base_id",$base->id)->get()->sortBy("id");
        if(count($category)>0){
        $menu=TMenu::where([
            ["base_id",$base->id],
            ["category_id",$category[0]->id]
        ])->get();
        }
        }
        return view("menu",compact("base","menu","category"));
    } 
    public function bgimgupload()
    {
        var_dump($_FILES);
        $file=$_FILES["bgimg"]["tmp_name"];
        $filename=session()->get("userid")."_".$_FILES["bgimg"]["name"];
        if(empty($file)||empty($filename)){
            $res["success"]=false;
            $res["error"]["bgimg"]="画像が指定されていません";
            return response()->json($res,400);
        }
        $result=@move_uploaded_file($file,public_path("uploads")."/".$filename);
        if(!$result){
            $res["success"]=false;
            $res["error"]["bgimg"]="画像のアップロードに失敗しました";
            return response()->json($res,400);
        }
        TBase::where("user_id",session()->get("userid"))->update(["bg_img"=>$filename]);
        $res["success"]=$result;
        return response()->json($res);

    }
    public function topimgupload()
    {
        var_dump($_FILES);
        $file=$_FILES["topimg"]["tmp_name"];
        $filename=session()->get("userid")."_".$_FILES["topimg"]["name"];
        if(empty($file)||empty($filename)){
            $res["success"]=false;
            $res["error"]["topimg"]="画像が指定されていません";
            return response()->json($res,400);
        }
        $result=@move_uploaded_file($file,public_path("uploads")."/".$filename);
        if(!$result){
            $res["success"]=false;
            $res["error"]["topimg"]="画像のアップロードに失敗しました";
            return response()->json($res,400);
        }
        TBase::where("user_id",session()->get("userid"))->update(["top_img"=>$filename]);
        $res["success"]=$result;
        return response()->json($res);

    }
public function addcategory(Request $r)
{
    if(empty($r ->input("category"))){
        $res["success"]=false;
        $res["error"]["errorcategory"]="カテゴリーが入力されていません";
        return response()->json($res,400);
    }
    $base=TBase::where("user_id",session()->get("userid"))->first();
    TCategory::create(["base_id"=>$base->id,
                       "name"=>$r->input("category")]);
                       $res["success"]=true;
        return response()->json($res);
}
public function getmenuitem(Request $r)
{
    $base=TBase::where("user_id",session()->get("userid"))->first();
    $cond=[["base_id",$base->id],["category_id",$r->input("category")]];
    if(!empty($r->input("text"))){
    $cond=array_merge($cond,[["name","like","%".$r->input("text")."%"]]);
    }
    $menu=TMenu::where($cond)->get();
    return view("menu_item",compact("menu"));
}
public function menuentry(Request $r)
{
   $param=array();
   parse_str($r["data"],$param);
   $base=TBase::where("user_id",session()->get("userid"))->first();  
   TMenu::create(["base_id"=>$base->id,
                    "category_id"=>$param["menucategory"],
                        "name"=>$param["menuname"],
                            "price"=>$param["menuprice"],
                                "cal"=>$param["menucal"],
                            "comment"=>"",
                        "img"=>"",
                    "allergies_1"=>isset($param["allergies1"]) ? 1 : 0,
                    "allergies_2"=>isset($param["allergies2"]) ? 1 : 0,
                    "allergies_3"=>isset($param["allergies3"]) ? 1 : 0,
                    "allergies_4"=>isset($param["allergies4"]) ? 1 : 0,
                    "allergies_5"=>isset($param["allergies5"]) ? 1 : 0,
                    "allergies_6"=>isset($param["allergies6"]) ? 1 : 0,
                    "allergies_7"=>isset($param["allergies7"]) ? 1 : 0,
                    "allergies_8"=>isset($param["allergies8"]) ? 1 : 0,
                    "allergies_9"=>isset($param["allergies9"]) ? 1 : 0,
                    "allergies_10"=>isset($param["allergies10"]) ? 1 : 0,
                    "allergies_11"=>isset($param["allergies11"]) ? 1 : 0,
                    "allergies_12"=>isset($param["allergies12"]) ? 1 : 0,
                    "allergies_13"=>isset($param["allergies13"]) ? 1 : 0,
                    "allergies_14"=>isset($param["allergies14"]) ? 1 : 0,
                    "allergies_15"=>isset($param["allergies15"]) ? 1 : 0,
                    "allergies_16"=>isset($param["allergies16"]) ? 1 : 0,
                    "allergies_17"=>isset($param["allergies17"]) ? 1 : 0,
                    "allergies_18"=>isset($param["allergies18"]) ? 1 : 0,
                    "allergies_19"=>isset($param["allergies19"]) ? 1 : 0,
                    "allergies_20"=>isset($param["allergies20"]) ? 1 : 0,
                    "allergies_21"=>isset($param["allergies21"]) ? 1 : 0,
                    "allergies_22"=>isset($param["allergies22"]) ? 1 : 0,
                    "allergies_23"=>isset($param["allergies23"]) ? 1 : 0,
                    "allergies_24"=>isset($param["allergies24"]) ? 1 : 0,
                    "allergies_25"=>isset($param["allergies25"]) ? 1 : 0,
                    "allergies_26"=>isset($param["allergies26"]) ? 1 : 0,
                    "allergies_27"=>isset($param["allergies27"]) ? 1 : 0,
                    "allergies_28"=>isset($param["allergies28"]) ? 1 : 0]);
    $res["success"]=true;
    return response()->json($res);                           
}
}