@extends('layout.plantilla')
@section('title', 'Index Curso')

@section('content')
    <h1 class="">Bienvenido a la página principal de cursos</h1>
    <a href="{{ route('cursos.create')}}">Crear curso</a>
    <ul class="list-style-type: disc;">
        @foreach($cursos as $curso)
            <a href="{{ route('cursos.show', $curso)}}">
                <li>{{ $curso->name }}</li>
            </a>
        @endforeach
    </ul>
    {{ $cursos->links() }}
@endsection()
