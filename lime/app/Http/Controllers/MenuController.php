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
}