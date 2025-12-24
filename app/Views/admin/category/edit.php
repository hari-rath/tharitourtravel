<?= $this->extend('admin/layouts/admin') ?>
<?= $this->section('content') ?>

<div class="container mx-auto pt-6">
    <div class="flex gap-3">
        <div>
        <a href="<?= base_url('admin/category') ?>" class="inline-block bg-gray-700 hover:bg-gray-900 text-white px-4 py-2 rounded">
            ← Back to List
        </a></div>
        <h1 class="text-2xl font-extrabold mb-6">Edit Category</h1>
    </div>

    <form action="<?= base_url('admin/category/update/' . $category['id']); ?>" method="post" enctype="multipart/form-data"
          class="bg-white p-6 rounded shadow max-w-5xl mx-auto">

        <?= csrf_field(); ?>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
            <div>
                <label for="title" class="block text-sm font-medium">Category Name</label>
                <input type="text" id="title" name="name" value="<?= esc($category['name']); ?>"
                       class="mt-1 p-2 w-full border rounded" required>
            </div>
        </div>

        <div class="text-center">
            <button type="submit" class="bg-gray-900 text-white px-6 py-2 rounded hover:bg-gray-700">
                Update
            </button>
        </div>
    </form>
</div>

<?= $this->endSection() ?>
