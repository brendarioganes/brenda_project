<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Login</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />

  <style>
    body {
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      min-height: 100vh;
    }
  </style>
</head>
<body class="d-flex align-items-center justify-content-center p-4">
  <div class="bg-white rounded-3 shadow-lg p-5 w-100" style="max-width: 400px;">
    <h1 class="text-center mb-4 fw-bold text-secondary">Login</h1>
    <form id="loginForm" action="<?= site_url('login'); ?>" method="POST" class="needs-validation" novalidate>
      <div class="mb-3">
        <label for="username" class="form-label fw-medium">Username</label>
        <input
          type="text"
          id="username"
          name="username"
          required
          class="form-control"
          placeholder="Enter your username"
        />
        <div class="invalid-feedback">Please enter your username.</div>
      </div>

      <div class="mb-4">
        <label for="email" class="form-label fw-medium">Password</label>
        <input
          type="password"
          id="email"
          name="password"
          required
          class="form-control"
          placeholder="Enter your password"
        />
        <div class="invalid-feedback">Please enter your password.</div>
      </div>

      <button
        type="submit"
        class="btn btn-primary w-100 fw-semibold py-2 shadow-sm"
      >
        Login
      </button>
    </form>

    <p class="text-center mt-4 text-secondary">
      New User? <a href="<?= site_url('/signup');?>" class="text-primary fw-semibold">Signup here</a>
    </p>
  </div>

  <!-- Bootstrap JS Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
