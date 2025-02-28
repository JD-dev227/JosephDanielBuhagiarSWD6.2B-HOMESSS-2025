@extends('welcome')

@section('title', 'Home')

@section('content')
<div class="text-center">
    <h1>Welcome to College Management System</h1>
    <p class="lead">Easily manage students and colleges with our system.</p>

    <a href="{{ route('students.index') }}" class="btn btn-primary mt-3">View Students</a>
    <a href="{{ route('colleges.index') }}" class="btn btn-secondary mt-3">View Colleges</a>
</div>
@endsection