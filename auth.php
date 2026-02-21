<?php
// ============================================
// AltSource Software — Authentication Handler
// ============================================

require_once 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');
    $password = $_POST['password'] ?? '';

    if (empty($username) || empty($password)) {
        $_SESSION['login_error'] = 'Preencha todos os campos.';
        header('Location: login.php');
        exit;
    }

    $stmt = $pdo->prepare("SELECT id, username, password FROM users WHERE username = ? OR email = ?");
    $stmt->execute([$username, $username]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        header('Location: dashboard.php');
        exit;
    } else {
        $_SESSION['login_error'] = 'Credenciais inválidas.';
        header('Location: login.php');
        exit;
    }
} else {
    header('Location: login.php');
    exit;
}
