
<div>
    <button type="button" class="btn btn-outline-primary" onclick="window.location='{{ route('home') }}'">Back to Main Page</button>
    <button type="button" class="btn btn-outline-primary" 
    onclick="window.location='{{ route('students.index', ['sort' => 'name', 'sort_order' => $sortOrder]) }}'">
    Sort By Name
</button>

</div>
