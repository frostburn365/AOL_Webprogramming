<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MindWell Journal</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    .sidebar a, .profile-text { color: var(--bs-body-color); text-decoration: none; }
    .sidebar-hover:hover { background: #eef2ff; color: #4f46e5; }
    [data-bs-theme="dark"] .sidebar-hover:hover { background: #2d2d30; color: #818cf8 !important; }
    .active-link { background: #eef2ff; color: #4f46e5 !important; }
    [data-bs-theme="dark"] .active-link { background: #37373a; color: #818cf8 !important; }
    .profile-text { color: #4f46e5 !important; }
    .journal-card { border: 1px solid #e5e5e5; border-radius: 10px; padding: 15px; }
    .btn-custom-purple { background-color: #4f46e5; border-color: #4f46e5; color: white; transition: background-color 0.3s ease; }
    .btn-custom-purple:hover { background-color: #6a5acd; border-color: #6a5acd; color: white; }
    .edit-entry { border: none !important; }
  </style>
  <script>
      const savedTheme = localStorage.getItem('theme') || 'light';
      document.documentElement.setAttribute('data-bs-theme', savedTheme);
  </script>
</head>
<body class="bg-body-tertiary">

  <div class="d-flex">
    <div class="offcanvas offcanvas-end" tabindex="-1" id="journalOffcanvas">
      <div class="offcanvas-header"><h5 class="offcanvas-title" id="journalOffcanvasLabel">New Journal Entry</h5></div>
      <div class="offcanvas-body">
        <form id="journalForm" method="POST" action="{{ route('Journal.store') }}">
          @csrf
          <input type="hidden" name="_method" value="POST" id="formMethod"> 
          <div class="mb-3">
            <label class="form-label">Title</label>
            <input type="text" class="form-control" id="titleInput" name="title">
          </div>
          <div class="mb-3">
            <label class="form-label">Content</label>
            <textarea class="form-control" id="contentInput" name="content" rows="10"></textarea>
          </div>
          <button type="submit" class="btn btn-custom-purple mt-3" id="saveButton">Save Entry</button>
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
        <li><a href="/Journal" class="nav-link active-link"><i class="bi bi-journal-bookmark me-2"></i>Journal</a></li>
        <li><a href="/Community" class="nav-link sidebar-hover"><i class="bi bi-people me-2"></i>Community</a></li>
        <li><a href="/Insights" class="nav-link sidebar-hover"><i class="bi bi-bar-chart-line me-2"></i>Insights</a></li>
      </ul>
      <hr>
      <ul class="nav nav-pills flex-column sidebar">
        <li><a href="/settings" class="nav-link sidebar-hover"><i class="bi bi-gear me-2"></i>Settings</a></li>
        <li>
          <form method="POST" action="{{ route('Logout') }}">
            @csrf
            <button type="submit" class="nav-link sidebar-hover w-100 text-start border-0 bg-transparent text-danger"><i class="bi bi-box-arrow-right me-2"></i>Logout</button>
          </form>
        </li>
      </ul>
    </div>

    <div class="container-fluid p-4">
      <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 class="fw-bold">My Journal</h4>
        <a class="btn btn-custom-purple" type="button" data-bs-toggle="offcanvas" data-bs-target="#journalOffcanvas" id="openJournalButton"><i class="bi bi-plus-lg me-1"></i> New Entry</a>
      </div>

      <div class="row g-3"> 
        @forelse($entries as $entry)
          <div class="col-12 col-sm-6 col-lg-4 mb-4">
            <div class="journal-card bg-body shadow-sm h-100">
              <div class="card-body pb-2">
                <h6 class="fw-semibold">{{ $entry->title }}</h6> 
                <p class="text-muted small">{{ Str::limit($entry->content, 100) }}</p>
              </div>
              <div class="d-flex justify-content-between text-muted small px-3 pb-3 mt-auto border-top pt-2">
                <span>{{ $entry->created_at->format('Y-m-d') }}</span> 
                <span>
                  <a href="#" class="text-muted edit-entry me-2" data-id="{{ $entry->id }}" data-title="{{ $entry->title }}" data-content="{{ $entry->content }}" data-bs-toggle="offcanvas" data-bs-target="#journalOffcanvas"><i class="bi bi-pencil"></i></a>
                  <form method="POST" action="{{ route('Journal.destroy', $entry) }}" style="display:inline;" onsubmit="return confirm('Delete?');">
                    @csrf @method('DELETE')
                    <button type="submit" class="btn btn-sm text-muted p-0 border-0 bg-transparent"><i class="bi bi-trash"></i></button>
                  </form>
                </span>
              </div>      
            </div>
          </div>
        @empty
          <div class="col-12"><div class="alert alert-info text-center mt-3">No entries yet.</div></div>
        @endforelse
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const form = document.getElementById('journalForm');
      const formMethod = document.getElementById('formMethod');
      const titleInput = document.getElementById('titleInput');
      const contentInput = document.getElementById('contentInput');
      const formTitle = document.getElementById('journalOffcanvasLabel');

      document.getElementById('openJournalButton').addEventListener('click', function() {
        form.action = "{{ route('Journal.store') }}";
        formMethod.value = 'POST';
        formTitle.textContent = 'New Journal Entry';
        titleInput.value = '';
        contentInput.value = '';
      });

      document.querySelectorAll('.edit-entry').forEach(button => {
        button.addEventListener('click', function (e) {
          e.preventDefault();
          const entryId = this.getAttribute('data-id');
          form.action = `/Journal/${entryId}`;
          formMethod.value = 'PUT';
          formTitle.textContent = 'Edit Journal Entry';
          titleInput.value = this.getAttribute('data-title');
          contentInput.value = this.getAttribute('data-content');
        });
      });
    });
  </script>
</body>
</html>