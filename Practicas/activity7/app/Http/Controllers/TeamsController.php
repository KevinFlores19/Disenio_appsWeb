<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teams;
use App\Models\Cities;
use App\Models\Conferences;
use App\Models\Divisions;

class TeamsController extends Controller
{
    public function index()
    {
        $teams = Teams::select('teams.id', 'teams.name', 'cities.name as city_name', 'conferences.Title as conference_title', 'divisions.Division as division_name')
            ->join('cities', 'teams.city_id', '=', 'cities.id')
            ->join('divisions', 'cities.name', '=', 'divisions.Conference')
            ->join('conferences', 'divisions.Conference', '=', 'conferences.Conference')
            ->get();

        return view('teams.index', compact('teams'));
    }
}

