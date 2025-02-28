
<div class="row">
    <button type="button" class="btn btn-outline-primary" href="{{ route('students.index', ['sort' => 'name']) }}" >Sort By Name</button>
    <button type="button" class="btn btn-outline-primary" onclick="window.location='{{ route('home') }}'">Back to Main Page</button>
</div>
