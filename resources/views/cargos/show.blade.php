@extends('layouts.app')

@section('content')
    <h1>{{ $cargo->name }}</h1>
    <p>{{ $cargo->description }}</p>
    <p>Status: {{ $cargo->status }}</p>
    <a href="{{ route('cargos.edit', $cargo->id) }}">Edit</a>
    <form action="{{ route('cargos.destroy', $cargo->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
@endsection
