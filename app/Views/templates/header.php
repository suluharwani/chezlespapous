<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <style>
        :root {
            --primary-blue: #1a73e8;
            --dark-blue: #0d47a1;
            --light-blue: #e8f0fe;
        }
        .bg-primary-blue {
            background-color: var(--primary-blue);
        }
        .text-primary-blue {
            color: var(--primary-blue);
        }
        .bg-light-blue {
            background-color: var(--light-blue);
        }
        .btn-primary-blue {
            background-color: var(--primary-blue);
            color: white;
        }
        .btn-primary-blue:hover {
            background-color: var(--dark-blue);
            color: white;
        }
        .hero-section {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('/assets/img/hero-bg.jpg');
            background-size: cover;
            background-position: center;
            height: 60vh;
            color: white;
        }
        .card-img-top {
            height: 200px;
            object-fit: cover;
        }
        .guide-img {
            width: 150px;
            height: 150px;
            object-fit: cover;
            border-radius: 50%;
        }
        .hero-section {
    position: relative;
    height: 100vh; /* Full viewport height */
    overflow: hidden;
}

.hero-carousel {
    height: 100%;
}

.hero-carousel .carousel-inner,
.hero-carousel .carousel-item {
    height: 100%;
}

.hero-carousel img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    position: absolute;
    top: 0;
    left: 0;
}

.hero-content {
    position: relative;
    z-index: 2;
    color: white;
    text-shadow: 1px 1px 3px rgba(0,0,0,0.8);
    height: 100%;
    display: flex;
    align-items: center;
}

.hero-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0,0,0,0.4);
    z-index: 1;
}
/* Gallery Styles */

/* Guide Card Styles */
.guide-card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    border: none;
    border-radius: 10px;
    overflow: hidden;
}

.guide-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 20px rgba(0,0,0,0.1);
}

.guide-img {
    width: 150px;
    height: 150px;
    object-fit: cover;
    border-radius: 50%;
    border: 3px solid var(--primary-blue);
    transition: transform 0.3s ease;
}

.guide-card:hover .guide-img {
    transform: scale(1.05);
}

    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary-blue sticky-top">
        <div class="container">
            <a class="navbar-brand" href="/">Chezlespapous</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#destinations">Destinasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#guides">Tour Guide</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#packages">Paket Wisata</a>
                    </li>
                </ul>
                <div class="d-flex">
                    <a href="#contact" class="btn btn-outline-light">Kontak Kami</a>
                </div>
            </div>
        </div>
    </nav>