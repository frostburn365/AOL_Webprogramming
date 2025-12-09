<!DOCTYPE html>
<html lang="en">
    <head> 
        <meta charset="UTF-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <title>MindWell - Sign Up</title> 
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
        
        <!-- Sign Up Form --> 
        <div class="container d-flex justify-content-center align-items-center" style="min-height: 80vh;"> 
            <div class="card shadow-sm p-4" style="width: 100%; max-width: 400px;"> 
                <h3 class="text-center mb-4">Sign Up</h3> 
                <form method="post" action="{{ route('SignUp') }}"> 
                    @csrf    

                    <div class="mb-3"> 
                        <label for="username" class="form-label">Username</label> 
                        <input type="text" name="username" placeholder="Enter your Username" value="{{ old('username') }}" class="form-control @error('username') border-danger-subtle @enderror"> 
                        @error('username')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div> 

                    <div class="mb-3"> 
                        <label for="email" class="form-label">Email address</label> 
                        <input type="text" name="email" placeholder="Enter your email" value="{{ old('email') }}" class="form-control @error('email') border-danger-subtle @enderror"> 
                        @error('email')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div> 

                    <div class="mb-3"> 
                        <label for="Phonenumber" class="form-label">Phonenumber</label> 
                        <input type="number" name="Phonenumber" placeholder="Enter your Phonenumber" value="{{ old('Phonenumber') }}" class="form-control @error('Phonenumber') border-danger-subtle @enderror"> 
                        @error('Phonenumber')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div> 

                    <div class="mb-3"> 
                        <label for="password" class="form-label">Password</label> 
                        <input type="password" name="password" placeholder="Enter your password" class="form-control @error('password') border-danger-subtle @enderror"> 
                        @error('password')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div> 

                    <div class="mb-3"> 
                        <label for="password_confirmation" class="form-label">Confirm Password</label>  
                        <input type="password" name="password_confirmation" placeholder="Confirm your password" class="form-control @error('password') border-danger-subtle @enderror"> 
                        @error('password')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div> 

                    <button type="submit" class="btn btn-primary w-100" style="--bs-btn-bg:#4F46E5;--bs-btn-border-color:#4F46E5"> Sign up </button> 
                    <div class="text-center mt-3"> 
                        <small>Already have an account? 
                            <a href="{{ route('Login') }}">Login</a>
                        </small> 
                    </div> 
                </form> 
            </div> 
        </div> 
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script> 
    </body> 
</html>