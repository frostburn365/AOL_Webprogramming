<!-- =========================== LOGIN PAGE (login.html) =========================== --> 
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
        <nav class="navbar navbar-expand-lg bg-body-tertiary shadow-sm">
            <div class="container-fluid"> 
                <a class="navbar-brand d-flex align-items-center" href="home"> 
                    <img src="{{ asset('assets/Logo.png.jpg') }}" alt="Logo" width="30" height="24" class="d-inline-block align-text-top me-2"> 
                    MindWell 
                </a> 
            </div> 
        </nav> 
        
        <!-- Login Form --> 
        <div class="container d-flex justify-content-center align-items-center" style="min-height: 80vh;"> 
            <div class="card shadow-sm p-4" style="width: 100%; max-width: 400px;"> 
                <h3 class="text-center mb-4">Log in</h3> 
                <form> 
                    <div class="mb-3"> 
                        <label for="username" class="form-label">Username</label> 
                        <input type="text" class="form-control" id="username" placeholder="Enter your Username"> 
                    </div> 

                    <div class="mb-3"> 
                        <label for="email" class="form-label">Email address</label> 
                        <input type="email" class="form-control" id="email" placeholder="Enter your email"> 
                    </div> 

                    <div class="mb-3"> 
                        <label for="password" class="form-label">Password</label> 
                        <input type="password" class="form-control" id="password" placeholder="Enter your password"> 
                    </div> 

                    <button type="submit" class="btn btn-primary w-100" style="--bs-btn-bg:#4F46E5;--bs-btn-border-color:#4F46E5"> Log in </button> 
                    <div class="text-center mt-3"> 
                        <small>Don't have an account? 
                            <a href="SignUp">Sign up</a>
                        </small> 
                    </div> 
                </form> 
            </div> 
        </div> 
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script> 
    </body> 
</html>