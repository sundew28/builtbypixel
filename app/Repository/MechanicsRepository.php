<?php

namespace App\Repository;

use App\Models\Mechanics;
use App\Interfaces\MechanicsRepositoryInterface;

class MechanicsRepository implements MechanicsRepositoryInterface
{
   /**
     * Display a listing of the resource.
     */
   public function index()
   {
      return Mechanics::all();
   }

   /**
     * Show the record by ID.
     */
   public function getById($id)
   {
      return Mechanics::findOrFail($id);
   }

   /**
     * Store a newly created resource in storage.
     */
   public function store(array $data)
   {
      return Mechanics::create($data);
   }

   /**
     * Update the specified resource in storage.
     */
   public function update(array $data,$id)
   {
      return Mechanics::whereId($id)->update($data);
   }
    
   /**
     * Remove the specified resource from storage.
     */
   public function delete($id)
   {
      Mechanics::destroy($id);
   }
}