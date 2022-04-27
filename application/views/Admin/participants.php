<main class="content">
    <div class="container-fluid p-0">

        <div class="mb-3">
            <h1 class="h3 d-inline align-middle">Event Participants Registration</h1>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Participants Registration Details</h5>
                        <h6 class="card-subtitle text-muted">You can Invite Participants by sending an Email to them from <a href="<?php echo base_url('admin/dashboard') ?>"  rel="noopener noreferrer nofollow">here</a>.</h6>
                    </div>
                    <div class="card-body">
                        <table id="datatables-reponsive" class="table table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Reg. Code</th>
                                    <th>Name</th>
                                    <th>Plan</th>
                                    <th>Organization</th>
                                    <th>Designation</th>
                                    <th>Country</th>
                                    <th>Registration Date</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    foreach($participants as $participant):
                                ?>
                                <tr>
                                    <td><?php echo $participant['reg_code'] ?></td>
                                    <td><?php echo $participant['fullname'] ?></td>
                                    <td><?php echo $participant['plan'] ?></td>
                                    <td><?php echo $participant['organization'] ?></td>
                                    <td><?php echo $participant['designation'] ?></td>
                                    <td><?php echo $participant['country'] ?></td>
                                    <td><?php echo $participant['date'] ?></td>
                                    <?php if($participant['reg_code'] == ""): ?>
                                        <td><span class="badge bg-warning"><i data-feather="loader"></i> Pending</span></td>
                                    <?php else: ?>
                                        <td><span class="badge bg-success"><i data-feather="check-circle"></i> Completed</span></td>
                                    <?php endif; ?>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</main>