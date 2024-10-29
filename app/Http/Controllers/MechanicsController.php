<?php

namespace App\Http\Controllers;

use App\Models\Mechanics;
use App\Http\Requests\StoreMechanicsRequest;
use App\Http\Requests\UpdateMechanicsRequest;

class MechanicsController extends Controller
{    
    /**
      * @OA\Get(
      *     path="/mechanics",
      *     summary="Display a listing of the Mechanics.",
      *     tags={"Mechanics"},
      *     @OA\Response(response=200, description="Successful operation"),
      *     @OA\Response(response=400, description="Invalid request")
      * )
      */
    public function index()
    {
        //
    }    

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMechanicsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Mechanics $mechanics)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mechanics $mechanics)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMechanicsRequest $request, Mechanics $mechanics)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mechanics $mechanics)
    {
        //
    }
}
