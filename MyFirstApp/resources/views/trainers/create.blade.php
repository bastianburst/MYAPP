@extends('layouts.app')


@section('tittle', 'Formulario de creación')

@section('content')

@include('common.errors')

<form method="POST" action="/trainers" enctype="multipart/form-data">



@include('trainers.form')



  <button type="submit" class="btn btn-primary">Registrar</button>
</form>
@endsection