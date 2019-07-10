
@extends('principal')

@section('conteudo-principal')
{{-- Vai pegar o conteudo que estiver dentro da
    section e jogar dentro do yield
--}}
<h2>Medicamentos</h2>


<table class="table table-striped table-bordered table-condensed table-hover">
    <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>Categoria</th>
        <th>Descriçao</th>
        <th>Data</th>
        <th>Opções</th>
    </tr>
    @forelse ($index as $post)
        <tr>
            <td> {{$post->id}} </td>
            <td> {{$post->titulo}} </td>
            <td> {{$post->categoria->nome}} </td>
            <td> {{$post->texto}} </td>
            <td> {{$post->created_at}} </td>
            <td>
                <a class="btn btn-outline-secondary" href="{{url('/index/editar/' . $post->id)}}">
                    Editar
                </a>
                <a class="btn btn-outline-secondary" href="{{url('/index/excluir/' . $post->id)}}">
                    Excluir
                </a>
            </td>
        </tr>
    @empty
        <tr>
            <td colspan="5">Sem Medicamento cadastrados.</td>
        </tr>
    @endforelse
</table>
@endsection
