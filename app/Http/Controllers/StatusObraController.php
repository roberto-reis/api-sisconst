<?php

namespace App\Http\Controllers;

use App\Repositories\Contracts\StatusObraRepositoryInterface;
use Illuminate\Http\Request;

class StatusObraController extends Controller
{
    protected $repositoryStatusObra;
    public function __construct(StatusObraRepositoryInterface $model)
    {
        $this->repositoryStatusObra = $model;
    }
}
