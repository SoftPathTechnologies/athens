<main class="content">
    <div class="container-fluid p-0">
        <div class="row mb-2 mb-xl-3">
            <div class="col-auto d-none d-sm-block">
                <h3><strong>Event System</strong> Administrators</h3>
            </div>

            <div class="col-auto ms-auto text-end mt-n1">
                <a href="#" data-bs-toggle="modal" data-bs-target="#addAdmin" class="btn btn-primary"><i data-feather="plus-circle"></i> Add New Admin</a>
            </div>
        </div>
        <div class="row">
            <?php foreach ($admin as $admin) : ?>
                <?php if($admin['admin_id'] != 1 ): ?>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Event Admin</h5>
                        </div>
                        <div class="card-body">
                            <div class="row no-gutters mb-2">
                                <div class="col-lg-4">
                                    <div class="text-center">
                                        <img src="<?php echo base_url() ?>assets/admin/img/avatars/avatar-5.png" width="50" height="50" alt="">
                                    </div>

                                </div>
                                <div class="col-lg-8">
                                    <p class="card-text mb-0">Fullname</p>
                                    <h4 class="mt-0 mb-3"><b><?php echo $admin['admin_name'] ?></b></h4>
                                    <p class="card-text mb-0">Date Added:</p>
                                    <h6 class="mt-0 mb-3"><b><?php echo $admin['date_joined'] ?></b></h6>
                                </div>
                            </div>
                            <div class="text-center">
                                <!-- <a href="#" class="btn btn-outline-primary">Edit Admin</a> -->
                                <a href="#" data-admin-id="<?php echo $admin['encrypted_id'] ?>" class="btn btn-primary delete-admin">Delete Admin</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>
</main>