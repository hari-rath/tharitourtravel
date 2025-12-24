<?= $this->extend('admin/layouts/admin') ?>
<?= $this->section('content') ?>

<?php if (session()->getFlashdata('success')): ?>
    <div class="bg-green-100 text-green-700 p-3 rounded mb-4">
        <?= session()->getFlashdata('success'); ?>
    </div>
<?php endif; ?>

<?php if (session()->getFlashdata('error')): ?>
    <div class="bg-red-100 text-red-700 p-3 rounded mb-4">
        <?= session()->getFlashdata('error'); ?>
    </div>
<?php endif; ?>

<div class="overflow-x-auto">
    <h1 class="text-2xl font-extrabold mb-6">Manage List</h1>
<table class="w-full bg-white shadow rounded-lg overflow-hidden text-sm">
    <thead class="bg-gray-200">
        <tr>
            <th class="p-3 text-left">ID</th>
            <th class="p-3 text-left">Full Name</th>
            <th class="p-3 text-left">Mobile</th>
            <th class="p-3 text-left">Email</th>
            <th class="p-3 text-left">Adults</th>
            <th class="p-3 text-left">Children</th>
            <th class="p-3 text-left">Vehicle Type</th>
            <th class="p-3 text-left">Duration</th>
            <th class="p-3 text-left">With Driver</th>
            <th class="p-3 text-left">Pickup Location</th>
            <th class="p-3 text-left">Pickup Date</th>
            <th class="p-3 text-left">Created On</th>
            <th class="p-3 text-left">Action</th>
        </tr>
    </thead>

    <tbody>
        <?php if (!empty($vehiclelist)): ?>
            <?php foreach ($vehiclelist as $list): ?>
                <tr class="border-b hover:bg-gray-50">
                    <td class="p-3"><?= $list['id']; ?></td>
                    <td class="p-3"><?= esc($list['full_name']); ?></td>
                    <td class="p-3"><?= esc($list['mobileNumber']); ?></td>
                    <td class="p-3"><?= esc($list['email']); ?></td>
                    <td class="p-3"><?= esc($list['adults']); ?></td>
                    <td class="p-3"><?= esc($list['children']); ?></td>
                    <td class="p-3"><?= esc($list['vehicleType']); ?></td>
                    <td class="p-3">
                        <?= esc($list['duration']); ?>
                        (<?= esc($list['durationValue']); ?>)
                    </td>
                    <td class="p-3">
                        <span class="px-2 py-1 rounded text-white text-xs
                            <?= $list['with_driver'] === 'yes' ? 'bg-green-600' : 'bg-red-600'; ?>">
                            <?= ucfirst($list['with_driver']); ?>
                        </span>
                    </td>
                    <td class="p-3"><?= esc($list['pickupLocation']); ?></td>
                    <td class="p-3"><?= esc($list['pickupDate']); ?></td>
                    <td class="p-3"><?= esc($list['created_on']); ?></td>
                    <td class="p-3">
                      <form action="<?= base_url('admin/vehicle/delete/' . $list['id']); ?>" method="post" 
      onsubmit="return confirm('Are you sure you want to delete this vehicle?');">
    <?= csrf_field(); ?>
    <button type="submit" class="text-red-600 hover:underline">Delete</button>
</form>


                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="13" class="p-4 text-center text-gray-500">
                    No vehicle bookings found.
                </td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>
</div>


<?= $this->endSection() ?>
