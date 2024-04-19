<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-NG10B10Y7N"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-NG10B10Y7N');
  </script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Discover the vibrant paintings of Mopasang Valath, a talented artist who specializes in acrylic and watercolor painting. From landscapes to abstracts to still life, each artwork is a unique expression of their passion and vision. Browse the portfolio and get inspired.">
  <title>MOPASANG VALATH</title>
  <link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri() . '/assets/logo.png' ?>">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Epilogue&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri() . "/assets/css/custom.css?ver=3" ?>">
  <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

  <?php wp_head(); ?>
</head>

<body>
  <nav class="navbar navbar-expand-md border-bottom my-2" aria-label="Fourth navbar example">
    <div class="container-fluid">
      <!-- <a class="navbar-brand " href="/"><strong>MOPASANG VALATH</strong></a> -->
      <a class="navbar-brand " href="#">
        <img src="<?php echo get_template_directory_uri() . '/assets/nav-brand.png' ?>" alt="logo">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarsExample04">

        <div class="collapse navbar-collapse justify-content-end" id="navbarsExample04">
          <ul class="navbar-nav mb-2 mb-md-0 d-flex text-uppercase">
            <li class="nav-item ">
              <a class="nav-link active" aria-current="page" href="/#home">Home</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link " aria-current="page" href="/#work">Works</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link " aria-current="page" href="/acrylic-gallery">Acrylic</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link " aria-current="page" href="/water-color-gallery">Water Color</a>
            </li>

            <li class="nav-item ">
              <a class="nav-link " aria-current="page" href="/#about">About</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link " aria-current="page" href="/#contact">Contact</a>
            </li>

          </ul>

        </div>
      </div>
  </nav>