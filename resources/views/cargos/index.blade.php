@extends('layouts.app')

@section('content')
    <h1>All Cargos</h1>
    <a href="{{ route('cargos.create') }}">Add New Cargo</a>
    <ul>
        @foreach ($cargos as $cargo)
            <li>{{ $cargo->name }} - <a href="{{ route('cargos.show', $cargo->id) }}">View</a></li>
        @endforeach
    </ul>
@endsection
