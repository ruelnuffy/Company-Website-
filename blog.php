<?php require_once('./Qrlimited/config.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR Limited - Sustainable Agriculture Blog</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    		<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
	  
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- Nice Select CSS -->
		<link rel="stylesheet" href="css/nice-select.css">
		<!-- Font Awesome CSS -->
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<!-- icofont CSS -->
		<link rel="stylesheet" href="css/icofont.css">
		<!-- Slicknav -->
		<link rel="stylesheet" href="css/slicknav.min.css">
		<!-- Owl Carousel CSS -->
		<link rel="stylesheet" href="css/owl-carousel.css">
		<!-- Datepicker CSS -->
		<link rel="stylesheet" href="css/datepicker.css">
		<!-- Animate CSS -->
		<link rel="stylesheet" href="css/animate.min.css">
		<!-- Magnific Popup CSS -->
		<link rel="stylesheet" href="css/magnific-popup.css">
	
		<!-- Custom QR Limited CSS -->
		<link rel="stylesheet" href="css/normalize.css">
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="css/responsive.css">
    <style>
        :root {
            --primary-color: #05a8eb;
            --secondary-color: #3A5F0B;
            --text-color: #333;
            --light-bg: #f8f9fa;
        }

        body {
            font-family: 'Poppins', sans-serif;
            color: var(--text-color);
        }

        /* Header Styles */
        .header {
            box-shadow: 0 2px 15px rgba(0,0,0,0.1);
        }

        .logo img {
            transition: transform 0.3s ease;
        }

        .logo:hover img {
            transform: scale(1.05);
        }

        /* Blog Hero Section */
        .blog-hero {
            background: linear-gradient(rgba(26, 118, 209, 0.9), rgba(26, 118, 209, 0.8)),
                        url('hero-bg.jpg') center/cover;
            padding: 120px 0;
            color: white;
        }

        /* Blog Post Cards */
        .blog-card {
            border: none;
            transition: transform 0.3s ease;
            box-shadow: 0 5px 15px rgba(0,0,0,0.08);
        }

        .blog-card:hover {
            transform: translateY(-10px);
        }

        .post-category {
            background: var(--primary-color);
            color: white;
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 0.9rem;
        }

        /* Sidebar Styles */
        .sidebar-widget {
            background: white;
            border-radius: 10px;
            padding: 25px;
            margin-bottom: 30px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }

        /* Animations */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .animate-fade {
            animation: fadeIn 0.6s ease forwards;
        }

        /* Modal Styles */
        .contact-modal .modal-content {
            border-radius: 15px;
            border: none;
        }

        .contact-modal .form-control {
            border-radius: 8px;
            padding: 12px 15px;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .blog-hero h1 {
                font-size: 2rem;
            }
            
            .sidebar {
                margin-top: 40px;
            }
        }
    </style>
</head>
<body>

<!-- Header -->
<?php include 'nav.php'; ?>
<!-- Blog Hero -->
<?php
$blogHero = $conn->query("SELECT * FROM blog_hero LIMIT 1")->fetch_assoc();
?>

<section class="blog-hero" style="background: url('./Qrlimited/<?= htmlspecialchars($blogHero['image_path']) ?>') center/cover;">
    <div class="hero-overlay">
        <div class="container">
            <div class="hero-content text-center text-white">
                <h1 class="hero-title display-2 fw-bold mb-4 animate__animated animate__fadeInDown" style="color: white;"><?= htmlspecialchars($blogHero['title']) ?></h1>
                <p class="hero-subtitle lead fs-3 mb-5 animate__animated animate__fadeInUp animate__delay-1s" style="color: white;"><?= htmlspecialchars($blogHero['subtitle']) ?></p>
                <!--<a href="#blog-posts" class="btn btn-lg btn-outline-light animate__animated animate__fadeInUp animate__delay-2s">-->
                <!--    Explore Insights <i class="fas fa-arrow-down ms-2"></i>-->
                <!--</a>-->
            </div>
        </div>
    </div>
</section>


<style>
.blog-hero {
    height: 80vh;
    min-height: 600px;
    background:  url('3-scaled.jpg') center/cover;
    position: relative;
    display: flex;
    align-items: center;
}

.hero-overlay {
    position: absolute;
    width: 100%;
    height: 100%;
    background: rgba(26, 118, 209, 0.15);
}

.hero-content {
    margin-top:200px;
    position: relative;
    z-index: 2;
    text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.3);
}

.hero-title {
    font-size: 3.5rem;
    letter-spacing: -0.05em;
    line-height: 1.1;
    margin-bottom: 1.5rem !important;
}

.hero-subtitle {
    font-weight: 300;
    max-width: 800px;
    margin: 0 auto;
}

.btn-outline-light {
    border-width: 2px;
    padding: 1rem 2rem;
    transition: all 0.3s ease;
}

.btn-outline-light:hover {
    background: rgba(255, 255, 255, 0.15);
    transform: translateY(-2px);
}

@media (max-width: 768px) {
    .blog-hero {
        height: 70vh;
        min-height: 500px;
    }
    
    .hero-title {
        font-size: 2.5rem;
    }
    
    .hero-subtitle {
        font-size: 1.25rem !important;
    }
}

@keyframes gradientShift {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
}
</style>








<!-- Main Content -->
<!-- Blog Main Content -->
<main class="blog-main py-5">
    <div class="container">
        <div class="row g-5">
            <!-- Main Content -->
            <?php


// Fetch blog posts grouped by category
$categories = [
    'agriculture' => '🌱 Agriculture & Farming Tips',
    'business' => '💼 Business & Entrepreneurship',
    'podcast' => '🎙️ Podcast Highlights & Insights',
    'news' => '📰 Latest News',
    'event' => '📅 Upcoming Events',
    'press' => '🗞️ Press Releases'
];
?>

<div class="col-lg-12">
<?php foreach ($categories as $key => $title): ?>
    <section class="blog-section mb-5 animate-fade" id="blog-posts">
        <h2 class="section-title mb-4"><?= $title ?></h2>
        <div class="row g-4">
            <?php
            $posts = $conn->query("SELECT * FROM blog_posts WHERE category = '$key' ORDER BY date DESC");
            if ($posts->num_rows > 0):
                while ($post = $posts->fetch_assoc()):
            ?>
                <div class="col-md-6">
                    <article class="blog-card">
                        <?php if ($post['category'] === 'podcast' && $post['audio_link']): ?>
                            <div class="podcast-player mb-2">
                                <audio controls>
                                    <source src="<?= htmlspecialchars($post['audio_link']) ?>" type="audio/mpeg">
                                </audio>
                            </div>
                        <?php endif; ?>
                        <?php if (!empty($post['image_path'])): ?>
                            <img src="./Qrlimited/<?= htmlspecialchars($post['image_path']) ?>" class="card-img-top object-fit-cover" style="height: 250px;" alt="<?= htmlspecialchars($post['title']) ?>">
                        <?php endif; ?>
                        <div class="card-body">
                            <h3 class="h5"><?= htmlspecialchars($post['title']) ?></h3>
                            <p class="text-muted small"><?= date("F j, Y", strtotime($post['date'])) ?></p>
                            <p><?= nl2br(htmlspecialchars($post['content'])) ?></p>
                            <a href="<?= htmlspecialchars($post['audio_link']) ?>" target="_blank" class="btn btn-sm btn-outline-primary mb-2">
        🎧 Listen on External Platform
    </a>
                        </div>
                    </article>
                </div>
            <?php endwhile; else: ?>
                <p class="text-muted">No posts available in this section.</p>
            <?php endif; ?>
        </div>
    </section>
<?php endforeach; ?>
</div>


           
        </div>
    </div>
</main>

<style>
/* Section Styling */
.blog-section {
    padding: 2rem 0;
    border-bottom: 1px solid #eee;
}

.section-title {
    font-size: 2rem;
    color: #05a8eb;
    font-weight: 600;
}

.subsection-title {
    font-size: 1.5rem;
    margin-bottom: 1.5rem;
    color: #3A5F0B;
}
.btn{
    background-color:#05a8eb;
}
/* Card Styling */
.blog-card {
    background: white;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 3px 10px rgba(0,0,0,0.1);
    transition: transform 0.3s ease;
}

.blog-card:hover {
    transform: translateY(-5px);
}

/* Event Styling */
.event-item {
    display: flex;
    align-items: center;
    padding: 1rem;
    background: #f8f9fa;
    border-radius: 8px;
    margin-bottom: 1rem;
}

.event-date {
    text-align: center;
    padding: 0.8rem;
    border-radius: 6px;
    margin-right: 1rem;
}

/* Responsive Design */
@media (max-width: 768px) {
    .section-title {
        font-size: 1.75rem;
    }
    
    .blog-card {
        margin-bottom: 1.5rem;
    }
}
</style>

<!-- Contact Modal -->
<div class="modal fade contact-modal" id="contactModal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Contact QR Limited</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Your Name" required>
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control" placeholder="Email Address" required>
                    </div>
                    <div class="mb-3">
                        <select class="form-select" required>
                            <option value="">Inquiry Type</option>
                            <option>Agriculture Partnership</option>
                            <option>Media Collaboration</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control" rows="4" placeholder="Your Message" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Send Message</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Add this after your News & Events section but before the footer -->
<?php

$products = $conn->query("SELECT * FROM podcast_products ORDER BY created_at DESC");
?>
<?php
$products = $conn->query("SELECT * FROM podcast_products ORDER BY created_at DESC");
?>

<section class="products-section py-5 bg-light">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h2 class="section-title mb-3">Featured Podcast Products</h2>
                <p class="lead text-muted">Official merch from Talks About You</p>
            </div>
        </div>

        <div class="row g-4">
            <?php if ($products && $products->num_rows > 0): ?>
                <?php while ($product = $products->fetch_assoc()): ?>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="product-card card h-100 border-0 shadow-sm hover-shadow">
                            <div class="product-image position-relative overflow-hidden">
                                <img src="./Qrlimited/<?= htmlspecialchars($product['image_path']) ?>" class="card-img-top" alt="<?= htmlspecialchars($product['name']) ?>">
                                <?php if ($product['is_new']): ?>
                                    <div class="product-badge bg-danger text-white">New!</div>
                                <?php endif; ?>
                            </div>
                            <div class="card-body">
                                <h3 class="h5 card-title"><?= htmlspecialchars($product['name']) ?></h3>
                                <button class="btn btn-sm btn-outline-primary w-100">
                                    <i class="fas fa-cart-plus me-2"></i>Buy
                                </button>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php else: ?>
                <div class="col-12 text-center">
                    <p class="text-muted">No podcast products available yet.</p>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>



<style>
/* Product Section Styling */
.products-section {
    border-top: 1px solid rgba(0,0,0,0.1);
    border-bottom: 1px solid rgba(0,0,0,0.1);
}

.product-card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    border-radius: 0.75rem;
}

.hover-shadow:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 20px rgba(16, 13, 92, 0.15) !important;
}

.product-image {
    height: 200px;
    background: #f8f9fa;
}

.product-image img {
    height: 100%;
    object-fit: cover;
}

.product-badge {
    position: absolute;
    top: 10px;
    right: 10px;
    padding: 0.25rem 0.75rem;
    border-radius: 1rem;
    font-size: 0.75rem;
    font-weight: 600;
}

.product-price {
    font-size: 1.25rem;
    font-weight: 600;
}

@media (max-width: 768px) {
    .product-image {
        height: 150px;
    }
    
    .product-price {
        font-size: 1.1rem;
    }
    
    .btn-primary {
        width: 100%;
    }
}
</style>
		<!-- Footer Area -->
<?php include 'footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Animation trigger
    const animateElements = document.querySelectorAll('.animate-fade');
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = 1;
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, { threshold: 0.1 });

    animateElements.forEach(el => observer.observe(el));

    // Smooth scroll
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });
});
</script>
		<!-- jquery Min JS -->
        <script src="js/jquery.min.js"></script>
		<!-- jquery Migrate JS -->
		<script src="js/jquery-migrate-3.0.0.js"></script>
		<!-- jquery Ui JS -->
		<script src="js/jquery-ui.min.js"></script>
		<!-- Easing JS -->
        <script src="js/easing.js"></script>
		<!-- Color JS -->
		<script src="js/colors.js"></script>
		<!-- Popper JS -->
		<script src="js/popper.min.js"></script>
		<!-- Bootstrap Datepicker JS -->
		<script src="js/bootstrap-datepicker.js"></script>
		<!-- Jquery Nav JS -->
        <script src="js/jquery.nav.js"></script>
		<!-- Slicknav JS -->
		<script src="js/slicknav.min.js"></script>
		<!-- ScrollUp JS -->
        <script src="js/jquery.scrollUp.min.js"></script>
		<!-- Niceselect JS -->
		<script src="js/niceselect.js"></script>
		<!-- Tilt Jquery JS -->
		<script src="js/tilt.jquery.min.js"></script>
		<!-- Owl Carousel JS -->
        <script src="js/owl-carousel.js"></script>
		<!-- counterup JS -->
		<script src="js/jquery.counterup.min.js"></script>
		<!-- Steller JS -->
		<script src="js/steller.js"></script>
		<!-- Wow JS -->
		<script src="js/wow.min.js"></script>
		<!-- Magnific Popup JS -->
		<script src="js/jquery.magnific-popup.min.js"></script>
		<!-- Counter Up CDN JS -->
		<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
		<!-- Bootstrap JS -->
		<script src="js/bootstrap.min.js"></script>
		<!-- Main JS -->
		<script src="js/main.js"></script>
</body>
</html>