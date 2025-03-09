<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1"> 

    <title>@yield('title', 'College Management')</title> <!-- Dynamically sets the title. Defaults to 'College Management'-->

    <!-- BootsWatch Lux theme for Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootswatch@5.3.3/dist/lux/bootstrap.min.css" rel="stylesheet"> <!-- Includes the Lux theme for Bootstrap -->
    
    <!-- Custom styles for the application -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"> <!-- Links to a custom CSS file (style.css) in the public folder -->

</head>
<body>

    @include('layouts.navbar')  <!-- Includes the navigation bar layout (navbar.blade.php) -->

    <div class="container mt-4">
        @yield('content')  <!-- This is where the content of each specific page will be inserted -->
    </div>

    <!-- Bootstrap JavaScript bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> <!-- Includes Bootstrap JS bundle (includes Popper.js) -->

</body>
</html>
