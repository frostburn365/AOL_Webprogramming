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
        <nav class="navbar navbar-expand-lg bg-body-tertiary shadow-sm">
            <div class="container-fluid"> 
                <a class="navbar-brand d-flex align-items-center" href="home"> 
                    <img src="{{ asset('assets/Logo.png.jpg') }}" alt="Logo" width="30" height="24" class="d-inline-block align-text-top me-2"> 
                    MindWell 
                </a> 
            </div> 
        </nav> 
        
        <!-- Sign Up Form --> 
        <div class="container d-flex justify-content-center align-items-center" style="min-height: 80vh;"> 
            <div class="card shadow-sm p-4" style="width: 100%; max-width: 400px;"> 
                <h3 class="text-center mb-4">Sign Up</h3> 
                <form> 
                    <div class="mb-3"> 
                        <label for="email" class="form-label">Email address</label> 
                        <input type="email" class="form-control" id="email" placeholder="Enter your email"> 
                    </div> 

                    <div class="mb-3"> 
                        <label for="Phonenumber" class="form-label">Phonenumber</label> 
                        <input type="number" class="form-control" id="PhonenNum" placeholder="Enter your Phonenumber" min="0"> 
                    </div> 

                    <div class="mb-3"> 
                        <label for="password" class="form-label">Password</label> 
                        <input type="password" class="form-control" id="Password" placeholder="Enter your password"> 
                    </div> 

                    <div class="mb-3"> 
                        <label for="ConfPassword" class="form-label">Confirm Password</label>  
                        <input type="Password" class="form-control" id="ConfPassword" placeholder="Confirm your password"> 
                    </div> 

                    <button type="submit" class="btn btn-primary w-100" style="--bs-btn-bg:#4F46E5;--bs-btn-border-color:#4F46E5"> Log in </button> 
                    <div class="text-center mt-3"> 
                        <small>Already have an account? 
                            <a href="Login">Log in</a>
                        </small> 
                    </div> 
                </form> 
            </div> 
        </div> 
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script> 
    </body> 
</html>