<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>

    <section class="content">
        <div class="box">
            <div class="box-header">
                <h3 class="">Data Users</h3>
            </div>
            <?= $this->session->flashdata('message'); ?>
            <div class="box-body table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">NPM</th>
                            <th scope="col">Email</th>
                            <th scope="col">Role</th>
                            <th scope="col">Active</th>
                            <th scope="col">Member Since</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($member as $m) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <form action="<?= base_url('admin'); ?>" method="post">
                                <td><?= $m['name']; ?></td>
                                <td><?= $m['npm']; ?></td>
                                <td><?= $m['email']; ?></td>
                                <td><?= $m['role_id']; ?></td>
                                <td><?= $m['is_active']; ?></td>
                                <td><?= date('d F Y', $m['date_created']); ?></td>
                                <td>
                                    <!-- <a href="<?= base_url('admin/edit/') . $m['id']; ?>" class="btn btn-success btn-sm"><i class="fa fa-fw fa-edit"></i> Edit</a> -->
                                    <input type="hidden" name="user_del" value="<?= $m['id'] ?>">
                                    <button onclick="return confirm('Are you sure?')" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i></button>
                                </td>
                        </tr>
                        <?php $i++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->