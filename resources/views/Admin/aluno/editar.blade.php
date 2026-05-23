@extends('layout.site')

@section('titulo', 'Alunos')

@section('conteudo')

<div class="container">

    <h3 class="center">Editando Aluno</h3>

    <div class="row">

        <form
            action="{{ url('admin/aluno/atualizar/'.$linha->id) }}"
            method="post"
        >

            {{ csrf_field() }}

            @include('admin.aluno._form')

            <button class="btn deep-orange">
                Atualizar
            </button>

        </form>

    </div>

</div>

@endsection