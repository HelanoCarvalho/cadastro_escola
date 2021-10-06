<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aluno;

class AlunoController extends Controller
{
    public function index(){

        $search = request('search');

        if($search){
            $alunos = Aluno::where([
                ['email', 'like', '%'.$search.'%']
            ]) ->get();
        }else{
            $alunos = Aluno::all();
        }
        
        return view('alunos',['alunos' => $alunos, 'search' => $search]);
    }

    public function index_aluno(){      
        $alunos = Aluno::all();
        return view('cadastro_aluno',['alunos' => $alunos]);
    }

    public function cadastro(Request $request){
        
        $aluno = new Aluno;

        $request->validate([
            'nome' => 'required|min:5|max:100',
            'email' =>'required|min:5|max:30|email|unique:App\Models\Aluno,email',
            'telefone' =>'min:8|max:20',
            'nascimento' =>'required',
            'genero' =>'min:2|max:15'
        ]);

        $aluno->nome = $request->nome;
        $aluno->email = $request->email;
        $aluno->telefone = $request->telefone;
        $aluno->nascimento = $request->nascimento;
        $aluno->genero = $request->genero;

        $aluno->save();

        return redirect('/alunos') ;
    }

    public function destroe($id){
        Aluno::findOrFail($id)->delete();

        return redirect('/alunos');
    }

    public function edit($id){
        $aluno = Aluno::findOrFail($id);
        return view('aluno_edit', ['aluno' => $aluno]);
    }

    public function update(Request $request){
        $request->validate([
            'nome' => 'required|min:5|max:100',
            'email' =>'required|min:5|max:30|email|unique:App\Models\Aluno,email',
            'telefone' =>'min:8|max:20',
            'nascimento' =>'required',
            
        ]);
        Aluno::findOrFail($request->id)->update($request->all());

        return redirect('/alunos');
    }
    
}
