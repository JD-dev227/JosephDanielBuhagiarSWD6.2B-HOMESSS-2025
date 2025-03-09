@extends('welcome')
@include('partials.alerts')

@section('content')
<div class="container">
    <h1 class="mt-4">Colleges</h1>
    <table  class="table table-hover">
        <thead>
            <tr >
                <th>Name</th>
                <th>Address</th>
                <th>Edit/Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($colleges as $college)
                <tr class="table-dark">
                    <td>{{ $college->name }}</td>
                    <td>{{ $college->address }}</td>
                    <td>
                        <a href="{{ route('colleges.edit', $college->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('colleges.destroy', $college->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
     <button type="button" class="btn btn-outline-primary" onclick="window.location='{{ route('home') }}'">Back to Main Page</button>
</div>
@endsection
