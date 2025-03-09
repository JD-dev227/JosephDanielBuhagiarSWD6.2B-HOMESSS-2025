@extends('welcome')

@section('title', 'Home')

@section('content')
<div class="d-flex flex-column justify-content-center align-items-center vh-100 text-center">
    <h1>Welcome to College Management System</h1>
    <p class="lead">Easily manage students and colleges with my system.</p>
    <!-- Add your image here -->
    <img src="{{ asset('images/welcome-banner.png') }}" alt="Welcome Banner" class="img-fluid mb-4" style="max-width: 45%; border-radius: 10px;">
    


    <div class="mt-3">
        <button type="button" class="btn btn-outline-primary" onclick="window.location='{{ route('students.index') }}'">View Students</button>
        <button type="button" class="btn btn-outline-dark" onclick="window.location='{{ route('colleges.index') }}'">View Colleges</button>
    </div>
</div>
@endsection
