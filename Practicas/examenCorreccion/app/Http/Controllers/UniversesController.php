<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Universes;

class UniversesController extends Controller
{
    public function index(){
        $universes = Universes::select('id','universe_name')->get();
        return view('universes.index', compact('universes'));
    }
}
