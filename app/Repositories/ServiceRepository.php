<?php

namespace App\Repository;
use App\Models\Service;
use App\Interfaces\ServiceRepositoryInterface;

class ServiceReposiotry implements ServiceRepositoryInterface
{
    public function index(){
        return Service::all();
    }

    public function getById($id){
       return Service::findOrFail($id);
    }

    public function store(array $data){
       return Service::create($data);
    }

    public function update(array $data,$id){
       return Service::whereId($id)->update($data);
    }
    
    public function delete($id){
       Service::destroy($id);
    }
}