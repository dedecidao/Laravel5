<?php

namespace Modules\AppLouco\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\AppLouco\Services\AproveitamentoServices;

class AppLoucoController extends Controller
{
    // Serviço de Aproveitamento de Disciplinas
    protected $aproveitamentoServices;

    // Injeção de dependência
    public function __construct(AproveitamentoServices $aproveitamentoServices)
    {
        $this->aproveitamentoServices = $aproveitamentoServices;
    }


    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {

        $solicitacoes = $this->aproveitamentoServices->getSolicitacoes()->all();

        return view('applouco::index', compact('solicitacoes'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('applouco::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show()
    {
        return view('applouco::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit()
    {
        return view('applouco::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request)
    {
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy()
    {
    }
}
