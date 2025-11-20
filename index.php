<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - KASKU</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/index.css">
</head>

<body>
    <div class="vh-100 d-flex align-items-center justify-content-center">
        <div class="card login-card shadow-sm border-0">
            <div class="card-body p-4 p-md-5">
                <div class="text-center mb-3">
                    <img src="img/kas.jpg" alt="Logo KASKU" class="rounded mb-2 logo-img">
                    <h4 class="fw-bold mb-0">Selamat Datang di KASKU</h4>
                    <p class="text-muted small mb-3">Silakan masuk untuk melanjutkan</p>
                </div>

                <div id="alert-container"></div>

                <form id="loginForm" onsubmit="login(event)">
                    <div class="mb-3">
                        <label for="username" class="form-label visually-hidden">Username</label>
                        <div class="input-group">
                            <span class="input-group-text bg-white"><i class="bi bi-person"></i></span>
                            <input type="text" id="username" class="form-control" placeholder="Username" required>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label visually-hidden">Password</label>
                        <div class="input-group">
                            <span class="input-group-text bg-white"><i class="bi bi-lock"></i></span>
                            <input type="password" id="password" class="form-control" placeholder="Password" required>
                        </div>
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary btn-login">MASUK</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <script>
        function login(event) {
            event.preventDefault();

            const username = document.getElementById('username').value;
            const password = document.getElementById('password').value;
            const alertContainer = document.getElementById('alert-container');

            if (username === 'ketua' && password === '1234') {
                const successAlert = `
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Berhasil!</strong> Anda berhasil login.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>`;
                alertContainer.innerHTML = successAlert;

                setTimeout(() => {
                    window.location.replace("ketua/dashboard_ketua.php");
                }, 1000);

            } else if (username === 'warga' && password === '12345') {
                const successAlert = `
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Berhasil!</strong> Anda berhasil login sebagai User.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>`;
                alertContainer.innerHTML = successAlert;

                setTimeout(() => {
                    window.location.replace("warga/dashboard_warga.php");
                }, 1000);

            } else if (username === 'bendahara' && password === '123456') {
                const successAlert = `
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Berhasil!</strong> Anda berhasil login sebagai User.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>`;
                alertContainer.innerHTML = successAlert;

                setTimeout(() => {
                    window.location.replace("bendahara/dashboard_bendahara.php");
                }, 1000);

            } else {
                const errorAlert = `
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Gagal!</strong> Username atau password salah.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>`;
                alertContainer.innerHTML = errorAlert;
            }
        }
    </script>
</body>

</html>