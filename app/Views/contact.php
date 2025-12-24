<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Contact Us - Thari Tour and Travels</title>
  <script src="https://cdn.tailwindcss.com"></script>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous" defer></script>
  <link href="<?= base_url('assets/css/custom.css') ?>" rel="stylesheet">
</head>
<body class="bg-gray-50 text-slate-900 font-sans">

  <!-- Navigation bar -->
  <?= view('navbar') ?>

  <!-- Hero / Page Title -->
  <header class="relative w-full min-h-[220px] bg-cover bg-center bg-no-repeat" style="background-image: url('<?php echo base_url('assets/images/contact1.png'); ?>');">
    <div class="w-full h-full bg-black bg-opacity-50 flex flex-col justify-center items-center">
      <h1 class="text-white text-4xl md:text-5xl font-extrabold drop-shadow-lg select-none">Contact Us</h1>
      <nav class="mt-1">
        <ul class="inline-flex items-center space-x-3 text-gray-300 text-sm select-none">
          <li><a href="/" class="hover:underline">Home</a></li>
          <li><span>›</span></li>
          <li>Contact Us</li>
        </ul>
      </nav>
    </div>
  </header>

  <!-- Main content -->
<main class="w-full px-4 py-6 grid grid-cols-1 md:grid-cols-5 gap-4">
    <!-- Left: Contact Info -->
    <section class="md:col-span-3 bg-white rounded-lg shadow p-6 sm:p-8">
    <h2 class="text-2xl sm:text-3xl font-bold mb-4 text-gray-800">Reach Out to Our Dedicated Support Team</h2>
    <p class="font-medium text-gray-700 mb-1">Our team is ready to help. Your satisfaction is our priority.</p>
    <p class="mb-6 text-gray-600 text-sm sm:text-sm">
      Got a question, need advice, or looking for help? Our knowledgeable team is here to assist you every step of the way. We’re just a message or call away, ready to provide the guidance you need.
    </p>

    <div class="divide-y divide-gray-200">
      <!-- Email -->
      <div class="flex items-center gap-4 py-4">
        <div class="flex justify-center items-center w-12 h-12 bg-gray-100 rounded-full shrink-0">
          <!-- Email icon (generic arrow icon replaced for better clarity) -->
          <svg class="w-6 h-6 text-red-500" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
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
          <svg class="w-6 h-6 text-red-500" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.6a2 2 0 012 1.72c.042.326.042.659 0 .986L8 9l-3 3 .987 1.006c.176.182.44.263.7.263H7a2 2 0 012-2v-1a3 3 0 00-3-3H5a2 2 0 01-2-2z"></path>
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
          <svg class="w-6 h-6 text-red-500" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 11c1.657 0 3-1.343 3-3S13.657 5 12 5 9 6.343 9 8s1.343 3 3 3z"></path>
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 22s8-4.5 8-10.5S16.5 3 12 3 4 7.5 4 11.5 12 22 12 22z"></path>
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
          <svg class="w-6 h-6 text-red-500" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553-2.276A1 1 0 0021 13.618V2.382a1 1 0 00-1.447-.894L15 4m0 13V4m0 0L9 7"></path>
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
            <label for="fullname" class="block text-xl font-semibold mb-1">Full Name <span aria-label="required" class="text-red-600">*</span></label>
            <input type="text" id="fullname" name="fullname" required class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-orange-400" placeholder="Your full name" />
          </div>
          <div class="flex-1">
            <label for="email" class="block text-xl font-semibold mb-1">Email</label>
            <input type="email" id="email" name="email" class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-orange-400" placeholder="name@example.com" />
          </div>
        </div>
        <div class="">
          <div class="flex-1">
            <label for="phone" class="block text-xl font-semibold mb-1">Phone <span aria-label="required" class="text-red-600">*</span></label>
            <input type="tel" id="phone" name="phone" required class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-orange-400" placeholder="+91 1234567890" />
          </div>
          <div class="flex-1">
            <label for="subject" class="block text-xl font-semibold mb-1">Subject</label>
            <input type="text" id="subject" name="subject" class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-orange-400" placeholder="Subject of your query" />
          </div>
        </div>
        <div>
          <label for="message" class="block text-xl font-semibold mb-1">Message</label>
          <textarea id="message" name="message" rows="4" class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-orange-400" placeholder="Write your message here..."></textarea>
        </div>
        <div class='flex justify-center items-center'>
        <button type="submit" class="bg-orange-600 text-white  rounded px-5 py-2 font-semibold hover:bg-orange-700 transition">Send Enquiry</button>
        </div>
      </form>
    </section>
  </main>

  <?= view('footer') ?>

  <script>
    // Mobile menu toggle
    const btn = document.getElementById('mobile-menu-button');
    const menu = document.getElementById('mobile-menu');
    if (btn && menu) {
      btn.addEventListener('click', () => {
        menu.classList.toggle('hidden');
      });
    }

    // Simple form submit handler
    // const form = document.getElementById('contact-form');
    // form.addEventListener('submit', (e) => {
    //   e.preventDefault();
    //   // Basic validation
    //   const fullName = form.fullname.value.trim();
    //   const phone = form.phone.value.trim();
    //   if (!fullName) {
    //     alert('Please enter your full name.');
    //     form.fullname.focus();
    //     return;
    //   }
    //   if (!phone) {
    //     alert('Please enter your phone number.');
    //     form.phone.focus();
    //     return;
    //   }
    //   alert('Thank you, ' + fullName + '! Your message has been sent.');
    //   form.reset();

    // });

  </script>
</body>
</html>