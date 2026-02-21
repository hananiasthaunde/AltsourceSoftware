<?php
// ============================================
// AltSource Software — Configuration
// ============================================

session_start();

// Database credentials
define('DB_HOST', 'localhost');
define('DB_NAME', 'altsource_db');
define('DB_USER', 'root');
define('DB_PASS', '');

// Base URL
define('BASE_URL', '/Altsorce/');

// Upload directory
define('UPLOAD_DIR', __DIR__ . '/uploads/');

// Create upload directory if it doesn't exist
if (!is_dir(UPLOAD_DIR)) {
    mkdir(UPLOAD_DIR, 0755, true);
}

// Database connection (PDO)
try {
    $pdo = new PDO(
        "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8mb4",
        DB_USER,
        DB_PASS,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
        ]
    );
} catch (PDOException $e) {
    die("Erro de conexão: " . $e->getMessage());
}

// Auth helper
function isLoggedIn() {
    return isset($_SESSION['user_id']);
}

function requireLogin() {
    if (!isLoggedIn()) {
        header('Location: login.php');
        exit;
    }
}
