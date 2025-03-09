@extends('welcome')

@section('title', 'Home')

@section('content')
<div class="d-flex flex-column justify-content-center align-items-center vh-10 text-center">
    <h1>Welcome to College Management System</h1>
    <p class="lead">Easily manage students and colleges with my system.</p>
    
      <div class="hover-container">
        <img src="{{ asset('images/welcome-banner.png') }}" 
             alt="Welcome Banner" 
             class="img-fluid mb-4 hover-image" 
             style="max-width: 50%; border-radius: 10px;">
             
        <audio id="hoverAudio">
            <source src="{{ asset('audio/audio.mp3') }}" type="audio/mpeg">
            Your browser does not support the audio element.
        </audio>
    </div>

    <div class="mt-3">
        <button type="button" class="btn btn-outline-primary" onclick="window.location='{{ route('students.index') }}'">View Students</button>
        <button type="button" class="btn btn-outline-dark" onclick="window.location='{{ route('colleges.index') }}'">View Colleges</button>
    </div>
</div>

<!-- JavaScript for Hover Effect -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const image = document.querySelector(".hover-image");
        const audio = document.getElementById("hoverAudio");

        image.addEventListener("mouseenter", () => {
            audio.play(); // Play the audio on hover
        });

        image.addEventListener("mouseleave", () => {
            audio.pause(); // Pause the audio when not hovering
            audio.currentTime = 0; // Reset to start
        });
    });
</script>
@endsection
