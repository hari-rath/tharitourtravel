<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Admin Dashboard' ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800">

    <div class="flex min-h-screen">

        <!-- Sidebar -->
        <aside class="w-64 bg-gray-900 text-white p-6 space-y-6">
            <h2 class="text-2xl font-extrabold">Admin Panel</h2>
            <nav class="flex flex-col space-y-2">
                <a href="<?= base_url('admin/gallery'); ?>" class="hover:bg-gray-700 p-2 rounded <?= service('uri')->getSegment(2) === 'gallery' ? 'bg-gray-800' : '' ?>">📁 Gallery</a>
                <a href="<?= base_url('admin/banner'); ?>" class="hover:bg-gray-700 p-2 rounded <?= service('uri')->getSegment(2) === 'banner' ? 'bg-gray-800' : '' ?>">🖼️ Banner Upload</a>
                <a href="<?= base_url('admin/logout'); ?>" class="hover:bg-red-700 bg-red-600 p-2 rounded mt-6 text-white">🚪 Logout</a>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-6 overflow-y-auto">
            <?= $this->renderSection('content') ?>
        </main>
    </div>

</body>
</html>
