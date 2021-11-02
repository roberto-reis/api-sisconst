<?php

namespace App\Http\Controllers;

use App\Repositories\Contracts\EstacaoRepositoryInterface;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class EstacaoController extends Controller
{
    protected $estacaoRepository;

    public function __construct(EstacaoRepositoryInterface $model)
    {
        $this->estacaoRepository = $model;
    }

    public function index(): JsonResponse
    {
        return response()->json($this->estacaoRepository->getAll());
    }
}
