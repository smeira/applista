@extends('layouts.app')

@section('form')

    <div id="content">
{{--        <div>--}}
{{--            @if(count($errors) > 0)--}}
{{--                <ul class="alert alert-danger">--}}
{{--                    @foreach($errors->all() as $error)--}}
{{--                        <li>{{$error}}</li>--}}
{{--                    @endforeach--}}
{{--                </ul>--}}
{{--            @endif--}}
{{--        </div>--}}

        <form action="salvar" method="post">
            @csrf
            <input type="hidden" name="id" id="id" value="{{$tarefa->id}}">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="titulo">Titulo</label>
                    <input type="text" class="form-control" id="titulo" placeholder="Titulo"
                           name="titulo" value="{{$tarefa->titulo}}">
                </div>

                <div class="form-group col-md-6">
                    <label for="tarefa">Tarefa</label>
                    <input type="text" class="form-control" id="texto" placeholder="Texto" name="texto"
                           value="{{$tarefa->texto}}"/>
                </div>
            </div>
            <div class="form-row">

                <div class="form-group col-md-6">
                    <label for="data">Data</label>
                    <input type="date" class="form-control" id="data" placeholder="00/00/0000" name="data"
                           value="{{$tarefa->data}}" \>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-0">
                    <input type="submit" class="btn btn-primary" value="Salvar">
                </div>
                <div class="form-group col-md-1">
                    <a class="btn btn-primary" href="{{ route('home') }}">Voltar</a>
                </div>
            </div>
        </form>
    </div>


        @endsection




