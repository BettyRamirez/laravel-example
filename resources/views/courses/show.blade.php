@extends('layouts.template')

@section('title', 'Show course')

@section('content')
    <h1>show course {{ $course->name }}</h1>
    <a href="{{ route('courses.index') }}">Regresar a cursos</a>
    <br>
    <a href="{{ route('courses.edit', $course) }}">Editar curso</a>
    <p><strong>Category:</strong> {{ $course->category }}</p>
    <p>{{ $course->description }}</p>

    <form action="{{ route('courses.destroy', $course) }}" method="post">
        @csrf
        @method('delete')
        <button type="submit">Eliminar</button>
    </form>

@endsection
