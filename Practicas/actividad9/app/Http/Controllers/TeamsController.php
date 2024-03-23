<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teams;
use App\Models\Cities;
//use App\Models\Conferences;
use App\Models\Divisions;

class TeamsController extends Controller
{
    public function index()
    {
        // Obtiene todos los equipos
        $teams = Teams::all();
        // Obtener todos los datos disponibles de las tabla divisions
      
        $availableDivisions = Divisions::all();
    
        // Asignar aleatoriamente valores de divisions a cada equipo
        //Esto lo hago debido a que no de principio no le asigne una conferencia y una division al equipo, por lo cual la unica manera
        //que encontre para que pudiera visualizarse en la tabla fue esta jajaja.
        foreach ($teams as $team) {

            // Seleccionar una división aleatoria
            $randomDivision = $availableDivisions->random();
    
            // Asignar los valores seleccionados al equipo
            $team->conference_id = $randomDivision->id;
            $team->division_id = $randomDivision->id;
    
            // Guardar los cambios
            $team->save();
        }
    
        $teams = Teams::select('teams.id', 'teams.name', 'cities.name as city_name', 'divisions_conference.Conference as conference_title', 'divisions_division.Division as division_name')
        ->join('cities', 'teams.city_id', '=', 'cities.id')
        ->join('divisions as divisions_division', 'teams.division_id', '=', 'divisions_division.id')
        ->join('divisions as divisions_conference', 'teams.conference_id', '=', 'divisions_conference.id')
        ->get();
    
    
        return view('teams.index', compact('teams'));
    }
}
