<?php
// ============================================
// AltSource Software — Home (Vibrant Tech)
// ============================================
require_once 'header.php';
?>

<main>
    <!-- =============== HERO =============== -->
    <section class="hero hero-vibrant" id="hero">
        <div class="glow-orb orb-1"></div>
        <div class="glow-orb orb-2"></div>
        
        <div class="container hero-grid">
            <div class="hero-content">
                <span class="hero-badge reveal-left">
                    <span class="live-dot"></span> Bem Vindo a AltSource
                </span>
                <span style="display:block; font-weight:700; color:var(--text-main); margin-bottom:1rem;" class="reveal-bottom">
                    Onde as suas ideias ganham vida
                </span>
                
                <h1 class="hero-title reveal-bottom">
                    Nossas Soluções<br><span class="text-glow">Tecnológicas</span>
                </h1>
                <h2 style="font-size: 1.8rem; font-weight:800; color:var(--text-heading); margin-bottom: 2rem;" class="reveal-bottom delay-1">
                    Para o seu Negócios
                </h2>
                
                <p class="hero-desc reveal-bottom delay-1">
                    Automatize processos, modernize sua empresa e aumente a produtividade com soluções tecnológicas seguras e eficientes.
                </p>
                
                <div class="hero-actions reveal-bottom delay-2">
                    <a href="#contact" class="btn btn-vibrant magnetic-btn">Solicite o seu Orçamento <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            
            <div class="hero-visual reveal-right">
                <div class="tilt-card" id="heroTilt">
                    <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?q=80&w=800&auto=format&fit=crop" alt="AltSource" class="hero-img-main" />
                    <!-- Floating abstract UI elements with flyer text -->
                    <div class="float-ui ui-top"><i class="fas fa-check-circle"></i> Seguros e eficientes</div>
                    <div class="float-ui ui-bottom"><i class="fas fa-bolt"></i> Produtividade</div>
                </div>
            </div>
        </div>
    </section>

    <!-- =============== MARQUEE STACK (Using flyer points) =============== -->
    <section class="tech-marquee overflow-hidden">
        <div class="marquee-track">
            <!-- Duplicated for infinite loop -->
            <div class="marquee-content">
                <span>Soluções tecnológicas modernas</span> <span class="star">✧</span>
                <span>Sistemas seguros e eficientes</span> <span class="star">✧</span>
                <span>Atendimento rápido e profissional</span> <span class="star">✧</span>
                <span>Suporte técnico especializado</span> <span class="star">✧</span>
            </div>
            <div class="marquee-content">
                <span>Soluções tecnológicas modernas</span> <span class="star">✧</span>
                <span>Sistemas seguros e eficientes</span> <span class="star">✧</span>
                <span>Atendimento rápido e profissional</span> <span class="star">✧</span>
                <span>Suporte técnico especializado</span> <span class="star">✧</span>
            </div>
        </div>
    </section>

    <!-- =============== SERVICES =============== -->
    <section class="services section-padding relative overflow-hidden">
        <div class="bg-mesh"></div>
        <div class="container relative z-10">
            <div class="section-header text-center reveal-bottom">
                <h2 class="section-title"><span class="text-glow">Serviços</span></h2>
            </div>
            
            <div class="services-grid">
                <div class="service-vibrant-card reveal-bottom delay-1">
                    <div class="card-glow"></div>
                    <div class="card-icon"><i class="fas fa-code"></i></div>
                    <h3>Desenvolvimento de Software</h3>
                    <p>Equipa especializada na criação de sistemas web e mobile modernos, seguros e personalizados para empresas, escolas, clínicas e negócios, desenvolvendo plataformas que automatizam processos e aumentam a produtividade.</p>
                </div>
                
                <div class="service-vibrant-card reveal-bottom delay-2">
                    <div class="card-glow"></div>
                    <div class="card-icon"><i class="fas fa-tools"></i></div>
                    <h3>Manutenção de Software & Hardware</h3>
                    <p>Instalação, configuração e manutenção de computadores e sistemas, eliminando falhas, otimizando o desempenho e implementando redes locais seguras para garantir estabilidade operacional.</p>
                </div>

                <div class="service-vibrant-card reveal-bottom delay-3">
                    <div class="card-glow"></div>
                    <div class="card-icon"><i class="fas fa-pencil-ruler"></i></div>
                    <h3>Design</h3>
                    <p>Criação de logotipos, identidades visuais e materiais publicitários profissionais que valorizam a sua marca, aumentam a credibilidade e destacam o seu negócio no mercado.</p>
                </div>
            </div>
        </div>
    </section>

</main>

<?php require_once 'footer.php'; ?>
