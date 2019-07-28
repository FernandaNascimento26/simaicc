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

    <h3 class="page-header" style="font-size: 20px; font-family: Arial;" align="center">Cadastrar Empreendedor</h3>
  </br>
  <h3 class="page-header" style="font-size: 20px; font-family: Arial;">Dados Pessoais</h3>
  <form method="POST" action="{{route('empreendedor.store')}}" id="form">
    <!-- area de campos do form -->
    @csrf
    <div class="row">
     <div class="form-group col-md-4">
       <label for="campo1">Nome</label>
       <input type="text" class="form-control" id="nome" name="nome" placeholder="">
     </div>
     
     <div class="form-group col-md-4">
      <label for="campo3">RG</label>
      <input type="text" class="form-control" id="rg" name="rg" placeholder="" >
    </div>

    <div class="form-group col-md-4">
     <label for="campo1">CPF</label>
     <input type="text" class="form-control" id="cpf" name="cpf" placeholder="">
   </div>
 </div>
 <div class="row">
  <div class="form-group col-md-4">
   <label for="campo1">Sexo</label><br/>
   <input type="radio" id="sexo1" name="sexo" value="Feminino"><label for="sexo1">Feminino</label><br/>
   <input type="radio" id="sexo2" name="sexo" value="Masculino"><label for="sexo2">Masculino</label><br/>
 </div>

 <div class="form-group col-md-3">
   <label for="campo1">Data de Nascimento</label>
   <input type="date" class="form-control" id="dt_nasc" name="dt_nasc">
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
   <input type="tel" class="form-control" id="telefone" name="telefone">
 </div>
</div>
<div class="row">
 <div class="form-group col-md-4">
   <label for="campo1">Rua</label>
   <input type="text" class="form-control" id="rua" name="rua">
 </div>

 <div class="form-group col-md-2">
   <label for="campo1">Numero</label>
   <input type="text" class="form-control" id="numero" name="numero">
 </div>
 <div class="form-group col-md-2">
   <label for="campo1">Bairro</label>
   <input type="text" class="form-control" id="bairro" name="bairro">
 </div>
 <div class="form-group col-md-3">
   <label for="campo1">CEP</label>
   <input type="text" class="form-control" id="cep" name="cep">
 </div>
 <div class="form-group col-md-3">
   <label for="campo1">Cidade</label>
   <input type="text" class="form-control" id="cidade" name="cidade">
 </div>

 <div class="form-group col-md-2">
   <label for="campo1">Estado</label>
   <input type="text" class="form-control" id="estado" name="estado">
 </div>
</div>
<hr />

<h3 class="page-header" style="font-size: 20px; font-family: Arial;">Dados Acadêmicos e Profissionais</h3>
<br>

<div class="row">
 <div class="form-group col-md-4">
   <label for="campo1">Escolaridade</label>
   <input type="text" class="form-control" id="escolaridade" name="escolaridade" placeholder="">
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
   <input type="radio" id="trabalho_formal1" name="trabalha_informal" value="Formal"><label for="trabalho_formal">Formal</label><br/>
   <input type="radio" id="trabalho_formal2" name="trabalha_informal" value="Informal"><label for="trabalho_formal2">Informal</label><br/>
 </div>
 <div class="form-group col-md-4">
   <label for="campo1">Ganho Mensal</label>
   <input type="text" class="form-control" id="ganho_mensal" name="ganho_mensal" placeholder="">
 </div>

 <div class="form-group col-md-4">
   <label for="campo1">Possui Formação na Atividade Desenvolvida</label><br/>
   <input type="radio" id="formacao_atividade1" name="formacao_atividade" value="Sim"><label for="formacao_atividade1">Sim</label><br/>
   <input type="radio" id="formacao_atividade2" name="formacao_atividade" value="Não"><label for="formacao_atividade2">Não</label><br/>
 </div>
</div>
<hr>
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