<main class="content">
    <div class="container-fluid p-0">

        <div class="mb-3">
            <h1 class="h3 d-inline align-middle">Registration Payment Approval</h1>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Registration Payment Approval</h5>
                        <h6 class="card-subtitle text-muted">You can Invite Participants by sending an Email to them from <a href="<?php echo base_url('admin/dashboard') ?>" rel="noopener noreferrer nofollow">here</a>. Confirm Participants' Payment by clicking on the CONFIRM button.</h6>
                    </div>
                    <div class="card-body">
                        <table id="datatables-reponsive" class="table table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th>S/N</th>
                                    <th>Name</th>
                                    <th>Plan</th>
                                    <th>Amount to Pay (€)</th>
                                    <th>Plan Type</th>
                                    <th>Registration Date</th>
                                    <th>Approved By</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $count = 1;
                                foreach ($participants as $participant) :
                                ?>
                                    <tr>
                                        <td><?php echo $count++ ?>.</td>
                                        <td><?php echo $participant['fullname'] ?></td>
                                        <td><?php echo $participant['plan'] ?></td>
                                        <td><?php echo number_format($participant['amount'], 2) ?></td>
                                        <td><?php echo $participant['plan'] ?></td>
                                        <td><?php echo $participant['date'] ?></td>
                                        <td><?php echo $participant['approved_by'] ?></td>
                                        <?php if ($participant['reg_code'] == "") : ?>
                                            <td>
                                                <button data-id="<?php echo $participant['encrypted_id'] ?>" class="btn  btn-pill btn-primary confirm-payment"><i data-feather="check-circle"></i> Confirm Payment</button>
                                            </td>
                                        <?php else : ?>
                                            <td>
                                                <button class="btn  btn-pill btn-success"><i data-feather="check-circle"></i> Payment Confirmed</button>
                                            </td>
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