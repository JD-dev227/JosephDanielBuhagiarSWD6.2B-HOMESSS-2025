<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">College System</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="{{ route('colleges.index') }}">Colleges</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('students.index') }}">Students</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('create.edit') }}">Create/Edit</a></li>
            </ul>
            </ul>
        </div>
    </div>
</nav>
