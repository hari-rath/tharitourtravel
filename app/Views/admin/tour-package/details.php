<?= $this->extend('admin/layouts/admin') ?>
<?= $this->section('content') ?>

<div class="container mx-auto pt-6">
    <div class="flex gap-3">
        <div>
        <a href="<?= base_url('admin/tour-package') ?>" class="inline-block bg-gray-700 hover:bg-gray-900 text-white px-4 py-2 rounded">
            ← Back to List
        </a></div>
        <h1 class="text-2xl font-extrabold mb-6">Tour Package Details</h1>
    </div>
    <div class="bg-white p-6 rounded shadow max-w-5xl space-y-6">

        <!-- Responsive Aspect Ratio Image -->
        <div class="w-full aspect-[3/1] overflow-hidden rounded">
            <img src="<?= base_url($tour['file_name']) ?>" alt="Tour Image" 
                class="w-full h-full object-contain" />
        </div>
    
        <!-- Grid-based Details -->
        <div class="grid md:grid-cols-3 gap-6">
            <!-- Title -->
            <div>
                <label class="block text-sm font-medium text-gray-500">Title</label>
                <div class="mt-1 text-lg font-semibold text-gray-900"><?= esc($tour['title']) ?></div>
            </div>
    
            <!-- Duration -->
            <div>
                <label class="block text-sm font-medium text-gray-500">Duration</label>
                <div class="mt-1 text-lg text-gray-800"><?= esc($tour['tour_days']) ?></div>
            </div>
    
            <!-- Price -->
            <div>
                <label class="block text-sm font-medium text-gray-500">Price (Per Person)</label>
                <div class="mt-1 text-lg text-gray-800">₹<?= number_format($tour['starting_price']) ?></div>
            </div>
        </div>
    
        <!-- Description (Full width) -->
        <div>
            <label class="block text-sm font-medium text-gray-500">Description</label>
            <p class="mt-1 text-gray-700 leading-relaxed whitespace-pre-line"><?= esc($tour['description']) ?></p>
        </div>
    
    </div>


</div>

<?= $this->endSection() ?>

