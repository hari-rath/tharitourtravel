<?php $this->extend('admin/layout'); ?>
<?php $this->section('content'); ?>
<div class="w-full min-h-screen flex items-center justify-center bg-gray-50">
    <div class="w-full max-w-md p-6 bg-white rounded-lg shadow-lg">
        <h1 class="text-2xl font-extrabold mb-6 text-gray-900 text-center">Admin Login</h1>
        <?php if (session()->has('error')): ?>
            <!-- Toast Container -->
            <div id="toast-error" class="fixed top-5 right-5 z-50 flex items-center w-full max-w-xs p-4 mb-4 text-red-800 bg-red-100 rounded-lg shadow-lg animate-slide-in" role="alert">
                <svg class="w-5 h-5 text-red-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M18 13a1 1 0 01-1 1h-2l-2 2v-2H9v2l-2-2H5a1 1 0 01-1-1V7a1 1 0 011-1h12a1 1 0 011 1v6zm-7-1a1 1 0 112 0 1 1 0 01-2 0zm0-4a1 1 0 012 0v2a1 1 0 01-2 0V8z" clip-rule="evenodd"></path>
                </svg>
                <div class="ml-3 text-sm font-medium">
                    <?php echo session('error'); ?>
                </div>
                <button onclick="dismissToast()" type="button" class="ml-auto -mx-1.5 -my-1.5 bg-red-100 text-red-500 hover:text-red-900 rounded-lg p-1.5 inline-flex h-8 w-8" aria-label="Close">
                    <span class="sr-only">Close</span>
                    ✖
                </button>
            </div>
        <?php endif; ?>
        <form action="<?php echo base_url('admin/login'); ?>" method="post">
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
        const toast = document.getElementById('toast-error');
        toast.classList.add('animate-slide-out');
        setTimeout(() => toast.remove(), 300);
    }
</script>
<style>
    .animate-slide-in {
        animation: slideIn 0.3s ease-in-out;
    }
    .animate-slide-out {
        animation: slideOut 0.3s ease-in-out;
    }
    @keyframes slideIn {
        from { transform: translateX(100%); opacity: 0; }
        to { transform: translateX(0); opacity: 1; }
    }
    @keyframes slideOut {
        from { transform: translateX(0); opacity: 1; }
        to { transform: translateX(100%); opacity: 0; }
    }
</style>
<?php $this->endSection(); ?>