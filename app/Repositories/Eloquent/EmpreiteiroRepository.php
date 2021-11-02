<?php

namespace App\Repositories\Eloquent;

use App\Models\Empreiteiro;
use App\Repositories\Contracts\EmpreiteiroRepositoryInterface;

class EmpreiteiroRepository extends AbstractRepository implements EmpreiteiroRepositoryInterface
{
    protected $model = Empreiteiro::class;
}
