@extends('welcome')

@section('title', 'Home')

@section('content')
<div class="text-center">
    <h1>Welcome to College Management System</h1>
    <p class="lead">Easily manage students and colleges with our system.</p>

    <button type="button" class="btn btn-outline-dark"href="{{ route('students.index') }}">View Students</button>
    <button type="button" class="btn btn-outline-dark"href="{{ route('colleges.index') }}">View Colleges</button>
</div>
@endsection