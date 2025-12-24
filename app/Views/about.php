<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>About Us - Thari Tour and Travel</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    /* Custom gradient border for slider images */
    .gradient-border {
      background: linear-gradient(135deg, #db2777, #8b5cf6);
      padding: 4px;
      border-radius: 1rem;
      transition: background 0.3s ease;
    }

    .gradient-border:hover {
      background: linear-gradient(135deg, #8b5cf6, #f43f5e);
    }

    .slider-image {
      border-radius: 0.75rem;
      object-fit: cover;
      width: 100%;
      height: 100%;
      transition: transform 0.3s ease;
      box-shadow: 0 6px 12px rgb(0 0 0 / 0.1);
    }

    .slider-image:hover {
      transform: scale(1.05);
      box-shadow: 0 10px 20px rgb(0 0 0 / 0.15);
    }

    /* Scrollbar hide */
    .scrollbar-hide::-webkit-scrollbar {
      display: none;
    }

    .scrollbar-hide {
      -ms-overflow-style: none;
      scrollbar-width: none;
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
      .slider-container {
        padding-top: 50%; /* Adjusted aspect ratio for mobile */
        margin-top: 1rem; /* Reduced top space */
        margin-bottom: 1rem; /* Reduced bottom space */
      }

      .slider-image {
        height: 180px; /* Slightly reduced height for mobile */
      }

      .decorative-lines {
        display: none;
      }

      .testimonial-card {
        width: 100%;
        max-width: 300px;
      }

      .dot {
        width: 2.5rem;
        height: 0.5rem;
        border-radius: 0.25rem;
      }
    }

    @media (min-width: 769px) {
      .slider-container {
        padding-top: 60%; /* Wider aspect ratio for desktop */
        margin-top: 2rem;
        margin-bottom: 2rem;
      }

      .slider-image {
        height: 100%;
      }
    }
  </style>
</head>

<body class="bg-white text-gray-700 font-sans leading-relaxed selection:bg-pink-400 selection:text-white">
  <!-- Navbar -->
  <?= view('navbar') ?>

  <!-- Hero header -->
  <header class="relative w-full min-h-[220px] bg-cover bg-center bg-no-repeat" style="background-image: url('<?php echo base_url('assets/images/about1.png'); ?>');">
    <div class="w-full h-full bg-black bg-opacity-50 flex flex-col justify-center items-center">
      <h1 class="text-white text-3xl sm:text-4xl md:text-5xl font-extrabold drop-shadow-lg select-none">About Us</h1>
      <nav class="mt-2">
        <ul class="inline-flex items-center space-x-3 text-gray-300 text-sm select-none">
          <li><a href="/" class="hover:underline">Home</a></li>
          <li><span>›</span></li>
          <li>About Us</li>
        </ul>
      </nav>
    </div>
  </header>

  <main class="max-w-7xl mx-auto px-1 relative">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-5 items-center">
      <!-- Left image slider -->
      <div class="relative w-full">
        <div class="relative overflow-hidden rounded-lg slider-container">
          <div class="absolute inset-0 flex transition-transform duration-500 ease-in-out" id="slider">
            <div class="w-full flex-shrink-0">
              <div class="gradient-border" aria-label="Snow-covered mountain range at sunset">
                <img src="<?php echo base_url('assets/images/about2.png'); ?>" alt="Snow-covered mountain range at sunset with vibrant hues" class="slider-image" loading="lazy" onerror="this.src='https://placehold.co/800x600?text=No+Image';" />
              </div>
            </div>
            <div class="w-full flex-shrink-0">
              <div class="gradient-border" aria-label="Flamingos in a lush wetland">
                <img src="<?php echo base_url('assets/images/about3.png'); ?>" alt="Flamingos in a lush wetland with reflective water" class="slider-image" loading="lazy" onerror="this.src='https://placehold.co/800x600?text=No+Image';" />
              </div>
            </div>
          </div>
        </div>
        <!-- Slider navigation -->
        <button class="absolute top-1/2 left-2 sm:left-4 transform -translate-y-1/2 bg-gray-800 bg-opacity-50 text-white p-2 rounded-full hover:bg-opacity-75" onclick="moveSlide(-1)">❮</button>
        <button class="absolute top-1/2 right-2 sm:right-4 transform -translate-y-1/2 bg-gray-800 bg-opacity-50 text-white p-2 rounded-full hover:bg-opacity-75" onclick="moveSlide(1)">❯</button>
        <!-- Slider dots -->
        <div class="flex justify-center space-x-2 ">
          <span class="dot w-3 h-3 rounded-full bg-gray-400 cursor-pointer" onclick="currentSlide(0)"></span>
          <span class="dot w-3 h-3 rounded-full bg-gray-400 cursor-pointer" onclick="currentSlide(1)"></span>
        </div>
      </div>

      <!-- Right textual content -->
      <div class="space-y-6">
        <p class="text-sm text-pink-600 font-semibold tracking-wide uppercase">About <span class="text-pink-700 font-bold">Thari Tour and Travel</span></p>
        <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-gray-900 leading-tight">All-in-one platform for unforgettable travel experiences!</h2>
        <p class="text-gray-600 text-sm sm:text-base">
          At Thari Tour and Travel, we turn your travel dreams into reality! We offer customized tour packages across India and abroad, ensuring hassle-free bookings, comfortable stays, and unforgettable experiences. Whether you seek adventure, a family vacation, or a romantic getaway, we provide the best deals tailored to your needs. Explore, experience, and enjoy – let us plan your perfect holiday!
        </p>

        <div class="space-y-4">
          <div class="flex items-start gap-4">
            <div class="shrink-0 w-10 h-10 rounded-full bg-pink-600 flex items-center justify-center text-white" aria-hidden="true">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 stroke-current" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M16 12H8m0 0v4m0-4V8m8 4v4m-8-4H4m16 0H4" />
              </svg>
            </div>
            <p class="text-gray-700 text-sm sm:text-base">
              With years of experience in the travel industry, Thari Tour and Travel ensures a smooth and stress-free journey. From budget-friendly trips to luxury vacations, we have something for everyone!
            </p>
          </div>

          <div class="flex items-start gap-4">
            <div class="shrink-0 w-10 h-10 rounded-full bg-lime-700 flex items-center justify-center text-white" aria-hidden="true">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 stroke-current" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17 9V7a5 5 0 00-10 0v2M5 15v2a5 5 0 0010 0v-2m-5 0v3" />
              </svg>
            </div>
            <p class="text-gray-700 text-sm sm:text-base">
              We prioritize customer satisfaction by offering personalized travel experiences, 24/7 support, and expert guidance. Your dream holiday is just a booking away!
            </p>
          </div>
        </div>

        <p class="text-sm text-pink-600 font-semibold tracking-wide uppercase mt-6">Our Mission</p>
        <p class="text-gray-700 text-sm sm:text-base">
          At Thari Tour and Travel, our mission is to make travel effortless, affordable, and memorable. We aim to provide personalized trips, exceptional service, and unforgettable experiences for every traveler.
        </p>
      </div>
    </div>

    <!-- Why Choose Us Section -->
    <section class="bg-slate-100 rounded-lg p-6 sm:p-10 mt-12 relative overflow-hidden">
      <div aria-hidden="true" class="absolute -top-4 -right-6 text-[#d23e2e] rotate-45 w-8 h-8">
        <svg viewBox="0 0 24 24" fill="currentColor" class="w-8 h-8">
          <path d="M12 2l2.39 6.91H22l-5.49 3.99 2.1 6.91L12 14.82 7.39 19.92 9.49 13 4 9.01h7.61z" />
        </svg>
      </div>
      <div aria-hidden="true" class="absolute top-6 left-6 text-lime-600 w-4 h-4 rotate-12">
        <svg viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
          <circle cx="12" cy="12" r="10" />
        </svg>
      </div>

      <h2 class="text-2xl sm:text-3xl font-extrabold mb-8 sm:mb-12 text-slate-900">
        Why Choose <span class="text-[#d23e2e]">Us?</span>
      </h2>
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
        <div class="bg-white border border-slate-200 rounded-lg p-6 shadow-md flex flex-col items-center text-center">
          <div class="icon-circle mb-4 bg-blue-100 p-3 rounded-full text-blue-600" aria-hidden="true">
            <svg fill="currentColor" viewBox="0 0 24 24" class="w-6 h-6">
              <path d="M20.71 7.04a1 1 0 00-1.41-.13l-9.3 8.49-3.77-3.77a1 1 0 00-1.41 1.41l4.48 4.48a1 1 0 001.41 0l10-9.09a1 1 0 00.13-1.41z" />
            </svg>
          </div>
          <h3 class="font-semibold mb-2 text-slate-900 text-lg">Convenience</h3>
          <p class="text-sm text-slate-600">Plan your entire trip from one platform, saving you time and effort. No more hopping between different websites.</p>
        </div>
        <div class="bg-white border border-slate-200 rounded-lg p-6 shadow-md flex flex-col items-center text-center">
          <div class="icon-circle mb-4 bg-green-100 p-3 rounded-full text-green-600" aria-hidden="true">
            <svg fill="currentColor" viewBox="0 0 24 24" class="w-6 h-6">
              <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 17h-2v-2h2v2zm2-4h-4v-2h4v2zm0-4h-4V7h4v4z" />
            </svg>
          </div>
          <h3 class="font-semibold mb-2 text-slate-900 text-lg">Best Price Guarantee</h3>
          <p class="text-sm text-slate-600">We work with trusted travel partners to bring you the best deals, whether you're booking a flight, hotel, or car rental.</p>
        </div>
        <div class="bg-white border border-slate-200 rounded-lg p-6 shadow-md flex flex-col items-center text-center">
          <div class="icon-circle mb-4 bg-purple-100 p-3 rounded-full text-purple-600" aria-hidden="true">
            <svg fill="currentColor" viewBox="0 0 24 24" class="w-6 h-6">
              <path d="M12 2a10 10 0 00-7.35 16.83 2 2 0 001.41.58h11.88a2 2 0 001.41-.58A10 10 0 0012 2zm0 18a8 8 0 01-4.24-1.24l.95-1.42a6 6 0 006.58 0l.95 1.42A8 8 0 0112 20zm5-8a5 5 0 01-10 0h2a3 3 0 006 0h2z" />
            </svg>
          </div>
          <h3 class="font-semibold mb-2 text-slate-900 text-lg">Customer Support</h3>
          <p class="text-sm text-slate-600">Our dedicated support team is here for you 24/7, ensuring your travel plans go smoothly from start to finish.</p>
        </div>
        <div class="bg-white border border-slate-200 rounded-lg p-6 shadow-md flex flex-col items-center text-center">
          <div class="icon-circle mb-4 bg-orange-100 p-3 rounded-full text-orange-600" aria-hidden="true">
            <svg fill="currentColor" viewBox="0 0 24 24" class="w-6 h-6">
              <path d="M12 2a10 10 0 0110 10c0 4.42-2.87 8.17-6.84 9.47a1 1 0 01-1.16-.08l-2-1.5a1 1 0 00-1.26 0l-2 1.5a1 1 0 01-1.16.08C5.87 20.17 3 16.42 3 12A10 10 0 0112 2zm0 2a8 8 0 00-8 8c0 3.54 2.29 6.53 5.47 7.59l1.53-1.15a2 2 0 012 0l1.53 1.15A8 8 0 0020 12a8 8 0 00-8-8zm0 12a4 4 0 110-8 4 4 0 010 8z" />
            </svg>
          </div>
          <h3 class="font-semibold mb-2 text-slate-900 text-lg">Tailored Travel Experiences</h3>
          <p class="text-sm text-slate-600">Whether you're traveling for business, family vacations, or a solo adventure, we provide options that suit every need.</p>
        </div>
      </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-10">
      <p class="text-sm text-[#d23e2e] mb-2 tracking-wide">What’s Our User Says</p>
      <h2 class="text-2xl sm:text-3xl font-extrabold mb-8 leading-tight text-slate-900">
        Committed to Helping Our Clients Succeed<span class="text-[#d23e2e]">.</span>
      </h2>

      <!-- Carousel container -->
      <div class="relative overflow-x-auto flex testimonial-carousel scrollbar-hide snap-x snap-mandatory -mx-4 px-4">
        <div class="testimonial-card snap-center flex-shrink-0 w-full sm:w-80 md:w-96 mr-6 bg-blue-50 rounded-lg p-4 shadow-md" role="group" aria-label="Testimonial from Timothy Garrett">
          <div class="flex items-center mb-2">
            <img src="<?php echo base_url('assets/images/about4.png'); ?>" alt="Timothy Garrett" class="w-10 h-10 rounded-full mr-2">
            <p class="font-semibold text-slate-900">Timothy Garrett</p>
          </div>
          <div class="flex mb-2">
            <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
              <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
            </svg>
            <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
              <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3 .921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
            </svg>
            <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
              <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3 .921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
            </svg>
            <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
              <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3 .921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
            </svg>
            <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
              <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3 .921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
            </svg>
          </div>
          <p class="text-sm text-slate-700">Probably my best Michelin experience! Chef Tom and the team doing an incredible job!! The service was outstanding!</p>
        </div>
        <div class="testimonial-card snap-center flex-shrink-0 w-full sm:w-80 md:w-96 mr-6 bg-pink-50 rounded-lg p-4 shadow-md" role="group" aria-label="Testimonial from Joe Lawson">
          <div class="flex items-center mb-2">
            <img src="<?php echo base_url('assets/images/about5.png'); ?>" alt="Joe Lawson" class="w-10 h-10 rounded-full mr-2">
            <p class="font-semibold text-slate-900">Joe Lawson</p>
          </div>
          <div class="flex mb-2">
            <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
              <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3 .921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
            </svg>
            <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
              <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3 .921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
            </svg>
            <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
              <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3 .921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
            </svg>
            <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
              <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3 .921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
            </svg>
            <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
              <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3 .921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
            </svg>
          </div>
          <p class="text-sm text-slate-700">Modern European cuisine with a light and zesty touch to the traditional. Worth a stop for special celebrations!</p>
        </div>
        <div class="testimonial-card snap-center flex-shrink-0 w-full sm:w-80 md:w-96 mr-6 bg-pink-50 rounded-lg p-4 shadow-md" role="group" aria-label="Testimonial from Lori Coleman">
          <div class="flex items-center mb-2">
            <img src="<?php echo base_url('assets/images/about6.png'); ?>" alt="Lori Coleman" class="w-10 h-10 rounded-full mr-2">
            <p class="font-semibold text-slate-900">Lori Coleman</p>
          </div>
          <div class="flex mb-2">
            <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
              <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3 .921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
            </svg>
            <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
              <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3 .921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
            </svg>
            <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
              <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3 .921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
            </svg>
            <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
              <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3 .921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
            </svg>
            <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
              <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3 .921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
            </svg>
          </div>
          <p class="text-sm text-slate-700">Incredible food with an fantastic service team, everyone on the service team moved as one as the dishes and drinks are being served.</p>
        </div>
      </div>

      <!-- Carousel navigation -->
      <div class="flex justify-center mt-6 space-x-4">
        <button aria-label="Previous testimonial" id="prevBtn" class="rounded-full p-2 bg-white shadow hover:bg-slate-100">
          <svg viewBox="0 0 24 24" fill="none" stroke="#444" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6">
            <polyline points="15 18 9 12 15 6"></polyline>
          </svg>
        </button>
        <button aria-label="Next testimonial" id="nextBtn" class="rounded-full p-2 bg-white shadow hover:bg-slate-100">
          <svg viewBox="0 0 24 24" fill="none" stroke="#444" stroke-width="2" stroke-linecap=P"round" stroke-linejoin="round" class="w-6 h-6">
            <polyline points="9 18 15 12 9 6"></polyline>
          </svg>
        </button>
      </div>
    </section>
  </main>

  <!-- Footer -->
  <?= view('footer') ?>

  <script>
    // Image Slider
    let slideIndex = 0;
    const slides = document.getElementById('slider').children;
    const dots = document.getElementsByClassName('dot');

    function showSlide(index) {
      if (index >= slides.length) slideIndex = 0;
      if (index < 0) slideIndex = slides.length - 1;
      for (let i = 0; i < slides.length; i++) {
        slides[i].style.transform = `translateX(-${slideIndex * 100}%)`;
        dots[i].classList.remove('bg-pink-600');
      }
      dots[slideIndex].classList.add('bg-pink-600');
    }

    function moveSlide(n) {
      slideIndex += n;
      showSlide secundaria showSlide(slideIndex);
    }

    function currentSlide(n) {
      slideIndex = n;
      showSlide(slideIndex);
    }

    showSlide(slideIndex);
    setInterval(() => moveSlide(1), 5000);

    // Testimonial Carousel
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    const carousel = document.querySelector('.testimonial-carousel');
    const cards = document.querySelectorAll('.testimonial-card');
    let currentIndex = 0;

    function updateCarousel() {
      const cardWidth = cards[0].offsetWidth + 24; // Account for margin
      carousel.style.transform = `translateX(-${currentIndex * cardWidth}px)`;
    }

    prevBtn.addEventListener('click', () => {
      if (currentIndex > 0) {
        currentIndex--;
        updateCarousel();
      }
    });

    nextBtn.addEventListener('click', () => {
      if (currentIndex < cards.length - 1) {
        currentIndex++;
        updateCarousel();
      } else {
        currentIndex = 0; // Loop back to start
        updateCarousel();
      }
    });

    // Handle window resize
    window.addEventListener('resize', updateCarousel);
    updateCarousel();
  </script>
</body>

</html>