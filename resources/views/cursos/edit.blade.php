@extends('layout.plantilla')
@section('title', 'Edit Curso Page')

@section('content')
    <h1>Editar un curso</h1>
    <form action="{{route('cursos.update', $curso)}}" method="POST">
        @csrf
        @method('put')
        <label >
            Nombre:
            <br>
            <input type="text" name="name" value="{{ old('name', $curso->name)}}">
        </label>
        @error('name')
        <br>
         <span> {{ $message }} *</span>
        <br>
        @enderror
        <br>
        <label >
            Slug:
            <br>
            <input type="text" name="slug" value="{{ old('slug', $curso->slug)}}">
        </label>
        @error('slug')
        <br>
         <span> {{ $message }} *</span>
        <br>
        @enderror
        <br>
        <label >
            Descripción:
            <br>
            <textarea name="description" rows="5">{{ old('description', $curso->description) }}</textarea>
        </label>
        @error('description')
        <br>
         <span> {{ $message }} *</span>
        <br>
        @enderror
        <br>
        <label>
            Categoría:
            <br>
            <input type="text" name="category" value="{{  old('category',  $curso->category)}}">
        </label>
        @error('category')
        <br>
         <span> {{ $message }} *</span>
        <br>
        @enderror
        <br><br>
        <button type="submit">Actualizar Formulario</button>
    </form>
@endsection()
