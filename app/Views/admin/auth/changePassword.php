<?= $this->extend('admin/layouts/admin') ?>
<?= $this->section('content') ?>

<div class="container mx-auto pt-6">
    <h1 class="text-2xl font-extrabold mb-6">Change Password</h1>
    <?php if (session()->has('success')): ?>
        <!-- Toast Container -->
        <div id="toast-success" class="fixed top-5 right-5 z-50 flex items-center w-full max-w-xs p-4 mb-4 text-green-800 bg-green-100 rounded-lg shadow-lg animate-slide-in" role="alert">
            <svg class="w-5 h-5 text-green-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.707a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
            </svg>
            <div class="ml-3 text-sm font-medium">
                <?= session('success'); ?>
            </div>
            <button onclick="dismissToast()" type="button" class="ml-auto -mx-1.5 -my-1.5 bg-green-100 text-green-500 hover:text-green-900 rounded-lg p-1.5 inline-flex h-8 w-8" aria-label="Close">
                <span class="sr-only">Close</span>
                ✖
            </button>
        </div>
    <?php endif; ?>
    <?php if (session()->getFlashdata('error')): ?>
        <div class="mb-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded">
            <?php 
            $error = session()->getFlashdata('error'); 
            if (is_array($error)): ?>
                <ul class="list-disc list-inside">
                    <?php foreach ($error as $err): ?>
                        <li><?= esc($err) ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php else: ?>
                <p><?= esc($error) ?></p>
            <?php endif; ?>
        </div>
    <?php endif; ?>
    
    <form action="<?= base_url('admin/save-password'); ?>" method="post"
      class="bg-white p-6 rounded shadow max-w-5xl">

        <!-- Row with three fields -->
        <div class="flex flex-wrap gap-3 mb-6">
            <div class="flex-1 max-w-[300px]">
                <label class="block text-sm font-medium">Current Password</label>
                <input type="password" name="current_password" placeholder="Current Password"
                       class="mt-1 p-2 w-full border rounded" required>
            </div>
            <div class="flex-1 max-w-[300px]">
                <label class="block text-sm font-medium">New Password</label>
                <input type="password" name="new_password" placeholder="New Password"
                       class="mt-1 p-2 w-full border rounded" required>
            </div>
            <div class="flex-1 max-w-[300px]">
                <label class="block text-sm font-medium">Confirm Password</label>
                <input type="password" name="confirm_password" placeholder="Re-type New Password"
                       class="mt-1 p-2 w-full border rounded" required>
            </div>
        </div>
    
        <!-- Submit Button -->
        <div class="flex justify-center">
            <button class="bg-gray-900 text-white px-6 py-2 rounded hover:bg-gray-700">
                Submit
            </button>
        </div>
    </form>

    
</div>

<script>
    function dismissToast() {
        const toast = document.getElementById('toast-success');
        if (toast) {
            toast.classList.add('animate-slide-out');
            setTimeout(() => toast.remove(), 300); // wait for animation to finish
        }
    }

    // Automatically dismiss the toast after 3 seconds
    window.addEventListener('DOMContentLoaded', () => {
        const toast = document.getElementById('toast-success');
        if (toast) {
            setTimeout(dismissToast, 3000); // 3000ms = 3 seconds
        }
    });
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

<?= $this->endSection() ?>


