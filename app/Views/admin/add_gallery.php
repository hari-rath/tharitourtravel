<?= $this->extend('admin/layouts/admin') ?>
<?= $this->section('content') ?>

<div class="container mx-auto pt-6">
    <h1 class="text-2xl font-extrabold mb-6">Add New Image</h1>
    
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
    
    <?php if (session()->getFlashdata('success')): ?>
        <div class="mb-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded">
            <?= esc(session()->getFlashdata('success')) ?>
        </div>
    <?php endif; ?>
    <form action="<?= base_url('admin/gallery/store'); ?>" method="post" enctype="multipart/form-data"
        class="bg-white p-6 rounded shadow max-w-5xl">

        <!-- Row with three fields -->
        <div class="flex flex-wrap gap-4 mb-6">
            <!-- Title Field -->
            <div class="flex-1 min-w-[200px]">
                <label class="block text-sm font-medium">Title</label>
                <input type="text" name="title" value="<?= old('title') ?>" placeholder="Enter Title"
                    class="mt-1 p-2 w-full border rounded" required>
            </div>

            <!-- Category Field -->
            <div class="flex-1 min-w-[200px]">
                <label for="category" class="block text-sm font-medium">Category</label>
                <select name="category" id="category" class="mt-1 p-2 w-full border rounded">
                    <option selected disabled>Choose Category</option>
                    <?php foreach ($category as $cat): ?>
                        <option value="<?= esc($cat['id']) ?>"
                            <?= old('category') == $cat['id'] ? 'selected' : '' ?>>
                            <?= esc($cat['name']) ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>


            <!-- Image Upload -->
            <div class="flex-1 min-w-[200px]">
                <label class="block text-sm font-medium">Image</label>
                <input type="file" name="image" class="mt-1 p-1 w-full border rounded" required>
            </div>
        </div>

        <!-- Centered Upload Button -->
        <div class="flex justify-center">
            <button class="bg-gray-900 text-white px-6 py-2 rounded hover:bg-gray-700">
                Upload
            </button>
        </div>

    </form>
    
</div>


<?= $this->endSection() ?>


