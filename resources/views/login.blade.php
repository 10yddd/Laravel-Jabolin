<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login - MeysBook</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    .video-bg { position:fixed; top:0; left:0; width:100%; height:100%; object-fit:cover; z-index:-2; }
    .overlay  { position:fixed; top:0; left:0; width:100%; height:100%; background:rgba(0,30,100,0.5); z-index:-1; }
    .glass    { background:rgba(255,255,255,0.15); backdrop-filter:blur(14px); border:1px solid rgba(255,255,255,0.3); }
    .form-control, .input-group-text { background:rgba(255,255,255,0.2); border-color:rgba(255,255,255,0.3); color:white; }
    .form-control::placeholder { color:rgba(255,255,255,0.6); }
    .form-control:focus { background:rgba(255,255,255,0.25); border-color:rgba(255,255,255,0.6); color:white; box-shadow:none; }
  </style>
</head>
<body class="min-vh-100 d-flex align-items-center justify-content-center">

  <video class="video-bg" autoplay muted loop playsinline>
    <source src="/uploads/background.mp4" type="video/mp4">
  </video>
  <div class="overlay"></div>

  @if(session('success'))
  <div class="toast-container position-fixed top-0 end-0 p-3">
    <div class="toast align-items-center text-bg-success border-0" role="alert">
      <div class="d-flex">
        <div class="toast-body fw-semibold"><i class="bi bi-check-circle me-2"></i>{{ session('success') }}</div>
        <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"></button>
      </div>
    </div>
  </div>
  @endif

  @if(session('error'))
  <div class="toast-container position-fixed top-0 end-0 p-3">
    <div class="toast align-items-center text-bg-danger border-0" role="alert">
      <div class="d-flex">
        <div class="toast-body fw-semibold"><i class="bi bi-exclamation-circle me-2"></i>{{ session('error') }}</div>
        <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"></button>
      </div>
    </div>
  </div>
  @endif

  <div class="glass rounded-4 shadow-lg p-5 text-white" style="max-width:420px;width:100%">

    <div class="text-center mb-4">
      <h2 class="fw-bold">📖 MeysBook</h2>
      <p class="text-white-50 mb-0">Welcome back! Please login.</p>
    </div>

    <form action="/login" method="POST">
      @csrf

      <div class="mb-3">
        <label class="form-label fw-semibold">Email</label>
        <div class="input-group">
          <span class="input-group-text text-white"><i class="bi bi-envelope"></i></span>
          <input type="email" name="email" class="form-control" placeholder="Enter your email" required>
        </div>
      </div>

      <div class="mb-4">
        <label class="form-label fw-semibold">Password</label>
        <div class="input-group">
          <span class="input-group-text text-white"><i class="bi bi-lock"></i></span>
          <input type="password" name="password" class="form-control" placeholder="Enter your password" required>
        </div>
      </div>

      <button type="submit" class="btn btn-light w-100 fw-bold">
        <i class="bi bi-box-arrow-in-right me-2"></i>Login
      </button>
    </form>

    <hr class="border-white-50 my-4">

    <p class="text-center text-white-50 mb-0">
      Don't have an account?
      <a href="{{ route('signup') }}" class="text-white fw-semibold text-decoration-none">Sign up here.</a>
    </p>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    document.addEventListener("DOMContentLoaded", function () {
      document.querySelectorAll('.toast').forEach(el => new bootstrap.Toast(el, { delay: 3000 }).show());
    });
  </script>
</body>
</html>