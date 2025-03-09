<div>
    <!-- Button to navigate back to the main page -->
    <button type="button" class="btn btn-outline-primary" onclick="window.location='{{ route('home') }}'">
        Back to Main Page
    </button>

    <!-- Button to navigate to the students index page with sorting parameters -->
    <button type="button" class="btn btn-outline-primary" 
        onclick="window.location='{{ route('students.index', ['sort' => 'name', 'sort_order' => $sortOrder]) }}'">
        Sort By Name
    </button>
</div>
