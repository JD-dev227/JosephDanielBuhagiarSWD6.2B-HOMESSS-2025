@extends('welcome') <!-- This extends the 'welcome' layout file for the page -->

@include('partials.alerts') <!-- This includes a partial view that displays success and error messages -->

@section('content') <!-- Defines the content section of the page -->
<div class="container mt-5">
    <!-- Heading for the section -->
    <h2>Create/Edit Records</h2>    

    <!-- Short description of the section -->
    <p>Select an option to create or edit records:</p>

    <!-- Button to navigate back to the home page -->
    <button type="button" class="btn btn-outline-dark" onclick="window.location='{{ route('home') }}'">Home</button>
    
    <!-- Button to navigate to the page for adding a new student -->
    <button type="button" class="btn btn-outline-dark" onclick="window.location='{{ route('students.create') }}'">Add Student</button>
    
    <!-- Button to navigate to the page for adding a new college -->
    <button type="button" class="btn btn-outline-dark" onclick="window.location='{{ route('colleges.create') }}'">Add College</button>
</div>
@endsection <!-- Ends the content section -->
