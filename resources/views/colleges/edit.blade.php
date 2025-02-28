@extends('welcome')

@section('title', isset($college) ? 'Edit College' : 'Add College')

@section('content')
<div class="card p-4">
    <h2 class="mb-4">{{ isset($college) ? 'Edit College' : 'Add New College' }}</h2>
    
    <form method="POST" action="{{ isset($college) ? route('colleges.update', $college->id) : route('colleges.store') }}">
        @csrf
        @isset($college)
            @method('PUT')
        @endisset

        <fieldset>
            <legend>College Information</legend>

            <div class="row">
                <label for="name" class="col-sm-2 col-form-label">College Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $college->name ?? '') }}" required>
                </div>
            </div>

            <div class="mt-3">
                <label for="address" class="form-label">Address</label>
                <textarea class="form-control" id="address" name="address" rows="3" required>{{ old('address', $college->address ?? '') }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary mt-4">{{ isset($college) ? 'Update' : 'Create' }}</button>
        </fieldset>
    </form>
</div>
@endsection
