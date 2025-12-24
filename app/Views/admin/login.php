<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Admin Panel'; ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="<?= base_url('assets/css/custom.css') ?>" rel="stylesheet" />
    <style>
        @keyframes slideIn {
            from { transform: translateX(100%); opacity: 0; }
            to { transform: translateX(0); opacity: 1; }
        }
        @keyframes slideOut {
            from { transform: translateX(0); opacity: 1; }
            to { transform: translateX(100%); opacity: 0; }
        }
        .animate-slide-in { animation: slideIn 0.3s ease-in-out; }
        .animate-slide-out { animation: slideOut 0.3s ease-in-out; }
    </style>
</head>
<body class="bg-gray-50 font-arial text-gray-800">

    <!-- Navigation -->
    <nav class="bg-gray-900 text-white p-4">
        <div class="container mx-auto flex justify-between items-center">
            <a href="" class="text-xl font-extrabold">Admin Panel</a>
            <!--<div>-->
            <!--    <?php if (session()->get('isLoggedIn')): ?>-->
            <!--        <a href="<?= base_url('admin/gallery'); ?>" class="mr-4 hover:underline">Gallery</a>-->
            <!--        <a href="<?= base_url('admin/logout'); ?>" class="hover:underline">Logout</a>-->
            <!--    <?php else: ?>-->
            <!--        <a href="<?= base_url('admin/login'); ?>" class="hover:underline">Login</a>-->
            <!--    <?php endif; ?>-->
            <!--</div>-->
        </div>
    </nav>

    <!-- Main Content -->
    <div class="w-full min-h-screen flex items-center justify-center bg-gray-50">
        <div class="w-full max-w-md p-6 bg-white rounded-lg shadow-lg">
            <h1 class="text-2xl font-extrabold mb-6 text-gray-900 text-center">Admin Login</h1>

            <!-- Flash Messages -->
            <?php if (session()->has('success') || session()->has('error')): ?>
                <?php 
                    $type = session()->has('success') ? 'success' : 'error';
                    $message = session($type);
                    $bgColor = $type === 'success' ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800';
                    $iconColor = $type === 'success' ? 'text-green-500' : 'text-red-500';
                ?>
                <div id="toast-message" class="fixed top-5 right-5 z-50 flex items-center w-full max-w-xs p-4 mb-4 <?= $bgColor ?> rounded-lg shadow-lg animate-slide-in" role="alert">
                    <svg class="w-5 h-5 <?= $iconColor ?> flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-10.707a1 1 0 00-1.414-1.414L9 9.586 7.707 8.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                    </svg>
                    <div class="ml-3 text-sm font-medium">
                        <?= $message ?>
                    </div>
                    <button onclick="dismissToast()" type="button" class="ml-auto -mx-1.5 -my-1.5 <?= $bgColor ?> rounded-lg p-1.5 inline-flex h-8 w-8" aria-label="Close">
                        ✖
                    </button>
                </div>
            <?php endif; ?>


            <!-- Login Form -->
            <form action="<?= base_url('admin/login'); ?>" method="post">
                <?= csrf_field() ?>
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" id="email" name="email" class="w-full p-2 border border-gray-300 rounded mt-1 focus:ring-2 focus:ring-gray-900" required>
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input type="password" id="password" name="password" class="w-full p-2 border border-gray-300 rounded mt-1 focus:ring-2 focus:ring-gray-900" required>
                </div>
                <button type="submit" class="w-full bg-gray-900 text-white p-2 rounded hover:bg-gray-700">Login</button>
            </form>
        </div>
    </div>

    <script>
        function dismissToast() {
            const toast = document.getElementById('toast-message');
            toast?.classList.add('animate-slide-out');
            setTimeout(() => toast?.remove(), 300);
        }
    
        window.addEventListener('DOMContentLoaded', () => {
            document.getElementById('email')?.focus();
            setTimeout(() => {
                dismissToast();
            }, 5000);
        });
    </script>

</body>
</html>
