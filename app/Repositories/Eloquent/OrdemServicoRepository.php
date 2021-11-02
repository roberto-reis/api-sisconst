<?php

namespace App\Repositories\Eloquent;

use App\Models\OrdemServico;
use App\Repositories\Contracts\OrdemServicoRepositoryInterface;

class OrdemServicoRepository extends AbstractRepository implements OrdemServicoRepositoryInterface
{
    protected $model = OrdemServico::class;
}
