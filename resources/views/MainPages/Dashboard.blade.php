<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MindWell Dashboard</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    .sidebar a, .profile-text { color: var(--bs-body-color); text-decoration: none; }
    .sidebar-hover:hover{ background: #eef2ff; color: #4f46e5; }
    [data-bs-theme="dark"] .sidebar-hover:hover { background: #2d2d30; color: #818cf8 !important; }
    .active-link{ background: #eef2ff; color: #4f46e5 !important; font-weight: 600; }
    [data-bs-theme="dark"] .active-link { background: #37373a; color: #818cf8 !important; }
    .profile-text{ color: #4f46e5 !important; }

    /* Mood Hover Effects */
    .mood-btn { cursor: pointer; transition: transform 0.2s; }
    .mood-btn:hover { transform: scale(1.1); }
    
    /* Disabled State (Greyed out) */
    .disabled-mood {
        opacity: 0.5;
        pointer-events: none;
        filter: grayscale(100%);
    }

    /* Links for cards to make the whole box clickable */
    .card-link { text-decoration: none; color: inherit; display: block; height: 100%; }
    .card-link:hover .card { border-color: #4f46e5; transform: translateY(-2px); transition: all 0.2s; }
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
        <li><a href="/Dashboard" class="nav-link active-link"><i class="bi bi-grid me-2"></i>Dashboard</a></li>
        <li><a href="/Journal" class="nav-link sidebar-hover"><i class="bi bi-journal-bookmark me-2"></i>Journal</a></li>
        <li><a href="/Community" class="nav-link sidebar-hover"><i class="bi bi-people me-2"></i>Community</a></li>
        <li><a href="/Insights" class="nav-link sidebar-hover"><i class="bi bi-bar-chart-line me-2"></i>Insights</a></li>
      </ul>
      <hr>
      <ul class="nav nav-pills flex-column sidebar">
        <li><a href="/settings" class="nav-link sidebar-hover"><i class="bi bi-gear me-2"></i>Settings</a></li>
        <li>
          <form action="{{ route('Logout') }}" method="post">
            @csrf
            <button class="nav-link text-danger w-100 text-start border-0 bg-transparent"><i class="bi bi-box-arrow-right me-2"></i>Logout</button>  
          </form>
        </li>
      </ul>
    </div>

    <div class="container-fluid p-4">
      <h4 class="fw-bold mb-4">Dashboard</h4>
      
      <div class="row g-3">
        <div class="col-md-4">
          <div class="card text-center p-3 h-100 shadow-sm">
            <h6 class="mb-3">How are you feeling today?</h6>
            
            <div class="d-flex justify-content-around" id="moodContainer">
              <div class="mood-btn" onclick="logMood('Happy')">
                <div class="fs-2">😊</div><p class="small mb-0">Happy</p>
              </div>
              <div class="mood-btn" onclick="logMood('Neutral')">
                <div class="fs-2">😐</div><p class="small mb-0">Neutral</p>
              </div>
              <div class="mood-btn" onclick="logMood('Sad')">
                <div class="fs-2">😔</div><p class="small mb-0">Sad</p>
              </div>
            </div>
            
            <p id="moodMessage" class="text-success small mt-3 fw-bold d-none">Mood logged for today!</p>
          </div>
        </div>
        
        <div class="col-md-4">
            <a href="/Journal" class="card-link">
              <div class="card text-center p-3 h-100 shadow-sm">
                <i class="bi bi-journal-bookmark fs-1 text-primary"></i>
                <h6 class="mt-2">Write in Journal</h6>
                <p class="text-muted small mb-0">Clear your mind</p>
              </div>
            </a>
        </div>
        
        <div class="col-md-4">
            <a href="/Community" class="card-link">
              <div class="card text-center p-3 h-100 shadow-sm">
                <i class="bi bi-people fs-1 text-primary"></i>
                <h6 class="mt-2">Visit Community</h6>
                <p class="text-muted small mb-0">Connect with others</p>
              </div>
            </a>
        </div>
      </div>
    </div>
  </div>

  <div class="toast-container position-fixed bottom-0 end-0 p-3">
    <div id="moodToast" class="toast align-items-center text-bg-success border-0" role="alert" aria-live="assertive" aria-atomic="true">
      <div class="d-flex">
        <div class="toast-body">
          <i class="bi bi-check-circle-fill me-2"></i> Mood Logged for Today!
        </div>
        <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
      </div>
    </div>
  </div>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  
  <script>
    // 1. Check if user already clicked today when page loads
    document.addEventListener('DOMContentLoaded', () => {
        const lastLoggedDate = localStorage.getItem('moodLoggedDate');
        const today = new Date().toDateString(); // e.g., "Tue Dec 09 2025"

        if (lastLoggedDate === today) {
            disableMoodButtons();
        }
    });

    function logMood(mood) {
        // 1. Show the Toast
        const toastEl = document.getElementById('moodToast');
        const toast = new bootstrap.Toast(toastEl);
        toast.show();

        // 2. Disable the buttons visually
        disableMoodButtons();

        // 3. Save to browser memory so it stays disabled if they refresh
        const today = new Date().toDateString();
        localStorage.setItem('moodLoggedDate', today);
    }

    function disableMoodButtons() {
        const container = document.getElementById('moodContainer');
        const message = document.getElementById('moodMessage');
        
        container.classList.add('disabled-mood');
        message.classList.remove('d-none'); // Show the "Mood logged" text
    }
  </script>
</body>
</html>