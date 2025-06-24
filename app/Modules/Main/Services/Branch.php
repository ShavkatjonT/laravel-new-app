<?php

namespace App\Modules\Main\Services;

use App\Modules\Main\Interfaces\BranchRepositoryInterface;
use App\Modules\Main\Redis\BranchRedis;

class BranchService
{
    public function __construct(
        protected BranchRepositoryInterface $branchRepository,
        protected BranchRedis $branchRedis
    )
    {

    }

    public function getAllBranches()
    {
        $branches = $this->branchRedis->getAllBranches();
        if ($branches) {
            return $branches;
        }
        $branches = $this->branchRepository->getAllBranches()->toArray();
        if ($branches) {
            $this->branchRedis->setAllBranches( $branches);
        }
        return $branches;
    }

    public function createBranch(array $data)
    {
        return $this->branchRepository->createBranch($data);
    }

    public function updateBranch(int $id, array $data)
    {
        return $this->branchRepository->updateBranch($id, $data);
    }

    public function deleteBranch(int $id)
    {
        return $this->branchRepository->deleteBranch($id);
    }
}
