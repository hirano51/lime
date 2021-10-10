<?php

namespace App\Http\Controllers;

use App\Models\TBase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MenuController extends Controller
{
    public function index()
    {
        $base=TBase::where("user_id",session()->get("userid"))->first();
        return view("menu",compact("base"));
    } 

}