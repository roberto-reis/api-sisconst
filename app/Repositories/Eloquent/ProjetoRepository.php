<?php

namespace App\Repositories\Eloquent;

use App\Models\Projeto;
use App\Repositories\Contracts\ProjetoRepositoryInterface;

class ProjetoRepository extends AbstractRepository implements ProjetoRepositoryInterface
{
    protected $model = Projeto::class;
}
