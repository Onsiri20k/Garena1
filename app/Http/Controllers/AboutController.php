<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    function index(){
        $patv = "1.5";
        $games = "Genshin Impact";
        $desc = "Update Zhongli rerun and new banner Eula";
        $address = "Noon";

        return view('about',['patv'=>$patv,'games'=>$games,"desc"=>$desc,'address'=>$address]);
         
    }
}
