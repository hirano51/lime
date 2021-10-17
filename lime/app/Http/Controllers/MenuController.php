<?php

namespace App\Http\Controllers;

use App\Models\TBase;
use App\Models\TMenu;
use App\Models\TCategory;
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

}