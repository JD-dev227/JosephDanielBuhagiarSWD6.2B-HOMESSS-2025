@extends('welcome') <!-- // This extends the layout from 'welcome.blade.php'. The content of this view will be injected into the section defined in 'welcome.blade.php'.-->

@include('partials.alerts')  <!--// This includes the 'alerts' partial view (typically used for displaying messages, such as errors or success).-->

@section('content') <!-- // This defines the content section that will be injected into the '@yield('content')' section in the 'welcome.blade.php' layout.-->
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
        <button type="button" class="btn btn-outline-primary" onclick="window.location='{{ route('home') }}'">Back to Main Page</button>

    </form>
</div>
@endsection
