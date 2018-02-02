<div class="container-fluid">
		<div class="row">
				<div class="col-md-12">
						<div class="card">
								<div class="card-header" data-background-color="purple">
										<h4 class="title">Document List</h4>
										<p class="category">All team document</p>
								</div>
								<div class="card-content table-responsive">
										<table class="table">
												<thead class="text-primary">
													<th>Team Name</th>
													<th>Leader</th>
													<th>Collage</th>
													<th>Contact</th>
                          <th>Document</th>
                          <th>Status</th>
                          <th>Action</th>
												</thead>
												<tbody>
														<?php foreach ($admin as $u) { ?>
														<tr>
															<td><?php echo $u->NAMA_TIM; ?></td>
															<td><?php echo $u->KETUA_TIM; ?></td>
															<td><?php echo $u->PT_TIM; ?></td>
															<td><?php echo '0' . $u->HP_TIM?></td>
                              <td><a href="<?php echo base_url('img/doc/' . $u->NAMA_DOC); ?>"><?php echo $u->NAMA_DOC; ?></a></td>
                              <td><?php echo $u->PENGUMUMAN_DOC; ?></td>
                              <td>
																<a href="<?php echo base_url('doc/edit/' . $u->USERNAME_DOC); ?>"><button type="button" class="btn btn-primary btn-fill btn-sm" name="button">Edit<div class="ripple-container"></div></button></a>
																<a href="<?php echo base_url('doc/delete/' . $u->USERNAME_USER); ?>"><button type="button" class="btn btn-danger btn-fill btn-sm" name="button">Delete<div class="ripple-container"></div></button></a>
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
