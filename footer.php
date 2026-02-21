<?php
// footer.php
?>
    <!-- =============== CTA / CONTACT =============== -->
    <section class="contact-section section-padding" id="contact" style="background: var(--bg-dark);">
        <div class="container contact-container reveal-bottom">
            <div class="contact-card glow-card" style="border-radius: var(--radius-xl); box-shadow: var(--glow-primary); text-align: center;">
                <h2 style="font-size: 2.5rem; font-weight: 800; color: #fff; margin-bottom: 1rem;">Onde as suas ideias ganham vida</h2>
                <p style="font-size: 1.2rem; color: #94A3B8; margin-bottom: 2rem;">Entre em contacto e Solicite o seu Orçamento!</p>
                <div class="contact-methods" style="display: flex; justify-content: center;">
                    <a href="https://wa.me/258842163212" target="_blank" class="btn btn-whatsapp magnetic-btn" style="padding: 1.2rem 3rem; font-size: 1.1rem; border-radius: 50px;">
                        <i class="fab fa-whatsapp" style="font-size: 1.4rem;"></i> Iniciar Projeto Agora
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- =============== PREMIUM FOOTER =============== -->
    <footer class="footer bg-dark text-white" style="border-top: 1px solid rgba(255,255,255,0.05); padding-top: 5rem; padding-bottom: 2rem;">
        <div class="container footer-content" style="display: grid; grid-template-columns: 2fr 1fr 1fr; gap: 4rem; margin-bottom: 4rem;">
            
            <!-- Brand Info Column -->
            <div class="footer-info">
                <img src="assets/logo.jpg" alt="AltSource" class="footer-logo" style="height: 50px; margin-bottom: 1.5rem; border-radius: 8px;">
                <p style="color: #94A3B8; line-height: 1.8; font-size: 1.05rem; max-width: 400px;">
                    Impulsionamos empresas através da tecnologia, oferecendo soluções inteligentes que aumentam a produtividade e fortalecem o seu negócio.
                </p>
            </div>
            
            <!-- Email Column -->
            <div class="footer-links" style="display: flex; flex-direction: column;">
                <h4 style="color: #fff; font-size: 1.2rem; margin-bottom: 1.5rem; font-weight: 700;">Email</h4>
                <a href="mailto:info.altsourcesoftware@gmail.com" style="color: #94A3B8; text-decoration: none; transition: 0.3s; display: flex; align-items: center; gap: 0.5rem; margin-bottom: 1rem;" onmouseover="this.style.color='#00E5FF'" onmouseout="this.style.color='#94A3B8'">
                    <i class="fas fa-envelope" style="color: var(--electric-blue);"></i> info.altsourcesoftware@gmail.com
                </a>
            </div>
            
            <!-- Phone Column -->
            <div class="footer-contact" style="display: flex; flex-direction: column;">
                <h4 style="color: #fff; font-size: 1.2rem; margin-bottom: 1.5rem; font-weight: 700;">Telefone</h4>
                <a href="https://wa.me/258842163212" target="_blank" style="color: #94A3B8; padding: 0.5rem 0; display: flex; align-items: center; gap: 0.5rem; transition: 0.3s;" onmouseover="this.style.color='#00E5FF'" onmouseout="this.style.color='#94A3B8'">
                    <i class="fas fa-phone" style="color: var(--electric-blue);"></i> +258 84 216 3212
                </a>
                <a href="https://wa.me/258862538785" target="_blank" style="color: #94A3B8; padding: 0.5rem 0; display: flex; align-items: center; gap: 0.5rem; transition: 0.3s;" onmouseover="this.style.color='#00E5FF'" onmouseout="this.style.color='#94A3B8'">
                    <i class="fas fa-phone" style="color: var(--electric-blue);"></i> +258 86 253 8785
                </a>
            </div>
        </div>

        <!-- Bottom Bar -->
        <div class="container footer-bottom" style="display: flex; justify-content: space-between; align-items: center; border-top: 1px solid rgba(255,255,255,0.05); padding-top: 2rem;">
            <p style="color: #64748B; font-size: 0.95rem;">&copy; <?= date('Y') ?> AltSource Software. Todos os direitos reservados.</p>
            <div class="socials" style="display: flex; gap: 1rem;">
                <a href="#" class="magnetic-icon" style="background: rgba(255,255,255,0.05); color: #fff; border: 1px solid rgba(255,255,255,0.1); width: 40px; height: 40px; border-radius: 50%; display: flex; justify-content: center; align-items: center; transition: 0.3s;" onmouseover="this.style.background='var(--electric-blue)'; this.style.borderColor='var(--electric-blue)';" onmouseout="this.style.background='rgba(255,255,255,0.05)'; this.style.borderColor='rgba(255,255,255,0.1)';">
                    <i class="fab fa-linkedin"></i>
                </a>
                <a href="#" class="magnetic-icon" style="background: rgba(255,255,255,0.05); color: #fff; border: 1px solid rgba(255,255,255,0.1); width: 40px; height: 40px; border-radius: 50%; display: flex; justify-content: center; align-items: center; transition: 0.3s;" onmouseover="this.style.background='var(--electric-blue)'; this.style.borderColor='var(--electric-blue)';" onmouseout="this.style.background='rgba(255,255,255,0.05)'; this.style.borderColor='rgba(255,255,255,0.1)';">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="#" class="magnetic-icon" style="background: rgba(255,255,255,0.05); color: #fff; border: 1px solid rgba(255,255,255,0.1); width: 40px; height: 40px; border-radius: 50%; display: flex; justify-content: center; align-items: center; transition: 0.3s;" onmouseover="this.style.background='var(--electric-blue)'; this.style.borderColor='var(--electric-blue)';" onmouseout="this.style.background='rgba(255,255,255,0.05)'; this.style.borderColor='rgba(255,255,255,0.1)';">
                    <i class="fab fa-facebook-f"></i>
                </a>
            </div>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>
