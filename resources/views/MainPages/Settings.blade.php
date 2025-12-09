<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Settings - MindWell</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    /* SMART CSS: Adapts to Light and Dark Mode automatically */
    .sidebar a, .profile-text {
      color: var(--bs-body-color); /* Magic line: turns white in dark mode */
      text-decoration: none;
    }
    
    .sidebar-hover:hover {
      background: #eef2ff;
      color: #4f46e5 !important;
    }

    /* Dark Mode Hover Override */
    [data-bs-theme="dark"] .sidebar-hover:hover {
      background: #2d2d30;
      color: #818cf8 !important;
    }

    .active-link {
      background: #eef2ff;
      color: #4f46e5 !important;
      font-weight: 600;
    }

    [data-bs-theme="dark"] .active-link {
      background: #37373a;
      color: #818cf8 !important;
    }

    .profile-text {
      color: #4f46e5 !important;
    }
  </style>

  <script>
    const savedTheme = localStorage.getItem('theme') || 'light';
    document.documentElement.setAttribute('data-bs-theme', savedTheme);
  </script>
</head>
<body class="bg-body-tertiary">

  <div class="d-flex">
    <div class="d-flex flex-column flex-shrink-0 p-3 bg-body border-end" style="width: 240px; height: 100vh;">
      <a href="#" class="d-flex align-items-center justify-content-center mb-3 text-decoration-none">
        <img src="{{ asset('assets/Logo.png') }}" style="height: 1.5em; width: 1.5em" alt="">
        <span class="fs-5 fw-semibold ms-2 profile-text">MindWell</span>
      </a>
      <hr>
      
      <ul class="nav nav-pills flex-column mb-auto sidebar">
        <li><a href="/Dashboard" class="nav-link sidebar-hover"><i class="bi bi-grid me-2"></i>Dashboard</a></li>
        <li><a href="/Journal" class="nav-link sidebar-hover"><i class="bi bi-journal-bookmark me-2"></i>Journal</a></li>
        <li><a href="/Community" class="nav-link sidebar-hover"><i class="bi bi-people me-2"></i>Community</a></li>
        <li><a href="/Insights" class="nav-link sidebar-hover"><i class="bi bi-bar-chart-line me-2"></i>Insights</a></li>
      </ul>
    
      <hr>
      <ul class="nav nav-pills flex-column sidebar">
        <li><a href="/settings" class="nav-link active-link"><i class="bi bi-gear me-2"></i>Settings</a></li>
        <li>
          <form action="{{ route('Logout') }}" method="post">
             @csrf
            <button type="submit" class="nav-link text-danger w-100 text-start bg-transparent border-0"><i class="bi bi-box-arrow-right me-2"></i>Logout</button>  
          </form>
        </li>
      </ul>
    </div>

    <div class="container-fluid p-5">
      <h4 class="fw-bold mb-4">Settings</h4>
      
      <div class="card shadow-sm border-0 mb-4">
        <div class="card-body p-4">
          <h5 class="card-title fw-bold mb-3">Theme</h5>
          <div class="btn-group" role="group">
            <button type="button" class="btn btn-primary" onclick="setTheme('light')" id="btn-light">Light</button>
            <button type="button" class="btn btn-outline-secondary" onclick="setTheme('dark')" id="btn-dark">Dark</button>
          </div>
        </div>
      </div>

      <div class="card shadow-sm border-0">
        <div class="card-body p-4">
          <h5 class="card-title fw-bold mb-3">Account</h5>
          <button class="btn btn-danger">Delete Account</button>
          <p class="text-muted small mt-2 mb-0">This action is irreversible. (This is a mock button)</p>
        </div>
      </div>
    </div>
  </div>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    // We do NOT declare savedTheme again here to avoid conflicts.
    // We just run the function to set the button states.
    updateButtonStyles(localStorage.getItem('theme') || 'light');

    function setTheme(theme) {
      localStorage.setItem('theme', theme);
      document.documentElement.setAttribute('data-bs-theme', theme);
      updateButtonStyles(theme);
    }

    function updateButtonStyles(theme) {
      const lightBtn = document.getElementById('btn-light');
      const darkBtn = document.getElementById('btn-dark');

      if (theme === 'dark') {
        lightBtn.className = 'btn btn-outline-primary';
        darkBtn.className = 'btn btn-secondary';
      } else {
        lightBtn.className = 'btn btn-primary'; 
        darkBtn.className = 'btn btn-outline-secondary';
      }
    }
  </script>
</body>
</html>