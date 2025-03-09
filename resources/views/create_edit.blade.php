@extends('welcome')
@include('partials.alerts')

@section('content')
<div class="container mt-5">
    <h2>Create/Edit Records</h2>
    <p>Select an option to create or edit records:</p>
    
    <button type="button" class="btn btn-outline-dark" onclick="window.location='{{ route('home') }}'">Home</button>
    <button type="button" class="btn btn-outline-dark" onclick="window.location='{{ route('students.create') }}'">Add Studnet</button>
    <button type="button" class="btn btn-outline-dark" onclick="window.location='{{ route('colleges.create') }}'">Add College</button>
</div>
@endsection
