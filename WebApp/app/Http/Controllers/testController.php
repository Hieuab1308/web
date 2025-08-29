<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testController extends Controller
{
    //
    public function index(){
        $dung = "Say hello \n";
        echo $dung;
        $tuoi = 13;
        if($tuoi > 18){
            echo " tuoi du tuoi";
        }
        else{

         echo "chua du tuoi";
        }

    return view('testView');
    }
}
