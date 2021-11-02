<?php

namespace App\Http\Controllers;

use App\Repositories\Contracts\ProjetoTipoServicoRepositoryInterface;
use Illuminate\Http\Request;

class ProjetoTipoServicoController extends Controller
{
    protected $projetoTipoServico;
    public function __construct(ProjetoTipoServicoRepositoryInterface $model)
    {
        $this->projetoTipoServico = $model;
    }
}
