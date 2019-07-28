@extends('layouts.app')
@section('content')

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

   <h1 style="font-size: 20px;">Editar Dados</h1>

    <br>
 </br>

 <h3 class="page-header" style="font-size: 20px; font-family: Arial;">Dados Pessoais</h3>

 <div id="formulario">
      <form method="POST" action="{{route('empreendedor.update',$e->id)}}" id="form">
  @csrf
        <!-- area de campos do form -->
        {{method_field('PUT')}}
  <div class="row">
   <div class="form-group col-md-4">
     <label for="campo1">Nome</label>
     <input type="text" class="form-control" id="nome" name="nome"value="{{$e->nome}}" placeholder=""> 
   </div>

   <div class="form-group col-md-4">
    <label for="campo3">RG</label>
    <input type="text" class="form-control" id="rg" name="rg" value="{{$e->rg}}" placeholder="">
  </div>

  <div class="form-group col-md-4">
   <label for="campo1">CPF</label>
   <input type="text" class="form-control" id="cpf" name="cpf"value="{{$e->cpf}}" placeholder="">
 </div>
</div>
<div class="row">
  <div class="form-group col-md-4">
   <label for="campo1">Sexo</label><br/>
   <input type="text" class="form-control" id="sexo" name="sexo" value="{{$e->sexo}}" placeholder=""><br/>
 </div>

 <div class="form-group col-md-3">
   <label for="campo1">Data de Nascimento</label>
   <input type="date" class="form-control" id="dt_nasc" name="dt_nasc" value="{{$e->dt_nasc}}" placeholder="">
 </div>
</div>
<hr />

<h3 class="page-header" style="font-size: 20px; font-family: Arial;">Endereço</h3>
<div class="row">
  <div class="form-group col-md-4">
   <label for="campo1">Secretaria</label>
   <select name="secretaria_id" class="form-control">
    @foreach($secretarias as $secretaria)
    <option value="{{$secretaria->id}}">{{$secretaria->cidade}}</option> 
    @endforeach
  </select>
</div>
<div class="form-group col-md-3">
 <label for="campo1">Telefone</label>
 <input type="tel" class="form-control" id="telefone" name="telefone" value="{{$e->telefone}}" placeholder="">
</div>
</div>
<div class="row">
 <div class="form-group col-md-4">
   <label for="campo1">Rua</label>
   <input type="text" class="form-control" id="rua" name="rua" value="{{$e->rua}}" placeholder="">
 </div>

 <div class="form-group col-md-2">
   <label for="campo1">Numero</label>
   <input type="text" class="form-control" id="numero" name="numero"value="{{$e->numero}}" placeholder="">
 </div>
 <div class="form-group col-md-2">
   <label for="campo1">Bairro</label>
   <input type="text" class="form-control" id="bairro" name="bairro" value="{{$e->numero}}" placeholder="">
 </div>
 <div class="form-group col-md-3">
   <label for="campo1">CEP</label>
   <input type="text" class="form-control" id="cep" name="cep" value="{{$e->cep}}" placeholder="">
 </div>
 <div class="form-group col-md-3">
   <label for="campo1">Cidade</label>
   <input type="text" class="form-control" id="cidade" name="cidade" value="{{$e->cidade}}" placeholder="">
 </div>

 <div class="form-group col-md-2">
   <label for="campo1">Estado</label>
   <input type="text" class="form-control" id="estado" name="estado" value="{{$e->estado}}" placeholder="">
 </div>
</div>
<hr />

<h3 class="page-header" style="font-size: 20px; font-family: Arial;">Dados Acadêmicos e Profissionais</h3>
<br>

<div class="row">
 <div class="form-group col-md-4">
   <label for="campo1">Escolaridade</label>
   <input type="text" class="form-control" id="escolaridade" name="escolaridade" value="{{$e->escolaridade}}" placeholder="">
 </div>
 <div class="form-group col-md-4">
   <label for="campo1">Atividade</label>
   <select name="atividade_id" class="form-control">
    @foreach($atividades as $atividade)
    <option value="{{$atividade->id}}">{{$atividade->atividade}}</option> 
    @endforeach
  </select>
</div>
<div class="form-group col-md-4">
 <label for="campo1">Tipo de trabalho</label><br/>
 <input type="text" class="form-control" id="trabalha_informal" name="trabalha_informal" value="{{$e->trabalha_informal}}" placeholder=""><br/>
</div>
<div class="form-group col-md-4">
 <label for="campo1">Ganho Mensal</label>
 <input type="text" class="form-control" id="ganho_mensal" name="ganho_mensal" value="{{$e->ganho_mensal}}" placeholder="">
</div>

<div class="form-group col-md-4">
 <label for="campo1">Possui Formação na Atividade Desenvolvida</label><br/>
 <input type="text" class="form-control" id="formacao_atividade" name="formacao_atividade" value="{{$e->formacao_atividade}}" placeholder=""><br/>
</div>
</div>
<hr>
<div id="actions" class="row">
  <div class="col-md-12">
    <button id='btn-cadastrar-empreendedor' type="submit" class="btn btn-success mr-sm-2">Salvar</button>
    <!--<a href="index.html" class="btn btn-default">Cancelar</a>-->

  </div>
</div>
</div>
</div>
</form>

<br>

</div>

</body>
</html>
@endsection