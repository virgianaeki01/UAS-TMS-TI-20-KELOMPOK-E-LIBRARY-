	<div class="container">
		<div class="bs-docs-section">
			<div class="row">
				<div class="col-xs-12">
					<div class="page-header">
						<h1 id="type">Operator</h1>
					</div>

					<div class="table-responsive">
                        <table id="hasil" class="table table-bordered" cellspacing="0" width="100%">
                            <tr>
                                <th>Id</th>
                                <th>User Code</th>
                                <th>Name</th>
                                <th>Address</th>
                                <th>Email</th>
                                <th>Birthday</th>
                                <th>Register Date</th>
                                <th>Level</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
							<?php 
                                //$id = 1;
                                foreach($operator as $u){ 
                            ?>
                            <tr>
                                <td><?php echo $u->id ?></td>
                                <td><?php echo $u->cd_user ?></td>
                                <td><?php echo $u->name ?></td>
                                <td><?php echo $u->address ?></td>
                                <td><?php echo $u->email ?></td>
                                <td><?php echo $u->birthday ?></td>
                                <td><?php echo $u->regisdate ?></td>
                                <td><?php echo $u->level ?></td>
                                <td><?php echo $u->status ?></td>
                                <td>
                                    <a href="<?php if($u->status == "0"){echo base_url()."operator/verify?id=".$u->id;} ?>">
                                        <button <?php if($u->status == "1"){echo "disabled";} ?> class="btn btn-raised btn-primary">Verify</button>
                                    </a>

                                    <a href="<?php if($this->session->userdata("level") == "0"){echo base_url()."admin/uplevel?id=".$u->id;} ?>">
                                        <button <?php if(($u->level == "0")||($this->session->userdata("level") >= $u->level)){echo "disabled";} ?> class="btn btn-raised btn-primary">Uplevel</button>
                                    </a>
                                    
                                    <a href="<?php base_url(); ?>operator/delete?id=<?php echo $u->id ?>">
                                        <button <?php if(($this->session->userdata("level") >= $u->level)||($u->id == $this->session->userdata("id"))){echo "disabled";} ?> class="btn btn-raised btn-danger" >Delete</button>
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