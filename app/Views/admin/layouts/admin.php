<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Admin Dashboard' ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        a { text-decoration: none !important; }
    </style>
</head>
<body class="bg-gray-100 text-gray-800">

    <nav class="bg-gray-900 text-white p-4 fixed top-0 left-0 w-full z-10 shadow">
        <div class="container mx-auto flex justify-between items-center">
            <a href="<?= base_url('admin/dashboard'); ?>" class="text-xl font-extrabold">Admin Panel</a>
            <div>
                <?php if (session()->get('isLoggedIn')): ?>
                    <a href="<?= base_url('admin/logout'); ?>" class="hover:underline">Logout</a>
                <?php else: ?>
                    <a href="<?= base_url('admin/login'); ?>" class="hover:underline">Login</a>
                <?php endif; ?>
            </div>
        </div>
    </nav>

    <div class="flex pt-16 min-h-screen"> <!-- ⬅ Add pt-16 to push below navbar -->

        <!-- ⬅ Sidebar -->
        <aside class="w-64 bg-gray-900 text-white p-6 space-y-6 h-[calc(100vh-4rem)] sticky top-[60px]">
            <nav class="flex flex-col space-y-2">
                <a href="<?= base_url('admin/dashboard'); ?>" class="hover:bg-gray-700 p-2 rounded <?= service('uri')->getSegment(2) === 'dashboard' ? 'bg-gray-800' : '' ?>">🏠 Dashboard</a>
                <a href="<?= base_url('admin/category'); ?>" class="hover:bg-gray-700 p-2 rounded <?= service('uri')->getSegment(2) === 'category' ? 'bg-gray-800' : '' ?>">🏠 Category</a>
                <a href="<?= base_url('admin/gallery'); ?>" class="hover:bg-gray-700 p-2 rounded <?= service('uri')->getSegment(2) === 'gallery' ? 'bg-gray-800' : '' ?>">📁 Gallery</a>
                <a href="<?= base_url('admin/banner'); ?>" class="hover:bg-gray-700 p-2 rounded <?= service('uri')->getSegment(2) === 'banner' ? 'bg-gray-800' : '' ?>">🖼️ Banner Upload</a>
                <a href="<?= base_url('admin/tour-package'); ?>" class="hover:bg-gray-700 p-2 rounded <?= service('uri')->getSegment(2) === 'tour-package' ? 'bg-gray-800' : '' ?>">🖼️Tour Packaged</a>

                 <a href="<?= base_url('admin/enquiry-list'); ?>" 
                    class="hover:bg-gray-700 p-2 rounded 
                    <?= service('uri')->getSegment(2) === 'enquiry-list' ? 'bg-gray-800' : '' ?>">
                   🖼️ Enquiry Form List
                    </a>
                <a href="<?= base_url('admin/vehicle-list'); ?>" 
                    class="hover:bg-gray-700 p-2 rounded 
                    <?= service('uri')->getSegment(2) === 'vehicle-list' ? 'bg-gray-800' : '' ?>">
                   🖼️ Vehicle Booking Form List
                    </a>

                      <a href="<?= base_url('admin/contact-list'); ?>" 
                    class="hover:bg-gray-700 p-2 rounded 
                    <?= service('uri')->getSegment(2) === 'contact-list' ? 'bg-gray-800' : '' ?>">
                   🖼️ Contact  Form List
                    </a>



                <a href="<?= base_url('admin/change-password'); ?>" class="hover:bg-gray-700 p-2 rounded <?= service('uri')->getSegment(2) === 'update-password' ? 'bg-gray-800' : '' ?>">🚪 Change Password</a>

                <a href="<?= base_url('admin/reviews'); ?>" class="hover:bg-gray-700 p-2 rounded <?= service('uri')->getSegment(2) === 'admin/reviews' ? 'bg-gray-800' : '' ?>">🚪 Reviews List</a>
                
                <!--<a href="<?= base_url('admin/logout'); ?>" class="hover:bg-red-700 bg-red-600 p-2 rounded mt-6 text-white">🚪 Logout</a>-->
            </nav>
        </aside>
        
        <!-- ⬅ Main Content -->
        <main class="flex-1 p-6 top-4 pt-0 overflow-y-auto">
            <?= $this->renderSection('content') ?>
        </main>
    </div>
    
</body>
</html>
