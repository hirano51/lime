<?php

namespace App\Http\Controllers;

use App\Models\MUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function index()
    {
          
        return view("home");
    }

    public function check(Request $r)
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
        
        MUser::create(["mail"=>$r->input("mail"),
                       "pw"=>$r->input("pw"),
                       "url"=>$r->input("url")]);
        return response()->json($res);
    }
    public function new(Request $r)
    {

        if ($_POST["btn1"]!=""||$_POST["btn2"]!=""){
           

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
