// ============================================
// AltSource Software — Dashboard Scripts
// ============================================

document.addEventListener('DOMContentLoaded', () => {

    // ─── Sidebar Toggle (Mobile) ───
    const sidebar = document.getElementById('sidebar');
    const sidebarToggle = document.getElementById('sidebarToggle');
    const sidebarClose = document.getElementById('sidebarClose');
    const overlay = document.getElementById('sidebarOverlay');

    const openSidebar = () => {
        sidebar.classList.add('open');
        overlay.classList.add('active');
        document.body.style.overflow = 'hidden';
    };

    const closeSidebar = () => {
        sidebar.classList.remove('open');
        overlay.classList.remove('active');
        document.body.style.overflow = '';
    };

    if (sidebarToggle) sidebarToggle.addEventListener('click', openSidebar);
    if (sidebarClose) sidebarClose.addEventListener('click', closeSidebar);
    if (overlay) overlay.addEventListener('click', closeSidebar);

    // ─── Image Upload Preview ───
    const imageInput = document.getElementById('imageInput');
    const uploadArea = document.getElementById('uploadArea');
    const uploadPlaceholder = document.getElementById('uploadPlaceholder');
    const uploadPreview = document.getElementById('uploadPreview');
    const previewImg = document.getElementById('previewImg');
    const removePreview = document.getElementById('removePreview');

    if (imageInput) {
        imageInput.addEventListener('change', () => {
            const file = imageInput.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = (e) => {
                    previewImg.src = e.target.result;
                    uploadPlaceholder.style.display = 'none';
                    uploadPreview.style.display = 'inline-block';
                };
                reader.readAsDataURL(file);
            }
        });

        removePreview.addEventListener('click', () => {
            imageInput.value = '';
            previewImg.src = '';
            uploadPlaceholder.style.display = 'block';
            uploadPreview.style.display = 'none';
        });

        // Drag & drop styling
        uploadArea.addEventListener('dragover', (e) => {
            e.preventDefault();
            uploadArea.classList.add('dragover');
        });

        uploadArea.addEventListener('dragleave', () => {
            uploadArea.classList.remove('dragover');
        });

        uploadArea.addEventListener('drop', () => {
            uploadArea.classList.remove('dragover');
        });
    }

    // ─── Auto-dismiss flash message ───
    const flash = document.getElementById('flashMsg');
    if (flash) {
        setTimeout(() => {
            flash.style.opacity = '0';
            flash.style.transform = 'translateY(-10px)';
            setTimeout(() => flash.remove(), 300);
        }, 4000);
    }
});
