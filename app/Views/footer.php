<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thari Tour Travel</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url('assets/css/custom.css') ?>" rel="stylesheet">
    
</head>
<body> -->
    <!-- Footer -->
     <style>
        .whatsapp-button {
      position: fixed;
      bottom: 100px;
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
        .telephone-button {
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
    .telephone-button i{
        font-size: 30px;
    }

     </style>
<button id="whatsapp-btn" class="whatsapp-button" aria-label="Contact us">
    <i class="bi bi-whatsapp"></i>
</button>

<button id="phone-btn" class="telephone-button" aria-label="Call us">
    <i class="bi bi-telephone"></i>
</button>


    <footer class="bg-gray-900 text-gray-300 pt-12 pb-6 text-center text-white pt-10 text-sm border-t border-gray-800 mt-10 select-none">


    <!-- Copyright -->
   
      © 2025 Thari Tour Travels. All Rights Reserved.
    
<script>
    // WhatsApp Button
    document.getElementById('whatsapp-btn').addEventListener('click', function() {
        window.open('https://api.whatsapp.com/send?phone=+918091925535', '_blank', 'noopener');
    });

    // Phone Dialer Button
    document.getElementById('phone-btn').addEventListener('click', function() {
        window.location.href = 'tel:+918091160915';
    });
</script>

</footer>
</body>
</html>