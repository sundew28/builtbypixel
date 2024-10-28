<?php

namespace App\Repository;
use App\Models\ServiceTypes;
use App\Interfaces\ServiceTypesRepositoryInterface;

class ServiceTypesReposiotry implements ServiceTypesRepositoryInterface
{
    public function index(){
        return ServiceTypes::all();
    }

    public function getById($id){
       return ServiceTypes::findOrFail($id);
    }

    public function store(array $data){
       return ServiceTypes::create($data);
    }

    public function update(array $data,$id){
       return ServiceTypes::whereId($id)->update($data);
    }
    
    public function delete($id){
       ServiceTypes::destroy($id);
    }
}