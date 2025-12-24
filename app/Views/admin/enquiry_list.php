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
            <th class="p-3 text-left">Name</th>
            <th class="p-3 text-left">Phone</th>
            <th class="p-3 text-left">Email</th>
            <th class="p-3 text-left">Destination</th>
            <th class="p-3 text-left">Members</th>
            <th class="p-3 text-left">Date</th>
            <th class="p-3 text-left">Actions</th>
        </tr>
    </thead>

    <tbody>
        <?php if (!empty($enquirylist)): ?>
            <?php foreach ($enquirylist as $list): ?>
                <tr class="border-b hover:bg-gray-50">
                    <td class="p-3"><?= $list['id']; ?></td>
                    <td class="p-3"><?= esc($list['full_name']); ?></td>
                    <td class="p-3"><?= esc($list['contact_no']); ?></td>
                    <td class="p-3"><?= esc($list['email_id']); ?></td>
                    <td class="p-3"><?= esc($list['select_destination']); ?></td>
                    <td class="p-3"><?= esc($list['no_of_member']); ?></td>
                    <td class="p-3"><?= esc($list['date']); ?></td>
                    <td class="p-3">
                        <a href="<?= base_url('admin/enquiry/delete/' . $list['id']); ?>"
                           class="text-red-600 hover:underline"
                           onclick="return confirm('Are you sure you want to delete this enquiry?')">
                            Delete
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="8" class="p-4 text-center text-gray-500">
                    No enquiries found.
                </td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>

</div>

<?= $this->endSection() ?>
