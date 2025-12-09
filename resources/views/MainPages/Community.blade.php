<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MindWell Community</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    .sidebar a, .profile-text { color: var(--bs-body-color); text-decoration: none; }
    .sidebar-hover:hover { background: #eef2ff; color: #4f46e5; }
    [data-bs-theme="dark"] .sidebar-hover:hover { background: #2d2d30; color: #818cf8 !important; }
    .active-link { background: #eef2ff; color: #4f46e5 !important; }
    [data-bs-theme="dark"] .active-link { background: #37373a; color: #818cf8 !important; }
    .profile-text { color: #4f46e5 !important; }
    .btn-custom-purple { background-color: #4f46e5; border-color: #4f46e5; color: white; }
    .btn-custom-purple:hover { background-color: #6a5acd; border-color: #6a5acd; color: white; }
  </style>
  <script>
      const savedTheme = localStorage.getItem('theme') || 'light';
      document.documentElement.setAttribute('data-bs-theme', savedTheme);
  </script>
</head>
<body class="bg-body-tertiary">
  <div class="d-flex">
    <div class="offcanvas offcanvas-end" tabindex="-1" id="CommunityOffcanvas">
      <div class="offcanvas-header"><h5 class="offcanvas-title">New Post</h5></div>
      <div class="offcanvas-body">
        <form method="POST" action="{{ route('community.store') }}">
          @csrf
          <div class="mb-3">
            <label class="form-label">Content</label>
            <textarea class="form-control" name="content" rows="10"></textarea>
          </div>
          <button type="submit" class="btn btn-custom-purple mt-3">Save Entry</button>
        </form>
      </div>
    </div>

    <div class="d-flex flex-column flex-shrink-0 p-3 bg-body border-end" style="width: 240px; height: 100vh;">
      <a href="#" class="d-flex align-items-center justify-content-center mb-3 text-decoration-none">
        <img src="{{ asset('assets/Logo.png') }}" style="height: 1.5em; width: 1.5em" alt="">
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
        <li><a href="/settings" class="nav-link sidebar-hover"><i class="bi bi-gear me-2"></i>Settings</a></li>
        <li>
           <form method="POST" action="{{ route('Logout') }}">
            @csrf
            <button class="nav-link sidebar-hover w-100 text-start border-0 bg-transparent text-danger"><i class="bi bi-box-arrow-right me-2"></i>Logout</button>
           </form>
        </li>
      </ul>
    </div>

    <div class="container-fluid p-4">
      <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 class="fw-bold">Community</h4>
        <a class="btn btn-custom-purple" data-bs-toggle="offcanvas" data-bs-target="#CommunityOffcanvas"><i class="bi bi-plus-lg me-1"></i>New Post</a>
      </div>
      @forEach ($posts as $post)
        <div class="card mb-3 shadow-sm">
          <div class="card-body">
            <h6 class="fw-semibold"><i class="bi bi-person-circle me-2"></i>{{$post->username}}</h6>
            <p class="text-muted small mb-2">{{$post->content}}</p>
          </div>
        </div>
      @endforeach
    </div>
  </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>