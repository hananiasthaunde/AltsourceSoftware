<?php
// ============================================
// AltSource Software — Page: Portfólio (Vibrant)
// ============================================
require_once 'header.php';

// Fetch Portfolio Items
$portfolioItems = [];
try {
    require_once 'config.php';
    $stmt = $pdo->query("SELECT * FROM portfolio ORDER BY created_at DESC");
    $portfolioItems = $stmt->fetchAll();
} catch (Exception $e) {}
$catLabels = ['software' => 'Software', 'maintenance' => 'Manutenção', 'design' => 'Design'];
?>

<main class="page-content bg-main" style="padding-top: 10rem; min-height: 80vh;">
    <div class="container">
        <div class="section-header text-center reveal-bottom">
            <h1 class="section-title">Engenharia em <span class="text-glow">Ação</span></h1>
            <p class="section-desc mx-auto" style="margin: 0 auto; max-width: 600px;">
                Explore as plataformas de software de alto desempenho que transformam o dia a dia das operações dos nossos clientes.
            </p>
        </div>
        
        <div class="portfolio-grid mt-4">
            <?php if (!empty($portfolioItems)): ?>
                <?php foreach ($portfolioItems as $item): ?>
                <div class="portfolio-item card-3d reveal-bottom">
                    <div class="portfolio-img">
                        <?php if ($item['image_path']): ?>
                        <img src="<?= htmlspecialchars($item['image_path']) ?>" alt="<?= htmlspecialchars($item['title']) ?>" loading="lazy" />
                        <?php else: ?>
                        <div class="placeholder-img" style="background:#0A0F1A; width:100%; height:100%; display:flex; align-items:center; justify-content:center;"><i class="fas fa-code text-glow" style="font-size:3rem;"></i></div>
                        <?php endif; ?>
                        
                        <div class="overlay-glass">
                            <span class="badge"><?= $catLabels[$item['category']] ?? $item['category'] ?></span>
                            <h3><?= htmlspecialchars($item['title']) ?></h3>
                            <p style="font-size: 0.9rem; margin-top: 0.5rem; color: #475569;"><?= htmlspecialchars($item['description']) ?></p>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            <?php else: ?>
                <!-- Hardcoded defaults when DB is empty to showcase the layout -->
                <div class="portfolio-item card-3d reveal-bottom delay-1">
                    <div class="portfolio-img">
                        <img src="https://images.unsplash.com/photo-1600607686527-6fb886090705?q=80&w=600&auto=format&fit=crop" alt="Dashboard" />
                        <div class="overlay-glass"><span class="badge">SaaS</span><h3>Sistema de Gestão SGE</h3></div>
                    </div>
                </div>
                <div class="portfolio-item card-3d reveal-bottom delay-2">
                    <div class="portfolio-img">
                        <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?q=80&w=600&auto=format&fit=crop" alt="App" />
                        <div class="overlay-glass"><span class="badge">Mobile App</span><h3>Life Church Connect</h3></div>
                    </div>
                </div>
                <div class="portfolio-item card-3d reveal-bottom delay-3">
                    <div class="portfolio-img">
                        <img src="https://images.unsplash.com/photo-1542744094-24638ea0b3b5?q=80&w=600&auto=format&fit=crop" alt="Design" />
                        <div class="overlay-glass"><span class="badge">E-Commerce</span><h3>NextGen Retail Platform</h3></div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</main>

<?php require_once 'footer.php'; ?>
