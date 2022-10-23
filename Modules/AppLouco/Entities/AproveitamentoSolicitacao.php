<?php

namespace Modules\AppLouco\Entities;

use Illuminate\Database\Eloquent\Model;


class AproveitamentoSolicitacao extends Model
{
    protected $table = 'aproveitamento_solicitacao';

    protected $fillable = [
        'id',
        'data_solicitacao',
        'modalidade',
        'matricula',
        'encaminhadoPor',
    ];
}