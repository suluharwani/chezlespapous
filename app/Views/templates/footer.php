<style>
    /* WhatsApp Floating Button */
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
        box-shadow: 0 4px 15px rgba(37, 211, 102, 0.3);
        transition: all 0.3s ease;
    }
    
    .whatsapp-link:hover {
        background-color: #128C7E;
        transform: scale(1.1);
        color: white;
        text-decoration: none;
        box-shadow: 0 6px 20px rgba(37, 211, 102, 0.4);
    }
    
    .whatsapp-link i {
        font-size: 36px;
    }
    
    .footer-link {
        color: #ddd;
        text-decoration: none;
        transition: color 0.3s ease;
    }
    
    .footer-link:hover {
        color: var(--accent-coral);
    }
</style>

<footer class="bg-primary-turquoise text-white py-5 mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4 mb-4">
                <h5 class="mb-3">About Chezlespapous</h5>
                <p>Platform to promote tourist destinations and connect travelers with professional tour guides in Raja Ampat and surrounding areas.</p>
            </div>
            
            <div class="col-md-4 mb-4">
                <h5 class="mb-3">Quick Links</h5>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="/" class="footer-link">Home</a></li>
                    <li class="mb-2"><a href="#destinations" class="footer-link">Destinations</a></li>
                    <li class="mb-2"><a href="#guides" class="footer-link">Tour Guides</a></li>
                    <li class="mb-2"><a href="#packages" class="footer-link">Tour Packages</a></li>
                    <li class="mb-2"><a href="/guide/register" class="footer-link">Become a Guide</a></li>
                </ul>
            </div>
            
            <div class="col-md-4 mb-4" id="contact">
                <h5 class="mb-3">Contact Us</h5>
                <p><i class="bi bi-envelope me-2"></i> contact@chezlespapous.com</p>
                <p><i class="bi bi-phone me-2"></i> +62-822-3824-1043</p>
                
                <div class="mt-3">
                    <a href="https://wa.me/6282238241043" target="_blank" class="btn btn-success btn-sm me-2">
                        <i class="bi bi-whatsapp"></i> WhatsApp
                    </a>
                    <a href="mailto:contact@chezlespapous.com" class="btn btn-light btn-sm">
                        <i class="bi bi-envelope"></i> Email Us
                    </a>
                </div>
            </div>
        </div>
        
        <hr class="bg-white">
        
        <div class="text-center pt-3">
            <p>&copy; <?= date('Y') ?> Chezlespapous. All rights reserved. | Explore the Beauty of Indonesia</p>
        </div>
    </div>
</footer>

<!-- WhatsApp Floating Button -->
<div class="whatsapp-float">
    <a href="https://wa.me/6282238241043" target="_blank" class="whatsapp-link" title="Contact us on WhatsApp">
        <i class="bi bi-whatsapp"></i>
    </a>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
    // Enable carousel
    const myCarousel = document.querySelector('#heroCarousel');
    const carousel = new bootstrap.Carousel(myCarousel, {
        interval: 5000,
        wrap: true,
        pause: false
    });

    // Auto-height adjustment
    function adjustHeroHeight() {
        const navbarHeight = document.querySelector('.navbar').offsetHeight;
        document.querySelector('.hero-section').style.height = `calc(100vh - ${navbarHeight}px)`;
    }

    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            
            const targetId = this.getAttribute('href');
            if(targetId === '#') return;
            
            const targetElement = document.querySelector(targetId);
            if(targetElement) {
                window.scrollTo({
                    top: targetElement.offsetTop - 80,
                    behavior: 'smooth'
                });
            }
        });
    });

    // Initialize on load and resize
    window.addEventListener('load', adjustHeroHeight);
    window.addEventListener('resize', adjustHeroHeight);

    // Add animation to cards on scroll
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if(entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, observerOptions);

    // Observe cards for animation
    document.querySelectorAll('.card, .guide-card').forEach(card => {
        card.style.opacity = '0';
        card.style.transform = 'translateY(20px)';
        card.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
        observer.observe(card);
    });
</script>
</body>
</html>