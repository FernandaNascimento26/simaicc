@extends('layouts.app')
@section('content')

<head>
  <link rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T">
</head>
<body>
  <div class="container-fluid">

    <h3 class="page-header" style="font-size: 20px; font-family: Arial;" align="center"> Empreendedor</h3>
  </br>

  <h3 class="page-header" style="font-size: 20px; font-family: Arial;">Dados Pessoais</h3>

  <form method="POST" action="{{route('empreendedor.show',$e->id)}}" id="form">
    @csrf 
    <div>
     <img src="{!!url($e->imagem)!!}" width="80px" height="80px">
    </div> <br>
    <div class="row">
     <div class="form-group col-md-4">
       <label for="campo1">Nome</label>
       <input type="text" class="form-control" id="nome" name="nome"value="{{$e->nome}}" placeholder=""disabled> 
     </div>
     
     <div class="form-group col-md-4">
      <label for="campo3">RG</label>
      <input type="text" class="form-control" id="rg" name="rg" value="{{$e->rg}}" placeholder=""disabled>
    </div>

    <div class="form-group col-md-4">
     <label for="campo1">CPF</label>
     <input type="text" class="form-control" id="cpf" name="cpf"value="{{$e->cpf}}" placeholder=""disabled>
   </div>
 </div>
 <div class="row">
  <div class="form-group col-md-4">
   <label for="campo1">Sexo</label><br/>
   <input type="text" class="form-control" id="sexo" name="sexo" value="{{$e->sexo}}" placeholder="" disabled=""><br/>
 </div>

 <div class="form-group col-md-3">
   <label for="campo1">Data de Nascimento</label>
   <input type="date" class="form-control" id="dt_nasc" name="dt_nasc" value="{{$e->dt_nasc}}" placeholder=""disabled>
 </div>
</div>
<hr />

<h3 class="page-header" style="font-size: 20px; font-family: Arial;">Endereço</h3>
<div class="row">
  <div class="form-group col-md-4">
   <label for="campo1">Secretaria</label>
   <input type="text" class="form-control" id="secretaria_id" name="secretaria_id" value="{{$e->secretaria_id}}" placeholder=""disabled>
 </div>
 <div class="form-group col-md-3">
   <label for="campo1">Telefone</label>
   <input type="tel" class="form-control" id="telefone" name="telefone" value="{{$e->telefone}}" placeholder=""disabled>
 </div>
</div>
<div class="row">
 <div class="form-group col-md-4">
   <label for="campo1">Rua</label>
   <input type="text" class="form-control" id="rua" name="rua" value="{{$e->rua}}" placeholder=""disabled>
 </div>

 <div class="form-group col-md-2">
   <label for="campo1">Numero</label>
   <input type="text" class="form-control" id="numero" name="numero"value="{{$e->numero}}" placeholder=""disabled>
 </div>
 <div class="form-group col-md-2">
   <label for="campo1">Bairro</label>
   <input type="text" class="form-control" id="bairro" name="bairro" value="{{$e->numero}}" placeholder=""disabled>
 </div>
 <div class="form-group col-md-3">
   <label for="campo1">CEP</label>
   <input type="text" class="form-control" id="cep" name="cep" value="{{$e->cep}}" placeholder=""disabled>
 </div>
 <div class="form-group col-md-3">
   <label for="campo1">Cidade</label>
   <input type="text" class="form-control" id="cidade" name="cidade" value="{{$e->cidade}}" placeholder=""disabled>
 </div>

 <div class="form-group col-md-2">
   <label for="campo1">Estado</label>
   <input type="text" class="form-control" id="estado" name="estado" value="{{$e->estado}}" placeholder=""disabled>
 </div>
</div>
<hr />

<h3 class="page-header" style="font-size: 20px; font-family: Arial;">Dados Acadêmicos e Profissionais</h3>
<br>

<div class="row">
 <div class="form-group col-md-4">
   <label for="campo1">Escolaridade</label>
   <input type="text" class="form-control" id="escolaridade" name="escolaridade" value="{{$e->escolaridade}}" placeholder=""disabled>
 </div>
 <div class="form-group col-md-4">
   <label for="campo1">Atividade</label>
   <input type="text" class="form-control" id="atividade_id" name="atividade_id" value="{{$e->atividade_id}}" placeholder=""disabled>
 </div>
 <div class="form-group col-md-4">
   <label for="campo1">Tipo de trabalho</label><br/>
   <input type="text" class="form-control" id="trabalha_informal" name="trabalha_informal" value="{{$e->trabalha_informal}}" placeholder="" disabled=""><br/>
 </div>
 <div class="form-group col-md-4">
   <label for="campo1">Ganho Mensal</label>
   <input type="text" class="form-control" id="ganho_mensal" name="ganho_mensal" value="{{$e->ganho_mensal}}" placeholder=""disabled>
 </div>

 <div class="form-group col-md-4">
   <label for="campo1">Possui Formação na Atividade Desenvolvida</label><br/>
    <input type="text" class="form-control" id="formacao_atividade" name="formacao_atividade" value="{{$e->formacao_atividade}}" placeholder="" disabled=""><br/>
 </div>
</div>
<hr>
<div class="row">
  <div class="col-md-12">
   <td class="actions">
    <a class="btn btn-warning btn-xs" href="{{$e->id}}/edit">Editar</a>   
  </td>
  <td>
    <form action="{{ route('empreendedor.destroy', $e->id) }}" method="post">
      @csrf{{ csrf_field() }}
      {{ method_field('DELETE') }}
      <button type="submit" class="btn btn-danger">Excluir</button>
    </td>   
  </form>
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