<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\Workers;
use Illuminate\Http\Request;

class WorkersApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Workers::select('id', 'name', 'user_name','password','role_id')
        ->get();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validar los datos del formulario
        $validatedData = $request->validate([
            'name' => 'required|string',
            'user_name' => 'required|string|unique:workers',
            'password' => 'required|string',
            'role_id' => 'required|exists:roles,id',
        ]);

        // Crear un nuevo usuario
        $user = Workers::create([
            'name' => $validatedData['name'],
            'user_name' => $validatedData['user_name'],
            'password' => bcrypt($validatedData['password']), // Asegura que la contraseña esté cifrada
            'role_id' => $validatedData['role_id'],
        ]);

// Devolver una respuesta de éxito
return response()->json($user, 201);
               
    }

    /**
     * Display the specified resource.
     */
    public function show(Workers $workers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Workers $workers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Workers $workers)
    {
        //
    }
}
