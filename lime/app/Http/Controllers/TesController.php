<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TesController extends Controller
{
    public function index()
    {
           $usererr="";
           $pwerr="";
           $shopcodeerr="";
        return view("tes",compact("usererr","pwerr","shopcodeerr"));
    }

    public function check(Request $r)
    {
        $res["success"]=true;
        $validator=Validator::make($r->all(),[
            "user" => "required",
            "pw" => "required",
            "shopcode" => "required",
        ],[
            "user.required" => "ユーザーIDが入力されていません",
            "pw.required" => "パスワードが入力されていません",
            "shopcode.required" => "店舗コード入力されていません",
        ]);
        if($validator->fails()){
            $res["success"]=false;
            $res["error"]=$validator->getMessageBag()->toArray();
            return response()->json($res,400);
        }
        return response()->json($res);
    }
    public function tes2(Request $r)
    {

        if ($_POST["btn"]!=""){
           

            if($_POST["user"]==""){
                $usererr="メールが入力されていません";
            }

            if($_POST["pw"]==""){
                $pwerr="パスワードが入力されていません";
            }

            if($_POST["shopcode"]==""){
                $shopcodeerr="店舗コードが入力されていません";
            }
            return view("tes",compact("usererr","pwerr","shopcodeerr"));

            }
        }
        
        

        
    }
