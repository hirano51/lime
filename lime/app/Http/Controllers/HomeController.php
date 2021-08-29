<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
           $emailerr="";
           $pwerr="";
           $urlerr="";
           $err="";
        return view("home",compact("emailerr","pwerr","urlerr"));
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
