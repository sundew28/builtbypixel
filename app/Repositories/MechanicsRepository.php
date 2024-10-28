<?php

namespace App\Repository;
use App\Models\Mechanics;
use App\Interfaces\MechanicsRepositoryInterface;

class MechanicsReposiotry implements MechanicsRepositoryInterface
{
    public function index(){
        return Mechanics::all();
    }

    public function getById($id){
       return Mechanics::findOrFail($id);
    }

    public function store(array $data){
       return Mechanics::create($data);
    }

    public function update(array $data,$id){
       return Mechanics::whereId($id)->update($data);
    }
    
    public function delete($id){
       Mechanics::destroy($id);
    }
}