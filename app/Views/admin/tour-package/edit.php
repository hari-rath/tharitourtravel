<?= $this->extend('admin/layouts/admin') ?>
<?= $this->section('content') ?>

<div class="container mx-auto pt-6">
    <div class="flex gap-3">
        <div>
        <a href="<?= base_url('admin/tour-package') ?>" class="inline-block bg-gray-700 hover:bg-gray-900 text-white px-4 py-2 rounded">
            ← Back to List
        </a></div>
        <h1 class="text-2xl font-extrabold mb-6">Edit Tour Package</h1>
    </div>

    <form action="<?= base_url('admin/tour-package/update/' . $tour['id']); ?>" method="post" enctype="multipart/form-data"
          class="bg-white p-6 rounded shadow max-w-5xl mx-auto">

        <?= csrf_field(); ?>

        <!-- Grid: Title & Duration -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
            <div>
                <label for="title" class="block text-sm font-medium">Title</label>
                <input type="text" id="title" name="title" value="<?= esc($tour['title']); ?>"
                       class="mt-1 p-2 w-full border rounded" required>
            </div>

            <div>
                <label for="tour_duration" class="block text-sm font-medium">Tour Duration</label>
                <input type="text" id="tour_duration" name="tour_duration" value="<?= esc($tour['tour_days']); ?>"
                       class="mt-1 p-2 w-full border rounded" placeholder="e.g. 3 Night 4 Days" required>
            </div>
        </div>

        <!-- Grid: Price & Description -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
            <div>
                <label for="tour_amount" class="block text-sm font-medium">Tour Price (Per Person)</label>
                <input type="number" id="tour_amount" name="tour_amount" value="<?= esc($tour['starting_price']); ?>"
                       class="mt-1 p-2 w-full border rounded" required>
            </div>

            <div>
                <label for="description" class="block text-sm font-medium">Description</label>
                <textarea id="description" name="description" class="mt-1 p-2 w-full border rounded h-[100px]" required><?= esc($tour['description']); ?></textarea>
            </div>
        </div>

        <!-- Grid: Current Image & Upload New Image -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
            <!-- Current Image -->
            <div>
                <label class="block text-sm font-medium">Current Image</label>
                <div class="mt-2">
                    <img src="<?= base_url($tour['file_name']); ?>" alt="Current Image"
                         class="w-32 h-24 rounded object-cover border">
                </div>
            </div>

            <!-- Upload New Image -->
            <div>
                <label for="image" class="block text-sm font-medium">Replace Image (Optional)</label>
                <input type="file" id="image" name="image" accept="image/*"
                       class="mt-1 w-full border rounded p-2">
            </div>
        </div>

        <!-- Submit -->
        <div class="text-center">
            <button type="submit" class="bg-gray-900 text-white px-6 py-2 rounded hover:bg-gray-700">
                Update Package
            </button>
        </div>
    </form>
</div>

<?= $this->endSection() ?>
