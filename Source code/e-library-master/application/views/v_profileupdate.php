	<div class="container">
		<div class="bs-docs-section">
			<div class="row">
				<div class="col-xs-12">
					<div class="page-header">
						<h1 id="type">User</h1>
					</div>
				</div>
			</div>

			<div class="panel panel-primary">
			  	<div class="panel-heading">
			    	<h3 class="panel-title">Profile</h3>
			  	</div>
			  	<div class="panel-body">
			  		<div class="row">
				    	<div class="col-xs-3">
						    <div class="list-group">
						    	<div class="list-group-item">
						            <div class="row-picture col-xs-1">
						                <img class="circle " src="http://localmarketingplus.ca/wp-content/uploads/2015/02/blue-head.jpg" alt="icon" style="width: 200px; height: 200px;">
						            </div>
						            
					            </div>
					        </div>
					    </div>

					    <div class="col-xs-9">
						    <div class="list-group">
						    	<div class="list-group-item">
						    		<form action="" method="post"> 
						    			<div class="col-xs-12">
						            		<div class="col-xs-3">
						                		<h4 class="list-group-item-text">User Code :</h4>
						                	</div>
						                	<div class="col-xs-9">
						                		<h4 class="list-group-item-text"><?php echo $cd_user ?></h4>
						                	</div>
						            	</div>

						            	<div class="col-xs-12">
						            		<div class="col-xs-3">
						                		<h4 class="list-group-item-text">Name :</h4>
						                	</div>
						                	<div class="col-xs-9">
						                		<input type="text" class="form-control" id="inputName" name="name" placeholder="Name" value="<?php echo $name ?>">
						                		<?php echo form_error('name', '<div class="error fonterror">', '</div>'); ?>
						                	</div>
						            	</div>

						            	<div class="col-xs-12">
						            		<div class="col-xs-3">
						                		<h4 class="list-group-item-text">Address :</h4>
						                	</div>
						                	<div class="col-xs-9">
						                		<input type="text" class="form-control" id="inputName" name="address" placeholder="Address" value="<?php echo $address ?>">
						                		<?php echo form_error('address', '<div class="error fonterror">', '</div>'); ?>
						                	</div>
						            	</div>

						            	<div class="col-xs-12">
						            		<div class="col-xs-3">
						                		<h4 class="list-group-item-text">Birthday :</h4>
						                	</div>
						                	<div class="col-xs-9">
						                		<input type="date" class="form-control" id="inputName" name="birthday" value="<?php echo $birthday ?>">
						                		<?php echo form_error('birthday', '<div class="error fonterror">', '</div>'); ?>
						                	</div>
						            	</div>

						            	<div class="col-xs-12">
						            		<div class="col-xs-3">
						                		<h4 class="list-group-item-text">Email :</h4>
						                	</div>
						                	<div class="col-xs-9">
						                		<input type="email" class="form-control" id="inputName" name="email" placeholder="Email" value="<?php echo $email ?>">
						                	</div>
						            	</div>

						            	<div class="col-xs-12">
						            		<div class="col-xs-3">
						                		<h4 class="list-group-item-text">Password :</h4>
						                	</div>
						                	<div class="col-xs-9">
						                		<input type="password" class="form-control" id="inputName" name="pass" placeholder="Password" value="">
						                		<?php echo form_error('pass', '<div class="error fonterror">', '</div>'); ?>
						                	</div>
						            	</div>

						            	<div class="col-xs-offset-10">
						            		<input type="submit" name="submit" value="Update" class ="btn btn-raised btn-primary">
                						</div>
                					</form>
					            </div>
					        </div>
					    </div>
					</div>
			  	</div>
			</div>
		</div>
	</div>