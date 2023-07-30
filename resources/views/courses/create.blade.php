@extends('layouts.template')

@section('title', 'Create course')

@section('content')
    <h1>create course</h1>

    <form action={{ route('courses.store') }} method="POST">
        {{-- cfrf is security token from laravel --}}
        @csrf

        <label for="name">
            Name:
            <br>
            <input type="text" name="name" value="{{ old('name') }}" />
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
            <textarea name="description" rows="5">{{ old('description') }}</textarea>
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
            <input type="text" name="category" value="{{ old('category') }}" />
        </label>
        @error('category')
            <br>
            <small>*{{ $message }}</small>
            <br>
        @enderror
        <br>
        <br>
        <button type="submit">Create course</button>
    </form>
@endsection
