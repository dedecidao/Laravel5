<?php

namespace Modules\AppLouco\Repositories\Eloquent;

// entidade
use Modules\AppLouco\Entities\AproveitamentoSolicitacao;
use Modules\AppLouco\Repositories\AproveitamentoSolicitacaoRepository;
use Prettus\Repository\Eloquent\BaseRepository;


// Contrato de Base Repositorio que implementa uma interface
class AproveitamentoSolicitacaoRepositoryEloquent extends BaseRepository implements AproveitamentoSolicitacaoRepository
{
    protected $fieldSearchable = [
        'Solicitante'=>'like',
        'Matricula'=>'like',
        'Nome'=>'like',
    ];


    public function model()
    {
        return AproveitamentoSolicitacao::class;
    }
}
