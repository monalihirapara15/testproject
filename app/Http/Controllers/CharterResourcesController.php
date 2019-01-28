<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CharterResTypes;
use DB;

class CharterResourcesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $results = CharterResTypes::all();
        return view('category.index',compact('results'));
    }
    
    
}
