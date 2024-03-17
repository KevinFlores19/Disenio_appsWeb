<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Conferences;

class ConferencesController extends Controller
{
    public function index(){
        $conferences = Conferences::select('id','Title','Conference')->get();
        return view('conferences.index', compact('conferences'));
    }
}
