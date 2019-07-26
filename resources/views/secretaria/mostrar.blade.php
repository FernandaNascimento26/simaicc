@extends('layouts.app')
@section('content')

<body>
  <br>

  <div class="container">

    <h1 style="font-size: 20px; font-family: Arial;">Secretaria</h1>
    <br>
    <div id="formulario">

      <form method="POST" action="{{route('secretaria.show',$s->id)}}" id="form">
        @csrf 
        <div class="row">
         <div class="form-group col-md-4">
           <label for="campo1">Cidade</label>
           <input type="text" class="form-control" id="cidade" name="cidade" value="{{$s->cidade}}" placeholder=""disabled>
         </div>

         <div class="form-group col-md-4">
           <label for="campo2">Estado</label>
           <input type="text" class="form-control" id="estado" name="estado" value="{{$s->estado}}" placeholder=""disabled>
         </div>

         <div class="form-group col-md-4">
           <label for="campo3">Endereço</label>
           <input type="text" class="form-control" id="endereco" name="endereco" value="{{$s->endereco}}" placeholder=""disabled>
         </div>
       </div>

       <div class="row">
         <div class="form-group col-md-4">
           <label for="campo1">Telefone</label>
           <input type="text" class="form-control" id="telefone" name="telefone" value="{{$s->telefone}}"placeholder=""disabled>
         </div>


         <div class="form-group col-md-4">
           <label for="campo1">CNPJ</label>
           <input type="text" class="form-control" id="cnpj" name="cnpj" value="{{$s->cnpj}}"placeholder=""disabled>
         </div>
       </div>
       <br>


       <div class="row">
        <div class="col-md-12">
         <td class="actions">
          <a class="btn btn-warning btn-xs" href="{{$s->id}}/edit">Editar</a>   
        </td>
        <td>
          <form action="{{ route('secretaria.destroy', $s->id) }}" method="post">
            @csrf{{ csrf_field() }}
            {{ method_field('DELETE') }}
            <button type="submit" class="btn btn-danger">Excluir</button>
          </td>   
        </form>
      </div>
    </div>
  </form>
</div>
</div>
</body>
</html>
@endsection