<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemberController extends Controller
{
    function index(){


        $mayom = "1.5";
        $luca = "Genshin Impact";
        $oppa = "Update Zhongli rerun and new banner Eula";
        $jiso = "Noon";

        return view('member.index',['mayom'=>$mayom,'luca'=>$luca,'oppa'=>$oppa,'jiso'=>$jiso]);
    }
}
