<?= $this->include('templates/header') ?>

<!-- Hero Section dengan Carousel -->
<!-- Hero Section Full Width -->
<section class="hero-section">
    <div id="heroCarousel" class="carousel slide hero-carousel" data-bs-ride="carousel">
        <div class="carousel-inner">
            <?php foreach ($sliders as $index => $slider): ?>
                <div class="carousel-item <?= $index === 0 ? 'active' : '' ?>">
                    <!-- Overlay untuk teks lebih readable -->
                    <div class="hero-overlay"></div>

                    <!-- Gambar background full -->
                    <img src="/assets/img/<?= $slider->image_url ?>" class="d-block w-100" alt="<?= $slider->title ?>">

                    <!-- Konten teks -->
                    <div class="container hero-content">
                        <div class="text-center w-100">
                            <h1 class="display-3 fw-bold mb-3"><?= $slider->title ?></h1>
                            <p class="lead mb-4 fs-4"><?= $slider->subtitle ?></p>
                            <a href="<?= $slider->button_link ?>" class="btn btn-primary-blue btn-lg px-4 py-2">
                                <?= $slider->button_text ?>
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Navigation arrows -->
        <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>

<!-- Destinasi Wisata -->
<section id="destinations" class="py-5 bg-light-blue">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold text-primary-blue">Destinasi Wisata Populer</h2>
            <p class="lead">Temukan tempat-tempat menarik untuk dikunjungi</p>
        </div>
        <div class="row g-4">
            <?php foreach ($destinations as $destination): ?>
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm">
                        <img src="<?=$destination->image_url ?>" class="card-img-top"
                            alt="<?= $destination->name ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?= $destination->name ?></h5>
                            <p class="card-text text-muted"><i class="bi bi-geo-alt"></i> <?= $destination->location ?></p>
                            <p class="card-text"><?= substr($destination->description, 0, 100) ?>...</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="badge bg-primary-blue"><?= $destination->price_range ?></span>
                                <a href="#" class="btn btn-sm btn-primary-blue">Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="text-center mt-4">
            <a href="#" class="btn btn-outline-primary-blue">Lihat Semua Destinasi</a>
        </div>
    </div>
</section>

<!-- Tour Guide -->
<section id="guides" class="py-5 bg-light-blue">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold text-primary-blue">Tour Guide Profesional</h2>
            <p class="lead">Pemandu wisata bersertifikat di Raja Ampat</p>
        </div>
        
        <div class="row g-4">
            <?php foreach ($guides as $guide): ?>
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 shadow-sm guide-card">
                    <div class="text-center pt-4">
                        <img src="/assets/img/<?= $guide->photo_url ?>" 
                             class="guide-img"
                             alt="<?= $guide->full_name ?>"
                             loading="lazy">
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title"><?= $guide->full_name ?></h5>
                        
                        <!-- Rating -->
                        <div class="mb-2">
                            <?php for ($i = 1; $i <= 5; $i++): ?>
                                <i class="bi bi-star-fill <?= $i <= round($guide->rating) ? 'text-warning' : 'text-secondary' ?>"></i>
                            <?php endfor; ?>
                            <span class="ms-1"><?= $guide->rating ?></span>
                        </div>
                        
                        <!-- Specialization Badge -->
                        <span class="badge bg-info mb-2">
                            <?= ucfirst($guide->specialization) ?>
                        </span>
                        
                        <p class="card-text"><i class="bi bi-translate"></i> <?= $guide->languages ?></p>
                        <p class="card-text"><i class="bi bi-clock-history"></i> <?= $guide->years_experience ?> tahun pengalaman</p>
                        
                        <div class="d-flex justify-content-center align-items-center mt-3">
                            <span class="badge bg-primary-blue me-2">
                                Rp<?= number_format($guide->price_per_day, 0, ',', '.') ?>/hari
                            </span>
                            <a href="tel:<?= $guide->phone ?>" class="btn btn-sm btn-primary-blue">
                                <i class="bi bi-telephone"></i> Hubungi
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        

    </div>
</section>

<!-- Paket Wisata -->
<section id="packages" class="py-5 bg-light-blue">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold text-primary-blue">Paket Wisata</h2>
            <p class="lead">Nikmati kemudahan dengan paket wisata all-inclusive</p>
        </div>
        <div class="row g-4">
            <?php foreach ($packages as $package): ?>
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm">
                        <img src="/assets/img/<?= $package->image_url ?>" class="card-img-top" alt="<?= $package->name ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?= $package->name ?></h5>
                            <p class="card-text text-muted"><i class="bi bi-clock"></i> <?= $package->duration ?></p>
                            <p class="card-text"><?= substr($package->description, 0, 100) ?>...</p>
                            <div class="mb-3">
                                <h6 class="text-primary-blue">Termasuk:</h6>
                                <p><?= $package->includes ?></p>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="mb-0 text-primary-blue">Rp<?= number_format($package->price, 0, ',', '.') ?></h5>
                                <a href="#" class="btn btn-primary-blue">Pesan Sekarang</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Galeri -->
<section class="py-5 bg-light-blue">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold text-primary-blue">Galeri Wisata</h2>
            <p class="lead">Momen indah dari berbagai destinasi</p>
        </div>

        <!-- Gallery Grid -->
        <div class="row gallery-grid">
            <?php foreach ($gallery as $item): ?>
            <div class="col-lg-3 col-md-4 col-6 mb-4">
                <div class="gallery-item" data-bs-toggle="modal" data-bs-target="#galleryModal" 
                     onclick="showGalleryImage('<?= $item->image_url ?>', '<?= $item->title ?>', '<?= $item->location ?>')">
                    <img src="/assets/img/<?= $item->image_url ?>" 
                         class="img-fluid rounded shadow-sm gallery-thumb"
                         alt="<?= $item->title ?>"
                         loading="lazy">
                    <div class="gallery-caption">
                        <h5><?= $item->title ?></h5>
                        <small><?= $item->location ?></small>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <div class="text-center mt-4">
            <a href="/gallery" class="btn btn-primary-blue">Lihat Galeri Lengkap</a>
        </div>
    </div>
</section>

<!-- Lightbox Modal -->
<div class="modal fade" id="galleryModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content border-0 bg-transparent">
            <div class="modal-body text-center p-0">
                <img id="modalImage" class="img-fluid rounded" src="" alt="">
                <div class="mt-3 text-white">
                    <h4 id="modalTitle" class="fw-bold"></h4>
                    <p id="modalLocation" class="mb-0"></p>
                </div>
            </div>
            <!-- <button type="button" class="btn-close btn-close-white position-absolute top-0 end-0 m-3" 
                    data-bs-dismiss="modal" aria-label="Close"></button> -->
        </div>
    </div>
</div>

<?= $this->include('templates/footer') ?>

<script>
function showGalleryImage(imageUrl, title, location) {
    const fullImageUrl = `/assets/img/${imageUrl}`;
    document.getElementById('modalImage').src = fullImageUrl;
    document.getElementById('modalImage').alt = title;
    document.getElementById('modalTitle').textContent = title;
    document.getElementById('modalLocation').textContent = location;
}
</script>