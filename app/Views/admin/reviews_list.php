<?= $this->extend('admin/layouts/admin') ?>
<?= $this->section('content') ?>

<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
<style>
    th {
    border: 1px solid #c8bebe;
}
td {
    border: 1px solid #ddd;
    padding: 4px 11px;
}
.small.text-muted {
    font-size: 12px;
    color: blue;
}
.badge {
    display: inline-block;
    padding: .25em .4em;
    font-size: 75%;
    font-weight: 700;
    line-height: 1;
    text-align: center;
    white-space: nowrap;
    vertical-align: baseline;
    border-radius: .25rem;
}
.badge-secondary {
    color: #fff;
    background-color: #007bff;
}
.badge-success {
    color: #fff;
    background-color: #28a745;
}
/* Custom Button: Visible (Approval) */
.btn-visible {
    background-color: #e8f5e9; /* Very light green */
    color: #2e7d32;           /* Dark forest green */
    border: 1px solid #c8e6c9;
    font-weight: 600;
    font-size: 0.8rem;
    padding: 5px 12px;
    border-radius: 6px;
    transition: all 0.2s ease;
}

.btn-visible:hover {
    background-color: #2e7d32;
    color: #ffffff;
    border-color: #2e7d32;
    box-shadow: 0 2px 4px rgba(46, 125, 50, 0.2);
}

/* Custom Button: Hide (Danger/Reject) */
.btn-hide {
    background-color: #ffebee; /* Very light red */
    color: #c62828;           /* Dark crimson red */
    border: 1px solid #ffcdd2;
    font-weight: 600;
    font-size: 0.8rem;
    padding: 5px 12px;
    border-radius: 6px;
    transition: all 0.2s ease;
}

.btn-hide:hover {
    background-color: #c62828;
    color: #ffffff;
    border-color: #c62828;
    box-shadow: 0 2px 4px rgba(198, 40, 40, 0.2);
}

/* Icon alignment fix */
.btn-visible i, .btn-hide i {
    margin-right: 4px;
}
</style>
<div class="container mx-auto p-6">
   
        

    <h1 class="text-2xl font-extrabold mb-6">Review Management</h1>
    <?php if (session()->getFlashdata('success')): ?>
    <div class="bg-green-100 text-green-700 p-3 rounded mb-4">
        <?= session('success'); ?>
    </div>
    <?php endif; ?>

    <div class="card">
        <div class="card-body">
    <table id="" class="w-full bg-white  table-bordered">
        <thead class="bg-gray-200">
            <tr class="">
                <th class="text-center p-3">S.No</th>
                <th>Customer</th>
                <th>Comment</th>
                <th>Rating</th>
                <th class="text-center">Visibility</th>
                <th class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; foreach($reviews as $r): ?>
            <tr class="border-b">
                <td class="text-center fw-bold text-muted">
                    <?= $i++ ?>
                </td>
                <td>
                    <div class="fw-bold text-dark">
                        <?= esc($r['name']) ?>
                    </div>
                    <div class="small text-muted">
                        <?= esc($r['email']) ?>
                    </div>
                </td>
                <td>
                    <div class="small text-secondary text-wrap" style="max-width: 250px;">
                        <?= esc($r['comment']) ?>
                    </div>
                </td>
                <td>
                    <span class="text-warning small">
                                        <?= str_repeat('★', $r['rating']) ?><?= str_repeat('☆', 5-$r['rating']) ?>
                                    </span>
                </td>
                <td class="text-center">
                    <?php if($r['view_status'] == 1): ?>
                    <span class="badge rounded-pill bg-success-subtle badge-success border border-success-subtle">Visible</span>
                    <?php else: ?>
                    <span class="badge rounded-pill bg-light badge-secondary border">Hidden</span>
                    <?php endif; ?>
                </td>
                <td class="text-center">
                    <a href="<?= base_url('ReviewController/toggleStatus/'.$r['id']) ?>"
                        class=" <?= $r['view_status'] == 1 ? 'btn-hide' : 'btn-visible' ?>">
                        <?= $r['view_status'] == 1 ? 'Hide' : 'Approve' ?>
                    </a>
                    <a style="margin-left:3px" href="<?= base_url('admin/delete_review/'.$r['id']) ?>"
                                       class="btn btn-hide">
                                      Delete
                                    </a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    </div>
    </div>
</div>




<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>

<script>
    $(document).ready(function() {
        $('#reviewsTable').DataTable({
            "pageLength": 10,
            "ordering": true,
            "language": {
                "search": "Filter Reviews:",
                "paginate": {
                    "previous": "Prev",
                    "next": "Next"
                }
            }
        });
    });
</script>
<?= $this->endSection() ?>