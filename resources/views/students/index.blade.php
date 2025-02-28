@extends('welcome')
@include('partials.alerts')

@section('content')
<div class="container">
    <h1 class="mt-4">Students</h1>
    @include('partials.student_filter')

   

    @if ($students->count() > 0)
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col" >Phone</th>
                <th scope="col"> College</th>
                <th scope="col">Edit/Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr class="table-dark">
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->email }}</td>
                    <td>{{ $student->phone }}</td>
                    <td>{{ $student->college->name ?? 'N/A' }}</td>
                    <td>
                        <a href="{{ route('students.edit', $student->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @else
        <p class="text-center mt-3">No students found for the selected college.</p>
    @endif
    
</div>
@include('partials.student_sort')
@endsection
