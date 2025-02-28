@extends('welcome')

@section('content')
<div class="container">
    <h1 class="mt-4">Add College</h1>

    <form action="{{ route('colleges.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">College Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        
        <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <input type="text" class="form-control" id="address" name="address" required>
        </div>

        <button type="submit" class="btn btn-primary">Add College</button>
    </form>
</div>
@endsection
