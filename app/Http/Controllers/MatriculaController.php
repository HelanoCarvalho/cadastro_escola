<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;
use App\Models\Curso;
use App\Models\Matricula;
use App\Models\Aluno;
class MatriculaController extends Controller
{
    public function index(){
        $matriculas = Matricula::all();
        $cursos = Curso::all();
        $alunos = Aluno::all();

        $search = request('search');

        if($search){
            $cursos = Curso::where([
                ['nome', 'like', '%'.$search.'%']
            ])->get();
        }else{
            $cursos = Curso::all();
        }

        return view('matriculas', ['matriculas' => $matriculas, 'cursos' => $cursos, 'alunos' => $alunos,                  
                                    'search' => $search]);
    }

    public function index_matricula(){
        $matriculas = Matricula::all();
        return view('cadastro_matricula', ['matriculas' => $matriculas]);
    }

    public function matricula(Request $request){

        $matricula = new Matricula;
        if(strlen($request ->nome_curso) == 0 || strlen($request -> email_aluno) == 0){
            return Redirect::back();
        }

        $id_curso = Curso::where([
            ['nome', 'like', $request -> nome_curso]
        ])->get('id');

        $id_aluno = Aluno::where([
            ['email', 'like', $request -> email_aluno]
        ])->get('id');

        $request->validate([
            'nome_curso' => 'required|min:2|max:100|exists:App\Models\Curso,nome',
            'email_aluno' => 'required|min:5|max:100|exists:App\Models\Aluno,email'
        ]);

        $matricula->curso_id = $id_curso[0]['id'];
        $matricula->aluno_id = $id_aluno[0]['id'];

        $matricula -> save();

        return redirect('/matriculas');
    }

}
