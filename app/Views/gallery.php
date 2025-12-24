<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Our Gallery - Thari Tour and Travels</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    /* Custom scrollbar for gallery */
    .gallery-scroll {
      scrollbar-width: thin;
      scrollbar-color: #a0aec0 transparent;
    }
    .gallery-scroll::-webkit-scrollbar {
      height: 8px;
    }
    .gallery-scroll::-webkit-scrollbar-track {
      background: transparent;
    }
    .gallery-scroll::-webkit-scrollbar-thumb {
      background-color: #718096;
      border-radius: 99px;
      border: 2px solid transparent;
      background-clip: content-box;
    }
    /* Modal styles */
    .modal {
      display: none;
      position: fixed;
      inset: 0; /* shorthand for top, right, bottom, left: 0 */
      background-color: rgba(0, 0, 0, 0.8);
      z-index: 50;
      justify-content: center;
      align-items: center;
      overflow: hidden; /* prevent scroll */
    }
    
    .modal-content {
      position: relative;
      width:auto !important;
      max-width: 90vw;
      max-height: 100vh; /* Full viewport height */
      display: flex;
      align-items: center;
      justify-content: center;
      overflow: hidden;
      background: none !important;
    }
    
    .modal-content img {
      max-height: 100vh;
      max-width: 100%;
      width: auto;
      height: auto;
      object-fit: contain;
      display: block;
    }

    /*.modal {*/
    /*  display: none;*/
    /*  position: fixed;*/
    /*  top: 0;*/
    /*  left: 0;*/
    /*  width: 100%;*/
    /*  height: 100%;*/
    /*  background-color: rgba(0, 0, 0, 0.8);*/
    /*  z-index: 50;*/
    /*  justify-content: center;*/
    /*  align-items: center;*/
    /*}*/
    /*.modal-content {*/
    /*  max-width: 90%;*/
    /*  max-height: 90vh;*/
    /*  position: relative;*/
    /*}*/
    
    .close-btn {
      position: absolute;
      top: 0px;
      right: 0px;
      /*top: -10px;*/
      /*right: -10px;*/
      background: white;
      border-radius: 50%;
      width: 30px;
      height: 30px;
      display: flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
      font-size: 18px;
      line-height: 1;
    }
    /* Gallery card styles */
    .image-layers { position: relative; width: 200px; height: 200px; }
    .image-layer1, .image-layer2, .image-layer3 {
      position: absolute; width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s;
    }
    .image-layer1 { transform: translate(-10px, -10px); z-index: 1; }
    .image-layer2 { transform: translate(0, 0); z-index: 2; }
    .image-layer3 { transform: translate(10px, 10px); z-index: 3; }
    .gallery-card:hover { cursor: pointer; }
    .gallery-card:hover .image-layer1 { transform: translate(-15px, -15px); }
    .gallery-card:hover .image-layer2 { transform: translate(0, 0); }
    .gallery-card:hover .image-layer3 { transform: translate(15px, 15px); }
    .hidden { display: none; }
  </style>
</head>

<body class="bg-gray-50 font-arial text-gray-800">
  <?= view('navbar') ?>

  <!-- Banner / Hero Section -->
  <header class="relative w-full min-h-[220px] bg-cover bg-center bg-no-repeat" style="background-image: url('<?php echo base_url('assets/images/gal2.png'); ?>');">
    <div class="w-full h-full bg-black bg-opacity-50 flex flex-col justify-center items-center">
      <h1 class="text-white text-4xl md:text-5xl font-extrabold drop-shadow-lg select-none">Gallery</h1>
      <nav class="mt-1">
        <ul class="inline-flex items-center space-x-3 text-gray-300 text-sm select-none">
          <li><a href="/" class="hover:underline">Home</a></li>
          <li><span>›</span></li>
          <li>Gallery</li>
        </ul>
      </nav>
    </div>
  </header>

  <!-- Main Gallery Section -->
  <section id="gallery" class="w-full flex flex-col items-center justify-center">
      <h1 class="text-3xl font-extrabold mb-6 text-gray-900 select-none">Gallery</h1>
    
      <div id="gallery-cards" class="flex flex-wrap justify-center gap-4 md:gap-8 w-full">
        <?php foreach ($images as $category => $group): ?>
          <?php if (!empty($group)): ?>
            <div class="gallery-card flex flex-col items-center justify-center gap-4 cursor-pointer" onclick="showGallery('<?= $category ?>')">
              <div class="image-layers" aria-label="<?= esc($category) ?>">
                <?php for ($i = 0; $i < 3; $i++): ?>
                  <?php if (isset($group[$i])): ?>
                    <img src="<?= base_url($group[$i]['file_name']) ?>" 
                         alt="<?= esc($group[$i]['title']) ?>" 
                         class="image-layer<?= $i + 1 ?>" 
                         onerror="this.style.display='none'"/>
                  <?php endif; ?>
                <?php endfor; ?>
              </div>
              <span class="font-semibold text-lg text-gray-900"><?= ucfirst($category) ?></span>
            </div>
          <?php endif; ?>
        <?php endforeach; ?>
      </div>
    </section>


    <!-- Dynamic Gallery Detail Section -->
    <section id="gallery-detail" class="gallery-detail w-full flex flex-col items-center justify-center hidden">
      <h2 id="gallery-title" class="text-2xl font-bold mb-4 text-gray-900"></h2>
      <div id="gallery-images" class="flex flex-wrap justify-center gap-4"></div>
      <button onclick="backToGallery()" class="mt-6 px-4 py-2 bg-gray-900 text-white rounded hover:bg-gray-700">Back to Gallery</button>
    </section>


  <!-- Scrollable Gallery Section -->
  <main class="max-w-7xl mx-auto">
    <div class="overflow-x-auto gallery-scroll no-scrollbar rounded-xl bg-white p-4 shadow-md flex space-x-4">
      <!-- Scrollable images remain static as per original -->
      <div class="flex-shrink-0 w-48 rounded-lg overflow-hidden shadow-lg relative cursor-pointer" onclick="openModal('<?php echo base_url('assets/images/gal1.png'); ?>')">
        <img 
          src="<?php echo base_url('assets/images/gal1.png'); ?>" 
          alt="A beautifully decorated traditional Himalayan wooden temple altar adorned with colorful prayer flags fluttering under a bright blue sky" 
          class="w-full h-36 object-cover" 
          onerror="this.onerror=null;this.src='<?php echo base_url('assets/images/gal1.png'); ?>'"
        />
      </div>
      <div class="flex-shrink-0 w-48 rounded-lg overflow-hidden shadow-lg relative cursor-pointer" onclick="openModal('<?php echo base_url('assets/images/gal3.png'); ?>')">
        <img 
          src="<?php echo base_url('assets/images/gal3.png'); ?>" 
          alt="Golden statue of Buddha seated on a hilltop shrine with majestic green mountains in the background under clear skies" 
          class="w-full h-36 object-cover" 
          onerror="this.onerror=null;this.src='<?php echo base_url('assets/images/unavailable.png'); ?>'"
        />
      </div>
      <div class="flex-shrink-0 w-48 rounded-lg overflow-hidden shadow-lg relative cursor-pointer" onclick="openModal('<?php echo base_url('assets/images/gal4.png'); ?>')">
        <img 
          src="<?php echo base_url('assets/images/gal4.png'); ?>" 
          alt="White car driving along curvy mountain road framed by safety traffic signs and rocky landscape, under crisp blue skies" 
          class="w-full h-36 object-cover" 
          onerror="this.onerror=null;this.src='<?php echo base_url('assets/images/unavailable.png'); ?>'"
        />
      </div>
      <div class="flex-shrink-0 w-48 rounded-lg overflow-hidden shadow-lg relative cursor-pointer" onclick="openModal('<?php echo base_url('assets/images/gal5.png'); ?>">
        <img 
          src="<?php echo base_url('assets/images/gal5.png'); ?>" 
          alt="Small waterfall cascading in a lush green forest picnic spot, with colorful umbrellas and visitors enjoying the scene" 
          class="w-full h-36 object-cover" 
          onerror="this.onerror=null;this.src='<?php echo base_url('assets/images/unavailable.png'); ?>'"
        />
      </div>
      <div class="flex-shrink-0 w-48 rounded-lg overflow-hidden shadow-lg relative cursor-pointer" onclick="openModal('<?php echo base_url('assets/images/gal6.png'); ?>')">
        <img 
          src="<?php echo base_url('assets/images/gal6.png'); ?>" 
          alt="Two men standing and holding hands with colorfully decorated Himalayan domesticated yak with traditional ornaments" 
          class="w-full h-36 object-cover" 
          onerror="this.onerror=null;this.src='<?php echo base_url('assets/images/unavailable.png'); ?>'"
        />
      </div>
      <div class="flex-shrink-0 w-48 rounded-lg overflow-hidden shadow-lg relative cursor-pointer" onclick="openModal('<?php echo base_url('assets/images/gal7.png'); ?>')">
        <img 
          src="<?php echo base_url('assets/images/gal7.png'); ?>" 
          alt="Close up of old mountain village stone wall with yellow signboard written NATULA located in a scenic travel destination" 
          class="w-full h-36 object-cover" 
          onerror="this.onerror=null;this.src='<?php echo base_url('assets/images/unavailable.png'); ?>'"
        />
      </div>
    </div>
  </main>

  <!-- Modal -->
  <div id="imageModal" class="modal">
    <div class="modal-content">
      <span class="close-btn" onclick="closeModal()">&times;</span>
      <img id="modalImage" src="" alt="Full-size image" class="max-w-full max-h-full">
    </div>
  </div>

  <!-- Footer -->
  <?= view('footer') ?>

    <script>
  const galleries = <?= json_encode($images) ?>;

  function showGallery(category) {
    const gallery = galleries[category];
    if (!gallery) return;

    document.getElementById('gallery-title').textContent = category.charAt(0).toUpperCase() + category.slice(1);
    const imagesContainer = document.getElementById('gallery-images');

    imagesContainer.innerHTML = gallery.map(img => `
      <img 
        src="${img.file_name.startsWith('http') ? img.file_name : '<?= base_url() ?>/' + img.file_name}" 
        alt="${img.title}" 
        title="${img.title}" 
        class="w-64 h-64 object-cover cursor-pointer" 
        onclick="openModal('${img.file_name.startsWith('http') ? img.file_name : '<?= base_url() ?>/' + img.file_name}')"
      />
    `).join('');

    document.getElementById('gallery').classList.add('hidden');
    document.getElementById('gallery-detail').classList.remove('hidden');
  }

  function openModal(src) {
    const modal = document.getElementById('imageModal');
    const modalImage = document.getElementById('modalImage');
    modalImage.src = src;
    modal.style.display = 'flex';
  }

  function closeModal() {
    const modal = document.getElementById('imageModal');
    modal.style.display = 'none';
  }

  document.getElementById('imageModal').addEventListener('click', function(e) {
    if (e.target === this) {
      closeModal();
    }
  });

  function backToGallery() {
    document.getElementById('gallery-detail').classList.add('hidden');
    document.getElementById('gallery').classList.remove('hidden');
  }
</script>


</body>
</html>

