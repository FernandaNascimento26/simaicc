@extends('layouts.app')
@extends('layouts.menu')
@section('content')

<div class="container">
  <div id="app">
        @include('flash-message')
        @yield('content')
    </div>

  <h1 style="font-size: 20px; font-family: Arial;">Empreendedores</h1>
</br>

<div id="list" class="row">

  <div class="table-responsive col-md-12">

    <table class="table table-striped" cellspacing="0" cellpadding="0">

      <thead>
        <tr>
          <th>Foto</th>
          <th>Nome</th>
          <th class="actions"></th>
          <th class="actions"></th>
        </tr>
      </thead>
      <tbody>
       @foreach($empreendedores as $e)
       <tr>
        <td> <img src="{!!url($e->imagem)!!}" width="70px" height="70px"></td>
        <td>{{$e->nome}}</td>
        <td class="actions">
         <td><a class="btn btn-warning btn-xs" href="{{route('empreendedor.show', $e->id) }}">Abrir</a>
         </td>
       </tr>

       @endforeach
     </tbody>

   </table>
 </form>


</div>
</div> <!-- /#list -->



<div class="row">
  <div class="col-md-12">
   <td class="actions">
    <a class="btn btn-info btn-xs" href="{{ route('empreendedor.create') }}">Novo</a> 
  </td>
</div>

</body>
</html>
@endsection