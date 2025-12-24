<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Spiti Valley & Chandratal Tour Packages - The Thrill Himalaya</title>
    <script src="https://cdn.tailwindcss.com"></script>
   
</head>
<body>
   <?= view('navbar') ?>

    <!-- Hero Section -->
    <section class="relative w-full pt-16" role="img" aria-label="Mountain village in Spiti Valley with snow patches showing traditional houses in rough landscape">
        <img src="<?php echo base_url('assets/images/spiti1.png'); ?>" alt="Mountain village in Spiti Valley with snow patches showing traditional houses in rough landscape" class="w-full h-64 sm:h-80 md:h-96 object-cover hover:brightness-100" loading="lazy" onerror="this.style.display='none'" />
    </section>

    <!-- Main Content -->
    <main role="main" id="main-content" class="w-full mx-auto px-4 sm:px-6 lg:px-8 py-8 sm:py-12 bg-white">
        <h1 class="text-4xl sm:text-3xl md:text-4xl font-bold text-center text-gray-800 mb-6">Most Popular Spiti Valley & Chandratal Tour Packages</h1>

        <!-- Description -->
        <section class="w-full mx-auto mb-8 text-gray-600 text-2xl sm:text-base leading-relaxed select-text" aria-label="Description of Spiti Valley">
            <p><span class="font-bold">Spiti Valley:</span> A mountainous cold desert freckled with green patches over a dry weather-beaten face, fascinating valleys, windswept landscapes and quiet villages, Spiti, which loosely translates as ‘the middle land’. The geographic placement passes a heavy influence of Buddhism and stark cultural similarities of the region into the valley. Religion plays a major role in everyday life, testified by the piles of 'mani' stones, whitewashed chortens that house Buddhist relics, and prayer flags fluttering relentlessly in thin air. Echoes of ‘Om Mani Padme Hum’ (literally, 'Behold the Jewel in the Lotus') by all bring good fortune and prosperity to the distant land. Novelist Rudyard Kipling in his book ‘Kim’ describes Spiti as ‘a world within a world,’ a place where the gods live’ – something that holds true to the present day. For centuries, Spiti has had an introversive culture where life remained focused around its monasteries.</p>
        </section>

        <!-- Recommended Places -->
        <p class="text-xl sm:text-2xl font-bold text-center text-gray-900 mb-4 select-none" aria-label="List of best places to visit in Spiti Valley">CHECK OUT HERE THE BEST PLACES IN SPITI VALLEY TO VISIT FOR CHERISHABLE VACATIONS:</p>
        <p class="max-w-7xl mx-auto mb-10 text-gray-800 text-sm sm:text-base font-semibold text-center select-none flex flex-wrap justify-center gap-x-4 gap-y-2" aria-label="Places list">
            <span><span class="text-red-600 mr-1" aria-hidden="true">📍</span>Key Monastery</span>
            <span><span class="text-red-600 mr-1" aria-hidden="true">📍</span>Tabo Monastery</span>
            <span><span class="text-red-600 mr-1" aria-hidden="true">📍</span>Lhalung Monastery</span>
            <span><span class="text-red-600 mr-1" aria-hidden="true">📍</span>Gandhola Monastery</span>
            <span><span class="text-red-600 mr-1" aria-hidden="true">📍</span>Chandratal</span>
            <span><span class="text-red-600 mr-1" aria-hidden="true">📍</span>Suraj Tal</span>
            <span><span class="text-red-600 mr-1" aria-hidden="true">📍</span>Dhankar Lake</span>
            <span><span class="text-red-600 mr-1" aria-hidden="true">📍</span>Dhankar Monastery</span>
            <span><span class="text-red-600 mr-1" aria-hidden="true">📍</span>Kunzum Pass</span>
            <span><span class="text-red-600 mr-1" aria-hidden="true">📍</span>Baralacha Pass</span>
            <span><span class="text-red-600 mr-1" aria-hidden="true">📍</span>Pin Valley National Park</span>
            <span><span class="text-red-600 mr-1" aria-hidden="true">📍</span>Kibber</span>
            <span><span class="text-red-600 mr-1" aria-hidden="true">📍</span>Losar</span>
            <span><span class="text-red-600 mr-1" aria-hidden="true">📍</span>Nako Lake</span>
            <span><span class="text-red-600 mr-1" aria-hidden="true">📍</span>Udaipur</span>
            <span><span class="text-red-600 mr-1" aria-hidden="true">📍</span>Komik</span>
            <span><span class="text-red-600 mr-1" aria-hidden="true">📍</span>Darcha</span>
            <span><span class="text-red-600 mr-1" aria-hidden="true">📍</span>Trilokinath Temple</span>
            <span><span class="text-red-600 mr-1" aria-hidden="true">📍</span>Shashur Monastery</span>
            <span><span class="text-red-600 mr-1" aria-hidden="true">📍</span>Tayul Monastery</span>
            <span><span class="text-red-600 mr-1" aria-hidden="true">📍</span>Kardang Monastery</span>
            <span><span class="text-red-600 mr-1" aria-hidden="true">📍</span>Tangyud Monastery</span>
            <span><span class="text-red-600 mr-1" aria-hidden="true">📍</span>Keylong Market</span>
            <span><span class="text-red-600 mr-1" aria-hidden="true">📍</span>Kungri Monastery</span>
            <span><span class="text-red-600 mr-1" aria-hidden="true">📍</span>Tashigang</span>
        </p>

        <!-- Highlight Section -->
        <section class="text-center mb-12 text-xl sm:text-2xl font-extrabold text-gray-900 select-none" aria-label="Spiti Valley Tour Packages discount info">
            <span class="text-red-600">SPITI VALLEY</span> TOUR PACKAGES FLAT <span class="inline-block bg-red-600 text-white text-lg sm:text-xl font-bold px-2 py-1 rounded-sm" aria-label="30 percent off discount">30% OFF</span>
            <div class="w-12 h-1 bg-green-400 mx-auto mt-2 rounded"></div>
        </section>

        <!-- Tour Packages -->
        <section class="grid grid-cols-1 sm:grid-cols-1 lg:grid-cols-4 gap-4 w-full mx-auto mb-16 px-4" aria-label="Tour packages">
            
            <?php foreach ($tourDetails as $index => $tourDetail): ?>
                
                <article class="bg-white rounded-lg shadow-lg overflow-hidden flex flex-col transition-transform duration-300 hover:-translate-y-1.5 hover:shadow-2xl cursor-pointer select-none" tabindex="0" aria-labelledby="package1-title" role="region">
                    <figure class="h-48 sm:h-56 overflow-hidden bg-gray-200">
                        <img src="<?= base_url($tourDetail['file_name']); ?>" 
                        alt="<?= esc($tourDetail['title']); ?>" class="w-full h-full object-cover transition-transform duration-300 hover:scale-105" loading="lazy" onerror="this.style.display='none'" />
                    </figure>
                    <div class="p-4 flex flex-col flex-grow">
                        <h2 id="package1-title" class="text-lg sm:text-xl font-bold text-gray-900 mb-2"><?= esc($tourDetail['title']); ?></h2>
                        <p class="text-gray-600 text-sm sm:text-base mb-3 flex-grow">Explore the most iconic monasteries of Spiti including Key, Tabo, and Dhankar with expert guides.</p>
                        <p class="text-lg font-bold text-green-600">Starting from ₹ <?= ucfirst($tourDetail['starting_price']); ?>/-</p>
                        <p class="text-green-600 font-semibold text-sm"><?= ucfirst($tourDetail['tour_days']); ?> | Ex: Shimla</p>
                        <p class="text-sm mt-2">User Rating: <span class="rating">4.8/5.0</span></p>
                    </div>
                </article>
                
            <?php endforeach; ?>
            
            <article class="bg-white rounded-lg shadow-lg overflow-hidden flex flex-col transition-transform duration-300 hover:-translate-y-1.5 hover:shadow-2xl cursor-pointer select-none" tabindex="0" aria-labelledby="package2-title" role="region">
                <figure class="h-48 sm:h-56 overflow-hidden bg-gray-200">
                    <img src="<?php echo base_url('assets/images/spiti2.png'); ?>" alt="Crystal clear blue lake surrounded by snow-capped mountains and pine trees in Spiti Valley" class="w-full h-full object-cover transition-transform duration-300 hover:scale-105" loading="lazy" onerror="this.style.display='none'" />
                </figure>
                <div class="p-4 flex flex-col flex-grow">
                    <h2 id="package2-title" class="text-lg sm:text-xl font-bold text-gray-900 mb-2">Chandratal & Lakes Explorer</h2>
                    <p class="text-gray-600 text-sm sm:text-base mb-3 flex-grow">Visit the pristine Chandratal, Suraj Tal, and Nako Lake, carved by glaciers in the high Himalayas.</p>
                    <p class="text-lg font-bold text-green-600">Starting from ₹14,999/-</p>
                    <p class="text-green-600 font-semibold text-sm">6Nights 7Days | Ex: Shimla</p>
                    <p class="text-sm mt-2">User Rating: <span class="rating">4.8/5.0</span></p>
                </div>
            </article>
            <article class="bg-white rounded-lg shadow-lg overflow-hidden flex flex-col transition-transform duration-300 hover:-translate-y-1.5 hover:shadow-2xl cursor-pointer select-none" tabindex="0" aria-labelledby="package3-title" role="region">
                <figure class="h-48 sm:h-56 overflow-hidden bg-gray-200">
                    <img src="<?php echo base_url('assets/images/spiti3.png'); ?>" alt="Hikers trekking on rugged mountain trail with snow-capped peaks in the background at Spiti Valley" class="w-full h-full object-cover transition-transform duration-300 hover:scale-105" loading="lazy" onerror="this.style.display='none'" />
                </figure>
                <div class="p-4 flex flex-col flex-grow">
                    <h2 id="package3-title" class="text-lg sm:text-xl font-bold text-gray-900 mb-2">Spiti Trekking Adventure</h2>
                    <p class="text-gray-600 text-sm sm:text-base mb-3 flex-grow">7 days of trekking through scenic high altitude deserts, mountain passes, and local villages.</p>
                    <p class="text-lg font-bold text-green-600">Starting from ₹18,499/-</p>
                    <p class="text-green-600 font-semibold text-sm">6Nights 7Days | Ex: Shimla</p>
                    <p class="text-sm mt-2">User Rating: <span class="rating">4.8/5.0</span></p>
                </div>
            </article>
            <article class="bg-white rounded-lg shadow-lg overflow-hidden flex flex-col transition-transform duration-300 hover:-translate-y-1.5 hover:shadow-2xl cursor-pointer select-none" tabindex="0" aria-labelledby="package4-title" role="region">
                <figure class="h-48 sm:h-56 overflow-hidden bg-gray-200">
                    <img src="<?php echo base_url('assets/images/spiti4.png'); ?>" alt="Rare snow leopard in natural rocky habitat of Spiti Valley under a bright sky" class="w-full h-full object-cover transition-transform duration-300 hover:scale-105" loading="lazy" onerror="this.style.display='none'" />
                </figure>
                <div class="p-4 flex flex-col flex-grow">
                    <h2 id="package4-title" class="text-lg sm:text-xl font-bold text-gray-900 mb-2">Wildlife & Nature Tour</h2>
                    <p class="text-gray-600 text-sm sm:text-base mb-3 flex-grow">Birdwatching, flora, and fauna exploration of Pin Valley National Park and surrounding nature reserves.</p>
                    <p class="text-lg font-bold text-green-600">Starting from ₹13,299/-</p>
                    <p class="text-green-600 font-semibold text-sm">6Nights 7Days | Ex: Shimla</p>
                    <p class="text-sm mt-2">User Rating: <span class="rating">4.8/5.0</span></p>
                </div>
            </article>
        </section>

        <!-- Leh Ladakh Section -->
       <!-- Section Heading -->
<h2 class="text-2xl sm:text-3xl font-bold text-center text-gray-900 mb-6 select-none">
    BEST <span class="text-red-600">LEH LADAKH</span>
    <span class="relative inline-block after:content-[''] after:absolute after:w-10 after:h-0.5 after:bg-green-400 after:left-1/2 after:-translate-x-1/2 after:-bottom-1.5 after:rounded">
        TOUR PACKAGES
    </span>
    <span class="text-red-600">2025</span>
</h2>

<!-- Scrollable Tour Cards -->
<div class="flex overflow-x-auto gap-4 pb-4 px-4 sm:px-6 max-w-7xl mx-auto scrollbar-thin scrollbar-thumb-red-600 scrollbar-track-gray-200 snap-x snap-mandatory" role="list" aria-label="Leh Ladakh Tour Packages">

    <!-- Tour Card -->
    <a href="#" class="flex-none w-11/12 sm:w-64 bg-white rounded-lg shadow-md hover:shadow-xl hover:shadow-red-500/50 transition-shadow snap-center focus:outline-none" role="listitem" tabindex="0" aria-label="5 Days in Leh Ladakh Tour Package">
        <img src="<?php echo base_url('assets/images/spiti5.png'); ?>" alt="Leh Ladakh scenic view" class="w-full h-52 sm:h-64 object-cover rounded-t-lg bg-gray-200" onerror="this.src='https://placehold.co/240x320?text=Image+Not+Available';" />
        <div class="p-3 text-center text-gray-800 font-semibold text-sm sm:text-base">5 Days in Leh Ladakh (4N/5D, Ex-Leh)</div>
    </a>

    <!-- Tour Card -->
    <a href="#" class="flex-none w-11/12 sm:w-64 bg-white rounded-lg shadow-md hover:shadow-xl hover:shadow-red-500/50 transition-shadow snap-center focus:outline-none" role="listitem" tabindex="0" aria-label="7 Days in Leh Ladakh Tour Package">
        <img src="<?php echo base_url('assets/images/spiti6.png'); ?>" alt="Leh Ladakh road view" class="w-full h-52 sm:h-64 object-cover rounded-t-lg bg-gray-200" onerror="this.src='https://placehold.co/240x320?text=Image+Not+Available';" />
        <div class="p-3 text-center text-gray-800 font-semibold text-sm sm:text-base">7 Days in Leh Ladakh (6N/7D, Ex-Leh)</div>
    </a>

    <!-- Tour Card -->
    <a href="#" class="flex-none w-11/12 sm:w-64 bg-white rounded-lg shadow-md hover:shadow-xl hover:shadow-red-500/50 transition-shadow snap-center focus:outline-none" role="listitem" tabindex="0" aria-label="Incredible Leh Ladakh Tour Package">
        <img src="<?php echo base_url('assets/images/spiti7.png'); ?>" alt="Stupa in Ladakh" class="w-full h-52 sm:h-64 object-cover rounded-t-lg bg-gray-200" onerror="this.src='https://placehold.co/240x320?text=Image+Not+Available';" />
        <div class="p-3 text-center text-gray-800 font-semibold text-sm sm:text-base">Incredible Leh Ladakh (6N/7D, Ex-Leh)</div>
    </a>

    <!-- Tour Card -->
    <a href="#" class="flex-none w-11/12 sm:w-64 bg-white rounded-lg shadow-md hover:shadow-xl hover:shadow-red-500/50 transition-shadow snap-center focus:outline-none" role="listitem" tabindex="0" aria-label="Ladakh and Tso Moriri Tour Package">
        <img src="<?php echo base_url('assets/images/spiti8.png'); ?>" alt="Tso Moriri lake" class="w-full h-52 sm:h-64 object-cover rounded-t-lg bg-gray-200" onerror="this.src='https://placehold.co/240x320?text=Image+Not+Available';" />
        <div class="p-3 text-center text-gray-800 font-semibold text-sm sm:text-base">Ladakh & TSO Moriri (6N/7D, Ex-Leh)</div>
    </a>
</div>

<!-- CTA Button -->
<div class="text-center mt-6 px-4">
    <a href="#" class="inline-block bg-red-600 text-white font-semibold text-base px-6 py-2 rounded hover:bg-red-700 transition-colors focus:outline-none" aria-label="View All Leh Ladakh Tour Packages">
        View All Leh Ladakh Tour Packages
    </a>
</div>

    </main>

    <!-- Left: Contact Info -->
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
      <form id="contact-form" class="space-y-4" novalidate>
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
        <button type="submit" class="bg-orange-600 text-white  rounded px-5 py-2 font-semibold hover:bg-orange-700 transition">Send Message</button>
        </div>
      </form>
    </section>
  </main>

    <?= view('footer') ?>
</body>
</html>