<?= $this->extend('admin/layouts/admin') ?>

<?= $this->section('content') ?>

<h1 class="text-3xl font-bold mb-4">Dashboard</h1>
<p>Welcome, <strong><?= esc($user_email) ?></strong>. You are logged in!</p>

<?= $this->endSection() ?>
