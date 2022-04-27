<main class="content">
    <div class="container-fluid p-0">

        <div class="mb-3">
            <h1 class="h3 d-inline align-middle">All Payments</h1>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Participants' Payments</h5>
                        <h6 class="card-subtitle text-muted">You can Invite Participants by sending an Email to them from <a href="<?php echo base_url('admin/dashboard') ?>"  rel="noopener noreferrer nofollow">here</a>. All Payments here include Online Payments and Direct Bank Transfers</h6>
                    </div>
                    <div class="card-body">
                        <table id="datatables-reponsive" class="table table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th>S/N</th>
                                    <th>Name</th>
                                    <th>Plan</th>
                                    <th>Amount to Pay (€)</th>
                                    <th>Payment Type</th>
                                    <th>Registration Date</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $count = 1;
                                    $total_amount = 0;
                                    foreach($participants as $participant):
                                    $total_amount = $total_amount + $participant['amount']; 
                                ?>
                                <tr>
                                    <td><?php echo $count++ ?>.</td>
                                    <td><?php echo $participant['fullname'] ?></td>
                                    <td><?php echo $participant['plan'] ?></td>
                                    <td><?php echo number_format($participant['amount'],2) ?></td>
                                    <td><?php echo $participant['payment_type'] ?></td>
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
                        <h3 class="text-center">Total Payments(in Euros): <b>€<?php echo number_format($total_amount,2) ?></b></h3>
                    </div>
                </div>
            </div>
        </div>

    </div>
</main>