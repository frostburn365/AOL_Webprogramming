<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Community - MindWell</title>

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
        .post-card {
            background: #fff;
            border-radius: 10px;
            padding: 20px;
            border: 1px solid #e5e7eb;
        }
    </style>
</head>
<body>

<!-- SIDEBAR -->
<div class="sidebar">
    <h5 class="text-center mb-4"><i class="bi bi-person-circle me-2"></i>MindWell</h5>

    <a href="/Dashboard">Dashboard</a>
    <a href="/Journal">Journal</a>
    <a href="/Community" class="active">Community</a>
    <a href="#">Insights</a>

    <hr>

    <a href="#"><i class="bi bi-gear me-2"></i>Settings</a>
    <a href="#"><i class="bi bi-box-arrow-right me-2"></i>Logout</a>
</div>

<!-- MAIN CONTENT -->
<div class="content-area">

    <div class="d-flex justify-content-between mb-3">
        <h3 class="fw-bold">Community</h3>
        <button class="btn btn-primary"><i class="bi bi-plus-lg me-1"></i> New Post</button>
    </div>

    <!-- TABS -->
    <ul class="nav nav-tabs mb-4">
        <li class="nav-item">
            <a class="nav-link active" href="#">General</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Exam Stress</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Advice</a>
        </li>
    </ul>

    <!-- POST 1 -->
    <div class="post-card mb-3">
        <div class="d-flex align-items-center mb-2">
            <i class="bi bi-person-circle fs-4 me-2"></i>
            <strong>Anonymous Fox</strong>
        </div>
        <p class="text-muted">Anyone else finding it hard to balance social life and studies? Looking for tips!</p>

        <div class="d-flex gap-3 text-secondary">
            <span><i class="bi bi-hand-thumbs-up"></i> 15</span>
            <span><i class="bi bi-chat-left-text"></i> 1 Comments</span>
        </div>
    </div>

    <!-- POST 2 -->
    <div class="post-card mb-3">
        <div class="d-flex align-items-center mb-2">
            <i class="bi bi-person-circle fs-4 me-2"></i>
            <strong>Anonymous Fox</strong>
        </div>
        <p class="text-muted">Anyone else finding it hard to balance social life and studies? Looking for tips!</p>

        <div class="d-flex gap-3 text-secondary">
            <span><i class="bi bi-hand-thumbs-up"></i> 15</span>
            <span><i class="bi bi-chat-left-text"></i> 1 Comments</span>
        </div>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
