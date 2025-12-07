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

    .edit-entry {
        border: none !important;
        content: none !important; 
    }
    .edit-entry::after, .edit-entry::before {
        content: none !important;
    }
  </style>
</head>

<body class="bg-light">

  <div class="d-flex">

    {{-- Make/Edit Form --}}
    <div class="offcanvas offcanvas-end" tabindex="-1" id="journalOffcanvas" aria-labelledby="journalOffcanvasLabel">
      <div class="offcanvas-header">
        {{-- title as ID --}}
        <h5 class="offcanvas-title" id="journalOffcanvasLabel">New Journal Entry</h5>
      </div>
      <div class="offcanvas-body">
        <p class="text-muted">What's on your mind? Write it down, it's safe here.</p>

        <form id="journalForm" method="POST" action="{{ route('Journal.store') }}">
          @csrf
          {{-- hidden input will hold the PUT method IF we are editing --}}
          <input type="hidden" name="_method" value="POST" id="formMethod"> 

          <div class="mb-3">
            <label for="titleInput" class="form-label">Title</label>
            <input type="text" class="form-control" id="titleInput" name="title" placeholder="e.g., A Good Day!">
          </div>
          <div class="mb-3">
            <label for="contentInput" class="form-label">Content</label>
            <textarea class="form-control" id="contentInput" name="content" rows="10" placeholder="Describe your day!"></textarea>
          </div>
                
          <button type="submit" class="btn btn-custom-purple mt-3" id="saveButton">
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
        <li>
          <a href="#" class="nav-link sidebar-hover">
            <i class="bi bi-gear me-2"></i>
            Settings
          </a>
        </li>
          
        {{-- LOGOUT FORM --}}
        <li>
          <form method="POST" action="{{ route('Logout') }}" class="d-grid">
          @csrf
            <button type="submit" class="nav-link sidebar-hover text-start" style="width: 100%;">
              <i class="bi bi-box-arrow-right me-2"></i>Logout
            </button>
          </form>
        </li>
      </ul>
    </div>

    <!-- Main Content -->
    <div class="container-fluid p-4">

      <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 class="fw-bold">My Journal</h4>
        <a class="btn btn-custom-purple" 
          type="button" 
          data-bs-toggle="offcanvas" 
          data-bs-target="#journalOffcanvas" 
          aria-controls="journalOffcanvas" 
          id="openJournalButton">
          <i class="bi bi-plus-lg me-1"></i> New Entry
        </a>
      </div>

      <!-- Journal Entries -->
      <div class="row g-3"> 

        {{-- Dynamic Entries Based on Date: Loop through the entries passed from the Controller --}}
        @forelse($entries as $entry)
            
          {{-- This card will repeat for every entry in the database --}}
          <div class="col-12 col-sm-6 col-lg-4 mb-4">
            <div class="journal-card bg-white shadow-sm h-100">
              <div class="d-flex flex-column h-100">
                
                {{-- CARD BODY --}}
                <div class="card-body pb-2">
                  <div class="d-flex justify-content-between align-items-start mb-2">
                    {{-- title from database --}}
                    <h6 class="fw-semibold">{{ $entry->title }}</h6> 
                    <span class="emoji" style="font-size: 1.25rem;">🙂</span>
                  </div>
                  <p class="text-muted small">
                      {{-- content from database --}}
                      {{ Str::limit($entry->content, 100) }} 
                  </p>
                </div>
                        
                {{-- CARD FOOTER --}}
                <div class="d-flex justify-content-between text-muted small px-3 pb-3 mt-auto border-top pt-2">

                  {{-- date --}}
                  <span>{{ $entry->created_at->format('Y-m-d') }}</span> 
                  <span style="display: inline-flex; align-items: center;">

                    {{-- Edit Button --}}
                    <a href="#" 
                      class="text-muted edit-entry me-2"
                      data-id="{{ $entry->id }}"
                      data-title="{{ $entry->title }}"
                      data-content="{{ $entry->content }}"
                      data-bs-toggle="offcanvas" 
                      data-bs-target="#journalOffcanvas"
                      aria-controls="journalOffcanvas"
                      >
                        <i class="bi bi-pencil"></i>
                    </a>
                                
                    {{-- Delete Button/Form --}}
                    <form method="POST" action="{{ route('Journal.destroy', $entry) }}" style="display:inline;" onsubmit="return confirm('Are you sure you want to delete this journal entry?');">
                      @csrf
                      @method('DELETE')
                      {{-- Ensure the button has NO margin/padding on the left (p-0 handles padding) --}}
                      <button type="submit" class="btn btn-sm text-muted p-0 border-0 bg-transparent"> 
                        <i class="bi bi-trash"></i>
                      </button>
                    </form>

                  </span>
                </div>      
              </div>
            </div>
          </div>

        @empty
          {{-- if $entries is empty --}}
          <div class="col-12">
            <div class="alert alert-info text-center mt-3" role="alert">
              You have no journal entries yet. Click "+ New Entry" to create your first one!
            </div>
          </div>

        @endforelse
        
      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const form = document.getElementById('journalForm');
      const formMethod = document.getElementById('formMethod');
      const titleInput = document.getElementById('titleInput');
      const contentInput = document.getElementById('contentInput');
      const formTitle = document.getElementById('journalOffcanvasLabel');
      const saveButton = document.getElementById('saveButton');
    
      // Function to reset the form for a NEW entry
      function resetForm() {
        form.action = "{{ route('Journal.store') }}";
        formMethod.value = 'POST';
        formTitle.textContent = 'New Journal Entry';
        titleInput.value = '';
        contentInput.value = '';
      }
    
      // Attach the reset function to the New Entry button click and offcanvas close
      document.getElementById('openJournalButton').addEventListener('click', resetForm);
            
      // This makes the edit icon work
      document.querySelectorAll('.edit-entry').forEach(button => {
        button.addEventListener('click', function (e) {
          e.preventDefault();
                    
          const entryId = this.getAttribute('data-id');
          const entryTitle = this.getAttribute('data-title');
          const entryContent = this.getAttribute('data-content');
                    
          // 1. Set form to UPDATE mode
          form.action = `/Journal/${entryId}`; // Laravel will route this to JournalEntryController@update
          formMethod.value = 'PUT';
          formTitle.textContent = 'Edit Journal Entry';
    
          // 2. Pre-fill the inputs
          titleInput.value = entryTitle;
          contentInput.value = entryContent;
        });
      });
            
    });
  </script>
</body>
</html>
