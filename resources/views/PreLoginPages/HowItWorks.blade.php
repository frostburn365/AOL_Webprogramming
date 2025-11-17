<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>How It Works - MindWell</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    <style>
        body {
            background-color: #fafafa;
        }
        .circle-number {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: #6366f1;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            margin-right: 15px;
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
                <li class="nav-item mx-2"><a class="nav-link" href="/Mission">Our Mission</a></li>
                <li class="nav-item mx-2"><a class="nav-link active fw-bold" href="/How">How It Works</a></li>
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

        <h2 class="fw-bold">How It Works</h2>

        <div class="mt-4 mx-auto" style="max-width: 780px;">

            <!-- STEP 1 -->
            <div class="d-flex align-items-start text-start mb-4">
                <div class="circle-number">1</div>
                <div>
                    <h5 class="fw-bold">Create Your Private Account</h5>
                    <p class="text-muted">
                        Sign up with an email and password. This secures your private data. Your identity
                        remains anonymous in community interactions.
                    </p>
                </div>
            </div>

            <!-- STEP 2 -->
            <div class="d-flex align-items-start text-start mb-4">
                <div class="circle-number">2</div>
                <div>
                    <h5 class="fw-bold">Journal Your Thoughts</h5>
                    <p class="text-muted">
                        Use the private journal to write anything on your mind. Log your mood with each entry
                        to track how you're feeling.
                    </p>
                </div>
            </div>

            <!-- STEP 3 -->
            <div class="d-flex align-items-start text-start mb-4">
                <div class="circle-number">3</div>
                <div>
                    <h5 class="fw-bold">Connect with the Community</h5>
                    <p class="text-muted">
                        Join anonymous discussions in channels like “Exam Stress” or “General Chat.”
                        Your username is always randomized.
                    </p>
                </div>
            </div>

            <!-- STEP 4 -->
            <div class="d-flex align-items-start text-start mb-4">
                <div class="circle-number">4</div>
                <div>
                    <h5 class="fw-bold">Discover Your Insights</h5>
                    <p class="text-muted">
                        Visit the Insights page to visualize your mood trends and understand your emotional patterns.
                    </p>
                </div>
            </div>

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
