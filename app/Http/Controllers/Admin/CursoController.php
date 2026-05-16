<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Curso;

class CursoController extends Controller
{
    public function index(){
        $rows = Curso::all();
        return view('admin.cursos.index', compact('rows'));
    }

    public function adicionar() {

    return view('admin.cursos.adicionar');

}

public function editar($id) {

    // Recebe o ID vindo da rota
    $linha = Curso::find($id);

    // Carrega o registro encontrado
    // e envia para a tela de edição
    return view('admin.cursos.editar', compact('linha'));

}

public function excluir($id) {

    // Recebe o ID vindo da rota
    Curso::find($id)->delete();

    // Após localizar o registro,
    // executa o método delete()
    // para excluir do banco
    return redirect()->route('admin.cursos');

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
        $dir = "img/cursos/";
        $ex = $imagem->guessClientExtension();
        $nomeImagem = "imagem_".$num.".".$ex;
        $imagem->move($dir,$nomeImagem);
        $dados['imagem'] = $dir."/".$nomeImagem;
    }

    Curso::create($dados);
    return redirect()->route('admin.cursos');
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
        $dir = "img/cursos/";
        $ex = $imagem->guessClientExtension();
        $nomeImagem = "imagem_".$num.".".$ex;
        $imagem->move($dir,$nomeImagem);
        $dados['imagem'] = $dir."/".$nomeImagem;
    }

    Curso::find($id)->update($dados);
    return redirect()->route('admin.cursos');
}
}
