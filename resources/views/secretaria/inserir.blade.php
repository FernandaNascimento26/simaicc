@extends('layouts.app')
@section('content')

<head>
  <script type="text/javascript" src="func.js"></script>
</head>
<body>
  <div class="container-fluid">
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

   <h3 class="page-header" style="font-size: 20px; font-family: Arial;">Nova Secretaria</h3>
 </br>

 <form method="POST" action="{{route('secretaria.store')}}" id="form">
  <!-- area de campos do form -->
  @csrf
  <div class="row">
   <div class="form-group col-md-4">
     <label for="campo1">Cidade</label>
     <input type="text" class="form-control" id="cidade" name="cidade" placeholder="">
   </div>

   <div class="form-group col-md-4">
     <label for="campo2">Estado</label>
     <input type="text" class="form-control" id="estado" name="estado" placeholder="">
   </div>

   <div class="form-group col-md-4">
     <label for="campo3">Endereço</label>
     <input type="text" class="form-control" id="endereco" name="endereco" placeholder="">
   </div>
 </div>

 <div class="row">
   <div class="form-group col-md-4">
     <label for="campo1">Telefone</label>
     <input type="text" class="form-control" name="telefone" onKeyPress="MascaraTelefone(form1.tel);" 
     maxlength="14"  onBlur="ValidaTelefone(form1.tel);">
   </div>

   <div class="form-group col-md-4">
     <label for="campo1">CNPJ</label>
     <input type="text"class="form-control"name="cnpj" onKeyPress="MascaraCNPJ(form1.cnpj);" 
     maxlength="18" onBlur="ValidarCNPJ(form1.cnpj);">
   </div>
 </div>

 <hr />
 <div id="actions" class="row">
  <div class="col-md-12">
    <button id='btn-cadastrar-secretaria' type="submit" class="btn btn-success mr-sm-2">Salvar</button>
    <!--<a href="index.html" class="btn btn-default">Cancelar</a>-->
  </div>
</div>
</form>

<br>

</div>

</body>
</html>
@endsection