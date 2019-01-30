
@extends('layouts.app')


@section('tittle', 'Listado de usuarios')

@section('content')

<!-- aqui llamamos la plantilla blase para aplicar los mismos estilos de bootstrap, solo metemos dentro del content lo que habria en el body, lo demás lo traemos con un extends-->
<table class="table">
<div>
  <a href="trainers/create" class="btn btn-primary">Registrar nuevo</a>
</div>
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Avatar</th>
      <th scope="col">Nombres</th>
      <th scope="col">Apellidos</th>
      <th scope="col">Mail</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <!-- asi se hace con laravel, no con el tipico white  con fetck->array() que se hace en php nativo-->
  @foreach($usuarios as $user)
    <tr>
      <td scope="col">{!! $user->id !!}</td>
      <td scope="col"><img width="50px" height="60px" src="images/{{ $user->avatar }}"/></td>
      <td scope="col">{!! $user->nombres !!}</td>
      <td scope="col">{!! $user->apellidos !!}</td>
      <td scope="col">{!! $user->mail !!}</td>
      <td scope="col"><a href="trainers/{{$user->id}}" class="btn btn-primary">Ver más</a></td>
    </tr>
 @endforeach
  </tbody>
</table> 
@endsection