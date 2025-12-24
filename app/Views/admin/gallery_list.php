<?= $this->extend('admin/layouts/admin') ?>
<?= $this->section('content') ?>

<div class="container mx-auto p-6">
    <h1 class="text-2xl font-extrabold mb-6">Manage Gallery</h1>
    <?php if (session()->getFlashdata('success')): ?>
        <div class="bg-green-100 text-green-700 p-3 rounded mb-4">
            <?= session('success'); ?>
        </div>
    <?php endif; ?>

    <a href="<?= base_url('admin/gallery/add'); ?>" class="mb-4 inline-block bg-gray-900 text-white px-4 py-2 rounded hover:bg-gray-700">Add New Image</a>

    <table class="w-full bg-white shadow rounded-lg overflow-hidden">
        <thead class="bg-gray-200">
            <tr>
                <th class="p-3 text-left">ID</th>
                <th class="p-3 text-left">Title</th>
                <th class="p-3 text-left">Category</th>
                <th class="p-3 text-left">Image</th>
                <th class="p-3 text-left">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($images as $image): ?>
                <tr class="border-b">
                    <td class="p-3"><?= $image['id']; ?></td>
                    <td class="p-3"><?= esc($image['title']); ?></td>
                    <td class="p-3"><?= ucfirst($image['category']); ?></td>
                    <td class="p-3"><img src="<?= base_url($image['file_name']); ?>" class="w-24 h-24 object-cover rounded"></td>
                    <td class="p-3">
                        <a href="<?= base_url('admin/edit/' . $image['id']); ?>" class="text-blue-600 hover:underline">Edit</a>
                        <a href="<?= base_url('admin/delete/' . $image['id']); ?>" class="text-red-600 hover:underline ml-4" onclick="return confirm('Are you sure?')">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?= $this->endSection() ?>
