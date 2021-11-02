<?php

namespace App\Repositories\Eloquent;

use App\Models\AceTiposServico;
use App\Repositories\Contracts\AceTiposServicoRepositoryInterface;

class AceTiposServicoRepository extends AbstractRepository implements AceTiposServicoRepositoryInterface
{
    protected $model = AceTiposServico::class;
}
