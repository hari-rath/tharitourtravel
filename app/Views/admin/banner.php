<?= $this->extend('admin/layouts/admin') ?>
<?= $this->section('content') ?>

<div class="container mx-auto p-6">
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
    
    <div class="flex justify-between">
        <h1 class="text-2xl font-extrabold mb-6">Banner List</h1>
        <a href="<?= base_url('admin/banner/add'); ?>"
           class="mb-4 inline-block bg-gray-900 text-white px-4 py-2 rounded hover:bg-gray-700 ml-4">
           Add Banner
        </a>
    </div>

    <table class="w-full bg-white shadow rounded-lg overflow-hidden">
        <thead class="bg-gray-200">
            <tr>
                <th class="p-3 text-left">S. No</th>
                <th class="p-3 text-left">Title</th>
                <th class="p-3 text-left">description</th>
                <th class="p-3 text-left">Image</th>
                <th class="p-3 text-left">Status</th>
                <th class="p-3 text-left">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($images as $index => $image): ?>
                <tr class="border-b">
                    <td class="p-3"><?= $index + 1; ?></td> <!-- Serial number -->
                    <td class="p-3"><?= esc($image['title']); ?></td>
                    <td class="p-3"><?= ucfirst($image['description']); ?></td>
                    <td class="p-3"><img src="<?= base_url($image['file_name']); ?>" class="w-24 h-24 object-cover rounded"></td>
                    <td class="p-3">
                        <a href="<?= base_url('admin/banner/toggle-status/' . $image['id']); ?>"
                           class="<?= $image['status'] == 1 ? 'text-green-600' : 'text-red-500'; ?> hover:underline"
                           title="Click to change status"
                           onclick="return confirm('Change status of this banner?')">
                            <?= $image['status'] == 1 ? 'Active' : 'Inactive'; ?>
                        </a>
                    </td>
                    <td class="p-3 space-x-4">
                        <a href="<?= base_url('admin/banner/edit/' . $image['id']); ?>" class="text-blue-600 hover:text-blue-800" title="Edit">
                            <i class="fas fa-edit"></i>
                        </a>
                        <a href="<?= base_url('admin/banner/delete/' . $image['id']); ?>" class="text-red-600 hover:text-red-800" title="Delete" onclick="return confirm('Are you sure?')">
                            <i class="fas fa-trash-alt"></i>
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
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


