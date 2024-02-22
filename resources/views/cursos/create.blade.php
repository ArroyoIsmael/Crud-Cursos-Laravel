@extends('layout.plantilla')
@section('title', 'Create Curso Page')

@section('content')
    <h1>En ésta página podrás crear un curso</h1>
    <form action="{{route('cursos.store')}}" method="POST">
        @csrf
        <label >
            Nombre:
            <br>
            <input type="text" name="name" value="{{old('name')}}">
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
            <input type="text" name="slug" value="{{old('slug')}}">
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
            <textarea name="description" rows="5" >{{old('description')}}</textarea>
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
            <input type="text" name="category" value="{{old('category')}}">
        </label>
        @error('category')
        <br>
         <span> {{ $message }} *</span>
        <br>
        @enderror
        <br><br>
        <button type="submit">Enviar Formulario</button>
    </form>
@endsection()
