@extends('layouts.welcome')

@section('content')
<div class="container">
    <h1 class="mt-4">Students</h1>

    <form method="GET" class="mb-3">
        <label for="college_filter">Filter by College:</label>
        <select name="college_filter" id="college_filter" class="form-select" onchange="this.form.submit()">
            <option value="">All Colleges</option>
            @foreach ($colleges as $college)
                <option value="{{ $college->id }}" {{ request('college_filter') == $college->id ? 'selected' : '' }}>
                    {{ $college->name }}
                </option>
            @endforeach
        </select>
    </form>

    <a href="{{ route('students.create') }}" class="btn btn-primary mb-3">Add Student</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th><a href="{{ route('students.index', ['sort' => 'name']) }}">Name</a></th>
                <th>Email</th>
                <th>Phone</th>
                <th>College</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr>
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
</div>
@endsection
