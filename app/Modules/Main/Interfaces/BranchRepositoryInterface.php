<?php

namespace App\Modules\Main\Interfaces;

interface BranchRepositoryInterface{
    public function index();
    public function create(array $data);
    public function update(int $id, array $data);
}
