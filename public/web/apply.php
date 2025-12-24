<?php
// Example job descriptions (could come from DB)
$jobs = [
    'PHP Developer' => 'Requirements: Strong English skills, creative, fast learner, proficient in Email/Skype/Chat, solid understanding of OOPS and web application development.',
    'Business Development Manager' => 'Requirements: Strong English skills, creative, fast learner, proficient in Email/Skype/Chat. Prior experience in Digital Marketing preferred.',
    'Sales Executive' => 'Requirements: Freshers welcome, strong English communication skills (speaking & writing), hands-on knowledge of computers and the internet.',
    'Web Designer' => 'Requirements: Proficient in Adobe Photoshop, Illustrator, Bootstrap, WordPress, InDesign, Flash, Logo Design, Joomla, Drupal, Magento. 1-2 years experience preferred; freshers with adequate knowledge welcome.',
    'SEO Analyst' => 'Requirements: Experience in link-building, off-page SEO, keyword and competitor analysis, knowledge of Google algorithms, SEO reporting tools, and social media insights. 6 months to 1 year experience preferred.'
];

// Get job from query
$jobTitle = $_GET['job'] ?? 'Job Application';
$jobDesc = $jobs[$jobTitle] ?? 'Details not available for this role.';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Apply - <?php echo htmlspecialchars($jobTitle); ?></title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="custom.css">
</head>
<body class="text-white">
     <div class="bg-shapes">
        <?php for ($i = 0; $i < 6; $i++): ?>
            <div class="shape"></div>
        <?php endfor; ?>
    </div>


<div class="container glass mx-auto px-4 py-10 grid grid-cols-1 md:grid-cols-2 gap-8">
    
  
  <!-- LEFT: Job Description -->
  <div class="glass p-6 rounded-2xl shadow-lg">
    <h2 class="text-3xl font-bold mb-4"><?php echo htmlspecialchars($jobTitle); ?></h2>
    <p class="text-gray-300 leading-relaxed"><?php echo htmlspecialchars($jobDesc); ?></p>
  </div>

  <!-- RIGHT: Application Form -->
  <div class="glass p-6 rounded-2xl shadow-lg">
    <h2 class="text-2xl font-bold mb-4 text-white">Apply for <?php echo htmlspecialchars($jobTitle); ?></h2>
    <form class="space-y-4">
      <!-- Name -->
      <div>
        <label class="block text-sm font-medium">Your Name *</label>
        <input type="text" class="w-full border rounded-lg p-2 text-black" required>
      </div>

      <!-- Email + Phone -->
      <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div>
          <label class="block text-sm font-medium">Email *</label>
          <input type="email" class="w-full border rounded-lg p-2 text-black" required>
        </div>
        <div>
          <label class="block text-sm font-medium">Phone *</label>
          <input type="tel" class="w-full border rounded-lg p-2 text-black" required>
        </div>
      </div>

      <!-- Experience -->
      <div class="grid grid-cols-2 gap-4">
        <div>
          <label class="block text-sm font-medium">Experience (Years)</label>
          <input type="number" class="w-full border rounded-lg p-2 text-black">
        </div>
        <div>
          <label class="block text-sm font-medium">Experience (Months)</label>
          <input type="number" class="w-full border rounded-lg p-2 text-black">
        </div>
      </div>

      <!-- Qualification -->
      <div>
        <label class="block text-sm font-medium">Qualification *</label>
        <select class="w-full border rounded-lg p-2 text-black">
         <option>B.Sc in Computer Science</option>
          <option>Bachelor Degree in Computer Science</option>
          <option>Bachelor in Business Information Technology</option>
          <option>BBA</option>
          <option>BCA</option>
          <option>BE / B.Tech</option>
          <option>MCA</option>
          <option>BFA</option>
          <option>CA</option>
          <option>CS</option>
          <option>Diploma</option>
          <option>Diploma in Computer Technology</option>
          <option>Diploma in Hardware and Networking</option>
          <option>Executive Management in Business Management</option>
          <option>M.sc (Computers/ Maths/ Statistics)</option>
          <option>M.Tech (contd.)</option>
          <option>MBA</option>
          <option>Others</option>
        </select>
      </div>

      <!-- CTC -->
      <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div>
          <label class="block text-sm font-medium">Current CTC</label>
          <input type="text" class="w-full border rounded-lg p-2 text-black">
        </div>
        <div>
          <label class="block text-sm font-medium">Expected CTC</label>
          <input type="text" class="w-full border rounded-lg p-2 text-black">
        </div>
      </div>

      <!-- Notice Period -->
      <div>
        <label class="block text-sm font-medium">Notice Period *</label>
        <input type="text" class="w-full border rounded-lg p-2 text-black" required>
      </div>

      <!-- Uploads -->
      <div>
        <label class="block text-sm font-medium">Upload Resume *</label>
        <input type="file" class="w-full border rounded-lg p-2 text-black" accept=".pdf,.doc,.docx" required>
      </div>
      <div>
        <label class="block text-sm font-medium">Passport Size Photo *</label>
        <input type="file" class="w-full border rounded-lg p-2 text-black" accept=".jpg,.jpeg,.png" required>
      </div>

      <!-- Captcha -->
      <div>
        <label class="block text-sm font-medium">Are you human? 10 + 5 =</label>
        <input type="text" class="w-full border rounded-lg p-2 text-black" required>
      </div>

      <!-- Submit -->
      <div class="mt-6">
        <button type="submit" class="bg-gradient-to-r from-purple-600 to-cyan-400 px-6 py-2 rounded-lg text-white font-semibold hover:opacity-90">Submit</button>
      </div>
    </form>
  </div>
  <!-- Back Button -->
  <div class="mb-6">
    <a href="index.php#careers" 
       class="inline-flex items-center px-4 py-2 rounded-lg bg-white/10 hover:bg-white/20 transition text-white">
      ← Back to Careers
    </a>
  </div>
</div>


</body>
</html>
