<?php
// ============================================
// AltSource Software — Home (Vibrant Tech)
// ============================================
require_once 'header.php';
?>

<main>
    <!-- =============== HERO =============== -->
    <section class="hero hero-vibrant" id="hero">
        <!-- Floating animated elements inside CSS -->
        <div class="glow-orb orb-1"></div>
        <div class="glow-orb orb-2"></div>
        
        <div class="container hero-grid">
            <div class="hero-content">
                <span class="hero-badge reveal-left">
                    <span class="live-dot"></span> AltSource v2.0 Live
                </span>
                <!-- Typewriter / Highlight effect -->
                <h1 class="hero-title reveal-bottom">
                    Acelere a <span class="text-glow">Inovação</span><br> do seu Negócio
                </h1>
                <p class="hero-desc reveal-bottom delay-1">
                    Não construímos apenas software. Desenvolvemos ecossistemas digitais de alta performance desenhados para escalar, automatizar e dominar o seu mercado.
                </p>
                <div class="hero-actions reveal-bottom delay-2">
                    <a href="contactos.php" class="btn btn-vibrant magnetic-btn">Começar Agora <i class="fas fa-arrow-right"></i></a>
                    <a href="portfolio.php" class="btn btn-glass magnetic-btn">Ver Projetos</a>
                </div>
            </div>
            
            <div class="hero-visual reveal-right">
                <div class="tilt-card" id="heroTilt">
                    <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?q=80&w=800&auto=format&fit=crop" alt="Code & Innovation" class="hero-img-main" />
                    <!-- Floating abstract UI elements -->
                    <div class="float-ui ui-top"><i class="fas fa-check-circle"></i> Sistema Operacional</div>
                    <div class="float-ui ui-bottom"><i class="fas fa-shield-alt"></i> Segurança SSL</div>
                </div>
            </div>
        </div>
    </section>

    <!-- =============== MARQUEE STACK =============== -->
    <section class="tech-marquee overflow-hidden">
        <div class="marquee-track">
            <!-- Duplicated for infinite loop -->
            <div class="marquee-content">
                <span>React Native</span> <span class="star">✧</span>
                <span>PHP 8.x</span> <span class="star">✧</span>
                <span>NestJS</span> <span class="star">✧</span>
                <span>AWS Cloud</span> <span class="star">✧</span>
                <span>PostgreSQL</span> <span class="star">✧</span>
                <span>UI/UX Design</span> <span class="star">✧</span>
                <span>Docker</span> <span class="star">✧</span>
            </div>
            <div class="marquee-content">
                <span>React Native</span> <span class="star">✧</span>
                <span>PHP 8.x</span> <span class="star">✧</span>
                <span>NestJS</span> <span class="star">✧</span>
                <span>AWS Cloud</span> <span class="star">✧</span>
                <span>PostgreSQL</span> <span class="star">✧</span>
                <span>UI/UX Design</span> <span class="star">✧</span>
                <span>Docker</span> <span class="star">✧</span>
            </div>
        </div>
    </section>

    <!-- =============== ABOUT (TEASER) =============== -->
    <section class="about section-padding parallax-section">
        <div class="container about-container">
            <div class="about-text reveal-left">
                <h2 class="section-title">O DNA da <span class="text-glow">AltSource</span></h2>
                <p class="section-desc">
                    Nascemos da necessidade de transformar ideias complexas em plataformas intuitivas. Cada linha de código que a nossa equipa escreve é pensada para durar, escalar e gerar retorno sobre o investimento.
                </p>
                
                <div class="feature-pills">
                    <div class="pill"><i class="fas fa-rocket"></i> Alta Velocidade</div>
                    <div class="pill"><i class="fas fa-lock"></i> Segurança nível Bancário</div>
                    <div class="pill"><i class="fas fa-mobile-alt"></i> Mobile First Native</div>
                </div>
                
                <div class="margin-top-2">
                    <a href="sobre.php" class="link-arrow">Conheça a nossa História <i class="fas fa-long-arrow-alt-right"></i></a>
                </div>
            </div>
            <div class="about-stats reveal-right">
                <div class="glass-stat-card">
                    <div class="stat-icon"><i class="fas fa-code-branch"></i></div>
                    <h3>+1M</h3>
                    <span>Linhas de Código Escritas</span>
                </div>
                <div class="glass-stat-card">
                    <div class="stat-icon"><i class="fas fa-users"></i></div>
                    <h3>100%</h3>
                    <span>Clientes Satisfeitos</span>
                </div>
            </div>
        </div>
    </section>

    <!-- =============== WORK PROCESS (NEW SECTION) =============== -->
    <section class="process section-padding bg-dark text-white relative">
        <div class="container">
            <div class="section-header text-center reveal-bottom">
                <h2 class="section-title text-white">Como <span class="text-glow">operamos</span></h2>
                <p class="section-desc text-gray">Do primeiro contacto até ao "Go-Live", o nosso processo é transparente e ágil.</p>
            </div>
            
            <div class="process-steps">
                <!-- Step 1 -->
                <div class="step-card reveal-bottom delay-1">
                    <div class="step-number">01</div>
                    <h3>Arquitetura & Design</h3>
                    <p>Mapeamos todas as regras de negócio e criamos interfaces (UI/UX) impressionantes antes de escrever qualquer código.</p>
                </div>
                <!-- Step 2 -->
                <div class="step-card reveal-bottom delay-2">
                    <div class="step-number">02</div>
                    <h3>Engenharia (Sprint)</h3>
                    <p>Desenvolvimento focado utilizando tecnologias de ponta, com entregas frequentes para garantir o alinhamento total.</p>
                </div>
                <!-- Step 3 -->
                <div class="step-card reveal-bottom delay-3">
                    <div class="step-number">03</div>
                    <h3>QA & Lançamento</h3>
                    <p>Testes rigorosos de carga e segurança antes do lançamento. Colocamos o seu sistema online de forma suave e suportada.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- =============== SERVICES (Home Teaser) =============== -->
    <section class="services section-padding relative overflow-hidden">
        <div class="bg-mesh"></div>
        <div class="container relative z-10">
            <div class="section-header text-center reveal-bottom">
                <h2 class="section-title">Especialidades <span class="text-glow">Técnicas</span></h2>
            </div>
            
            <div class="services-grid">
                <div class="service-vibrant-card reveal-bottom delay-1">
                    <div class="card-glow"></div>
                    <div class="card-icon"><i class="fas fa-laptop-code"></i></div>
                    <h3>Sistemas Web Customizados</h3>
                    <p>ERPs, CRMs e Portais complexos. Não usamos templates, construímos do zero para o seu contexto exato.</p>
                </div>
                
                <div class="service-vibrant-card reveal-bottom delay-2">
                    <div class="card-glow"></div>
                    <div class="card-icon"><i class="fas fa-mobile-alt"></i></div>
                    <h3>Aplicações Mobile</h3>
                    <p>iOS e Android nativos ou cross-platform (React Native) fluidos, rápidos e integrados em tempo real.</p>
                </div>

                <div class="service-vibrant-card reveal-bottom delay-3">
                    <div class="card-glow"></div>
                    <div class="card-icon"><i class="fas fa-server"></i></div>
                    <h3>Cloud & Infraestrutura</h3>
                    <p>Alojamento em nuvem otimizado (AWS, Google Cloud) preparado para receber milhões de acessos sem quebras.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- =============== PORTFOLIO (TEASER) =============== -->
    <section class="portfolio section-padding bg-main">
        <div class="container">
            <div class="header-flex reveal-bottom">
                <div>
                    <h2 class="section-title">Engenharia em <span class="text-glow">Ação</span></h2>
                    <p class="section-desc">Uma amostra do impacto que causamos nos negócios.</p>
                </div>
                <a href="portfolio.php" class="btn btn-outline-vibrant magnetic-btn">Ver Todos os Projetos</a>
            </div>
            
            <div class="portfolio-grid mt-4">
                <!-- Hardcoded Highlights for the Home Page -->
                <div class="portfolio-item reveal-bottom delay-1 card-3d">
                    <div class="portfolio-img">
                        <img src="https://images.unsplash.com/photo-1600607686527-6fb886090705?q=80&w=600&auto=format&fit=crop" alt="Dashboard" />
                        <div class="overlay-glass">
                            <span class="badge">SaaS</span>
                            <h3>Sistema de Gestão SGE</h3>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item reveal-bottom delay-2 card-3d">
                    <div class="portfolio-img">
                        <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?q=80&w=600&auto=format&fit=crop" alt="App" />
                        <div class="overlay-glass">
                            <span class="badge">Mobile App</span>
                            <h3>Life Church Connect</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<?php require_once 'footer.php'; ?>
