<?php

namespace App\Http\Controllers;

use App\Models\MUser;
use App\Models\TBase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function index()
    {
        return view("login");
    }
    //ログイン
    public function check(Request $r)
    {
        $res["success"]=true;
        $validator=Validator::make($r->all(),[
            "mail" => "required",
            "pw" => "required",
        ],[
            "mail.required" => "メールアドレスが入力されていません",
            "pw.required" => "パスワードが入力されていません",
        ]);
        if($validator->fails()){
            $res["success"]=false;
            $res["error"]=$validator->getMessageBag()->toArray();
            return response()->json($res,400);
        }

        $data = MUser::where("mail", $r->input("mail")) ->get();
        if($data == null || count($data) == 0){
            $res["success"]=false;
            $res["error"]["mail"]="メールアドレスまたはパスワードが不正です";
            return response()->json($res,400);
        }
        //データベースから取得したパスワードが入力したパスワードと一致しない場合
        if($data[0]->pw != $r->input("pw")){
            $res["success"]=false;
            $res["error"]["mail"]="メールアドレスまたはパスワードが不正です";
            return response()->json($res,400);
        }
        session()->put("userid",$data[0]->id);
        
        return response()->json($res);
    }
    // 新規登録
    public function entrycheck(Request $r)
    {
        $res["success"]=true;
        $validator=Validator::make($r->all(),[
            "mail" => "required",
            "pw" => "required",
            "url" => "required",
        ],[
            "mail.required" => "メールアドレスが入力されていません",
            "pw.required" => "パスワードが入力されていません",
            "url.required" => "urlが入力されていません",
        ]);
        if($validator->fails()){
            $res["success"]=false;
            $res["error"]=$validator->getMessageBag()->toArray();
            return response()->json($res,400);
        }

        $data = MUser::where("mail", $r->input("mail")) ->get();
        if($data != null && count($data) > 0){
            $res["success"]=false;
            $res["error"]["mail"]="すでに登録されているメールアドレスです";
            return response()->json($res,400);
        }
        
        $user=MUser::create(["mail"=>$r->input("mail"),
                       "pw"=>$r->input("pw"),
                       "url"=>$r->input("url") . "." . $r->input("domain")]);
                       session()->put("userid",$user->id);
                       for($i=0;$i<5;$i++){
                        TBase::create(["user_id"=>$user->id,
                            "name"=>"",
                            "selected"=>$i==0 ? 1 : 0,
                            "top_img"=>"",
                            "bg_img"=>"",
                            "comment"=>"",
                            "inuse"=>1,
                            "editing"=>0,
                            "edit_end_date"=>"0",
                            "edit_end_time"=>"0"]);
                    }
        return response()->json($res);
    }
    public function new(Request $r)
{
    if ($_POST["btn2"]!=""){
           

        if($_POST["mail"]==""){
            $emailerr="メールが入力されていません";
        }

        if($_POST["pw"]==""){
            $pwerr="パスワードが入力されていません";
        }

        if($_POST["url"]==""){
            $urlerr="urlが入力されていません";
        }
        return view("home",compact("emailerr","pwerr","urlerr"));

        }
    }
}