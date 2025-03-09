<form method="GET" class="mb-3">
    <!-- Label for the college filter dropdown -->
    <label for="college_filter">Filter by College:</label>

    <!-- Dropdown to select a college for filtering -->
    <select name="college_filter" id="college_filter" class="form-select" onchange="this.form.submit()">
        <!-- Option to show all colleges -->
        <option value="">All Colleges</option>

        <!-- Loop through the colleges and create an option for each -->
        @foreach ($colleges as $college)
            <!-- Set the 'selected' attribute if the current request's 'college_filter' matches the current college's ID -->
            <option value="{{ $college->id }}" {{ request('college_filter') == $college->id ? 'selected' : '' }}>
                <!-- Display the name of the college -->
                {{ $college->name }}
            </option>
        @endforeach
    </select>
</form>
