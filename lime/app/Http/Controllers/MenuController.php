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
        $base=TBase::getselectedbase(session()->get("userid"));
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
        $base2=TBase::where("user_id",session()->get("userid"))->get()->sortBy("id");
        $tenplist=array();
        for($i=0;$i<count($base2);$i++){
            $tenplist[$i]=["text"=>($i+1).":".$base2[$i]->name,"value"=>$base2[$i]->id];
        }
        return view("menu",compact("base","menu","category","tenplist"));
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
        $base=TBase::getselectedbase(session()->get("userid"))->update(["bg_img"=>$filename]);
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
        $base=TBase::getselectedbase(session()->get("userid"))->update(["top_img"=>$filename]);
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
    $base=TBase::getselectedbase(session()->get("userid"));
    TCategory::create(["base_id"=>$base->id,
                       "name"=>$r->input("category")]);
                       $res["success"]=true;
        return response()->json($res);
}
public function getmenuitem(Request $r)
{
    $base=TBase::getselectedbase(session()->get("userid"));
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
   $base=TBase::getselectedbase(session()->get("userid"));
   $menu=TMenu::create(["base_id"=>$base->id,
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
    $res["menuid"]=$menu->id;
    return response()->json($res);                           
}
// メニュー画像の取り込み
public function menuimageupload(Request $r){
    var_dump($_FILES);
    $file=$_FILES["menuimage"]["tmp_name"];
    $filename=session()->get("userid")."_".$_GET["id"]."_".$_FILES["menuimage"]["name"];
    if(empty($file)||empty($filename)){
        $res["success"]=false;
        $res["error"]["menuimage"]="画像が指定されていません";
        return response()->json($res,400);
    }
    $result=@move_uploaded_file($file,public_path("uploads")."/".$filename);
    if(!$result){
        $res["success"]=false;
        $res["error"]["menuimage"]="画像のアップロードに失敗しました";
        return response()->json($res,400);
    }
    TMenu::where("id",$_GET["id"])->update(["img"=>$filename]);
    $res["success"]=$result;
    return response()->json($res);
}
public function menuupdata(Request $r){
    $param=array();
    parse_str($r["data"],$param);
    TMenu::where("id",$param["menuid"])->update([
                     "name"=>$param["menuname"],
                     "price"=>$param["menuprice"],
                     "cal"=>$param["menucal"],
                     "comment"=>"",
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
public function menudelete(Request $r){
    TMenu::destroy($r->input("menuid"));
    $res["success"]=true;
    return response()->json($res);     
}
public function categorydelete(Request $r){
    TMenu::where("category_id",$r->input("categoryid"))->delete();
    TCategory::destroy($r->input("categoryid"));
    $res["success"]=true;
    return response()->json($res);     
}
public function templateupdate(Request $r){
$base=TBase::getselectedbase(session()->get("userid"))->update(["name"=>$r->input("name")]);
$res["success"]=true;
return response()->json($res);        
}
public function templateswitch(Request $r){
TBase::where("user_id",session()->get("userid"))->update(["selected"=>0]);
TBase::where("id",$r->input("id"))->update(["selected"=>1]);
$res["success"]=true;
return response()->json($res);        
}
public function templatescopy(Request $r){
$base=TBase::where("id",$r->input("srcid"))->first();
$category=TCategory::where("base_id",$r->input("srcid"))->get();
TBase::where("id",$r->input("distid"))->update([
"name"=>$base->name."コピー",
"selected"=>0,
"top_img"=>$base->top_img,
"bg_img"=>$base->bg_img,
"comment"=>$base->comment,
"inuse"=>1,
"editing"=>0,
"edit_end_date"=>"0",
"edit_end_time"=>"0"]);
TCategory::where("base_id",$r->input("distid"))->delete();
TMenu::where("base_id",$r->input("distid"))->delete();
foreach($category as $item){
$menu=TMenu::where([
    ["base_id",$base->id],
    ["category_id",$item->id]
])->get();
$newcategory=TCategory::create(["base_id"=>$r->input("distid"),
                                "name"=>$item->name]);

foreach($menu as $menuitem){
    TMenu::create(["base_id"=>$r->input("distid"),
    "category_id"=>$newcategory->id,
    "name"=>$menuitem->name,
    "price"=>$menuitem->price,
    "cal"=>$menuitem->cal,
    "comment"=>$menuitem->comment,
    "img"=>$menuitem->img,
    "allergies_1"=>$menuitem->allergies_1,
    "allergies_2"=>$menuitem->allergies_2,
    "allergies_3"=>$menuitem->allergies_3,
    "allergies_4"=>$menuitem->allergies_4,
    "allergies_5"=>$menuitem->allergies_5,
    "allergies_6"=>$menuitem->allergies_6,
    "allergies_7"=>$menuitem->allergies_7,
    "allergies_8"=>$menuitem->allergies_8,
    "allergies_9"=>$menuitem->allergies_9,
    "allergies_10"=>$menuitem->allergies_10,
    "allergies_11"=>$menuitem->allergies_11,
    "allergies_12"=>$menuitem->allergies_12,
    "allergies_13"=>$menuitem->allergies_13,
    "allergies_14"=>$menuitem->allergies_14,
    "allergies_15"=>$menuitem->allergies_15,
    "allergies_16"=>$menuitem->allergies_16,
    "allergies_17"=>$menuitem->allergies_17,
    "allergies_18"=>$menuitem->allergies_18,
    "allergies_19"=>$menuitem->allergies_19,
    "allergies_20"=>$menuitem->allergies_20,
    "allergies_21"=>$menuitem->allergies_21,
    "allergies_22"=>$menuitem->allergies_22,
    "allergies_23"=>$menuitem->allergies_23,
    "allergies_24"=>$menuitem->allergies_24,
    "allergies_25"=>$menuitem->allergies_25,
    "allergies_26"=>$menuitem->allergies_26,
    "allergies_27"=>$menuitem->allergies_27,
    "allergies_28"=>$menuitem->allergies_28]);
}                                
}
$res["success"]=true;
return response()->json($res);  
}
}