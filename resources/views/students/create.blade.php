@extends('welcome')

@section('content')
<div class="container">
    <h1 class="mt-4">Add Student</h1>

    <form action="{{ route('students.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Student Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>

        <div class="mb-3">
            <label for="phone" class="form-label">Phone</label>
            <input type="text" class="form-control" id="phone" name="phone" required>
        </div>

        <div class="mb-3">
            <label for="dob" class="form-label">Date of Birth</label>
            <input type="date" name="dob" id="dob" class="form-control" required>
        </div>
        
        <div class="mb-3">
            <label for="college_id" class="form-label">College</label>
            <select class="form-select" id="college_id" name="college_id" required>
                <option value="">Select a college</option>
                @foreach ($colleges as $college)
                    <option value="{{ $college->id }}">{{ $college->name }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Add Student</button>
    </form>
</div>
@endsection
