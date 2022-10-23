{{--@extends('applouco::layouts.master')--}}


@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="col-md-12">
            <div class="row">
                <form>
                    <div class="form row align-items-center">

                        <div class="row">
                            <div class="col-6">
                                <label class="sr-only" for="inlineFormInput"></label>
                                <input type="text" class="form-control mb-2" id="inlineFormInput"
                                       placeholder="Matrícula">
                            </div>

                            <div class="col-6">
                                <label class="sr-only" for="inlineFormInput"></label>
                                <button type="submit" class="btn btn-primary mb-2">Buscar</button>
                            </div>
                        </div>
                        {{-- Elaborar um foreach para Acessar a colecao de Array de Objetos --}}

                    </div> {{-- Fim do Form --}}
                        <div class="row">
                            <div class="col-md-12">
                                <table class="table">
                                    <tr>
                                        <th>N° Req</th>
                                        <th>Data</th>
                                        <th>Modalidade</th>
                                        <th>Aluno</th>
                                        <th>Encaminhado Por</th>
                                        <th>Ações</th>
                                    </tr>
                                    {{-- TODO remover isso aqui--}}
                                    <tr>

                                        <td>
                                            {{$solicitacoes[0]->id}}
                                        </td>
                                        <td>
                                            {{$solicitacoes[0]->data_solicitacao}}
                                        </td>
                                        <td>
                                            {{$solicitacoes[0]->modalidade}}
                                        </td>
                                        <td>
                                            {{$solicitacoes[0]->matricula}}
                                        </td>
                                        <td>
                                            @if(!empty($solicitacoes[0]->matricula))
                                                {{$solicitacoes[0]->encaminhadoPor}}
                                            @else
                                                Solicitante
                                            @endif
                                        </td>
                                        <td>
                                            <a class="btn btn-light"
                                               href="">
                                                <i class="fa fa-eye"></i> Visualizar </a>
                                        </td>
                                    </tr>

                                </table>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
@stop
