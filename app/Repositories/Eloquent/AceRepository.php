<?php

namespace App\Repositories\Eloquent;

use App\Models\Ace;
use App\Repositories\Contracts\AceRepositoryInterface;

class AceRepository extends AbstractRepository implements AceRepositoryInterface
{
    protected $model = Ace::class;
}
