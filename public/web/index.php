<?php
// Sample data for dynamic content

function formatDetail($detail) {
    $lines = array_filter(array_map('trim', explode("\n", $detail)));
    $html = "";
    $listOpen = false;
    $cardOpen = false;

    foreach ($lines as $line) {
        if ($line === '') continue;

        // Detect numbered headings (e.g., "1 Front-End Development")
        if (preg_match('/^\d+\s/', $line)) {
            if ($listOpen) {
                $html .= "</ul>";
                $listOpen = false;
            }
            if ($cardOpen) {
                $html .= "</div>"; // Close previous card
            }
            $html .= "<div class='bg-white/10 backdrop-blur-md rounded-lg p-4 mb-4 shadow-md'>";
            $html .= "<h4 class='font-semibold text-lg text-white mt-2 mb-1'>" . htmlspecialchars($line) . "</h4>";
            $cardOpen = true;
        } 
        // Detect bullet points
        elseif (preg_match('/^[•\-\o]/u', $line)) {
            if (!$listOpen) {
                if (!$cardOpen) {
                    $html .= "<div class='bg-white/10 backdrop-blur-md rounded-lg p-4 mb-4 shadow-md'>";
                    $cardOpen = true;
                }
                $html .= '<ul class="list-disc pl-5 space-y-1">';
                $listOpen = true;
            }
            $html .= "<li class='text-gray-200'>" . htmlspecialchars(preg_replace('/^[•\-\o]\s*/u', '', $line)) . "</li>";
        } 
        // Normal line (paragraph/text)
        else {
            if ($listOpen) {
                $html .= "</ul>";
                $listOpen = false;
            }
            if (!$cardOpen) {
                $html .= "<div class='bg-white/10 backdrop-blur-md rounded-lg p-4 mb-4 shadow-md'>";
                $cardOpen = true;
            }
            $html .= "<p class='text-gray-200 mb-2'>" . htmlspecialchars($line) . "</p>";
        }
    }

    if ($listOpen) {
        $html .= "</ul>";
    }
    if ($cardOpen) {
        $html .= "</div>";
    }

    return $html;
}

$companyName = "Silion Club";
$copyrightYear = date("Y");
$pages = [
    'home' => 'Home',
    'about' => 'About',
    'services' => 'Services',
    'portfolio' => 'Portfolio',
    'careers' => 'Careers',
    'contact' => 'Contact'
];
$testimonials = [
    [
        'image' => 'images/customer-1.png',
        'text' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s.',
        'name' => 'Suzanne Smith',
        'city' => 'Australia'
    ],
    [
        'image' => 'images/customer-2.png',
        'text' => 'Lorem Ipsum has been the industry\'s standard dummy text, providing exceptional design and functionality.',
        'name' => 'John Doe',
        'city' => 'Canada'
    ],
    [
        'image' => 'images/customer-3.jpg',
        'text' => 'The innovative approach and attention to detail from Glossy Touch transformed our digital presence.',
        'name' => 'Emma Wilson',
        'city' => 'USA'
    ],
    [
        'image' => 'images/customer-1.png',
        'text' => 'Working with Glossy Touch was a game-changer for our brand’s online experience.',
        'name' => 'Michael Chen',
        'city' => 'UK'
    ],
    [
        'image' => 'images/customer-2.png',
        'text' => 'Their glass morphism design brought elegance and modernity to our website.',
        'name' => 'Sarah Lee',
        'city' => 'Germany'
    ],
    [
        'image' => 'images/customer-1.png',
        'text' => 'Glossy Touch delivered a seamless and visually stunning user interface.',
        'name' => 'David Kim',
        'city' => 'Japan'
    ]
]; 
$techStacks = [
    "Frontend" => [
        ["name" => "React", "img" => "https://www.csm.tech/public/img/website/techstack/Frontend/angular.webp", "desc" => "React JavaScript library"],
        ["name" => "Ionic", "img" => "https://www.csm.tech/public/img/website/techstack/Frontend/ionic.webp", "desc" => "Ionic framework"],
        ["name" => "Angular", "img" => "https://www.csm.tech/public/img/website/techstack/Frontend/react.webp", "desc" => "Angular framework"],
        ["name" => "CSS", "img" => "https://www.csm.tech/public/img/website/techstack/Frontend/CSS.png", "desc" => "CSS"],
        ["name" => "HTML5", "img" => "https://www.csm.tech/public/img/website/techstack/Frontend/HTML.png", "desc" => "HTML5 markup language"],
        ["name" => "Vue.js", "img" => "https://www.csm.tech/public/img/website/techstack/Frontend/Vue.js.png", "desc" => "Vue.js framework"],
    ],
    "Backend" => [
        ["name" => "Apache JMeter", "img" => "https://www.csm.tech/public/img/website/techstack/Backend/Jmeter.png", "desc" => "Apache JMeter performance testing tool"],
        ["name" => "Postman", "img" => "https://www.csm.tech/public/img/website/techstack/Backend/POSTMAN.png", "desc" => "Postman API platform"],
        ["name" => "Selenium", "img" => "https://www.csm.tech/public/img/website/techstack/Backend/Selenium.png", "desc" => "Selenium automation tool"],
        ["name" => "ASP.NET", "img" => "https://www.csm.tech/public/img/website/techstack/Backend/aspnet.webp", "desc" => "ASP.NET framework"],
        ["name" => "PHP", "img" => "https://www.csm.tech/public/img/website/techstack/Backend/php.webp", "desc" => "PHP programming language"],
        ["name" => "JavaScript", "img" => "https://www.csm.tech/public/img/website/techstack/Backend/js.png", "desc" => "JavaScript runtime"],
        ["name" => "Azure Stack", "img" => "https://www.csm.tech/public/img/website/techstack/Backend/azurestack.webp", "desc" => "Azure Stack cloud platform"],
        ["name" => "Hyperledger", "img" => "https://www.csm.tech/public/img/website/techstack/Backend/hyperledger.png", "desc" => "Hyperledger blockchain"],
        ["name" => "IBM", "img" => "https://www.csm.tech/public/img/website/techstack/Backend/ibm.webp", "desc" => "IBM technologies"],
        ["name" => "Java", "img" => "https://www.csm.tech/public/img/website/techstack/Backend/java.webp", "desc" => "Java programming language"],
        ["name" => ".NET", "img" => "https://www.csm.tech/public/img/website/techstack/Backend/net.webp", "desc" => ".NET framework"],
        ["name" => "Node.js", "img" => "https://www.csm.tech/public/img/website/techstack/Backend/nodejs.png", "desc" => "Node.js JavaScript runtime"],
        ["name" => "Odoo", "img" => "https://www.csm.tech/public/img/website/techstack/Backend/odoo.webp", "desc" => "Odoo ERP platform"],
        ["name" => "Python", "img" => "https://www.csm.tech/public/img/website/techstack/Backend/python.webp", "desc" => "Python programming language"],
    ],
    "Database" => [
        ["name" => "Hadoop", "img" => "https://www.csm.tech/public/img/website/techstack/Database/Hadoop.png", "desc" => "Hadoop big data platform"],
        ["name" => "MySQL", "img" => "https://www.csm.tech/public/img/website/techstack/Database/mysql.png", "desc" => "MySQL database"],
        ["name" => "Oracle", "img" => "https://www.csm.tech/public/img/website/techstack/Database/oracle.webp", "desc" => "Oracle database"],
        ["name" => "SQL Server", "img" => "https://www.csm.tech/public/img/website/techstack/Database/sqlserver.png", "desc" => "SQL Server database"],
        ["name" => "PostgreSQL", "img" => "https://www.csm.tech/public/img/website/techstack/Database/postgresql.png", "desc" => "PostgreSQL database"],
        ["name" => "MongoDB", "img" => "https://www.csm.tech/public/img/website/techstack/Database/MongoDB.png", "desc" => "MongoDB NoSQL database"],
    ],
    "Analytics" => [
        ["name" => "Power BI", "img" => "https://www.csm.tech/public/img/website/techstack/Analytics/power-bi.png", "desc" => "Power BI data visualization"],
        ["name" => "SAS", "img" => "https://www.csm.tech/public/img/website/techstack/Analytics/sas.png", "desc" => "SAS analytics platform"],
        ["name" => "Tableau", "img" => "https://www.csm.tech/public/img/website/techstack/Analytics/tableau.webp", "desc" => "Tableau data visualization"],
    ],
    "Mobile Apps" => [
        ["name" => "Flutter", "img" => "https://upload.wikimedia.org/wikipedia/commons/1/17/Google-flutter-logo.png", "desc" => "Flutter framework"],
        ["name" => "React Native", "img" => "https://upload.wikimedia.org/wikipedia/commons/a/a7/React-icon.svg", "desc" => "React Native framework"],
        ["name" => "Xamarin", "img" => "https://www.csm.tech/public/img/website/techstack/Mobile%20App/Xamarin.png", "desc" => "Xamarin framework"],
        ["name" => "Android", "img" => "https://www.csm.tech/public/img/website/techstack/Mobile%20App/android.webp", "desc" => "Android development"],
        ["name" => "iOS", "img" => "https://www.csm.tech/public/img/website/techstack/Mobile%20App/ios.webp", "desc" => "iOS development"],
    ],
    "Cloud" => [
        ["name" => "AWS", "img" => "https://upload.wikimedia.org/wikipedia/commons/9/93/Amazon_Web_Services_Logo.svg", "desc" => "Amazon Web Services cloud"],
        ["name" => "Oracle Cloud", "img" => "https://www.csm.tech/public/img/website/techstack/Cloud/Oracle%20Cloud.png", "desc" => "Oracle Cloud platform"],
        ["name" => "Microsoft Azure", "img" => "https://upload.wikimedia.org/wikipedia/commons/f/fa/Microsoft_Azure.svg", "desc" => "Microsoft Azure cloud"],
    ],
    "DevOps" => [
        ["name" => "Docker", "img" => "https://upload.wikimedia.org/wikipedia/commons/4/4e/Docker_%28container_engine%29_logo.svg", "desc" => "Docker containerization"],
        ["name" => "Kubernetes", "img" => "https://upload.wikimedia.org/wikipedia/commons/3/39/Kubernetes_logo_without_workmark.svg", "desc" => "Kubernetes orchestration"],
        ["name" => "OpenShift", "img" => "https://www.csm.tech/public/img/website/techstack/DevOps/OpenShift.png", "desc" => "OpenShift platform"],
    ]
];
$currentCategory = $_GET['category'] ?? 'Backend';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($companyName); ?> - Modern Glass Design Experience</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="custom.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="bg-shapes">
        <?php for ($i = 0; $i < 6; $i++): ?>
            <div class="shape"></div>
        <?php endfor; ?>
    </div>

   <!-- SINGLE NAVIGATION HEADER -->
<header>
    <div class="container">
        <nav class="glass relative flex items-center px-4 py-2">
            
   <!-- Logo + Company Name + Hamburger -->
<div class="flex items-center justify-between w-full">
    <!-- Left: Logo + Company Name -->
    <div class="logo flex gap-3 items-center cursor-pointer" onclick="showPage('home')">
        <!-- Logo Image -->
        <div class="logo-icon w-[154px] h-[76px]">
            <img src="images/logo.png" alt="Company Logo" 
                 class="w-full h-full object-contain brightness-125 opacity-95">
        </div>
        <span class="text-white font-semibold text-xl md:text-2xl">
            <?php echo htmlspecialchars($companyName); ?>
        </span>
    </div>

    <!-- Right: Hamburger (only mobile) -->
    <div class="hamburger flex flex-col justify-end gap-1.5 cursor-pointer md:hidden"
        onclick="toggleMenu(this)">
        <span class="w-6 h-0.5 bg-white rounded transition-all duration-300"></span>
        <span class="w-6 h-0.5 bg-white rounded transition-all duration-300"></span>
        <span class="w-6 h-0.5 bg-white rounded transition-all duration-300"></span>
    </div>
</div>



            <!-- Desktop nav -->
            <div class="nav-links hidden md:flex gap-6 text-white font-medium ml-6">
                <?php foreach ($pages as $id => $name): ?>
                    <a href="javascript:void(0)" 
                    onclick="showPage('<?php echo $id; ?>')" 
                    class="nav-link px-3 py-2 rounded-md transition hover:bg-white/20 <?php echo $id === 'home' ? 'bg-gradient-to-r from-purple-600 to-cyan-400 shadow-lg' : ''; ?>">
                    <?php echo htmlspecialchars($name); ?>
                    </a>
                <?php endforeach; ?>
            </div>

            <!-- Mobile nav -->
            <div id="mobileMenu"
                class="max-h-0 overflow-hidden flex flex-col gap-4 text-white font-medium  transition-all duration-500 ease-in-out md:hidden">
                <?php foreach ($pages as $id => $name): ?>
                    <a href="javascript:void(0)"
                    onclick="showPage('<?php echo $id; ?>'); toggleMenu(document.querySelector('.hamburger'));"
                    class="nav-link block text-center py-2 transition hover:text-yellow-300 <?php echo $id === 'home' ? 'text-yellow-300' : ''; ?>">
                    <?php echo htmlspecialchars($name); ?>
                    </a>
                <?php endforeach; ?>
            </div>
        </nav>
    </div>
</header>


    <!-- HOME PAGE -->
    <div id="home" class="page active">
        <div class="container">
            <div class="content-wrapper">
                <section class="hero glass">
                    <div class="hero-image">
                        <img src="images/templatemo-futuristic-girl.jpg" alt="Modern Technology Interaction" />
                    </div>
                    <div class="hero-content">
                        <h1>Welcome to the Future</h1>
                        <p>Experience cutting-edge glass morphism design that brings depth and elegance to modern web interfaces. Clean, translucent, and beautifully interactive.</p>
                        <a href="#" class="cta-button" onclick="showPage('about')">Learn More</a>
                    </div>
                </section>

                <section class="features">
                    <?php
                    $features = [
    [
        'icon' => '💻',
        'title' => 'Web Apps Development',
        'desc' => 'Our Web App Development services help businesses transform ideas into interactive, high-performing applications tailored to meet unique business needs. From startups to enterprises, we create custom solutions that streamline operations, enhance user engagement, and deliver measurable results.'
    ],
    [
        'icon' => '📱',
        'title' => 'Mobile Apps Development',
        'desc' => 'In today’s digital world, mobile apps are more than just tools — they’re the bridge between brands and their customers. We specialize in building powerful, user-friendly, and high-performance mobile applications that help businesses thrive in a mobile-first era.'
    ],
    [
        'icon' => '🧑‍💼',
        'title' => 'IT Consulting',
        'desc' => 'Technology evolves every day, and businesses that adapt quickly stay ahead. Our IT Consulting services help organizations harness the power of technology to optimize processes, improve efficiency, and drive growth. From startups to enterprises, we provide strategic guidance and practical solutions to make IT your business advantage.'
    ],
    [
        'icon' => '🎨',
        'title' => 'Custom Software Development',
        'desc' => 'We provide Custom Software Development services that empower businesses with scalable, secure, and innovative solutions designed to match their exact requirements. From automation to enterprise-grade systems, we help you achieve efficiency, growth, and competitive advantage through technology.'
    ],
    [
        'icon' => '🛒',
        'title' => 'Ecommerce Development',
        'desc' => 'In today’s digital-first world, a powerful e-commerce platform is the backbone of every successful retail business. Our E-Commerce Development services help you create feature-rich, secure, and conversion-driven online stores that deliver exceptional shopping experiences and boost revenue. Whether you’re a startup or an enterprise, we build tailored solutions that fit your business model.'
    ],
    [
        'icon' => '📢',
        'title' => 'Digital Marketing',
        'desc' => 'In today’s competitive online world, visibility is everything. Our Digital Marketing services help businesses increase brand awareness, drive quality traffic, and generate more leads & sales through proven strategies. From startups to enterprises, we create customized marketing campaigns that deliver measurable results.'
    ],
    [
        'icon' => '⚙️',
        'title' => 'ERP Development',
        'desc' => ' Managing multiple business processes can be complex and time-consuming. Our ERP Development services help organizations integrate operations into a single, unified system — improving efficiency, reducing costs, and enabling smarter decision-making. Whether you need a custom ERP solution or want to upgrade your existing system, we deliver scalable and future-ready software.'
    ],
    [
        'icon' => '🎮',
        'title' => 'Game Application Development',
        'desc' => 'Our Game Application Development services help businesses and entrepreneurs build immersive, feature-rich, and high-performing games for mobile, desktop, and web platforms. From casual games to advanced multiplayer solutions, we design experiences that keep players coming back.'
    ]
];

                    foreach ($features as $feature): ?>
        <div class="feature-card glass p-6 rounded-2xl shadow-lg text-center flex flex-col justify-between">
            <div>
                <div class="feature-icon text-5xl mb-4"><?php echo $feature['icon']; ?></div>
                <h3 class="text-xl font-bold mb-2"><?php echo htmlspecialchars($feature['title']); ?></h3>
                <p class="text-gray-200 text-sm"><?php echo htmlspecialchars($feature['desc']); ?></p>
            </div>
            <button onclick="openContactModal()" class="mt-4 bg-gradient-to-r from-blue-600 to-cyan-400 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">
                Call Now
            </button>
        </div>
    <?php endforeach; ?>
</section>

<!-- Popup Modal -->
<div id="contactModal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
    <div class="glass rounded-lg shadow-lg w-full max-w-3xl p-6 relative">
        <button onclick="closeContactModal()" class="absolute top-2 right-2 text-white hover:text-black">✖</button>
         <!-- Modal Content -->
    <h2 class="text-3xl text-white font-bold mb-4">Call Me</h2>
    <form class="grid grid-cols-1 md:grid-cols-2 gap-4">
      
      <input type="text" placeholder="Name*" class="border rounded px-3 py-2 focus:outline-none focus:ring w-full">
      <input type="text" placeholder="Place*" class="border rounded px-3 py-2 focus:outline-none focus:ring w-full">
      
      <input type="text" placeholder="Company Name*" class="border rounded px-3 py-2 focus:outline-none focus:ring w-full">
      <input type="text" placeholder="Mobile*" class="border rounded px-3 py-2 focus:outline-none focus:ring w-full">
      
      <select class="border rounded px-3 py-2 focus:outline-none focus:ring w-full">
        <option>Select Designation*</option>
        <option>Manager</option>
        <option>Developer</option>
        <option>Team Lead</option>
        <option>Other</option>
      </select>
      
      <input type="email" placeholder="Email*" class="border rounded px-3 py-2 focus:outline-none focus:ring w-full">
            <button type="submit" class="w-full  bg-gradient-to-r from-blue-600 to-cyan-400 text-white py-2 rounded-lg hover:bg-blue-700 transition">
                Submit
            </button>
        </form>
    </div>
</div>


                <!-- FUTURE-READY TECH STACKS -->
                <section class="bg-white/5 backdrop-blur-md rounded-xl p-8 my-6 text-start">
                    <h2 class="text-4xl font-bold text-white mb-2">Future-Ready Tech Stacks</h2>
                    <p class="text-gray-300 mx-auto mb-6">
                        Leverage a robust tech stack including AI, Cloud, IoT, and Data Analytics to fuel innovation and accelerate growth.
                    </p>

                    <!-- Category Buttons -->
                    <div class="flex flex-wrap justify-start gap-3 mb-8">
                        <?php foreach ($techStacks as $category => $items): ?>
                            <a href="?category=<?= htmlspecialchars($category) ?>"
                               data-category="<?= htmlspecialchars($category) ?>"
                               class="category-btn px-6 py-4 rounded-md border border-white/30 text-white text-xl font-medium transition-all duration-300
                                      bg-white/10 hover:bg-white/20 hover:-translate-y-1 <?php echo $category === $currentCategory ? 'active bg-gradient-to-r from-purple-600 to-cyan-400' : ''; ?>">
                                <?= htmlspecialchars($category) ?>
                            </a>
                        <?php endforeach; ?>
                    </div>

                    <!-- Tech Cards -->
                    <?php foreach ($techStacks as $category => $items): ?>
                        <div id="category-<?= htmlspecialchars($category) ?>" class="category-content <?php echo $category === $currentCategory ? '' : 'hidden'; ?> grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-5 mx-auto">
                            <?php foreach ($items as $tech): ?>
                                <a href="#"
                                   class="flex items-center justify-center bg-white/10 backdrop-blur-sm rounded-lg p-8 border border-white/30 
                                          shadow-md hover:shadow-purple-500/50 hover:-translate-y-1 transition-all duration-300">
                                    <img src="<?= htmlspecialchars($tech['img']) ?>"
                                         alt="<?= htmlspecialchars($tech['desc']) ?>"
                                         class="max-h-14 object-contain select-none pointer-events-none">
                                </a>
                            <?php endforeach; ?>
                        </div>
                    <?php endforeach; ?>
                </section>
                <!-- OUR TOP PROJECTS -->
<section class="bg-white/5 backdrop-blur-md rounded-xl p-8 my-6 text-start">
    <h2 class="text-4xl font-bold text-white mb-2">Our Top Projects</h2>
    <p class="text-gray-300 mx-auto mb-6">
        Explore some of our most successful projects, showcasing innovation, performance, and impactful results.
    </p>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <?php
        $projects = [
            [
                'title' => 'Leads Management',
                'image' => 'images/project-leads.png',
                'desc'  => 'Efficient lead management system that helps businesses capture, track, and convert leads with ease.',
                'btn'   => 'Get Free Demo'
            ],
            [
                'title' => 'Opportunities',
                'image' => 'images/project-opportunities.png',
                'desc'  => 'Opportunity management platform designed to track, visualize, and convert deals into business growth.',
                'btn'   => 'Get Free Demo'
            ],
            [
                'title' => 'ERP Solution',
                'image' => 'images/project-leads.png',
                'desc'  => 'An integrated ERP solution enabling businesses to streamline operations and improve efficiency.',
                'btn'   => 'Get Free Demo'
            ]
        ];

        foreach ($projects as $project): ?>
            <div class="glass rounded-xl shadow-lg overflow-hidden flex flex-col">
                <!-- Project Image -->
                <div class="h-52 overflow-hidden">
                    <img src="<?php echo $project['image']; ?>" 
                         alt="<?php echo htmlspecialchars($project['title']); ?>" 
                         class="w-full h-full object-cover transition-transform duration-300 hover:scale-105">
                </div>
                <!-- Project Content -->
                <div class="p-5 flex flex-col flex-grow">
                    <h3 class="text-2xl font-semibold text-white mb-2">
                        <?php echo htmlspecialchars($project['title']); ?>
                    </h3>
                    <p class="text-gray-300 flex-grow mb-4">
                        <?php echo htmlspecialchars($project['desc']); ?>
                    </p>
                    <a href="javascript:void(0)" onclick="openDemoModal()" 
   class="mt-auto inline-block px-4 py-2 bg-gradient-to-r from-orange-500 to-red-500 text-white font-semibold rounded-lg shadow hover:opacity-90 transition">
   Get Free Demo
</a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>
            </div>
        </div>
    </div>

    <!-- ABOUT PAGE -->
    <div id="about" class="page">
        <div class="container">
            <div class="content-wrapper">
                <section class="about-content">
                    <div class="about-text glass">
                        <h2>About Our Vision</h2>
                        <p>We believe in creating digital experiences that feel natural and intuitive. Our glass morphism design philosophy combines transparency, depth, and subtle animations to create interfaces that users love to interact with.</p>
                        <p>Founded in 2024, our team of designers and developers are passionate about pushing the boundaries of web design while maintaining accessibility and performance standards.</p>
                        <p>Every project we undertake is crafted with attention to detail, ensuring that form follows function while never compromising on aesthetic beauty.</p>
                    </div>
                    <div class="stats">
                        <?php
                        $stats = [
                            ['icon' => 'fa-solid fa-lightbulb', 'number' => '12+', 'label' => 'Years of Operations'],
                            ['icon' => 'fa-solid fa-handshake', 'number' => '200+', 'label' => 'Happy Clients'],
                            ['icon' => 'fa-solid fa-users', 'number' => '600+', 'label' => 'Employees'],
                            ['icon' => 'fa-solid fa-globe', 'number' => '5', 'label' => 'Offices Around World'],
                            ['icon' => 'fa-solid fa-headset', 'number' => '24/7', 'label' => 'Support Available']
                        ];
                        foreach ($stats as $stat): ?>
                            <div class="stat-card glass">
                                <i class="<?php echo $stat['icon']; ?> text-4xl text-blue-600"></i>
                                <div class="stat-number"><?php echo htmlspecialchars($stat['number']); ?></div>
                                <div class="stat-label"><?php echo htmlspecialchars($stat['label']); ?></div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </section>
                <!-- Mission / Vision / Quality Policy Section -->
<section class="text-center glass p-8 my-12">
  <!-- Section Heading -->
  <h2 class="text-4xl font-bold text-white mb-10">About Company</h2>

  <!-- Cards -->
  <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    
    <!-- Mission -->
    <div class="glass p-6 rounded-2xl shadow-lg flex flex-col items-center text-center gap-4">
      <div class="w-12 h-12 flex items-center justify-center bg-gradient-to-r from-purple-600 to-cyan-400 rounded-full text-white text-xl">
        🎯
      </div>
      <h3 class="text-2xl font-bold text-white">Our Mission</h3>
      <p class="text-gray-200 leading-relaxed">
        Our mission is to create innovative products and deliver excellence in services with constant emphasis on engineering, process quality and customer satisfaction – 
        We add value to your business.
      </p>
    </div>

    <!-- Vision -->
    <div class="glass p-6 rounded-2xl shadow-lg flex flex-col items-center text-center gap-4">
      <div class="w-12 h-12 flex items-center justify-center bg-gradient-to-r from-purple-600 to-cyan-400 rounded-full text-white text-xl">
        👁️
      </div>
      <h3 class="text-2xl font-bold text-white">Our Vision</h3>
      <p class="text-gray-200 leading-relaxed">
        Our vision is to be a global leader in IT solutions and services with impetus on innovation, excellence, and implementation of ethical business strategies – 
        with the ultimate aim of giving back to the society.
      </p>
    </div>

    <!-- Quality Policy -->
    <div class="glass p-6 rounded-2xl shadow-lg flex flex-col items-center text-center gap-4">
      <div class="w-12 h-12 flex items-center justify-center bg-gradient-to-r from-purple-600 to-cyan-400 rounded-full text-white text-xl">
        ✅
      </div>
      <h3 class="text-2xl font-bold text-white">Quality Policy</h3>
      <p class="text-gray-200 leading-relaxed">
        We deliver effective quality solutions and services to our clients – meeting project requirements and achieving continuous excellence in all our products 
        and services – guided by our defined global standards in quality management.
      </p>
    </div>

  </div>
</section>


      <!-- Business Philosophy -->
<section class="my-8 glass p-8">
  <h2 class="text-3xl md:text-4xl font-bold text-white text-center mb-8">
    Our Business Philosophy
  </h2>

  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">

    <!-- Core Competence -->
    <div class="glass p-6 rounded-2xl shadow-md text-center">
      <div class="w-14 h-14 mx-auto mb-4 flex items-center justify-center rounded-full
                  bg-gradient-to-r from-purple-600 to-cyan-400 text-white">
        <i class="fas fa-user-tie text-2xl" aria-hidden="true"></i>
      </div>
      <h3 class="text-xl font-semibold text-white mb-2">Our Core Competence</h3>
      <p class="text-gray-300 text-sm leading-relaxed">
        Our capabilities define our clients’ success and their success defines our process,
        knowledge, and domain excellence of 15 years.
      </p>
    </div>

    <!-- Agile Approach -->
    <div class="glass p-6 rounded-2xl shadow-md text-center">
      <div class="w-14 h-14 mx-auto mb-4 flex items-center justify-center rounded-full
                  bg-gradient-to-r from-purple-600 to-cyan-400 text-white">
        <i class="fas fa-sync-alt text-2xl" aria-hidden="true"></i>
      </div>
      <h3 class="text-xl font-semibold text-white mb-2">Agile Approach</h3>
      <p class="text-gray-300 text-sm leading-relaxed">
        A consulting approach with a thirst for success. Flexible models pave the path
        for definitive business transformation.
      </p>
    </div>

    <!-- Our Promise -->
    <div class="glass p-6 rounded-2xl shadow-md text-center">
      <div class="w-14 h-14 mx-auto mb-4 flex items-center justify-center rounded-full
                  bg-gradient-to-r from-purple-600 to-cyan-400 text-white">
        <i class="fas fa-handshake text-2xl" aria-hidden="true"></i>
      </div>
      <h3 class="text-xl font-semibold text-white mb-2">Our Promise</h3>
      <p class="text-gray-300 text-sm leading-relaxed">
        We deliver excellence through experience and quality above everything.
      </p>
    </div>

    <!-- Our Process -->
    <div class="glass p-6 rounded-2xl shadow-md text-center">
      <div class="w-14 h-14 mx-auto mb-4 flex items-center justify-center rounded-full
                  bg-gradient-to-r from-purple-600 to-cyan-400 text-white">
        <i class="fas fa-cogs text-2xl" aria-hidden="true"></i>
      </div>
      <h3 class="text-xl font-semibold text-white mb-2">Our Process</h3>
      <p class="text-gray-300 text-sm leading-relaxed">
        At the forefront of web, mobile, and cloud transformation—delivering brilliance through domain expertise.
      </p>
    </div>

    <!-- Best Place to Work -->
    <div class="glass p-6 rounded-2xl shadow-md text-center sm:col-span-2 md:col-span-1">
      <div class="w-14 h-14 mx-auto mb-4 flex items-center justify-center rounded-full
                  bg-gradient-to-r from-purple-600 to-cyan-400 text-white">
        <i class="fas fa-building text-2xl" aria-hidden="true"></i>
      </div>
      <h3 class="text-xl font-semibold text-white mb-2">Best Place to Work</h3>
      <p class="text-gray-300 text-sm leading-relaxed">
        A culture for the employees, by the employees, and of the employees—thriving under shared values.
      </p>
    </div>

  </div>
</section>

            </div>
        </div>
    </div>

    <!-- SERVICES PAGE -->
    <div id="services" class="page">
        <div class="container">
            <div class="content-wrapper">
                <section class="hero glass">
                    <h1>Our Services</h1>
                    <p>Comprehensive design and development solutions tailored to your needs</p>
                </section>

                <section class="flex flex-col md:flex-row w-full">
                   <?php
$services = [
    [
        'icon' => '🌐',
        'title' => 'Web Applications',
        'features' => [
            '📱 Responsive Design' => '• Over half of web traffic comes from smartphones.
• No zooming or horizontal scrolling
• Google ranks mobile-friendly sites higher.
• Cost-effective – One website for all devices, easier to maintain.
• Flexible Images & Media – Images resize without breaking the design.
• Mobile-First – Design for small screens first, then expand.
• Responsive Typography – Fonts that adjust for readability.',

            '💻 Web Development' => '1 Front-End Development
• Focuses on the visual part of a website (what users see).
• Uses HTML, CSS, JavaScript, and frameworks like React, Angular, or Vue.
• Ensures responsive, interactive, and user-friendly designs.

2 Back-End Development
• Powers the server-side logic behind websites.
• Handles databases, authentication, APIs, and data processing.
• Uses technologies like Node.js, PHP, Python (Django/Flask), Java, .NET.

3 Full-Stack Development
• Combines both front-end and back-end skills.
• Developers manage the complete web application cycle.',

            '📝 CMS Development' => '1 Why Choose a CMS?
• Easy Content Management – Update text, images, and videos without coding.
• User-Friendly Interface – Intuitive dashboards for content editors.
• Customizable Design – Themes, templates, and plugins for flexibility.
• Scalable & Secure – Suitable for small businesses to enterprise-level solutions.
• Collaboration Ready – Multiple users can manage and publish content seamlessly.

2 Benefits of Our CMS Solutions
• Full control over your website content
• Faster website development & deployment
• Improved SEO & digital visibility',

            '🛒 E-Commerce Solutions' => '1 Why Your Business Needs E-Commerce
• 24/7 Online Store – Sell products anytime, anywhere
• Global Reach – Connect with customers beyond geographical limits.
• Cost-Effective – Reduce physical store expenses
• Better Customer Insights – Track sales, behavior, and preferences.
• Seamless Experience – Easy navigation, quick checkout, and secure payments.

2 Our E-Commerce Development Services
• Custom E-Commerce Website Development
• Online Store Setup (Shopify, WooCommerce, Magento, OpenCart)
• Shopping Cart & Secure Checkout Integration
• Payment Gateway & Shipping Integration
• Mobile-Friendly E-Commerce Design
• Marketplace Development (B2B, B2C, Multi-Vendor)
• E-Commerce Maintenance & Support'
        ]
    ],
    [
        'icon' => '💻',
        'title' => 'Software Development',
        'features' => [
            '⚙️Custom PHP Application' => '1 Our PHP Development Services
• Custom Web Application Development
• Enterprise PHP Solutions
• API Development & Integration
• PHP Framework Development (Laravel, CodeIgniter, Symfony)
• Migration & Upgradation of Legacy Systems

2 Benefits for Your Business
• Faster time-to-market for custom solutions
• Improved customer experience
• Secure, reliable, and future-ready applications
• Long-term cost savings with scalable architecture',

            '🏨 Hospitality Websites' => '1 Benefits for Your Business
• Boost bookings & reservations
• Enhance customer satisfaction & loyalty
• Reduce operational costs with automation
• Showcase services, amenities & promotions effectively
• Gain insights through advanced analytics & reporting

2 Our Hospitality Solutions
• Custom Hotel & Resort Websites
• Online Booking & Reservation Systems
• CRM & Customer Loyalty Solutions
• Integration with Payment Gateways & POS Systems',

            '🏢 Enterprise Portals' => '1 Our Enterprise Portal Development Services
• Custom Enterprise Portals
• Employee & Partner Portals
• Customer Self-Service Portals
• Document & Workflow Management
• API & Third-Party System Integration
• Maintenance & Support

2 Benefits for Your Organization
• Streamlined communication and operations
• Reduced operational costs
• Better decision-making with data insights
• Increased employee productivity
• Improved customer and partner engagement',

            '🏘️ Real Estate Portals' => '1 Why Real Estate Portals Matter
• Wider Reach – Showcase properties to a global audience
• 24/7 Availability – Users can browse and inquire anytime, anywhere.
• Easy property search with filters for location, budget, and type.
• Transparency – Access to property details, images, and virtual tours.
• Smart features help convert visitors into buyers or tenants.

2 Benefits for Your Business
• Build trust with buyers & sellers
• Increase property sales & rentals
• Enhance customer engagement
• Manage leads efficiently'
        ]
    ],
    [
        'icon' => '📱',
        'title' => 'Mobile Applications',
        'features' => [
            '🍏 iOS Apps' => 'High-quality apps for iPhone & iPad.',
            '🤖 Android Apps' => 'Native Android applications.',
            '🎮 Game Application' => '1 Our Game Development Services
• Mobile Game Development (iOS & Android)
• Web & Browser-Based Games
• Game Design, UI/UX, and Animation
• Multiplayer & Social Gaming Solutions

2 Technologies We Use
• Programming Languages: C#, C++, JavaScript, Python
• Platforms: Android, iOS, Web, Windows, Console
• Advanced Tech: AR/VR, AI, Blockchain Gaming, Cloud Gaming'
        ]
    ]
];
?>

                    <!-- LEFT SIDE (Services List as Attractive Buttons) -->
                    <div class="w-full md:w-1/4 m-2 glass border-r border-gray-600 rounded-xl shadow-lg">
                        <ul class="divide-y divide-gray-600">
                            <?php foreach ($services as $index => $service): ?>
                                <li 
                                    class="service-title flex items-center justify-between px-4 py-3 cursor-pointer 
                                           bg-white/10 hover:bg-white/20 transition-all duration-300 
                                           rounded-lg m-4 shadow-md hover:shadow-lg"
                                    data-index="<?= $index ?>"
                                >
                                    <div class="flex items-center gap-2">
                                        <span class="text-lg"><?= $service['icon'] ?></span>
                                        <span class="font-medium text-xl text-white"><?= htmlspecialchars($service['title']) ?></span>
                                    </div>
                                    <i class="fas fa-arrow-right text-gray-300 group-hover:text-white transition"></i>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>

                    <!-- RIGHT SIDE (Service Features + Feature Detail) -->
                    <div class="w-full glass m-2 md:w-3/4 p-6">
                        <?php foreach ($services as $index => $service): ?>
                            <div class="service-content hidden" id="service-<?= $index ?>">
                                <h2 class="text-2xl text-white font-bold mb-6 flex items-center gap-3">
    <span class="text-3xl"><?= $service['icon'] ?></span>
    <span><?= htmlspecialchars($service['title']) ?></span>
</h2>
                                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                    <div class="md:col-span-1">
                                        <div class="glass p-2 rounded-2xl shadow-md">
                                            <h3 class="text-xl font-semibold text-white mb-4">Features</h3>
<ul class="space-y-3">
    <?php foreach ($service['features'] as $feature => $detail): ?>
        <li 
            class="feature-card flex items-center justify-between px-4 py-3 text-xl rounded-xl border bg-white/10 cursor-pointer transition hover:bg-white/20"
            data-detail="<?= htmlspecialchars(formatDetail($detail)) ?>"
            data-target="feature-detail-<?= $index ?>"
        >
            
                <?= htmlspecialchars($feature) ?>
            </span>
            <i class="fas fa-arrow-right text-white group-hover:text-white transition"></i>
        </li>
    <?php endforeach; ?>
</ul>
                                        </div>
                                    </div>
                                    <div id="feature-detail-<?= $index ?>" 
                                         class="glass p-6 rounded-2xl shadow-inner text-white text-xl hidden md:block md:col-span-2">
                                        <p class="text-gray-200">Select a feature to see details here.</p>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </section>
            </div>
        </div>
    </div>

  <!-- PORTFOLIO PAGE -->
<div id="portfolio" class="page">
    <div class="container">
        <div class="content-wrapper">
            <section class="hero glass text-white text-center py-10">
                <h1 class="text-3xl font-bold mb-4">Our Portfolio</h1>
                <p class="max-w-2xl mx-auto">
                    Explore our collection of innovative projects showcasing cutting-edge design and development.
                </p>
            </section>

            <!-- Portfolio Grid -->
            <section class="portfolio-grid grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 p-6">
                <?php
                $portfolio = [
                    ['image' => 'images/portfolio-1.png', 'title' => 'E-Commerce Platform', 'desc' => 'A sleek, responsive online store with glass morphism design and seamless payment integration.'],
                    ['image' => 'images/portfolio-2.png', 'title' => 'Mobile Banking App', 'desc' => 'A secure, user-friendly mobile app with intuitive navigation and modern UI elements.'],
                    ['image' => 'images/portfolio-3.png', 'title' => 'Corporate Website', 'desc' => 'A professional website with dynamic animations and optimized performance for global reach.'],
                    ['image' => 'images/portfolio-4.png', 'title' => 'Social Media Dashboard', 'desc' => 'An interactive dashboard with real-time analytics and customizable widgets.'],
                    ['image' => 'images/portfolio-5.png', 'title' => 'Healthcare Portal', 'desc' => 'A secure portal for patient management with a clean, accessible interface.'],
                    ['image' => 'images/portfolio-6.png', 'title' => 'Educational Platform', 'desc' => 'An engaging learning management system with gamified features and responsive design.']
                ];
                foreach ($portfolio as $project): ?>
                    <div class="portfolio-card glass flex flex-col h-full p-5 rounded-xl shadow-lg">
                        <!-- Image -->
                        <div class="portfolio-image">
                            <img src="<?php echo htmlspecialchars($project['image']); ?>"
                                 alt="<?php echo htmlspecialchars($project['title']); ?>"
                                 class="w-full h-48 object-cover rounded-lg mb-4" />
                        </div>

                        <!-- Title -->
                        <h3 class="text-xl font-semibold text-white mb-2">
                            <?php echo htmlspecialchars($project['title']); ?>
                        </h3>

                        <!-- Description -->
                        <p class="text-gray-200 flex-grow">
                            <?php echo htmlspecialchars($project['desc']); ?>
                        </p>

                        <!-- Button -->
                        <a href="#"
                           class="cta-button mt-auto inline-block bg-gradient-to-r from-purple-600 to-cyan-400 text-white font-medium px-4 py-2 rounded-lg hover:from-purple-700 hover:to-cyan-500 transition">
                           View Project
                        </a>
                    </div>
                <?php endforeach; ?>
            </section>
        </div>
    </div>
</div>


    <!-- CAREERS PAGE -->
    <div id="careers" class="page">
        <div class="container">
            <div class="content-wrapper">
                <section class="hero glass">
                    <h1>Join Our Team</h1>
                    <p>Join us today to be a part of advanced technology and digital learning processes. We would love to have you in our team.</p>
                </section>
                <section class="careers-content glass">
                    <h2>Careers at <?php echo htmlspecialchars($companyName); ?></h2>
                    <p>Since our inception, <?php echo htmlspecialchars($companyName); ?> has strived to deliver top-tier services in development, design, and digital branding to clients across 30+ countries. Our team of innovative and talented minds excels at making big things happen. If you’re passionate about achieving global standards and making a positive impact, we’re the place for you.</p>
                    <p>Have a passion for what you do? Join our reputed IT firm to build an extensive career. Send your updated CV to <a href="mailto:hr@glossytouch.com">hr@glossytouch.com</a> or call/WhatsApp us at <a href="tel:+917008998640">+91 7008998640</a>. Our recruitment team will get back to you promptly.</p>
                </section>
                <section class="jobs-grid grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 my-6">
                    <?php
                    $jobs = [
                        ['title' => 'PHP Developer', 'type' => 'Full Time, India', 'desc' => 'Requirements: Strong English skills, creative, fast learner, proficient in Email/Skype/Chat, solid understanding of OOPS and web application development.'],
                        ['title' => 'Business Development Manager', 'type' => 'Full Time, Bhubaneswar, India', 'desc' => 'Requirements: Strong English skills, creative, fast learner, proficient in Email/Skype/Chat. Prior experience in Digital Marketing preferred.'],
                        ['title' => 'Sales Executive', 'type' => 'Full Time, Bhubaneswar, India', 'desc' => 'Requirements: Freshers welcome, strong English communication skills (speaking & writing), hands-on knowledge of computers and the internet.'],
                        ['title' => 'Web Designer', 'type' => 'Full Time, Bhubaneswar, India', 'desc' => 'Requirements: Proficient in Adobe Photoshop, Illustrator, Bootstrap, WordPress, InDesign, Flash, Logo Design, Joomla, Drupal, Magento. 1-2 years experience preferred; freshers with adequate knowledge welcome.'],
                        ['title' => 'SEO Analyst', 'type' => 'Full Time, Bhubaneswar, India', 'desc' => 'Requirements: Experience in link-building, off-page SEO, keyword and competitor analysis, knowledge of Google algorithms, SEO reporting tools, and social media insights. 6 months to 1 year experience preferred.']
                    ];
                    foreach ($jobs as $job): ?>
                        <div class="job-card glass p-6 rounded-xl shadow-lg flex glass flex-col justify-between">
            <div>
                <h3 class="text-xl font-bold text-white mb-2">
                    <?php echo htmlspecialchars($job['title']); ?>
                </h3>
                <p class="text-gray-300 mb-2">
                    <strong><?php echo htmlspecialchars($job['type']); ?></strong>
                </p>
                <p class="text-gray-400 leading-relaxed">
                    <?php echo htmlspecialchars($job['desc']); ?>
                </p>
            </div>
            <div class="mt-4">
               <a href="apply.php?job=<?php echo urlencode($job['title']); ?>" class="cta-button w-full text-center">Apply Now</a>

            </div>
        </div>
    <?php endforeach; ?>
                </section>
                <section class="careers-content glass">
                    <h2>Don’t See a Matching Role?</h2>
                    <p>We’re always scouting for raw talent with innovative ideas and a passion for the digital world. If you’re knowledgeable, curious, and eager to grow, send your CV to <a href="mailto:hr@glossytouch.com">hr@glossytouch.com</a>. Our team will reach out as opportunities arise.</p>
                    <p>We believe the team you hire can make or break your future. Join our honest and hardworking team to make a difference!</p>
                </section>
            </div>
        </div>
    </div>

    <!-- CONTACT PAGE -->
    <div id="contact" class="page">
        <div class="container">
            <div class="content-wrapper">
                <section class="contact-grid">
                    <div class="contact-form glass">
                        <h2>Get In Touch</h2>
                        <form>
                            <div class="form-group">
                                <label for="name">Full Name</label>
                                <input type="text" id="name" name="name" placeholder="Enter your full name" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email Address</label>
                                <input type="email" id="email" name="email" placeholder="Enter your email" required>
                            </div>
                            <div class="form-group">
                                <label for="subject">Subject</label>
                                <input type="text" id="subject" name="subject" placeholder="What's this about?">
                            </div>
                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea id="message" name="message" placeholder="Tell us about your project..." required></textarea>
                            </div>
                            <button type="submit" class="cta-button">Send Message</button>
                        </form>
                    </div>
                    <div class="contact-info glass">
                        <h2>Contact Information</h2>
                        <?php
                        $contactInfo = [
                            ['icon' => '📧', 'title' => 'Email', 'value' => 'hello@glossytouch.com'],
                            ['icon' => '📞', 'title' => 'Phone', 'value' => '+1 (555) 123-4567'],
                            ['icon' => '📍', 'title' => 'Address', 'value' => "123 Design Street<br>Creative District, CD 12345"],
                            ['icon' => '🕒', 'title' => 'Business Hours', 'value' => "Mon-Fri: 9AM-6PM<br>Sat-Sun: 10AM-4PM"]
                        ];
                        foreach ($contactInfo as $info): ?>
                            <div class="contact-item">
                                <div class="contact-item-icon"><?php echo $info['icon']; ?></div>
                                <div class="contact-item-text">
                                    <h4><?php echo htmlspecialchars($info['title']); ?></h4>
                                    <p><?php echo $info['value']; ?></p>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </section>
                <section class="contact-map-section">
                    <div class="contact-map glass">
                        <h2>Find Us</h2>
                        <div class="map-container">
                            <div class="map-placeholder">
                                <div class="map-placeholder-icon">🗺️</div>
                                <p><strong>Interactive Map Area</strong></p>
                                <p>123 Design Street</p>
                                <p>Creative District, CD 12345</p>
                                <p style="margin-top: 15px; font-size: 12px; opacity: 0.7;">
                                    Map integration can be added with<br>
                                    Google Maps, OpenStreetMap, or Mapbox
                                </p>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

    <!-- SINGLE FOOTER -->
    <div id="footer">
        <div class="container">
            <!-- CUSTOMER TESTIMONIAL SECTION -->
            <section class="customers glass mb-2">
                <div class="container">
                    <h2>Customer Testimonials</h2>
                    <div class="carousel" id="fade-quote-carousel">
                        <div class="carousel-inner">
                            <?php foreach ($testimonials as $index => $testimonial): ?>
                                <div class="carousel-item <?php echo $index === 2 ? 'active' : ''; ?>">
                                    <img class="profile-circle" src="<?php echo htmlspecialchars($testimonial['image']); ?>" alt="<?php echo htmlspecialchars($testimonial['name']); ?>">
                                    <div class="text-yellow-600 mb-2">
                                        <?php for($i=0; $i<5; $i++): ?>
                                            <i class="fa fa-star"></i>
                                        <?php endfor; ?>
                                    </div>
                                    <blockquote>
                                        <p><?php echo htmlspecialchars($testimonial['text']); ?><span class="name"><?php echo htmlspecialchars($testimonial['name']); ?></span><span class="city"><?php echo htmlspecialchars($testimonial['city']); ?></span></p>
                                    </blockquote>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <a class="carousel-control left" href="#fade-quote-carousel" data-slide="prev">
                            <i class="fa fa-angle-left" aria-hidden="true"></i>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control right" href="#fade-quote-carousel" data-slide="next">
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </section>

           <footer class=" glass text-gray-300 py-10">
  <div class="container mx-auto px-6 grid grid-cols-1 md:grid-cols-4 gap-8">

    <!-- Company Info -->
    <div>
      <h2 class="text-white text-xl font-bold mb-3"><?php echo htmlspecialchars($companyName); ?></h2>
      <p class="text-sm leading-relaxed mb-4">
        We keen to provide the best business lifestyle that our clients always wanted. 
        In addition to solutions, we provide the best way to success.
      </p>
      <h3 class="text-white font-semibold mb-2">Follow us</h3>
      <div class="flex space-x-4 text-xl">
        <a href="#" class="hover:text-blue-500"><i class="fab fa-facebook-f"></i></a>
        <a href="#" class="hover:text-sky-400"><i class="fab fa-twitter"></i></a>
        <a href="#" class="hover:text-pink-500"><i class="fab fa-instagram"></i></a>
        <a href="#" class="hover:text-red-500"><i class="fab fa-youtube"></i></a>
        <a href="#" class="hover:text-blue-600"><i class="fab fa-linkedin"></i></a>
      </div>
    </div>

    <!-- Useful Links -->
    <div>
      <h3 class="text-white text-lg font-semibold mb-4">Useful Links</h3>
      <ul class="space-y-2">
        <li><a href="javascript:void(0)" onclick="showPage('careers')" class="hover:text-white">Career</a></li>
        <li><a href="#" class="hover:text-white">FAQ</a></li>
        <li><a href="#" class="hover:text-white">Testimonials</a></li>
        <li><a href="#" class="hover:text-white">Our Global Presence</a></li>
        <li><a href="javascript:void(0)" onclick="showPage('about')" class="hover:text-white">Industries</a></li>
        <li><a href="#" class="hover:text-white">Case Study</a></li>
      </ul>
    </div>

    <!-- Subscribe -->
    <div>
      <h3 class="text-white text-lg font-semibold mb-4">Subscribe</h3>
      <p class="text-sm mb-4">Don’t miss to subscribe to our new feeds, kindly fill the form below.</p>
      <form class="flex">
        <input type="email" placeholder="Email Address" 
               class="w-full px-3 py-2 rounded-l-md bg-gray-800 text-gray-200 focus:outline-none">
        <button type="submit" class="bg-blue-600 px-4 rounded-r-md hover:bg-blue-700">
          <i class="fas fa-paper-plane text-white"></i>
        </button>
      </form>
    </div>

    <!-- Contact Info -->
    <div>
      <h3 class="text-white text-lg font-semibold mb-4">Contact</h3>
      <p class="flex items-center gap-2 mb-2">
        <i class="fas fa-map-marker-alt text-blue-500"></i>
        Saptasati Vihar, Bhubaneswar, Odisha 751010
      </p>
      <p class="flex items-center gap-2 mb-2">
        <i class="fas fa-phone text-blue-500"></i>
        +91 977 699 5797
      </p>
      <p class="flex items-center gap-2">
        <i class="fas fa-envelope text-blue-500"></i>
        sales@tech.com
      </p>
    </div>
  </div>

  <!-- Copyright -->
  <div class="mt-10 border-t border-gray-700 pt-4 text-center text-gray-400 text-sm">
    &copy; <?php echo $copyrightYear; ?> <?php echo htmlspecialchars($companyName); ?>. 
    All rights reserved.
  </div>
</footer>
        </div>
    </div>
    
    <!-- DEMO MODAL -->
<div id="demoModal" class="fixed inset-0 bg-black/50 hidden flex items-center justify-center z-50">
  <div class="glass rounded-lg shadow-lg w-full max-w-3xl p-6 relative">
    
    <!-- Close Button -->
    <button onclick="closeDemoModal()" class="absolute top-2 right-2 text-white hover:text-black text-2xl">&times;</button>
    
    <!-- Modal Content -->
    <h2 class="text-3xl text-white font-bold mb-4">Register for Free Demo</h2>
    <form class="grid grid-cols-1 md:grid-cols-2 gap-4">
      
      <input type="text" placeholder="Name*" class="border rounded px-3 py-2 focus:outline-none focus:ring w-full">
      <input type="text" placeholder="Place*" class="border rounded px-3 py-2 focus:outline-none focus:ring w-full">
      
      <input type="text" placeholder="Company Name*" class="border rounded px-3 py-2 focus:outline-none focus:ring w-full">
      <input type="text" placeholder="Mobile*" class="border rounded px-3 py-2 focus:outline-none focus:ring w-full">
      
      <select class="border rounded px-3 py-2 focus:outline-none focus:ring w-full">
        <option>Select Designation*</option>
        <option>Manager</option>
        <option>Developer</option>
        <option>Team Lead</option>
        <option>Other</option>
      </select>
      
      <input type="email" placeholder="Email*" class="border rounded px-3 py-2 focus:outline-none focus:ring w-full">
      
      <div class="md:col-span-2 flex justify-start">
        <button type="submit" class="px-6 py-2 bg-gradient-to-r from-orange-500 to-red-500 text-white font-semibold rounded shadow hover:opacity-90 transition">
          Submit
        </button>
      </div>
    </form>
  </div>
</div>

    <script>
        let currentPage = 'home';

        function showPage(pageId) {
            document.querySelectorAll('.page').forEach(page => page.classList.remove('active'));
            const targetPage = document.getElementById(pageId);
            if (targetPage) {
                targetPage.classList.add('active');
                currentPage = pageId;
            }
            
            document.querySelectorAll('.nav-links a').forEach(link => {
                link.classList.remove('bg-gradient-to-r', 'from-purple-600', 'to-cyan-400', 'shadow-lg');
                if (link.getAttribute('onclick') === `showPage('${pageId}')`) {
                    link.classList.add('bg-gradient-to-r', 'from-purple-600', 'to-cyan-400', 'shadow-lg');
                }
            });
            
            const footer = document.getElementById('footer');
            if (footer && targetPage) {
                targetPage.appendChild(footer);
            }
            
            window.scrollTo({ top: 0, behavior: 'smooth' });
            const urlParams = new URLSearchParams(window.location.search);
            window.history.replaceState({}, '', `${window.location.pathname}?${urlParams}#${pageId}`);
        }

        function toggleMenu(el) {
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

            let menu = document.getElementById("mobileMenu");
            if (menu.classList.contains("max-h-0")) {
                menu.classList.remove("max-h-0");
                menu.classList.add("max-h-[500px]");
            } else {
                menu.classList.add("max-h-0");
                menu.classList.remove("max-h-[500px]");
            }
        }

        window.addEventListener('DOMContentLoaded', () => {
            const urlParams = new URLSearchParams(window.location.search);
            let initialPage = window.location.hash ? window.location.hash.substring(1) : 'home';
            const pageElement = document.getElementById(initialPage);

            if (pageElement) {
                showPage(initialPage);
            } else {
                showPage('home');
            }

            const currentCategory = urlParams.get('category') || 'Backend';
            const activeButton = document.querySelector(`.category-btn[data-category="${currentCategory}"]`);
            if (activeButton) {
                document.querySelectorAll('.category-btn').forEach(btn => btn.classList.remove('active', 'bg-gradient-to-r', 'from-purple-600', 'to-cyan-400'));
                activeButton.classList.add('active', 'bg-gradient-to-r', 'from-purple-600', 'to-cyan-400');
                document.querySelectorAll('.category-content').forEach(content => content.classList.add('hidden'));
                document.getElementById(`category-${currentCategory}`).classList.remove('hidden');
            }

            const activeService = urlParams.get('service');
            const titles = document.querySelectorAll('.service-title');
            const contents = document.querySelectorAll('.service-content');
            if (activeService && currentPage === 'services') {
                const activeTitle = document.querySelector(`.service-title[data-index="${activeService}"]`);
                if (activeTitle) {
                    contents.forEach(c => c.classList.add('hidden'));
                    titles.forEach(t => t.classList.remove('bg-gray-500', 'font-semibold'));
                    const serviceContent = document.getElementById(`service-${activeService}`);
                    if (serviceContent) serviceContent.classList.remove('hidden');
                    activeTitle.classList.add('bg-gray-500', 'font-semibold');
                }
            } else if (currentPage === 'services' && contents.length > 0) {
                contents.forEach(c => c.classList.add('hidden'));
                titles.forEach(t => t.classList.remove('bg-gray-500', 'font-semibold'));
                contents[0].classList.remove('hidden');
                titles[0].classList.add('bg-gray-500', 'font-semibold');
            }
        });

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

        window.addEventListener('scroll', () => {
            const scrolled = window.pageYOffset;
            const parallax = document.querySelector('.bg-shapes');
            if (parallax) {
                const speed = scrolled * 0.5;
                parallax.style.transform = `translateY(${speed}px)`;
            }
        });

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

        document.querySelector('form')?.addEventListener('submit', function(e) {
            e.preventDefault();
            
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
            
            setTimeout(() => {
                successMsg.remove();
            }, 3000);
            
            this.reset();
        });

        const fadeStyle = document.createElement('style');
        fadeStyle.textContent = `
            @keyframes fadeIn {
                from { opacity: 0; transform: translate(-50%, -50%) scale(0.8); }
                to { opacity: 1; transform: translate(-50%, -50%) scale(1); }
            }
        `;
        document.head.appendChild(fadeStyle);

        document.addEventListener('DOMContentLoaded', () => {
            const carousel = document.querySelector('#fade-quote-carousel');
            if (carousel) {
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

                let autoSlide = setInterval(() => {
                    let newIndex = (currentIndex + 1) % items.length;
                    showSlide(newIndex);
                }, 5000);

                carousel.addEventListener('mouseenter', () => clearInterval(autoSlide));
                carousel.addEventListener('mouseleave', () => {
                    autoSlide = setInterval(() => {
                        let newIndex = (currentIndex + 1) % items.length;
                        showSlide(newIndex);
                    }, 5000);
                });
            }
        });

        document.addEventListener('DOMContentLoaded', () => {
            const categoryButtons = document.querySelectorAll('.category-btn');
            categoryButtons.forEach(button => {
                button.addEventListener('click', (e) => {
                    e.preventDefault();
                    const category = button.getAttribute('data-category');
                    const urlParams = new URLSearchParams(window.location.search);
                    urlParams.set('category', category);
                    window.history.replaceState({}, '', `${window.location.pathname}?${urlParams}${window.location.hash}`);
                    categoryButtons.forEach(btn => btn.classList.remove('active', 'bg-gradient-to-r', 'from-purple-600', 'to-cyan-400'));
                    button.classList.add('active', 'bg-gradient-to-r', 'from-purple-600', 'to-cyan-400');
                    document.querySelectorAll('.category-content').forEach(content => content.classList.add('hidden'));
                    document.getElementById(`category-${category}`).classList.remove('hidden');
                });
            });
        });

        const titles = document.querySelectorAll('.service-title');
        const contents = document.querySelectorAll('.service-content');

        titles.forEach(title => {
            title.addEventListener('click', () => {
                contents.forEach(c => c.classList.add('hidden'));
                titles.forEach(t => t.classList.remove('bg-gray-500', 'font-semibold'));
                const index = title.getAttribute('data-index');
                const serviceContent = document.getElementById('service-' + index);
                if (serviceContent) serviceContent.classList.remove('hidden');
                title.classList.add('bg-gray-500', 'font-semibold');
                const urlParams = new URLSearchParams(window.location.search);
                urlParams.set('service', index);
                window.history.replaceState({}, '', `${window.location.pathname}?${urlParams}${window.location.hash}`);
            });
        });

        document.querySelectorAll(".feature-card").forEach(card => {
            card.addEventListener("click", () => {
                const targetId = card.dataset.target;
                const detailBox = document.getElementById(targetId);
                if (detailBox) {
                    detailBox.innerHTML = card.dataset.detail;
                    detailBox.classList.remove('hidden');
                }
            });
        });
        
        function openDemoModal() {
    document.getElementById('demoModal').classList.remove('hidden');
  }
  function closeDemoModal() {
    document.getElementById('demoModal').classList.add('hidden');
  }

  // Contact Modal
  function openContactModal() {
    document.getElementById('contactModal').classList.remove('hidden');
  }
  function closeContactModal() {
    document.getElementById('contactModal').classList.add('hidden');
  }
  

  
    </script>
</body>
</html>