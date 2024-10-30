<?php

namespace App\Http\Controllers\Api\ServiceTypes;

use App\Http\Controllers\Controller;
use App\Models\ServiceTypes;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\StoreServiceTypesRequest;
use App\Http\Requests\UpdateServiceTypesRequest;
use App\Interfaces\ServiceTypesRepositoryInterface;
use App\Enums\CommonEnum;

class ServiceTypesController extends Controller
{
    /**
     * Inject the interface to access the service.
     * 
     * @param ServiceTypesRepositoryInterface $serviceTypesRepositoryInterface
     */
    public function __construct(private ServiceTypesRepositoryInterface $serviceTypesRepositoryInterface)
    {
       // $this->serviceTypesRepositoryInterface = $serviceTypesRepositoryInterface;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreServiceTypesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ServiceTypes $serviceTypes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ServiceTypes $serviceTypes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateServiceTypesRequest $request, ServiceTypes $serviceTypes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ServiceTypes $serviceTypes)
    {
        //
    }
}
