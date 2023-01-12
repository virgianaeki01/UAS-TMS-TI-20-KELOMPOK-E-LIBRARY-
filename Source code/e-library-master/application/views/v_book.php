	<div class="container">
		<div class="bs-docs-section">
			<div class="row">
				<div class="col-xs-12">
					<div class="page-header">
						<h1 id="type">User</h1>
					</div>

                    <?php if($this->session->userdata("level") == "0"&&"1"){ ?>
                    <a href="<?php echo base_url('/book/add_book'); ?>">
                        <button class="btn btn-raised btn-primary">Add User</button>
                    </a>
                    <?php } ?>

					<div class="table-responsive">
                        <table id="hasil" class="table table-bordered" cellspacing="0" width="100%">
                            <tr>
                                <th>Id</th>
                                <th>Title</th>
                                <th>Date Of Birth</th>
                                <th>Action</th>
                            </tr>
							<?php 
                                //$id = 1;
                                foreach($users as $u){
                            ?>
                            <tr>
                                <td><?php echo $u->id ?></td>
                                <td><?php echo $u->name ?></td>
                                <td><?php echo $u->dob ?></td>
                                <td>
                                    <a href="<?php echo base_url()."book/detail?id=".$u->id; ?>">
                                        <button class="btn btn-raised btn-primary">Details</button>
                                    </a>
                                    <a href="<?php echo base_url()."book/delete?id=".$u->id; ?>">
                                        <button class="btn btn-raised btn-warning">Delete</button>
                                    </a>
                                </td>
                            </tr> 
                            <?php } ?>
                        </table>
                    </div>
				</div>
			</div>

			
		</div>
	</div>