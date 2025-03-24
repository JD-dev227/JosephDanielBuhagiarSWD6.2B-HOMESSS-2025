@extends('welcome')  {{-- This extends the main layout file 'welcome.blade.php' --}}

@include('partials.alerts')  {{-- This includes the 'alerts' partial for displaying any messages (e.g., success or errors) --}}

@section('content')  

<div class="container">  {{-- This is a Bootstrap container to center and add padding to the content --}}
    <h1 class="mt-4">Colleges</h1>  {{-- Heading for the page --}}

    <table class="table table-hover">  {{-- A Bootstrap-styled table that will highlight rows when hovered over --}}
        <thead>  {{-- The table header --}}
            <tr>
                <th>Name</th>  {{-- Column for the college name --}}
                <th>Address</th>  {{-- Column for the college address --}}
                <th>Edit/Delete</th>  {{-- Column for the edit and delete buttons --}}
            </tr>
        </thead>
        <tbody>  {{-- The table body where each college's data will be displayed --}}
            @foreach ($colleges as $college)  {{-- Loop through all colleges --}}
                <tr class="table-dark">  {{-- Dark-styled row for each college --}}
                    <td>{{ $college->name }}</td>  {{-- Display the college name --}}
                    <td>{{ $college->address }}</td>  {{-- Display the college address --}}
                    <td>
                        <a href="{{ route('colleges.edit', $college->id) }}" class="btn btn-warning btn-sm">Edit</a>  
                        {{-- Edit button that takes the user to the college edit page --}}

                        <form action="{{ route('colleges.destroy', $college->id) }}" method="POST" style="display:inline;">  
                            {{-- Form to delete the college, sent via POST with the DELETE method spoofed --}}
                            @csrf  {{-- CSRF protection for the form --}}
                            @method('DELETE')  {{-- Spoof DELETE method to make the request behave like a DELETE request --}}
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>  
                            {{-- Delete button with a confirmation prompt --}}
                        </form>
                    </td>
                </tr>
            @endforeach  {{-- End of the loop through colleges --}}
        </tbody>
    </table>

    <button type="button" class="btn btn-outline-primary" onclick="window.location='{{ route('home') }}'">Back to Main Page</button>  
    {{-- Button that redirects to the home page using JavaScript --}}
</div>

@endsection  {{-- Ends the content section --}}
