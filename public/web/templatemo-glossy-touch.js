let currentPage = 'home';

function showPage(pageId) {
    // Hide all pages
    document.querySelectorAll('.page').forEach(page => {
        page.classList.remove('active');
    });
    
    // Show selected page
    document.getElementById(pageId).classList.add('active');
    
    // Update navigation
    document.querySelectorAll('.nav-links a').forEach(link => {
        link.classList.remove('active');
        if (link.getAttribute('onclick') === `showPage('${pageId}')`) {
            link.classList.add('active');
        }
    });
    
    currentPage = pageId;
    
    // Move footer to the active page
    const footer = document.getElementById('footer');
    const activePage = document.getElementById(pageId);
    activePage.appendChild(footer);
    
    // Scroll to top
    window.scrollTo({ top: 0, behavior: 'smooth' });
}

function toggleMenu(el) {
  // animate hamburger into X
  el.classList.toggle("active");
  let bars = el.querySelectorAll("span");
  if (el.classList.contains("active")) {
    bars[0].classList.add("rotate-45", "translate-y-2");
    bars[1].classList.add("opacity-0");
    bars[2].classList.add("-rotate-45", "-translate-y-2");
  } else {
    bars[0].classList.remove("rotate-45", "translate-y-2");
    bars[1].classList.remove("opacity-0");
    bars[2].classList.remove("-rotate-45", "-translate-y-2");
  }

  // toggle slide nav
  let menu = document.getElementById("mobileMenu");
  if (menu.classList.contains("max-h-0")) {
    menu.classList.remove("max-h-0");
    menu.classList.add("max-h-[500px]"); // enough height for links
  } else {
    menu.classList.add("max-h-0");
    menu.classList.remove("max-h-[500px]");
  }
}

// Initialize footer position
window.addEventListener('DOMContentLoaded', () => {
    const footer = document.getElementById('footer');
    const homePage = document.getElementById('home');
    homePage.appendChild(footer);
});

// Add interactive parallax effect to background shapes
document.addEventListener('mousemove', (e) => {
    const shapes = document.querySelectorAll('.shape');
    const x = e.clientX / window.innerWidth;
    const y = e.clientY / window.innerHeight;
    
    shapes.forEach((shape, index) => {
        const speed = (index + 1) * 0.5;
        const xPos = (x - 0.5) * speed * 20;
        const yPos = (y - 0.5) * speed * 20;
        shape.style.transform = `translate(${xPos}px, ${yPos}px)`;
    });
});


// Add scroll-based animations
window.addEventListener('scroll', () => {
    const scrolled = window.pageYOffset;
    const parallax = document.querySelector('.bg-shapes');
    const speed = scrolled * 0.5;
    parallax.style.transform = `translateY(${speed}px)`;
});

// Add click ripple effect to glass elements
document.querySelectorAll('.glass').forEach(element => {
    element.addEventListener('click', function(e) {
        const ripple = document.createElement('div');
        const rect = this.getBoundingClientRect();
        const size = Math.max(rect.width, rect.height);
        const x = e.clientX - rect.left - size / 2;
        const y = e.clientY - rect.top - size / 2;
        
        ripple.style.cssText = `
            position: absolute;
            width: ${size}px;
            height: ${size}px;
            left: ${x}px;
            top: ${y}px;
            background: rgba(255, 255, 255, 0.3);
            border-radius: 50%;
            transform: scale(0);
            animation: ripple 0.6s linear;
            pointer-events: none;
            z-index: 1000;
        `;
        
        this.style.position = 'relative';
        this.appendChild(ripple);
        
        setTimeout(() => {
            ripple.remove();
        }, 600);
    });
});

// Add ripple animation keyframes
const style = document.createElement('style');
style.textContent = `
    @keyframes ripple {
        to {
            transform: scale(4);
            opacity: 0;
        }
    }
`;
document.head.appendChild(style);

// Form submission handling
document.querySelector('form').addEventListener('submit', function(e) {
    e.preventDefault();
    
    // Create success message
    const successMsg = document.createElement('div');
    successMsg.style.cssText = `
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background: rgba(46, 204, 113, 0.9);
        color: white;
        padding: 20px 40px;
        border-radius: 10px;
        backdrop-filter: blur(20px);
        z-index: 10000;
        animation: fadeIn 0.3s ease;
    `;
    successMsg.textContent = 'Message sent successfully! We\'ll get back to you soon.';
    
    document.body.appendChild(successMsg);
    
    // Remove message after 3 seconds
    setTimeout(() => {
        successMsg.remove();
    }, 3000);
    
    // Reset form
    this.reset();
});

// Add fade in animation
const fadeStyle = document.createElement('style');
fadeStyle.textContent = `
    @keyframes fadeIn {
        from { opacity: 0; transform: translate(-50%, -50%) scale(0.8); }
        to { opacity: 1; transform: translate(-50%, -50%) scale(1); }
    }
`;
document.head.appendChild(fadeStyle);

// Carousel functionality
document.addEventListener('DOMContentLoaded', () => {
    const carousel = document.querySelector('#fade-quote-carousel');
    const items = carousel.querySelectorAll('.carousel-item');
    const prevButton = carousel.querySelector('.carousel-control.left');
    const nextButton = carousel.querySelector('.carousel-control.right');
    let currentIndex = Array.from(items).findIndex(item => item.classList.contains('active'));
    
    function showSlide(index) {
        items.forEach(item => item.classList.remove('active'));
        items[index].classList.add('active');
        currentIndex = index;
    }

    prevButton.addEventListener('click', (e) => {
        e.preventDefault();
        let newIndex = currentIndex - 1;
        if (newIndex < 0) newIndex = items.length - 1;
        showSlide(newIndex);
    });

    nextButton.addEventListener('click', (e) => {
        e.preventDefault();
        let newIndex = (currentIndex + 1) % items.length;
        showSlide(newIndex);
    });

    // Auto-slide every 5 seconds
    let autoSlide = setInterval(() => {
        let newIndex = (currentIndex + 1) % items.length;
        showSlide(newIndex);
    }, 5000);

    // Pause auto-slide on hover
    carousel.addEventListener('mouseenter', () => clearInterval(autoSlide));
    carousel.addEventListener('mouseleave', () => {
        autoSlide = setInterval(() => {
            let newIndex = (currentIndex + 1) % items.length;
            showSlide(newIndex);
        }, 5000);
    });
});


// Tech Stacks functionality
document.addEventListener('DOMContentLoaded', () => {
    const categoryButtons = document.querySelectorAll('.category-btn');
    const categoryContents = document.querySelectorAll('.category-content'); // assume har category ka content hai

    function activateCategory(category) {
        // Hide all contents
        categoryContents.forEach(c => c.classList.add('hidden'));
        categoryButtons.forEach(b => b.classList.remove('active'));

        // Show selected
        const activeContent = document.getElementById(`category-${category}`);
        const activeButton = document.querySelector(`.category-btn[data-category="${category}"]`);

        if (activeContent) activeContent.classList.remove('hidden');
        if (activeButton) activeButton.classList.add('active');

        // Save selection
        localStorage.setItem("activeCategory", category);
    }

    // Button Click Event
    categoryButtons.forEach(button => {
        button.addEventListener('click', (e) => {
            e.preventDefault();
            const category = button.dataset.category;
            activateCategory(category);
        });
    });

    // Load from localStorage or default
    const savedCategory = localStorage.getItem("activeCategory") || "Backend"; 
    activateCategory(savedCategory);
});

 const titles = document.querySelectorAll('.service-title');
    const contents = document.querySelectorAll('.service-content');

    // Service Title Click
    titles.forEach(title => {
        title.addEventListener('click', () => {
            contents.forEach(c => c.classList.add('hidden'));
            titles.forEach(t => t.classList.remove('bg-gray-500', 'font-semibold'));

            const index = title.getAttribute('data-index');
            document.getElementById('service-' + index).classList.remove('hidden');
            title.classList.add('bg-gray-500', 'font-semibold');
        });
    });

const menuToggle = document.getElementById('menu-toggle');
    const navLinks = document.getElementById('nav-links');

    menuToggle.addEventListener('click', () => {
        navLinks.classList.toggle('hidden');
    });
      
    // Feature Click
    // document.addEventListener('click', function(e) {
    //     if (e.target.closest('.feature-card')) {
    //         const card = e.target.closest('.feature-card');
    //         const detail = card.getAttribute('data-detail');
    //         const parent = card.closest('.service-content');
    //         const featureBox = parent.querySelector('[id^="feature-detail-"]');

    //         featureBox.innerHTML = `
    //             <h3 class="text-lg font-semibold mb-2">Feature Detail</h3>
    //             <p class="text-gray-700">${detail}</p>
    //         `;
    //         featureBox.classList.remove('hidden');
    //     }
    // });
    
    
    
    // Default first service open
    if (contents.length > 0) {
        contents[0].classList.remove('hidden');
        titles[0].classList.add('', 'font-semibold');
    }
    document.querySelectorAll(".feature-card").forEach(card => {
    card.addEventListener("click", () => {
        const targetId = card.dataset.target;
        const detailBox = document.getElementById(targetId);
        const parser = new DOMParser();
        const decoded = parser.parseFromString(card.dataset.detail, "text/html").body.innerHTML;
        detailBox.innerHTML = decoded;
    });
});
    
    