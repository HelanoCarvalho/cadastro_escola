<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function cursos(){
        return $this-> belongsToMany('App\Models\Curso');
    }
}
