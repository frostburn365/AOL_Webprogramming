<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MindWell Journal</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

  <style>
    .sidebar a, .profile-text {
      color: black;
    }

    .sidebar-hover:hover {
      background: #eef2ff;
      color: #4f46e5;
    }

    .active-link {
      background: #eef2ff;
      color: #4f46e5 !important;
    }

    .profile {
      color: #4f46e5 !important;
    }

    .journal-card {
      border: 1px solid #e5e5e5;
      border-radius: 10px;
      padding: 15px;
    }

    .btn-custom-purple {
        background-color: #4f46e5;
        border-color: #4f46e5;
        color: white;
        transition: background-color 0.3s ease, border-color 0.3s ease;
    }

    .btn-custom-purple:hover {
        background-color: #6a5acd; 
        border-color: #6a5acd;
        color: white;
    }

    .btn-custom-purple:focus,
    .btn-custom-purple:active {
        background-color: #6a5acd !important;
        border-color: #6a5acd !important;
        box-shadow: 0 0 0 0.25rem rgba(123, 104, 238, 0.5);
    }
  </style>
</head>

<body class="bg-light">

  <div class="d-flex">

    {{-- Slided Form --}}
    <div class="offcanvas offcanvas-end" tabindex="-1" id="journalOffcanvas" aria-labelledby="journalOffcanvasLabel">
      <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="journalOffcanvasLabel">New Journal Entry</h5>
          </div>
      <div class="offcanvas-body">
          <p class="text-muted">What's on your mind? Write it down, it's safe here.</p>

          <form id="journalForm">
              <div class="mb-3">
                  <label for="title" class="form-label">Title</label>
                  <input type="text" class="form-control" id="titleInput" placeholder="e.g., A Good Day!">
              </div>
              <div class="mb-3">
                  <label for="content" class="form-label">Content</label>
                  <textarea class="form-control" id="contentInput" rows="10" placeholder="Describe your day!"></textarea>
              </div>
                <button type="submit" class="btn btn-custom-purple mt-3">
                    Save Entry
                </button>
            </form>
        </div>
    </div>

    <!-- Sidebar -->
    <div class="d-flex flex-column flex-shrink-0 p-3 bg-white border-end" style="width: 240px; height: 100vh;">
      <a href="#" class="d-flex align-items-center justify-content-center mb-3 text-decoration-none">
        <img src="{{ asset('assets/Logo.png.jpg') }}" style="height: 1.5em; width: 1.5em" alt="">
        <span class="fs-5 fw-semibold ms-2 profile-text">MindWell</span>
      </a>
      <hr>

      <ul class="nav nav-pills flex-column mb-auto sidebar">
        <li><a href="/Dashboard" class="nav-link sidebar-hover"><i class="bi bi-grid me-2"></i>Dashboard</a></li>
        <li><a href="/Journal" class="nav-link active-link"><i class="bi bi-journal-bookmark me-2"></i>Journal</a></li>
        <li><a href="/Community" class="nav-link sidebar-hover"><i class="bi bi-people me-2"></i>Community</a></li>
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
        <h4 class="fw-bold">My Journal</h4>
        <a class="btn btn-custom-purple" type="button" data-bs-toggle="offcanvas" data-bs-target="#journalOffcanvas" aria-controls="journalOffcanvas" id="openJournalButton">
          <i class="bi bi-plus-lg me-1"></i> New Entry
        </a>
      </div>

      <!-- Journal Entries -->
      <div class="row g-3">

        <!-- Entry 1 -->
        <div class="col-md-4">
          <div class="journal-card bg-white shadow-sm">
            <h6 class="fw-semibold">First Day of Classes</h6>
            <p class="text-muted small">
              Felt a mix of excitement and nerves today. The campus is huge...
            </p>
            <div class="d-flex justify-content-between text-muted small">
              <span>2023-05-15</span>
              <span><i class="bi bi-pencil"></i> <i class="bi bi-trash ms-2"></i></span>
            </div>
          </div>
        </div>

        <!-- Entry 2 -->
        <div class="col-md-4">
          <div class="journal-card bg-white shadow-sm">
            <h6 class="fw-semibold">Midterm Stress</h6>
            <p class="text-muted small">
              Feeling overwhelmed with midterms approaching. So much to study...
            </p>
            <div class="d-flex justify-content-between text-muted small">
              <span>2023-05-14</span>
              <span><i class="bi bi-pencil"></i> <i class="bi bi-trash ms-2"></i></span>
            </div>
          </div>
        </div>

        <!-- Entry 3 -->
        <div class="col-md-4">
          <div class="journal-card bg-white shadow-sm">
            <h6 class="fw-semibold">A Quiet Afternoon</h6>
            <p class="text-muted small">
              Spent the afternoon reading by the lake. Peaceful and refreshing...
            </p>
            <div class="d-flex justify-content-between text-muted small">
              <span>2023-05-12</span>
              <span><i class="bi bi-pencil"></i> <i class="bi bi-trash ms-2"></i></span>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
