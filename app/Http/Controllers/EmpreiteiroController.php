<?php

namespace App\Http\Controllers;

use App\Repositories\Contracts\EmpreiteiroRepositoryInterface;
use Illuminate\Http\Request;

class EmpreiteiroController extends Controller
{
    protected $repositoryEmpreiteiro;

    public function __construct(EmpreiteiroRepositoryInterface $model)
    {
        $this->repositoryEmpreiteiro = $model;
    }
}
