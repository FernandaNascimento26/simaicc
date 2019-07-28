@extends('layouts.app')
@section('content')

<body>
  <div class="container">
    @if ($errors->any())
     <div class="alert alert-danger">
      <ul>
       @foreach ($errors->all() as $error)
       <li>{{ $error }}</li>
       @endforeach
     </ul>
   </div>
   @endif

    <div id="app">
        @include('flash-message')
        @yield('content')
    </div>

    <h1 style="font-size: 20px;">Editar Secretaria</h1>
    <br>
    <div id="formulario">
      <form method="POST" action="{{route('secretaria.update',$s->id)}}" id="form">
        @csrf
        <!-- area de campos do form -->
        {{method_field('PUT')}}
        <div class="row">
         <div class="form-group col-md-4">
           <label for="campo1">Cidade</label>
           <input type="text" class="form-control" id="cidade" name="cidade" value="{{$s->cidade}}" placeholder="">
         </div>

         <div class="form-group col-md-4">
           <label for="campo2">Estado</label>
           <input type="text" class="form-control" id="estado" name="estado" value="{{$s->estado}}" placeholder="">
         </div>

         <div class="form-group col-md-4">
           <label for="campo3">Endereço</label>
           <input type="text" class="form-control" id="endereco" name="endereco" value="{{$s->endereco}}" placeholder="">
         </div>
       </div>

       <div class="row">
         <div class="form-group col-md-4">
           <label for="campo1">Telefone</label>
           <input type="text" class="form-control" id="telefone" name="telefone" value="{{$s->telefone}}"placeholder="">
         </div>

           <div class="form-group col-md-4">
             <label for="campo1">CNPJ</label>
             <input type="text" class="form-control" id="cnpj" name="cnpj" value="{{$s->cnpj}}"placeholder="">
           </div>
         </div>

           <hr />
           <div id="actions" class="row">
            <div class="col-md-12">
              <button id='btn-cadastrar-funcionario' type="submit" class="btn btn-success mr-sm-2">Salvar</button>
              <!--<a href="index.html" class="btn btn-default">Cancelar</a>-->
              <br>
              <br>
            </div>
          </div>
        </form>
      </div>

      <br>

    </div>
  </body>
  </html>
  @endsection