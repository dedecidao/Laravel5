{{--@extends('applouco::layouts.master')--}}


@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form>
                    <div class="form row align-items-center">

                        <div class="col">
                            <label class="sr-only" for="inlineFormInput"></label>
                            <input type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Matrícula">
                        </div>

                        <div class="col">
                            <label class="sr-only" for="inlineFormInput"></label>
                            <button type="submit" class="btn btn-primary mb-2">Buscar</button>
                        </div>

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

                                        <tr>

                                            <td>
                                                {{'dsadsa'}}
                                            </td>
                                            <td>
                                                {{'\App\Util\Custom\Mask\DateTime::set($solicitacao->Data)'}}
                                            </td>
                                            <td>
                                                {{'$solicitacao->MODALIDADE'}}
                                            </td>
                                            <td>
                                                {{'$solicitacao->Solicitante'}} - {{'$solicitacao->NOME'}}
                                            </td>
                                            <td>
                                                @if(!empty('$solicitacao->NomeUsuario'))
                                                    {{'$solicitacao->NomeUsuario'}}
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

                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
