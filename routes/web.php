<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Http\Controllers\AlunoController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\EscolaController;
use App\Http\Controllers\MatriculaController;

Route::get('/', function () {
    return view('home');
});

Route::get('/alunos', [AlunoController::class, 'index']);
Route::get('/cursos', [CursoController::class, 'index']);
Route::get('/escolas', [EscolaController::class, 'index']);
Route::get('/matriculas', [MatriculaController::class, 'index']);

Route::get('/cadastro_aluno', [AlunoController::class, 'index_aluno']);
Route::post('/cadastro_aluno', [AlunoController::class, 'cadastro']);
Route::delete('/alunos/{id}', [AlunoController::class, 'destroe']);
Route::get('/aluno_edit/{id}', [AlunoController::class, 'edit']);
Route::put('/aluno_update/{id}', [AlunoController::class, 'update']);

Route::get('/cadastro_curso', [CursoController::class, 'index_curso']);
Route::post('/cadastro_curso', [CursoController::class, 'cadastro']);
Route::delete('/cursos/{id}', [CursoController::class, 'destroe']);
Route::get('/curso_edit/{id}', [CursoController::class, 'edit']);
Route::put('/curso_update/{id}', [CursoController::class, 'update']);


Route::get('/cadastro_escola', [EscolaController::class, 'index_escola']);
Route::post('/cadastro_escola', [EscolaController::class, 'cadastro']);
Route::delete('/escolas/{id}', [EscolaController::class, 'destroe']);
Route::get('/escola_edit/{id}', [EscolaController::class, 'edit']);
Route::put('/escola_update/{id}', [EscolaController::class, 'update']);

Route::get('/cadastro_matricula', [MatriculaController::class, 'index_matricula']);
Route::post('/cadastro_matricula', [MatriculaController::class, 'matricula']);



