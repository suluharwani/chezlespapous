    <style>
    /* WhatsApp Floating Button Styles */
    .whatsapp-float {
        position: fixed;
        bottom: 30px;
        right: 30px;
        z-index: 1000;
    }
    
    .whatsapp-link {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 60px;
        height: 60px;
        background-color: #25D366;
        color: white;
        border-radius: 50%;
        text-align: center;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        transition: all 0.3s ease;
    }
    
    .whatsapp-link:hover {
        background-color: #128C7E;
        transform: scale(1.1);
        color: white;
        text-decoration: none;
    }
    
    .whatsapp-link i {
        font-size: 36px;
    }
</style>
    <footer class="bg-dark text-white py-5 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5>Tentang Chezlespapous</h5>
                    <p>Platform untuk mempromosikan destinasi wisata dan menghubungkan wisatawan dengan tour guide profesional.</p>
                </div>
                <div class="col-md-4">
                    <h5>Link Cepat</h5>
                    <ul class="list-unstyled">
                        <li><a href="/" class="text-white">Home</a></li>
                        <li><a href="#destinations" class="text-white">Destinasi</a></li>
                        <li><a href="#guides" class="text-white">Tour Guide</a></li>
                        <li><a href="#packages" class="text-white">Paket Wisata</a></li>
                        <li><a href="/guide/register" class="text-white">Daftar sebagai Guide</a></li>
                    </ul>
                </div>
                <div class="col-md-4" id="contact">
                    <h5>Kontak Kami</h5>
                    <p><i class="bi bi-envelope"></i> contact@chezlespapous.com</p>
                    <p><i class="bi bi-phone"></i> +62-822-3824-1043</p>
                    <!-- <p><i class="bi bi-geo-alt"></i> Jl. Wisata No. 123, Jakarta</p> -->
                </div>
            </div>
            <hr>
            <div class="text-center">
                <p>&copy; <?= date('Y') ?> Chezlespapous. All rights reserved.</p>
            </div>
        </div>
    </footer>
<!-- Modal Lightbox -->
<div class="modal fade" id="galleryModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content bg-transparent border-0">
            <img src="" id="modalImage" class="img-fluid rounded">
            <div class="text-center text-white mt-2">
                <h5 id="modalTitle"></h5>
                <p id="modalLocation"></p>
            </div>
        </div>
    </div>
</div>

<div class="whatsapp-float">
    <a href="https://wa.me/6282238241043" target="_blank" class="whatsapp-link">
        <i class="bi bi-whatsapp"></i>
    </a>
</div>
<script>
// Lightbox functionality
document.querySelectorAll('.gallery-item img').forEach(img => {
    img.addEventListener('click', function() {
        const modal = new bootstrap.Modal(document.getElementById('galleryModal'));
        document.getElementById('modalImage').src = this.src;
        document.getElementById('modalTitle').textContent = this.alt;
        document.getElementById('modalLocation').textContent = this.dataset.location;
        modal.show();
    });
});
</script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Aktifkan carousel
        const myCarousel = document.querySelector('#heroCarousel');
        const carousel = new bootstrap.Carousel(myCarousel, {
            interval: 5000,
            wrap: true
        });
    </script>
    <script>
// Auto-height adjustment
function adjustHeroHeight() {
    const navbarHeight = document.querySelector('.navbar').offsetHeight;
    document.querySelector('.hero-section').style.height = `calc(100vh - ${navbarHeight}px)`;
}

window.addEventListener('load', adjustHeroHeight);
window.addEventListener('resize', adjustHeroHeight);

// Smooth transition
document.querySelectorAll('.hero-carousel .carousel-item').forEach(item => {
    item.style.transition = 'transform 1s ease-in-out';
});
</script>
</body>
</html>