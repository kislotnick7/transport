@extends('layouts.app')

@section('content')
    <h1>Add New Cargo</h1>
    <form action="{{ route('cargos.store') }}" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="name" id="name">
        <label for="description">Description:</label>
        <textarea name="description" id="description"></textarea>
        <label for="status">Status:</label>
        <select name="status" id="status">
            <option value="pending">Pending</option>
            <option value="in_transit">In Transit</option>
            <option value="delivered">Delivered</option>
        </select>
        <button type="submit">Add Cargo</button>
    </form>
@endsection
