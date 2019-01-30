@extends('layouts.app')


@section('tittle', 'Formulario de edición')

@section('content')
<form method="POST" action="/trainers/{{$trainer->id}}" enctype="multipart/form-data">
@method('PUT')
@csrf
  <div class="form-group">
    <label for="exampleInputNombre">Nombre</label>
    <input type="text" class="form-control" id="exampleInputNombre" name="nombres" value="{{$trainer->nombres}}" placeholder="Nombre">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputApell">Apellidos</label>
    <input type="text" class="form-control" id="exampleInputApell" name="apellidos"  value="{{$trainer->apellidos}}" placeholder="Apellidos">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="mail"  value="{{$trainer->mail}}" aria-describedby="emailHelp" placeholder="Email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password"  value="{{$trainer->password}}" placeholder="Password">
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Subir imagen</label>
    <input type="file" class="form-control" name="avatar"  value="{{$trainer->avatar}}" aria-describedby="Subir" placeholder="Subir imágen">
    <small id="fileHelp" class="form-text text-muted">DA click para subir una imagen de perfil.</small>
  </div>

  <button type="submit" class="btn btn-primary">Registrar</button>
</form>
@endsection