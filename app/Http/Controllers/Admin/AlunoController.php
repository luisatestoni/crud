<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Aluno;

class AlunoController extends Controller
{
    public function index(){
        $rows = Aluno::all();
        return view('admin.aluno.index', compact('rows'));
    }

    public function adicionar() {

    return view('admin.aluno.adicionar');

}

public function editar($id) {

    // Recebe o ID vindo da rota
    $linha = Aluno::find($id);

    // Carrega o registro encontrado
    // e envia para a tela de edição
    return view('admin.aluno.editar', compact('linha'));

}

public function excluir($id) {

    // Recebe o ID vindo da rota
    Aluno::find($id)->delete();

    // Após localizar o registro,
    // executa o método delete()
    // para excluir do banco
    return redirect()->route('admin.aluno');

    // Redireciona para a lista de cursos

}

public function salvar(Request $req)
{
    $dados = $req->all();

    if(isset($dados['publicado'])){
        $dados['publicado'] = 'sim';
    }else{
        $dados['publicado'] = 'nao';
    }

    if($req->hasFile('arquivo')){
        $imagem = $req->file('arquivo');
        $num = rand(1111,9999);
        $dir = "img/aluno/";
        $ex = $imagem->guessClientExtension();
        $nomeImagem = "imagem_".$num.".".$ex;
        $imagem->move($dir,$nomeImagem);
        $dados['imagem'] = $dir."/".$nomeImagem;
    }

    Aluno::create($dados);
    return redirect()->route('admin.aluno');
}

public function atualizar(Request $req, $id)
{
    $dados = $req->all();

    if(isset($dados['publicado'])){
        $dados['publicado'] = 'sim';
    }else{
        $dados['publicado'] = 'nao';
    }

    if($req->hasFile('arquivo')){
        $imagem = $req->file('arquivo');
        $num = rand(1111,9999);
        $dir = "img/aluno/";
        $ex = $imagem->guessClientExtension();
        $nomeImagem = "imagem_".$num.".".$ex;
        $imagem->move($dir,$nomeImagem);
        $dados['imagem'] = $dir."/".$nomeImagem;
    }

    Aluno::find($id)->update($dados);
    return redirect()->route('admin.aluno');
}
    
}