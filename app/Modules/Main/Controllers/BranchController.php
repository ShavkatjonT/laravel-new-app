<?php

namespace App\Modules\Main\Controllers;

use App\Modules\Main\Model\Branch;

class BranchController extends Controller
{
    public function index()
    {
        return Branch::all();
    }

    public function store(BranchRequest $request)
    {
        return Branch::create($request->validated());
    }

    public function show(Branch $branch)
    {
        return $branch;
    }

    public function update(BranchRequest $request, Branch $branch)
    {
        $branch->update($request->validated());

        return $branch;
    }

    public function destroy(Branch $branch)
    {
        $branch->delete();

        return response()->json();
    }
}
