<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    
    <style>
        :root {
            --primary-turquoise: #008080;
            --secondary-sand: #F4E7D3;
            --accent-coral: #FF6B6B;
            --dark-teal: #006666;
            --light-beige: #FFF9F0;
        }
        
        .bg-primary-turquoise {
            background-color: var(--primary-turquoise) !important;
        }
        
        .text-primary-turquoise {
            color: var(--primary-turquoise) !important;
        }
        
        .bg-secondary-sand {
            background-color: var(--secondary-sand);
        }
        
        .bg-light-beige {
            background-color: var(--light-beige);
        }
        
        .btn-primary-turquoise {
            background-color: var(--primary-turquoise);
            color: white;
            border: none;
        }
        
        .btn-primary-turquoise:hover {
            background-color: var(--dark-teal);
            color: white;
            transform: translateY(-2px);
            transition: all 0.3s ease;
        }
        
        .btn-accent-coral {
            background-color: var(--accent-coral);
            color: white;
            border: none;
        }
        
        .btn-accent-coral:hover {
            background-color: #E05555;
            color: white;
        }
        
        .hero-section {
            position: relative;
            height: 100vh;
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
            text-shadow: 2px 2px 5px rgba(0,0,0,0.7);
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
            background: linear-gradient(to bottom, rgba(0,0,0,0.3), rgba(0,128,128,0.4));
            z-index: 1;
        }
        
        .card {
            border: none;
            border-radius: 15px;
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.15);
        }
        
        .card-img-top {
            height: 220px;
            object-fit: cover;
        }
        
        .guide-img {
            width: 150px;
            height: 150px;
            object-fit: cover;
            border-radius: 50%;
            border: 4px solid var(--primary-turquoise);
            transition: transform 0.3s ease;
        }
        
        .guide-card:hover .guide-img {
            transform: scale(1.08);
        }
        
        .gallery-thumb {
            transition: transform 0.3s ease;
            cursor: pointer;
            border-radius: 10px;
        }
        
        .gallery-thumb:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 20px rgba(0,0,0,0.2);
        }
        
        .section-title {
            position: relative;
            padding-bottom: 15px;
            margin-bottom: 30px;
        }
        
        .section-title:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background-color: var(--accent-coral);
            border-radius: 2px;
        }
        
        .badge-turquoise {
            background-color: var(--primary-turquoise);
            color: white;
        }
        
        .navbar-brand {
            font-weight: 700;
            font-size: 1.8rem;
            color: white !important;
        }
        
        .navbar {
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary-turquoise sticky-top">
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
                        <a class="nav-link" href="#destinations">Destinations</a>
                    </li>
                    <li class="nav-item">
                        <!-- <a class="nav-link" href="#guides">Tour Guides</a> -->
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#packages">Tour Packages</a>
                    </li>
                </ul>
                <div class="d-flex">
                    <a href="#contact" class="btn btn-outline-light">Contact Us</a>
                </div>
            </div>
        </div>
    </nav>