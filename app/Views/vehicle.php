<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Vehicle Rental - The Thrill Himalaya</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous" defer></script>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f9fafb;
            margin: 0;
            padding: 0;
        }
       
        .booking-form {
            max-width: 1500px;
            margin: 2rem auto;
            padding: 2.5rem 3rem;
            background: white;
            border-radius: 0.5rem;
            box-shadow: 0 8px 20px rgba(0,0,0,0.1);
        }
        .vehicle-card {
            margin-bottom: 1.5rem;
            border: 1px solid #ddd;
            border-radius: 0.5rem;
            overflow: hidden;
            transition: transform 0.5s ease;
            opacity: 0;
            transform: translateY(50px);
            min-height: 450px; /* Ensure enough height for button */
        }
        .vehicle-card.in-view {
            opacity: 1;
            transform: translateY(0);
        }
        .vehicle-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 20px rgba(0,0,0,0.1);
        }
        .vehicle-image {
            height: 300px;
            object-fit: cover;
            width: 100%;
            transition: transform 0.3s ease;
        }
        .card-body {
            padding: 1.5rem;
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            height: fit-content;
            min-height: 100px; /* Ensure space for button */
        }
        .book-now-btn {
            margin-top: auto;
            width: 100%;
            padding: 0.5rem;
            background-color: #e32128;
            border-color: #e32128;
            transition: all 0.3s ease; /* Ensure smooth transition for all color changes */
            display: block; /* Ensure button is visible */
        }
        .book-now-btn.clicked {
            background-color: #b81b1f; /* Darker shade on click */
        }
        .book-now-btn.clicked-blue {
            background-color: #007bff !important; /* Blue color with !important to override inline styles */
            border-color: #007bff !important;
        }
        
  .custom-radio .form-check-input {
    width: 1.2rem;
    height: 1.2rem;
    border: 2px solid #333; /* darker border */
  }

  

  @media (max-width: 374px) {
    .flex-no-wrap-mobile {
      flex-wrap: nowrap;
      overflow-x: auto;
    }
  }
    </style>
</head>
<body>
    <?= view('navbar') ?>

    <!-- Hero Section -->
     <header class="relative w-full  min-h-[220px] bg-cover bg-center bg-no-repeat " style="background-image: url('<?php echo base_url('assets/images/vehicle1.png'); ?>');">
    <div class="w-full h-full bg-black bg-opacity-50 flex flex-col justify-center items-center">
      <h1 class="text-white text-4xl md:text-5xl font-extrabold drop-shadow-lg select-none">Vehicle Rental</h1>
      <p class="lead text-white">Book your car or bike for an unforgettable journey!</p>
      <nav class="mt-1">
        <ul class="inline-flex items-center space-x-3 text-gray-300 text-sm select-none">
          <li><a href="/" class="hover:underline">Home</a></li>
          <li><span>›</span></li>
          <li>Vehicle Rental</li>
        </ul>
      </nav>
    </div>
  </header>
    
    <!-- Booking Form -->
    <div class="booking-form" id="booking-form">
        <h1 class="text-center mb-4">Book Your Vehicle</h1>
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

        <form action="<?php echo base_url('vehicle/save'); ?>" method="post">
            <!-- Name and Mobile Number in one line -->
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="name" class="form-label">Full Name</label>
                    <input type="text" class="form-control full_name" name="full_name" id="name" placeholder="Enter your full name" required>
                </div>
                <div class="col-md-6">
                    <label for="mobileNumber" class="form-label">Mobile Number</label>
                    <input type="tel" class="form-control" name="mobileNumber" id="mobileNumber" placeholder="Enter your mobile number" pattern="[0-9]{10}" required>
                </div>
            </div>

            <!-- Email ID -->
            <div class="mb-3">
                <label for="email" class="form-label">Email ID</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email" required>
            </div>

            <!-- Number of Adults and Children in one line -->
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="adults" class="form-label">Number of Adults</label>
                    <input type="number" class="form-control" name="adults" id="adults" min="1" max="10" value="1" required>
                </div>
                <div class="col-md-6">
                    <label for="children" class="form-label">Number of Children</label>
                    <input type="number" class="form-control" name="children" id="children" min="0" max="10" value="0">
                </div>
            </div>

            <!-- Vehicle Type -->
            <div class="mb-3">
                <label for="vehicleType" class="form-label">Select Vehicle Type</label>
                <select class="form-select" name="vehicleType" id="vehicleType" required>
                    <option value="">Choose...</option>
                    <option value="car">Car</option>
                    <option value="bike">Bike</option>
                </select>
            </div>
            
            <div class="mb-4">
                <div class="d-flex flex-no-wrap-mobile gap-4" style="width: 100%; overflow-x: auto;">
                    
                    <!-- Rental Duration (Left Side) -->
                    <div style="flex: 1 1 0; min-width: 170px;">
                        <label class="form-label ">Rental Duration</label>
                        <div class="form-check custom-radio mb-3">
                            <input class="form-check-input" type="radio" name="duration" id="hourly" value="hourly" required>
                            <label class="form-check-label" for="hourly">Hourly</label>
                        </div>
                        <div class="form-check custom-radio mb-3">
                            <input class="form-check-input" type="radio" name="duration" id="daily" value="daily">
                            <label class="form-check-label" for="daily">Daily</label>
                        </div>

                        <!-- Duration Input -->
                        <div class="mt-3" id="durationInput" style="display: none;">
                            <label for="durationValue" class="form-label">Enter Duration</label>
                            <input type="text" class="form-control" name="durationValue" id="durationValue" min="1" placeholder="e.g., 2 hours or days">
                        </div>
                    </div>

                    <!-- With Driver (Right Side) -->
                    <div style="flex: 1 1 0; min-width: 170px;">
                        <label class="form-label ">With Driver</label>
                        <div class="form-check custom-radio mb-3">
                            <input class="form-check-input" type="radio" name="with_driver" id="withDriver" value="yes" required>
                            <label class="form-check-label" for="withDriver">Yes</label>
                        </div>
                        <div class="form-check custom-radio mb-3">
                            <input class="form-check-input" type="radio" name="with_driver" id="withoutDriver" value="no">
                            <label class="form-check-label" for="withoutDriver">No</label>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Pickup Location -->
            <div class="mb-3">
                <label for="pickupLocation" class="form-label">Pickup Location</label>
                <input type="text" class="form-control" name="pickupLocation" id="pickupLocation" placeholder="Enter pickup location" required>
            </div>

            <!-- Date and Time -->
            <div class="mb-3">
                <label for="pickupDate" class="form-label">Pickup Date & Time</label>
                <input type="datetime-local" class="form-control" name="pickupDate" id="pickupDate" required>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary w-100" style="background-color: #e32128; border-color: #e32128;">Book Now</button>
        </form>
    </div>

    <!-- Vehicle Options -->
    <section class="container py-5" id="vehicle-section">
        <h2 class="text-center mb-4" style="color: black; font-weight: 700; text-transform: uppercase; letter-spacing: 1px;">Explore Our Fleet</h2>
        <p class="text-center mb-5 text-muted">Choose from a wide range of vehicles for your perfect adventure!</p>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-3" id="vehicle-cards">
            <!-- Sedan Car -->
            <div class="col">
                <div class="card h-100 vehicle-card border-0 shadow-sm rounded-4" style="background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%);">
                    <img src="<?php echo base_url('assets/images/vehicle2.png'); ?>" alt="Sedan Car" class="card-img-top vehicle-image">
                    <div class="card-body">
                        <h5 class="card-title text-success fw-bold mb-2">Sedan Car</h5>
                        <p class="card-text text-secondary mb-3">Comfortable ride for 4 passengers.</p>
                        <button type="button" class="btn btn-primary book-now-btn" style="background-color: #e32128; border-color: #e32128;">Book Now</button>
                    </div>
                </div>
            </div>

            <!-- SUV Car -->
            <div class="col">
                <div class="card h-100 vehicle-card border-0 shadow-sm rounded-4" style="background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%);">
                    <img src="<?php echo base_url('assets/images/vehicle3.png'); ?>" alt="SUV Car" class="card-img-top vehicle-image">
                    <div class="card-body">
                        <h5 class="card-title text-success fw-bold mb-2">SUV Car</h5>
                        <p class="card-text text-secondary mb-3">Spacious ride for 6 passengers, ideal for groups.</p>
                        <button type="button" class="btn btn-primary book-now-btn" style="background-color: #e32128; border-color: #e32128;">Book Now</button>
                    </div>
                </div>
            </div>

            <!-- Swift Car -->
            <div class="col">
                <div class="card h-100 vehicle-card border-0 shadow-sm rounded-4" style="background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%);">
                    <img src="<?php echo base_url('assets/images/vehicle4.png'); ?>" alt="Swift Desire" class="card-img-top vehicle-image">
                    <div class="card-body">
                        <h5 class="card-title text-success fw-bold mb-2">Swift Desire</h5>
                        <p class="card-text text-secondary mb-3">Spacious ride for 5 passengers, ideal for family.</p>
                        <button type="button" class="btn btn-primary book-now-btn" style="background-color: #e32128; border-color: #e32128;">Book Now</button>
                    </div>
                </div>
            </div>

            <!-- Tempo Traveller -->
            <div class="col">
                <div class="card h-100 vehicle-card border-0 shadow-sm rounded-4" style="background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%);">
                    <img src="<?php echo base_url('assets/images/vehicle9.png'); ?>" alt="Tempo Traveller" class="card-img-top vehicle-image">
                    <div class="card-body">
                        <h5 class="card-title text-success fw-bold mb-2">Tempo Traveller</h5>
                        <p class="card-text text-secondary mb-3">Comfortable ride for 12 passengers, ideal for groups.</p>
                        <button type="button" class="btn btn-primary book-now-btn" style="background-color: #e32128; border-color: #e32128;">Book Now</button>
                    </div>
                </div>
            </div>

            <!-- Luxury Car -->
            <div class="col">
                <div class="card h-100 vehicle-card border-0 shadow-sm rounded-4" style="background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%);">
                    <img src="<?php echo base_url('assets/images/vehicle5.png'); ?>" alt="Luxury Car" class="card-img-top vehicle-image">
                    <div class="card-body">
                        <h5 class="card-title text-success fw-bold mb-2">Luxury Car</h5>
                        <p class="card-text text-secondary mb-3">Premium ride for 4 with top-notch comfort.</p>
                        <button type="button" class="btn btn-primary book-now-btn" style="background-color: #e32128; border-color: #e32128;">Book Now</button>
                    </div>
                </div>
            </div>

            <!-- Royal Enfield Bike -->
            <div class="col">
                <div class="card h-100 vehicle-card border-0 shadow-sm rounded-4" style="background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%);">
                    <img src="<?php echo base_url('assets/images/vehicle6.png'); ?>" alt="Royal Enfield Bike" class="card-img-top vehicle-image">
                    <div class="card-body">
                        <h5 class="card-title text-success fw-bold mb-2">Royal Enfield Bike</h5>
                        <p class="card-text text-secondary mb-3">Adventure-ready bike for 2.</p>
                        <button type="button" class="btn btn-primary book-now-btn" style="background-color: #e32128; border-color: #e32128;">Book Now</button>
                    </div>
                </div>
            </div>

            <!-- Himalayan Bike -->
            <div class="col">
                <div class="card h-100 vehicle-card border-0 shadow-sm rounded-4" style="background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%);">
                    <img src="<?php echo base_url('assets/images/vehicle7.png'); ?>" alt="Himalayan Bike" class="card-img-top vehicle-image">
                    <div class="card-body">
                        <h5 class="card-title text-success fw-bold mb-2">Himalayan Bike</h5>
                        <p class="card-text text-secondary mb-3">Rugged bike for off-road adventures.</p>
                        <button type="button" class="btn btn-primary book-now-btn" style="background-color: #e32128; border-color: #e32128;">Book Now</button>
                    </div>
                </div>
            </div>

            <!-- Scooty -->
            <div class="col">
                <div class="card h-100 vehicle-card border-0 shadow-sm rounded-4" style="background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%);">
                    <img src="<?php echo base_url('assets/images/vehicle8.png'); ?>" alt="Scooty" class="card-img-top vehicle-image">
                    <div class="card-body">
                        <h5 class="card-title text-success fw-bold mb-2">Scooty</h5>
                        <p class="card-text text-secondary mb-3">Spacious for 2 passengers, perfect for partners.</p>
                        <button type="button" class="btn btn-primary book-now-btn" style="background-color: #e32128; border-color: #e32128;">Book Now</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-5">
            <a href="#" class="btn btn-danger btn-lg" style="background-color: #e32128; border-color: #e32128;">View All Vehicles</a>
        </div>
    </section>

    <?= view('footer') ?>

    <script>
        // Animation for cards when they come into view
        function isInViewport(element) {
            const rect = element.getBoundingClientRect();
            return (
                rect.top >= 0 &&
                rect.top <= (window.innerHeight || document.documentElement.clientHeight)
            );
        }

        function handleScroll() {
            const cards = document.querySelectorAll('.vehicle-card');
            cards.forEach(card => {
                if (isInViewport(card)) {
                    card.classList.add('in-view');
                }
            });
        }

        window.addEventListener('scroll', handleScroll);
        window.addEventListener('load', handleScroll);

        // Button click to redirect to booking form
        document.querySelectorAll('.book-now-btn').forEach(button => {
            button.addEventListener('click', function() {
                document.getElementById('booking-form').scrollIntoView({ behavior: 'smooth' });
            });
        });

        // Duration input toggle
        document.addEventListener('DOMContentLoaded', function() {
            const durationRadios = document.querySelectorAll('input[name="duration"]');
            const durationInput = document.getElementById('durationInput');

            durationRadios.forEach(radio => {
                radio.addEventListener('change', function() {
                    if (this.checked) {
                        durationInput.style.display = 'block';
                        document.getElementById('durationValue').required = true;
                    }
                });
            });
        });

        // Hover effect on images
        document.querySelectorAll('.vehicle-card').forEach(card => {
            card.addEventListener('mouseover', () => {
                const img = card.querySelector('.vehicle-image');
                img.style.transform = 'scale(1.05)';
            });
            card.addEventListener('mouseout', () => {
                const img = card.querySelector('.vehicle-image');
                img.style.transform = 'scale(1)';
            });
        });
    </script>
</body>
</html>