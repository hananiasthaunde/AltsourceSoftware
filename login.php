<?php
// ============================================
// AltSource Software — Login Page
// ============================================

session_start();

// Redirect if already logged in
if (isset($_SESSION['user_id'])) {
    header('Location: dashboard.php');
    exit;
}

$error = $_SESSION['login_error'] ?? '';
unset($_SESSION['login_error']);
?>
<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login — AltSource Software</title>
  <link rel="stylesheet" href="login.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet" />
</head>
<body>
  <div class="login-wrapper">
    <!-- Left Side — Branding -->
    <div class="login-brand">
      <div class="brand-content">
        <div class="brand-logo">
          <span class="brand-icon">AS</span>
          <span class="brand-name">AltSource Software</span>
        </div>
        <h1>Bem-vindo de volta</h1>
        <p>Aceda ao painel de gestão para gerir o seu portfólio e publicações.</p>
        <div class="brand-features">
          <div class="brand-feature">
            <i class="fas fa-shield-halved"></i>
            <span>Acesso Seguro</span>
          </div>
          <div class="brand-feature">
            <i class="fas fa-gauge-high"></i>
            <span>Dashboard Intuitivo</span>
          </div>
          <div class="brand-feature">
            <i class="fas fa-images"></i>
            <span>Gestão de Portfólio</span>
          </div>
        </div>
      </div>
      <div class="brand-bg-shapes">
        <div class="shape shape-1"></div>
        <div class="shape shape-2"></div>
        <div class="shape shape-3"></div>
      </div>
    </div>

    <!-- Right Side — Login Form -->
    <div class="login-form-side">
      <div class="login-card">
        <div class="login-header">
          <div class="login-icon">
            <i class="fas fa-lock"></i>
          </div>
          <h2>Iniciar Sessão</h2>
          <p>Insira as suas credenciais para continuar</p>
        </div>

        <?php if ($error): ?>
        <div class="login-alert">
          <i class="fas fa-exclamation-circle"></i>
          <?= htmlspecialchars($error) ?>
        </div>
        <?php endif; ?>

        <form action="auth.php" method="POST" class="login-form" autocomplete="off">
          <div class="form-group">
            <label for="username">
              <i class="fas fa-user"></i>
              Utilizador ou Email
            </label>
            <input
              type="text"
              id="username"
              name="username"
              placeholder="admin"
              required
              autofocus
            />
          </div>

          <div class="form-group">
            <label for="password">
              <i class="fas fa-key"></i>
              Palavra-passe
            </label>
            <div class="password-wrapper">
              <input
                type="password"
                id="password"
                name="password"
                placeholder="••••••••"
                required
              />
              <button type="button" class="toggle-password" id="togglePassword">
                <i class="fas fa-eye"></i>
              </button>
            </div>
          </div>

          <button type="submit" class="btn-login">
            <i class="fas fa-sign-in-alt"></i>
            Entrar
          </button>
        </form>

        <div class="login-footer">
          <a href="index.php"><i class="fas fa-arrow-left"></i> Voltar ao site</a>
        </div>
      </div>
    </div>
  </div>

  <script>
    // Toggle password visibility
    const toggleBtn = document.getElementById('togglePassword');
    const passwordInput = document.getElementById('password');
    toggleBtn.addEventListener('click', () => {
      const type = passwordInput.type === 'password' ? 'text' : 'password';
      passwordInput.type = type;
      toggleBtn.querySelector('i').classList.toggle('fa-eye');
      toggleBtn.querySelector('i').classList.toggle('fa-eye-slash');
    });
  </script>
</body>
</html>
