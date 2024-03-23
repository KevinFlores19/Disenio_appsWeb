<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cities;

class CitiesController extends Controller
{
    public function index(){
        $cities = Cities::select('id','name')->get();
        return view('cities.index', compact('cities'));
    }
}
