<?= $this->extend('admin/layouts/admin') ?>
<?= $this->section('content') ?>

<div class="container mx-auto p-6">
    <h1 class="text-2xl font-extrabold mb-6">Manage List</h1>
    <?php if (session()->getFlashdata('success')): ?>
        <div class="bg-green-100 text-green-700 p-3 rounded mb-4">
            <?= session('success'); ?>
        </div>
    <?php endif; ?>

   
<table class="w-full bg-white shadow rounded-lg overflow-hidden">
    <thead class="bg-gray-200">
        <tr>
            <th class="p-3 text-left">ID</th>
            <th class="p-3 text-left">Full Name</th>
            <th class="p-3 text-left">Email</th>
            <th class="p-3 text-left">Phone</th>
            <th class="p-3 text-left">Subject</th>
            <th class="p-3 text-left">Message</th>
            <th class="p-3 text-left">Created On</th>
            <th class="p-3 text-left">Actions</th>
        </tr>
    </thead>

    <tbody>
        <?php if (!empty($contactlist)): ?>
            <?php foreach ($contactlist as $contact): ?>
                <tr class="border-b hover:bg-gray-50">
                    <td class="p-3"><?= $contact['id']; ?></td>
                    <td class="p-3"><?= esc($contact['fullname']); ?></td>
                    <td class="p-3"><?= esc($contact['email']); ?></td>
                    <td class="p-3"><?= esc($contact['phone']); ?></td>
                    <td class="p-3"><?= esc($contact['subject']); ?></td>
                    <td class="p-3"><?= esc($contact['message']); ?></td>
                    <td class="p-3"><?= esc($contact['created_on']); ?></td>
                    <td class="p-3">
                        <form action="<?= base_url('admin/contact/delete/' . $contact['id']); ?>" method="post"
                              onsubmit="return confirm('Are you sure you want to delete this contact?');">
                            <?= csrf_field(); ?>
                            <button type="submit" class="text-red-600 hover:underline">Delete</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="8" class="p-4 text-center text-gray-500">
                    No contact submissions found.
                </td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>

</div>

<?= $this->endSection() ?>
