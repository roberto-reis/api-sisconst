<?php

namespace App\Repositories\Eloquent;

use App\Models\Obra;
use App\Repositories\Contracts\ObraRepositoryInterface;

class ObraRepository extends AbstractRepository implements ObraRepositoryInterface
{
    protected $model = Obra::class;
}
