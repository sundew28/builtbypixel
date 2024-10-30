<?php

namespace App\Interfaces;

interface MechanicsRepositoryInterface
{
    public function index();
    public function show(array $data, $id);
    public function store(array $data);
    public function update(array $data,$id);
    public function delete($id);
}