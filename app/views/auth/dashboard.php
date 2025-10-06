<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Dashboard</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />

    <style>
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
        }
    .user-avatar {
    width: 96px;
    height: 96px;
    background: linear-gradient(135deg, #3b82f6, #9333ea);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 2rem;
    font-weight: 700;
    box-shadow: 0 4px 6px rgba(0,0,0,0.1);
    overflow: hidden; /* important for round image clipping */
}

.user-avatar .profile-img {
    width: 100%;
    height: 100%;
    object-fit: cover; /* ensures image fills the circle */
    border-radius: 50%;
}

        .status-badge {
            display: inline-flex;
            align-items: center;
            padding: 0.25rem 0.75rem;
            border-radius: 9999px;
            font-weight: 600;
            font-size: 0.875rem;
            background-color: #d1fae5;
            color: #065f46;
        }
        .status-badge > .dot {
            width: 0.5rem;
            height: 0.5rem;
            background-color: #10b981;
            border-radius: 50%;
            margin-right: 0.5rem;
        }
    </style>
</head>
<body class="p-4">
    <div class="container-lg">

        <!-- Header -->
        <header class="bg-light rounded shadow p-3 mb-4 d-flex justify-content-between align-items-center">
            <div>
                <h1 class="h3 mb-1">Dashboard</h1>
                <p class="text-muted mb-0">Welcome back, <span id="userName" class="fw-semibold text-primary"><?= htmlspecialchars($user['username']); ?></span>!</p>
            </div>
            <button
                type="button"
                class="btn btn-danger"
                data-bs-toggle="modal"
                data-bs-target="#logoutModal"
            >
                Logout
            </button>
        </header>

        <!-- User Information Card Section -->
        <div class="bg-light rounded shadow p-4 mb-4">
            <h2 class="h5 fw-bold mb-4">User Information</h2>
            <div class="d-flex align-items-start gap-4">
                <!-- User Avatar -->
               <div class="user-avatar flex-shrink-0">
    <?php if (!empty($user['profile_image'])): ?>
        <img src="<?= base_url() . ($user['profile_picture']) ?>" alt="Profile Image" class="profile-img">
    <?php else: ?>
        <span id="userInitials"><?= strtoupper(substr($user['username'], 0, 2)); ?></span>
    <?php endif; ?>
</div>


                <!-- User Details -->
                <div class="row flex-grow-1 g-3">
                    <div class="col-12 col-md-6 bg-white rounded p-3 shadow-sm">
                        <p class="mb-1 text-muted fw-medium small">Username</p>
                        <p class="mb-0 fw-semibold"><?= htmlspecialchars($user['username']); ?></p>
                    </div>
                    <div class="col-12 col-md-6 bg-white rounded p-3 shadow-sm">
                        <p class="mb-1 text-muted fw-medium small">Email</p>
                        <p class="mb-0 fw-semibold"><?= htmlspecialchars($user['email']); ?></p>
                    </div>
                    <div class="col-12 col-md-6 bg-white rounded p-3 shadow-sm d-flex align-items-center">
                        <p class="mb-0 me-3 text-muted fw-medium small">Account Status</p>
                        <span class="status-badge">
                            <span class="dot"></span>
                            Active
                        </span>
                    </div>
                    <div class="col-12 col-md-6 bg-white rounded p-3 shadow-sm">
                        <p class="mb-1 text-muted fw-medium small">Member Since</p>
                        <p class="mb-0 fw-semibold"><?= date('F j, Y', strtotime($user['created_at'])); ?></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Stats Cards -->
        <div class="row g-4 mb-4">
            <div class="col-12 col-md-4">
                <div class="bg-light rounded shadow p-4 d-flex justify-content-between align-items-center">
                    <div>
                        <p class="text-muted small mb-1">Total Projects</p>
                        <p class="fs-2 fw-bold mb-0">12</p>
                    </div>
                    <div class="bg-primary bg-opacity-10 rounded-circle p-3">
                        <svg class="bi" width="32" height="32" fill="#0d6efd" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                        </svg>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-4">
                <div class="bg-light rounded shadow p-4 d-flex justify-content-between align-items-center">
                    <div>
                        <p class="text-muted small mb-1">Active Tasks</p>
                        <p class="fs-2 fw-bold mb-0">28</p>
                    </div>
                    <div class="bg-success bg-opacity-10 rounded-circle p-3">
                        <svg class="bi" width="32" height="32" fill="#198754" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/>
                        </svg>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-4">
                <div class="bg-light rounded shadow p-4 d-flex justify-content-between align-items-center">
                    <div>
                        <p class="text-muted small mb-1">Completed</p>
                        <p class="fs-2 fw-bold mb-0">45</p>
                    </div>
                    <div class="bg-purple bg-opacity-10 rounded-circle p-3" style="background-color:#ede9fe !important;">
                        <svg class="bi" width="32" height="32" fill="#7c3aed" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 13l4 4L19 7"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Activity -->
        <div class="bg-light rounded shadow p-4">
            <h2 class="h5 fw-bold mb-4">Recent Activity</h2>
            <div class="list-group list-group-flush">
                <div class="list-group-item d-flex align-items-center bg-white rounded mb-3 shadow-sm">
                    <div class="bg-primary rounded-circle p-2 me-3 d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;">
                        <svg width="16" height="16" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                            <path d="M12 4v16m8-8H4"/>
                        </svg>
                    </div>
                    <div class="flex-grow-1">
                        <p class="mb-0 fw-semibold">New project created</p>
                        <small class="text-muted">Website redesign project</small>
                    </div>
                    <small class="text-muted ms-3">2 hours ago</small>
                </div>

                <div class="list-group-item d-flex align-items-center bg-white rounded mb-3 shadow-sm">
                    <div class="bg-success rounded-circle p-2 me-3 d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;">
                        <svg width="16" height="16" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                            <path d="M5 13l4 4L19 7"/>
                        </svg>
                    </div>
                    <div class="flex-grow-1">
                        <p class="mb-0 fw-semibold">Task completed</p>
                        <small class="text-muted">Homepage mockup approved</small>
                    </div>
                    <small class="text-muted ms-3">5 hours ago</small>
                </div>

                <div class="list-group-item d-flex align-items-center bg-white rounded shadow-sm">
                    <div class="bg-purple rounded-circle p-2 me-3 d-flex align-items-center justify-content-center" style="width: 32px; height: 32px; background-color:#7c3aed;">
                        <svg width="16" height="16" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                            <path d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"/>
                        </svg>
                    </div>
                    <div class="flex-grow-1">
                        <p class="mb-0 fw-semibold">New comment</p>
                        <small class="text-muted">Team member left feedback</small>
                    </div>
                    <small class="text-muted ms-3">1 day ago</small>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap Logout Confirmation Modal -->
    <div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content rounded shadow">
          <div class="modal-header">
            <h5 class="modal-title" id="logoutModalLabel">Confirm Logout</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body text-muted">
            Are you sure you want to log out?
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
            <!-- Change to form POST if your backend requires POST logout -->
            <a href="<?= site_url('/logout'); ?>" class="btn btn-danger">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap JS Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
