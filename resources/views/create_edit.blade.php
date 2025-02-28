@extends('welcome')
@include('partials.alerts')

@section('content')
<div class="container mt-5">
    <h2>Create/Edit Records</h2>
    <p>Select an option to create or edit records:</p>
    
    <a href="{{ route('colleges.create') }}" class="btn btn-primary">Add College</a>
    <a href="{{ route('students.create') }}" class="btn btn-success">Add Student</a>
</div>
@endsection
