<?php

namespace App\Repositories\Eloquent;

use App\Models\StatusObra;
use App\Repositories\Contracts\StatusObraRepositoryInterface;

class StatusObraRepository extends AbstractRepository implements StatusObraRepositoryInterface
{
    protected $model = StatusObra::class;
}
