<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Journal - MindWell</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            background-color: #f4f6fa;
        }
        .sidebar {
            width: 240px;
            height: 100vh;
            position: fixed;
            background: #fff;
            border-right: 1px solid #e5e7eb;
            padding-top: 20px;
        }
        .sidebar a {
            text-decoration: none;
            color: #555;
            padding: 10px 20px;
            display: block;
            border-radius: 8px;
            margin: 5px 0;
        }
        .sidebar a.active {
            background: #eef2ff;
            color: #4f46e5;
            font-weight: 600;
        }
        .content-area {
            margin-left: 260px;
            padding: 30px;
        }
        .journal-card {
            border-radius: 10px;
            border: 1px solid #e5e7eb;
            background: #fff;
            padding: 20px;
        }
    </style>
</head>
<body>

<!-- SIDEBAR -->
<div class="sidebar">
    <h5 class="text-center mb-4"><i class="bi bi-person-circle me-2"></i>MindWell</h5>

    <a href="/Dashboard" class="">Dashboard</a>
    <a href="/Journal" class="active">Journal</a>
    <a href="/Community">Community</a>
    <a href="#">Insights</a>

    <hr>

    <a href="#"><i class="bi bi-gear me-2"></i>Settings</a>
    <a href="#"><i class="bi bi-box-arrow-right me-2"></i>Logout</a>
</div>

<!-- MAIN CONTENT -->
<div class="content-area">
    <div class="d-flex justify-content-between mb-4">
        <h3 class="fw-bold">My Journal</h3>
        <button class="btn btn-primary"><i class="bi bi-plus-lg me-1"></i> New Entry</button>
    </div>

    <div class="row g-4">

        <!-- CARD 1 -->
        <div class="col-md-4">
            <div class="journal-card">
                <h5 class="fw-bold">First Day of Classes</h5>
                <p class="text-muted">
                    Felt a mix of excitement and nerves today. The campus is huge, but I managed to find my classes...
                </p>
                <small class="text-secondary">2023-08-15</small>

                <div class="d-flex justify-content-between mt-3">
                    <div>
                        <i class="bi bi-pencil-square me-3"></i>
                        <i class="bi bi-trash"></i>
                    </div>
                    <span>😊</span>
                </div>
            </div>
        </div>

        <!-- CARD 2 -->
        <div class="col-md-4">
            <div class="journal-card">
                <h5 class="fw-bold">Midterm Stress</h5>
                <p class="text-muted">
                    Feeling overwhelmed with midterms approaching. So much to study, so little time...
                </p>
                <small class="text-secondary">2023-10-14</small>

                <div class="d-flex justify-content-between mt-3">
                    <div>
                        <i class="bi bi-pencil-square me-3"></i>
                        <i class="bi bi-trash"></i>
                    </div>
                    <span>😟</span>
                </div>
            </div>
        </div>

        <!-- CARD 3 -->
        <div class="col-md-4">
            <div class="journal-card">
                <h5 class="fw-bold">A quiet afternoon</h5>
                <p class="text-muted">
                    Spent the afternoon reading by the lake. It was peaceful and helped clear my head...
                </p>
                <small class="text-secondary">2023-10-22</small>

                <div class="d-flex justify-content-between mt-3">
                    <div>
                        <i class="bi bi-pencil-square me-3"></i>
                        <i class="bi bi-trash"></i>
                    </div>
                    <span>🙂</span>
                </div>
            </div>
        </div>

    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
