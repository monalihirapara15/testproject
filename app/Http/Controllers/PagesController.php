<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    //
    public function home() {
        
        //$menus=["dfgdfg","dsgsdfdsf"];
        $menus=DB::table('menus')->get();
        return view('welcome',compact('menus'));
    }
    
}
