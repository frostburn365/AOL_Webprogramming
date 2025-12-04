<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MindWell Community</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

  <style>
    .sidebar a, .profile-text { color: black }
    .sidebar-hover:hover {
      background: #eef2ff;
      color: #4f46e5;
    }
    .active-link {
      background: #eef2ff;
      color: #4f46e5 !important;
    }
    .profile { color: #4f46e5 !important; }
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
        <li><a href="/Dashboard" class="nav-link sidebar-hover"><i class="bi bi-grid me-2"></i>Dashboard</a></li>
        <li><a href="/Journal" class="nav-link sidebar-hover"><i class="bi bi-journal-bookmark me-2"></i>Journal</a></li>
        <li><a href="/Community" class="nav-link active-link"><i class="bi bi-people me-2"></i>Community</a></li>
        <li><a href="/Insights" class="nav-link sidebar-hover"><i class="bi bi-bar-chart-line me-2"></i>Insights</a></li>
      </ul>

      <hr>

      <ul class="nav nav-pills flex-column sidebar">
        <li><a href="#" class="nav-link sidebar-hover"><i class="bi bi-gear me-2"></i>Settings</a></li>
        <li><a href="#" class="nav-link sidebar-hover"><i class="bi bi-box-arrow-right me-2"></i>Logout</a></li>
      </ul>
    </div>

    <!-- Main Content -->
    <div class="container-fluid p-4">

      <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 class="fw-bold">Community</h4>
        <a href="#" class="btn btn-primary">
          <i class="bi bi-plus-lg me-1"></i> New Post
        </a>
      </div>

      <!-- Tabs -->
      <ul class="nav nav-tabs mb-3">
        <li class="nav-item"><a class="nav-link active" href="#">General</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Exam Stress</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Advice</a></li>
      </ul>

      <!-- Post Card -->
      <div class="card mb-3 shadow-sm">
        <div class="card-body">
          <h6 class="fw-semibold"><i class="bi bi-person-circle me-2"></i>Anonymous Fox</h6>
          <p class="text-muted small mb-2">Anyone else finding it hard to balance social life and studies? Looking for tips!</p>
          <div class="d-flex gap-3 text-muted small">
            <span><i class="bi bi-hand-thumbs-up me-1"></i>15</span>
            <span><i class="bi bi-chat-left-text me-1"></i>1 Comment</span>
          </div>
        </div>
      </div>

      <div class="card mb-3 shadow-sm">
        <div class="card-body">
          <h6 class="fw-semibold"><i class="bi bi-person-circle me-2"></i>Anonymous Fox</h6>
          <p class="text-muted small mb-2">Anyone else finding it hard to balance social life and studies? Looking for tips!</p>
          <div class="d-flex gap-3 text-muted small">
            <span><i class="bi bi-hand-thumbs-up me-1"></i>15</span>
            <span><i class="bi bi-chat-left-text me-1"></i>1 Comment</span>
          </div>
        </div>
      </div>

    </div>
  </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
