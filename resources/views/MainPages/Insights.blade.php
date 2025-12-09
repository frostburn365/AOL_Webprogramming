<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MindWell Insights</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    .sidebar a, .profile-text { color: var(--bs-body-color); text-decoration: none; }
    .sidebar-hover:hover { background: #eef2ff; color: #4f46e5; }
    [data-bs-theme="dark"] .sidebar-hover:hover { background: #2d2d30; color: #818cf8 !important; }
    .active-link { background: #eef2ff; color: #4f46e5 !important; }
    [data-bs-theme="dark"] .active-link { background: #37373a; color: #818cf8 !important; }
    .profile-text { color: #4f46e5 !important; }
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
      <li><a href="/Insights" class="nav-link active-link"><i class="bi bi-bar-chart-line me-2"></i>Insights</a></li>
    </ul>
    <hr>
    <ul class="nav nav-pills flex-column sidebar">
      <li><a href="/settings" class="nav-link sidebar-hover"><i class="bi bi-gear me-2"></i>Settings</a></li>
      <li>
        <form action="{{ route('Logout') }}" method="post">
          @csrf
          <button class="nav-link sidebar-hover w-100 text-start border-0 bg-transparent text-danger"><i class="bi bi-box-arrow-right me-2"></i>Logout</button>  
        </form>
      </li>
    </ul>
  </div>

  <div class="container-fluid p-4">
    <h4 class="fw-bold mb-4">Your Insights</h4>
    <div class="row g-3 mb-4">
      <div class="col-md-4">
        <div class="card p-3 shadow-sm">
          <span class="text-muted small">Average Mood</span>
          <h6 class="fw-semibold mt-1">Neutral</h6>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card p-3 shadow-sm">
          <span class="text-muted small">Most Frequent</span>
          <h6 class="fw-semibold mt-1">Happy</h6>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card p-3 shadow-sm">
          <span class="text-muted small">Positive Streak</span>
          <h6 class="fw-semibold mt-1">2 Days</h6>
        </div>
      </div>
    </div>

    <div class="card shadow-sm p-4">
      <h6 class="text-muted mb-3">Mood Trend</h6>
      <div class="bg-body rounded" style="height: 300px; border: 1px solid #eee; display:flex; align-items:center; justify-content:center;">
        <p class="text-muted">Chart Placeholder</p>
      </div>
    </div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>