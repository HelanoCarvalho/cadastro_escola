<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;
use App\Models\Escola;
use App\Models\Aluno;
class CursoController extends Controller
{
    public function index(){

        $search = request('search');

        if($search){
            $cursos = Curso::where([
                ['nome', 'like', '%'.$search.'%']
            ])->get();
        }else{
            $cursos = Curso::all();
        }

        $escolas = Escola::all();

        return view('cursos', ['cursos' => $cursos, 'search' => $search, 'escolas' => $escolas]);
    }

    public function index_curso(){
        $cursos = Curso::all();

        return view('cadastro_curso', ['cursos' => $cursos]);
    }

    public function index_matricula(){
        $cursos = Curso::all();

        return view('matricula', ['cursos' => $cursos]);
    }

    public function cadastro(Request $request){
        $curso = new Curso;
        $escola_id = Escola::where([
            ['nome', 'like', $request->escola]
        ]) ->get('id');
        
        $request->validate([
            'nome' => 'required|min:2|max:100',
            'ano' =>'required|max:4',
            'nivel' =>'required|min:5|max:15',
            'turno' =>'required|min:3|max:20',
            'escola' =>'required|exists:App\Models\Escola,nome'
        ]);

        $curso->nome = $request->nome;
        $curso->ano = $request->ano;
        $curso->nivel = $request->nivel;
        $curso->turno = $request->turno;
        $curso->escola = $request->escola;
        $curso->escola_id = $escola_id[0]['id'];

        $curso->save();

        return redirect('/cursos');
    }

    public function destroe($id){
        Curso::findOrFail($id)->delete();

        return redirect('/cursos');

    }

    public function edit($id){
        $curso = Curso::findOrFail($id);

        return view('curso_edit', ['curso' => $curso]);
    }

    public function update(Request $request){
        $request->validate([
            'nome' => 'required|min:5|max:100',
            'ano' =>'required|max:4',
            'nivel' =>'required|min:5|max:15',
            'turno' =>'required|min:3|max:20',
            'escola' =>'required|exists:App\Models\Escola,nome'
        ]);
        Curso::findOrFail($request-> id)->update($request->all());

        return redirect('/cursos');
    }

    



   
}
