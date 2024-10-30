<?php

namespace App\Http\Controllers\Api\Mechanics;

use App\Http\Controllers\Controller;
use App\Models\Mechanics;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\StoreMechanicsRequest;
use App\Http\Requests\UpdateMechanicsRequest;
use App\Interfaces\MechanicsRepositoryInterface;
use App\Enums\CommonEnum;

class MechanicsController extends Controller
{
    /**
     * Inject the interface to access the service.
     * 
     * @param MechanicsRepositoryInterface $mechanicsRepositoryInterface
     */
    public function __construct(private MechanicsRepositoryInterface $mechanicsRepositoryInterface)
    {
        //$this->mechanicsRepositoryInterface = $mechanicsRepositoryInterface;
    }

    public function handle(Request $request, $id = null)
    {
        if ($request->isMethod('get')) {            
           return $this->show($request, $id);
        }

    }

    
    public function index()
    {
        //dd('hello2');
    }    

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMechanicsRequest $request)
    {
        //
    }

    /**
      * @OA\Get(
      *     path="/mechanics",
      *     summary="Display a list of the Mechanics or by ID.",
      *     tags={"Mechanics"},
      *     @OA\Response(response=200, description="Successful operation"),
      *     @OA\Response(response=400, description="Invalid request")
      * )
      */
    public function show($request, $id = null)
    {
        dd('done again');
        return $this->mechanicsRepositoryInterface->show($request, $id);
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
