@extends('layouts.app')

@section('form')

    <div class="row">
        <div class="col-md-12">

            <div class="box box-danger">
                <div class="box-header with-border">
                    <h3 class="box-title">Tarefas</h3>
                </div>
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-12">
                            <a href="/tarefa/create" class="btn btn-primary">Nova Tarefa</a>

                            <table class="table table-striped table-hover table-bordered">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Título</th>
                                    <th>Tarefa</th>
                                    <th>Data</th>
{{--                                    <th>Foto</th>--}}
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($tarefa as $tar)
                                    <tr>
                                        <td>
                                            <a href="/tarefa/excluir/{{$tarefa->id}}">
                                                <i style="color: red;" class="fa fa-times-circle"></i>
                                            </a>
                                            <a href="/tarefa/edit/{{$tarefa->id}}">
                                                <i class="fa fa-edit"  style="color: #3490dc;"></i>
                                            </a>
                                        </td>
                                        <td>{{$tarefa->nome}}</td>
                                        <td>{{$tarefa->texto}}</td>
{{--                                        <td>--}}
{{--                                            @if($tarefa->arquivo)--}}
{{--                                                <img width="100px" src="{{url('storage/' . $tarefa->arquivo)}}">--}}
{{--                                            @endif--}}
{{--                                        </td>--}}
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection



