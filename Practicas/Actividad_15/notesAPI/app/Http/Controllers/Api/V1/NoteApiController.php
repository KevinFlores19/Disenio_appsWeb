<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\notes;
use Illuminate\Http\Request;

class NoteApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return notes::select('id', 'title', 'content')
        ->where('active', 1)
        ->get();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return notes::nota_por_id($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, notes $notes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(notes $notes)
    {
        //
    }
}
