<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Escola extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function cursos(){
        return $this->hasMany('App\Model\Curso');
    }

   
}
