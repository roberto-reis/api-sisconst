<?php

namespace App\Repositories\Eloquent;

use App\Models\Estacao;
use App\Repositories\Contracts\EstacaoRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

class EstacaoRepository extends AbstractRepository implements EstacaoRepositoryInterface
{
    protected $model = Estacao::class;
}
