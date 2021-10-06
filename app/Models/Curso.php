<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function escola(){
        return $this->belongsTo('App\Model\Escola');
    }

    public function alunos(){
        return $this-> belongsToMany('App\Models\Aluno');
    }
}
