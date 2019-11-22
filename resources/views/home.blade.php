@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
{{--                //Criando primeiro botão--}}
                <div class="dropdown">
                    <button class="btn btn-info dropdown-toggle" type="button" id="dropdownTarefa" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Lista de Tarefas
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownTarefa">
                        <a class="dropdown-item" href="/tarefa/formulario">Nova Tarefa</a>
                        <a class="dropdown-item" href="#">Listar Tarefas</a>
                    </div>
                </div>



{{--                <div class="card">--}}
{{--                    <div class="card-header">Dashboard</div>--}}

{{--                    <div class="card-body">--}}
{{--                        @if (session('status'))--}}
{{--                            <div class="alert alert-success" role="alert">--}}
{{--                                {{ session('status') }}--}}
{{--                            </div>--}}
{{--                        @endif--}}
{{--                       Seja bem-vindo ao AppLista--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>
    </div>
@endsection
