<?= $this->extend('admin/layouts/admin') ?>
<?= $this->section('content') ?>

<div class="container mx-auto pt-6">
    <h1 class="text-2xl font-extrabold mb-6">Edit Image</h1>
    <form action="<?= base_url('admin/banner/update/' . $banner['id']); ?>" method="post" enctype="multipart/form-data"
    class="bg-white p-6 rounded shadow max-w-5xl mx-auto">

    <?= csrf_field(); ?>

    <!-- Grid for Title + Description -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
        <!-- Title -->
        <div>
            <label for="title" class="block text-sm font-medium">Title</label>
            <input type="text" id="title" name="title" value="<?= esc($banner['title']); ?>"
                class="mt-1 p-2 w-full border rounded" required>
        </div>

        <!-- Description -->
        <div>
            <label for="description" class="block text-sm font-medium">Description</label>
            <textarea id="description" name="description"
                class="mt-1 p-2 w-full border rounded h-[100px]" required><?= esc($banner['description']); ?></textarea>
        </div>
    </div>

    <!-- Grid for Current Image + New Image -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
        <!-- Current Image -->
        <div>
            <label class="block text-sm font-medium">Current Image</label>
            <div class="mt-2">
                <img src="<?= base_url($banner['file_name']); ?>" alt="Current Image"
                    class="w-24 h-24 rounded object-cover border">
            </div>
        </div>

        <!-- New Image Upload -->
        <div>
            <label for="image" class="block text-sm font-medium">New Image (optional)</label>
            <input type="file" id="image" name="image" accept="image/*"
                class="mt-1 w-full border rounded p-2">
        </div>
    </div>

    <!-- Submit Button -->
    <div class="text-center">
        <button type="submit"
            class="bg-gray-900 text-white px-6 py-2 rounded hover:bg-gray-700">
            Update
        </button>
    </div>
</form>

</div>
<?= $this->endSection() ?>
