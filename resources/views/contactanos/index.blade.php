@extends('layout.plantilla')
@section('title', 'Contactanos')

@section('content')
    <h1>Dejanos un mensaje</h1>
    <form action="{{route('contactanos.store')}}" method="POST">
        @csrf
        <label>
            Nombre:<br>
            <input type="text" name="name"  value="{{old('name')}}">
        </label>
        <br>
        @error('name')
        <br>
         <span> {{ $message }} *</span>
        <br>
        @enderror
        <label>
            Correo: <br>
            <input type="email" name="email"  value="{{old('email')}}">
        </label>
        <br>
        @error('email')
        <br>
         <span> {{ $message }} *</span>
        <br>
        @enderror
        <label>
            Mensaje: <br>
            <textarea rows="5" name="message">{{old('message')}}</textarea>
        </label>
        @error('message')
        <br>
         <span> {{ $message }} *</span>
        <br>
        @enderror
        <br><br>
        <button type="submit">Enviar mensaje</button>
    </form>

    @if (session('info'))

        <script>
            alert("{{ session('info') }}")
        </script>

    @endif

@endsection()
