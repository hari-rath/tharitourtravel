<?= $this->extend('admin/layouts/admin') ?>
<?= $this->section('content') ?>

<div class="container mx-auto pt-6">
    <h1 class="text-2xl font-extrabold mb-6">Edit Image</h1>
    <form action="<?= base_url('admin/gallery/update/' . $image['id']); ?>" method="post" enctype="multipart/form-data" class="bg-white p-6 rounded shadow max-w-md">
        <div class="mb-4">
            <label class="block text-sm font-medium">Title</label>
            <input type="text" name="title" value="<?= esc($image['title']); ?>" class="mt-1 p-2 w-full border rounded" required>
        </div>
        <div class="mb-4">
            <label class="block text-sm font-medium">Category</label>
            <select name="category" class="mt-1 p-2 w-full border rounded">
                <option value="himachal" <?= $image['category'] === 'himachal' ? 'selected' : '' ?>>Himachal</option>
                <option value="sikkim" <?= $image['category'] === 'sikkim' ? 'selected' : '' ?>>Sikkim</option>
                <option value="cultural" <?= $image['category'] === 'cultural' ? 'selected' : '' ?>>Cultural</option>
                <option value="urban" <?= $image['category'] === 'urban' ? 'selected' : '' ?>>Urban</option>
            </select>
        </div>
        <div class="mb-4">
            <label class="block text-sm font-medium">Current Image</label>
            <img src="<?= base_url($image['file_name']); ?>" class="w-24 h-24 rounded object-cover">
        </div>
        <div class="mb-4">
            <label class="block text-sm font-medium">New Image (optional)</label>
            <input type="file" name="image" class="mt-1 w-full">
        </div>
        <button class="bg-gray-900 text-white px-4 py-2 rounded hover:bg-gray-700">Update</button>
    </form>
</div>
<?= $this->endSection() ?>
