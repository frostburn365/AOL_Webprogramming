<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MindWell Dashboard</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    .sidebar a, .profile-text {
      color: black
    }
    
    .sidebar-hover:hover{
      background: #eef2ff;
      color: #4f46e5;
    }

    .active-link{
      background: #eef2ff;
      color: #4f46e5 !important;
    }

    .profile{
      color: #4f46e5 !important;
    }
  </style>

</head>
<body class="bg-light">

  <div class="d-flex">
    <!-- Sidebar -->
    <div class="d-flex flex-column flex-shrink-0 p-3 bg-white border-end" style="width: 240px; height: 100vh;">
      <a href="#" class="d-flex align-items-center justify-content-center mb-3 text-decoration-none">
        <img src="{{ asset('assets/Logo.png.jpg') }}" style="height: 1.5em; width: 1.5em" alt="">
        <span class="fs-5 fw-semibold ms-2 profile-text">MindWell</span>
      </a>
      <hr>
      
      <ul class="nav nav-pills flex-column mb-auto sidebar">
        <li><a href="/Dashboard" class="nav-link active-link"><i class="bi bi-grid me-2"></i>Dashboard</a></li>
        <li><a href="/Journal" class="nav-link sidebar-hover"><i class="bi bi-journal-bookmark me-2"></i>Journal</a></li>
        <li><a href="/Community" class="nav-link sidebar-hover"><i class="bi bi-people me-2"></i>Community</a></li>
        <li><a href="/Insights" class="nav-link sidebar-hover"><i class="bi bi-bar-chart-line me-2"></i>Insights</a></li>
      </ul>
    
      <hr>
      <ul class="nav nav-pills flex-column sidebar">
        <li><a href="#" class="nav-link sidebar-hover"><i class="bi bi-gear me-2"></i>Settings</a></li>
        <li>
          <form action="{{ route('Logout') }}" method="post">
            @csrf
            <button class="nav-link text-bg-danger"><i class="bi bi-box-arrow-right me-2"></i>Logout</a>  
          </form>
        </li>
      </ul>

    </div>

    <!-- Main Content -->
    <div class="container-fluid p-4">
      <h4 class="fw-bold mb-4">Dashboard</h4>

      <div class="row g-3">
        <!-- Mood Tracker -->
        <div class="col-md-4">
          <div class="card text-center p-3 h-100 shadow-sm">
            <h6 class="mb-3">How are you feeling today?</h6>
            <div class="d-flex justify-content-around">
              <div>
                <div class="fs-2">😊</div>
                <p class="small mb-0">Happy</p>
              </div>
              <div>
                <div class="fs-2">😐</div>
                <p class="small mb-0">Neutral</p>
              </div>
              <div>
                <div class="fs-2">😔</div>
                <p class="small mb-0">Sad</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Journal -->
        <div class="col-md-4">
          <div class="card text-center p-3 h-100 shadow-sm">
            <i class="bi bi-journal-bookmark fs-1 text-primary"></i>
            <h6 class="mt-2">Write in Journal</h6>
            <p class="text-muted small mb-0">Clear your mind</p>
          </div>
        </div>

        <!-- Community -->
        <div class="col-md-4">
          <div class="card text-center p-3 h-100 shadow-sm">
            <i class="bi bi-people fs-1 text-primary"></i>
            <h6 class="mt-2">Visit Community</h6>
            <p class="text-muted small mb-0">Connect with others</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
