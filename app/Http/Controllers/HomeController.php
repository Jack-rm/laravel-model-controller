<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Movie;

class HomeController extends Controller
{
    public function index(){
        
        $movies = Movie::all();

        $data = compact('movies');

        return view('home', $data);
    }
}
