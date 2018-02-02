<div class="container-fluid">
		<div class="row">
				<div class="col-md-12">
						<div class="card">
								<div class="card-header" data-background-color="purple">
										<h4 class="title">Team Member List</h4>
										<p class="category">Your team member for Gubu Fest</p>
								</div>
								<div class="card-content table-responsive">
										<table class="table">
												<thead class="text-primary">
													<th>Member Name</th>
													<th>Collage</th>
													<th>NIM</th>
												</thead>
												<tbody>
														<?php foreach ($tim as $u) { ?>
														<tr>
															<td><?php echo $u->KETUA_TIM; ?></td>
															<td><?php echo $u->PT_TIM; ?></td>
															<td><?php echo $u->NIM_TIM; ?></td>
														</tr>
														<?php } ?>

														<?php foreach ($anggota as $u ) { ?>
														<tr>
															<td><?php echo $u->NAMA_ANGGOTA; ?></td>
															<td><?php echo $u->PT_ANGGOTA; ?></td>
															<td><?php echo $u->NIM_ANGGOTA; ?></td>
														</tr>
														<?php } ?>
												</tbody>
										</table>
								</div>
						</div>
				</div>
			</div>
	</div>
