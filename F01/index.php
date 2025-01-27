<?php
session_start();

include 'connect.php';

if (!isset($_SESSION['logged']) || $_SESSION['logged'] != "logged") {
  header("Location: login.php");
  exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Olympic Blog</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="icon" href="assets/Icon.png" type="image/x-icon">
  <!-- Custom CSS -->
  <style>
    /* Olympic Colors */
    :root {
      --olympic-blue: #0081C8;
      --olympic-yellow: #FFC200;
      --olympic-black: #000000;
      --olympic-green: #00A651;
      --olympic-red: #EE334E;
    }

    /* Hero Section */
    .hero-section {
      background: linear-gradient(to right, var(--olympic-blue), var(--olympic-green), var(--olympic-yellow), var(--olympic-red));
      color: white;
      padding: 150px 0;
      text-align: center;
    }

    /* Navigation Bar */
    .navbar {
      background-color: var(--olympic-black) !important;
    }

    .navbar-brand,
    .nav-link {
      color: white !important;
    }

    .nav-link:hover {
      color: var(--olympic-yellow) !important;
    }

    /* Blog Posts */
    .blog-post .card {
      border: none;
      transition: transform 0.3s;
    }

    .blog-post .card:hover {
      transform: translateY(-10px);
    }

    .blog-post .card-title {
      color: var(--olympic-blue);
    }

    .blog-post .btn-primary {
      background-color: var(--olympic-red);
      border: none;
    }

    .blog-post .btn-primary:hover {
      background-color: var(--olympic-green);
    }

    /* About Section */
    .about-section {
      background-color: #f8f9fa;
      padding: 80px 0;
    }

    .about-section h2 {
      color: var(--olympic-black);
    }

    /* Featured Posts */
    .featured-posts {
      padding: 80px 0;
    }

    .featured-posts h2 {
      color: var(--olympic-blue);
    }

    /* Subscribe Section */
    .subscribe-section {
      background-color: var(--olympic-yellow);
      padding: 80px 0;
      text-align: center;
    }

    .subscribe-section h2 {
      color: var(--olympic-black);
    }

    .subscribe-section .btn-primary {
      background-color: var(--olympic-red);
      border: none;
    }

    .subscribe-section .btn-primary:hover {
      background-color: var(--olympic-green);
    }

    /* Footer */
    footer {
      background-color: var(--olympic-black);
      color: white;
      padding: 20px 0;
      text-align: center;
    }
  </style>
</head>

<body>

  <!-- Navigation Bar -->
  <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
      <a class="navbar-brand" href="#">Olympic Blog</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#featured">Featured</a>
          </li>
          <li class="nav-item">
          <form action="logout.php" method="post" onsubmit="return confirm('Are you sure you want to log out?');">
              <button type="submit" class="btn">Logout</button>
            </form>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <section class="hero-section">
    <div class="container">
      <h1 class="display-4">Welcome to the Olympic Blog</h1>
      <p class="lead">Inspiring stories from the world of sports and beyond.</p>
    </div>
  </section>

  <!-- Blog Posts Section -->
  <section class="container my-5">
    <div class="row">
      <!-- Blog Post 1 -->
      <div class="col-md-4 blog-post">
        <div class="card">
          <img src="assets/Card1.jpg" class="card-img-top" alt="Blog Post 1">
          <div class="card-body">
            <h5 class="card-title">The Spirit of the Olympics</h5>
            <p class="card-text">Discover the history and values that make the Olympics unique.</p>
            <a href="#" class="btn btn-primary">Read More</a>
          </div>
        </div>
      </div>
      <!-- Blog Post 2 -->
      <div class="col-md-4 blog-post">
        <div class="card">
          <img src="assets/Card2.jpg" class="card-img-top" alt="Blog Post 2">
          <div class="card-body">
            <h5 class="card-title">Top Olympic Moments</h5>
            <p class="card-text">Relive the most unforgettable moments in Olympic history.</p>
            <a href="#" class="btn btn-primary">Read More</a>
          </div>
        </div>
      </div>
      <!-- Blog Post 3 -->
      <div class="col-md-4 blog-post">
        <div class="card">
          <img src="assets/Card3.jpg" class="card-img-top" alt="Blog Post 3">
          <div class="card-body">
            <h5 class="card-title">Athletes to Watch</h5>
            <p class="card-text">Meet the rising stars of the next Olympic Games.</p>
            <a href="#" class="btn btn-primary">Read More</a>
          </div>
        </div>
      </div>
    </div>
  </section>

<!-- About Section -->
<section id="about" class="about-section">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h2>About Carlos Yulo</h2>
        <p>
          Carlos Yulo, often referred to as <strong>"Caloy"</strong>, is a Filipino artistic gymnast who has made history as one of the most accomplished athletes in Philippine sports. Born on February 16, 2000, in Manila, Philippines, Carlos discovered his passion for gymnastics at a young age and has since risen to become a global icon in the sport.
        </p>

        <h4>Early Beginnings</h4>
        <p>
          Carlos started gymnastics at the age of 7, inspired by watching gymnasts on television. Despite limited resources and facilities in the Philippines, his determination and natural talent caught the attention of coaches. He joined the national team at just 12 years old and began training rigorously, often spending hours perfecting his routines.
        </p>

        <h4>Breakthrough and Achievements</h4>
        <p>
          Carlos made his international debut in 2016 and quickly gained recognition for his exceptional skills. His breakthrough came in 2019 when he won the <strong>gold medal in the Floor Exercise</strong> at the <strong>World Artistic Gymnastics Championships</strong> in Stuttgart, Germany. This historic victory made him the first-ever Filipino and Southeast Asian to win a world championship in gymnastics.
        </p>
        <p>
          In 2021, Carlos represented the Philippines at the <strong>Tokyo Olympics</strong>, where he competed in the Men's Artistic Gymnastics events. Although he faced challenges during the competition, his participation inspired millions of Filipinos and showcased his resilience and dedication to the sport.
        </p>

        <h4>Legacy and Inspiration</h4>
        <p>
          Carlos Yulo is not just an athlete; he is a symbol of hope and perseverance. His journey from humble beginnings to becoming a world-class gymnast has inspired countless young athletes in the Philippines and beyond. He continues to train and compete, aiming to bring more glory to his country and elevate the sport of gymnastics in Southeast Asia.
        </p>
        <p>
          Outside of gymnastics, Carlos is known for his humility, hard work, and positive attitude. He often shares his story to motivate others, emphasizing the importance of discipline, passion, and never giving up on your dreams.
        </p>

        <h4>Fun Facts About Carlos</h4>
        <ul>
          <li><strong>Nickname:</strong> Caloy</li>
          <li><strong>Height:</strong> 4'11" (150 cm)</li>
          <li><strong>Favorite Event:</strong> Floor Exercise</li>
          <li><strong>Motto:</strong> "Dream big, work hard, and never give up."</li>
        </ul>

        <p>
          Carlos Yulo is a true testament to what can be achieved with talent, hard work, and an unwavering spirit. As he continues to soar to new heights, the world eagerly watches the next chapter of his incredible journey.
        </p>
      </div>
      <div class="col-md-6">
        <img src="assets/about.jpg" class="img-fluid rounded shadow" alt="Carlos Yulo">
      </div>
    </div>
  </div>
</section>

  <!-- Featured Posts Section -->
  <section id="featured" class="featured-posts">
    <div class="container">
      <h2 class="text-center mb-5">Featured Posts</h2>
      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <img src="assets/f1.jpg" class="card-img-top" alt="Featured Post 1">
            <div class="card-body">
              <h5 class="card-title">The Road to Gold</h5>
              <p class="card-text">What does it take to win an Olympic gold medal?</p>
              <a href="#" class="btn btn-primary">Read More</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="assets/f2.jpg" class="card-img-top" alt="Featured Post 2">
            <div class="card-body">
              <h5 class="card-title">Sustainability in Sports</h5>
              <p class="card-text">How the Olympics are leading the way in sustainability.</p>
              <a href="#" class="btn btn-primary">Read More</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="assets/f3.jpg" class="card-img-top" alt="Featured Post 3">
            <div class="card-body">
              <h5 class="card-title">The Paralympic Spirit</h5>
              <p class="card-text">Celebrating the incredible athletes of the Paralympic Games.</p>
              <a href="#" class="btn btn-primary">Read More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Subscribe Section -->
  <section id="subscribe" class="subscribe-section">
    <div class="container">
      <h2>Subscribe to Our Newsletter</h2>
      <p>Get the latest updates and stories delivered to your inbox.</p>
      <form>
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Enter your email" aria-label="Email">
          <button class="btn btn-primary" type="submit">Subscribe</button>
        </div>
      </form>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <div class="container">
      <p>&copy; 2023 Olympic Blog. All rights reserved.</p>
    </div>
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>