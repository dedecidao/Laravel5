<?php

namespace Modules\AppLouco\Services;

use Modules\AppLouco\Repositories\AproveitamentoSolicitacaoRepository;
use Illuminate\Support\Facades\DB;

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