@extends('principal')

@section('conteudo-principal')

<h2>Cadastrar Categoria</h2>
<hr />

<form method="post" action="{{url('/categorias/adicionar')}}">

    @csrf

    <div class="form-group">
        <label for="titulo">Nome</label>
        <input value="{{old('nome')}}" id="nome" class="form-control" name="nome" type="text">

        @error('nome')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

    </div>

    <button class="btn btn-primary" type="submit">Enviar</button>

</form>

@endsection
