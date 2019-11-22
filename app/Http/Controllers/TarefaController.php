<?php

namespace App\Http\Controllers;

use App\Tarefas;
use Illuminate\Http\Request;

class TarefaController extends Controller
{
    public function listar(){
        $tarefa = Tarefas::all();
        return view('tarefa/listar', compact('tarefa'));
    }

    public function criar(Request $request){
        $tarefa = new Tarefas();
//        $lembrete = Lembretes::all();
        return view('tarefa/formulario', compact('tarefa'));
    }

    public function editar($id){
        $tarefa = Tarefas::find($id);
//        $lembrete = Lembretes::all();

        return view('tarefa/formulario', compact('tarefa'));
    }

    public function remover($id){
        $tarefa = Tarefas::find($id);
        $tarefa->delete();
        return redirect('tarefa/listar');
    }

    public function salvar(TarefaRequest $request){
        $this->validate($request, 'rules');
        if($request->id){
            $tarefa = Tarefas::find($request->id);
            $tarefa->fill($request->all());
        } else {
            $tarefa = new Tarefas($request->all());
        }

        $tarefa->save();
        return redirect('tarefa/listar');
    }
}
