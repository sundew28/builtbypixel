<?php

namespace App\Interfaces;

interface MechanicsRepositoryInterface
{   
    public function show();
    public function store(array $data);
    public function update(array $data,$id);
    public function delete($id);
}