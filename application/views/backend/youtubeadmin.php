<div class="container-fluid">
		<div class="row">
				<div class="col-md-12">
						<div class="card">
								<div class="card-header" data-background-color="purple">
										<h4 class="title">Youtube Video List</h4>
										<p class="category">All team youtube video</p>
								</div>
								<div class="card-content table-responsive">
										<table class="table">
												<thead class="text-primary">
													<th>Team Name</th>
													<th>Leader</th>
													<th>Collage</th>
                          <th>Youtube</th>
                          <th>Status</th>
                          <th>Action</th>
												</thead>
												<tbody>
														<?php foreach ($admin as $u) { ?>
														<tr>
															<td><?php echo $u->NAMA_TIM; ?></td>
															<td><?php echo $u->KETUA_TIM; ?></td>
															<td><?php echo $u->PT_TIM; ?></td>
                              <td><a href="<?php echo $u->LINK_YOUTUBE; ?>"><?php echo $u->LINK_YOUTUBE; ?></a></td>
                              <td><?php echo $u->PENGUMUMAN_YOUTUBE; ?></td>
                              <td>
																<a href="<?php echo base_url('youtube/edit/' . $u->ID_YOUTUBE); ?>"><button type="button" class="btn btn-primary btn-fill btn-sm" name="button">Edit<div class="ripple-container"></div></button></a>
															</td>
														</tr>
														<?php } ?>
												</tbody>
										</table>
								</div>
						</div>
				</div>
			</div>
	</div>
