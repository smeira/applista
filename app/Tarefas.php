<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tarefas extends Model
{
    protected $fillable = ['id', 'nome', 'texto', 'data'];

//    criando um para muitos
//public function lembretes(){
//    return $this->hasMany('App/Lembrete');

//    criando um para um
//public function lembretes(){
//    return $this->belongsTo('App/Lembrete');
//}

}
