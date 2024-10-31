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
use App\Classes\ApiResponseClass;
use App\Http\Resources\MechanicsResource;
use Illuminate\Contracts\Routing\ResponseFactory;

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
           return $this->show();
        }

    }   
    
    /**
      * @OA\Post(
      *     path="/mechanics",
      *     summary="Create a new Mechanic",
      *     tags={"Mechanics"},
      *     @OA\Parameter(
     *         name="first_name",
     *         in="query",
     *         description="Mechanic first name",
     *         required=true,
     *         @OA\Schema(type="string")
     *     ),
     *     @OA\Parameter(
     *         name="last_name",
     *         in="query",
     *         description="Mechanic last name",
     *         required=true,
     *         @OA\Schema(type="string")
     *     ),
      *     @OA\Response(response=200, description="Successful operation"),
      *     @OA\Response(response=400, description="Invalid request")
      * )
      */
     
     /**
      * List all mechanics
      * 
      * @return JsonResponse
      */
    public function store(StoreMechanicsRequest $request): ResponseFactory
    {
        $data = $this->mechanicsRepositoryInterface->show($request);
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
     
     /**
      * List all mechanics
      * 
      * @return JsonResponse
      */
    public function show(): mixed
    {
        $id = (isset($request->id) ? $request->id : null);

        $data = $this->mechanicsRepositoryInterface->show();
        
        return ApiResponseClass::sendResponse(MechanicsResource::collection($data),'List Of Mechanics',200);
        
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
