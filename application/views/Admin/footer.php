<footer class="footer">
    <div class="container-fluid">
        <div class="row text-muted">
            <div class="col-6 text-start">
                <p class="mb-0">
                    <a href="index-2.html" class="text-muted"><strong>EventTalk</strong></a> &copy;
                </p>
            </div>
            <div class="col-6 text-end">
                <ul class="list-inline">
                    <li class="list-inline-item">
                        <a class="text-muted" href="#">Support</a>
                    </li>
                    <li class="list-inline-item">
                        <a class="text-muted" href="#">Help Center</a>
                    </li>
                    <li class="list-inline-item">
                        <a class="text-muted" href="#">Privacy</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.js"></script>
<script src="<?php echo base_url() ?>assets/admin/js/app.js"></script>
<script src="<?php echo base_url() ?>assets/admin/js/datatables.js"></script>

<!-- Send Invite Modal -->
<div class="modal fade" id="inviteParticipant" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><i data-feather="mail"></i> Send Invitation</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body m-3">
                <form action="<?php echo base_url('admin/invite_participant') ?>" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label class="form-label">Email Address</label>
                        <input type="email" class="form-control  " name="email" required />
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary"><i data-feather="mail"></i> Send Invitation</button>
            </div>
            </form>
        </div>
    </div>
</div>

<!-- Send Invite Modal -->
<div class="modal fade" id="inviteParticipant" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><i data-feather="mail"></i> Send Invitation</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body m-3">
                <form action="<?php echo base_url('admin/invite_participant') ?>" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label class="form-label">Email Address</label>
                        <input type="email" class="form-control  " name="email" required />
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary"><i data-feather="mail"></i> Send Invitation</button>
            </div>
            </form>
        </div>
    </div>
</div>

<!-- Send Invite Modal -->
<div class="modal fade" id="addParticipant" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><i data-feather="mail"></i> Register Participant</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body m-3">
                <form action="<?php echo base_url('admin/register_participant') ?>" method="post" enctype="multipart/form-data">
                    <div class="form1 text-start">
                        <div class="row">
                            <div class="col-lg-6 mb-3">
                                <div class="form-group">
                                    <input type="text" placeholder="Enter Fullname" class="form-control" name="fullname" required>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <div class="form-group">
                                    <input type="email" placeholder="Enter Email Address" class="form-control" name="email" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 mb-3">
                                <div class="form-group">
                                    <input type="text" placeholder="Organization" class="form-control" name="organization" required>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <div class="form-group">
                                    <input type="text" placeholder="Designation" class="form-control" name="designation" required>
                                </div>
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <select name="country" required class="form-control">
                                <option>Select Country</option>
                                <?php foreach ($countries as $country) : ?>
                                    <option><?php echo $country['nicename'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <select id="paymentType2" class="form-control" required name="payment">
                                <option value="">Select Payment Method</option>
                                <option>Direct Bank Transfer</option>
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <select id="paymentType2" class="form-control" required name="plan">
                                <option value="">Select Plan</option>
                                <option>Virtual</option>
                                <option>In-Person</option>
                            </select>
                        </div>

                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary"><i data-feather="mail"></i> Confirm Register</button>
            </div>
            </form>
        </div>
    </div>
</div>

<!-- Add Speaker Modal -->
<div class="modal fade" id="addSpeaker" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><i data-feather="user-plus"></i> Add Event Speaker</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body m-3">
                <form action="<?php echo base_url('admin/add_speaker') ?>" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label class="form-label">Fullname</label>
                        <input type="text" class="form-control  " name="fullname" required />
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Portfolio</label>
                        <input type="text" class="form-control  " name="portfolio" required />
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Photo</label>
                        <input type="file" class="form-control" require name="userfile">
                    </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary"><i data-feather="plus-circle"></i> Confirm Add</button>
            </div>
            </form>
        </div>
    </div>
</div>

<!-- Add Admin Modal -->
<div class="modal fade" id="addAdmin" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><i data-feather="user-plus"></i> Add Event Administrator</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body m-3">
                <form action="<?php echo base_url('admin/add_admin') ?>" method="post">
                    <div class="mb-3">
                        <label class="form-label">Fullname</label>
                        <input type="text" class="form-control  " name="fullname" required />
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="text" class="form-control  " name="email" required />
                    </div>
                    <p class="badge bg-primary text-center ">A System Generated Password will be sent to this User.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary"><i data-feather="plus-circle"></i> Confirm Add</button>
            </div>
            </form>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('.delete-speaker').click(function() {
            var userID = $(this).data('speaker-id');
            $.ajax({
                type: 'POST',
                url: "<?php echo base_url('admin/delete_speaker'); ?>",
                data: {
                    'id': userID,
                },

                success: function(response) {
                    if (response == 1) {
                        var notyf = new Notyf({
                            duration: 10000,
                            position: {
                                x: 'right',
                                y: 'top',
                            }
                        });
                        // Display an error notification
                        notyf.success('Event Speaker Removed Successfully');
                    } else {
                        var notyf = new Notyf({
                            duration: 10000,
                            position: {
                                x: 'right',
                                y: 'top',
                            }
                        });
                        // Display an error notification
                        notyf.error('Error Removing Event Speaker');
                    }
                    setInterval('location.reload()', 2000);
                }
            })
        })
    })
</script>

<script>
    $(document).ready(function() {
        $('.delete-admin').click(function() {
            var userID = $(this).data('admin-id');
            $.ajax({
                type: 'POST',
                url: "<?php echo base_url('admin/delete_admin'); ?>",
                data: {
                    'id': userID,
                },

                success: function(response) {
                    if (response == 1) {
                        var notyf = new Notyf({
                            duration: 10000,
                            position: {
                                x: 'right',
                                y: 'top',
                            }
                        });
                        // Display an error notification
                        notyf.success('System Administrator Removed Successfully');
                    } else {
                        var notyf = new Notyf({
                            duration: 10000,
                            position: {
                                x: 'right',
                                y: 'top',
                            }
                        });
                        // Display an error notification
                        notyf.error('Error Removing System Administrator');
                    }
                    setInterval('location.reload()', 2000);
                }
            })
        })
    })
</script>

<script>
    $(document).ready(function() {
        $('.confirm-payment').click(function() {
            var userID = $(this).data('id');
            $.ajax({
                type: 'POST',
                url: "<?php echo base_url('admin/confirm_payment'); ?>",
                data: {
                    'user_id': userID,
                },

                success: function(response) {
                    if (response == 1) {
                        var notyf = new Notyf({
                            duration: 10000,
                            position: {
                                x: 'right',
                                y: 'top',
                            }
                        });
                        // Display an error notification
                        notyf.success('Participant Payment Details Confirmed');
                    } else {
                        var notyf = new Notyf({
                            duration: 10000,
                            position: {
                                x: 'right',
                                y: 'top',
                            }
                        });
                        // Display an error notification
                        notyf.error('Error Confirming Participant Payment');
                    }
                    setInterval('location.reload()', 2000);
                }
            })
        })
    })
</script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Datatables Responsive
        $("#datatables-reponsive").DataTable({
            responsive: true
        });
    });
</script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var ctx = document.getElementById("chartjs-dashboard-line").getContext("2d");
        var gradientLight = ctx.createLinearGradient(0, 0, 0, 225);
        gradientLight.addColorStop(0, "rgba(215, 227, 244, 1)");
        gradientLight.addColorStop(1, "rgba(215, 227, 244, 0)");
        var gradientDark = ctx.createLinearGradient(0, 0, 0, 225);
        gradientDark.addColorStop(0, "rgba(51, 66, 84, 1)");
        gradientDark.addColorStop(1, "rgba(51, 66, 84, 0)");
        // Line chart
        new Chart(document.getElementById("chartjs-dashboard-line"), {
            type: "line",
            data: {
                labels: ["Jan", "Feb", "Mar", "Apr", "May"],
                datasets: [{
                    label: "No. of Registrations",
                    fill: true,
                    backgroundColor: window.theme.id === "light" ? gradientLight : gradientDark,
                    borderColor: window.theme.primary,
                    data: [
                        2115,
                        1562,
                        1584,
                    ]
                }]
            },
            options: {
                maintainAspectRatio: false,
                legend: {
                    display: false
                },
                tooltips: {
                    intersect: false
                },
                hover: {
                    intersect: true
                },
                plugins: {
                    filler: {
                        propagate: false
                    }
                },
                scales: {
                    xAxes: [{
                        reverse: true,
                        gridLines: {
                            color: "rgba(0,0,0,0.0)"
                        }
                    }],
                    yAxes: [{
                        ticks: {
                            stepSize: 1000
                        },
                        display: true,
                        borderDash: [3, 3],
                        gridLines: {
                            color: "rgba(0,0,0,0.0)",
                            fontColor: "#fff"
                        }
                    }]
                }
            }
        });
    });
</script>

<!-- SHOW NOTIFY NOTIFICATION -->
<?php if ($this->session->flashdata('flash_error') != "") : ?>
    <script>
        // Create an instance of Notyf
        var notyf = new Notyf({
            duration: 10000,
            position: {
                x: 'right',
                y: 'top',
            }
        });
        // Display an error notification
        notyf.error('<?php echo $this->session->flashdata("flash_error"); ?>');
    </script>
<?php endif; ?>
<?php if ($this->session->flashdata('flash_message') != "") : ?>
    <script>
        // Create an instance of Notyf
        var notyf = new Notyf({
            duration: 10000,
            position: {
                x: 'right',
                y: 'top',
            }
        });
        // Display an success notification
        notyf.success('<?php echo $this->session->flashdata("flash_message"); ?>');
    </script>
<?php endif; ?>
</body>

</html>