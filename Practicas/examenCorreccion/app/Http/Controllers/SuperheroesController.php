<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Superheroes;

class SuperheroesController extends Controller
{
    public function index(){
        $superheroes = Superheroes::select('id','hero_name','real_name','gender','universe_id','logo_id')->get();
        return view('superheroes.index', compact('superheroes'));
    }
}
