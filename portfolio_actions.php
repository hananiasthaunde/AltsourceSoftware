<?php
// ============================================
// AltSource Software — Portfolio CRUD Actions
// ============================================

require_once 'config.php';
requireLogin();

$action = $_POST['action'] ?? '';

switch ($action) {

    // ─── CREATE ───
    case 'create':
        $title = trim($_POST['title'] ?? '');
        $description = trim($_POST['description'] ?? '');
        $category = $_POST['category'] ?? 'software';

        if (empty($title)) {
            $_SESSION['flash'] = ['type' => 'error', 'msg' => 'O título é obrigatório.'];
            header('Location: dashboard.php');
            exit;
        }

        // Handle image upload
        $imagePath = null;
        if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
            $allowed = ['image/jpeg', 'image/png', 'image/webp', 'image/gif'];
            $fileType = mime_content_type($_FILES['image']['tmp_name']);

            if (!in_array($fileType, $allowed)) {
                $_SESSION['flash'] = ['type' => 'error', 'msg' => 'Formato de imagem não suportado.'];
                header('Location: dashboard.php');
                exit;
            }

            $maxSize = 5 * 1024 * 1024; // 5MB
            if ($_FILES['image']['size'] > $maxSize) {
                $_SESSION['flash'] = ['type' => 'error', 'msg' => 'A imagem não pode exceder 5MB.'];
                header('Location: dashboard.php');
                exit;
            }

            $ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
            $filename = uniqid('portfolio_') . '.' . $ext;
            $destination = UPLOAD_DIR . $filename;

            if (move_uploaded_file($_FILES['image']['tmp_name'], $destination)) {
                $imagePath = 'uploads/' . $filename;
            }
        }

        $stmt = $pdo->prepare("INSERT INTO portfolio (title, description, image_path, category) VALUES (?, ?, ?, ?)");
        $stmt->execute([$title, $description, $imagePath, $category]);

        $_SESSION['flash'] = ['type' => 'success', 'msg' => 'Publicação criada com sucesso!'];
        header('Location: dashboard.php');
        exit;

    // ─── DELETE ───
    case 'delete':
        $id = (int)($_POST['id'] ?? 0);

        // Get image path before deleting
        $stmt = $pdo->prepare("SELECT image_path FROM portfolio WHERE id = ?");
        $stmt->execute([$id]);
        $item = $stmt->fetch();

        if ($item) {
            // Delete file
            if ($item['image_path'] && file_exists(__DIR__ . '/' . $item['image_path'])) {
                unlink(__DIR__ . '/' . $item['image_path']);
            }
            // Delete record
            $stmt = $pdo->prepare("DELETE FROM portfolio WHERE id = ?");
            $stmt->execute([$id]);
            $_SESSION['flash'] = ['type' => 'success', 'msg' => 'Publicação eliminada.'];
        }

        header('Location: dashboard.php');
        exit;

    // ─── EDIT ───
    case 'edit':
        $id = (int)($_POST['id'] ?? 0);
        $title = trim($_POST['title'] ?? '');
        $description = trim($_POST['description'] ?? '');
        $category = $_POST['category'] ?? 'software';

        if (empty($title)) {
            $_SESSION['flash'] = ['type' => 'error', 'msg' => 'O título é obrigatório.'];
            header('Location: dashboard.php');
            exit;
        }

        // Check for new image
        $imageUpdate = '';
        $params = [$title, $description, $category, $id];

        if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
            $allowed = ['image/jpeg', 'image/png', 'image/webp', 'image/gif'];
            $fileType = mime_content_type($_FILES['image']['tmp_name']);

            if (in_array($fileType, $allowed) && $_FILES['image']['size'] <= 5 * 1024 * 1024) {
                // Delete old image
                $stmt = $pdo->prepare("SELECT image_path FROM portfolio WHERE id = ?");
                $stmt->execute([$id]);
                $old = $stmt->fetch();
                if ($old && $old['image_path'] && file_exists(__DIR__ . '/' . $old['image_path'])) {
                    unlink(__DIR__ . '/' . $old['image_path']);
                }

                $ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
                $filename = uniqid('portfolio_') . '.' . $ext;
                $destination = UPLOAD_DIR . $filename;

                if (move_uploaded_file($_FILES['image']['tmp_name'], $destination)) {
                    $imageUpdate = ', image_path = ?';
                    $params = [$title, $description, $category, 'uploads/' . $filename, $id];
                }
            }
        }

        $stmt = $pdo->prepare("UPDATE portfolio SET title = ?, description = ?, category = ? $imageUpdate WHERE id = ?");
        $stmt->execute($params);

        $_SESSION['flash'] = ['type' => 'success', 'msg' => 'Publicação actualizada!'];
        header('Location: dashboard.php');
        exit;

    default:
        header('Location: dashboard.php');
        exit;
}
