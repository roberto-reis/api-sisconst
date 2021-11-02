<?php

namespace App\Http\Controllers;

use App\Repositories\Contracts\OsTiposServicoRepositoryInterface;
use Illuminate\Http\Request;

class OsTiposServicoController extends Controller
{
    protected $osTipoServicoRepository;

    public function __construct(OsTiposServicoRepositoryInterface $model)
    {
        $this->osTipoServicoRepository = $model;
    }
}
