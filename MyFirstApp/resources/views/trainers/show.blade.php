@extends('layouts.app')


@section('tittle', 'Vista de entrenadores')

@section('content')

@include('common.success')

<div style="text-align:center;">
<img src="../images/{{ $trainer->avatar }}"/>
<div class="text-center">
<div>{!! $trainer->nombres !!}</div>
<div>{!! $trainer->apellidos !!}</div>
<div>{!! $trainer->mail !!}</div>
<div>{!! $trainer->id !!}</div>
<div>{!! $trainer->avatar !!}</div>

</div>
<div>
  <a href="/trainers" class="btn btn-primary">Volver</a>
</div>
<div>
  <a href="/trainers/{!! $trainer->id !!}/edit" class="btn btn-primary">Editar</a>


  <!-- esto es laravel collective-->
{!! Form::open([ 'route' => ['trainers.destroy', $trainer->id], 'method'=> 'DELETE' ]) !!}
{!! Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}
{!! Form::close() !!}

</div>
</div>
@endsection