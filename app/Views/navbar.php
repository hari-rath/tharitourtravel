<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Thari Tour Travel</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="<?= base_url('assets/css/custom.css') ?>" rel="stylesheet" />
  <!-- Include Font Awesome CDN in your <head> if not already -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Bootstrap Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

<style>
  @media (min-width: 768px) {
    .md\:pt-20 {
        padding-top: 3rem;
    }
}
.nav-link{
  font-size:17px;
}
</style>

</head>
<body class="bg-gray-50 text-slate-900">

  <!-- Top Info Bar -->
  <div class="fixed top-0 w-full bg-blue-900 text-white text-lg flex flex-wrap sm:flex-nowrap justify-center sm:justify-between items-center  py-2 px-4 border-b border-gray-200 z-10">
    <div class="flex items-center gap-2 pl-3 pr-3">
      <!-- Email Icon -->
      <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 stroke-current" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2v-5a2 2 0 00-2-2H5a2 2 0 00-2 2v5a2 2 0 002 2z" />
      </svg>
     <span>
    Email: 
    <a style="text-decoration:none;color:white;font-weight:bolder" href="mailto:atmathakur87@gmail.com?subject=Inquiry from Website">
        atmathakur87@gmail.com
    </a>
</span>

    </div>
    <div class="flex items-center gap-2 border-t sm:border-t-0 sm:border-l border-gray-300 pt-2 sm:pt-0 sm:pl-6">
      <!-- Phone Icon -->
      <!-- <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 stroke-current" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M22 3a10 10 0 11-5.917-1.393M15 12h.01" />
      </svg> -->
   
      <span>
         📞
    <a style="text-decoration:none;color:white;font-weight:bolder" href="tel:+918091160915">+91 8091160915, </a>
</span>
<span>
    <a href="https://api.whatsapp.com/send?phone=+918091925535
" target="_blank" 
       style="text-decoration:none;color:white;font-weight:bolder;">
        <i class="fab fa-whatsapp" style="color: greenyellow;"></i> +91 8091925535
    </a>
</span>
    </div>

    <a href="<?= base_url('contact'); ?>" class="mt-2 sm:mt-0 sm:ml-auto inline-flex no-underline items-center px-4 py-2 bg-red-600 text-white text-sm font-semibold rounded-md hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2">
      Get In Touch With Us
    </a>
  </div>

  <!-- Navbar -->
  <nav class="pt-28 md:pt-20 bg-white w-full shadow  sm:flex-nowrap justify-center sm:justify-between ">
    <div class=" px-4">
      <div class="flex justify-between items-center">
        
        <!-- Logo  -->
        <a href="<?php echo base_url('/'); ?>" class="">
          <img src="<?= base_url('assets/images/logo.png') ?>" alt="Thari Tour Travel" class="h-28 w-auto" />
        </a>

        <!-- Hamburger (Mobile Only) -->
        <div class="md:hidden">
          <button id="menuToggle" class="text-gray-800 focus:outline-none">
            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M4 6h16M4 12h16M4 18h16" />
            </svg>
          </button>
        </div>

        <!-- Menu Links (Desktop) -->
        <ul class="hidden md:flex ml:items-center md:space-x-8 text-xl text-yellow-600 font-bold">
          <li><a class="nav-link active hover:text-blue-700" href="<?php echo base_url('/'); ?>">HOME</a></li>
          <li><a class="nav-link  hover:text-red-700" href="<?= base_url('about'); ?>">ABOUT US</a></li>
          <li><a class="nav-link hover:text-red-700" href="<?= base_url('spiti'); ?>">TOUR PACKAGES</a></li>
          <li><a class="nav-link hover:text-red-700" href="<?= base_url('gallery'); ?>">GALLERY</a></li>
          <li><a class="nav-link hover:text-red-700" href="<?= base_url('vehicle'); ?>">VEHICLE RENT</a></li>
          <li><a class="nav-link hover:text-red-700" href="<?= base_url('contact'); ?>">CONTACT</a></li>
        </ul>
      </div>

      <!-- Mobile Menu -->
      <div id="mobileMenu" class="md:hidden hidden mt-4 space-y-2 font-semibold text-yellow-600 text-lg">
        <a href="/" class="block hover:text-blue-700">HOME</a>
        <a href="<?= base_url('about'); ?>" class="block hover:text-blue-700">ABOUT US</a>
        <a href="<?= base_url('spiti'); ?>" class="block hover:text-blue-700">TOUR PACKAGES</a>
        <a href="<?= base_url('gallery'); ?>" class="block hover:text-blue-700">GALLERY</a>
        <a href="<?= base_url('vehicle'); ?>" class="block hover:text-blue-700">VEHICLE RENT</a>
        <a href="<?= base_url('contact'); ?>" class="block hover:text-blue-700">CONTACT</a>
      </div>
    </div>
  </nav>

  <!-- Toggle Script -->
  <script>
    const menuToggle = document.getElementById("menuToggle");
    const mobileMenu = document.getElementById("mobileMenu");

    menuToggle.addEventListener("click", () => {
      mobileMenu.classList.toggle("hidden");
    });
  </script>

</body>
</html>
