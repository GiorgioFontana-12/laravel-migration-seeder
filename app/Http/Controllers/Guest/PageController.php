<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Train;

class PageController extends Controller
{
    public function index(){

        $i=1;
        $trains = Train::where('departure_date','=','29/06/2023')->get();
        return view('welcome', compact( 'trains','i'));

        
    }

}