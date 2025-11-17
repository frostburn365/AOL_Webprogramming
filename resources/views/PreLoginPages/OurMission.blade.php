<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Our Mission - MindWell</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    <style>
        body {
            background-color: #fafafa;
        }
    </style>
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg bg-white shadow-sm py-3">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="home"> 
            <img src="{{ asset('assets/Logo.png.jpg') }}" alt="Logo" width="30" height="24" class="d-inline-block align-text-top me-2"> 
            MindWell 
        </a> 

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navMenu">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item mx-2"><a class="nav-link" href="/Home">Home</a></li>
                <li class="nav-item mx-2"><a class="nav-link active fw-bold" href="/Mission">Our Mission</a></li>
                <li class="nav-item mx-2"><a class="nav-link" href="/How">How It Works</a></li>
            </ul>

            <div class="d-flex">
                <a href="/Login" class="btn btn-outline-primary me-2">Log In</a>
                <a href="/SignUp" class="btn btn-primary">Sign Up</a>
            </div>
        </div>
    </div>
</nav>

<!-- CONTENT -->
<section class="py-5">
    <div class="container text-center">

        <h2 class="fw-bold mb-3">Our Mission</h2>
        <p class="text-muted mx-auto" style="max-width: 700px;">
            We believe every student deserves access to mental wellness tools that are private,
            supportive, and effective.
        </p>

        <div class="text-start mx-auto mt-4" style="max-width: 760px;">

            <p>
                University life is a period of immense growth, but it can also bring significant stress,
                pressure, and feelings of isolation. MindWell was born from the understanding that mental
                health is just as important as physical health, yet often overlooked.
            </p>

            <p>
                Our core mission is to provide a safe, anonymous, and accessible platform for students
                to proactively manage their mental well-being. We are committed to fostering a supportive
                environment where users feel empowered to express themselves, understand their emotional
                patterns, and connect with peers who share similar experiences.
            </p>

            <h5 class="fw-bold mt-4">Commitment to Privacy</h5>
            <p>
                Privacy isn't an afterthought; it's our foundation. We know that for you to be truly open,
                you need to trust the platform. That's why your journal is for your eyes only, and your
                participation in the community is always anonymous.
            </p>

            <h5 class="fw-bold mt-4">Aligning with SDG 3</h5>
            <p>
                This project directly supports the United Nations’ Sustainable Development Goal 3:
                Good Health and Well-being. By providing accessible mental health tools, we aim to promote
                well-being and reduce the stigma associated with mental health challenges among young adults.
            </p>
        </div>
    </div>
</section>

<!-- FOOTER -->
<footer class="bg-white text-center py-3 border-top">
    <small>© 2025 MindWell. All rights reserved.</small><br>
    <small class="text-muted">
        A project dedicated to UN Sustainable Development Goal 3: Good Health and Well-being.
    </small>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
