@include('cabecalho')


<div style="background-color:lightblue" class="container" >
    <div class="row">
      <div class="col-2">
        <br>
        <b>Loja 1001</b><br><br>
        <b>Loja 1002</b><br><br>
        <b>Loja 1003</b><br><br>
        <b>Loja 1004</b><br><br>
        <a href="{{url('/index')}}" class="btn btn-success float-right mb-2">
            Medicamentos</a>
            <a href="{{url('/index/form-adicionar')}}" class="btn btn-success float-right mb-2">
                Cadastra Medicamento</a>
      </div>
    <div style="background-color:white" class="col-8" >
        {{--Bloco com conteudo pincipal--}}
        @yield('conteudo-principal')
    </div>
        <div style="background-color:lightblue" class="col-2">
             <br>
             <b>Generio</b><br><br>
             <b>Medic RX</b><br><br>
             <b>Similar</b><br><br>
             <b>OTC</b><br><br>
             <a href="{{url('/categorias')}}" class="btn btn-success float-right mb-2">
                CategoriasMed</a>
                <a href="{{url('/categorias/form-adicionar')}}" class="btn btn-success float-right mb-2">
                    Cadastrar Categoria</a>
        </div>
    </div>

</div>
