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
