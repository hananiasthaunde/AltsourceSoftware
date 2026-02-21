<?php
// ============================================
// AltSource Software — Admin Dashboard
// ============================================

require_once 'config.php';
requireLogin();

// Fetch portfolio items
$stmt = $pdo->query("SELECT * FROM portfolio ORDER BY created_at DESC");
$items = $stmt->fetchAll();

// Count by category
$countSoftware = count(array_filter($items, fn($i) => $i['category'] === 'software'));
$countMaintenance = count(array_filter($items, fn($i) => $i['category'] === 'maintenance'));
$countDesign = count(array_filter($items, fn($i) => $i['category'] === 'design'));

// Flash messages
$flash = $_SESSION['flash'] ?? null;
unset($_SESSION['flash']);

// Edit mode
$editItem = null;
if (isset($_GET['edit'])) {
    $editId = (int)$_GET['edit'];
    $stmt = $pdo->prepare("SELECT * FROM portfolio WHERE id = ?");
    $stmt->execute([$editId]);
    $editItem = $stmt->fetch();
}
?>
<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dashboard — AltSource Software</title>
  <link rel="stylesheet" href="dashboard.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet" />
</head>
<body>

  <!-- ===== SIDEBAR ===== -->
  <aside class="sidebar" id="sidebar">
    <div class="sidebar-header">
      <span class="sidebar-brand-icon">AS</span>
      <span class="sidebar-brand-name">AltSource</span>
      <button class="sidebar-close" id="sidebarClose">
        <i class="fas fa-times"></i>
      </button>
    </div>

    <nav class="sidebar-nav">
      <a href="dashboard.php" class="sidebar-link active">
        <i class="fas fa-th-large"></i>
        <span>Dashboard</span>
      </a>
      <a href="#portfolio-list" class="sidebar-link">
        <i class="fas fa-images"></i>
        <span>Portfólio</span>
      </a>
      <a href="index.php" class="sidebar-link" target="_blank">
        <i class="fas fa-globe"></i>
        <span>Ver Site</span>
      </a>
    </nav>

    <div class="sidebar-footer">
      <a href="logout.php" class="sidebar-link logout-link">
        <i class="fas fa-sign-out-alt"></i>
        <span>Sair</span>
      </a>
    </div>
  </aside>

  <!-- ===== MAIN CONTENT ===== -->
  <main class="main-content">

    <!-- Top Bar -->
    <header class="topbar">
      <button class="topbar-toggle" id="sidebarToggle">
        <i class="fas fa-bars"></i>
      </button>
      <h1 class="topbar-title">Dashboard</h1>
      <div class="topbar-user">
        <div class="topbar-avatar">
          <i class="fas fa-user"></i>
        </div>
        <span><?= htmlspecialchars($_SESSION['username']) ?></span>
      </div>
    </header>

    <div class="dashboard-body">

      <!-- Flash Message -->
      <?php if ($flash): ?>
      <div class="flash flash-<?= $flash['type'] ?>" id="flashMsg">
        <i class="fas fa-<?= $flash['type'] === 'success' ? 'check-circle' : 'exclamation-circle' ?>"></i>
        <?= htmlspecialchars($flash['msg']) ?>
        <button class="flash-close" onclick="this.parentElement.remove()">
          <i class="fas fa-times"></i>
        </button>
      </div>
      <?php endif; ?>

      <!-- Stats -->
      <div class="stats-grid">
        <div class="stat-card">
          <div class="stat-icon bg-blue">
            <i class="fas fa-folder-open"></i>
          </div>
          <div class="stat-info">
            <span class="stat-number"><?= count($items) ?></span>
            <span class="stat-label">Total Publicações</span>
          </div>
        </div>
        <div class="stat-card">
          <div class="stat-icon bg-indigo">
            <i class="fas fa-laptop-code"></i>
          </div>
          <div class="stat-info">
            <span class="stat-number"><?= $countSoftware ?></span>
            <span class="stat-label">Software</span>
          </div>
        </div>
        <div class="stat-card">
          <div class="stat-icon bg-teal">
            <i class="fas fa-screwdriver-wrench"></i>
          </div>
          <div class="stat-info">
            <span class="stat-number"><?= $countMaintenance ?></span>
            <span class="stat-label">Manutenção</span>
          </div>
        </div>
        <div class="stat-card">
          <div class="stat-icon bg-purple">
            <i class="fas fa-palette"></i>
          </div>
          <div class="stat-info">
            <span class="stat-number"><?= $countDesign ?></span>
            <span class="stat-label">Design</span>
          </div>
        </div>
      </div>

      <!-- Create / Edit Form -->
      <div class="card" id="create-form">
        <div class="card-header">
          <h2>
            <i class="fas fa-<?= $editItem ? 'edit' : 'plus-circle' ?>"></i>
            <?= $editItem ? 'Editar Publicação' : 'Nova Publicação' ?>
          </h2>
        </div>
        <form
          action="portfolio_actions.php"
          method="POST"
          enctype="multipart/form-data"
          class="publish-form"
        >
          <input type="hidden" name="action" value="<?= $editItem ? 'edit' : 'create' ?>" />
          <?php if ($editItem): ?>
          <input type="hidden" name="id" value="<?= $editItem['id'] ?>" />
          <?php endif; ?>

          <div class="form-row">
            <div class="form-group">
              <label for="title">Título</label>
              <input
                type="text"
                id="title"
                name="title"
                placeholder="Nome do projeto"
                required
                value="<?= htmlspecialchars($editItem['title'] ?? '') ?>"
              />
            </div>
            <div class="form-group">
              <label for="category">Categoria</label>
              <select id="category" name="category">
                <option value="software" <?= ($editItem['category'] ?? '') === 'software' ? 'selected' : '' ?>>Desenvolvimento de Software</option>
                <option value="maintenance" <?= ($editItem['category'] ?? '') === 'maintenance' ? 'selected' : '' ?>>Manutenção</option>
                <option value="design" <?= ($editItem['category'] ?? '') === 'design' ? 'selected' : '' ?>>Design</option>
              </select>
            </div>
          </div>

          <div class="form-group">
            <label for="description">Descrição</label>
            <textarea
              id="description"
              name="description"
              rows="4"
              placeholder="Descreva o projeto..."
            ><?= htmlspecialchars($editItem['description'] ?? '') ?></textarea>
          </div>

          <div class="form-group">
            <label>Imagem do Projeto</label>
            <div class="upload-area" id="uploadArea">
              <input type="file" name="image" id="imageInput" accept="image/*" />
              <div class="upload-placeholder" id="uploadPlaceholder">
                <i class="fas fa-cloud-arrow-up"></i>
                <p>Arraste uma imagem ou <span>clique para seleccionar</span></p>
                <small>PNG, JPG, WebP — Máx. 5MB</small>
              </div>
              <div class="upload-preview" id="uploadPreview" style="display:none;">
                <img id="previewImg" src="" alt="Preview" />
                <button type="button" class="remove-preview" id="removePreview">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
            <?php if ($editItem && $editItem['image_path']): ?>
            <div class="current-image">
              <small>Imagem actual:</small>
              <img src="<?= htmlspecialchars($editItem['image_path']) ?>" alt="Current" />
            </div>
            <?php endif; ?>
          </div>

          <div class="form-actions">
            <button type="submit" class="btn-submit">
              <i class="fas fa-<?= $editItem ? 'save' : 'paper-plane' ?>"></i>
              <?= $editItem ? 'Guardar Alterações' : 'Publicar' ?>
            </button>
            <?php if ($editItem): ?>
            <a href="dashboard.php" class="btn-cancel">Cancelar</a>
            <?php endif; ?>
          </div>
        </form>
      </div>

      <!-- Portfolio List -->
      <div class="card" id="portfolio-list">
        <div class="card-header">
          <h2><i class="fas fa-images"></i> Publicações</h2>
          <span class="badge"><?= count($items) ?></span>
        </div>

        <?php if (empty($items)): ?>
        <div class="empty-state">
          <i class="fas fa-inbox"></i>
          <p>Nenhuma publicação encontrada</p>
          <small>Crie a sua primeira publicação acima</small>
        </div>
        <?php else: ?>
        <div class="portfolio-grid">
          <?php foreach ($items as $item): ?>
          <div class="portfolio-card">
            <div class="portfolio-img">
              <?php if ($item['image_path']): ?>
              <img src="<?= htmlspecialchars($item['image_path']) ?>" alt="<?= htmlspecialchars($item['title']) ?>" />
              <?php else: ?>
              <div class="no-image">
                <i class="fas fa-image"></i>
              </div>
              <?php endif; ?>
              <span class="portfolio-badge badge-<?= $item['category'] ?>">
                <?php
                  $catLabels = ['software' => 'Software', 'maintenance' => 'Manutenção', 'design' => 'Design'];
                  echo $catLabels[$item['category']] ?? $item['category'];
                ?>
              </span>
            </div>
            <div class="portfolio-body">
              <h3><?= htmlspecialchars($item['title']) ?></h3>
              <p><?= htmlspecialchars(mb_strimwidth($item['description'], 0, 100, '...')) ?></p>
              <div class="portfolio-meta">
                <small><i class="far fa-calendar"></i> <?= date('d/m/Y', strtotime($item['created_at'])) ?></small>
              </div>
            </div>
            <div class="portfolio-actions">
              <a href="dashboard.php?edit=<?= $item['id'] ?>#create-form" class="action-btn action-edit" title="Editar">
                <i class="fas fa-pen"></i>
              </a>
              <form action="portfolio_actions.php" method="POST" class="delete-form" onsubmit="return confirm('Tem certeza que deseja eliminar esta publicação?');">
                <input type="hidden" name="action" value="delete" />
                <input type="hidden" name="id" value="<?= $item['id'] ?>" />
                <button type="submit" class="action-btn action-delete" title="Eliminar">
                  <i class="fas fa-trash"></i>
                </button>
              </form>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
        <?php endif; ?>
      </div>

    </div>
  </main>

  <div class="sidebar-overlay" id="sidebarOverlay"></div>
  <script src="dashboard.js"></script>
</body>
</html>
