<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>MindWell - Home</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-body-tertiary shadow-sm">
  <div class="container-fluid">
    <a class="navbar-brand d-flex align-items-center" href="home">
      <img src="{{ asset('assets/Logo.png.jpg') }}" alt="Logo" width="30" height="24" class="d-inline-block align-text-top me-2">
      MindWell
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Our mission</a></li>
        <li class="nav-item"><a class="nav-link" href="#">How it works</a></li>
      </ul>
      <div class="d-flex">
        <a href="Login" class="btn btn-light me-2">Log in</a>
        <a href="SignUp" class="btn btn-primary" style="--bs-btn-bg:#4F46E5;--bs-btn-border-color:#4F46E5">Sign up</a>
      </div>
    </div>
  </div>
</nav>

<!-- Hero Section -->
<section class="text-center py-5">
  <div class="container">
    <h1 class="fw-bold">A safe space for your mind</h1>
    <p class="lead text-muted">
      Anonymously track your mood, journal your thoughts, and connect with a 
      supportive community of fellow students.
    </p>
    <a href="#" class="btn btn-primary mt-3"
       style="--bs-btn-bg:#4F46E5;--bs-btn-border-color:#4F46E5">
      Get started
    </a>
  </div>
</section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>