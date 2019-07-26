@extends('layouts.app')
@section('content')


<div class="container">

  <h1 style="font-size: 20px; font-family: Arial;">Secretarias</h1>
</br>

<div id="list" class="row">

  <div class="table-responsive col-md-12">

    <table class="table table-striped" cellspacing="0" cellpadding="0">

      <thead>
        <tr>
          <th>Cidade</th>
          <th>Estado</th> 
          <th class="actions"></th>
          <th class="actions"></th>
        </tr>
      </thead>
      <tbody>
       @foreach($secretarias as $s)
       <tr>
        <td>{{$s->cidade}}</td>
        <td> {{$s->estado}}</td>
        <td class="actions">
         <td><a class="btn btn-warning btn-xs" href="{{route('secretaria.show', $s->id) }}">Abrir</a>
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
    <a class="btn btn-info btn-xs" href="{{ route('secretaria.create') }}">Novo</a> 
  </td>
</div>

</body>
</html>
@endsection