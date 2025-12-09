<!DOCTYPE html>
<html lang="en">
    <head> 
        <meta charset="UTF-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <title>MindWell - Log in</title> 
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"> 
    </head> 

    <body class="bg-light"> 
        <!-- Navbar --> 
        <nav class="navbar navbar-expand-lg bg-white shadow-sm py-3">
            <div class="container">
                <a class="navbar-brand d-flex align-items-center" href="Home"> 
                    <img src="{{ asset('assets/Logo.png') }}" alt="Logo" width="30" height="24" class="d-inline-block align-text-top me-2"> 
                    MindWell 
                </a> 

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navMenu">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                        <li class="nav-item mx-2"><a class="nav-link" href="/Home">Home</a></li>
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
        <!-- Login Form --> 
        <div class="container d-flex justify-content-center align-items-center" style="min-height: 80vh;"> 
            <div class="card shadow-sm p-4" style="width: 100%; max-width: 400px;"> 
                <h3 class="text-center mb-4">Log in</h3> 
                <form action="{{ route('Login') }}" method="post">
                    @csrf 
                    <div class="mb-3"> 
                        <label for="email" class="form-label">Email address</label> 
                        <input type="email" class="form-control @error('email') border-danger-subtle @enderror" name="email" placeholder="Enter your email" > 
                        @error('email')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div> 
                    
                    <div class="mb-3"> 
                        <label for="password" class="form-label">Password</label> 
                        <input type="password" class="form-control @error('password') border-danger-subtle @enderror" name="password" placeholder="Enter your password"> 
                        @error('password')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div> 
                    
                    {{--remember me--}}
                    <div class="mb-4">
                        <input type="checkbox" name="Remember" id="Remember">
                        <label for="Remember">Remember me</label>
                    </div>
                    
                    @error('failed')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                    
                    <button type="submit" class="btn btn-primary w-100" style="--bs-btn-bg:#4F46E5;--bs-btn-border-color:#4F46E5"> Log in </button> 
                    <div class="text-center mt-3"> 
                        <small>Don't have an account? 
                            <a href="SignUp">Sign up</a>
                        </small> 
                    </div> 
                </form> 
            </div> 
        </div> 
        @endguest
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script> 
    </body> 
    </html>