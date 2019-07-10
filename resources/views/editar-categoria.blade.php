@extends('principal')

@section('conteudo-principal')

<h2>Editar Categoria</h2>
<hr />

<form method="post" action="{{url('/categorias/editar')}}">

    @csrf

    <input type="hidden" name="id" value="{{$categoria->id}}">

    <div class="form-group">
        <label for="nome">Nome</label>
        <input id="nome" class="form-control" name="nome" type="text"
        value="{{$categoria->nome}}">

        @error('nome')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <button class="btn btn-primary" type="submit">Enviar</button>

</form>

@endsection
