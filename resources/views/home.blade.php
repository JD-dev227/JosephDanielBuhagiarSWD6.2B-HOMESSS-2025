@extends('welcome') <!-- Extends the 'welcome' layout file for the page -->

@section('title', 'Home') <!-- Sets the page title to "Home" -->

@section('content') <!-- Defines the content section of the page -->
<div class="d-flex flex-column justify-content-center align-items-center vh-10 text-center">
    <!-- Container for centering content on the page using Flexbox (full vertical height) -->
    <h1>Welcome to College Management System</h1>
    <p class="lead">Easily manage students and colleges with my system.</p>

    <div class="hover-container">
        <!-- Container for the welcome image and hover functionality -->
        <img src="{{ asset('images/welcome-banner.png') }}" 
             alt="Welcome Banner" 
             class="img-fluid mb-4 hover-image" 
             style="max-width: 50%; border-radius: 10px;">
        <!-- Image that will play audio on hover -->

        <!-- Audio element that will play when the image is hovered -->
        <audio id="hoverAudio">
            <source src="{{ asset('audio/audio.mp3') }}" type="audio/mpeg">
            <!-- If the browser doesn't support audio, a fallback message will be shown -->
            Your browser does not support the audio element.
        </audio>
    </div>

    <div class="mt-3">
        <!-- Buttons to navigate to students and colleges pages -->
        <button type="button" class="btn btn-outline-primary" onclick="window.location='{{ route('students.index') }}'">View Students</button>
        <button type="button" class="btn btn-outline-dark" onclick="window.location='{{ route('colleges.index') }}'">View Colleges</button>
    </div>
</div>

<!-- JavaScript for Hover Effect -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const image = document.querySelector(".hover-image"); // Select the image element
        const audio = document.getElementById("hoverAudio"); // Select the audio element

        // Play the audio when the image is hovered
        image.addEventListener("mouseenter", () => {
            audio.play(); 
        });

        // Pause and reset the audio when the mouse leaves the image
        image.addEventListener("mouseleave", () => {
            audio.pause(); // Pause the audio
            audio.currentTime = 0; // Reset audio to start position
        });
    });
</script>
@endsection <!-- Ends the content section -->
