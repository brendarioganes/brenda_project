<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Sign Up</title>

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
    <h1 class="text-center mb-4 fw-bold text-secondary">Sign up</h1>

    
    <form
      id="signupForm"
      action="<?= site_url('create-user'); ?>"
      method="POST"
      enctype="multipart/form-data"
      class="needs-validation"
      novalidate
    >
         <?php getErrors(); ?>
            <?php getMessage(); ?>
      <div class="mb-3">
        <label for="username" class="form-label fw-medium">Username</label>
        <input
          type="text"
          id="username"
          name="username"
          required
          class="form-control"
          placeholder="Choose a username"
        />
        <div class="invalid-feedback">Please choose a username.</div>
      </div>

      <div class="mb-3">
        <label for="email" class="form-label fw-medium">Email</label>
        <input
          type="email"
          id="email"
          name="email"
          required
          class="form-control"
          placeholder="Enter your email"
        />
        <div class="invalid-feedback">Please enter a valid email.</div>
      </div>

      <div class="mb-3">
        <label for="password" class="form-label fw-medium">Password</label>
        <input
          type="password"
          id="password"
          name="password"
          required
          minlength="6"
          class="form-control"
          placeholder="Create a password"
        />
        <div class="invalid-feedback">Password must be at least 6 characters.</div>
      </div>

      <div class="mb-3">
        <label for="confirmPassword" class="form-label fw-medium">Confirm Password</label>
        <input
          type="password"
          id="confirmPassword"
          name="confirm_password"
          required
          minlength="6"
          class="form-control"
          placeholder="Confirm your password"
        />
        <div class="invalid-feedback">Please confirm your password.</div>
      </div>

      <div class="mb-4">
        <label for="profile" class="form-label fw-medium">Profile Picture</label>
        <input
          type="file"
          id="profile"
          name="profile_picture"
          required
          class="form-control"
        />
        <div class="invalid-feedback">Please upload a profile picture.</div>
      </div>

      <button
        type="submit"
        class="btn btn-primary w-100 fw-semibold py-2 shadow-sm"
      >
        Submit
      </button>
    </form>

    <p class="text-center mt-4 text-secondary">
      Already have an account? <a href="<?= site_url('/');?>" class="text-primary fw-semibold">Login here</a>
    </p>
  </div>

  <!-- Bootstrap JS Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?= BASE_URL; ?>/public/js/alert.js"></script>
</body>
</html>
