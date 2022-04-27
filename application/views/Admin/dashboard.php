<main class="content">
				<div class="container-fluid p-0">

					<div class="row mb-2 mb-xl-3">
						<div class="col-auto d-none d-sm-block">
							<h3><strong>Analytics</strong> Dashboard</h3>
						</div>

						<div class="col-auto ms-auto text-end mt-n1">
							<a href="#" data-bs-toggle="modal" data-bs-target="#inviteParticipant" class="btn btn-light bg-white me-2">Invite Someone</a>
							<a href="#" data-bs-toggle="modal" data-bs-target="#addParticipant" class="btn btn-primary"><i data-feather="plus-circle"></i> Register Participant</a>
						</div>
					</div>
					<div class="row">
						<div class="col-xl-6 col-xxl-5 d-flex">
							<div class="w-100">
								<div class="row">
									<div class="col-sm-6">
										<div class="card">
											<div class="card-body">
												<div class="row">
													<div class="col mt-0">
														<h5 class="card-title">Participants</h5>
													</div>

													<div class="col-auto">
														<div class="stat text-primary">
															<i class="align-middle" data-feather="users"></i>
														</div>
													</div>
												</div>
												<h1 class="mt-1 mb-3"><?php echo $this->db->get('users')->num_rows() ?></h1>
												<div class="mb-0">
													<span class="badge badge-primary-light"> <i class="mdi mdi-arrow-bottom-right"></i>Confirmed Participants </span>
												</div>
											</div>
										</div>
										<div class="card">
											<div class="card-body">
												<div class="row">
													<div class="col mt-0">
														<h5 class="card-title">System Admins</h5>
													</div>

													<div class="col-auto">
														<div class="stat text-primary">
															<i class="align-middle" data-feather="users"></i>
														</div>
													</div>
												</div>
												<h1 class="mt-1 mb-3"><?php echo $this->db->get('admin')->num_rows() ?></h1>
												<div class="mb-0">
													<span class="badge badge-primary-light"> <i class="mdi mdi-arrow-bottom-right"></i>Active System Administrators </span>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="card">
											<div class="card-body">
												<div class="row">
													<div class="col mt-0">
														<h5 class="card-title">Payments</h5>
													</div>

													<div class="col-auto">
														<div class="stat text-primary">
															<i class="align-middle" data-feather="dollar-sign"></i>
														</div>
													</div>
												</div>
												<h1 class="mt-1 mb-3">€ <?php echo number_format($this->crud_model->get_total_balance(),2) ?></h1>
												<div class="mb-0">
													<span class="badge badge-success-light"> <i class="mdi mdi-arrow-bottom-right"></i>Bank transfer and Online Payments</span>
												</div>
											</div>
										</div>
										<div class="card">
											<div class="card-body">
												<div class="row">
													<div class="col mt-0">
														<h5 class="card-title">Pending</h5>
													</div>

													<div class="col-auto">
														<div class="stat text-primary">
															<i class="align-middle" data-feather="loader"></i>
														</div>
													</div>
												</div>
												<h1 class="mt-1 mb-3"><?php echo $this->crud_model->get_pending_registrations() ?></h1>
												<div class="mb-0">
													<span class="badge badge-danger-light"> <i class="mdi mdi-arrow-bottom-right"></i> Pending Participant Registrations</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-xl-6 col-xxl-7">
							<div class="card flex-fill w-100">
								<div class="card-header">
									<div class="float-end">
										<form class="row g-2">
											<div class="col-auto">
												<select class="form-select form-select-sm bg-light border-0">
													<option>Jan</option>
													<option value="1">Feb</option>
													<option value="2">Mar</option>
													<option value="3">Apr</option>
												</select>
											</div>
											<div class="col-auto">
												<input type="text" class="form-control form-control-sm bg-light rounded-2 border-0" style="width: 100px;"
													placeholder="Search..">
											</div>
										</form>
									</div>
									<h5 class="card-title mb-0">Recent Registration</h5>
								</div>
								<div class="card-body pt-2 pb-3">
									<div class="chart chart-sm">
										<canvas id="chartjs-dashboard-line"></canvas>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</main>
