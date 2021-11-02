<?php

namespace App\Http\Controllers;

use App\Repositories\Contracts\ClienteRepositoryInterface;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    protected $clienteRepository;
    public function __construct(ClienteRepositoryInterface $model)
    {
        $this->clienteRepository = $model;
    }
}
