@extends('layouts.template')

@section('title', 'Index course')

@section('content')
    <h1>index course</h1>

    <a href="{{ route('courses.create') }}">create course</a>

    <ul>
        @foreach ($courses as $course)
            <li>
                <a href="{{ route('courses.show', $course->id) }}">{{ $course->name }}</a>
            </li>
        @endforeach
    </ul>

    {{ $courses->links() }}
@endsection
