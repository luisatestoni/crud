<?php

use Illuminate\Support\Facades\Route;

Route::get('/admin/cursos',
['as'  =>'admin.cursos',
 'uses'=>'App\Http\Controllers\Admin\CursoController@index']);

Route::get('/admin/cursos/adicionar',
['as'  =>'admin.cursos.adicionar',
 'uses'=>'App\Http\Controllers\Admin\CursoController@adicionar']);

Route::post('/admin/cursos/salvar',
['as'  =>'admin.cursos.salvar',
 'uses'=>'App\Http\Controllers\Admin\CursoController@salvar']);

Route::get('/admin/cursos/editar/{id}',
['as'  =>'admin.cursos.editar',
 'uses'=>'App\Http\Controllers\Admin\CursoController@editar']);

Route::put('/admin/cursos/atualizar/{id}',
['as'  =>'admin.cursos.atualizar',
 'uses'=>'App\Http\Controllers\Admin\CursoController@atualizar']);

Route::get('/admin/cursos/excluir/{id}',
['as'  =>'admin.cursos.excluir',
 'uses'=>'App\Http\Controllers\Admin\CursoController@excluir']);

Route::get('/admin/alunos',
[
    'as'  =>'admin.aluno',
    'uses'=>'App\Http\Controllers\Admin\AlunoController@index'
]);

 Route::get('/admin/alunos/adicionar',
[
    'as' => 'admin.aluno.adicionar',
    'uses' => 'App\Http\Controllers\Admin\AlunoController@adicionar'
]);

Route::post('/admin/alunos/salvar',
[
    'as' => 'admin.aluno.salvar',
    'uses' => 'App\Http\Controllers\Admin\AlunoController@salvar'
]);

Route::get('/admin/alunos/editar/{id}',
[
    'as' => 'admin.aluno.editar',
    'uses' => 'App\Http\Controllers\Admin\AlunoController@editar'
]);

Route::put('/admin/alunos/atualizar/{id}',
[
    'as' => 'admin.aluno.atualizar',
    'uses' => 'App\Http\Controllers\Admin\AlunoController@atualizar'
]);

Route::get('/admin/alunos/excluir/{id}',
[
    'as' => 'admin.aluno.excluir',
    'uses' => 'App\Http\Controllers\Admin\AlunoController@excluir'
]);