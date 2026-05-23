@extends('layout.site')

@section('titulo', 'Alunos')

@section('conteudo')

<div class="container">

    <h3 class="center">Lista de Alunos</h3>

    <div class="row">

        <table>

            <thead>
                <tr>
                    <td>Id</td>
                    <td>Nome</td>
                    <td>Celular</td>
                    <td>ID Curso</td>
                    <td>Imagem</td>
                    <td>Ação</td>
                </tr>
            </thead>

            <tbody>

                @foreach($rows as $row)

                <tr>

                    <td>{{ $row->id }}</td>

                    <td>{{ $row->nome }}</td>

                    <td>{{ $row->celular }}</td>

                    <td>{{ $row->id_curso }}</td>

                    <td>
                        <img
                            src="{{ asset($row->imagem) }}"
                            alt="{{ $row->nome }}"
                            width="80"
                        >
                    </td>

                    <td>

                        <a
                            class="btn deep-orange"
                            href="{{ url('admin/aluno/editar/'.$row->id) }}"
                            >
                            Alterar
                        </a>

                        <a
                            class="btn red"
                            href="{{ url('admin/aluno/excluir/'.$row->id) }}"
                            >
                            Excluir
                        </a>

                    </td>

                </tr>

                @endforeach

            </tbody>

        </table>

    </div>

    <div class="row">

        <a
            class="btn blue"
            href="{{ url('admin/aluno/adicionar') }}"
        >
            Adicionar
        </a>

    </div>

</div>

@endsection