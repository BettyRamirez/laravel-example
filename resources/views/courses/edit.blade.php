@extends('layouts.template')

@section('title', 'Edit course')

@section('content')
    <h1>Edit course</h1>

    <form action={{ route('courses.update', $course) }} method="POST">
        {{-- cfrf is security token from laravel --}}
        @csrf

        {{-- when method is not post or get you must be specific the method --}}
        @method('PUT')

        <label for="name">
            Name:
            <br>
            <input type="text" name="name" value="{{ old('name', $course->name) }}"" />
        </label>
        @error('name')
            <br>
            <small>*{{ $message }}</small>
            <br>
        @enderror
        <br>
        <label for="description">
            Description:
            <br>
            <textarea name="description" rows="5">{{ old('description', $course->description) }}</textarea>
        </label>
        @error('description')
            <br>
            <small>*{{ $message }}</small>
            <br>
        @enderror
        <br>
        <label for="category">
            Category:
            <br>
            <input type="text" name="category" value="{{ old('category', $course->category) }}"" />
        </label>
        @error('category')
            <br>
            <small>*{{ $message }}</small>
            <br>
        @enderror
        <br>
        <br>
        <button type="submit">Edit course</button>
    </form>
@endsection
