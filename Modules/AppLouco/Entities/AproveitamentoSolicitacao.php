<?php

namespace Modules\AppLouco\Entities;

use Illuminate\Database\Eloquent\Model;

class AproveitamentoSolicitacao extends Model
{
    protected $table = 'aproveitamento_solicitacao';

    protected $fillable = [
        'Solicitante',
        'Matricula',
        'Nome',
        'Curso',
        'Disciplina',
        'CargaHoraria',
        'Data',
        'Status',
        'Observacao',
        'user_id',
    ];
}