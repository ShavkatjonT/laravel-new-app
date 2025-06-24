<?php

namespace App\Modules\Main\Redis;

use Illuminate\Support\Facades\Redis;
use App\Modules\Main\Enums\BranchEnum;

class BranchRedis
{
    public function getAllBranches(): array
    {
        return json_decode(Redis::get(BranchEnum::REDIS_KEY->value), true) ?? [];
    }

    public function setAllBranches(array $branches): void
    {
        Redis::set(BranchEnum::REDIS_KEY->value, json_encode($branches));
    }

    public function deleteAllBranches(): void
    {
        Redis::del(BranchEnum::REDIS_KEY->value);
    }
}
