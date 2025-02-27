@extends('layouts.welcome')

@section('title', isset($student) ? 'Edit Student' : 'Add Student')

@section('content')
<div class="card p-4">
    <h2 class="mb-4">{{ isset($student) ? 'Edit Student' : 'Add New Student' }}</h2>
    
    <form method="POST" action="{{ isset($student) ? route('students.update', $student->id) : route('students.store') }}">
        @csrf
        @isset($student)
            @method('PUT')
        @endisset

        <fieldset>
            <legend>Student Information</legend>

            <div class="row">
                <label for="name" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $student->name ?? '') }}" required>
                </div>
            </div>

            <div class="mt-3">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $student->email ?? '') }}" required>
                <small class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>

            <div class="mt-3">
                <label for="phone" class="form-label">Phone Number</label>
                <input type="tel" class="form-control" id="phone" name="phone" value="{{ old('phone', $student->phone ?? '') }}" required>
            </div>

            <div class="mt-3">
                <label for="dob" class="form-label">Date of Birth</label>
                <input type="date" class="form-control" id="dob" name="dob" value="{{ old('dob', $student->dob ?? '') }}" required>
            </div>

            <div class="mt-3">
                <label for="college_id" class="form-label">Select College</label>
                <select class="form-select" id="college_id" name="college_id" required>
                    <option value="">Choose a College</option>
                    @foreach($colleges as $college)
                        <option value="{{ $college->id }}" {{ isset($student) && $student->college_id == $college->id ? 'selected' : '' }}>
                            {{ $college->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <fieldset class="mt-4">
                <legend>Notifications</legend>
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                    <label class="form-check-label" for="flexSwitchCheckDefault">Receive Email Updates</label>
                </div>
            </fieldset>

            <button type="submit" class="btn btn-primary mt-4">{{ isset($student) ? 'Update' : 'Create' }}</button>
        </fieldset>
    </form>
</div>
@endsection
