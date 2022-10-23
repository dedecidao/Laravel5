<?php

namespace Modules\AppLouco\Services;

use Modules\AppLouco\Repositories\AproveitamentoSolicitacaoRepository;

class AproveitamentoServices
{
    public function __construct()
    {
    }

    public function getSolicitacoes()
    {
        return app(AproveitamentoSolicitacaoRepository::class);
    }


}