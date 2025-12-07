<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MindWell</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    <style>
        body {
            background-color: #fafafa;
        }
        .feature-card, .testimonial-card {
            border-radius: 10px;
            background: #f1f1f5;
            border: none;
            padding: 25px;
        }
        .icon {
            font-size: 35px;
            color: #6366f1;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg bg-white shadow-sm py-3">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="Home"> 
            <img src="{{ asset('assets/Logo.png.jpg') }}" alt="Logo" width="30" height="24" class="d-inline-block align-text-top me-2"> 
            MindWell 
        </a> 

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navMenu">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item mx-2"><a class="nav-link active fw-bold" href="/Home">Home</a></li>
                <li class="nav-item mx-2"><a class="nav-link" href="/Mission">Our Mission</a></li>
                <li class="nav-item mx-2"><a class="nav-link" href="/How">How It Works</a></li>
            </ul>

            <div class="d-flex">
                <a href="{{ route('Login') }}" class="btn btn-outline-primary me-2">Log In</a>
                <a href="{{ route('SignUp') }}" class="btn btn-primary">Sign Up</a>
            </div>
        </div>
    </div>
</nav>

@guest
<!-- HERO -->
<section class="text-center py-5">
    <div class="container">
        <h1 class="fw-bold display-6">A safe space for your mind.</h1>
        <p class="text-muted mt-3 mb-4">
            Anonymously track your mood, journal your thoughts, and connect with a supportive community of fellow students.
        </p>
        <a href="{{ route('SignUp') }}" class="btn btn-primary px-4 py-2">Get Started for Free</a>
    </div>
</section>

<!-- CORE FEATURES -->
<section class="py-5">
    <div class="container text-center">
        <h4 class="fw-bold mb-4">Core Features</h4>
        
        <div class="row justify-content-center g-4">
            <div class="col-md-4">
                <div class="feature-card">
                    <div class="icon">📖</div>
                    <h6 class="fw-bold">Private Journal</h6>
                    <p class="text-muted">A secure, encrypted space for your thoughts. No one sees it but you.</p>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="feature-card">
                    <div class="icon">👥</div>
                    <h6 class="fw-bold">Anonymous Community</h6>
                    <p class="text-muted">Share experiences and find support without revealing your identity.</p>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="feature-card">
                    <div class="icon">📈</div>
                    <h6 class="fw-bold">Mood Tracker</h6>
                    <p class="text-muted">Log daily feelings and gain insights into your mental well-being.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- TESTIMONIALS -->
<section class="py-5">
    <div class="container text-center">
        <h4 class="fw-bold mb-4">What Our Community Says</h4>
        
        <div class="row justify-content-center g-4">
            <div class="col-md-4">
                <div class="testimonial-card p-4">
                    <h6 class="fw-bold">Alex Doe</h6>
                    <p class="text-muted">
                        "This platform has been a game-changer for managing my stress during exams. The community is so supportive."
                    </p>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="testimonial-card p-4">
                    <h6 class="fw-bold">Jane Smith</h6>
                    <p class="text-muted">
                        "I finally feel like I have a space where I can be open about my mental health without judgment."
                    </p>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="testimonial-card p-4">
                    <h6 class="fw-bold">Sam Wilson</h6>
                    <p class="text-muted">
                        "The mood tracker helped me see patterns I never noticed before. Huge impact!"
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
@endguest

<!-- FOOTER -->
<footer class="bg-white text-center py-3 border-top">
    <small>© 2025 MindWell. All rights reserved.</small><br>
    <small class="text-muted">A project dedicated to UN Sustainable Development Goal 3: Good Health and Well-being.</small>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>