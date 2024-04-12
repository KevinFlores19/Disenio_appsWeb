<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Logos;

class LogosController extends Controller
{
    public function index(){
        $logos = Logos::select('id','logo_url')->get();
        return view('logos.index', compact('logos'));
    }
}
