<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Thari Tour Travels</title>
  <!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom CSS (before Tailwind so Tailwind utilities can still override) -->
<link href="<?= base_url('assets/css/custom.css') ?>" rel="stylesheet">

<!-- Tailwind CSS -->
<script src="https://cdn.tailwindcss.com"></script>
  
  <style>
    body {
      width: 100vw;
      overflow-x: hidden;
      margin: 0;
      padding: 0;
    }

    .hero .carousel-item img {
      width: 100%;
      height: 100vh;
      object-fit: cover;
    }

    .hide-scrollbar::-webkit-scrollbar {
      display: none;
    }

    .hide-scrollbar {
      -ms-overflow-style: none;
      scrollbar-width: none;
      scroll-snap-type: x mandatory;
    }

    .hide-scrollbar>div {
      scroll-snap-align: start;
    }

    .gallery-card {
      position: relative;
      width: 100%;
      max-width: 300px;
      height: 400px;
    }

    .image-layers img {
      position: absolute;
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .image-layer1 {
      transform: translate(0, 0);
      z-index: 1;
    }

    .image-layer2 {
      transform: translate(10px, 10px);
      z-index: 2;
    }

    .image-layer3 {
      transform: translate(20px, 20px);
      z-index: 3;
    }

    .whatsapp-button {
      position: fixed;
      bottom: 20px;
      right: 20px;
      width: 60px;
      height: 60px;
      background-color: #25D366;
      color: white;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      z-index: 1000;
    }

    .btn-enquiry {
      background-color: #f97316;
      color: white;
    }

    .btn-whatsapp {
      background-color: #25D366;
    }

    .card-bottom-shadow {
      box-shadow: 0 -2px 4px rgba(0, 0, 0, 0.1);
    }

    .car-card {
      width: 100%;
      max-width: 300px;
    }

    .car-image-wrapper img {
      width: 100%;
      height: 180px;
      object-fit: cover;
    }

    @media (max-width:768px) {
      .gallery-card {
        max-width: 250px;
        height: 350px;
      }

      .modal-xl {
        max-width: 90vw;
      }

      .carousel-caption {
        display: block !important;
        font-size: 0.9rem;
      }

      .cards-container>article {
        min-width: 250px;
        max-width: 250px;
        justify-content: flex-start !important;
      }

      .car-card {
        max-width: 250px;
      }
    }

    @media (max-width:576px) {
      .gallery-card {
        max-width: 200px;
        height: 300px;
      }

      .cards-container>article {
        min-width: 200px;
        max-width: 200px;
        justify-content: flex-start !important;
      }

      .car-card {
        max-width: 200px;
      }
    }




      /* Box-Wise (Squared) Pagination Styling */
.pagination-wrapper .pagination {
    display: flex;
    justify-content: center;
    gap: 8px; /* Spacing between boxes */
    padding: 0;
    list-style: none;
}

.pagination-wrapper .page-item {
    display: inline-block;
}

.pagination-wrapper .page-item .page-link {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 38px;  /* Fixed width for perfect squares */
    height: 38px; /* Fixed height for perfect squares */
    border: 1px solid #dee2e6;
    background-color: #ffffff;
    color: #444;
    font-size: 0.9rem;
    font-weight: 600;
    padding: 0; /* Let flex center the text */
    border-radius: 4px; /* Small radius for a "soft" box look */
    transition: all 0.2s ease;
    box-shadow: 0 2px 3px rgba(0,0,0,0.03);
}

/* Active Box */
.pagination-wrapper .page-item.active .page-link {
    background-color: #ffc107 !important; /* Your Warning Yellow */
    border-color: #ffc107 !important;
    color: #000 !important;
}

/* Hover Effect */
.pagination-wrapper .page-item .page-link:hover {
    background-color: #dc3545; /* Your Danger Red */
    border-color: #dc3545;
    color: #ffffff !important;
    transform: translateY(-1px);
}

/* Disabled/Arrow Boxes (Previous/Next) */
.pagination-wrapper .page-item.disabled .page-link {
    background-color: #f1f1f1;
    color: #ccc;
    cursor: not-allowed;
}
/* Box-Wise Pagination Style */
.pagination-wrapper .pagination {
    display: flex;
    justify-content: center;
    gap: 6px; /* Adds space between the boxes */
    padding: 0;
}

.pagination-wrapper .pagination li {
    list-style: none;
}

.pagination-wrapper .pagination li a,
.pagination-wrapper .pagination li span {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 35px;           /* Equal width */
    height: 35px;          /* Equal height for a square */
    border: 1px solid #ddd; /* Light grey box border */
    background-color: #fff;
    color: #d9534f;        /* Danger Red text */
    text-decoration: none;
    font-size: 0.85rem;
    font-weight: 600;
    border-radius: 4px;    /* Slightly rounded corners for a modern box look */
    transition: all 0.2s ease;
}

/* Active Box (Current Page) */
.pagination-wrapper .pagination li.active a,
.pagination-wrapper .pagination li.active span {
    background-color: #f0ad4e !important; /* Warning Yellow */
    border-color: #f0ad4e !important;
    color: #fff !important;
}

/* Hover Effect for Boxes */
.pagination-wrapper .pagination li a:hover {
    background-color: #d9534f; /* Danger Red Background */
    border-color: #d9534f;
    color: #fff !important;
}

/* Small adjustments for Arrow/Word boxes (Previous/Next) */
.pagination-wrapper .pagination li:first-child a,
.pagination-wrapper .pagination li:last-child a {
    width: auto;           /* Allow boxes with text to expand horizontally */
    padding: 0 12px;
}
  </style>
</head>

<body class="bg-gray-50 text-slate-900 font-sans">
  <!-- Navbar -->
  <?= view('navbar') ?>
  

  <!-- Hero Section -->
  <section class="hero w-full">
    <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="<?php echo base_url('assets/images/carousel1.png'); ?>" class="d-block w-100" alt="Himalayas">
          <div class="carousel-caption d-block">
            <h5 class="text-xl md:text-2xl">Discover the Himachal</h5>
            <p class="text-sm md:text-base">Embark on a thrilling adventure to the mountains.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img
            src="<?php echo base_url('assets/images/carousel2.png'); ?>"
            class="d-block w-100" alt="Beaches">
          <div class="carousel-caption d-block">
            <h5 class="text-xl md:text-2xl">Relax in Himanchal</h5>
            <p class="text-sm md:text-base">Explore the serene landscapes of Northeast India.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="<?php echo base_url('assets/images/carousel3.png'); ?>"
            class="d-block w-100" alt="Backwaters">
          <div class="carousel-caption d-block">
            <h5 class="text-xl md:text-2xl">Spiti Valley</h5>
            <p class="text-sm md:text-base">Discover the rugged beauty of the high-altitude desert.</p>
          </div>
        </div>
      </div>
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
  <!-- Section: Explore The Destinations -->
  <section class="w-full px-4 py-6 text-center select-none">
    <h2 class="text-xl md:text-2xl font-extrabold tracking-tight mb-1 leading-tight">Explore The <span
        class="text-red-600 underline cursor-default">Destinations</span> With Us!</h2>
    <p class="text-sm md:text-base text-gray-600 max-w-xl mx-auto leading-relaxed mb-6">Pack your bags and venture into
      your dreamland with top traveling support and arrangements, and leave all your worries behind</p>
    <div
      class="flex justify-start md:justify-center items-center space-x-4 overflow-x-auto hide-scrollbar py-4 px-2 snap-x snap-mandatory w-full">
      <div
        class="min-w-[200px] max-w-[200px] rounded-lg overflow-hidden relative shadow-lg cursor-pointer flex-shrink-0 snap-start">
        <img
          src="<?php echo base_url('assets/images/explore1.png'); ?>"
          alt="Darjeeling hill train" class="w-full h-full object-cover" loading="lazy"
          onerror="this.src='<?php echo base_url('assets/images/unavailable.png'); ?>';">
        <div class="absolute bottom-0 left-0 w-full bg-gradient-to-t from-black to-transparent p-3"><span
            class="text-white font-bold text-sm select-text">Darjeeling</span></div>
      </div>
      <div
        class="min-w-[200px] max-w-[200px] rounded-lg overflow-hidden relative shadow-lg cursor-pointer flex-shrink-0 snap-start">
        <img
          src="<?php echo base_url('assets/images/explore2.png'); ?>"
          alt="Sikkim mountain lake" class="w-full h-full object-cover" loading="lazy"
          onerror="this.src='<?php echo base_url('assets/images/unavailable.png'); ?>';">
        <div class="absolute bottom-0 left-0 w-full bg-gradient-to-t from-black to-transparent p-3"><span
            class="text-white font-bold text-sm select-text">Sikkim</span></div>
      </div>
      <div
        class="min-w-[200px] max-w-[200px] rounded-lg overflow-hidden relative shadow-lg cursor-pointer flex-shrink-0 snap-start">
        <img
          src="<?php echo base_url('assets/images/explore3.png'); ?>"
          alt="Dooars elephant" class="w-full h-full object-cover" loading="lazy"
          onerror="this.src='<?php echo base_url('assets/images/unavailable.png'); ?>';">
        <div class="absolute bottom-0 left-0 w-full bg-gradient-to-t from-black to-transparent p-3"><span
            class="text-white font-bold text-sm select-text">Dooars</span></div>
      </div>
      <div
        class="min-w-[200px] max-w-[200px] rounded-lg overflow-hidden relative shadow-lg cursor-pointer flex-shrink-0 snap-start">
        <img
          src="<?php echo base_url('assets/images/explore4.png'); ?>"
          alt="North East canoe" class="w-full h-full object-cover" loading="lazy"
          onerror="this.src='<?php echo base_url('assets/images/unavailable.png'); ?>';">
        <div class="absolute bottom-0 left-0 w-full bg-gradient-to-t from-black to-transparent p-3"><span
            class="text-white font-bold text-sm select-text">North East</span></div>
      </div>
      <div
        class="min-w-[200px] max-w-[200px] rounded-lg overflow-hidden relative shadow-lg cursor-pointer flex-shrink-0 snap-start">
        <img
          src="<?php echo base_url('assets/images/explore5.png'); ?>"
          alt="Assam leopard" class="w-full h-full object-cover" loading="lazy"
          onerror="this.src='<?php echo base_url('assets/images/unavailable.png'); ?>';">
        <div class="absolute bottom-0 left-0 w-full bg-gradient-to-t from-black to-transparent p-3"><span
            class="text-white font-bold text-sm select-text">Assam</span></div>
      </div>
      <div
        class="min-w-[200px] max-w-[200px] rounded-lg overflow-hidden relative shadow-lg cursor-pointer flex-shrink-0 snap-start">
        <img
          src="<?php echo base_url('assets/images/explore6.png'); ?>"
          alt="Meghalaya waterfalls" class="w-full h-full object-cover" loading="lazy"
          onerror="this.src='<?php echo base_url('assets/images/unavailable.png'); ?>';">
        <div class="absolute bottom-0 left-0 w-full bg-gradient-to-t from-black to-transparent p-3"><span
            class="text-white font-bold text-sm select-text">Meghalaya</span></div>
      </div>
    </div>
  </section>
  <!-- Section: How We Work -->
  <section class="relative bg-red-50 py-6 w-full ">
    <div class="flex justify-between itme-center md:flex-row flex-col md:gap-0 gap-6 px-10">
      <div class="md:w-1/3 flex flex-col justify-center">
        <span class="inline-flex items-center gap-2 text-2xl lg:text-3xl text-red-600 mb-2 font-semibold"><span
            class="w-2 h-2 rounded-full bg-red-400 block"></span>How We Work</span>
        <h2 class="text-lg lg:text-xl font-bold leading-snug text-gray-900 tracking-tight cursor-default">Turn Vacations
          Into<br>Unforgettable Chapters of Your Life Story<span class="text-red-600">.</span></h2>
      </div>
      <div class="md:w-2/3 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
        <div class="bg-white rounded-lg p-4 shadow-md border border-teal-300 hover:shadow-xl transition">
          <div class="flex items-center justify-between mb-2">
            <div class="flex items-center space-x-2 text-teal-600">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" stroke-width="2" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round"
                  d="M12 11c2.21 0 4-5 4-5s-1.79 2-4 2-4-2-4-2 1.79 5 4 5zM5.5 15h13M12 15v6" />
              </svg>
              <span class="font-bold text-lg tracking-wide">01</span>
            </div>
          </div>
          <h4 class="text-md font-semibold text-gray-800 mb-2 cursor-default">Feeling Secure, Supported…</h4>
          <p class="text-sm text-gray-600">A stress-free mindset where safety, comfort, and quick help are never in
            question.</p>
        </div>
        <div class="bg-white rounded-lg p-4 shadow-md border border-red-300 hover:shadow-xl transition">
          <div class="flex items-center justify-between mb-2">
            <div class="flex items-center space-x-2 text-red-600">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" stroke-width="2" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M8 7h8v8H8z" />
                <path stroke-linecap="round" stroke-linejoin="round" d="M3 12h1m16 0h1M12 3v1m0 16v1" />
              </svg>
              <span class="font-bold text-lg tracking-wide">02</span>
            </div>
          </div>
          <h4 class="text-md font-semibold text-gray-800 mb-2 cursor-default">Experiencing the Magic of ...</h4>
          <p class="text-sm text-gray-600">A travel experience so smooth it feels like a luxury film—no queues, no
            delays, no second-guessing—just freedom.</p>
        </div>
        <div class="bg-white rounded-lg p-4 shadow-md border border-purple-400 hover:shadow-xl transition">
          <div class="flex items-center justify-between mb-2">
            <div class="flex items-center space-x-2 text-purple-600">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" stroke-width="2" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round"
                  d="M12 18v-6m6 6v-4m-12 4v-2m18-10v2a4 4 0 01-4 4H8l-2 3H6v-1a3 3 0 013-3h7a3 3 0 003-3V4z" />
              </svg>
              <span class="font-bold text-lg tracking-wide">03</span>
            </div>
          </div>
          <h4 class="text-md font-semibold text-gray-800 mb-2 cursor-default">Gaining a Deeper...</h4>
          <p class="text-sm text-gray-600">Transformational travel that builds a richer and more soulful understanding
            of different cultures...</p>
        </div>
      </div>
    </div>
  </section>
  <!-- Gallery Section -->
  <section class="w-full min-h-[40vh] flex flex-col items-center justify-center py-6 px-4">
    <h1 class="text-3xl font-extrabold mb-6 text-gray-900 select-none">Gallery</h1>
    <div class="flex flex-wrap justify-center gap-4 md:gap-8 w-full">
      <div class="gallery-card flex flex-col items-center justify-center gap-4">
        <div class="image-layers"
          aria-label="Three layered photographs of misty green Himachal valley at sunrise and surroundings">
          <img
            src="<?php echo base_url('assets/images/gallary.png'); ?>"
            alt="Misty lush green mountain valley landscape with sunrise" class="image-layer1"
            onerror="this.style.display='none'" />
          <img
            src="<?php echo base_url('assets/images/gallary2.png'); ?>"
            alt="Hilly terrain with fog and greenery during sunrise" class="image-layer2"
            onerror="this.style.display='none'" />
          <img
            src="<?php echo base_url('assets/images/gallary3.png'); ?>"
            alt="Front image showing scenic mountain foothills with sunrise sky" class="image-layer3"
            onerror="this.style.display='none'" />
        </div>
        <span class="font-semibold text-lg  flex items-center text-gray-900 select-text">Himachal Memories</span>
      </div>
      <div class="gallery-card flex flex-col items-center justify-center gap-4">
        <div class="image-layers"
          aria-label="Layered photographs showing a vibrant traditional dancer in motion with fire sparks">
          <img
            src="<?php echo base_url('assets/images/gallary4.png'); ?>"
            alt="Vibrant reddish orange background with dancing sparks" class="image-layer1"
            onerror="this.style.display='none'" />
          <img
            src="<?php echo base_url('assets/images/gallary5.png'); ?>"
            alt="Warm glowing background with festive celebration theme" class="image-layer2"
            onerror="this.style.display='none'" />
          <img
            src="<?php echo base_url('assets/images/gallary6.png'); ?>"
            alt="Traditional dancer in red-yellow costume with fire sparks flying" class="image-layer3"
            onerror="this.style.display='none'" />
        </div>
        <span class="font-semibold text-lg  text-gray-900 select-text">Sikkim Escapes</span>
      </div>
      <div class="gallery-card flex flex-col items-center justify-center gap-4">
        <div class="image-layers"
          aria-label="Three overlapping photographs of old monument lush green garden setting with blue sky">
          <img
            src="<?php echo base_url('assets/images/gallary7.png'); ?>"
            alt="Warm brown layered background with cultural artifacts" class="image-layer1"
            onerror="this.style.display='none'" />
          <img
            src="<?php echo base_url('assets/images/gallary8.png'); ?>"
            alt="Light golden yellow layered background" class="image-layer2" onerror="this.style.display='none'" />
          <img
            src="<?php echo base_url('assets/images/gallary9.png'); ?>"
            alt="Front image showing an ancient monument with trimmed green garden and blue sky" class="image-layer3"
            onerror="this.style.display='none'" />
        </div>
        <span class="font-semibold text-lg text-gray-900 select-text">Cultural Functions</span>
      </div>
      <div class="gallery-card flex flex-col items-center justify-center gap-4">
        <div class="image-layers" aria-label="Layered images of urban lakeside temples with misty mountain backdrop">
          <img
            src="<?php echo base_url('assets/images/gallary10.png'); ?>"
            alt="Dark tonal urban background with buildings at lakeside" class="image-layer1"
            onerror="this.style.display='none'" />
          <img
            src="<?php echo base_url('assets/images/gallary11.png'); ?>"
            alt="Warm brown urban background layer" class="image-layer2" onerror="this.style.display='none'" />
          <img
            src="<?php echo base_url('assets/images/gallary12.png'); ?>"
            alt="Front image showing lakeside temple with pine-covered misty mountains beyond" class="image-layer3"
            onerror="this.style.display='none'" />
        </div>
        <span class="font-semibold text-lg text-gray-900 select-text">Urban Escapes</span>
      </div>
    </div>
  </section>

  <!-- Tour Packages Section -->
  <main class="w-full px-4 py-6">
    <div class="flex items-center justify-center mb-4">
      <h2 class="text-2xl font-extrabold text-gray-900">Best Selling <span class="text-orange-700">Tour Packages</span>
      </h2>
    </div>
    <div
      class="cards-container flex justify-start md:justify-center items-center gap-4 overflow-x-auto scroll-smooth scrollbar-hide snap-x snap-mandatory w-full px-4 md:px-0">
        <?php foreach ($tourDetails as $index => $tourDetail): ?>
        
          <article
            class="card bg-white rounded-lg shadow-md min-w-[250px] max-w-[250px] flex flex-col hover:shadow-lg transition-transform duration-300 snap-start">
            <div class="rounded-t-lg overflow-hidden">
              <img
                src="<?php echo base_url('assets/images/selling1.png'); ?>"
                alt="Sunset view of mountain peaks" class="w-full h-44 object-cover" loading="lazy"
                onerror="this.src='https://placehold.co/250x180?text=Image+Not+Available';">
              <span
                class="absolute top-3 left-3 bg-blue-600 text-white text-xs font-semibold px-2 py-0.5 rounded inline-flex items-center gap-1 select-none"><svg
                  xmlns="http://www.w3.org/2000/svg" class="w-3 h-3" fill="none" stroke="currentColor" stroke-width="2"
                  viewBox="0 0 24 24">
                  <path stroke-linejoin="round" stroke-linecap="round" d="M12 2l3 7h7l-5.65 4 2 8-7-5-7 5 2-8L2 9h7l3-7z" />
                </svg>Best Seller</span>
            </div>
            <div class="p-4 flex flex-col flex-grow">
              <span class="text-xs text-gray-600 mb-1">Adventure Tours, Honeymoon Tours, Hill station Tours</span>
              <h3 class="font-semibold text-gray-900 text-lg leading-tight mb-1">Your Ultimate Gangtok...</h3>
              <div class="flex items-center text-gray-600 text-sm mb-2 gap-2"><svg xmlns="http://www.w3.org/2000/svg"
                  class="icon-small w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                  <path stroke-linejoin="round" stroke-linecap="round" d="M12 2v10m4-4l-4 4-4-4" />
                </svg><span>Sikkim, Darjeeling</span></div>
              <div class="text-orange-700 font-semibold mb-3">From ₹ 27,000/Person</div>
              <div class="flex items-center justify-center text-gray-600 text-xs flex-col">
                <button class="btn-enquiry py-1.5 px-4 rounded-full text-sm">Book Now</button>
              </div>
            </div>
          </article>
          
        <?php endforeach; ?>
          
          <article
            class="card bg-white rounded-lg shadow-md min-w-[250px] max-w-[250px] flex flex-col hover:shadow-lg transition-transform duration-300 snap-start">
            <div class="relative rounded-t-lg overflow-hidden">
              <img
                src="<?php echo base_url('assets/images/selling2.png'); ?>"
                alt="Mountain range at sunset" class="w-full h-44 object-cover" loading="lazy"
                onerror="this.src='https://placehold.co/250x180?text=Image+Not+Available';">
              <span
                class="absolute top-3 left-3 bg-blue-600 text-white text-xs font-semibold px-2 py-0.5 rounded inline-flex items-center gap-1 select-none"><svg
                  xmlns="http://www.w3.org/2000/svg" class="w-3 h-3" fill="none" stroke="currentColor" stroke-width="2"
                  viewBox="0 0 24 24">
                  <path stroke-linejoin="round" stroke-linecap="round" d="M12 2l3 7h7l-5.65 4 2 8-7-5-7 5 2-8L2 9h7l3-7z" />
                </svg>Best Seller</span>
            </div>
            <div class="p-4 flex flex-col flex-grow">
              <span class="text-xs text-gray-600 mb-1">Adventure Tours, Honeymoon Tours, Hill station Tours</span>
              <h3 class="font-semibold text-gray-900 text-lg leading-tight mb-1">03 Nights 04 Days Darjeeling...</h3>
              <div class="flex items-center text-gray-600 text-sm mb-2 gap-2"><svg xmlns="http://www.w3.org/2000/svg"
                  class="icon-small w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                  <path stroke-linejoin="round" stroke-linecap="round" d="M12 2v10m4-4l-4 4-4-4" />
                </svg><span>Darjeeling</span></div>
              <div class="text-orange-700 font-semibold mb-3">From ₹ 13,000/Person</div>
              <div class="flex items-center justify-center text-gray-600 text-xs flex-col">
                <button class="btn-enquiry py-1.5 px-4 rounded-full text-sm">Book Now</button>
              </div>
            </div>
          </article>
          <article
            class="card bg-white rounded-lg shadow-md min-w-[250px] max-w-[250px] flex flex-col hover:shadow-lg transition-transform duration-300 snap-start">
            <div class="relative rounded-t-lg overflow-hidden">
              <img
                src="<?php echo base_url('assets/images/selling3.png'); ?>"
                alt="Golden Buddha monument" class="w-full h-44 object-cover" loading="lazy"
                onerror="this.src='https://placehold.co/250x180?text=Image+Not+Available';">
              <span
                class="absolute top-3 left-3 bg-blue-600 text-white text-xs font-semibold px-2 py-0.5 rounded inline-flex items-center gap-1 select-none"><svg
                  xmlns="http://www.w3.org/2000/svg" class="w-3 h-3" fill="none" stroke="currentColor" stroke-width="2"
                  viewBox="0 0 24 24">
                  <path stroke-linejoin="round" stroke-linecap="round" d="M12 2l3 7h7l-5.65 4 2 8-7-5-7 5 2-8L2 9h7l3-7z" />
                </svg>Best Seller</span>
            </div>
            <div class="p-4 flex flex-col flex-grow">
              <span class="text-xs text-gray-600 mb-1">Honeymoon Tours, Spiritual Tour, Hill station Tour</span>
              <h3 class="font-semibold text-gray-900 text-lg leading-tight mb-1">03 Nights 04 Days Darjeeling...</h3>
              <div class="flex items-center text-gray-600 text-sm mb-2 gap-2"><svg xmlns="http://www.w3.org/2000/svg"
                  class="icon-small w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                  <path stroke-linejoin="round" stroke-linecap="round" d="M12 2v10m4-4l-4 4-4-4" />
                </svg><span>Darjeeling</span></div>
              <div class="text-orange-700 font-semibold mb-3">From ₹ 13,000/Person</div>
              <div class="flex items-center justify-center text-gray-600 text-xs flex-col">
                <button class="btn-enquiry py-1.5 px-4 rounded-full text-sm">Book Now</button>
              </div>
            </div>
          </article>
    
          <article
            class="card bg-white rounded-lg shadow-md min-w-[250px] max-w-[250px] flex flex-col hover:shadow-lg transition-transform duration-300 snap-start">
            <div class="relative rounded-t-lg overflow-hidden">
              <img
                src="<?php echo base_url('assets/images/selling4.png'); ?>"
                alt="Bright snow mountain with blue lake" class="w-full h-44 object-cover" loading="lazy"
                onerror="this.src='https://placehold.co/250x180?text=Image+Not+Available';">
              <span
                class="absolute top-3 left-3 bg-blue-600 text-white text-xs font-semibold px-2 py-0.5 rounded inline-flex items-center gap-1 select-none"><svg
                  xmlns="http://www.w3.org/2000/svg" class="w-3 h-3" fill="none" stroke="currentColor" stroke-width="2"
                  viewBox="0 0 24 24">
                  <path stroke-linejoin="round" stroke-linecap="round" d="M12 2l3 7h7l-5.65 4 2 8-7-5-7 5 2-8L2 9h7l3-7z" />
                </svg>Best Seller</span>
            </div>
            <div class="p-4 flex flex-col flex-grow">
              <span class="text-xs text-gray-600 mb-1">Adventure Tours, Honeymoon Tours, Hill station Tours</span>
              <h3 class="font-semibold text-gray-900 text-lg leading-tight mb-1">The Himalayan Kingdom 7...</h3>
              <div class="flex items-center text-gray-600 text-sm mb-2 gap-2"><svg xmlns="http://www.w3.org/2000/svg"
                  class="icon-small w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                  <path stroke-linejoin="round" stroke-linecap="round" d="M12 2v10m4-4l-4 4-4-4" />
                </svg><span>Sikkim</span></div>
              <div class="text-orange-700 font-semibold mb-3">From ₹ 22,000/Person</div>
              <div class="flex items-center justify-center text-gray-600 text-xs flex-col">
                <button class="btn-enquiry py-1.5 px-4 rounded-full text-sm">Book Now</button>
              </div>
            </div>
          </article>
    </div>

  </main>
  <!-- Featured Car Packages Section -->
  <section aria-labelledby="featured-car-packages-title" class="w-full py-6 px-4">
    <h2 id="featured-car-packages-title" class="text-2xl font-extrabold text-center text-gray-900 mb-4">FEATURED CAR
      PACKAGES</h2>
    <div class="car-package-container flex gap-4 w-full" role="list">
      <article class="car-card bg-white rounded-lg shadow-md" role="listitem" tabindex="0"
        aria-label="Toyota Etios car package">
        <div class="car-image-wrapper"><img
            src="<?php echo base_url('assets/images/car1.png'); ?>"
            alt="Toyota Etios" loading="lazy" /></div>
        <div class="car-info p-4">
          <h3 class="font-semibold text-lg">TOYOTA ETIOS</h3>
          <p class="price text-orange-700 font-semibold">Rs. 3,000/-Day</p>
          <p class="details text-sm text-gray-600">For 6 Days Booking. Driver, Fuel, Toll & Parking Included.</p>
        </div>
      </article>
      <article class="car-card bg-white rounded-lg shadow-md" role="listitem" tabindex="0"
        aria-label="Swift Dezire car package">
        <div class="car-image-wrapper"><img
            src="<?php echo base_url('assets/images/car2.png'); ?>"
            alt="Swift Dezire" loading="lazy" /></div>
        <div class="car-info p-4">
          <h3 class="font-semibold text-lg">SWIFT DEZIRE</h3>
          <p class="price text-orange-700 font-semibold">Rs. 3,000/-Day</p>
          <p class="details text-sm text-gray-600">For 6 Days Booking. Driver, Fuel, Toll & Parking Included.</p>
        </div>
      </article>
      <article class="car-card bg-white rounded-lg shadow-md" role="listitem" tabindex="0"
        aria-label="Innova Crysta car package">
        <div class="car-image-wrapper"><img
            src="<?php echo base_url('assets/images/car3.png'); ?>"
            alt="Innova Crysta" loading="lazy" /></div>
        <div class="car-info p-4">
          <h3 class="font-semibold text-lg">INNOVA CRYSTA</h3>
          <p class="price text-orange-700 font-semibold">Rs. 5,500/-Day</p>
          <p class="details text-sm text-gray-600">For 6 Days Booking. Driver, Fuel, Toll & Parking Included.</p>
        </div>
      </article>
      <article class="car-card bg-white rounded-lg shadow-md" role="listitem" tabindex="0"
        aria-label="Maruti Ertiga car package">
        <div class="car-image-wrapper"><img
            src="<?php echo base_url('assets/images/car4.png'); ?>"
            alt="Maruti Ertiga" loading="lazy" /></div>
        <div class="car-info p-4">
          <h3 class="font-semibold text-lg">MARUTI ERTIGA</h3>
          <p class="price text-orange-700 font-semibold">Rs. 4,500/-Day</p>
          <p class="details text-sm text-gray-600">For 6 Days Booking. Driver, Fuel, Toll & Parking Included.</p>
        </div>
      </article>
    </div>
  </section>
  <!-- Contact Section -->
  <main class="w-full px-4 py-6 grid grid-cols-1 md:grid-cols-5 gap-4">
    <!-- Left: Contact Info -->
    <section class="md:col-span-3 bg-white rounded-lg shadow p-6 sm:p-8">
      <h2 class="text-2xl sm:text-3xl font-bold mb-4 text-gray-800">Reach Out to Our Dedicated Support Team</h2>
      <p class="font-medium text-gray-700 mb-1">Our team is ready to help. Your satisfaction is our priority.</p>
      <p class="mb-6 text-gray-600 text-sm sm:text-sm">
        Got a question, need advice, or looking for help? Our knowledgeable team is here to assist you every step of the
        way. We’re just a message or call away, ready to provide the guidance you need.
      </p>

      <div class="divide-y divide-gray-200">
        <!-- Email -->
        <div class="flex items-center gap-4 py-4">
          <div class="flex justify-center items-center w-12 h-12 bg-gray-100 rounded-full shrink-0">
            <!-- Email icon (generic arrow icon replaced for better clarity) -->
            <svg class="w-6 h-6 text-red-500" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor"
              stroke-width="2" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M16 12l-4-4-4 4m0 0l4 4 4-4m-4-8v16"></path>
            </svg>
          </div>
          <div class="flex-1 min-w-0">
            <p class="text-base sm:text-xl text-gray-500">Email Address</p>
            <p class="font-semibold md:text-2xl text-md text-gray-800 select-all break-words">
              atmathakur87@gmail.com
            </p>
          </div>
        </div>

        <!-- Phone -->
        <div class="flex items-center gap-4 py-4">
          <div class="flex justify-center items-center w-12 h-12 bg-gray-100 rounded-full shrink-0">
            <svg class="w-6 h-6 text-red-500" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor"
              stroke-width="2" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M3 5a2 2 0 012-2h3.6a2 2 0 012 1.72c.042.326.042.659 0 .986L8 9l-3 3 .987 1.006c.176.182.44.263.7.263H7a2 2 0 012-2v-1a3 3 0 00-3-3H5a2 2 0 01-2-2z">
              </path>
              <path stroke-linecap="round" stroke-linejoin="round" d="M16 15l-3-3"></path>
              <path stroke-linecap="round" stroke-linejoin="round" d="M21 17l-4-4"></path>
            </svg>
          </div>
          <div>
            <p class="text-xl text-gray-500">Phone Number</p>
               <p class="font-semibold md:text-2xl text-md text-gray-800 select-all">
    <a href="tel:+918091160915" style="text-decoration:none; font-weight:700;">+91 8091160915</a>, 
    <a href="tel:+917876027997" style="text-decoration:none; font-weight:700;">+91 7876027997</a>, 
    <a href="tel:+918091925535" style="text-decoration:none; font-weight:700;">+91 8091925535</a>
</p>
          </div>
        </div>

        <!-- Location -->
        <div class="flex items-center gap-4 py-4">
          <div class="flex justify-center items-center w-12 h-12 bg-gray-100 rounded-full shrink-0">
            <svg class="w-6 h-6 text-red-500" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor"
              stroke-width="2" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M12 11c1.657 0 3-1.343 3-3S13.657 5 12 5 9 6.343 9 8s1.343 3 3 3z"></path>
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M12 22s8-4.5 8-10.5S16.5 3 12 3 4 7.5 4 11.5 12 22 12 22z"></path>
            </svg>
          </div>
          <div>
            <p class="text-xl text-gray-500">Our Location</p>
           <p class="font-semibold md:text-2xl text-md text-gray-800">RAM BAZAR ( NEAR RAM MANDIR ), SHIMLA H.P Pin Code : 171001</p>
          </div>
        </div>

        <!-- Google Map -->
        <div class="flex items-center gap-4 py-4">
          <div class="flex justify-center items-center w-12 h-12 bg-gray-100 rounded-full shrink-0">
            <svg class="w-6 h-6 text-red-500" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor"
              stroke-width="2" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553-2.276A1 1 0 0021 13.618V2.382a1 1 0 00-1.447-.894L15 4m0 13V4m0 0L9 7">
              </path>
            </svg>
          </div>
          <div class='flex-1'>
            <p class="md:text-2xl text-md text-gray-500 ">Find Us on Map</p>
            <iframe
    class="w-full h-64 rounded-lg shadow-sm"
    src="https://www.google.com/maps?q=Ram+Bazar+Shimla+Himachal+Pradesh&output=embed"
    allowfullscreen
    loading="lazy"
    referrerpolicy="no-referrer-when-downgrade">
</iframe>
          </div>
        </div>
      </div>
    </section>

    <!-- Right: Contact form -->
    <section class="md:col-span-2 bg-white p-6 rounded-lg shadow w-full mx-0">
      <h2 class="text-2xl font-bold mb-3">Get in Touch</h2>
      <p class="mb-6 text-gray-700 text-lg">How we can help you? Please write down your query</p>
       <?php if (session()->getFlashdata('success')): ?>
              <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
            <?php endif; ?>
            
            <?php if (session()->getFlashdata('error')): ?>
              <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
            <?php endif; ?>
            
            <?php if (isset($errors) && is_array($errors)): ?>
              <div class="alert alert-danger">
                <?php foreach ($errors as $err) echo "<p>$err</p>"; ?>
              </div>
            <?php endif; ?>
      <form id="contact-form" class="space-y-4"  action="<?php echo base_url('contact/save'); ?>" method="post">
        <div class=" margin-2">
          <div class="flex-1">
            <label for="fullname" class="block text-xl font-semibold mb-1">Full Name <span aria-label="required"
                class="text-red-600">*</span></label>
            <input type="text" id="fullname" name="fullname" required
              class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-orange-400"
              placeholder="Your full name" />
          </div>
          <div class="flex-1">
            <label for="email" class="block text-xl font-semibold mb-1">Email</label>
            <input type="email" id="email" name="email"
              class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-orange-400"
              placeholder="name@example.com" />
          </div>
        </div>
        <div class="">
          <div class="flex-1">
            <label for="phone" class="block text-xl font-semibold mb-1">Phone <span aria-label="required"
                class="text-red-600">*</span></label>
            <input type="tel" id="phone" name="phone" required
              class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-orange-400"
              placeholder="+91 1234567890" />
          </div>
          <div class="flex-1">
            <label for="subject" class="block text-xl font-semibold mb-1">Subject</label>
            <input type="text" id="subject" name="subject"
              class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-orange-400"
              placeholder="Subject of your query" />
          </div>
        </div>
        <div>
          <label for="message" class="block text-xl font-semibold mb-1">Message</label>
          <textarea id="message" name="message" rows="4"
            class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-orange-400"
            placeholder="Write your message here..."></textarea>
        </div>
        <div class='flex justify-center items-center'>
          <button type="submit"
            class="bg-orange-600 text-white  rounded px-5 py-2 font-semibold hover:bg-orange-700 transition">Send Enquiry</button>
        </div>
      </form>
    </section>


    
  </main>
  
      <section class="py-5" id="reviews">
      <div class="container">
          <div class="row g-4">
              <div class="col-md-4">
                  <div class="card shadow-sm border-0 p-3 " style="position: sticky; top: 20px;padding-bottom: 35px !important;">
                      <h5 class="fw-bold mb-3 border-bottom pb-2" style="font-size: 1.1rem;">Write your valuable Review</h5>
                      <form action="<?= base_url('ReviewController/save') ?>" method="post" class="small"> 
                          <div class="mb-2">
                              <label class="form-label mb-1 fw-semibold">Full Name</label>
                              <input type="text" name="name" class="form-control form-control-sm" placeholder="John Doe" required>
                          </div>
                          <div class="mb-2">
                              <label class="form-label mb-1 fw-semibold">Email Address</label>
                              <input type="email" name="email" class="form-control form-control-sm" placeholder="john@example.com" required>
                          </div>
                          <div class="mb-2">
                              <label class="form-label mb-1 fw-semibold">Rating</label>
                              <select name="rating" class="form-select form-select-sm" required>
                                  <option value="5">⭐⭐⭐⭐⭐ (Excellent)</option>
                                  <option value="4">⭐⭐⭐⭐ (Very Good)</option>
                                  <option value="3">⭐⭐⭐ (Average)</option>
                                  <option value="2">⭐⭐ (Poor)</option>
                                  <option value="1">⭐ (Terrible)</option>
                              </select>
                          </div>
                          <div class="mb-3">
                              <label class="form-label mb-1 fw-semibold">Comment</label>
                              <textarea name="comment" class="form-control form-control-sm" rows="3" placeholder="Share your experience..." required></textarea>
                          </div>
                          <button type="submit" class="btn btn-warning btn-sm w-100 fw-bold shadow-sm">Post Review</button>
                      </form>
                  </div>
              </div>
  
              <div class="col-md-8">
                  <div class="d-flex justify-content-between align-items-center mb-3">
                      <h5 class="fw-bold mb-0" style="font-size: 1.1rem;">Customer Feedback</h5>
                      <span class="badge bg-danger rounded-pill px-3 py-2 shadow-sm" style="font-size: 0.75rem;">
                          <i class="bi bi-chat-left-dots me-1"></i> <?= $pager->getTotal('group1') ?> Total Reviews
                      </span>
                  </div>
                  
                  <div class="review-list">
                      <?php if (!empty($reviews)): ?>
                          <?php foreach ($reviews as $r): ?>
                              <div class="card mb-2 shadow-sm border-0 border-start border-warning border-4">
                                  <div class="card-body py-2 px-3">
                                      <div class="d-flex justify-content-between align-items-center mb-1">
                                          <h6 class="fw-bold mb-0 text-danger" style="font-size: 0.9rem;"><?= esc($r['name']) ?></h6>
                                          <div class="text-warning" style="font-size: 23px;">
                                              <?php for($i=1; $i<=5; $i++): ?>
                                                  <?= ($i <= $r['rating']) ? '★' : '☆'; ?>
                                              <?php endfor; ?>
                                          </div>
                                      </div>
                                      <p class="mb-1 text-muted fst-italic small">"<?= esc($r['comment']) ?>"</p>
                                      <div class="text-end border-top pt-1 mt-1" style="font-size: 0.65rem; color: #bbb;">
                                          <i class="bi bi-calendar-check me-1"></i><?= date('M d, Y', strtotime($r['created_at'])) ?>
                                      </div>
                                  </div>
                              </div>
                          <?php endforeach; ?>
                      <?php else: ?>
                          <div class="text-center py-4 bg-white rounded shadow-sm">
                              <p class="small text-muted mb-0">No reviews yet. Be the first to write one!</p>
                          </div>
                      <?php endif; ?>
                  </div>
  
                  <div class="pagination-wrapper mt-4">
                      <?= $pager->links('group1', 'reviews_pager') ?>
                  </div>
              </div>
          </div>
      </div>
  </section>


<div class="modal fade" id="statusMessageModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm">
        <div class="modal-content border-0 shadow-lg text-center rounded-4">
            <div class="modal-body p-5">
                <?php if (session()->getFlashdata('success')): ?>
                    <div class="mb-4">
                        <i class="fa fa-check-circle text-success" style="font-size: 4rem;"></i>
                    </div>
                    <h4 class="fw-bold">Success!</h4>
                    <p class="text-muted small"><?= session()->getFlashdata('success') ?></p>
                <?php endif; ?>

                <?php if (session()->getFlashdata('error')): ?>
                    <div class="mb-4">
                        <i class="fa fa-times-circle text-danger" style="font-size: 4rem;"></i>
                    </div>
                    <h4 class="fw-bold">Oops!</h4>
                    <p class="text-muted small"><?= session()->getFlashdata('error') ?></p>
                <?php endif; ?>

                <button type="button" class="btn btn-dark w-100 rounded-pill mt-3 shadow-sm" data-bs-dismiss="modal">Continue</button>
            </div>
        </div>
    </div>
</div>

<!-- Travel Quote Modal -->
  <div class="modal fade" id="travelQuoteModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
      <div class="modal-content rounded-4 overflow-hidden">
        <!-- Close Button -->
        <button type="button" class="btn-close position-absolute end-0 m-3 z-3" data-bs-dismiss="modal"
          aria-label="Close"></button>
        <div class="row g-0 flex-column flex-lg-row">
          <div class="col-lg-7 bg-white p-4">
            <h4 class="mb-4 fw-bold text-center text-primary">📍 WHERE DO YOU WANT TO GO?</h4>
             
            
            <?php if (session()->getFlashdata('success')): ?>
              <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
            <?php endif; ?>
            
            <?php if (session()->getFlashdata('error')): ?>
              <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
            <?php endif; ?>
            
            <?php if (isset($errors) && is_array($errors)): ?>
              <div class="alert alert-danger">
                <?php foreach ($errors as $err) echo "<p>$err</p>"; ?>
              </div>
            <?php endif; ?>

            <form action="<?= base_url('enquiry/send') ?>" method="post" id="send_enquiry_form">
              <div class="row g-2 mb-3">
                <div class="col-md-6"><input type="date" class="form-control" name="arrival_date" required></div>
                <div class="col-md-6"><input type="text" class="form-control" name="name" placeholder="Full Name" required></div>
              </div>
              <div class="row g-2 mb-3">
                <div class="col-md-6"><input type="tel" class="form-control" name="phone" placeholder="Contact Number" required></div>
                <div class="col-md-6"><input type="email" class="form-control" name="email" placeholder="Email ID" required></div>
              </div>
              <div class="row g-2 mb-3">
                <div class="col-md-6">
                  <input type="text" class="form-control" name="members" placeholder="How many members" required>
                  <!-- <select class="form-select" name="members" required>
                    <option selected disabled>No. of Member</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4+">4+</option>
                  </select> -->
                </div>
                <div class="col-md-6">
                   <input type="text" class="form-control" name="destination" placeholder="Destination" required>
                  <!-- <select class="form-select" name="destination" required>
                    <option selected disabled>Select Destination</option>
                    <option value="Assam">Assam</option>
                    <option value="Darjeeling">Darjeeling</option>
                    <option value="Dooars">Dooars</option>
                    <option value="Kashmir">Kashmir</option>
                    <option value="Kerala">Kerala</option>
                    <option value="Ladakh">Ladakh</option>
                  </select> -->
                </div>
              </div>
              <div class="mb-3"><textarea class="form-control" rows="3" name="message" placeholder="Message Here" required></textarea></div>
              <div class="row g-2 mb-3 align-items-center">
                <div class="col-4">
                  <div class="bg-dark text-white text-center py-2 rounded"><span class="first_dynamic_number"></span>+<span class="second_dynamic_number"></span></div>
                </div>
                <div class="col-8"><input type="text" class="form-control user-answer" name="both_answer" placeholder="Enter Answer " required></div>
              </div>
              <button type="submit" class="btn btn-success w-100 rounded-pill send_enquiry_btn">Send Enquiry</button>
            </form>
             
            
            
          </div>
          <div class="col-lg-5 bg-light p-4 d-flex flex-column justify-content-between">
            <div>
              <h5 class="fw-bold text-dark">Ready for your next adventure?</h5>
              <ul class="list-unstyled mt-3">
                <li>✅ Free Consultation by Experts</li>
                <li>🚫 No Spam Calls / Data Sharing</li>
                <li>🌍 Only Authentic Destination Insights</li>
              </ul>
              <div class="d-flex justify-content-around mt-4">
                <div class="text-center"><img src="<?php echo base_url('assets/images/pop1.png') ?>"
                    height="32">
                  <div class="fw-bold">5000+</div><small>Happy Travellers</small>
                </div>
                <div class="text-center"><img src="<?php echo base_url('assets/images/pop2.png') ?>" height="32">
                  <div class="fw-bold">4.3★</div><small>Star Reviews</small>
                </div>
                <div class="text-center"><img src="<?php echo base_url('assets/images/pop1.png') ?>"
                    alt="World map icon" height="32">
                  <div class="fw-bold">200+</div><small>Itineraries</small>
                </div>
              </div>
            </div>
            <div class="text-center mt-4">
              <div class="fw-bold fs-6 mb-2">📞 Call us for more details</div>
              <a href="tel:+918617695749" class="btn btn-primary w-100"> +91 8091160915</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- Footer -->
  <?= view('footer') ?>


  <!-- <script>
    document.addEventListener("DOMContentLoaded", function () { const travelModal = new bootstrap.Modal(document.getElementById('travelQuoteModal')); setTimeout(() => travelModal.show(), 1000); });
    document.getElementById('contact-btn').addEventListener('click', function (event) { event.preventDefault(); window.location.href = '<?= base_url('contact'); ?>'; });
    const container = document.querySelector(".cards-container"); const indicators = document.querySelectorAll(".carousel-indicators div"); container.addEventListener("scroll", () => { const scrollLeft = container.scrollLeft; const maxScroll = container.scrollWidth - container.clientWidth; let activeIndex = 0; if (scrollLeft < maxScroll / 3) activeIndex = 0; else if (scrollLeft < maxScroll * 2 / 3) activeIndex = 1; else activeIndex = 2; indicators.forEach((ind, idx) => { ind.classList.toggle("active", idx === activeIndex); ind.classList.toggle("w-6", idx === activeIndex); ind.classList.toggle("w-3", idx !== activeIndex); ind.classList.toggle("bg-orange-700", idx === activeIndex); ind.classList.toggle("bg-gray-400", idx !== activeIndex); }); });
  </script> -->

  <script>
document.addEventListener("DOMContentLoaded", function () {
    // --- 1. SESSION STORAGE LOGIC (For the Travel Form) ---
    const modalShown = sessionStorage.getItem('hasSeenModal');
    if (!modalShown) {
        const travelModalElement = document.getElementById('travelQuoteModal');
        if (travelModalElement) {
            const travelModal = new bootstrap.Modal(travelModalElement);
            setTimeout(() => {
                travelModal.show();
                sessionStorage.setItem('hasSeenModal', 'true');
            }, 1000);
        }
    }

    // --- 2. STATUS POPUP LOGIC (For Success/Error Messages) ---
    // Check if the PHP session has flashdata
    <?php if (session()->getFlashdata('success') || session()->getFlashdata('error')): ?>
        const statusModalElement = document.getElementById('statusMessageModal');
        if (statusModalElement) {
            const statusModal = new bootstrap.Modal(statusModalElement);
            statusModal.show();
        }
    <?php endif; ?>
});
</script>

  <script>
    // document.addEventListener("DOMContentLoaded", function () {
    //     // 1. Check if the modal has already been shown in this session
    //     const modalShown = sessionStorage.getItem('hasSeenModal');

    //     if (!modalShown) {
    //         const travelModalElement = document.getElementById('travelQuoteModal');
            
    //         // Ensure the element exists before trying to trigger it
    //         if (travelModalElement) {
    //             const travelModal = new bootstrap.Modal(travelModalElement);
                
    //             // Show the modal after 1 second
    //             setTimeout(() => {
    //                 travelModal.show();
    //                 // 2. Set the session flag so it doesn't show again until tab is closed
    //                 sessionStorage.setItem('hasSeenModal', 'true');
    //             }, 1000);
    //         }
    //     }
    // });

    // Your existing contact button logic
    document.getElementById('contact-btn').addEventListener('click', function (event) { 
        event.preventDefault(); 
        window.location.href = '<?= base_url('contact'); ?>'; 
    });

    // Your existing carousel indicators logic
    const container = document.querySelector(".cards-container"); 
    const indicators = document.querySelectorAll(".carousel-indicators div"); 
    if (container) {
        container.addEventListener("scroll", () => { 
            const scrollLeft = container.scrollLeft; 
            const maxScroll = container.scrollWidth - container.clientWidth; 
            let activeIndex = 0; 
            if (scrollLeft < maxScroll / 3) activeIndex = 0; 
            else if (scrollLeft < maxScroll * 2 / 3) activeIndex = 1; 
            else activeIndex = 2; 
            indicators.forEach((ind, idx) => { 
                ind.classList.toggle("active", idx === activeIndex); 
                ind.classList.toggle("w-6", idx === activeIndex); 
                ind.classList.toggle("w-3", idx !== activeIndex); 
                ind.classList.toggle("bg-orange-700", idx === activeIndex); 
                ind.classList.toggle("bg-gray-400", idx !== activeIndex); 
            }); 
        });
    }
</script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url('assets/js/custom.js') ?>"></script>

  <script>
  $(document).ready(function(){

    let num1 = 0, num2 = 0;

    function generateNumbers() {
        num1 = Math.floor(Math.random() * 10) + 1;
        num2 = Math.floor(Math.random() * 10) + 1;

        $('.first_dynamic_number').text(num1);
        $('.second_dynamic_number').text(num2);

        $('.user-answer').val('');
    }

    generateNumbers();

    // Handle submit
    $('#send_enquiry_form').submit(function(event){
        event.preventDefault(); // Prevent default form submission

        let allFilled = true;

        // Check if all inputs are filled
        $(this).find('input[required]').each(function(){
            if($(this).val().trim() === ''){
                allFilled = false;
                $(this).focus();
                alert("⚠️ Please fill all required fields.");
                return false; // Break out of each loop
            }
        });

        if(!allFilled) return; // Stop if any field is empty

        // Check math answer
        let userAnswer = parseInt($('.user-answer').val());
        if(userAnswer !== (num1 + num2)){
            alert("❌ Wrong math answer! Try again.");
            $('.user-answer').focus();
            return; // Stop submission
        }

        // If all validations pass
       // alert("✅ All fields correct! Form submitted.");
        // Uncomment the next line to actually submit the form
        this.submit();
    });

});

  </script>


</body>

</html>
