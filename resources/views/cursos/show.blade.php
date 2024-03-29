@extends('layout.plantilla')
@section('title', 'Show Curso Page ' . $curso->name)

@section('content')
<h1>Bienvenido al curso {{ $curso->name }}</h1>
<a href="{{route('cursos.index')}}">Volver a todos los cursos</a>
<br>
<a href="{{route('cursos.edit', $curso)}}">Editar curso</a>
<p><strong> Categoría:</strong> {{ $curso->category }}</p>
<p>{{ $curso->description }}</p>
<form action="{{route('cursos.destroy',$curso)}}" method="POST">
    @csrf
    @method('delete')
    <button type="submit">Eliminar</button>
</form>
@endsection()
