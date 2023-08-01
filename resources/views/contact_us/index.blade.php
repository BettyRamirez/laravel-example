@extends('layouts.template')

@section('title', 'Index course')

@section('content')
    <h1>Contactanos</h1>

    <form action="{{ route('contact_us.store') }}" method="POST">
        @csrf

        <label for="">
            Nombre:
            <br />
            <input type="text" name="name" value="{{ old('name') }}" />
        </label>
        @error('name')
            <br>
            <small>*{{ $message }}</small>
            <br>
        @enderror
        <br />
        <label for="">
            Correo:
            <br />
            <input type="text" name="email" value="{{ old('email') }}" />
        </label>
        @error('email')
            <br>
            <small>*{{ $message }}</small>
            <br>
        @enderror
        <br />
        <label for="">
            Mensaje:
            <br />
            <textarea name="message" rows="4" value="{{ old('message') }}"></textarea>
        </label>
        @error('message')
            <br>
            <small>*{{ $message }}</small>
            <br>
        @enderror
        <br />
        <button type="submit">Enviar mensaje</button>
    </form>

    @if (session('info'))
        <script>
            alert("{{ session('info') }}");
        </script>
    @endif
@endsection
