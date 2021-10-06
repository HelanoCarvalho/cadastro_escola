<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Escola;
use App\Models\Curso;
use Redirect;

class EscolaController extends Controller
{
    public function index(){

        $search = request('search'); 
        
        if($search){
            $escolas = Escola::where([
                ['nome', 'like', '%'.$search.'%']
            ]) ->get();
        }else{
            $escolas = Escola::all();
        }
        
       return view('escolas', ['escolas' => $escolas, 'search' => $search]);
    }

    public function index_escola(){
        $escolas = Escola::all();
        return view('cadastro_escola', ['escolas' => $escolas]);
    }
    
    public function cadastro(Request $request){
        $escola = new Escola;

        $request->validate([
            'nome' => 'required|min:5|max:100|unique:App\Models\Escola,nome',
            'endereco' =>'required|min:5|max:50'
        ]);
        $escola->nome = $request->nome;
        $escola->endereco = $request -> endereco;
        
        $escola->save();
        return redirect('/escolas');
        
    }


    public function destroe($id){

        $s = Escola::where([
            ['id', 'like', $id]
        ])->get('nome');

        $t = Curso::where([
            ['escola', 'like', $s[0]['nome']]
        ]) ->get();

        if(count($t) == 0){
            Escola::find($id)->delete();
        }else{
            return Redirect::back()->withErrors(['Exclua antes os cursos dessa escola']);
        }
        return redirect('/escolas');
    }

    public function edit($id){
        $escola = Escola::findOrFail($id);
        return view('escola_edit', ['escola' => $escola]);
    }

    public function update(Request $request){

        $request->validate([
            'nome' => 'required|min:5|max:100|unique:App\Models\Escola,nome',
            'endereco' =>'required|min:5|max:50'
        ]);
        

        $s = Escola::where([
            ['id', 'like', $request -> id]
        ])->get('nome');

        $t = Curso::where([
            ['escola', 'like', $s[0]['nome']]
        ]) ->get();

        if(count($t) == 0){
            Escola::findOrFail($request-> id)->update($request->all());
        }else{
            return Redirect::back()->withErrors(['Exclua antes os cursos dessa escola']);
        }
        
        return redirect('/escolas');
    }

}
