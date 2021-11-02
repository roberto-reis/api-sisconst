<?php

namespace App\Http\Controllers;

use App\Repositories\Contracts\OrdemServicoRepositoryInterface;
use Illuminate\Http\Request;

class OrdemServicoController extends Controller
{
    protected $reposytoryOrdemServico;

    public function __construct(OrdemServicoRepositoryInterface $model)
    {
        $this->reposytoryOrdemServico = $model;
    }
}
