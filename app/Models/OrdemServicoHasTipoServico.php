<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrdemServicoHasTipoServico extends Model
{
    use HasFactory;
    protected $table = 'ordem_servicos_has_tipo_servicos';
}
