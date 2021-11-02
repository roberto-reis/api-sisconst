<?php

namespace App\Repositories\Eloquent;

use App\Models\Permissao;
use App\Repositories\Contracts\PermissaoRepositoryInterface;

class PermissaoRepository extends AbstractRepository implements PermissaoRepositoryInterface
{
    protected $model = Permissao::class;
}
