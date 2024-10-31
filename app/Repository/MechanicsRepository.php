<?php

namespace App\Repository;

use App\Models\Mechanics;
use App\Interfaces\MechanicsRepositoryInterface;

class MechanicsRepository implements MechanicsRepositoryInterface
{
   /**
     * Display a listing of the resource or ID.
     */ 
   public function show()
   {
      /*if (filter_var($id, FILTER_VALIDATE_INT)) {
            return Mechanics::findOrFail($id);
      }
      */
      return Mechanics::all();
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