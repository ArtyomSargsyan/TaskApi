<?php

namespace  App\Repositories;

interface PhoneRepositoryInterface
{
    public function getAll();
    public function edit($id);
    public function store($data);
    public function delete($id);
}