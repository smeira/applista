@extends('layouts.app')

@section('form')

    <form action="salvar" method="post">
        <div id="main">
            <table class="table table-striped table-hover table-bordered">
                <thead>
                <tr>
                    <td>Id</td>
                    <td>Título</td>
                    <td>Texto</td>
                    <td>Data</td>
                </tr>
                </thead>
                <tbody>
                @foreach($tarefa as $tar)
                    <tr>
                        <td>
                            <a href="remover/{{$tar->id}}">
                                <i class="fa fa-times-circle" style="color: red;"
                                   onclick="return confirm('Deseja excluir ?');"></i>
                            </a>
                            <a href="editar/{{$tar->id}}">
                                <i class="fas fa-user-edit" style="color: #3490dc;"></i>
                            </a>
                        </td>
                        <td>{{$tar->id}}</td>
                        <td>{{$tar->nome}}</td>
                        <td>{{$tar->texto}}</td>
                        <td>{{$tar->data}}</td>
                        </tr>
                @endforeach
                </tbody>
            </table>

            <div class="form-row">
                <div class="form-group col-md-1">
                    <a class="btn btn-primary" href="formulario">Novo</a>
                </div>
                <div class="form-group col-md-1">
                    <a class="btn btn-primary" href="{{url('/')}}">Voltar</a>
                </div>
            </div>
        </div>


        @endsection

        </body>
        </html>
    </form>




