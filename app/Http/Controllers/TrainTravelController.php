<?php

namespace App\Http\Controllers;

use App\Train;
use Illuminate\Http\Request;

class TrainTravelController extends Controller
{
    public function index()
    {
        $trains = Train::all();

        return view('home', compact('trains'));
    }
    public function search()
    {       
        $search_text = $_GET['query'];
        $trains = Train::where('company',  'like', '%' . $search_text . '%')->get();        
        return view('search', compact('trains'));
    }

}
