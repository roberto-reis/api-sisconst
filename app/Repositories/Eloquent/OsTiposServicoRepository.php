<?php

namespace App\Repositories\Eloquent;

use App\Models\OsTiposServico;
use App\Repositories\Contracts\OsTiposServicoRepositoryInterface;

class OsTiposServicoRepository extends AbstractRepository implements OsTiposServicoRepositoryInterface
{
    protected $model = OsTiposServico::class;
}
